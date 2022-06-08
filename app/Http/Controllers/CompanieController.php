<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Illuminate\Http\Request;

class CompanieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['companie']=Companie::all();
        return view("homepages/manageCompanie",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("homepages/insertCompanie");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $data=new Companie();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->websites=$request->websites;
        $fileName=$request->logo->getClientOriginalName();
        $request->logo->move(public_path("image"),$fileName);
        $data->logo=$fileName;
        $data->save();
        return redirect()->route("companie.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function show(Companie $companie)
    {
        $data['companie']=$companie;
        return view("homepages/viewCompanie",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function edit(Companie $companie)
    {
        $data['companie']=$companie;
        return view("homepages/editCompanie",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companie $companie)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $companie->name=$request->name;
        $companie->email=$request->email;
        $companie->websites=$request->websites;
        if($request->has("logo")){
            $fileName=$request->logo->getClientOriginalName();
        $request->logo->move(public_path("image"),$fileName);
        $companie->logo=$fileName;
        }
        $companie->save();
        return redirect()->route("companie.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companie  $companie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companie $companie)
    {
        $companie->delete();
        return redirect()->back();
    }
}
