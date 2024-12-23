<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Branch;
use App\Models\Order;
use App\Models\User;
use App\Models\Product_branches;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view ('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new Category;
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back();
    }

    public function delete_category($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function view_product()
    {
        $branches = Branch::all();
        $category = Category::all();
        return view ('admin.product',compact('category','branches'));
    }

    public function add_product(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->dis_price;
        $product->category = $request->category;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image = $imagename;
        $product->save();


        $branches = $request->input('branches');
        $branchQuantities = $request->input('branch_quantities');
    
        foreach ($branches as $branchId) {
            $prodBranch = new Product_branches;
            $prodBranch->product_id = $product->id;
            $prodBranch->branch_id = $branchId;
    
            // Get the quantity for this branch from the input
            $quantity = isset($branchQuantities[$branchId]) ? $branchQuantities[$branchId] : 0;
    
            // Store the quantity in the database
            $prodBranch->quantity = $quantity;
    
            $prodBranch->save();
        }
    
    
    return redirect()->back();
    }

    public function show_product()
    {
        $product = Product::all();
        return view ('admin.show_product',compact('product',));
    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function update_product($id)
    {
        $product =Product::find($id);
        $category = Category::all();
        return view ('admin.update_product',compact('product','category'));
    }

    public function update_product_confirm(Request $request,$id)
    {
        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->dis_price;
        $product->quantity = $request->quantity;

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $product->image = $imagename;
        }
      
        $product->save();
        return redirect()->back();
    }

    public function view_branch()
    {
        $branch = Branch::all();
        return view ('admin.branch',compact('branch'));
    }

    public function add_branch(Request $request)
    {
        $branch = new Branch();
        $branch->branch_name = $request->branch;
        $branch->save();
        return redirect()->back();
    }

    public function order()
    {
        $order = Order::all();

        return view ('admin.order',compact('order'));
    }

    public function delivered($id)
    {
        $order = Order::find($id);
        $order->delivery_status = "Delivered";
        $order->payment_status = "Paid";
        $order->save();
        return redirect()->back();
    }

    public function address_book()
    {
        $user = User::where('usertype', 0)->get();  
       return view ('admin.address_book',compact('user'));   
    }
}
