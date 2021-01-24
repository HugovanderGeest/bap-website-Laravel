@extends('layouts.layout')

@section('content')



@foreach($uploads as $upload)

<article class="thumb">

    <a href="{{Storage::url($upload->image)}}" class="image"><img src="{{Storage::url($upload->image)}}" alt="image" /></a>
    <h2>Soort: {{$upload->name}}
        <br>
        Locatie: {{$upload->locatie}}
        <br>
        Datum: {{$upload->datum}}
        <br>
    </h2>

    <p>Dit is de wilde eend</p>
</article>


@endforeach



@endsection

@section ('footer')
{{$uploads->Links()}}
@endsection