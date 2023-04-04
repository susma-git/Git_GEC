@extends('template')
@section('content')
<section id="aboutus">
 <div class="container">
  <div class="content-section">
    <div class="title">
      <h1>About us</h1>
    </div>
    <div class="content">
      <h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis perferendis iure tempora ab sapiente, tempore numquam cumque aperiam nihil at in vitae beatae quos magni ipsum quas deleniti suscipit possimus et voluptate doloribus, ducimus illo libero labore? Accusantium dolorum aspernatur ut in, corporis optio facere, ratione vel, nisi blanditiis sunt!</p>
      <div class="button">
        <a href="#">Read More</a>
      </div>
    </div>
    <div class="social">
      <a href="#" ><i class="fab fa-facebook"></i></a>
      <a href="#" ><i class="fab fa-twitter"></i></a>
      <a href="#" ><i class="fab fa-whatsapp"></i></a>
    </div>
  </div>
  <div class="image-section">
    <img src="{{asset('site/images/building.jpg')}}"  alt="building">
  </div>
 </div>
</section>


@endsection