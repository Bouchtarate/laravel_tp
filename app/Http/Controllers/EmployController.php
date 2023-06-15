<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Employ;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class EmployController extends Controller
{
    public function index(){

        return view('employs.index',[
            'employs'=>Employ::all()
        ]);
    }
    public function create(){

        return view('employs.create',['cities'=>City::all()]);
    }
    public function store(Request $request){
        $image_extension = $request->image->getClientOriginalExtension();
        $image_name = time().".".$image_extension;
        $request->image->move('images/employs',$image_name);
        Employ::create([
            'full_name'=>$request->full_name,
            'age'=>$request->age,
            'email'=>$request->email,
            'city_id'=>$request->city_id,
            'image'=>$image_name
        ]);
        return redirect('/');
    }
    public function edit(){
        return view('employs.edit');
    }
}