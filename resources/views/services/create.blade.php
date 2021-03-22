@extends('layouts.layout')
  
@section('header')

<header class="section-header">
    <h2>Services</h2>
    <p>Create New Service</p>
  </header>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
        </div>
    </div>
</div>
   
<div class=" p-2" >
    @if ($message = Session::get('warning'))
            <div class="alert alert-warning">
                <p>{{ $message }}</p>
            </div>
        @endif
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
   
<form action="{{ route('services.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Value per hour:</strong>
                <input class="form-control"  name="ValuePerHr" placeholder="Value per hour">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection