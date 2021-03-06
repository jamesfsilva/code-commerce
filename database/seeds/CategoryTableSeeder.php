<?php
/**
 * Created by PhpStorm.
 * User: InBless
 * Date: 09/07/2015
 * Time: 01:23
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->truncate();
        factory(CodeCommerce\Category::class, 15)->create();
    }
}