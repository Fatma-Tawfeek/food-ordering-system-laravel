<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Chef;
use App\Models\Image;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::findOrFail(1);
        $chefs = Chef::all();
        return view('admin.settings.index', compact('settings', 'chefs'));
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
        $setting = Setting::findOrFail($request->id);

        /* Home */
        if($request->has('headline_ar_1')) {
            $setting->headline_ar_1 = $request->headline_ar_1;
        }
        if($request->has('desc_ar_1')) {
            $setting->desc_ar_1 = nl2br($request->desc_ar_1);
        }
        if($request->has('headline_ar_2')) {
            $setting->headline_ar_2 = $request->headline_ar_2;
        }
        if($request->has('desc_ar_2')) {
            $setting->desc_ar_2 = nl2br($request->desc_ar_2);
        }
        if($request->has('headline_ar_3')) {
            $setting->headline_ar_3 = $request->headline_ar_3;
        }
        if($request->has('desc_ar_3')) {
            $setting->desc_ar_3 = nl2br($request->desc_ar_3);
        }
        if($request->has('headline_en_1')) {
            $setting->headline_en_1 = $request->headline_en_1;
        }
        if($request->has('desc_en_1')) {
            $setting->desc_en_1 = nl2br($request->desc_en_1);
        }
        if($request->has('headline_en_2')) {
            $setting->headline_en_2 = $request->headline_en_2;
        }
        if($request->has('desc_en_2')) {
            $setting->desc_en_2 = nl2br($request->desc_en_2);
        }
        if($request->has('headline_en_3')) {
            $setting->headline_en_3 = $request->headline_en_3;
        }
        if($request->has('desc_en_3')) {
            $setting->desc_en_3 = nl2br($request->desc_en_3);
        }

        /* About */

        if($request->has('about_en')) {
            $setting->about_en = nl2br($request->about_en);            
        }

        if($request->has('about_ar')) {
            $setting->about_ar = nl2br($request->about_ar);                 
        }

        if($request->hasFile('about_image')){

            try {
                $this->remove($setting->image);
            } catch(\Exception $e) {
                // do nothing
            }

            $path =  $this->storeFile($request->file('about_image'), $setting->id);
            $setting->about_image = $path;
        }

        if($request->has('images')) {
            $setting->images()->delete();
        foreach ($request->file('images') as $imagefile) {
            $image = new Image;
            $path =  $this->storeFile($imagefile, $setting->id);
            $image->url = $path;
            $image->setting_id = $setting->id;
            $image->save();
        }
    }

        /* Menu */

        if($request->has('menu_text_en')) {
            $setting->menu_text_en = nl2br($request->menu_text_en);            
        }

        if($request->has('menu_text_ar')) {
            $setting->menu_text_ar = nl2br($request->menu_text_ar);                 
        }

        if($request->hasFile('menu_image')){

            try {
                $this->remove($setting->image);
            } catch(\Exception $e) {
                // do nothing
            }

            $path =  $this->storeFile($request->file('menu_image'), $setting->id);
            $setting->menu_image = $path;
        }

        /* Contact */

        if($request->hasFile('contact_image')){

            try {
                $this->remove($setting->image);
            } catch(\Exception $e) {
                // do nothing
            }

            $path =  $this->storeFile($request->file('contact_image'), $setting->id);
            $setting->contact_image = $path;
        }

        if($request->hasFile('form_image')){

            try {
                $this->remove($setting->image);
            } catch(\Exception $e) {
                // do nothing
            }

            $path =  $this->storeFile($request->file('form_image'), $setting->id);
            $setting->form_image = $path;
        }

        if($request->has('fb_link')) {
            $setting->fb_link = $request->fb_link;
        }
        if($request->has('tw_link')) {
            $setting->tw_link = $request->tw_link;
        }
        if($request->has('insta_link')) {
            $setting->insta_link = $request->insta_link;
        }
        if($request->has('whatsapp')) {
            $setting->whatsapp = $request->whatsapp;            
        }

        /* Footer */

        if($request->hasFile('footer_image')){

            try {
                $this->remove($setting->image);
            } catch(\Exception $e) {
                // do nothing
            }

            $path =  $this->storeFile($request->file('footer_image'), $setting->id);
            $setting->footer_image = $path;
        }

        if($request->has('start_day')) {
            $setting->start_day = $request->start_day;            
        }

        if($request->has('end_day')) {
            $setting->end_day = $request->end_day;            
        }

        if($request->has('start_hour')) {
            $setting->start_hour = $request->start_hour;            
        }

        if($request->has('end_hour')) {
            $setting->end_hour = $request->end_hour;            
        }        

        $setting->update();

        flash()->success('Settings have been updated Successfully!');
        return back();
    }
}
