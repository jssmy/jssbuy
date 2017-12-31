<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PublicController extends Controller
{
   

	public function index()
	{

		//$products = \App\Product::get();
		$products= array();
		

		return view('index',['products'=>$products]);

	}

	public function show()
	{

	}

}
