<?php

namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = SupplierModel::get();
        return view('supplier/index',['suppliers' => $suppliers ])->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = SupplierModel::all();
        return view('supplier/create', ['supplier' => $supplier]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'supplier_name'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
            'email' => 'required|email|unique:users,email',
            'organisation_name' => 'required'
        ]);

        $supplier = new SupplierModel();
        $supplier->supplier_name = $request->input('supplier_name');
        $supplier->address = $request->input('address');
        $supplier->phone_number = $request->input('phone_number');
        $supplier->email = $request->input('email');
        $supplier->organisation_name = $request->input('organisation_name');
        $supplier->save();
        return redirect('supplier/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = SupplierModel::find($id);
        return view('supplier/show', ['supplier' => $supplier]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = SupplierModel::find($id);
        return view('supplier/edit', ['supplier' => $supplier]);

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
            'supplier_name'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
            'email' => 'required|email|unique:users,email',
            'organisation_name' => 'required'

        ]);


        $supplier = SupplierModel::find($id);
        $supplier->update($supplier);
        $supplier->supplier_name = $request->input('supplier_name');
        $supplier->address = $request->input('address');
        $supplier->phone_number = $request->input('phone_number');
        $supplier->email = $request->input('email');
        $supplier->organisation_name = $request->input('organisation_name');
        return redirect('supplier/index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = SupplierModel::find($id);
        $supplier->delete();
        return redirect('supplier/index');

    }
}
