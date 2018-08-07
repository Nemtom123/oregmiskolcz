<?php include_once 'header.php'?>
<body>
<?php
include_once 'menu.php';
include_once 'section1.php';
?>

<!-- /box2 -->
<div id="section2">
    <!-- Parallax-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="oregmiskolc/img/940x647/maxresdefault.jpg"/>
</div>


<div class="clearfix"></div>
<?php include_once 'section3.php'?>
<br><br><br>
</div>
<?php include_once 'section3.1.php'?>
<br><br><br>
<div id="section4">
    <!-- Parallax-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="oregmiskolc/img/2.jpg"></div>
</div>

<div id="section5">
    <div id="contact" class="container">
        <h3 class="text-center" style="color: darkgoldenrod">Lépjen kapcsolatba velünk</h3>
        <p class="text-center"><em>Öreg Miskolcz Hotel & Étterem</em></p>

        <div class="row">
            <div class="col-md-4">
                <p>Küldjön üzenetet.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>Miskolc </p>
                <p><span class="glyphicon glyphicon-phone"></span>Telefon: </p>
                <p><span class="glyphicon glyphicon-envelope"></span>Email: </p>
            </div>
            <form method="post" name="myemailform" action="form-to-email.php">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Név" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email"
                                   required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="message" placeholder="Üzenet"
                              rows="5"></textarea>
                    <br>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button class="btn pull-right" name="submit" type="submit">Küldés</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div class="g-box-shadow__dark-lightest-v1"></div>
    </div>
</div>
<br>
<!-- Add Google Maps -->
<div class="h_iframe iframe">
    <iframe src="https://www.google.com/maps/embed?pb=f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe663fe754ca92dc!2sFodin-home+KFT!5e0!3m2!1shu!2shu!4v1515020508534"
            height="700" frameborder="0" style="border:0" allowfullscreen>
    </iframe>
</div>
<div class="parallax-window" data-parallax="scroll" data-image-src="oregmiskolc/img/1.jpg"></div>
<!-- /Parallax-->
<br>

<div class="clearfix"></div>
<div id="section6">
    <!--======== box2 ========-->
    <div class="pad-section" style="font-size: 25px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div id="js__scroll-to-section6" class="container g-padding-y-80--xs g-padding-y-125--sm">
                        <div class="g-text-center--xs g-margin-b-100--xs">
                            <p style="color: darkgoldenrod">Szolgáltatásaink</p>
                            <h2 style="color:#4d4c4d">Úton lenni nem mindig az élet, néha meg is
                                kell érkezni.</h2>
                        </div>
                        <div class="row g-margin-b-60--xs g-margin-b-70--md">
                            <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                                <div class="clearfix">
                                    <div class="g-media g-width-30--xs">
                                        <div class="wow fadeInDown" data-wow-duration="0.3" data-wow-delay="0.1s">
                                            <i style="font-size: 35px; color:darkgoldenrod" class="ti-heart"></i>
                                        </div>
                                    </div>
                                    <div class="g-media__body g-padding-x-36--xs">
                                        <h3 style="font-size: 35px; color:#4d4c4d" class="g-font-size-36--xs">
                                            Romantikus
                                            hétvége</h3>
                                        <p style="font-size: 15px; color: #5e5e5e;">Öreg Miskolcz Hotel &
                                            Étterem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                                <div class="clearfix">
                                    <div class="g-media g-width-30--xs">
                                        <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                                            <i style="font-size: 35px; color:darkgoldenrod" class="ti-infinite"></i>
                                        </div>
                                    </div>
                                    <div class="g-media__body g-padding-x-20--xs">
                                        <h3 style="font-size: 35px; color:#4d4c4d" class="g-font-size-36--xs">
                                            Esküvők</h3>
                                        <p style="font-size: 15px; color: #5e5e5e;">Öreg Miskolcz Hotel &
                                            Étterem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="clearfix">
                                    <div class="g-media g-width-30--xs">
                                        <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                            <i style="font-size: 35px; color:darkgoldenrod"
                                               class="ti-alarm-clock"></i>
                                        </div>
                                    </div>
                                    <div class="g-media__body g-padding-x-20--xs">
                                        <h3 style="font-size: 35px; color:#4d4c4d" class="g-font-size-36--xs">
                                            Rendezv
                                            ények</h3>
                                        <p style="font-size: 15px; color: #5e5e5e;">Öreg Miskolcz Hotel &
                                            Étterem</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // end row  -->
                        <div class="row">
                            <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                                <div class="clearfix">
                                    <div class="g-media g-width-30--xs">
                                        <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                            <i style="font-size: 35px; color:darkgoldenrod" class="ti-home"></i>
                                        </div>
                                    </div>
                                    <div class="g-media__body g-padding-x-20--xs">
                                        <h3 style="font-size: 35px; color:#4d4c4d"
                                            class="g-font-size-36--xs">Pihenés</h3>
                                        <p style="font-size: 15px; color: #5e5e5e;">Öreg Miskolcz Hotel &
                                            Étterem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                                <div class="clearfix">
                                    <div class="g-media g-width-30--xs">
                                        <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                            <i style="font-size: 35px; color:darkgoldenrod" class="ti-home"></i>
                                        </div>
                                    </div>
                                    <div class="g-media__body g-padding-x-20--xs">
                                        <h3 style="font-size: 35px; color:#4d4c4d"
                                            class="g-font-size-36--xs">Pihenés</h3>
                                        <p style="font-size: 15px; color: #5e5e5e;">Öreg Miskolcz Hotel &
                                            Étterem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="clearfix">
                                    <div class="g-media g-width-30--xs">
                                        <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                            <i style="font-size: 35px ; color: darkgoldenrod" class="ti-home"></i>
                                        </div>
                                    </div>
                                    <div class="g-media__body g-padding-x-20--xs">
                                        <h3 style="font-size: 35px; color:#4d4c4d"
                                            class="g-font-size-36--xs">Pihenés</h3>
                                        <p style="font-size: 15px; color: #5e5e5e;">Öreg Miskolcz Hotel &
                                            Étterem</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- // end row  -->
                    <div class="row g-margin-b-60--xs g-margin-b-70--md">
                        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                            <div class="clearfix">
                                <div class="g-media g-width-30--xs">
                                    <div class="wow fadeInDown" data-wow-duration="0.3" data-wow-delay="0.1s">
                                        <i style="font-size: 35px; color:darkgoldenrod" class="ti-heart"></i>
                                    </div>
                                </div>
                                <div class="g-media__body g-padding-x-36--xs">
                                    <h3 style="font-size: 35px; color:#4d4c4d" class="g-font-size-36--xs">Romantikus
                                        hétvége</h3>
                                    <p style="font-size: 15px; color: #5e5e5e;">Öreg Miskolcz Hotel & Étterem</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                            <div class="clearfix">
                                <div class="g-media g-width-30--xs">
                                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                                        <i style="font-size: 35px; color:darkgoldenrod" class="ti-infinite"></i>
                                    </div>
                                </div>
                                <div class="g-media__body g-padding-x-20--xs">
                                    <h3 style="font-size: 35px; color:#4d4c4d" class="g-font-size-36--xs">
                                        Esküvők</h3>
                                    <p style="font-size: 15px; color: #5e5e5e;">Öreg Miskolcz Hotel & Étterem</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="clearfix">
                                <div class="g-media g-width-30--xs">
                                    <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                        <i style="font-size: 35px; color:darkgoldenrod" class="ti-alarm-clock"></i>
                                    </div>
                                </div>
                                <div class="g-media__body g-padding-x-20--xs">
                                    <h3 style="font-size: 35px; color:#4d4c4d" class="g-font-size-36--xs">Rendezv
                                        ények</h3>
                                    <p style="font-size: 15px; color: #5e5e5e;">Öreg Miskolcz Hotel & Étterem</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // end row  -->
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
</div>

<!--========== FOOTER -->
<footer style="background-color: white">
    <!-- Links
    <div class="g-hor-divider__dashed--white-opacity-lightest">
        <div class="container g-padding-y-80--xs">
            <div class="row">
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Home</a>
                        </li>
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">About</a>
                        </li>
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Work</a>
                        </li>
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Twitter</a>
                        </li>
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Facebook</a>
                        </li>
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Instagram</a>
                        </li>
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">YouTube</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                    <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Subscribe
                            to Our Newsletter</a></li>
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Privacy
                            Policy</a></li>
                        <li><a class="g-font-size-26--xs g-color--gold"
                               href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes">Terms
                            &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                    <h3 class="g-font-size-26--lg g-color--gold">Öreg Miskolcz Hotel & Étterem</h3>
                    <p class="g-color--gold">We are a creative studio focusing on culture, luxury, editorial &amp; art.
                        Somewhere between sophistication and simplicity.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Links -->

<!-- Copyright -->

<div class="container g-padding-y-50--xs">
    <div class="row">
        <div class="col-xs-6">
            <a href="index.php">
                <img class="g-width-100--xs g-height-auto--xs" src="oregmiskolc/img/logo.png" alt="">
            </a>
        </div>
        <div class="col-xs-6 g-text-right--xs">
            <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light">Öreg Miskolcz Hotel &
                Étterem</p>
        </div>
    </div>
</div>
</footer> -->
<!-- End Copyright -->
<!--========== END FOOTER ==========-->
<a href="javascript:void(0);" class="s-back-to-top js__back-to-top" style="color: #c0a16b"></a>
<!-- js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="oregmiskolc/js/main.js"></script>


<!-- Back To Top -->
<a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

<!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
<!-- Vendor -->
<script type="text/javascript" src="oregmiskolc/vendor/jquery.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/jquery.migrate.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/jquery.smooth-scroll.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/jquery.back-to-top.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/swiper/swiper.jquery.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/waypoint.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/counterup.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="oregmiskolc/vendor/jquery.parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
<script type="text/javascript" src="oregmiskolc/vendor/jquery.wow.min.js"></script>

<!-- General Components and Settings -->
<script type="text/javascript" src="oregmiskolc/js/global.min.js"></script>
<script type="text/javascript" src="oregmiskolc/js/components/header-sticky.min.js"></script>
<script type="text/javascript" src="oregmiskolc/js/components/scrollbar.min.js"></script>
<script type="text/javascript" src="oregmiskolc/js/components/magnific-popup.min.js"></script>
<script type="text/javascript" src="oregmiskolc/js/components/swiper.min.js"></script>
<script type="text/javascript" src="oregmiskolc/js/components/counter.min.js"></script>
<script type="text/javascript" src="oregmiskolc/js/components/portfolio-3-col.min.js"></script>
<script type="text/javascript" src="oregmiskolc/js/components/parallax.min.js"></script>
<script type="text/javascript" src="oregmiskolc/js/components/google-map.min.js"></script>
<script type="text/javascript" src="oregmiskolc/js/components/wow.min.js"></script>
<!--========== END JAVASCRIPTS ==========-->


</body>
<!-- End Body -->
</html>

