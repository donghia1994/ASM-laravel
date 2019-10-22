<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $view_list = ProductCategory::all();

        $view_product = Product::all();
        $view_men = Product::where("cata_id","=","2")->get();
        $view_woman = Product::where("cata_id","=","1")->get();
        $view_accessories = Product::where("cata_id","=","3")->get();
        return view('page.home', ['view_product'=>$view_product,'view_men'=>$view_men,'view_woman'=>$view_woman,'view_accessories'=>$view_accessories,'view_list'=>$view_list]);
    }
    public function admin_index()
    {
        //
        $view_product = Product::all();
       
        return view('/admin/products/view_Product', ['view_product'=>$view_product]);
    }
    public function list_product($type){
        $productcategory = ProductCategory::with('products')->get();
        $product_type = Product::where('cata_id',$type)->get();
        $product_dif = Product::where('cata_id','<>',$type)->paginate(5);
        $category = ProductCategory::all();
        $category_product = ProductCategory::where('cata_id',$type)->first();

        return view('/page/product',compact('productcategory','product_type','product_dif','category','category_product'));
    }
    public function detail_product(){
        return view('page/detailProduct');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name_product = $request -> post('name');
        $price_product = $request -> post('age');
        $num_product = $request -> post('provine');
        $product = new Product;
        $product ->product_name = $name_product;
        $product ->product_price = $price_product;
        $product ->product_num = $num_product;
        $product-save();
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $view_product = Product::findOrFail($product_id);
        return view('/admin/products/updateProduct',['view_product'=>$view_product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        //
        $new_product = Product::find($product_id);
        $new_product->product_name = $request -> post('product_name');
        $new_product->product_price = $request -> post('product_price');
        $new_product->product_num= $request -> post('product_num');
        $new_product->product_description = $request -> post('product_description');
        $new_product->save();
        return redirect()->action('ProductController@view_Product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        //
        $del_product = Product::find($product_id);
        $del_product->delete();
        return redirect()->action('ProductController@view_Product');

    }
}
