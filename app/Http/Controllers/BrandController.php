<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandModel;

class BrandController extends Controller
{


    // public function getwe()
    // {
    //     $brand = new BrandModel();
    //     $brand->brand_name = "Peak";
    //     $brand->save();
    //     return "hello";


    // }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('hello');
        $brands = BrandModel::get();
        return view('brand/index',['brands' => $brands])->with('i');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = BrandModel::all();
        return view('brand/create', ['brand' => $brand]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'brand_name' => 'required',
        ]);

        $brand = new BrandModel();
        $brand->brand_name = $request->input('brand_name');
        $brand->save();
        return redirect('brand/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = BrandModel::find($id);

        return view('brand/show' , ['brand'=>$brand]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = BrandModel::find($id);
        return view('brand/edit' , ['brand' => $brand]);
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
        $this->validate($request,[
            'brand_name'=>'required',

        ]);
        $brand=BrandModel::find($id);
        $brand->brand_name = $request->input('brand_name');
        $brand->update($request->all());
        return redirect('brand/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = BrandModel::find($id);
        $brand->delete();
        return redirect('brand/index');
    }
}
