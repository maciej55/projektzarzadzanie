@extends('layouts.app')
@section('title','Dodawanie')
@section('content')

<form action="{{ route('sites.savet') }}" method="post" name="formularz1" >

<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        Podaj nazwę towaru:<input type="text" class="form-control" name="nazwa_towaru" required>
    </div>
    <div class="form-group">
        Podaj liczbę towaru:<input type="number" class="form-control" name="liczba_towaru" required>
    </div>
    <div class="form-group">
        Podaj cenę towaru:<input type="number" class="form-control" name="cena_towaru" step="0.01" required>
    </div>  
    <div class="form-group">
    
    <button class="btn btn-primary">Dodaj</button> 
    
    </div> 


</form>

<form action="{{ route('sites.savetu') }}" method="post" name="formularz2" >

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            Wybierz towar:
            <select name="nazwa_towaru" required>
            @foreach ($danetu as $x)
            <option value="{{ $x->id }}"> {{ $x->nazwa_towaru }}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            Podaj liczbę towaru:<input type="number" class="form-control" name="liczba_towaru" required>
        </div>
        <div class="form-group">
            Podaj cenę towaru:<input type="number" class="form-control" name="cena_towaru" step="0.01" required>
        </div>  
        <div class="form-group">
        
        <button class="btn btn-primary">Aktualizuj</button> 
        
        </div> 
    
    
    </form>

    <form action="{{ route('sites.savetd') }}" method="post" name="formularz3" >

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                Wybierz towar:
                <select class="form-control" name="nazwa_towaru" required>
                @foreach ($danetu as $x)
                <option value="{{ $x->id }}"> {{ $x->nazwa_towaru }}</option>
                @endforeach
                </select>
            </div> 
            <div class="form-group">
              Wpisz "Zgadzam się" aby potwierdzić<input class="form-control" type="text" name="potwierdz" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Usuń</button> 
            </div>
            
           
        
        
        </form>
    

@endsection
