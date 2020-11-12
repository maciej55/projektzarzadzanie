@extends('layouts.app')
@section('title','Klient')
@section('content')

<form action="{{ route('sites.saveCustomerAdd') }}" method="post">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        Podaj imie: <input type="text" class="form-control" name="first_name" required>
    </div>
    <div class="form-group">
        Podaj nazwisko: <input type="text" class="form-control" name="last_name" required>
        
    </div>
    <div class="form-group">
    <button class="btn btn-primary">Dodaj</button> 
    </div> 
    
</form>
@endsection
