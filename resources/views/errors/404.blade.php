@extends('errors::illustrated-layout')

@section('code', '404')

@section('title', ('Page Not Found'))

@section('image')

<div style="background-image: url('/images/fulls/duck.jpg');" class="absolute pin bg-no-repeat md:bg-left lg:bg-center">
</div>

@endsection

@section('message', ('Sorry deze pagia is niet gevonden.'))