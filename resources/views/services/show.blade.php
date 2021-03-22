@extends('layouts.layout')
@section('header')

<header class="section-header">
    <h2>Services</h2>
    <p>Show service</p>
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
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                {{ $service->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Value Per Hour :</strong>
                {{ $service->ValuePerHr }}
            </div>
        </div>
    </div>
@endsection