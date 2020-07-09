<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SafeBdMainController extends Controller
{
	public function index()
	{
		return view('index', [
			'title' => 'Online Shopping For Health Care in Bangladesh'
		]);
	}
}
