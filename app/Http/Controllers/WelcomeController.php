<?php
/**
 * Created by PhpStorm.
 * User: InBless
 * Date: 21/06/2015
 * Time: 10:33
 */

namespace Loja\Http\Controllers;




class WelcomeController extends Controller {

    public function index()
    {
        return view('welcome');
    }

    public function exemplo()
    {
        return view('exemplo');
    }
}