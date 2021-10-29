<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
  * {
    font-family: sherif;
    /* border: 2px solid blue; */
  }

  body {
    margin-top: 70px;
  }

  section {
    margin: 50px 0;
  }

  .txt-just {
    text-align: justify;
  }

  .carousel-indicators li {
    background-color: #3cbfc7;
    border-radius: 50%;
    width: 20px;
    height: 20px;
  }

  h1 {
    font-size: 50px;
    font-weight: 1200;
    font-family: sherif;
    margin: 0;
  }

  .serv h4 {
    font-size: 20px;
    font-weight: 900;
  }

  .serv img {
    height: 200px;
  }

  .hov_link a {
    color: black;
    font-weight: 900;
  }

  .hov_link a : hover {
    color: #3cbfc7;
    font-weight: 900;
    text-decoration: none;
  }

  .serv-img {
    /* height: 150px;  */
    margin: 30px;
  }

  .section-project .box {
    content: "";
    position: absolute;
    left: 50%;
    top: 15%;
    width: 1px;
    height: 70%;
    background-color: #cccbcb;
    margin-left: -1px;
  }

  .box {
    border-radius: 30px;
    padding: 100px 70px;
    position: relative;
  }

  .section-project .box .box-content {
    padding: 0 70px;
  }

  .section-project .heading h2 {
    margin-bottom: 45px;
  }

  h2,
  .heading h2 {
    font-size: 30px;
    line-height: 38px;
    margin-top: -5px;
    margin-bottom: 20px;
  }

  * {
    box-sizing: border-box
  }

  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Hide the images by default */
  .mySlides {
    display: none;
  }

  /* Caption text */
  .text {
    color: #000;
    font-size: 15px;
    padding: 8px 12px;

    bottom: 8px;
    width: 100%;
    text-align: left;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #000;
    font-weight: 700;
    font-size: 12px;
    padding: 8px 12px;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active,
  .dot:hover {
    background-color: #3cbfc7;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    /* {% comment %} -webkit-animation-duration: 1.5s; {% endcomment %} */
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  /* Style the tab buttons */
  .tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 33.33%;
  }

  /* Change background color of buttons on hover */
  .tablink:hover {
    background-color: #777;
  }

  /* Set default styles for tab content */
  .tabcontent {
    color: white;
    display: none;
    padding: 50px;
    text-align: center;
  }

  /* Style each tab content individually */
  #London {
    background-color: #3CBFC7;
  }

  #Paris {
    background-color: #3CBFC7;
  }

  #Oslo {
    background-color: #3CBFC7;
  }

  .mySlides {
    height: 200px;
  }

  @media screen and (max-width: 480px) {
    .mySlides {
      height: 300px;
    }
  }
</style>

</head>
  <body>
    <?php require 'header.php' ?>
    <section class=" p-0 " style="margin-top: 100px;">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators m-auto" >
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="static/1.png" class="img-fluid" alt="Los Angeles">
      </div>
      <div class="carousel-item">
        <img src="static/2.png" class="img-fluid" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img src="static/3.png" class="img-fluid" alt="New York">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev text-dark" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next text-dark" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>
  <br>
</section>
<section class="" class="text-center">
  <div class="container text-center" style="background-color:rgba(211,211,211,.3); border-radius: 20px; ">
    <div style="margin:auto;">
      <br>
      <div>
        <h2 style="font-weight: 800"> What we provide...</h2>
        <br>
        <br>
        <div class="row text-center">
          <div class="col-md-4 serv">
            <div class="serv-img">
              <img src="static/app.svg" class="img-fluid">
            </div>
            <h4> Android App development</h4>
          </div>
          <div class="col-md-4 serv">
            <div class="serv-img">
              <img src="static/web.svg" class="img-fluid">
            </div>
            <h4> Web development</h4>
          </div>
          <div class="col-md-4 serv">
            <div class="serv-img">
              <img src="static/uxi.svg" class="img-fluid">
            </div>
            <h4> Graphic design </h4>
          </div>
        </div>
        <br>
        <br>
        <h5 class="hov_link"><a href="/services/">Discover our Services....</a></h5>
        <br>
        <br>
      </div>
</section>
<section class="" class="p-0">
  <div class="row text-center mw-100">
    <div class="col-md-5 mx-auto">
      <img src="static/animaker_logo.svg" class="img-fluid m-auto ">
    </div>

    <div class="col-md-5" style="margin-top: 50px;">
      <h1>To help <br> <span style="color: #3cbfc7">transit</span>
        young mind<br> <span style="color: #3cbfc7">startup</span>
        to <span style="color: #3cbfc7">realistic</span> ones...</h1>
    </div>
  </div>
</section>
<section class="" class="text-center" style="background-color:rgba(60, 191, 199, 1); color: white;">
  <div class="container text-center" style=" border-radius: 20px; ">
    <div style=" width:70%; height: 70%; margin:auto;">
      <br>
      <h2 style="font-weight: 800;"> Our Products...</h2>
      <br>
      <br>
      <div class="row text-center">
        <div class="col-md-4">
          <div class="serv-img">
            <img src="static/adharshila.png" class=" img-fluid">
          </div>
          <h4> Aadharshila</h4>
        </div>
        <div class="col-md-4">
          <div class="serv-img">
            <img src="static/logo-etribe.png" class="rounded-circle shadow img-fluid">
          </div>
          <h4> e-Tribe</h4>
        </div>
        <div class="col-md-4">
          <div class="serv-img">
            <img src="static/satkarya.png" class="img-fluid">
          </div>
          <h4>Satkarya</h4>
        </div>
      </div>
      <br>
      <br>
      <h5 class="hov_link"><a href="/products/" style="color: white">We thrive to change the world through code...</a>
      </h5>
      <br>
      <br>
    </div>
</section>
<section class="my-5" style=" margin: auto;">
  <div class="container text-center"
    style=" background-color:rgba(60, 191, 199, 0.1);  margin: auto; border-radius: 20px;">
    <div style="  margin:auto; margin-top: 100px;">
      <br>
      <br>
      <h2 style="font-weight: 800"> Projects...</h2>
      <br>
      <div class="row serv">
        <div class="col-md-12 col-lg-6 px-5 serv" style="text-align: left;">
          <h4>Our Feild of Expertise..</h4>
          <p class="txt-just">We are a team of trained professionals with a mission to help our customers get the best
            technical help in transiting their own
            imagination, ideas, buisnesses etc.</p>
        </div>
        <hr>
        <div class="col-md-12 col-lg-6 px-5 serv" style="text-align: left;">
          <!-- Slideshow container -->
          <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides" style="width: 100%;">
              <div class="numbertext">
                <h3>Science forum</h3>
              </div>

              <div class="text txt-just">The Science Forum guides and helps students form a staunch scientific outlook,
                exemplifying the need of the hour– to defeat curiosity and feed knowledge to the mind. We, at Science
                Forum, organise lectures and demonstrations by renowned scientists and professors to enlighten the
                students about ongoing scientific research and breakthroughs in the world of science.</div>
            </div>

            <div class="mySlides" style="width: 100%;">
              <div class="numbertext">
                <h3>Barbiecorn Pizza</h3>
              </div>
              <div class="text txt-just">The taste of the town "Barbiecorn Pizza" brings it's people the best quality
                pizza enriched with goodness and health. They are prepared with the fact that our customers meaning, you
                are very much valuable to us. We serve quality and authenticity with our pizzas and beverages and other
                eatables.</div>
            </div>

            <div class="mySlides" style="width: 100%;">
              <div class="numbertext">
                <h3>Yummy</h3>
              </div>

              <div class="text txt-just">Yummy is a local restaurant aggregator and food delivery android application.
                It provides information about the restaurants in their local area and users review restaurants as well
                as food delivery systems.</div>
            </div>
          </div>
          <br>

          <!-- The dots/circles -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <h5 class="hov_link"><a href="/projects/">Our achievements...</a></h5>
    <br>
    <br>
  </div>
</section>

<section class=" text-center" style=" margin: auto;">
  <br>
  <br>
  <h2 style="font-weight: 800"> What our customers say about us...</h2>
  <div id="London" class="tabcontent">
    <h2>Awesome </h2>
    <p>'' Loved their work and their
      dedication towards the customer. ''</p>
  </div>

  <div id="Paris" class="tabcontent">
    <h2>Dedicated</h2>
    <p>'' If you are looking for
      correct technical assistance, then
      Techtitude Tribe is what you are looking for... ''
    </p>
  </div>


  <div id="Oslo" class="tabcontent">
    <h2>Accuracy</h2>
    <p>' They deliver perfection
      every time. You can be sure of that. ''
    </p>
  </div>

  <button class="tablink" onclick="openCity('London', this, '#3cbfc7')" id="defaultOpen">SCIFORUM</button>
  <button class="tablink" onclick="openCity('Paris', this, '#3cbfc7')">YUMMY</button>

  <button class="tablink" onclick="openCity('Oslo', this, '#3cbfc7')">BBC</button>
</section>
<br>
<br>
</section>
<?php require 'footer.php'?>
<script>
  var slideIndex = 1;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }

  function openCity(cityName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(cityName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>



 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>