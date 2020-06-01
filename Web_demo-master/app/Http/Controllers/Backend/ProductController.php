<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id')->get();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 如果路徑不存在，就自動建立
        if (!file_exists('uploads/product')) {
            mkdir('uploads/product', 0755, true);
        }
        
        $product = new Product;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path() . '\uploads\product\\';
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);
        }
        else {
            $fileName = 'default.jpg';
        }

        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->image = $fileName;
        $product->description = $request->input('description');

        $product->save();

        return redirect()->route('admin.product.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.product.edit', compact('product'));
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
        // 如果路徑不存在，就自動建立
        if (!file_exists('uploads/product')) {
            mkdir('uploads/product', 0755, true);
        }
        
        $product = Product::find($id);

        if ($request->hasFile('image')) {
            // 先刪除原本的圖片
            if ($product->image != 'default.jpg')
                @unlink('uploads/product/' . $product->image);
            $file = $request->file('image');
            $path = public_path() . '\uploads\product\\';
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $fileName);

            $product->image = $fileName;
        }

        $product->title = $request->input('title');
        $product->subtitle = $request->input('subtitle');
        $product->description = $request->input('description');

        $product->save();

        return redirect()->route('admin.product.index');
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
        if ($product->image != 'default.jpg')
            @unlink('uploads/product/' . $product->image);
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}
