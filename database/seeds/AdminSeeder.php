<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminEmail = 'admin@admin.com';
        if (User::where('email', $adminEmail)->count() == 0) { 
            User::create([
                'first_name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('admin'),
                'birthdate' => Carbon::now()->subYears(22),
                'gender' => 'M',
                'city' => 'Dschang',
                'country' => 'CMR'
            ]);
        }
    }
}
