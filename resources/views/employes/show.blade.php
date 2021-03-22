@extends('layouts.layout')
@section('header')

<header class="section-header">
    <h2>Employees</h2>
    <p>Show employee</p>
  </header>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employes.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>name:</strong>
                {{ $employe->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email :</strong>
                {{ $employe->email }}
            </div>
        </div>
    </div>
@endsection