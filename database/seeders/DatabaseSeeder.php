<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use App\Models\Agency;
use Illuminate\Support\Str;
use App\Models\UserProvince;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@site.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('password');
        $user->remember_token = Str::random(10);
        $user->save();

       // Agency::factory()->count(10)->create();
    }
}
