<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>leafdrop corp | @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css --> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]
    -->
    @stack('css')
    </head>
    
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="{{ asset('icon/loc1.png') }}" />Indonesia</li>
                                <li><img src="{{ asset('icon/email1.png') }}" />leafdc@gmail.com</li>

                                <li><img src="{{ asset('icon/call1.png') }}" />(+62)85678056</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="#Home">Home</a> </li>
                                                <li> <a href="#about">About</a> </li>
                                                <li><a href="#product">Resources</a></li>
                                                <li><a href="#testimonial">Testimonial</a></li>
                                                <li><a href="#contact">Booking</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="{{ asset('images/search_icon.png') }}"></button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ asset('images/hiking1.jpg') }}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>LEAFDROP</h1>
                            <span>HIKING DISCOVER CORP</span>

                            <p>Want to try backpacking but don’t know where to start? Our overnight tours emphasize learning and skill building. Tour price includes meals, permits, logistics planning, and gear. </p>
                            <a class="buynow" href="#about">About us</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ asset('images/hiking2.jpg') }}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>LEAFDROP</h1>
                            <span>HIKING DISCOVER CORP</span>

                            <p>Our primary goal is to lead safe trips and preserve our forests. Tours are led by a certified Wilderness First Responder and Leave No Trace (™) principles are followed. </p>
                            <a class="buynow" href="#about">About us</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{ asset('images/hiking3.jpg') }}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>LEAFDROP</h1>
                            <span>HIKING DISCOVER CORP</span>

                            <p>Lightweight backpacks, tents, and sleeping bags/pads are available to rent and are included in tour price. We will schedule a zoom/phone session to go over gear selection to ensure everyone is prepared for our overnight trips. </p>
                            <a class="buynow" href="#about">About us</a>

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>About leafdrop<br><strong class="black"> Hiking discover corp</strong></h2>
                        <p>Leafdrop Corp's mission is to make the wilderness accessible and enjoyable for everyone.  We believe the trail is there for everyone at every phase of life and we welcome all hikers, regardless of their background or ability level.
						We strive to provide safe on-trail experience with engaging, knowledgeable, and well-trained guides. We embrace and encourages diversity on the trail and we follow Leave No Trace principles.
						All of Leafdrop corp's guides are certified in Wilderness First Aid (or higher) and CPR.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="{{ asset('images/about.png') }}" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- for_box -->
    <div class="for_box_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{ asset('images/1.png') }}" alt="#"/></i>
                        <span>>100</span>
                        <h3>Destination</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{ asset('images/2.png') }}" alt="#"/></i>
                        <span>360'</span>
                        <h3>Degrees of View</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{ asset('images/3.png') }}" alt="#"/></i>
                        <span>10</span>
                        <h3>Years of Exp</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{ asset('images/4.png') }}" alt="#"/></i>
                        <span>87</span>
                        <h3>Trained Guides</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end for_box -->
    <!-- offer -->
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Special <strong class="black"> Offers</strong></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                        <div class="offer_box">
                            <h3>Guided Waterfall Hike</h3>
                            <figure><img src="{{ asset('images/offer1.jpg') }}" alt="img" /></figure>
                            <p>Join us for a waterfall hiking tour and see some of the Indonesia's famous waterfalls! You'll enjoy a 3-5 mile hike, featuring one or more waterfalls (depending on the location)</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin_ttt">
                        <div class="offer_box">
                            <h3>Privately Sunset Hike</h3>
                            <figure><img src="{{ asset('images/offer2.jpg') }}" alt="img" /></figure>
                            <p>Join us for an evening hike featuring one of the most beautiful aspects of our area - our sunset! Snacks are provided while we watch sunset.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin-lkk">
                        <div class="offer_box">
                            <h3>Tours for Beginner</h3>
                            <figure><img src="{{ asset('images/offer3.jpg') }}" alt="img" /></figure>
                            <p>Tours that designed for beginner, but are beautiful enough that even the most seasoned hiker will have a great time!</p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end offer -->

    <!-- product -->
    <div id="product" class="product">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Leafdrop <strong class="black"> resources</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="{{ asset('images/menu1.jpg') }}" alt="#" />
                                    <h3>Rental Gear </h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="{{ asset('images/menu2.jpg') }}" alt="#" />
                                    <h3>Backpacking Breakfast  </h3>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="{{ asset('images/menu3.jpg') }}" alt="#" />
                                    <h3>Footwear for Happy Hiking Feet! </h3></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="{{ asset('images/menu4.jpg') }}" alt="#" />
                                    <h3>Guide for physical prepare</h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="{{ asset('images/menu5.jpg') }}" alt="#" />
                                    <h3>Gear List </h3></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- end product -->
    <!-- clients -->
    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>testimonial</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        @yield('content')
    </div>
  
    <!-- end clients -->
    <!-- contact -->

    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Get In <strong class="black"> Toucgh</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="map">
                </div>

            </div>
        </div>
    </div>

   
    <!-- end contact -->

    <!-- footer -->
    <!--  footer -->
    <footr>
        <div class="footer top_layer ">
            <div class="container">

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <a href="#Home"> <img src="{{ asset('images/logo.png') }}" alt="logo" /></a>
                            <p>Our primary goal is to lead safe trips and preserve our forests. Tours are led by a certified Wilderness First Responder and Leave No Trace (™) principles are followed. </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Quick links</h3>
                            <ul class="Links_footer">
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Join Us</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Maintenance</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Language Packs</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">LearnPress</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Booking</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Subcribe email</h3>
                            <p>To get our latest information, please enter your e-mail :</p>
                            <input class="form-control" placeholder="Your Email" type="type" name="Your Email">
                            <button class="submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Contact Us</h3>

                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="{{ asset('icon/loc.png') }}" alt="#" /></a>Malang
                                    <br>Indonesia </li>
                                <li>
                                    <a href="#"><img src="{{ asset('icon/email.png') }}" alt="#" /></a>leafdc@gmail.com </li>
                                <li>
                                    <a href="#"><img src="{{ asset('icon/call.png') }}" alt="#" /></a>(+62)85678056</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footr>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: -7.983908,
                    lng: 112.621391
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: -7.983908,
                    lng: 112.621391
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
    @stack('script')
</body>

</html>