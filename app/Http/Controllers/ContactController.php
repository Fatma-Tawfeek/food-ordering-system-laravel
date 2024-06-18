<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $records = Contact::where([
            [function ($query) use ($request) {
                if (($request->has('from')) || ($request->has('to'))) {
                    $query->where('created_at', '>=', $request->from)
                    ->where('created_at', '<=', $request->to)
                    ->get();
                }
            }]
        ])
        ->orderBy("id", "desc")
        ->paginate(20);
        return view('admin.contacts.index', compact('records'));
    }


    public function store(Request $request)
    {
    $rules = [
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required'
    ];

    $messages = [
        'name' => 'Name is required',
        'email' => 'Email is required',
        'subject' => 'Subject is required',
        'message' => 'Message is required'
    ];

    $this->validate($request, $rules, $messages);

    $record = new Contact;
    $record->name = $request->name;
    $record->email = $request->email;
    $record->subject = $request->subject;
    $record->message = $request->message;

    $record->save();

    return response()->json(['success'=>'Successfully']);

}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Contact::findOrFail($id);
        $record->delete();
        flash()->success('Contact has been deleted!');
        return back();
    }
}
