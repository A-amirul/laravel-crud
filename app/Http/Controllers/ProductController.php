<?php

namespace App\Http\Controllers;

use view;
use imagepath;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Traits\UploadAble;
class ProductController extends Controller
{
    use UploadAble;
    public function index(){
        $products=Products::all();
        return view('products.index', compact('products'));
    }

    public function show($id){
        $product=Products::find($id);
        return view('products.show', compact('product'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'      =>'required',
            'price'     =>'required',
            'description'=>'required',
            'image'     =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',]);
            Products::create([
                'name'      =>$request->name,
                'price'     =>$request->price,
                'description'=>$request->description,
                'image'     =>$this->uploadOne($request->image, 300, 300, config('imagepath.products')),
            ]);
        // $product=new Products;
        // $product->name=$request->name;
        // $product->price=$request->price;
        // $product->description=$request->description;
        // if ($request->hasFile('image')) {
        //     $filename = $this->uploadOne($request->image, 300, 300, config('imagepath.products'));
        //     $employee->image = $filename;

        // }
        // $product->save();
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id){
        $product=Products::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $product=Products::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id){
        $product=Products::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
