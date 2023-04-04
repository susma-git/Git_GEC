<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gnadaki_eng_consultancy</title>
    <link rel="stylesheet" href="{{asset('site/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
</head>
<body>
<!-- navbar starts from here -->

<section id="navbar">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 ">
        <div class="container">
          <a href="#" class="navbar-brand">Gandaki Engineering Consultancy</a>
          <button
          type="button"
          class="navbar-toggler"
          data-bs-target = "#navbarNav"
          data-bs-toggle ="collapse"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle Navbar" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto">

            </div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="{{route('getHome')}}" class="nav-link text-white">Home</a>
              </li>
              <li class="nav-item">
                <a href="{{route('getAbout')}}" class="nav-link text-white">About</a>
              </li>
              <li class="nav-item">
                <a href="{{route('getService')}}" class="nav-link text-white">Service</a>
              </li>
              <li class="nav-item">
                <a href="{{route('getGallery')}}" class="nav-link text-white">Gallery</a>
              </li>
              <li class="nav-item">
                <a href="{{route('getContact')}}" class="nav-link text-white">Contact</a>
              </li>
            </ul>
            <form class="example " action="action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"  class="btn"><i class="  fa-solid fa-magnifying-glass "></i></button>
            </form>
          </div>
        </div>
      </nav>      
</section>
<!-- navbar ends from here -->
@yield('content')
<Section id="footer">
  <footer class="bg-dark text-white pt-5 pb-4">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Gandaki Engineering </h5>
        <hr class="mb-4">
        <p>Gandaki Engineering Consultancy is a well recognized Property Valuation  and Engineering consultant located in Pokhara. You dream, we will make your dream come true.</p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Services</h5>
        <hr class="mb-4">
        <p>
          <a href="#" class= "text-white" style="text-decoration:none;">Consultant</a>
        </p>
        <p>
          <a href="#" class= "text-white" style="text-decoration:none;">Property Valuation</a>
        </p>
        <p>
          <a href="#" class= "text-white" style="text-decoration:none;">Estimation</a>
        </p>
        <p>
          <a href="#" class= "text-white" style="text-decoration:none;">Construction</a>
        </p>
        <p>
          <a href="#" class= "text-white" style="text-decoration:none;">Labour contract</a>
        </p>
      </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Go to</h5>
          <hr class="mb-4">
          <p>
            <a href="#" class= "text-white" style="text-decoration:none;">Get a Quotation</a>
          </p>
          <p>
            <a href="#" class= "text-white" style="text-decoration:none;">Municipality Design Pass</a>
          </p>
          <p>
            <a href="#" class= "text-white" style="text-decoration:none;">Site Inspection</a>
          </p>
          <p>
            <a href="#" class= "text-white" style="text-decoration:none;">Bulding Design</a>
          </p>
          <p>
            <a href="#" class= "text-white" style="text-decoration:none;">3D Modeling</a>
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
          <hr class="mb-4">
            <p>
              <i class="fas fa-home mr-3"></i>Sitaldevi, Pokhara-12
            </p>
            <p>
              <i class="fas fa-envelope mr-3"></i>gandakiengineers2018@gmail.com
            </p>
            <p>
              <i class="fas fa-phone mr-3"></i>+977 9856050783
            </p>
            <p>
              <i class="fas fa-print mr-3"></i>+977 9856050783
            </p>
        </div>
    </div>

    <hr class="mb-4">

    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8">
        <p>copyright ©2023 All right reserved by:
          <a href="#" style="text-decoration:none;">
            <strong class="text-warning"> GandakiEngineers</strong>
          </a>
        </p>
      </div>

    <div class="col-md-5 col-lg-4">
      <div class="text-center text-md-right">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="fontsize:23px;">
            <i class="fab fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="fontsize:23px;">
            <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="fontsize:23px;">
            <i class="fab fa-google-plus"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="fontsize:23px;">
            <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="#" class="btn-floating btn-sm text-white" style="fontsize:23px;">
            <i class="fab fa-linkedin-in"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>

    </div>

  </div>
  </footer>
</section>


<script src="{{asset('site/fontawesome/js/all.js')}}"></script>
<script src="{{asset('site/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/script.js')}}"></script>
</body>
</html>