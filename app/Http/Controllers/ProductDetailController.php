<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\CreateProductDetailRequest;
use App\ProductsDetail;
class ProductDetailController extends Controller
{
    public function getList($id)
    {
        $products = DB::table('products_details')
		            ->join('sizes', 'sizes.id', '=', 'products_details.size_id')
		            ->join('colors', 'colors.id', '=', 'products_details.color_id')
		            ->select('products_details.id','products_details.product_id', 'products_details.image', 'sizes.size','products_details.size_id','products_details.color_id','colors.color_name','products_details.quantity')
		            ->where('products_details.product_id','=',$id);

		// dd($products->first());
        return datatables()->of($products)
        ->addColumn('image',function($product){
		               return '<img style = " width:60px;height:60px" src= "' . asset(\Storage::url($product->image)) . '" />';
		            })
        ->addColumn('action',function($product){
                       return '<button title="add information product"  data-title="add_detail" proDetail="'. $product->id .'" id="add_detail" data-toggle="modal" data-target="#editProDetail" class="btn btn-sm btn-primary edit_detail_infor_product"><i class="fas fa-pencil-alt"></i>Sửa</button>
                        <button proDetail="'. $product->id .'" class="btn btn-sm btn-danger delete_infor_product"><i class="fas fa-trash-alt"></i>Xóa</button>';
                    })
        ->rawColumns(['image','action'])
        ->toJson();
            
    }

    public function store(CreateProductDetailRequest $res)
    {
        // return response()->json($res->all());
        if ($res->hasFile('images')) {
            foreach ($res->images as $key => $image) {
                $products_details = new ProductsDetail;
                $products_details->product_id= $res->product_id;
                $products_details->color_id= $res->colorName;
                $products_details->size_id= $res->sizeName;
                $products_details->quantity= $res->quantity;
                $products_details->image= $image->store('images');
                $products_details->save();
            }
        }
        else {
            $products_details = new ProductsDetail;
                $products_details->product_id= $res->product_id;
                $products_details->color_id= $res->colorName;
                $products_details->size_id= $res->sizeName;
                $products_details->quantity= $res->quantity;
                $products_details->image= null;
                $products_details->save();
        }
        return response()->json(['success'=>'yes']);
    }

    public function edit($id)
    {
        $product_detail= DB::table('products_details')
                        ->join('sizes','sizes.id','=','products_details.size_id')
                        ->join('colors','colors.id','=','products_details.color_id')
                        ->select('products_details.*','sizes.size','colors.color_name')
                        ->where('products_details.id','=',$id)
                        ->get();
                        // dd($product_detail);
        return response()->json($product_detail);
    }

    public function update(Request $request, $id)
    {
        
        $product_detail=ProductsDetail::find($id);
        $data= $request->all();
        $product_detail->update($data);
        return response()->json(['success'=>'yes']);
    }

    public function destroy($id)
    {
        ProductsDetail::find($id)->delete();
        
        return response()->json(['success'=>"yes"]);
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
}
