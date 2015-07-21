<?php
/**
 * Created by PhpStorm.
 * User: InBless
 * Date: 09/07/2015
 * Time: 01:23
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->truncate();
        factory(CodeCommerce\User::class, 5)->create();
    }
}