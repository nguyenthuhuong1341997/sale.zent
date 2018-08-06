<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Product;
use Yajra\Datatables\Datatables;
use DB;
use App\Vendor;
use App\Size;
use App\Color;
use App\ProductsDetail;
use App\Category;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin.auth');  //kiem tra dang nhap hay chua
    // }
    public function index()
    {
        $products = Product::All();

        return view('admin/home',['products'=> $products]);
    }

    public function getIndex(){
        return view('admin/home');
    }

    public function getList()
    {
        $products = DB::table('products')
            ->orderBy('products.id','desc');
            // dd($products);
        return datatables()->of($products)
            ->addColumn('action', function($product){
                return ' <button data-title="show" userId="'. $product->id .'" data-toggle="modal" data-target="#show" class="btn btn-sm btn-info show"><i class="fas fa-eye"></i></button>
                    <button title="add information product"  data-title="add_detail" userId="'. $product->id .'" id="add_detail" data-toggle="modal" data-target="#addDetail" class="btn btn-sm btn-primary add_detail"><i class="fas fa-pencil-alt"></i></button>
                    <button userId="'. $product->id .'" class="btn btn-sm btn-danger delete"><i class="fas fa-trash-alt"></i></button>';

            })
       
        ->rawColumns(['action'])
        ->toJson();
    }

    public function getcategories()
    {
        $categories= Category::all();
        return response()->json(['success'=>true,'category'=>$categories]);
    }

    public function getvendors()
    {
        $vendors= Vendor::all();
        return response()->json(['success'=>true,'vendors'=>$vendors]);
    }

    public function getsizes()
    {
        $sizes= Size::all();
        return response()->json(['success'=>true,'sizes'=>$sizes]);
    }

    public function getcolors()
    {
        $colors= Color::all();
        return response()->json(['success'=>true,'colors'=>$colors]);
    }

    public function store(CreateProductRequest $request){
        
        $data= $request->all();
        //c1: 
        $product= new Product;
        $product->code= $data['code'];
        $product->name= $data['name'];
        $product->price= $data['price'];
        $product->original_price= $data['original_price'];
        $product->description= $data['description'];
        $product->vendor_id= $data['vendor_id'];
        $product->category_id= $data['category_id'];
        $product->save();
        // return redirect('admin/home')->with('flag','Them moi thanh cong');
        return response()->json(['success'=>'yes']);
    }

    
    public function destroy($id)
    {

        Product::find($id)->delete();
        return response()->json(['eror'=>false]);
    }
}
