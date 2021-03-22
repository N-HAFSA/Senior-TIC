@extends('layouts.layout')
 
@section('header')

<header class="section-header">
    <h2>Services</h2>
    <p>Check all Services</p>
  </header>
@endsection

@section('content')
    <div class="row p-2">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right p-2">
                <a class="btn btn-success" href="{{ route('services.create') }}"> Create new services</a>
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
                <th>name</th>
                <th>Value per Hr</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($services as $service)
        <tr>
            <td>{{ $service->id}}</td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->ValuePerHr}}</td>
            <td>
                <form action="{{ route('services.destroy',$service->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('services.show',$service->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('services.edit',$service->id) }}">Edit</a>
   
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