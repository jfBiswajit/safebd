<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SafeBdMainController extends Controller
{
	public function __construct()
	{
		$CartData = Session::get('cart');

		if ($CartData) {
			$CartItems = Session::get('cart');
		} else {
			$CartItems = [];
		}

		View::share('cart_items', count($CartItems));
	}

	public function index(Request $Req)
	{
		return view('users.index', [
			'title' => 'Online Shopping For Health Care in Bangladesh',
		]);
	}

	public function ProductDetails() {
		return view('users.product_details', [
			'title' => 'Product View'
		]);
	}

	public function Cart() {
		if(Session::get('cart')) {
			$CartData = Session::get('cart');
		} else {
			$CartData = [];
		}

		$total = 0;
		foreach($CartData as $item) {
			$total += (int) $item['price'];
		}

		return view('users.cart', [
			'title' => 'Cart',
			'cart_data' => $CartData,
			'total' => $total
		]);
	}

	public function Checkout() {
		return view('users.checkout', [
			'title' => 'Checkout'
		]);
	}

	public function Thankyou(Request $Req) {
		$Name = $Req->name;
		return view('users.thank_you', [
			'title' => 'Checkout',
			'name' => $Name
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

	public function AddToCart(Request $Req) {
		$ProductID = $Req->product_id;
		$Name = $Req->name;
		$Price = $Req->price;
		$CartItems = ['id' => $ProductID, 'name' => $Name, 'price' => $Price];

		if (!$Req->session()->exists('cart')) {
			$Req->session()->put('cart', []);
		}

		$Req->session()->push('cart', $CartItems);
		$TotalItems = count($Req->session()->get('cart'));

		return response()->json(['TotalItems' => $TotalItems], 200);
	}
}
