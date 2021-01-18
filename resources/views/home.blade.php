@extends('layouts.layout')

@section('content')
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>
<article class="thumb">
    <a href="images/fulls/13.jpg" class="image"><img src="images/thumbs/13.jpg" alt="" /></a>
    <h2>Soort: DUCK<br>
        Locatie: Amsterdam<br>
        Datum: 13-12-20<br></h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>

@foreach($uploads as $upload)

<article class="thumb">
    <a href=" {{$upload->image}} " class="image"><img src="{{$upload->image}}" alt="image" /></a>
    <h2>Soort: {{$upload->name}}
        <br>
        Locatie: {{$upload->locatie}}
        <br>
        Datum: {{$upload->datum}}
        <br>
    </h2>
    <p>Nunc blandit nisi ligula magna sodales lectus elementum non. Integer id venenatis velit.</p>
</article>

@endforeach

@endsection