<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Options unlimited</title>
        <link rel="shortcut icon" href="http://www.pscl.in/pro-psclin/wp-content/uploads/2015/05/pscl-favicon.jpg">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://themes.semicolonweb.com/html/canvas/css/font-icons.css">
        <link rel="stylesheet" href="http://themes.semicolonweb.com/html/canvas/css/animate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="assets/css/base.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
        <?php
    if(isset($_GET['utm_source']))
    {
        $utm_source = $_GET['utm_source'];
    }
    else
    {
        $utm_source = '';
    }
    if(isset($_GET['utm_campaign']))
    {
        $utm_campaign = $_GET['utm_campaign'];
    }
    else
    {
        $utm_campaign = '';
    }
    if(isset($_GET['utm_medium']))
    {
        $utm_medium = $_GET['utm_medium'];
    }
    else
    {
        $utm_medium = '';
    }
?>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="assets/images/logo.png" class="img-fluid"></a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="call_form">Call Me</button>
                        <input class="form-control mr-sm-2" type="text" placeholder="+91 00000 0000" aria-label="Search">
                    </form>

                    <a href="#" data-scrollto="#section-demos" class="yellow-btn btn button-rounded bgcolor shadow-sm t500" data-offset="100" data-easing="easeInOutExpo" data-speed="1250" data-toggle="modal" data-target="#myModal">Register now</a>
                    
                </div>
                </div>
            </nav>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title center">Register Now</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <?php include('form.php'); ?>
                    </div>
                </div>
            </div>

            <section id="slider" class="slider-element clearfix">
                <div class="container">
                    <div class=" center">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading-block mb-0 topmargin-lg nobottomborder">
                                    <h1 class="nott mb-4 divcenter">
                                    <span class="text-rotater nocolor" data-separator="|" data-rotate="fadeIn" data-speed="1250">
                                    <span class="animate-text-1">Homes For</span><br>
                                    <p class="animate-text-2"></p>
                                    </h1>
                                    <p class="d-block uppercase ls3 h5">Options Unlimited - The Biggest Real Estate Expo</p>
                                    <span class="ls0 slider-text">Options Unlimited is back with more offers and more choices. Explore a wide range of homes
befitting your dreams and needs. Register online to be a part of the biggest exhibition of perfect
homes with never seen before offers.</span>
                                    <br>
                                    <a href="#" data-scrollto="#section-demos" class="yellow-btn btn button-rounded bgcolor shadow-sm t500 mt-2 mt-sm-4" data-offset="100" data-easing="easeInOutExpo" data-speed="1250" data-speed="1250" data-toggle="modal" data-target="#myModal">Register now</a>
                                    <a href="" class="blue-btn btn button-rounded shadow-sm t600 ml-2 mt-2 mt-sm-4" data-lightbox="iframe">Watch Video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <div class="mb-0 clearfix offer center">
            <div class="container">
                <div class="nobottomborder bottommargin-lg clearfix">
                    <h2 class="nott mb-4">For <span>big offers,</span> count on Paranjape!</h2>
                    <p class="d-block uppercase ls3 h5">The No Emi offer*<br>
                        gst benefits applicable from now*<br>
                        no stamp duty & Registration Fee*<br>
                        low down payment*<br>
                        scratch & win*<br>
                        Additional discount on online Registration*
                    </p>
                </div>
            </div>
        </div>
        <div id="section-demos" class="section nobg mb-0 clearfix">
            <div class="container clearfix">
                <div class="center nobottomborder bottommargin-lg clearfix">
                    <h2 class="nott mb-4" ><span>Trending</span> Projects</h2>
                </div>
                <div class="row justify-content-around clearfix">
                    <div class="col-sm-6 p-3 mb-0 mb-lg-4 center">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="feature-box media-box center">
                                    <div class="fbox-media mb-lg-0">
                                        <img class="shadow rounded img-fluid" src="assets/images/img-1.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-div">
                                <h3 class="mb-2 text-div-head">Everglades</h3>
                                <div class="mb-3 text-div-desc">1 BR Homes, Bhugaon
                                </div>
                                <a href="#" data-scrollto="#section-niche" data-offset="120" class="more-link">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-3 mb-0 mb-lg-4 center">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="feature-box media-box center">
                                    <div class="fbox-media mb-lg-0">
                                        <img class="shadow rounded img-fluid" src="assets/images/img-2.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-div">
                                <h3 class="mb-2 text-div-head">Cityscapes</h3>
                                <div class="mb-3 text-div-desc">Close to P.L. Deshpande Garden,
                                    Near Rajaram Bridge
                                </div>
                                <a href="#" data-scrollto="#section-multipage" data-offset="120" class="more-link">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-3 mb-0 mb-lg-4 center">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="feature-box media-box center">
                                    <div class="fbox-media mb-lg-0">
                                        <img class="shadow rounded img-fluid" src="assets/images/img-3.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-div">
                                <h3 class="mb-2 text-div-head">Orion</h3>
                                <div class="mb-3 text-div-desc">2 BHK,  Hinjawadi Phase I
                                </div>
                                <a href="#" data-scrollto="#section-onepage" data-offset="80" class="more-link">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-3 mb-0 mb-lg-4 center">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="feature-box media-box center">
                                    <div class="fbox-media mb-lg-0">
                                        <img class="shadow rounded img-fluid" src="assets/images/img-4.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-div">
                                <h3 class="mb-2 text-div-head">Broadway</h3>
                                <div class="mb-3 text-div-desc">2, 3 & 4 BHK Apts, Wakad
                                </div>
                                <a href="#" data-scrollto="#section-hero" data-offset="100" class="more-link">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="section center mt-0 clearfix counter-sec">
            <div class="container clearfix">
                <div class="row mt-5 clearfix">
                    <div class="col-md-3 mb-5">
                        <div class="counter color"><span data-from="999" data-to="47000" data-refresh-interval="50" data-speed="1000">47000</span>+</div>
                        <h3><span class="subtitle nocolor ls0">Happy Customers</span></h3>
                    </div>
                    <div class="col-md-3 mb-5">
                        <div class="counter color"><span data-from="10" data-to="900" data-refresh-interval="10" data-speed="1000">190</span>+</div>
                        <h3><span class="subtitle nocolor ls0">Ongoing Projects</span></h3>
                    </div>
                    <div class="col-md-3 mb-5">
                        <div class="counter color"><span data-from="0" data-to="30" data-refresh-interval="100" data-speed="1000">33</span>+</div>
                        <h3><span class="subtitle nocolor ls0">Year Legacy</span></h3>
                    </div>
                    <div class="col-md-3 mb-5">
                        <div class="counter color"><span data-from="3" data-to="45" data-refresh-interval="40" data-speed="900">8</span>+</div>
                        <h3><span class="subtitle nocolor ls0">Cities</span></h3>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div id="section-niche" class="section page-section center nobg mb-0 clearfix">
            <div class="px-5 container-fluid">
                <div class="center nobottomborder clearfix">
                    <h2 class="nott"><span>Our</span> Projects</h2>
                </div>
                <div class="clear"></div>
                <div class="row mt-5 clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="index.html" target="_blank">
                                <img src="assets/images/projects/img-1.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Athashri<br> <span class="badge bgcolor">
                                Senior Housing project, Vadodara</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-coworking.html" target="_blank">
                                <img src="assets/images/projects/img-2.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Megh Pushpa<br> <span class="badge bgcolor">1 & 2 BHK, Ratnagiri</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-recipes.html" target="_blank">
                                <img src="assets/images/projects/img-3.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Broadway<br> <span class="badge bgcolor">2,3 BHK Apts, Wakad</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-4.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Blue Ridge – 24 & 25<br> <span class="badge bgcolor">2 & 3 BR Apartments, Hinjewadi</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-5.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Forest Trails<br> <span class="badge bgcolor">2 & 3 BR Apts
Shops & Offices, Bhugaon</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-6.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Paranjape Trident<br> <span class="badge bgcolor">1 & 2 BHK Residences, Hinjawadi</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-7.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Blueridge<br> <span class="badge bgcolor">1, 2, 3 BHK Apts, Hinjawadi</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-8.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Happiness Hub<br> <span class="badge bgcolor">1 RK, 1 & 2 BHK Apts, Nr. Khed Shivapur</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-9.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>The Lofts<br> <span class="badge bgcolor">1 BR, Hinjawadi</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-10.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Azure<br> <span class="badge bgcolor">2 & 3 BHK Homes, Tathawade</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-11.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>127 Upper East<br> <span class="badge bgcolor">2, 3 & 4 BR Homes, Santacruz (E)

</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-12.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Swapna Samrat<br> <span class="badge bgcolor">2 & 3 BR Majestic Homes, Karve Road

</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-13.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Crystal Towers<br> <span class="badge bgcolor">2 & 3 BHK Apts, Baner</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-14.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Athashri Valley<br> <span class="badge bgcolor">1 & 2 BHKs, Bhugaon</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-15.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Athashri Synergy<br> <span class="badge bgcolor">1 & 2 BHK, Mahalunge</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-16.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Skyone<br> <span class="badge bgcolor">4 BHK Penthouses, Model Colony

</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-17.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Gloria Grand<br> <span class="badge bgcolor">2 & 3 BHK Homes, Bavdhan</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-18.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Richmond Park<br> <span class="badge bgcolor">2 & 3 Bedroom Apts, Rahatani</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-19.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Madhukosh<br> <span class="badge bgcolor">2 BHK Apts, Sinhagad Road

</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                        <div class="iportfolio p-2">
                            <div class="portfolio-image shadow-lg">
                                <a href="demo-movers.html" target="_blank">
                                <img src="assets/images/projects/img-20.jpg" class="img-fluid">
                                </a>
                            </div>
                            <div class="portfolio-desc center pt-4 nobottompadding">
                                <h3>Wind Fields<br> <span class="badge bgcolor">2, 3 & 4 BHK Apts, Bengaluru</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="options-reg graySection">
        <div class="container">
            <div class="row align-items-stretch mx-0 intro-support-block clearfix">
                <div class="col-md-3 nopadding center">
                    <div class="clearfix">
                        <a href="http://support.semicolonweb.com/forums/forum/canvas-html/" class="col-padding" target="_blank">
                        <img src="assets/images/icon-1.png" class="img-fluid">
                        <span class="t500">Register Online</span>
                        <p class="desc">Fill in your details and register yourself for the biggest home exhibition by Paranjape.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 nopadding center">
                    <div class="clearfix">
                        <a href="http://support.semicolonweb.com/canvas-html-documentation/" class="col-padding" target="_blank">
                        <img src="assets/images/icon-2.png" class="img-fluid">
                        <span class="t500">Verification</span>
                        <p class="desc">Simply receive an sms and enter the verification code to verify yourself to avoid any problems.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 nopadding center">
                    <div class="clearfix">
                        <a href="https://www.youtube.com/user/shank20121/videos" class="col-padding" target="_blank">
                        <img src="assets/images/icon-3.png" class="img-fluid">
                        <span class="t500">Download Coupon</span>
                        <p class="desc">Download your exclusive offer coupon and save it for the exhibition day.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 nopadding center">
                    <div class="clearfix">
                        <a href="https://www.youtube.com/user/shank20121/videos" class="col-padding" target="_blank">
                        <img src="assets/images/icon-4.png" class="img-fluid">
                        <span class="t500">Avail Benifits</span>
                        <p class="desc">Present your exclusive coupon at the exhibition. Avail discounts and offers on your dream home
with the coupon.</p>
                        </a>
                    </div>
                </div>
            </div>
                <a href="" class="opt-btn blue-btn btn button-rounded shadow-sm t600 mt-2 mt-sm-4" data-lightbox="iframe" data-speed="1250" data-toggle="modal" data-target="#myModal">Register now</a>
                <!-- <a href="" class="opt-btn blue-btn btn button-rounded" data-lightbox="iframe">Register now</a> -->
        </div>
        </div>
        <footer class="text-center">
            <img src="assets/images/footer-logo.png" class="footer-logo img-fluid" >

            <p>Disclaimer : All under construction projects are RERA registered.
All the above mentioned benefits, prices and discounts are subject to terms and conditions. This perspective image may not be to the scale or may not represent actual facade / elevation. The details of windows, paints, elevation features, landscaping, ground development, trees etc. in this perspective is an artist’s impression and would be different to actual construction of building and development. The viewers affirm that he / she has not taken his/ her decision of purchase/booking by viewing this perspective. The company is not responsible for the action of the viewer’s booking / purchasing a unit relying on this perspective. MAHARERA NOS. : Forest Trails (9,10,11) - P52100000067, Blue Ridge (18,19) - P52100000054, The Lofts - P52100000060, Crystal Tower - P52100000082, Swapna Samrat - P52100000035, Athashri Valley - P52100000029, Azure - P52100000241, Happiness Hub - P52100000303,  Ujval - P51800000657, Abhiruchi Parisar - P52100000452, 127 Upper East - P51800000454, Richmond Park - P52100001358, Aaryavarta - P51600002169, Athashri Synergy - P52100001787, Gloria Grand - P52100001380, Trident Towers - P52100004511</p>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
        
        <script src="assets/js/script.js"></script>

        <script>
        $(function(){
            $('.intro-showcase-section').hide();
            $('.intro-showcase-section').eq(0).show();
            // Navbar on hover
            $('.tab-hover').find('.nav-link').on( 'click', function(e) {
                var target = $(this).attr('href');

                $('.tab-hover').find('.nav-link').removeClass('active');
                $(this).addClass('active');

                $('.intro-showcase-section').hide();
                $(target).stop(true).fadeIn();

                e.stopPropagation();
                e.preventDefault();
            });
        });

        jQuery(window).on( 'load', function(){

            var $container = $('#intro-multipages-container'),
                $container2 = $('#intro-onepages-container');

            $container.infiniteScroll({
                path: '.load-next-multipages',
                button: '.load-next-multipages',
                scrollThreshold: false,
                history: false,
                status: '#page-load-status-multipage'
            });

            $container2.infiniteScroll({
                path: '.load-next-onepages',
                button: '.load-next-onepages',
                scrollThreshold: false,
                history: false,
                status: '#page-load-status-onepage'
            });

            $container.on( 'load.infiniteScroll', function( event, response, path ) {
                var $items = $( response ).find('.grid-intro-item ');
                // append items after images loaded
                $items.imagesLoaded( function() {
                    $container.append( $items );
                });
            });

            $container2.on( 'load.infiniteScroll', function( event, response, path ) {
                var $items = $( response ).find('.grid-intro-item ');
                // append items after images loaded
                $items.imagesLoaded( function() {
                    $container2.append( $items );
                });
            });

        });
    </script>
    <?php include('validations.php'); ?>
    </body>
</html>