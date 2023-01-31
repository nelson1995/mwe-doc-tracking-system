<?php

use App\DocumentType;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documentType1 = new DocumentType();
        $documentType1->type = "Graduate training";
        $documentType1->save();

        $documentType2 = new DocumentType();
        $documentType2->type = "Bids";
        $documentType2->save();

        $documentType3 = new DocumentType();
        $documentType3->type = "Job Applications";
        $documentType3->save();

        $documentType4 = new DocumentType();
        $documentType4->type = "Internships";
        $documentType4->save();

        $documentType5 = new DocumentType();
        $documentType5->type = "Consultancy";
        $documentType5->save();
    }
}
