<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::with(['categories', 'user:name,email'])->get();
        $products = Product::select('id', 'name', 'image', 'price', 'description', 'user_id')->with(['categories', 'user'])->get();
        // dd($products);
        $categories = Category::all();

        return view('products.index', ["products" => $products, "categories" => $categories]);
    }
    public function filter(Request $request)
    {
        // dd($request);
        $category_id = $request->category_id;
        // dd($category_id);
        if ($category_id !== "0") {
            $products = Product::WhereHas('categories', function ($query)  use ($category_id) {
                $query->where('category_id', $category_id);
            })->get();
            $categories = Category::all();
            return view('products.index', ["products" => $products, "categories" => $categories]);
        } else {
            return redirect()->route('products.index');
        }
        // $products = Product::with('categories')->get();


    }
    // public function details(Request $request)
    // {
    //     // dd($request);
    //     $category_id = $request->category_id;
    //     // dd($category_id);
    //     if ($category_id !== "0") {
    //         $products = Product::WhereHas('categories', function ($query)  use ($category_id) {
    //             $query->where('category_id', $category_id);
    //         })->get();
    //         $categories = Category::all();
    //         return view('products.index', ["products" => $products, "categories" => $categories]);
    //     } else {
    //         return redirect()->route('products.index');
    //     }
    //     // $products = Product::with('categories')->get();


    // }

    /**
     * Send list of category of parent to add product page
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::doesntHave('parent')->get();
        return view('products.create', ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $user_id = Auth::id();

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->user_id = $user_id;

        // Add product image
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $product->image = $this->productImage($request->photo);
        }
        // dd($request); // show log
        $product->save();

        // Associate the product with the selected category
        $category_ids = explode(",", $request->input('category_id'));
        $product->categories()->attach($category_ids);

        // return response()->json($product, 201);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Product::with('categories')->find($id);
        $product =  Product::with('categories')->find($id);

        return view('products.show', ["product" => $product]);
        
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
        $product = Product::findOrFail($id);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        // Add product image
        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
            $product->image = $this->productImage($request->photo);
        }

        // Associate the product with the selected category
        if ($request->filled('category_id')) {
            $product->categories()->sync($request->input('category_id'));
        }

        $product->save();

        return response()->json($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(null, 204);
    }

    /**
     * Store a newly product image.
     *
     */
    public function productImage($image)
    {
        // $product_image_name = 'product_'.time().'.'.$image->extension();

        // $image->storeAs('products',$product_image_name);

        // return '/storage/products/'.$product_image_name;

        $path = $image->store('products_images');

        return $path;
        // return 'storage/' . $path;
    }
}
