@extends('layouts.layout')
@section('header')

<header class="section-header">
    <h2>Orders</h2>
    <p>Check all Orders</p>
  </header>
@endsection

@section('content')
    <div class="row p-2">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right p-2">
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Create new orders</a>
            </div>
        </div>
    </div>
   <div class=" p-2" >
    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
   </div>

    <table id="table" class="table-fit table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>N Hours</th>
                <th>Tax</th>
                <th>Service</th>
                <th>Employe</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id}}</td>
            <td>{{ $order->hours }}</td>
            <td> {{ $order->tax}}</td>
            <td><a href="{{ route('services.show',$order->service_id) }}">{{ App\Models\Service::where('id', $order->service_id)->first()->name }}</a></td>
            <td><a href="{{ route('employes.show',$order->employe_id) }}">{{ App\Models\Employe::where('id', $order->employe_id)->first()->name }}</a></td>
            <td><b>{{ $order->Total}} $R</b> </td>
            <td>
                <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
           
        </tr>
        @endforeach
        </tbody>
    </table>
  

@endsection