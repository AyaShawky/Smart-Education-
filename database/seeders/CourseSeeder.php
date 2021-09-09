<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('courses')->insert([
        //     'name' => String::random(5),
        //     'subTitle' => String::random(5),
        //     'description'=> string::random(5),
        //     'price' => integerValue(5),

        // ]);


    }
}
