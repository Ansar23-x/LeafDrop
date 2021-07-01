@extends('layouts.master')
@section('title','LeafDrop Corp')
@section('content')
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">

                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="{{ asset('images/hiker2.jpg') }}" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Ansar<br><strong class="ornage_color">CO-Lead</strong></h3>
                                            <p><img src="{{ asset('icon/1.png') }}" alt="#" />We did the sunset hike. We had scheduled for a Tuesday but the forecast was predicting rain so they asked us if we wanted to change to Monday. 
											We were happy that we could do this and that they asked. The hike was longer than I expected which was great. I had thought it was going to be just a short hike up, sit and wait 
											for the sun to set. We got much more than this. We had a nice hike which included some up hill terrain which made it a bit more interesting.
                                                <img src="{{ asset('icon/2.png') }}" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="{{ asset('images/hiker1.jpg') }}" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Nico<br><strong class="ornage_color">Lead</strong></h3>
                                            <p><img src="{{ asset('icon/1.png') }}" alt="#" />Unique adventure with great guides! They are very knowledgeable about the area and provide lots of interesting facts. Hike was enjoyable and the views were breathtaking!
                                                <img src="{{ asset('icon/2.png') }}" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="{{ asset('images/hiker3.jpg') }}" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Adam<br><strong class="ornage_color">CO-Lead</strong></h3>
                                            <p><img src="{{ asset('icon/1.png') }}" alt="#" />Thank you for being our fun, helpful, and patient guides on this memorable first backpacking trip for me! So very thankful for your hospitality - at your home and on the trails. 
											You totally spoiled us with the tasty (and healthy) food, even on the trails. Your advice and knowledge about backpacking, history, geology was very much appreciated.
                                                <img src="{{ asset('icon/2.png') }}" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
@endsection