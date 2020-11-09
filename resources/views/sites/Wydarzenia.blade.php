@extends('layouts.app')
@section('title','Wydarzenia')
@section('content')



<wydarzenia :dane="{{$eventsdata}}"></wydarzenia>
<form action="{{ route('sites.savew') }}" method="post" name="formularz4" >

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            Podaj tytuł:
            <input class="form-control" type="text" name="title_wydarzenia" required> 
        </div> 
        <div class="form-group">
         Opis: <textarea class="form-control" name="description_wydarzenia" required></textarea>
        </div>
        <div class="form-group">
            Data: <input class="form-control" type="date" name="date_wydarzenia" required>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Dodaj</button> 
        </div>
 
    </form>
@endsection