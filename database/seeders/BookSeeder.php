<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = new Book();
        $book->title = "Laravel de cero a diez";
        $book->subtitle = "Aprende a programar en Laravel";
        $book->numberPage = 350;
        $book->language = "Español";
        $book->description = "EL libro te enseña a aprender laravel desde cero";
        $book->status = "Activo";
        $book->price = 20;
        $book->gender_id = 3;
        $book->editorial_id = 1;
        $book->save();

        $book2 = new Book();
        $book2->title = "PHP basico";
        $book2->subtitle = "Aprende a programar en PHP";
        $book2->numberPage = 280;
        $book2->language = "Español";
        $book2->description = "EL libro te enseña a aprender PHP desde cero";
        $book2->status = "Activo";
        $book2->price = 12;
        $book2->gender_id = 1;
        $book2->editorial_id = 2;
        $book2->save();

    }
}
