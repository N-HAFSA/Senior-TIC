@extends('layouts.layout')
@section('header')

<header class="section-header">
    <h2>Orders</h2>
    <p>Create New Order</p>
  </header>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
        </div>
    </div>
</div>
   

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('orders.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Service:</strong>
                <select name="service_id" id="" name="service"  class="form-control">
                    <option value=""   >choose The service </option>
                    @foreach ($services->all() as $service)
                     <option value="{{$service->id}}">{{$service->name}}</option>
                    @endforeach
                </select>
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employe:</strong>
                <select name="employe_id" id="" name="service"  class="form-control">
                    <option value=""   >Select The employe </option>
                    @foreach ($employes->all() as $employe)
                     <option value="{{$employe->id}}">{{$employe->name}}</option>
                    @endforeach
                </select>
             </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>How many hour:</strong>
                <input class="form-control"  name="hours" placeholder="number of hours to execute the service">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tax value:</strong>
                <input class="form-control"  name="tax" placeholder="tax for the order">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection