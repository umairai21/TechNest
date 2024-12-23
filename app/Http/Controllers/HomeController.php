<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Category;
use App\Models\Branch;
use Session;
use Stripe;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if($usertype == '1')
        {
            return view ('admin.home');
        }
        else
        {
            return view ('home.userpage');
        }
    }

    public function index()
    {   
        return view ('home.userpage');
    }

    public function ourproducts(Request $request)
    {
        $branches = Branch::all();
        $categories = Category::all();
        $product = Product::all();
        return view ('home.ourproducts',compact('product','categories','branches'));
    }

    public function product_details($id)
    {
        $product = Product::find($id);
        $branches = Branch::all();

        return view ('home.product_details',compact('product','branches'));
    }

    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $product = Product::find($id);

            $cart = new Cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;

            $cart->product_title = $product->title;
            $cart->quantity = $request->quantity;

            if($product->discount_price!=null)
            {
                $cart->price = $product->discount_price * $request->quantity;
            }
            else
            {
                $cart->price = $product->price * $request->quantity;
            }

            
            $cart->image = $product->image;
            $cart->product_id = $product->id;

            $cart->save();

            
            return redirect()->back();   
        }
        else
        {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if(Auth::id())
        {
            $id = Auth::user()->id;
            $cart = Cart::where('user_id','=',$id)->get();
            return view ('home.showcart',compact('cart'));
        }
        else
        {
            return redirect ('login');
        }     
    }

    public function remove_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function cash_order()
    {
        $user = Auth::user();
        $userid = $user->id;

        $data=Cart::where('user_id','=',$userid)->get();

        foreach($data as $data)
        {
            $order = new Order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;

            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;

            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'In Process';

            $order->save();

            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back();
    }

    public function stripe($totalprice)
    {
        return view ('home.stripe',compact('totalprice'));
    }

    public function stripePost(Request $request,$totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for Payment." 
        ]);

        $user = Auth::user();
        $userid = $user->id;
        $data=Cart::where('user_id','=',$userid)->get();
        foreach($data as $data)
        {
            $order = new Order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;

            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;

            $order->payment_status = 'Paid';
            $order->delivery_status = 'In Process';
            $order->save();
            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
        Session::flash('success', 'Payment successful!');     
        return redirect()->back();
    }

    public function purchase_history()
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userOrders = Order::where('user_id', $user->id)->get();    
            return view('home.purchase_history', compact('userOrders'));
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function about()
    {
        return view ('home.about');
    }

    public function services()
    {
        return view ('home.services');
    }
}

