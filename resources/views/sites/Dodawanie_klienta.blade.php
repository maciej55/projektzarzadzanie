@extends('layouts.app')
@section('title','Klient')
@section('content')

<form action="{{ route('sites.savek') }}" method="post">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        Podaj imie: <input type="text" class="form-control" name="imie" required>
    </div>
    <div class="form-group">
        Podaj nazwisko: <input type="text" class="form-control" name="nazwisko" >
        
    </div>
    <div class="form-group">
    <button class="btn btn-primary">Dodaj</button> 
    </div> 
    
</form>
@endsection
