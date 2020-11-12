@extends('layouts.app')
@section('title','Wydarzenia')
@section('content')



<wydarzenia :information="{{$eventsdata}}"></wydarzenia>
<form action="{{ route('sites.saveEventAdd') }}" method="post"  >

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
@endsection