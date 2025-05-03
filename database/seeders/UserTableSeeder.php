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
            ['name'=>'Admin', 'email'=>'admin@gmail.com', 'password'=>'$2y$10$seezxLnyzbnYgansCYWs2OcPNDwRSZ4M3oUjoxj.aPBzNOQ34jkla']//123456
        ]);
    }
}
