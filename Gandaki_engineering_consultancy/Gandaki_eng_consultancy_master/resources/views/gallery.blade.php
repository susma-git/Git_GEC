@extends('template')
@section('content')
<section id="gallery">
    <div class="row">
        <div class="gallery-title">
            <h1>Gallery</h1>
            <p>Picture speaks itself</p>
        </div>
    </div>
  <div class="row">
    @foreach($galleries as $gallery)
    <div class="col-md-3">
        <div class="gallery-image">
            <img src="{{asset('site/uploads/gallery/'.$gallery->gallery_image)}}" alt="">
        </div>
    </div>
    @endforeach
    
    
    </div>
  </div>
  
</section>
@endsection