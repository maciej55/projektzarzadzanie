@extends('layouts.app')
@section('title','Galeria')
@section('content')
<br><br><br><br><br>
<div class="container">
<div class="col-xs-12 col-sm-6 col-md-4">
<img class="zdjecia" src="{{URL::asset('/zdj/pies.jpg')}}" alt="zdjęcie1">
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img class="zdjecia" src="{{URL::asset('/zdj/pies.jpg')}}" alt="zdjęcie2" >
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img class="zdjecia" src="{{URL::asset('/zdj/pies.jpg')}}" alt="zdjęcie3">
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img class="zdjecia" src="{{URL::asset('/zdj/pies.jpg')}}" alt="zdjecie4">
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img class="zdjecia" src="{{URL::asset('/zdj/pies.jpg')}}" alt="zdjęcie5">
</div>

<div class="col-xs-12 col-sm-6 col-md-4">
<img class="zdjecia" src="{{URL::asset('/zdj/pies.jpg')}}" alt="zdjęcie6">
</div>
</div>
@endsection
