@extends('layouts.app')
@section('title','Wydarzenia Zmiana')
@section('content')


<form action="{{ route('sites.saveEventAdd') }}" method="post" >

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            Podaj tytuł:
            <input class="form-control" type="text" name="title" required> 
        </div> 
        <div class="form-group">
         Opis: <textarea class="form-control" name="description" required></textarea>
        </div>
        <div class="form-group">
            Data: <input class="form-control" type="date" name="date_event" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Dodaj</button> 
        </div>
 
    </form>

    <form action="{{ route('sites.saveEventDelete') }}" method="post" >

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            Wybierz wydarzenie: <select class="form-control" name="id_event" required>
        @foreach ($events as $x)
        <option value="{{ $x->id }}"> {{ "Tytuł: ".$x->title." Data: ".$x->date_event }}</option>
        @endforeach
            </select>
            </div>           
           
            <div class="form-group">
                <button class="btn btn-primary">Usuń</button> 
            </div>
     
        </form>
        <a  href="/event">Powrót do wydarzeń</a>  
    
@endsection