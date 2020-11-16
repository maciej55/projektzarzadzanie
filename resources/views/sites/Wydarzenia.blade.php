@extends('layouts.app')
@section('title','Wydarzenia')
@section('content')

<Event :informations="{{$eventsdata}}"></Event>    
<a  href="/eventchange">Dodaj lub usuń wydarzenia</a>  
@endsection