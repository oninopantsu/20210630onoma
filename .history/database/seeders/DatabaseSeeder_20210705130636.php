<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Contact::factory(35)->create();
    }
    DB::table('contacts')->insert($param);
    $param = [
    'lastname' => 'required',
    'firstname' => 'required',
    'gender' => 'required',
    'email' => 'required',
    'postcode' => 'required|max:8',
    'address' => "required",
    'buildingname' => '',
    'opinion' => 'required|max:8',

    ]
}
