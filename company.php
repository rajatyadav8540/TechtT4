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
    text-align: center;
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

        section {
            font: 400 15px sherif;
            line-height: 1.8;

        }

        h2 {
            font-size: 24px;
            text-transform: uppercase;

                {
                % comment %
            }

            color: #303030;

                {
                % endcomment %
            }

                {
                % comment %
            }

            font-weight: 600;

                {
                % endcomment %
            }

            margin-bottom: 30px;
        }

        h4 {
            text-align: justify;
            font-size: 19px;
            line-height: 1.375em;

                {
                % comment %
            }

            color: #303030;

                {
                % endcomment %
            }

                {
                % comment %
            }

            font-weight: 400;

                {
                % endcomment %
            }

            margin-bottom: 30px;
        }

        .jumbotron {
            background-image: linear-gradient(rgba(69, 191, 199, .4), #3cbfc7);
            color: #fff;
            padding: 100px 25px;
            font-family: Montserrat, sans-serif;
        }

        .container-fluid {
            padding: 60px 50px;
        }

        .bg-grey {
            background-color: #f6f6f6;
        }

        .logo-small {
            color: #3cbfc7;
            font-size: 50px;
        }

        .logo {
            color: #3cbfc7;
            font-size: 200px;
        }

        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }

        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }

        .item span {
            font-style: normal;
        }

        .panel {
            border: 1px solid#3cbfc7;
            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }

        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
        }

        .panel-footer .btn:hover {
            border: 1px solid#3cbfc7;
            background-color: #fff !important;
            color: #3cbfc7;
        }

        .panel-heading {
            color: #fff !important;
            background-color: #3cbfc7 !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        .panel-footer {
            background-color: white !important;
        }

        .panel-footer h3 {
            font-size: 32px;
        }

        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }

        .panel-footer .btn {
            margin: 15px 0;
            background-color: #3cbfc7;
            color: #fff;
        }

        .slideanim {
            visibility: hidden;
        }

        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }

        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }

            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }

        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }

        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }

            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }



        .card {
            padding-top: 20px;
            margin: 10px 0 20px 0;
            background-color: rgba(69, 104, 110, 0.2);
            border-top-width: 0;
            border-bottom-width: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .card .card-heading {
            padding: 0 20px;
            margin: 0;
        }

        .card .card-heading.simple {
            font-size: 20px;
            font-weight: 300;
            color: #777;
            border-bottom: 1px solid #e5e5e5;
        }

        .card .card-heading.image img {
            display: inline-block;
            width: 46px;
            height: 46px;
            margin-right: 15px;
            vertical-align: top;
            border: 0;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }

        .card .card-heading.image .card-heading-header {
            display: inline-block;
            vertical-align: top;
        }

        .card .card-heading.image .card-heading-header h3 {
            margin: 0;
            font-size: 14px;
            line-height: 16px;
            color: #000;
        }

        .card .card-heading.image .card-heading-header span {
                {
                % comment %
            }

            font-size: 12px;

                {
                % endcomment %
            }

            color: #999999;
        }

        .card .card-body {
            padding: 0 20px;
            margin-top: 20px;
        }

        .card .card-media {
            padding: 0 20px;
            margin: 0 -14px;
        }

        .card .card-media img {
            max-width: 100%;
            max-height: 100%;
        }

        .card .card-actions {
            min-height: 30px;
            padding: 0 20px 20px 20px;
            margin: 20px 0 0 0;
        }

        .card .card-comments {
            padding: 20px;
            margin: 0;
            background-color: #f8f8f8;
        }

        .card .card-comments .comments-collapse-toggle {
            padding: 0;
            margin: 0 20px 12px 20px;
        }

        .card .card-comments .comments-collapse-toggle a,
        .card .card-comments .comments-collapse-toggle span {
            padding-right: 5px;
            overflow: hidden;

                {
                % comment %
            }

            font-size: 12px;

                {
                % endcomment %
            }

            color: #999;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .card-comments .media-heading {
            font-size: 13px;
            font-weight: bold;
        }

        .card.people {
            position: relative;
            display: inline-block;
            width: 170px;
            height: 300px;
            padding-top: 0;
            margin-left: 20px;
            overflow: hidden;
            vertical-align: top;
        }

        .card.people:first-child {
            margin-left: 0;
        }

        .card.people .card-top {
            position: absolute;
            top: 0;
            left: 0;
            display: inline-block;
            width: 170px;
            height: 150px;
            background-color: #ffffff;
        }

        .card.people .card-top.green {
            background-color: #53a93f;
        }

        .card.people .card-top.blue {
            background-color: #427fed;
        }

        .card.people .card-info {
            position: absolute;
            top: 150px;
            display: inline-block;
            width: 100%;
            height: 101px;
            overflow: hidden;
            background: #ffffff;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .card.people .card-info .title {
            display: block;
            margin: 8px 14px 0 14px;
            overflow: hidden;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            color: #3cbfc7;
            font-weight: 900;
        }

        .title a {
            font-weight: 600;
        }

        .card.people .card-info .desc {
            display: block;
            margin: 8px 14px 0 14px;
            overflow: hidden;

                {
                % comment %
            }

            font-size: 12px;

                {
                % endcomment %
            }

            line-height: 16px;
            color: #000;
            text-overflow: ellipsis;
        }

        .card.people .card-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            display: inline-block;
            width: 100%;
            padding: 10px 20px;
            line-height: 29px;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .card.hovercard {
            position: relative;
            padding-top: 0;
            overflow: hidden;
            text-align: center;
            background-color: rgba(214, 224, 226, 0.2);
        }

        .card.hovercard .cardheader {
            background: linear-gradient(#3cbfc7, white);
            background-size: cover;
            height: 135px;

        }

        .card.hovercard .avatar {
            position: relative;
            top: -50px;
            margin-bottom: -50px;
        }

        .card.hovercard .avatar img {
            width: 100px;
            height: 100px;
            max-width: 100px;
            max-height: 100px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, 0.5);
        }

        .card.hovercard .info {
            padding: 4px 8px 10px;
        }

        .card.hovercard .info .title {
            margin-bottom: 4px;
            font-size: 24px;
            line-height: 1;
            color: #3cbfc7;
            vertical-align: middle;
        }

        .card.hovercard .info .desc {
            overflow: hidden;

                {
                % comment %
            }

            font-size: 12px;

                {
                % endcomment %
            }

            line-height: 20px;
            color: #000;
            text-overflow: ellipsis;
        }

        .card.hovercard .bottom {
            padding: 0 20px;
            margin-bottom: 17px;
        }

        .btn {
            border-radius: 50%;
            width: 32px;
            height: 32px;
            line-height: 18px;
        }

        .bottom a {
            width: 30px;
            height: 30px;
        }

        a {
            color: #3cbfc7;
        }
    </style> 
</head>
  <body>
      <?php require 'header.php' ?>
  <div class="jumbotron text-white text-center" style="margin-top: 70px; color: white;">
        <h2 class="font-weight-bold">Techtitude Tribe</h2>
        <h4 class="">We consider our work as our craft. So, like any craftsman we keep on improving the quality of our
            work to meet the client and user satisfaction</h4>
    </div>

    <!-- Container (About Section) -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8 pr-5">
                <h2 class="font-weight-bold">About Company</h2><br>
                <h4 class="font">Techtitude tribe was founded by a group of students with a vision of providing an
                    easier way to help others transform their amazing ideas into the real world solutions, so that they
                    may not feel that setting up a startup is a rocket-science. Its motive is also to promote
                    make-in-India moment.We currently working and helping implement 6 great innovative ideas into the
                    real world so that young entrepreneurs from around the nation may get help. The startups which are
                    being implemented under this organization are ‘Adharshila’, ‘Shilpart’, ‘Handycart’, ‘Drugabuse’,
                    ‘Attachaki’, etc. and more and more startups are being added day-by-day to our organization.</h4>
            </div>
            <div class="col-sm-4 pt-5">
                <span class=" glyphicon-signal mt-5"><img src="static/logo.png" class="img-fluid"></span>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey">
        <div class="row">
            <div class="col-sm-4">
                <span><img src="static/values.svg" class="img-fluid"></span>
            </div>
            <div class="col-sm-8 text-center">
                <h2 class="font-weight-bold">Our Values</h2><br>
                <div class="container">
                    <h4 class="">Our Mission is to digitalize each and every small business and make our country digital
                        by helping small business owners and startups digitalize their Ideas and compete with the
                        digital world.
                        Convert each offline shop into a digital hub.Our vision is to emerge as one of the biggest IT
                        giants and to help the world digitalize themselves...</h4><br>
                </div>
            </div>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->

    <br>
    <br>
    <section>
        <div class="" style="background-color: rgba(60, 191, 199, .1);">
            <div class="text-center container pt-4">
                <h2 class="font-weight-bold">What our customers say</h2>
                
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides text-center" style="width: 100%;">
                    <div class="numbertext">
                        <h3>Science forum</h3>
                    </div>

                    <div class="text ">"Loved their work and dedication towards the customer..."</div>
                </div>

                <div class="mySlides" style="width: 100%;">
                    <div class="numbertext">
                        <h3>Barbiecorn Pizza</h3>
                    </div>
                    <div class="text ">"They deliver perfection everytime, you can be sure of that..."</div>
                </div>

                <div class="mySlides" style="width: 100%;">
                    <div class="numbertext">
                        <h3>Yummy</h3>
                    </div>

                    <div class="text">"If you are looking for correct technical assistance, than TechtitudeTribe is what you are looking for..."</div>
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
        </div>
        </div>
    </section>
    <section>
        <div class="container text-center mt-5">

            <h2 class="font-weight-bold">Our Team</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader ">
                            <p class="p-2 text-light">
                                "Sometimes failure is better than instant success."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/yashpal.jpg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a>Yashpal Bharti</a>
                            </div>
                            <div class="desc">Cheif Executive Heads</div>
                            <div class="desc">Android Developer</div>
                            <div class="desc">Tech geek</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href="https://twitter.com/YashpalBharti10?s=08">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank"  href="https://www.instagram.com/invites/contact/?i=g5l3n3jrioam&utm_content=34xoyyq">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank"href="https://www.facebook.com/yashpal.bharti.75">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/yashpal-bharti-b3375b171">
                                <img src="static/linkedinp.png" class="img-fluid" style=" width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "The way to success is to...
                                Work endlessly..."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/subir.jpg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a>Subir Singh</a>
                            </div>
                            <div class="desc">Cheif Executive Heads</div>
                            <div class="desc">Web Designer</div>
                            <div class="desc">Business Geek</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href=" https://twitter.com/SubirS_ingh?s=08">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank"  href=" https://www.instagram.com/invites/contact/?i=4pgmm0qe6m19&utm_content=2ttdopd">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank"  href="https://www.facebook.com/profile.php?id=100007649958920">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank"  href="https://www.linkedin.com/in/subir-singh-0b59b0196">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "Uniqueness is as important as orignality... "
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/yagyik.jpg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a>Yagyik Shrivastava</a>
                            </div>
                            <div class="desc">Cheif Operations Officer</div>
                            <div class="desc">Web Developer</div>
                            <div class="desc">Coding geek</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href="https://twitter.com/YagyikShrivast3?s=08">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href=" https://www.instagram.com/invites/contact/?i=53c8k7b6nbwc&utm_content=3ldtruo">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100005016526773">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="http://linkedin.com/in/yagyik-shrivastava-087992176">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "Pointing the wrong is a way to choose right, losing the string is a way to high flight..."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/rajat.jpeg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a>Rajat Yadav</a>
                            </div>
                            <div class="desc">Cheif Financial Heads</div>
                            <div class="desc">Web Developer</div>
                            <div class="desc">Enthusiast</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href="https://twitter.com/Rajatya07856115?s=20">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://instagram.com/y.rjt?utm_medium=copy_link">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100007413011847">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/rajat-yadav-3258a2187">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "Hope sees the invisible l,feels the intangible and achieves the impossible."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/sindhuja.jpg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a>Sindhuja Pandey</a>
                            </div>
                            <div class="desc">Cheif Financial Heads</div>
                            <div class="desc">Web Designer</div>
                            <div class="desc">Curious Creator</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href="https://twitter.com/SindhujaPandey4?s=08">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.instagram.com/sindhuja_pandey?r=nametag">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.facebook.com/sindhuja.pandey.712">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/sindhuja-pandey-7b9579202">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "Dream big, work hard and make it happen..."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/karishma.jpg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a>Karishma Chauhan</a>
                            </div>
                            <div class="desc">Cheif Technical Heads</div>
                            <div class="desc">Android developer</div>
                            <div class="desc">Trusted Employee</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href="https://twitter.com/Karishma2713?s=08">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.instagram.com/karishma_2713/">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100070957158768">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/karishma-chauhan-31489a20b">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "We’re kept from our goal not by obstacles, but by a clear path to a lesser goal..."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/kunjan.jpg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a>Kunjan Soni</a>
                            </div>
                            <div class="desc">Cheif Technical Heads</div>
                            <div class="desc">Android developer</div>
                            <div class="desc">Blogger</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href=" https://twitter.com/Kunjan56802520?s=08">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank"
                                href=" https://www.instagram.com/invites/contact/?i=90q6xh8zyzf9&utm_content=m8v8582">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="facebook nhi he sorry">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/kunjan-soni-9271a01b3">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "It's never late to discover Yourself..."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/priya.jpg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a>Priya Gupta</a>
                            </div>
                            <div class="desc">Cheif Marketing Heads</div>
                            <div class="desc">Android developer</div>
                            <div class="desc">Passoinate Designer</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href="https://twitter.com/agni_100?s=09">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank"
                                href=" https://www.instagram.com/invites/contact/?i=1hew4nol0q3l&utm_content=7qqkffk">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100066349973615">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/priya-gupta-048112188">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "There is no shortcut to success. Hard work is the only key to achieve it..."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/deepak.jpg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a>Deepak Kumar</a>
                            </div>
                            <div class="desc">Cheif Marketing Heads</div>
                            <div class="desc">Curious Marketing</div>
                            <div class="desc">Business geek</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href="https://twitter.com/DeepakK19795583?s=08">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank"
                                href="https://www.instagram.com/invites/contact/?i=1fn1nwws8vlv4&utm_content=42zme03">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100027703222023">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/deepak-kumar-a5b89920b">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "Failure leads to success..."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/aditi.jpg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a>Aditi Arya</a>
                            </div>
                            <div class="desc">Cheif Designing Heads</div>
                            <div class="desc">Passionate designer</div>
                            <div class="desc">Content Writer</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href="https://mobile.twitter.com/aditiarya712">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.instagram.com/aditiarya_49/feed/">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100027379730819">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/mwlite/in/aditi-arya-206346202">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "If you gaze long into an abyss, the abyss also gazes into you..."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/shivam.jpg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a target="_blank" href="https://scripteden.com/">Shivam Singh</a>
                            </div>
                            <div class="desc">Cheif Designing Heads</div>
                            <div class="desc">Designer</div>
                            <div class="desc">Content Writer</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href=" https://twitter.com/shivams98493408?s=20">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://instagram.com/thesinghshivam?utm_medium=copy_link">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100014883373362">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/shivam-singh-98075b171">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-6">

                    <div class="card hovercard">
                        <div class="cardheader">
                            <p class="p-2 text-light">
                                "Learning use creativity, creativity leads to thinking, thinking provides knowledge,
                                knowledge makes you great..."
                            </p>
                        </div>
                        <div class="avatar">
                            <img alt="" src="static/ritu.jpeg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a target="_blank" href="https://scripteden.com/">Ritu Verma</a>
                            </div>
                            <div class="desc">Cheif Designing Heads</div>
                            <div class="desc">Ethical Hacker</div>
                            <div class="desc">Authentic Designer</div>
                        </div>
                        <div class="bottom">
                            <a target="_blank" href="https://mobile.twitter.com/Ritu55998258">
                                <img src="static/twitterp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank"
                                href=" https://www.instagram.com/invites/contact/?i=16pjogtas2n0w&utm_content=dkqyht0">
                                <img src="static/instagramp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100009434099250">
                                <img src="static/facebookp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/mwlite/in/ritu-verma-812035202">
                                <img src="static/linkedinp.png" class="img-fluid" style="width: 30px; height: 30px;">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
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
      </script>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>