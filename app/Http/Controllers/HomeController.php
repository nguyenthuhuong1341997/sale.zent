<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use DB;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $products = DB::table('products')
                    ->join('products_details','products.id','=','products_details.product_id')
                    ->select('products.*','products_details.image')
                    ->groupBy('products_details.product_id')
                    ->orderBy('id','desc')
                    ->paginate(8);
         $cart=Cart::content();
         // $number= $carts->count();
         // dd($cart);
        return view('home',compact('products','cart'));
    }

    public function ladies()
    {
        # code...
        $cart= Cart::content();
        $categories= DB::table('categories')
                ->select('categories.*')
                ->where('categories.sex','=','Nữ')
                ->get();
        // dd($categories);
        $detailLadies= DB::table('products')
                    ->join('categories','categories.id','=','products.category_id')
                    ->join('products_details','products_details.product_id','=','products.id')
                    ->where('categories.sex','=','Nữ')
                    ->groupBy('products.id')
                    ->select('products.*','products_details.id as product_details_id','products_details.image')
                    ->get();
        // dd($detailLadies);
        return view('ladies',compact('cart','categories','detailLadies'));
    }

    public function men()
    {
        # code...
        $cart= Cart::content();
        $categories= DB::table('categories')
                ->select('categories.*')
                ->where('categories.sex','=','Nam')
                ->get();
        // dd($categories);
        $detailLadies= DB::table('products')
                    ->join('categories','categories.id','=','products.category_id')
                    ->join('products_details','products_details.product_id','=','products.id')
                    ->where('categories.sex','=','Nam')
                    ->groupBy('products.id')
                    ->select('products.*','products_details.id as product_details_id','products_details.image')
                    ->get();
        // dd($detailLadies);
        return view('ladies',compact('cart','categories','detailLadies'));
    }


    public function quickview($id)
    {
        $product= DB::table('products')
                ->join('vendors','vendors.id','=','products.vendor_id')
                ->join('categories','categories.id','=','products.category_id')
                    ->select('products.*','vendors.name_vendor','categories.sex','categories.name as category_name')
                    ->where('products.id','=',$id)
                    ->first();
        // dd($product);
            $images= DB:: table('products_details')
                ->select('products_details.image','products_details.id')
                ->where('products_details.product_id','=',$id)
                ->groupBy('products_details.color_id')
                ->get();
                // ->get();
            // dd($images);
        $sizes= DB:: table('products_details')
                ->join('sizes','sizes.id','=','products_details.size_id')
                ->select('sizes.size','sizes.id')
                ->where('products_details.product_id','=',$id)
                ->distinct('sizes.id')
                ->get();
                // dd($sizes);
        $colors= DB:: table('products_details')
                ->join('colors','colors.id','=','products_details.color_id')
                ->select('colors.color_name','colors.color','colors.id')
                ->where('products_details.product_id','=',$id)
                ->distinct('colors.id')
                ->get();
                // dd($colors);

        $cart=Cart::content();
        // dd($cart);
        return view('quickview', compact('product','sizes','colors','images','cart'));
    }

    public function addCart(Request $resquest,$id)
    {
        # code...
        $data= $resquest->all();
        // dd($data);
        $check = DB::table('products_details')
                ->join('products','products_details.product_id','=','products.id')
                ->select('products_details.*','products.name','products.price')
                ->where('products_details.product_id','=',$id)
                
                ->where('products_details.color_id','=',$data['color_quick_view'])
                ->where('products_details.size_id','=',$data['size_quick_view'])
                ->where('products_details.quantity','>=',$data['qty'])
                ->first();
                // dd($check);
        if($check!=null){
            // dd('ok');
            Cart::add(array('id'=>$check->product_id,'name'=>$check->name,'price'=>$check->price,'qty'=>$data['qty'],'options'=>array('kichthuoc'=>$check->size_id,'mau'=>$check->color_id,'image'=>$check->image,'product_id'=>$check->product_id,'chitiet_id'=>$id)));
            return response()->json(['success'=>'true']);
        }else{
            
            return response()->json(['error'=>'true']);
        }
    }

    public function checkout()
    {
        $cart= Cart::content();
        // dd($cart);
        return view('checkout',compact('cart'));
    }

    public function addcheckout(CheckoutRequest $request)
    {
        $data= $request->all();
        Cart::destroy();
        $cart= Cart::content();
        // dd($data);
        return view('thanks',compact('cart'));
    }
}
