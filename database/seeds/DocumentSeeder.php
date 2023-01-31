<?php

use Illuminate\Database\Seeder;
use App\DocumentType;
use App\Document;
use App\User;
use Carbon\Carbon;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        $documentType = DocumentType::all();
        $user = User::all();
        $todayDate = Carbon::today()->toDateString();
        $status = ['pending','received','submitted','completed'];

        for($i=0;$i<300;$i++)
        {
            $document = new Document;
            $document->name = $faker->sentence(3, true);
            $document->author = $user[rand(0,10)]->fname;
            $document->author = $faker->name;
            $document->comment = $faker->word;
            $document->status =$status[rand(0,3)];
            $document->address = $faker->sentence(4, true);
            $document->date_of_arrival = $todayDate;
            $document->barcode = $this->generateRandomCode(10);
            $document->date_written = $todayDate;
            $document->user_id = $user[rand(0,10)]->id;
            $document->document_type_id = $documentType[rand(0,4)]->id;
            $document->save();
        }


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
