<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function test()
    {

        return "atman gawad ahmed";
    }
}
