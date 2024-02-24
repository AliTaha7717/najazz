<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {     Admin::truncate();
       Admin::create([
           'name'=>'Moh Masar',
           'password'=>Hash::make('15131210'),
           'email'=>'aass7741513@gmail.com',

       ]);
        Admin::create([
            'name'=>'Ali Taha',
            'password'=>Hash::make('15131210'),
            'email'=>'ssaa733058723@gmail.com',

        ]);
    }
}
