<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'instructor',
            'email'=>'instructor@gmail.com',
            'password'=>Hash::make(123456789)
        ]);
        $user->assignRole('instructor');

        $user = User::create([
            'name'=>'aprendiz',
            'email'=>'aprendiz@gmail.com',
            'password'=>Hash::make('SENAaprendiz2021')
        ]);
        $user->assignRole('instructor');
    }
}
