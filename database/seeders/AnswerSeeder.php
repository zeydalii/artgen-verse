<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        ////////////////////////////////  FIRST TEST /////////////////////////////////

        //////////////////// AREA 1 //////////////////////

        Answer::create([
            'question_id' => '1',
            'jawaban' => 'Kubisme',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '1',
            'jawaban' => 'Impresionisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '2',
            'jawaban' => 'Romantisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '2',
            'jawaban' => 'Realisme',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '3',
            'jawaban' => 'Naturalisme',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '3',
            'jawaban' => 'Surealisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '4',
            'jawaban' => 'Naturalisme',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '4',
            'jawaban' => 'Kubisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '5',
            'jawaban' => 'Abstrak Ekspresionisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '5',
            'jawaban' => 'Surealisme',
            'benar' => 0,
        ]);

        //////////////////// AREA 2 //////////////////////

        Answer::create([
            'question_id' => '6',
            'jawaban' => 'Salvador Dali',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '6',
            'jawaban' => 'Van Gogh',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '7',
            'jawaban' => 'Van Gogh',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '7',
            'jawaban' => 'Pablo Picasso',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '8',
            'jawaban' => 'Raden Saleh',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '8',
            'jawaban' => 'Affandi',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '9',
            'jawaban' => 'Leonardo Da Vinci',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '9',
            'jawaban' => 'Pablo Picasso',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '10',
            'jawaban' => 'Pablo Picasso',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '10',
            'jawaban' => 'Pollock',
            'benar' => 1,
        ]);

        //////////////////// AREA 3 //////////////////////

        Answer::create([
            'question_id' => '11',
            'jawaban' => 'Naturalisme',
            'benar' => 1,
        ]);
        
        Answer::create([
            'question_id' => '11',
            'jawaban' => 'Surealisme',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '12',
            'jawaban' => 'Dadaisme',
            'benar' => 1,
        ]);
        
        Answer::create([
            'question_id' => '12',
            'jawaban' => 'Neoklasik',
            'benar' => 0,
        ]);
        
        Answer::create([
            'question_id' => '13',
            'jawaban' => 'Ekspresionisme',
            'benar' => 0,
        ]);
        
        Answer::create([
            'question_id' => '13',
            'jawaban' => 'Surealisme',
            'benar' => 1,
        ]);
        
        Answer::create([
            'question_id' => '14',
            'jawaban' => 'Naturalisme',
            'benar' => 0,
        ]);
        
        Answer::create([
            'question_id' => '14',
            'jawaban' => 'Realisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '15',
            'jawaban' => 'Ekspresionisme',
            'benar' => 1,
        ]);
        
        Answer::create([
            'question_id' => '15',
            'jawaban' => 'Naturalisme',
            'benar' => 0,
        ]);

        ////////////////////////////////  LAST TEST /////////////////////////////////

        //////////////////// AREA 1 //////////////////////

        Answer::create([
            'question_id' => '16',
            'jawaban' => 'Abstrak Ekspresionisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '16',
            'jawaban' => 'Surealisme',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '17',
            'jawaban' => 'Kubisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '17',
            'jawaban' => 'Impresionisme',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '18',
            'jawaban' => 'Romantisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '18',
            'jawaban' => 'Realisme',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '19',
            'jawaban' => 'Romantisme',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '19',
            'jawaban' => 'Neoklasik',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '20',
            'jawaban' => 'Naturalisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '20',
            'jawaban' => 'Surealisme',
            'benar' => 0,
        ]);

        //////////////////// AREA 2 //////////////////////

        Answer::create([
            'question_id' => '21',
            'jawaban' => 'Salvador Dali',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '21',
            'jawaban' => 'Van Gogh',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '22',
            'jawaban' => 'Van Gogh',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '22',
            'jawaban' => 'Edvard Munch',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '23',
            'jawaban' => 'Yayoi Kusama',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '23',
            'jawaban' => 'Affandi',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '24',
            'jawaban' => 'Leonardo Da Vinci',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '24',
            'jawaban' => 'Picasso',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '25',
            'jawaban' => 'Affandi',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '25',
            'jawaban' => 'Raden Saleh',
            'benar' => 0,
        ]);

        //////////////////// AREA 3 //////////////////////

        Answer::create([
            'question_id' => '26',
            'jawaban' => 'Ekspresionisme',
            'benar' => 1,
        ]);
        
        Answer::create([
            'question_id' => '26',
            'jawaban' => 'Surealisme',
            'benar' => 0,
        ]);

        Answer::create([
            'question_id' => '27',
            'jawaban' => 'Naturalisme',
            'benar' => 1,
        ]);
        
        Answer::create([
            'question_id' => '27',
            'jawaban' => 'Realisme',
            'benar' => 0,
        ]);
        
        Answer::create([
            'question_id' => '28',
            'jawaban' => 'Dadaisme',
            'benar' => 0,
        ]);
        
        Answer::create([
            'question_id' => '28',
            'jawaban' => 'Neoklasik',
            'benar' => 1,
        ]);
        
        Answer::create([
            'question_id' => '29',
            'jawaban' => 'Ekspresionisme',
            'benar' => 0,
        ]);
        
        Answer::create([
            'question_id' => '29',
            'jawaban' => 'Naturalisme',
            'benar' => 1,
        ]);

        Answer::create([
            'question_id' => '30',
            'jawaban' => 'Naturalisme',
            'benar' => 1,
        ]);
        
        Answer::create([
            'question_id' => '30',
            'jawaban' => 'Surealisme',
            'benar' => 0,
        ]);
        
    }
}
