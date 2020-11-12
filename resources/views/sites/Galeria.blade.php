@extends('layouts.app')
@section('title','Galeria')
@section('content')
<br><br><br><br><br>
<div class="container">
<div class="col-xs-12 col-sm-6 col-md-4">
<img class="photos" src="{{URL::asset('/zdj/horse.jpg')}}" alt="zdjęcie 1">
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img class="photos" src="{{URL::asset('/zdj/horse.jpg')}}" alt="zdjęcie 2" >
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img class="photos" src="{{URL::asset('/zdj/horse.jpg')}}" alt="zdjęcie 3">
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img class="photos" src="{{URL::asset('/zdj/horse.jpg')}}" alt="zdjecie 4">
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img class="photos" src="{{URL::asset('/zdj/horse.jpg')}}" alt="zdjęcie 5">
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img class="photos" src="{{URL::asset('/zdj/horse.jpg')}}" alt="zdjęcie 6">
</div>
</div>
@endsection
