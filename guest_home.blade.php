<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grand Aurelia</title>
  <link rel="stylesheet" href="{{ asset('css/guest.home.css') }}">
  <style>         
  .content-text {
    color: white;
    text-align: center;
    position: absolute;
    z-index: 2;
    display: none; 
  }

  .home-description {
    font-size: 18px;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.6;
  }

  .content-text p {
    font-size: 18px;
    max-width: 800px;
    margin: 10px auto;
    line-height: 1.6;
  }

  .content-text.active {
    display: block; 
    animation: fadeIn 0.5s ease-in-out;
  }

  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
</style>
</head>
<body>

<header>
  <nav class="navbar">
  <ul class="nav-links">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('rooms') }}">Rooms</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
</ul>
    <div class="logo">
      <img src="{{ asset('images/logo1.png') }}" alt="Grand Aurelia Logo">
    </div>
    <a href="{{ route('login.process') }}" class="btn book-btn btn-success">BOOK NOW!</a>
  </nav>
</header>

<!-- Background hotel section -->
<section class="hotel">
<div class="overlay"></div>

<!-- Dynamic content texts -->
<div id="home" class="content-text active">
<h1>Welcome to Grand Aurelia</h1>
<br>
<br>
  <p class="home-description">
      Where luxury meets comfort. Our hotel is designed to provide you with a home away from home experience, but with all the amenities and services you could wish for.<br><br>
      Wheter you're here for business or leisure, we have everything you need to make your stay enjoyable and memorable. Our rooms are elegantly furnished, our staff is dedicated to providing exceptional service, and out location is perfect for exploring the city.<br><br>
      At Grand Aurelia, we redefine your hotel experience with easy booking, smooth check-ins, fast service, and secure payments.<br><br>
      Our system is designed for efficiency, convenience, and luxury ensuring an unforgettable stay.
    </p>
</div>

</section>

<footer class="footer">
  <p>&copy; 2025 Grand Aurelia Luxury Hotel. All rights reserved.</p>
</footer>

<!-- JavaScript to switch contents -->
<script>
function showContent(contentId) {
  var sections = document.getElementsByClassName('content-text');
  for (var i = 0; i < sections.length; i++) {
    sections[i].classList.remove('active'); 
  }
  document.getElementById(contentId).classList.add('active');
}
</script>

</body>
</html>
