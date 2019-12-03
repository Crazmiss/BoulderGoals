<?php

use App\BoulderGrade;
use Illuminate\Database\Seeder;

class CreateBoulderGradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BoulderGrade::truncate();
        BoulderGrade::insert([
            ["name" => "3"],
            ["name" => "3+"],
            ["name" => "4"],
            ["name" => "4+"],
            ["name" => "5"],
            ["name" => "5+"],
            ["name" => "6A"],
            ["name" => "6A+"],
            ["name" => "6B"],
            ["name" => "6B+"],
            ["name" => "6C"],
            ["name" => "6c+"],
            ["name" => "7A"],
            ["name" => "7A+"],
            ["name" => "7B"],
            ["name" => "7B+"],
            ["name" => "7C"],
            ["name" => "7C+"],
            ["name" => "8A"],
            ["name" => "8A+"],
            ["name" => "8B"],
            ["name" => "8B+"],
            ["name" => "8C"],
            ["name" => "8C+"],
            ["name" => "9A"]
        ]);
    }
}
