<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SafeBdMainController extends Controller
{
	public function index()
	{
		return view('users.index', [
			'title' => 'Online Shopping For Health Care in Bangladesh'
		]);
	}

	public function ProductDetails() {
		return view('users.product_details', [
			'title' => 'Product View'
		]);
	}

	public function Cart() {
		return view('users.cart', [
			'title' => 'Cart'
		]);
	}

	public function Checkout() {
		return view('users.checkout', [
			'title' => 'Checkout'
		]);
	}

	public function Thankyou() {
		return view('users.thank_you', [
			'title' => 'Checkout'
		]);
	}

	public function Dashboard() {
		return view('admin.dashboard', [
			'title' => 'Checkout'
		]);
	}

	public function Login() {
		return view('admin.login', [
			'title' => 'Checkout'
		]);
	}

	public function PendingOrder() {
		return view('admin.pending_orders', [
			'title' => 'Pending Orders'
		]);
	}

	public function CompletedOrder() {
		return view('admin.completed_orders', [
			'title' => 'Completed Orders'
		]);
	}

	public function AddNewProduct() {
		return view('admin.add_new_product', [
			'title' => 'Completed Orders'
		]);
	}
}
