@extends('layouts.app')
@section('title','Dodawanie')
@section('content')

<form action="{{ route('sites.saveProductAdd') }}" method="post"  >

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        Podaj nazwę towaru:<input type="text" class="form-control" name="product_name" required>
    </div>
    <div class="form-group">
        Podaj liczbę towaru:<input type="number" class="form-control" name="number_of_product" required>
    </div>
    <div class="form-group">
        Podaj cenę towaru:<input type="number" class="form-control" name="product_price" step="0.01" required>
    </div>  
    <div class="form-group">
    
    <button class="btn btn-primary">Dodaj</button> 
    
    </div> 


</form>

<form action="{{ route('sites.saveProductUpdate') }}" method="post" >

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            Wybierz towar:
            <select name="product_name" required>
            @foreach ($danetu as $x)
            <option value="{{ $x->id }}"> {{ $x->product_name }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            Podaj liczbę towaru:<input type="number" class="form-control" name="number_of_product" required>
        </div>
        <div class="form-group">
            Podaj cenę towaru:<input type="number" class="form-control" name="product_price" step="0.01" required>
        </div>  
        <div class="form-group">
        
        <button class="btn btn-primary">Aktualizuj</button> 
        
        </div> 
    
    
    </form>

    <form action="{{ route('sites.saveProductDelete') }}" method="post" >

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                Wybierz towar:
                <select class="form-control" name="product_name" required>
                @foreach ($danetu as $x)
                <option value="{{ $x->id }}"> {{ $x->product_name }}</option>
                @endforeach
                </select>
            </div> 
            <div class="form-group">
              Wpisz "Zgadzam się" aby potwierdzić<input class="form-control" type="text" name="agree" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Usuń</button> 
            </div>
            
           
        
        
        </form>
    

@endsection
