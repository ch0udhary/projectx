<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Industry;

class IndustriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Industry::get()->toArray();
        
        return view('admin.industries.allindustries',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.industries.createindustry');
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


        $this->validate($request, [
            'name'=>'required|unique:industries,industry_name',
            'file'=>'required',
        ]);

         $slug = strtolower($request->name);


        $image = $request->file->getClientOriginalName();

        $request->file->move(public_path('/industry_images'), $image);

     
         Industry::create(array(
            'industry_name'=>$request->name,
            'slug'=>$slug,
            'file'=>$image
        ));

        return redirect('/admin/industries/');

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
        $edit_data = Industry::where('id', $id)->get()->toArray();

        return view('/admin/industries/editindustry',compact('edit_data'));

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
        //
        Industry::where('id', $id)->update(array(
            'industry_name'=>$request->name,
        ));

        return redirect('/admin/industries/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Industry::where('id', $id)->delete();

        return redirect('/admin/industries');
    }
}
