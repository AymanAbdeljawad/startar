<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    public function test($id, $name)
    {


        $objs = [
            ["id" => "1", "name" => "ayman", "phon" => "0168919362"],
            ["id" => "2", "name" => "ayaa", "phon" => "01118464670"],
            ["id" => "3", "name" => "farida", "phon" => "0118207620"],
            ["id" => "4", "name" => "moha", "phon" => "01155084528"]
        ];


        return view("test", compact("objs"));
    }
}
