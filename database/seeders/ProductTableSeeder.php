<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Model::unguard();
        Product::insert([

            ['name'=>'Car','description'=>'This is Toyota','price'=>1120000],
            ['name'=>'Motor Bike','description'=>'This is Motor Bike','price'=>100000],

        ]);
    }
}
