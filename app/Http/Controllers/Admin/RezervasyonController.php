<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rezervasyon;
use Illuminate\Http\Request;

class RezervasyonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Rezervasyon::all();
        return view('admin.rezervasyon',['datalist'=>$datalist]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rezervasyon  $rezervasyon
     * @return \Illuminate\Http\Response
     */
    public function show(Rezervasyon $rezervasyon,$id)
    {
        $data=Rezervasyon::find($id);
        return view('admin.rezervasyon_edit',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rezervasyon  $rezervasyon
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezervasyon $rezervasyon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rezervasyon  $rezervasyon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezervasyon $rezervasyon,$id)
    {
        $data = Rezervasyon::find($id);
        $data->status=$request->input('status');
        $data->save();
        return back()->with('success','Rezervasyon Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rezervasyon  $rezervasyon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rezervasyon $rezervasyon,$id)
    {
        $data = Rezervasyon::find($id);
        $data->delete();
        return redirect()->back()->with('success','Rezervasyon Silindi');
    }
}
