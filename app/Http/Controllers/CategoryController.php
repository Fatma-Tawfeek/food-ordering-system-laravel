<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Category::all();
        return view('admin.categories.index', compact('records'));
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
        $rules = [
            'name_en' => 'required',
            'name_ar' => 'required',
        ];

        $messages = [
            'name_en.required' => 'Name in english is required',
            'name_ar.required' => 'Name in arabic is required',
        ];

        $this->validate($request, $rules, $messages);

        $record = new Category;
        $record->name_en = $request->name_en;
        $record->name_ar = $request->name_ar;

        $record->save();

        flash()->success('Day has been added Successfully!');

        return back();
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
        $rules = [
            'name_en' => 'required',
            'name_ar' => 'required',
        ];

        $messages = [
            'name_en.required' => 'Name in english is required',
            'name_ar.required' => 'Name in arabic is required',
        ];

        $this->validate($request, $rules, $messages);

        $record = Category::findOrFail($id);

        $record->name_en = $request->name_en;
        $record->name_ar = $request->name_ar;
        $record->update();


        flash()->success('Day has been updated Successfully!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Category::findOrFail($id);
        $record->delete();
        flash()->success('Day has been deleted!');
        return back();
    }
}
