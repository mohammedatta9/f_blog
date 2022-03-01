<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::orderBy('id','desc')->with(['user', 'category'])->paginate(5);
        $products = Product::latest()->get();
        // dd($products);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
       // $categories = Category::all();
        return view('admin.product.create');    
    }


    public function store(ProductRequest $request)
    {
        // upload file
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_name = rand() . '_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads/products'), $new_name);
        // save Product 
         //$post['image'] = $new_name;
        $product = Product::create($request->all());
        $product->image = $new_name; 
        $product->save();
       // dd($post);
        if($product) {
            return redirect()->route('products.index');
        } else  {
            return redirect()->back()->with('error', 'There is an error in your data');
        }
    }
    public function edit($id)
    {
         
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         

        $product = Product::find($id);

        $new_name = $product->image;
        if($request->has('image')) {
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = rand() . '_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads'), $new_name);
        }
      
        
        $product = $product->update($request->all());

        if($product) {
            return redirect()->route('products.index');
        } else  {
            return redirect()->back()->with('error', 'There is an error in your data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
       // unlink(public_path('uploads/'.$product->image));
        $product->delete();
        return redirect()->back();
    }
}
