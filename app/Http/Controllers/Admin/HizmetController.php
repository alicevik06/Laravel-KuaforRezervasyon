<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hizmet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HizmetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Hizmet::all();
        return view('admin.hizmet', ['datalist' => $datalist]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::with('children')->get();
        //$data = Category::get()->where('parent_id','>', 0);
        return view('admin.hizmet_add', ['datalist' => $datalist]);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Hizmet;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id= $request->input('category_id');
        $data->price= $request->input('price');
        $data->detail= $request->input('detail');
        $data->image= Storage::putFile('images',$request->file('image'));//File Upload
        $data->save();
        return redirect()->route('admin_hizmetler');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Hizmet $hizmet
     * @return \Illuminate\Http\Response
     */
    public function show(Hizmet $hizmet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Hizmet $hizmet
     * @return \Illuminate\Http\Response
     */
    public function edit(Hizmet $hizmet,$id)
    {
        $data = Hizmet::find($id);
        $datalist = Category::with('children')->get();
        return view('admin.hizmet_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Hizmet $hizmet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hizmet $hizmet,$id)
    {
        $data = Hizmet::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id= $request->input('category_id');
        $data->price= $request->input('price');
        $data->detail= $request->input('detail');
        if($request->file('image')!=null)
        {
            $data->image = Storage::putFile('images', $request->file('image'));//File Update
        }
        $data->save();
        return redirect()->route('admin_hizmetler');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Hizmet $hizmet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hizmet $hizmet,$id)
    {
        //DB::table('hizmetler')->where('id', '=', $id)->delete();
        $data = Hizmet::find($id);
        $data->delete();

        return redirect()->route('admin_hizmetler');
    }
}
