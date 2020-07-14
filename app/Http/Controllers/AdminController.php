<?php

namespace App\Http\Controllers;

use app\constant\constant\Constant;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Session;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

	public function index(Request $request)
	{
		if (Auth::check()) {
			return Redirect::to("dashboard");
		}
		return view('admin.login', [
			'title' => 'Checkout'
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
			return view('admin.dashboard', [
				'title' => 'Dashboard'
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
			return view('admin.pending_orders', [
				'title' => 'Pending Orders'
			]);
		}
		return Redirect::to("login");
	}

	public function CompletedOrder()
	{
		if (Auth::check()) {
			return view('admin.completed_orders', [
				'title' => 'Completed Orders'
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
			dd($Req->all());
		}
		return Redirect::to("login");

	}
}
