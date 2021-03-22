@extends('layouts.layout')
@section('header')

<header class="section-header">
    <h2>Orders</h2>
    <p>Show order</p>
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
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                {{ $orders->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Value Per Hour :</strong>
                {{ $order->ValuePerHr }}
            </div>
        </div>
    </div>
@endsection