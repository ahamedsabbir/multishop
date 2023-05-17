<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultishopController extends Controller
{
    function index_function(){
		return view("multishop/index");
	}
}
