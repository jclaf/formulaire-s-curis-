<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('SignUp/index.php');
    }
}
