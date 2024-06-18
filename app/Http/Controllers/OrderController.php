<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Meal;
use App\Models\Wmeal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newOrders()
    {
        $records = Order::where('state', '=', 'pending')
        ->with(['wmeal','meal'])
        ->orderBy('created_at', 'DESC')
        ->paginate(15);
        return view('admin.orders.new-orders', compact('records'));
    }

    public function currentOrders()
    {
        $records = Order::where('state', '=', 'accepted')
        ->with(['wmeal','meal'])
        ->orderBy('created_at', 'DESC')
        ->paginate(15);
        return view('admin.orders.current-orders', compact('records'));
    }

    public function previousOrders()
    {
        $records = Order::where('state', '=', 'completed')
        ->orWhere('state', '=', 'rejected')
        ->orderBy('created_at', 'DESC')
        ->paginate(15);
        return view('admin.orders.previous-orders', compact('records'));
    }

    public function updateState($id, $state) {
        try {

            $order = Order::whereId($id)->first();

            if ($state) {
                if($state == 'rejected'){
                    $quantity = $order->quantity;
                    if($order->meal_id){
                        $meal = Meal::whereId($order->meal_id)->first();
                        $meal_quantity = $meal->quantity;
                        
                    }elseif($order->wmeal_id){
                        $meal = Wmeal::whereId($order->meal_id)->first();
                        $meal_quantity = $meal->quantity;
                    }
                    $total_quantity = $quantity + $meal_quantity;
                    $meal->update([
                        'quantity' => $total_quantity
                    ]);
                }
                $order->update([
                    'state' => $state
                ]);

                flash()->success('Order State has been updated successfully!');
                return back();
             }           
       

        } catch (\Throwable $th) {
            throw $th;
        }
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'phone' => 'required|regex:/^01[0125][0-9]{8}$/|min:11',
            'address' => 'required',
            'quantity' => 'required',
            'preferred_delivery_time' => 'required'
        ];

        $messages = [
            'name.required' => 'Name is required',
            'phone.required' => 'Phone is required',
            'phone.regex' => 'Phone number is invalid',
            'phone.required' => 'Phone number is required',
            'address.required' => 'Address is required',
            'quantity.required' => 'Quantity required',
            'preferred_delivery_time.required' => 'Preferred delivery time required'
        ];

        $this->validate($request, $rules, $messages);

        $record = new Order;
        $record->name = $request->name;
        $record->phone = $request->phone;
        $record->address = $request->address;
        $record->quantity = $request->quantity;
        $record->preferred_delivery_time = $request->preferred_delivery_time;
        if($request->has('notes')) {
            $record->notes = $request->notes;
        }
        $record->meal_id = $request->id;

        $record->save();

        $record->meal->decrement('quantity', $record->quantity);

        alert()->success('Title','Lorem Lorem Lorem');

        return back();


    }

    public function wstore(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'phone' => 'required|regex:/^01[0125][0-9]{8}$/|min:11',
            'address' => 'required',
            'quantity' => 'required',
            'day' => 'required',
            'preferred_delivery_time' => 'required'
        ];

        $messages = [
            'name.required' => 'Name is required',
            'phone.required' => 'Phone is required',
            'phone.regex' => 'Phone number is invalid',
            'phone.required' => 'Phone number is required',
            'address.required' => 'Address is required',
            'quantity.required' => 'Quantity required',
            'dau.required' => 'Preferred Delivery Day is Required',
            'preferred_delivery_time.required' => 'Preferred delivery time required'
        ];

        $this->validate($request, $rules, $messages);

        $record = new Order;
        $record->name = $request->name;
        $record->phone = $request->phone;
        $record->address = $request->address;
        $record->quantity = $request->quantity;
        $record->preferred_delivery_time = $request->preferred_delivery_time;
        if($request->has('notes')) {
            $record->notes = $request->notes;
        }
        if($request->has('day')){
            $record->day = $request->day;
        }

        $record->wmeal_id = $request->id;

        $record->save();

        $record->wmeal->decrement('quantity', $record->quantity);

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
        $record = Order::findOrFail($id);
        $record->delete();
        flash()->success('Order has been deleted!');
        return back();
    }
}
