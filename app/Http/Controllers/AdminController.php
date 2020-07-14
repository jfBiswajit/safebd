<?php

namespace App\Http\Controllers;

use app\constant\constant\Constant;
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
		$user = Auth::user();
		$data = [
			'name' => $user->name
		];
		View::share('data', $data);
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

			foreach($PendingOrders as $item) {
				$Product = DB::table('products')->find($item->product_id);
				$item->product_id = $Product->name;
				$PendingOrders[] = $item;
			}

			return view('admin.pending_orders', [
				'title' => 'Pending Orders',
				'orders' => $PendingOrders
			]);
		}
		return Redirect::to("login");
	}

	public function CompletedOrder()
	{
		if (Auth::check()) {
			$PendingOrders = DB::table('orders')->where('status', 1)->get();

			foreach ($PendingOrders as $item) {
				$Product = DB::table('products')->find($item->product_id);
				$item->product_id = $Product->name;
				$PendingOrders[] = $item;
			}

			return view('admin.completed_orders', [
				'title' => 'Completed Orders',
				'orders' => $PendingOrders

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
				// return Redirect::back()->with('message', 'Operation Successful !');
				// return Redirect::back()->with('message', 'Operation Successful !');
				// return redirect('add_new_product')->with('status', 'Profile updated!');
				// $Req->session()->flash('status', 'Task was successful!');
				// return redirect('dashboard');
				return redirect('add_new_product');

				// return Redirect::to("add_new_product")->with('status', 'Profile updated!');
			}
		}
		return Redirect::to("login");

	}
}
