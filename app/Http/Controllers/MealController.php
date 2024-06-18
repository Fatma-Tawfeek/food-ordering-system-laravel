<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Day;
use App\Models\Meal;
use App\Models\Image;
use App\Models\Wmeal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wmeals = Wmeal::all();
        $meals = Meal::all();
        $days = Day::all();
        return view('admin.meals.index', compact('wmeals', 'meals', 'days'));
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
            'price' => 'required',
            'day' => 'required',
            'quantity' => 'required',
           // 'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        $messages = [
            'name_en.required' => 'Name in english is required',
            'name_ar.required' => 'Name in arabic is required',
            'description_en.required' => 'Description in english is required',
            'description_ar.required' => 'Description in arabic is required',
            'price.required' => 'price is required',
            'day.required' => 'Avaliabilty day is required',
            'quantity.required' => 'quantity is required',
            'thumbnail.required' => 'Thumbnail is required',
            'thumbnail.image' => 'Invalid file',
            'thumbnail.mimes' => 'Invalid file extension',
            'thumbnail.max' => 'Image is too big. Max size is: 2MB',
            'images.image' => 'Invalid file',
            'images.mimes' => 'Invalid file extension',
            'images.max' => 'Image is too big. Max size is: 2MB'
        ];

        $this->validate($request, $rules, $messages);

        $record = new Meal;
        $record->name_en = $request->name_en;
        $record->name_ar = $request->name_ar;
        $record->description_en = $request->description_en;
        $record->description_ar = $request->description_ar;
        $record->day = $request->day;
        $record->price = $request->price;
        $record->quantity = $request->quantity;

        if ($request->has('category_id')){
            $record->category_id = $request->category_id;
        }

        if($request->hasFile('thumbnail')){
            $path =  $this->storeFile($request->file('thumbnail'), $record->id);
            $record->thumbnail = $path;
        }

        $record->save();


        if($request->has('images')) {
            foreach ($request->file('images') as $imagefile) {
                $image = new Image;
                $path =  $this->storeFile($imagefile, $record->id);
                $image->url = $path;
                $image->meal_id = $record->id;
                $image->save();
        }
}
        flash()->success('Meal has been added Successfully!');

        return back();

    }

    public function wstore(Request $request)
    {
        $rules = [
            'name_en' => 'required',
            'name_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'price' => 'required',
            'days' => 'required',
            'quantity' => 'required',
//            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        $messages = [
            'name_en.required' => 'Name in english is required',
            'name_ar.required' => 'Name in arabic is required',
            'description_en.required' => 'Description in english is required',
            'description_ar.required' => 'Description in arabic is required',
            'price.required' => 'price is required',
            'days.required' => 'Avaliabiltys day is required',
            'quantity.required' => 'quantity is required',
            'thumbnail.required' => 'Thumbnail is required',
            'thumbnail.image' => 'Invalid file',
            'thumbnail.mimes' => 'Invalid file extension',
            'thumbnail.max' => 'Image is too big. Max size is: 2MB',
            'images.image' => 'Invalid file',
            'images.mimes' => 'Invalid file extension',
            'images.max' => 'Image is too big. Max size is: 2MB'
        ];

        $this->validate($request, $rules, $messages);


        $record = new Wmeal;
        $record->name_en = $request->name_en;
        $record->name_ar = $request->name_ar;
        $record->description_en = $request->description_en;
        $record->description_ar = $request->description_ar;
        $record->price = $request->price;
        $record->quantity = $request->quantity;
        if($request->hasFile('thumbnail')){
            $path =  $this->storeFile($request->file('thumbnail'), $record->id);
            $record->thumbnail = $path;
        }
        $record->save();

        $record->days()->attach($request->days);


        if($request->has('images')) {
            foreach ($request->file('images') as $imagefile) {
                $image = new Image;
                $url = $imagefile->store('/images', ['disk' =>   'my_files']);
                $image->url = $url;
                $image->wmeal_id = $record->id;
                $image->save();
        }
}
        flash()->success('Meal has been added Successfully!');

        return redirect(route('meals.index'));

    }

    public function wupdate(Request $request, $id)
    {
        $rules = [
            'name_en' => 'required',
            'name_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
            'price' => 'required',
            'days' => 'required',
            'quantity' => 'required',
//            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
//            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        $messages = [
            'name_en.required' => 'Name in english is required',
            'name_ar.required' => 'Name in arabic is required',
            'description_en.required' => 'Description in english is required',
            'description_ar.required' => 'Description in arabic is required',
            'price.required' => 'price is required',
            'days.required' => 'Avaliabiltys day is required',
            'quantity.required' => 'quantity is required',
            'thumbnail.required' => 'Thumbnail is required',
            'thumbnail.image' => 'Invalid file',
            'thumbnail.mimes' => 'Invalid file extension',
            'thumbnail.max' => 'Image is too big. Max size is: 2MB',
            'images.image' => 'Invalid file',
            'images.mimes' => 'Invalid file extension',
            'images.max' => 'Image is too big. Max size is: 2MB'
        ];

        $this->validate($request, $rules, $messages);

        $record = Wmeal::findOrFail($id);
        $record->name_en = $request->name_en;
        $record->name_ar = $request->name_ar;
        $record->description_en = $request->description_en;
        $record->description_ar = $request->description_ar;
        $record->price = $request->price;
        $record->quantity = $request->quantity;

        if($request->hasFile('thumbnail')){

            try {
                $this->remove($record->thumbnail);
            } catch(\Exception $e) {
                // do nothing
            }

            $path =  $this->storeFile($request->file('thumbnail'), $record->id);
            $record->thumbnail = $path;
        }

        if($request->has('images')) {
            $record->images()->delete();
        foreach ($request->file('images') as $imagefile) {
            $image = new Image;
            $path =  $this->storeFile($imagefile, $record->id);
            $image->url = $path;
            $image->wmeal_id = $record->id;
            $image->save();
        }
    }

        $record->update();

        $record->days()->sync($request->days);


        flash()->success('Meal has been updated Successfully!');

        return redirect(route('meals.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meal = Meal::whereId($id)->first();
        return view('meal-details', compact('meal'));
    }

    public function wshow($id)
    {
        $wmeal = Wmeal::whereId($id)->first();

        return view('wmeal-details', compact( 'wmeal'));
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
            'price' => 'required',
            'day' => 'required',
            'quantity' => 'required',
//            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
//            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        $messages = [
            'name_en.required' => 'Name in english is required',
            'name_ar.required' => 'Name in arabic is required',
            'description_en.required' => 'Description in english is required',
            'description_ar.required' => 'Description in arabic is required',
            'price.required' => 'price is required',
            'day.required' => 'Day is required',
            'quantity.required' => 'quantity is required',
            'thumbnail.image' => 'Invalid file',
            'thumbnail.mimes' => 'Invalid file extension',
            'thumbnail.max' => 'Image is too big. Max size is: 2MB',
            'images.image' => 'Invalid file',
            'images.mimes' => 'Invalid file extension',
            'images.max' => 'Image is too big. Max size is: 2MB'
        ];

        $this->validate($request, $rules, $messages);

        $record = Meal::findOrFail($id);

        $record->name_en = $request->name_en;
        $record->name_ar = $request->name_ar;
        $record->description_en = $request->description_en;
        $record->description_ar = $request->description_ar;
        $record->day = $request->day;
        $record->price = $request->price;
        $record->quantity = $request->quantity;

        if ($request->has('category_id')){
            $record->category_id = $request->category_id;
        }

        if($request->hasFile('thumbnail')){

            try {
                $this->remove($record->thumbnail);
            } catch(\Exception $e) {
                // do nothing
            }

            $path =  $this->storeFile($request->file('thumbnail'), $record->id);
            $record->thumbnail = $path;
        }

        $record->update();

        if($request->has('images')) {
            $record->images()->delete();
        foreach ($request->file('images') as $imagefile) {

            $image = new Image;
            $path =  $this->storeFile($imagefile, $record->id);
            $image->url = $path;
            $image->meal_id = $record->id;
            $image->save();
        }
    }
            flash()->success('Meal has been updated Successfully!');
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
        $record = Meal::findOrFail($id);    
        $record->delete();
        flash()->success('Meal has been deleted!');
        return back();
    }

    public function wdestroy($id)
    {
        $record = Wmeal::findOrFail($id);      
        $record->delete();
        flash()->success('Meal has been deleted!');
        return back();
    }
}
