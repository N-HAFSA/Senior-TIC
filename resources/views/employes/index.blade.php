@extends('layouts.layout')
@section('header')

<header class="section-header">
    <h2>Employees</h2>
    <p>Check all Employees</p>
  </header>
@endsection

@section('content')
    <div class="row p-2">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right p-2">
                <a class="btn btn-success" href="{{ route('employes.create') }}"> Create new employes</a>
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
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($employes as $employe)
        <tr>
            <td>{{ $employe->id}}</td>
            <td>{{ $employe->name }}</td>
            <td>{{ $employe->email}}</td>
            <td>
                <form action="{{ route('employes.destroy',$employe->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employes.show',$employe->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('employes.edit',$employe->id) }}">Edit</a>
   
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