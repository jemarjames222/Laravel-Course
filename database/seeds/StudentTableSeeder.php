<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('students')->insert([
            'first_name' => 'Jemar James',
            'middle_name' => 'Marimon',
            'last_name' => 'Jumao-as'
        ]);

         DB::table('students')->insert([
            'first_name' => 'Leo',
            'middle_name' => 'Eliccion',
            'last_name' => 'Cabanig'
        ]);

         DB::table('students')->insert([
            'first_name' => 'Crystal Jane',
            'middle_name' => 'Taganahan',
            'last_name' => 'Cagadas'
        ]);
    }
}
