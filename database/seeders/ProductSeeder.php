<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            ['product_name'=>'Pen','price'=>10,'uom'=>'pcs'],
            ['product_name'=>'Notebook','price'=>50,'uom'=>'pcs'],
            ['product_name'=>'Pencil','price'=>5,'uom'=>'pcs'],
            ['product_name'=>'Eraser','price'=>3,'uom'=>'pcs'],
            ['product_name'=>'Marker','price'=>25,'uom'=>'pcs'],
            ['product_name'=>'Scale','price'=>15,'uom'=>'pcs'],
            ['product_name'=>'Bag','price'=>700,'uom'=>'pcs'],
            ['product_name'=>'Bottle','price'=>150,'uom'=>'pcs'],
            ['product_name'=>'Chair','price'=>1200,'uom'=>'pcs'],
            ['product_name'=>'Table','price'=>3000,'uom'=>'pcs'],
        ]);
    }
}

