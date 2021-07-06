<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ContactController;

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
        $param = [
        'lastname' => 'required',
        'firstname' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'postcode' => 'required|max:8',
        'address' => "required",
        'opinion' => 'required|max:',
    
    ];
    DB::table('contacts')->insert($param);
    }
}
