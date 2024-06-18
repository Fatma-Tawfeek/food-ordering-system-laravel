<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;


class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'description_en' => 'required',
            'description_ar' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        $messages = [
            'name_en.required' => 'Name in english is required',
            'name_ar.required' => 'Name in arabic is required',
            'description_en.required' => 'Position in english is required',
            'description_ar.required' => 'Position in arabic is required',
            'thumbnail.required' => 'Image is required',
            'thumbnail.image' => 'Invalid file',
            'thumbnail.mimes' => 'Invalid file extension',
            'thumbnail.max' => 'Image is too big. Max size is: 2MB'
        ];

        $this->validate($request, $rules, $messages);


        $record = new Chef;
        $record->name_en = $request->name_en;
        $record->name_ar = $request->name_ar;
        $record->description_en = $request->description_en;
        $record->description_ar = $request->description_ar;
        $record->fb_link = $request->facebook;
        $record->tw_link = $request->twitter;
        $record->insta_link = $request->instagram;
        if($request->hasFile('thumbnail')){
            $path =  $this->storeFile($request->file('thumbnail'), $record->id);
            $record->image = $path;
        }
        $record->save();

        flash()->success('Chef has been added Successfully!');

        return redirect(route('settings.index'));

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
            'description_en' => 'required',
            'description_ar' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        $messages = [
            'name_en.required' => 'Name in english is required',
            'name_ar.required' => 'Name in arabic is required',
            'description_en.required' => 'Position in english is required',
            'description_ar.required' => 'Position in arabic is required',
            'thumbnail.image' => 'Invalid file',
            'thumbnail.mimes' => 'Invalid file extension',
            'thumbnail.max' => 'Image is too big. Max size is: 2MB'
        ];

        $this->validate($request, $rules, $messages);


        $record = Chef::findOrFail($id);
        $record->name_en = $request->name_en;
        $record->name_ar = $request->name_ar;
        $record->description_en = $request->description_en;
        $record->description_ar = $request->description_ar;
        $record->fb_link = $request->facebook;
        $record->tw_link = $request->twitter;
        $record->insta_link = $request->instagram;
        if($request->hasFile('thumbnail')){
            $path =  $this->storeFile($request->file('thumbnail'), $record->id);
            $record->image = $path;
        }
        $record->update();

        flash()->success('Chef has been updated Successfully!');

        return redirect(route('settings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Chef::findOrFail($id);      
        $record->delete();
        flash()->success('Chef has been deleted!');
        return back();
    }
}
