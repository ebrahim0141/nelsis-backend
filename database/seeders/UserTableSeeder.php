<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();
        User::insert([
            ['name'=>'Admin', 'email'=>'admin@gmail.com', 'password'=>'$2y$12$uSu.SY1DfPxDpWohVnB8juT/tuvsouNEpVKAXUGPmfV4j0qrxJfIq']//123456
        ]);
    }
}
