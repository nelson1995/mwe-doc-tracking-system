<?php

namespace App\Http\Controllers;

use App\Document;
use App\DocumentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use lesha724\documentviewer\GoogleDocumentViewer;

class DocumentStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session(['title'=>'Document Storage']);
        $documentTypes = DocumentType::all();
        return view('document-storage.index',[
            'documentTypes'=>$documentTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documents = Document::query()->where('document_type_id',$id)->get();
        $documentTypes = DocumentType::all();

        return view('document-storage.show',[
            'documentTypes'=>$documentTypes,
            'documents'=>$documents]);
    }


    /* 
        view the document
    */
    public function viewDocument($id)
    {
        $documentTypes = DocumentType::all();
        $document = Document::query()->where('id',$id)->first();

        return view('document-storage.view',[
            "documentTypes"=>$documentTypes,
            "file_path" =>$document->getFile('uploaded-documents'),
            "extension"=>$document->format,
            "apiKey"=> Config('services.googledrive.key'),
        ]);
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
}
