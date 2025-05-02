<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About- Grand Aurelia</title>
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
        <h2>About Grand Aurelia</h2>
        <br>
        <p>
          Grand Aurelia offers unmatched luxury, personalized service, and a promise of unforgettable stays in the heart of the city. <br><br>
          Established in 2020, Grand Aurelia was envisioned as more than just a hotel — it is a sanctuary where timeless elegance meets modern comfort. Nestled amidst the city's vibrant culture and dynamic lifestyle, our location offers convenient access to premium shopping, dining, and entertainment, making every visit both relaxing and enriching.<br><br>
          Each corner of our property is thoughtfully designed to create memorable experiences. From the refined beauty of our suites—featuring plush furnishings, panoramic city views, and bespoke amenities—to our world-class facilities including a rooftop infinity pool, full-service spa, state-of-the-art fitness center, and gourmet dining options, every element reflects our dedication to excellence.<br><br>
          Our dedicated team ensures that every guest feels truly special. Whether you're here for a corporate retreat, a romantic escape, or a family celebration, we go beyond expectations with curated experiences, 24/7 concierge service, and warm, attentive hospitality that leaves a lasting impression.<br><br>
          At Grand Aurelia, we believe that luxury is not just about lavish surroundings — it's about genuine hospitality, attention to detail, and creating a home away from home. With timeless design, impeccable service, and a welcoming atmosphere, we invite you to experience the magic of Grand Aurelia — where every stay is a story worth telling.
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
