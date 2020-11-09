@extends('layouts.app')
@section('title','Zamawianie')
@section('content')

<form action="{{ route('sites.savez') }}" method="post">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
    Wybierz klienta: <select class="form-control" name="id_klienta">
@foreach ($danek as $x)
<option value="{{ $x->id }}"> {{ $x->imie." ".$x->nazwisko }}</option>
@endforeach
    </select>
    </div>
    
    <div class="form-group">
   Wybierz towar: <select class="form-control" name="id_towaru">
@foreach ($danet as $x)
    <option value="{{ $x->id }}"> {{ $x->nazwa_towaru }}</option>
@endforeach
    </select>
    </div>

<div class="form-group">
Wybierz priorytet:
<select class="form-control" name="priorytet">
<option>tak</option>
<option>nie</option>
</select>
</div>

<div class="form-group">
    Podaj ilość:<input type="number" class="form-control" name="ilosc" required>
</div> 

<div class="form-group">
<button class="btn btn-primary">Zamów</button> 
</div> 

   
</form>
@endsection

