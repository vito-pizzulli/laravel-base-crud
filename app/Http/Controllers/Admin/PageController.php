<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shore;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoreList = Shore::all();
        return view('admin.shores.index', compact('shoreList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name"=>"required|unique:shores|max:200|min:3",
            "location"=>"required|max:200|min:3",
            "number_of_umbrellas"=>"required|min:1|integer",
            "number_of_bed"=>"required|min:1|integer",
            "price"=>"required|max:100|min:0",
            "opening_date"=>"required|date",
            "closing_date"=>"required|date",
            "has_volley_beach"=>"required|boolean",
            "has_soccer_field"=>"required|boolean"
        ]);
        $newShore = new Shore();
        $newShore->fill($data);
        $newShore->save();
        return redirect()->route('admin.shores.show',$newShore->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shore = Shore::findOrFail($id);
        return view('admin.shores.show', compact('shore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shore = Shore::findOrFail($id);
        return view('admin.shores.edit', compact('shore'));
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
        $data = $request->validate([
            "name" => ["required", "min:3", "max:255", Rule::unique('shores')->ignore($id)],
            "location"=>"required|max:200|min:3",
            "number_of_umbrellas"=>"required|min:1|integer",
            "number_of_bed"=>"required|min:1|integer",
            "price"=>"required|max:100|min:0",
            "opening_date"=>"required|date",
            "closing_date"=>"required|date",
            "has_volley_beach"=>"required|boolean",
            "has_soccer_field"=>"required|boolean"
        ]);
        $shore = Shore::findOrFail($id);
        $shore->update($data);
        return redirect()->route('admin.shores.show', $shore->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shore = Shore::findOrFail($id);
        $shore->delete();
        return redirect()->route('admin.shores.index');
    }
}
