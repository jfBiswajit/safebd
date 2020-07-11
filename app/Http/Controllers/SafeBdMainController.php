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

	public function ProductDetails() {
		return view('product_details', [
			'title' => 'Product View'
		]);
	}

	public function Cart() {
		return view('cart', [
			'title' => 'Cart'
		]);
	}

	public function Checkout() {
		return view('checkout', [
			'title' => 'Checkout'
		]);
	}

	public function Thankyou() {
		return view('thank_you', [
			'title' => 'Checkout'
		]);
	}
}
