<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Example data to seed
      DB::table('logins')->insert([
        'username' => 'user',
        'password' => Hash::make('user'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ]);
    }
}
