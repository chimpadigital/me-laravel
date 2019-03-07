<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Country;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name'=>'Argentina',
            'code'=>'ar',
        ]);

        Country::create([
            'name'=>'Costa Rica',
            'code'=>'cr',
        ]);
        // $this->call(UsersTableSeeder::class);
        User::create([
	        'name' => 'admin',
	        'email' => 'admin@admin.com',
	        'email_verified_at' => now(),
	        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
	        'remember_token' => Str::random(10),
    	]);
    }
}
