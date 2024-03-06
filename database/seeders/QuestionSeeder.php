<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         ////////////////////////////////  FIRST TEST /////////////////////////////////

        //////////////////// AREA 1 //////////////////////

        Question::create([
            'soal' => 'assets/test/first/impresionisme2-p1.jpg',
            'area' => '1',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'assets/test/first/romantisme2-p5.jpg',
            'area' => '1',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'assets/test/first/surealisme2-p2.jpg',
            'area' => '1',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'assets/test/first/kubisme2-p5.jpg',
            'area' => '1',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'assets/test/first/abstrak2-p1.jpg',
            'area' => '1',
            'tes_ke' => '1',
        ]);

        //////////////////// AREA 2 //////////////////////

        Question::create([
            'soal' => 'assets/test/first/vincent-art6.jpg',
            'area' => '2',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'assets/test/first/pablo-art4.jpg',
            'area' => '2',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'assets/test/first/raden-art4.jpg',
            'area' => '2',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'assets/test/first/renaisans-1.jpg',
            'area' => '2',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'assets/test/first/jackson-art2.jpg',
            'area' => '2',
            'tes_ke' => '1',
        ]);

        //////////////////// AREA 3 //////////////////////

        Question::create([
            'soal' => 'Aliran dengan nuansa pemandangan alam, memiliki palet warna yang cenderung kebumian, merupakan aliran seni rupa apa ya?',
            'area' => '3',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'Gerakan yang banyak menampilkan patung dan lukisan yang menampilkan dewa-dewi, pahlawan, atau adegan mitologis, dengan menonjolkan warna-warna putih, krem, adalah gerakan dari aliran?',
            'area' => '3',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'Lukisannya menggambarkan alam mimpi, semua objeknya tidak masuk akal, kuda berkepala ayam, manusia berkaki t-rex, dan lain-lain. menurut kalian aliran apakah lukisan yang seperti itu?',
            'area' => '3',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'Seniman dari aliran ini cenderung menggambarkan kehidupan sehari-hari dan kondisi sosial, dengan fokus pada detail yang akurat dan penggambaran yang jujur. aliran seni apakah itu?',
            'area' => '3',
            'tes_ke' => '1',
        ]);

        Question::create([
            'soal' => 'Aliran seni yang menekankan pada perasaan individu, ekspresi emosional, dan sering menggunakan warna-warna yang tidak realistis atau ekspresif, kadang-kadang dengan bentuk yang berlebihan dan distorsi, adalah aliran...',
            'area' => '3',
            'tes_ke' => '1',
        ]);

        ////////////////////////////////  LAST TEST /////////////////////////////////

        //////////////////// AREA 1 //////////////////////

        Question::create([
            'soal' => 'assets/test/last/abstrak2-p3.png',
            'area' => '1',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'assets/test/last/kubisme2-p6.jpg',
            'area' => '1',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'assets/test/last/romantisme2-p5.jpgg',
            'area' => '1',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'assets/test/last/neoklasik2-p5.jpg',
            'area' => '1',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'assets/test/last/naturalism_2.jpg',
            'area' => '1',
            'tes_ke' => '2',
        ]);

        //////////////////// AREA 2 //////////////////////

        Question::create([
            'soal' => 'assets/test/last/salvador-art1.jpg',
            'area' => '2',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'assets/test/last/ekspresionisme2-p2.jpg',
            'area' => '2',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'assets/test/last/kontemporer-1.png',
            'area' => '2',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'assets/test/last/leonardo-art5.jpg',
            'area' => '2',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'assets/test/last/affandi-art3.jpg',
            'area' => '2',
            'tes_ke' => '2',
        ]);

        //////////////////// AREA 3 //////////////////////

        Question::create([
            'soal' => 'Lukisannya menggambarkan alam mimpi, semua objeknya tidak masuk akal, kuda berkepala ayam, manusia berkaki t-rex, dan lain-lain. menurut kalian aliran apakah lukisan yang seperti itu?',
            'area' => '3',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'Seniman dari aliran ini cenderung menggambarkan kehidupan sehari-hari dan kondisi sosial, dengan fokus pada detail yang akurat dan penggambaran yang jujur. aliran seni apakah itu?',
            'area' => '3',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'Gerakan yang banyak menampilkan patung dan lukisan yang menampilkan dewa-dewi, pahlawan, atau adegan mitologis, dengan menonjolkan warna-warna putih, krem, adalah gerakan dari aliran?',
            'area' => '3',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'Aliran seni yang menekankan pada perasaan individu, ekspresi emosional, dan sering menggunakan warna-warna yang tidak realistis atau ekspresif, kadang-kadang dengan bentuk yang berlebihan dan distorsi, adalah aliran...',
            'area' => '3',
            'tes_ke' => '2',
        ]);

        Question::create([
            'soal' => 'Aliran dengan nuansa pemandangan alam, memiliki palet warna yang cenderung kebumian, merupakan aliran seni rupa apa ya?',
            'area' => '3',
            'tes_ke' => '2',
        ]);

    }
}
