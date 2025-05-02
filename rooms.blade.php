<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Rooms- Grand Aurelia</title>
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

<section class="hotel">
    <div class="overlay"></div>

    <div class="content-text active">
        <h1>Our Rooms & Suites</h1>
        <br>
        <p>
          Explore our Deluxe Room, Executive Suite, and Presidential Suite — each thoughtfully crafted to offer supreme comfort, timeless elegance, and a distinctive experience tailored to your needs.<br><br>
    
          Our <strong>Deluxe Room</strong> is a perfect retreat for modern travelers, featuring plush bedding, sleek interiors, a spacious marble bathroom, and large windows that invite natural light and city views. Ideal for solo guests or couples seeking style and tranquility.<br><br>
    
          Step into elevated sophistication with our <strong>Executive Suite</strong>, where generous living space meets refined design. Enjoy a separate lounge area, work desk with high-speed internet, premium linens, and exclusive access to our executive lounge — perfect for business travelers or extended stays.<br><br>
    
          The pinnacle of luxury, our <strong>Presidential Suite</strong> redefines grandeur with expansive living and dining areas, a private study, walk-in wardrobe, spa-inspired bathroom with Jacuzzi, and a personal butler service. Floor-to-ceiling windows reveal breathtaking city panoramas, making this suite an extraordinary choice for dignitaries, VIPs, or once-in-a-lifetime occasions.<br><br>
    
          At Grand Aurelia, every room is more than a place to rest — it's a sanctuary where comfort meets sophistication, designed to leave a lasting impression.
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
