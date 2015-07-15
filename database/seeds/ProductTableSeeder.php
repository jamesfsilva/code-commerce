<?php
/**
 * Created by PhpStorm.
 * User: InBless
 * Date: 09/07/2015
 * Time: 01:23
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;

class ProductTableSeeder extends Seeder {

    public function run()
    {
        DB::table('products')->truncate();
        factory(CodeCommerce\Product::class, 15)->create();
    }
}