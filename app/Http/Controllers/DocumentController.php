<?php
namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Document;
use App\DocumentType;
use App\DocumentUser;
use setasign\Fpdi\Fpdi;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Generator;
use setasign\Fpdi\PdfReader\PageBoundaries;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Spatie\TemporaryDirectory\TemporaryDirectory;
use SebastianBergmann\ResourceOperations\generate;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */


    public function index()
    {
        Session(['title'=>'list documents']);
        $documents = Document::all();
        return view('document-manager.index',[
            'documents'=>$documents
        ]);
    }

    public function received()
    {

        Session(['title' => 'Received Documents']);
        $documentType = DocumentType::all();
        $userdocs = Auth::user()->document_users; // DocumentUser::where('user_id', Auth::id())->get();
        // foreach ($userdocs as $user_doc) {
        //     $user_doc->document;
        // }
        $users = User::all();
        // $documents = Document::where('status','received')->get();
        return view('documents.received')->with(['documents'=>$userdocs, "documentType"=>$documentType, 'users'=>$users]);
    }

    public function submitted()
    {
        Session(['title' => 'Submitted Documents']);
        $documentType = DocumentType::all();
        $users = User::all();
        $documents = Document::where('status','submitted')->orderBy('created_at', 'desc')->get();
        return view('documents.submitted')->with(['documents'=>$documents, "documentType"=>$documentType, 'users'=>$users]);
    }

    public function pending()
    {
        Session(['title' => 'Pending Documents']);
        $documents = Document::where('status','pending')->orderBy('created_at', 'desc')->get();
        $documentType = DocumentType::all();
        $users = User::all();
        return view('documents.pending')->with(['documents'=>$documents, "documentType"=>$documentType, 'users'=>$users]);
    }

    public function completed()
    {
        Session(['title' => 'Completed Documents']);
        $documents = Document::where('status','completed')->get();
        $users = User::all();
        $documentType = DocumentType::all();
        return view('documents.completed')->with(['documents'=>$documents, "documentType"=>$documentType, 'users'=>$users]);
    }

    public function viewDocument($id)
    {
        $documentType = DocumentType::all();
        $document = Document::query()->where('id',$id)->first();
        $users = User::all();
        return view('documents.view',[
            "users"=>$users,
            "documentType"=>$documentType,
            "file_path" =>$document->getFile('uploaded-documents'),
            "extension"=>$document->format
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documentType = DocumentType::all();
        Session(['title'=>'Create document']);
        return view('documents.upload',["documentType"=>$documentType]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $documentType = DocumentType::query()->where('type',$request->typeofdoc)->first();
        $document = new Document;
        $document->user_id = 1;
        $document->document_type_id=$documentType->id;
        $document->name = $request->nameOfDoc;
        $document->address= $request->address;
        $document->author = $request->author;
        $document->status = $request->status;
        $document->comment = $request->comment;
        $document->date_of_arrival = $request->dateofarrival;
        $document->date_written = $request->datewritten;
        $document->format = $request->file('docFile')->extension();
        $document->save();
        
        if($request->hasFile('docFile') && $request->file('docFile')->isValid())
        {
            $document->addMediaFromRequest('docFile')->toMediaCollection('uploaded-documents');
        }

        // embed Qr code to pdf document
        $this->embedQrCode($document);

        return redirect()->route('pending_documents');
    }

    public function embedQrCode(Document $document)
    {   
        // create temporary directory
        $temporaryDirectory=(new TemporaryDirectory())->name($document->name)->location('storage/')->create();
        $filePath = strval($document->getFile('uploaded-documents'));
        $filePath = substr($filePath,22,strlen($filePath));
        $file = fopen($filePath,'rb');
        $pdf = new Fpdi();
        $pdf->AddPage();
        $pageCount = $pdf->setSourceFile($file);
        for($i = 1;$i<=$pageCount;$i++){
            $pageId = $pdf->importPage($i,PageBoundaries::MEDIA_BOX);
            $pdf->useImportedPage($pageId);
            $pdf->useTemplate($pageId); 
            $pdf->SetXY(160, 248);
            $qrPath = 'storage/'.$document->name.'/qrcode.png';
            QrCode::size(100)->format('png')->generate($document->name,$qrPath);
            $pdf->Image($qrPath,null,null,30,30,'png');
        }     
        $fileName ='storage/'.$document->name.'/'.$document->name.'.pdf'; 
        $pdf->Output($fileName,'F');

        $document->addMedia($fileName)->toMediaCollection('uploaded-documents');
        $temporaryDirectory->delete();
    }

    public function send(Request $request)
    {
       $document_id = $request->document_id;

       $document = Document::find($document_id);
       $document->status = "submitted";
       $document->save();

       $selected_user_ids = $request->user_ids;
       foreach($selected_user_ids as $user_id){
            $new = new DocumentUser;
            $new->document_id = $document_id;
            $new->user_id = $user_id;
            $new->status = "not-read";
            $new->save();
       }

        return redirect()->route('submitted_documents');


    }

    public function get_doc_by_id($id)
    {
        $document = Document::find($id);
        return response()->json($document);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function generateRandomCode($length = 10) {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
