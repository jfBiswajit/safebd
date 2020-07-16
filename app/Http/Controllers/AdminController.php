<?php

namespace App\Http\Controllers;

use app\constant\constant\Constant;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
	public function __construct()
	{
		if (Auth::user()) {
			$user = Auth::user();
			$data = [
				'name' => $user->name
			];
			View::share('data', $data);
		}
	}

	public function index(Request $request)
	{
		if (Auth::check()) {
			return Redirect::to("dashboard");
		}
		return view('admin.login', [
			'title' => 'Login'
		]);
	}

	public function postLogin(Request $request)
	{
		request()->validate([
			'email' => 'required',
			'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');
		if (Auth::attempt($credentials)) {
			// Authentication passed...
			return redirect()->intended('dashboard');
		}
		return Redirect::to("login");
	}

	public function dashboard()
	{

		if (Auth::check()) {
			$PendingOrders = DB::table('orders')->where('status', 0)->get();
			$CompletedOrders = DB::table('orders')->where('status', 1)->get();
			$TotalProducts = DB::table('products')->get();

			return view('admin.dashboard', [
				'title' => 'Dashboard',
				'pending_order' => count($PendingOrders),
				'completed_order' => count($CompletedOrders),
				'total_product' => count($TotalProducts),
				'total_category' => count(Constant::$Categories),
			]);
		}
		return Redirect::to("login");
	}

	public function logout()
	{
		Session::flush();
		Auth::logout();
		return Redirect('login');
	}

	public function PendingOrder()
	{
		if (Auth::check()) {
			$PendingOrders = DB::table('orders')->where('status', 0)->get();
			$Orders = [];
			foreach ($PendingOrders as $item) {
				$Product = DB::table('products')->find($item->product_id);
				$item->product = $Product->name;
				$Orders[] = $item;
			}

			return view('admin.pending_orders', [
				'title' => 'Pending Orders',
				'orders' => $Orders
			]);
		}
		return Redirect::to("login");
	}

	public function CompletedOrder()
	{
		if (Auth::check()) {
			$PendingOrders = DB::table('orders')->where('status', 1)->get();
			$Orders = [];

			foreach ($PendingOrders as $item) {
				$Product = DB::table('products')->find($item->product_id);
				$item->name = $Product->name;
				$Orders[] = $item;
			}

			return view('admin.completed_orders', [
				'title' => 'Completed Orders',
				'orders' => $Orders

			]);
		}
		return Redirect::to("login");
	}

	public function AddNewProduct()
	{
		if (Auth::check()) {
			$Categories = Constant::$Categories;
			return view('admin.add_new_product', [
				'title' => 'Add New Product',
				'categories' => $Categories
			]);
		}
		return Redirect::to("login");
	}

	public function StoreNewProduct(Request $Req)
	{
		if (Auth::check()) {
			$thumb = $Req->thumb->store('products', 'public');
			$Product = new Product;
			$Product->name = $Req->name;
			$Product->desc = $Req->desc;
			$Product->category = $Req->id;
			$Product->price = $Req->price;
			$Product->thumb = $thumb;
			if ($Product->save()) {
				return redirect('add_new_product');
			}
		}
		return Redirect::to("login");
	}

	public function ProductList(Request $Req)
	{
		if (Auth::check()) {
			$products = Product::all();
			return view('admin.products', [
				'title' => 'Product List',
				'products' => $products
			]);
		}
		return Redirect::to("login");
	}

	public function EditProduct($id)
	{
		if (Auth::check()) {
			$product = Product::find($id);
			$Categories = Constant::$Categories;
			return view('admin.edit_product', [
				'title' => 'Update Product',
				'product' => $product,
				'categories' => $Categories
			]);
		}
		return Redirect::to("login");
	}

	public function UpdateProduct(Request $Req, $id)
	{
		if (Auth::check()) {
			$product = Product::find($id);
			$product->name = $Req->name;
			$product->desc = $Req->desc;
			$product->price = $Req->price;

			if ($Req->thumb) {
				$thumb = $Req->thumb->store('products', 'public');
				$product->thumb = $thumb;
			}

			if ($Req->id) {
				$product->category = $Req->id;
			}

			if ($product->save()) {
				return redirect('products');
			}
		}
		return Redirect::to("login");
	}

	public function Delivered(Request $Req)
	{
		if (Order::where('id', $Req->id)->update(['status' => 1])) {
			return response()->json(['success' => true], 200);
		}
		return response()->json(['success' => false], 200);
	}
}
