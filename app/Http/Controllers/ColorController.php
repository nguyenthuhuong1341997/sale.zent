<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use DB;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::All();

        return view('admin/color',['colors'=> $colors]);
    }

    public function getList()
    {
        $colors = DB::table('colors')
            ->orderBy('colors.id','desc');
            // dd($colors->first());
        return datatables()->of($colors)
	        ->addColumn('color',function($color){
	       			return '<div id="square" style=" width: 50px; height: 50px; border-radius:5px; border:1px solid #c0c0c0; background: '.$color->color.'"></div>';
	       		})
            ->addColumn('action', function($color){
                return ' <button data-title="show" userId="'. $color->id .'" data-toggle="modal" data-target="#show" class="btn btn-sm btn-info show"><i class="fas fa-eye"></i></button>
                    <button title="add information color"  data-title="add_detail" userId="'. $color->id .'" id="add_detail" data-toggle="modal" data-target="#addDetail" class="btn btn-sm btn-primary add_detail"><i class="fas fa-pencil-alt"></i></button>
                    <button userId="'. $color->id .'" class="btn btn-sm btn-danger delete"><i class="fas fa-trash-alt"></i></button>';

            })

        ->rawColumns(['action','color'])
        ->toJson();
    }
    public function store(Request $request){
        
        $data= $request->all();
        $color= new Color;
        
        $color->color_name= $data['color_name'];
        $color->color= $data['color'];
        $color->save();
        return redirect('admin/color')->with('flag','Them moi thanh cong');
        // return response()->json(['success'=>'yes']);
    }
}
