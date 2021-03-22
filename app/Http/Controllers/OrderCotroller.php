<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use App\Models\Employe;

use Illuminate\Http\Request;

class OrderCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = Order::all();
            
        return view('orders.index',compact('orders'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        $employes = Employe::all();
      
        if($services->isEmpty()){
            return redirect()
            ->route('services.create')
            ->with('warning','create your first service before!');
        }else if( $employes->isEmpty()){
            return redirect()
            ->route('employes.create')
            ->with('warning','create your first employe before!');
        }
        else{
            return view('orders.create',compact('services'),compact('employes'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'employe_id' => 'required',
            'service_id' => 'required',
            'hours' => 'required',
            'tax' => 'required',
        ]);
        $service = Service::where('id', '=', $request->service_id)->firstOrFail();
       // dd($service->ValuePerHr * $request->tax * $request->hours);
        $total = $service->ValuePerHr * $request->tax * $request->hours;
        $request->request->add(['Total' => $total]); //add request

         Order::create($request->all());
        return redirect()
            ->route('orders.index')
            ->with('success','order created successfully./n the total value is:'.$total. " R$");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $services = Service::all();
        $employes = Employe::all();
        return view('orders.edit',compact('order','employes','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'employe_id' => 'required',
            'service_id' => 'required',
            'hours' => 'required',
            'tax' => 'required',
        ]);
  
        $service = Service::where('id', '=', $request->service_id)->firstOrFail();
        $total = $service->ValuePerHr * $request->tax * $request->hours;
        $request->request->add(['Total' => $total]); //add request

        $order->update($request->all());
  
        return redirect()
            ->route('orders.index')
            ->with('success','order updated successfully./n the total value is:'.$total. " R$");
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()
            ->route('orders.index')
            ->with('success','orders deleted successfully');
    
    }
}
