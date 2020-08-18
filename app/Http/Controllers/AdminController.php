<?php

namespace App\Http\Controllers;

use App\Banner;
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
      return Redirect::to("admin/dashboard");
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
      return redirect()->intended('admin/dashboard');
    }
    return Redirect::to("admin/login");
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
    return Redirect::to("admin/login");
  }

  public function logout()
  {
    Session::flush();
    Auth::logout();
    return Redirect('admin/login');
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
    return Redirect::to("admin/login");
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
    return Redirect::to("admin/login");
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
    return Redirect::to("admin/login");
  }

  public function StoreNewProduct(Request $Req)
  {
    if (Auth::check()) {
      $Product = new Product;

      if ($Req->thumb_one) {
        $thumb_one = $Req->thumb_one->store('products', 'public');
        $Product->thumb_one = $thumb_one;
      }

      if ($Req->thumb_two) {
        $thumb_two = $Req->thumb_two->store('products', 'public');
        $Product->thumb_two = $thumb_two;
      }

      if ($Req->thumb_three) {
        $thumb_three = $Req->thumb_three->store('products', 'public');
        $Product->thumb_three = $thumb_three;
      }

      $Product->name = $Req->name;
      $Product->desc = $Req->desc;
      $Product->category = $Req->id;
      $Product->price = $Req->price;

      if ($Product->save()) {
        return redirect('admin/add_new_product');
      }
    }
    return Redirect::to("admin/login");
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
    return Redirect::to("admin/login");
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
    return Redirect::to("admin/login");
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
        return redirect('admin/products');
      }
    }
    return Redirect::to("admin/login");
  }

  public function UpdateBanner(Request $Req)
  {
    if (Auth::check()) {
      return view('admin.update_banner', [
        'title' => 'Update Banner'
      ]);
    }
    return Redirect::to("admin/login");
  }

  public function StoreBanner(Request $Req)
  {
    if (Auth::check()) {
      if ($Req->ban) {
        $Banner = new Banner();
        $photo = $Req->ban->store('banner', 'public');
        $Banner->photo = $photo;
        $Banner->save();
      }
      return view('admin.update_banner', [
        'title' => 'Update Banner'
      ]);
    }
    return Redirect::to("admin/login");
  }

  public function Delivered(Request $Req)
  {
    if (Order::where('id', $Req->id)->update(['status' => 1])) {
      return response()->json(['success' => true], 200);
    }
    return response()->json(['success' => false], 200);
  }
}
