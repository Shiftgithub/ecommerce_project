<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Product;

class AdminController extends Controller
{
    public function products()
    {
        return view('admin.products');
    }


    public function uploadproductinfo(Request $request)
    {

        $data = new product;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;
        $data->title = $request->productname;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product Added Successfully');
    }
}
