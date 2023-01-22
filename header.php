<!doctype html>
<html lang="en">
  <head>
    <title>Techtitudetribe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>

button{
  border: none;
  outline: none;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
 
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 16px;
  text-decoration: none;
  font-family: sherif;
}

li a: hover{
    color: #3cbfc7;
}

/* The sidepanel menu */
.sidepanel {
  background-color: transparent;
  height: 70px;
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 300; /* Stay on top */
  top: 0;
  right: 0;
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  padding:left: 20px;
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */

}



/* The sidepanel links */
.sidepanel a {
  border-radius: 20px;
  text-decoration: none;
  font-size: 20px;
  font-weight: 600;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidepanel a:hover {
  color: #3cbfc7;

}

/* Position and style the close button (top right corner) */


.closebtn{
  position: absolute;
  border: none;
  top: 20px;
  right: 30px;
  cursor: pointer;
  background-color: #white;
  border-radius: 50%;
  padding: 10px;
  padding: 0;
}

.sv{
  width: 30px;
  height: 30px;
  margin: 5px;
}

/* Style the button that is used to open the sidepanel */
.openbtn {
  font-size: 32px;
  cursor: pointer;
  background-color: white;
  padding: 0px 15px 3px 15px;
  border: none;
  border-radius: 50%;
  outline: none;
  
}

.nav-link{
    line-height: 1.5;
    font-weight: 600;
    text-transform : uppercase; 
}
.rotate {
  -moz-transition: all .5s linear;
  -webkit-transition: all .5s linear;
  transition: all .5s linear;
}
.rotate.down {
  -moz-transform:rotate(90deg);
  -webkit-transform:rotate(90deg);
  transform:rotate(90deg);
}
#opbtn{
  transition: transform 1s;
}

.trainer-profile img {
  max-width: 50px;
  border-radius: 50px;
}

.trainer-profile span {
  padding-left: 10px;
}
/* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color:;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border-radius: 20px;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color:;
  display: none;
  overflow: hidden;
  border-radius: 10px;

}
 @media screen and (max-width: 990px){
.titl{
    font-size: 20px;
}



 button{
  border: none;
  outline: none;
}
/* The sidepanel menu */
.sidepanel {
  background-color: rgba(60, 191, 199, .8);
  height: 100%;
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 300; /* Stay on top */
  top: 0;
  right: 0;
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  padding:left: 20px;
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidepanel */

}



/* The sidepanel links */
.sidepanel a {
  border-radius: 20px;
  text-decoration: none;
  font-size: 25px;
  font-weight: 600;
  color: white;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidepanel a:hover {
  color: #f1f1f1;
   text-decoration-line: underline;
}

/* Position and style the close button (top right corner) */


.closebtn{
  position: absolute;
  border: none;
  top: 20px;
  right: 30px;
  cursor: pointer;
  background-color: #fff;
  border-radius: 50%;
  padding: 0;
}

.sv{
  width: 30px;
  height: 30px;
}

/* Style the button that is used to open the sidepanel */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 50%;
  outline: none;
  
}
.openbtn:hover {
  background-color: #ff0;
}
.nav-link{
    line-height: 1.5;
    font-weight: 600;
    text-transform : uppercase; 
}
.rotate {
  -moz-transition: all .5s linear;
  -webkit-transition: all .5s linear;
  transition: all .5s linear;
}
.rotate.down {
  -moz-transform:rotate(90deg);
  -webkit-transform:rotate(90deg);
  transform:rotate(90deg);
}
#opbtn{
  transition: transform 1s;
}

.trainer-profile img {
  max-width: 50px;
  border-radius: 50px;
}

.trainer-profile span {
  padding-left: 10px;
}
/* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border-radius: 20px;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color:#444;
  display: none;
  overflow: hidden;
  border-radius: 10px;

}
.db{
  display:block;
}
 }

</style>
</head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" onscroll="BgWhite()" id="n1" style="background:white; height:70px;" id="bgWhite">
<div class="container">
  <a class="navbar-brand " id="loog" href="/" style="width: fit-content"><img src="static/logo.png" style="width: 55px; height: 55px; overflow: hidden; border-radius: 50%;"></a>
  <h3 class="titl" style="font-weight: 900;">Techtitude<span style="font-weight:900; color: #3cbfc7;">Tribe</span></h3>
  <div id="navbarNavAltMarkup" >
    <div class="navbar-nav ml-auto " >
        <div id="mySidepanel" class="sidepanel overflow-hidden">
        <ul style="margin-top: -50px;">
          <li class="db"><a href="index.php">Home</a></li>
          <li class="db"><a href="company.php">About Us</a></li>
          <li class="db"><a href="services.php">Services</a></li>
          <li class="db"><a href="products.php">Products</a></li>
          <li class="db"><a href="projects.php">Projects</a></li>
          <li class="db"><a href="bloglist.php">Blogs</a></li>
          <li class="db"><a href="contact.php">Contact Us</a></li>
          <button class="closebtn text-decoration-none"  onclick="closeNav()"><img src="static/x.svg" id="rot" class="sv rotate"></img></button>
        </ul>

            </div>
        </div>

        <!--<button class="openbtn rotate border-0" onclick="openNav()" id="opbtn" style="margin-right: -30px;">&#9776;</button></a> -->
        <button class="openbtn rotate border-0" onclick="openNav()" id="opbtn" ><img src="static/menu.png" class="img-fluid" style="width: 25px; height: 25px;"></button></a>
        <script>
          var sc=window.scrollY;
          documment.write("dd");
        </script>
    </div>
  </div>
</div>
</nav>
{% if e %}
<script>
document.getElementById('prof').style.display="block";
document.getElementById('log').style.display="none";
</script>

{% endif %}
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
function BgWhite() {
  if(window.pageYOffset > 50){
  document.getElementById('bgWhite').style.background="rgba(32,32,32,.5)";
  document.getElementsByClassName('whn').style.display="none";
  }
}
/* Set the width of the sidebar to 250px (show it) */
function openNav() {
  if(screen.width > 990){
  document.getElementById("mySidepanel").style.width = "64%";
  }
  else {
    document.getElementById("mySidepanel").style.width= "200px";
  }
  document.getElementById("rot").style.transform="rotate(-90deg)";
  document.getElementById("opbtn").style.transform="rotate(-180deg)";
  document.getElementById("opbtn").style.transform="translate(500px)";
  document.getElementById("loog").style.display="none";

}
/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
  document.getElementById("rot").style.transform="rotate(90deg)";
  document.getElementById("opbtn").style.transform="rotate(-360deg)";
  document.getElementById("loog").style.display="block";

}
$(".rotate").click(function () {
  $(this).toggleClass("down");
  $(this).addClass("border-0");
});

if(window.scrollY>100){
  document.getElementById("opbtn").style.backgroundColor="red";
}

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>