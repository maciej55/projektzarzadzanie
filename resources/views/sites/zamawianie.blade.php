@extends('layouts.app')
@section('title','Zamawianie')
@section('content')

<form action="{{ route('sites.saveOrderAdd') }}" method="post">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
    Wybierz klienta: <select class="form-control" name="id_customer">
@foreach ($danek as $x)
<option value="{{ $x->id }}"> {{ $x->first_name." ".$x->last_name }}</option>
@endforeach
    </select>
    </div>
    
    <div class="form-group">
   Wybierz towar: <select class="form-control" name="id_product">
@foreach ($danet as $x)
    <option value="{{ $x->id }}"> {{ $x->product_name }}</option>
@endforeach
    </select>
    </div>

<div class="form-group">
Wybierz priorytet:
<select class="form-control" name="priority">
<option value="yes">tak</option>
<option value="no">nie</option>
</select>
</div>

<div class="form-group">
    Podaj ilość:<input type="number" class="form-control" name="number" required>
</div> 

<div class="form-group">
<button class="btn btn-primary">Zamów</button> 
</div> 

   
</form>
@endsection

