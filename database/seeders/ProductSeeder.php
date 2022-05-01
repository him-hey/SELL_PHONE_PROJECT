<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // product seeder
        $data = [
            // products
            [
                'product_name' => 'Iphone',
                'product_price' => 1000,
                'category_id' => 1,
                'product_img' => 'images/software1.jpeg',
                'product_des' => 'This is my description',
            ],
            [
                'product_name' => 'Bookmac',
                'category_id' => 1,
                'product_price' => 1000,
                'product_img' => 'images/software2.png',
                'product_des' => 'This is my description',
            ],
            [
                'product_name' => 'Tablate',
                'category_id' => 1,
                'product_price' => 1000,
                'product_img' => 'images/software3.jpeg',
                'product_des' => 'This is my description',
            ],
        ];

        foreach($data as $dataRow){
            Product::create($dataRow);
        }
    }
}
