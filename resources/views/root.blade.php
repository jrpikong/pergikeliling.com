@extends('layouts.app')

@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade mt-0" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    <section id="introduction">
        <h1 class="main-title">Bootstrap team sections</h1>
        <p class="description">MDB provides you multiple sections and components to present your team.</p>
    </section>
    <!-- Section: Magazine v.3 -->
    <section class="magazine-section my-5">
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">

                <!-- Featured news -->
                <div class="single-news mb-3">

                    <!-- Image -->
                    <div class="view overlay rounded z-depth-2 mb-4">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg" alt="Sample image">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Grid row -->
                    <div class="row mb-3">

                        <!-- Grid column -->
                        <div class="col-12">

                            <!-- Badge -->
                            <a href="#!"><span class="badge pink"><i class="fa fa-camera pr-2" aria-hidden="true"></i>Adventure</span></a>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a class="font-weight-bold">This is title of the news</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Featured news -->

                <!-- Small news -->
                <div class="single-news mb-3">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a>24 Food Swaps That Slash Calories.</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

                <!-- Small news -->
                <div class="single-news mb-3">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a>How to Make a Beet Cocktail?</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

                <!-- Small news -->
                <div class="single-news mb-3">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a>8 Sneaky Reasons You're Always Hungry.</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

                <!-- Small news -->
                <div class="single-news">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0">
                            <a>5 Pressure Cooker Recipes You Need to Try.</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-md-0 mb-5">

                <!-- Featured news -->
                <div class="single-news mb-3">

                    <!-- Image -->
                    <div class="view overlay rounded z-depth-2 mb-4">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/31.jpg" alt="Sample image">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Grid row -->
                    <div class="row mb-3">

                        <!-- Grid column -->
                        <div class="col-12">

                            <!-- Badge -->
                            <a href="#!"><span class="badge deep-orange"><i class="fa fa-plane pr-2" aria-hidden="true"></i>Travel</span></a>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a class="font-weight-bold">This is title of the news</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Featured news -->

                <!-- Small news -->
                <div class="single-news mb-3">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a>Trends in the blogosphere for 2016.</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

                <!-- Small news -->
                <div class="single-news mb-3">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a>Where you eat the best lunch in Warsaw?</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

                <!-- Small news -->
                <div class="single-news mb-3">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a>What camera take for holidays?</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

                <!-- Small news -->
                <div class="single-news">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0">
                            <a>Why you should visit Lisbon?</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-0">

                <!-- Featured news -->
                <div class="single-news mb-3">

                    <!-- Image -->
                    <div class="view overlay rounded z-depth-2 mb-4">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/52.jpg" alt="Sample image">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!-- Grid row -->
                    <div class="row mb-3">

                        <!-- Grid column -->
                        <div class="col-12">

                            <!-- Badge -->
                            <a href="#!"><span class="badge success-color"><i class="fa fa-plane pr-2" aria-hidden="true"></i>Nature</span></a>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a class="font-weight-bold">This is title of the news</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Featured news -->

                <!-- Small news -->
                <div class="single-news mb-3">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a>How to recognize the footsteps of wild animals?</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

                <!-- Small news -->
                <div class="single-news mb-3">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a>National Parks in Poland.</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

                <!-- Small news -->
                <div class="single-news mb-3">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0 mb-3">
                            <a>Traveling without littering the planet.</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

                <!-- Small news -->
                <div class="single-news">

                    <!-- Title -->
                    <div class="d-flex justify-content-between">
                        <div class="col-11 text-truncate pl-0">
                            <a>How to protect rainforests?</a>
                        </div>
                        <a><i class="fa fa-angle-double-right"></i></a>
                    </div>

                </div>
                <!-- Small news -->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!-- Section: Magazine v.3 -->
@endsection