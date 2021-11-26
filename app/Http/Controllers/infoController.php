<?php

namespace App\Http\Controllers;

use App\Models\info;
use Illuminate\Http\Request;

class infoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = info::paginate(10);
        return view('info.index',compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('info.create');
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
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_no' => 'required',
        ]);
        info::create($request->all());
        return redirect()->route('info.index')
            ->with('success','info created sucessfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(info $info)
    {
        return view('info.edit',compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, info $info)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_no' => 'required',
        ]);
        $info->update($request->all());
        return redirect()->route('info.index')
            ->with('success','info updateded sucessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info=Info::find($id);
        $info->delete();
        return redirect()->route('info.index')
            ->with ('Success','info deleted suceessfully');
    }
}
