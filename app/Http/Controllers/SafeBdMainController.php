<?php

namespace App\Http\Controllers;

use app\constant\constant\Constant;
use App\Order;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SafeBdMainController extends Controller
{
	public function __construct()
	{
		$Cart = Session::get('cart');
		$Categories = Constant::$Categories;
		$CommonData = [
			'cart' => $Cart,
			'categories' => $Categories
		];

		if ($CommonData['cart']) {
			$CommonData['cart'] = count(Session::get('cart'));
		} else {
			$CommonData['cart'] = 0;
		}

		View::share('common_data', $CommonData);
	}

	public function index(Request $Req)
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
		$Phone = $Req->phone;
		$Address = $Req->address;
		$Address_op = $Req->address_op;
		$TotalItemsInCart = Session::get('cart');

		foreach($TotalItemsInCart as $item) {
			$Order = new Order();
			$Order->name = $Name;
			$Order->phone = $Phone;
			$Order->address = $Address;
			$Order->address_op = $Address_op;
			$Order->product_id = $item['id'];
			$Order->quantity = 1;
			$Order->price = $item['price'];
			$Order->save();
		}

		session()->forget('cart');

		return view('users.thank_you', [
			'title' => 'Checkout',
			'name' => $Name
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

	public function Safety() {
		return view('users.categories', [
			'title' => 'how'
		]);
	}

	public function Fire() {
		return view('users.categories', [
			'title' => 'how'
		]);
	}

	public function Lab() {
		return view('users.categories', [
			'title' => 'how'
		]);
	}

	public function Electronics() {
		return view('users.categories', [
			'title' => 'how'
		]);
	}

	public function Mechanical() {
		return view('users.categories', [
			'title' => 'how'
		]);
	}

	public function Cevil() {
		return view('users.categories', [
			'title' => 'how'
		]);
	}

	public function Textile() {
		return view('users.categories', [
			'title' => 'how'
		]);
	}

	public function Islamic() {
		return view('users.categories', [
			'title' => 'how'
		]);
	}
}
