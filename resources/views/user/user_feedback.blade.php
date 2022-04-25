<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Waste Management System</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

          <form action="#">
            <div class="input-group input-navbar">
              <div class="input-group-prepend">
                <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
              </div>
              <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
            </div>
          </form>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="truck.html">Trucks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>

              @if(Route::has('login'))
              @auth
              <li class="nav-item">
                <a class="nav-link" style="background-color:rgb(0, 255, 234); color:black" href="{{ url('myappointment') }}">My Appointment</a>
              </li>
              <x-app-layout>
              </x-app-layout>

              @else

              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login </a>
              </li>

              <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}"> Register</a>
                </li>
              @endauth
              @endif

            </ul>
          </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
      </nav>

  </header>

  @if(session()->has('message'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                <div  class="alert alert-success" >

                    {{ session()->get('message') }}
                </div>
            </div>

            @endif


            <div class="container">
                <div class="row">
                    <div class="col-8 offset-md-2">
                        <div class="card mt-5">
                            <div class="card-header">
                                <h3 class="card-title">Contact Form</h3>
                            </div>
                            <div class="card-body">


                                <form id="contact-frm" action="{{ url('feedback') }}" method="POST">
                                    @csrf
                                    <div id="res" ></div>
                                    <br>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" name = "name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email"  name = "email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Message</label>
                                        <textarea name="message" id="msg" class="form-control" placeholder="How can we help you?"></textarea>
                                      </div>
                                      <div class="col-12 text-center mt-4 " >
                                        <button type="submit"  class="btn btn-primary ">Submit </button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




 @include('layouts.footer')

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>

</body>
</html>