<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	/**
	 * show form new product
	 *
	 * @return Response
	 */
	public function new_prduct()
	{
		return view('new_product');
	}
}
