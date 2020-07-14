<?php

namespace App\Http\Controllers;

use app\constant\constant\Constant;
use App\Order;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
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
		$LatestProducts = DB::table('products')
			->orderBy('id', 'desc')
			->take(4)
			->get();

		$SafetyProducts = DB::table('products')
			->where('category', 1)
			->orderBy('id', 'desc')
			->take(4)
			->get();

		$LabProducts = DB::table('products')
			->where('category', 3)
			->orderBy('id', 'desc')
			->take(4)
			->get();

		$Electronics = DB::table('products')
			->where('category', 4)
			->orderBy('id', 'desc')
			->take(4)
			->get();

		return view('users.index', [
			'title' => 'Online Shopping For Health Care in Bangladesh',
			'safety_products' => $SafetyProducts,
			'lab_products' => $LabProducts,
			'electronics' => $Electronics,
			'latest_products' => $LatestProducts,
		]);
	}

	public function ProductDetails()
	{
		return view('users.product_details', [
			'title' => 'Product View'
		]);
	}

	public function Cart()
	{
		if (Session::get('cart')) {
			$CartData = Session::get('cart');
		} else {
			$CartData = [];
		}

		$total = 0;
		foreach ($CartData as $item) {
			$total += (int) $item['price'];
		}

		return view('users.cart', [
			'title' => 'Cart',
			'cart_data' => $CartData,
			'total' => $total
		]);
	}

	public function Checkout()
	{
		return view('users.checkout', [
			'title' => 'Checkout'
		]);
	}

	public function Thankyou(Request $Req)
	{
		$Name = $Req->name;
		$Phone = $Req->phone;
		$Address = $Req->address;
		$Address_op = $Req->address_op;
		$TotalItemsInCart = Session::get('cart');

		foreach ($TotalItemsInCart as $item) {
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


	public function PendingOrder()
	{
		return view('admin.pending_orders', [
			'title' => 'Pending Orders'
		]);
	}

	public function CompletedOrder()
	{
		return view('admin.completed_orders', [
			'title' => 'Completed Orders'
		]);
	}

	public function AddNewProduct()
	{
		return view('admin.add_new_product', [
			'title' => 'Completed Orders'
		]);
	}

	public function AddToCart(Request $Req)
	{
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

	public function Safety()
	{
		$Products = DB::table('products')
			->where('category', 1)
			->orderBy('id', 'desc')
			->get();

		return view('users.all_products', [
			'title' => 'Safety',
			'products' => $Products,
		]);
	}

	public function Fire()
	{
		$Products = DB::table('products')
			->where('category', 2)
			->orderBy('id', 'desc')
			->get();

		return view('users.all_products', [
			'title' => 'Safety',
			'products' => $Products,
		]);
	}

	public function Lab()
	{
		$Products = DB::table('products')
			->where('category', 3)
			->orderBy('id', 'desc')
			->get();

		return view('users.all_products', [
			'title' => 'Safety',
			'products' => $Products,
		]);
	}

	public function Electronics()
	{
		$Products = DB::table('products')
			->where('category', 4)
			->orderBy('id', 'desc')
			->get();

		return view('users.all_products', [
			'title' => 'Safety',
			'products' => $Products,
		]);
	}

	public function Mechanical()
	{
		$Products = DB::table('products')
			->where('category', 5)
			->orderBy('id', 'desc')
			->get();

		return view('users.all_products', [
			'title' => 'Safety',
			'products' => $Products,
		]);
	}

	public function Cevil()
	{
		$Products = DB::table('products')
			->where('category', 6)
			->orderBy('id', 'desc')
			->get();

		return view('users.all_products', [
			'title' => 'Safety',
			'products' => $Products,
		]);
	}

	public function Textile()
	{
		$Products = DB::table('products')
			->where('category', 7)
			->orderBy('id', 'desc')
			->get();

		return view('users.all_products', [
			'title' => 'Safety',
			'products' => $Products,
		]);
	}

	public function Islamic()
	{
		$Products = DB::table('products')
			->where('category', 8)
			->orderBy('id', 'desc')
			->get();

		return view('users.all_products', [
			'title' => 'Safety',
			'products' => $Products,
		]);
	}
}
