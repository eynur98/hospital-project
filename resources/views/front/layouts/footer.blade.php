<!--Start footer area-->  
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom50">
                    <div class="title">
                        <h3>About Hospitals</h3>
                        <span class="border"></span>
                    </div>
                    <div class="our-info">
                        <p>The relentless service of Hospitals in the past 25 years taken health care to the most modern levels in the region catering to urban & rural.</p>
                        <p class="mar-top">A Health Care Provider of Western Approach, Hospitals is the most trusted multispecialty hospital.</p>
                        <a href="#">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom50">
                    <div class="title">
                        <h3>Usefull Links</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="usefull-links fl-lft">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Awards</a></li>
                        <li><a href="#">Consultants</a></li>
                        <li><a href="#">Working Hours</a></li>
                        <li><a href="#">Procedures</a></li>
                        <li><a href="#">Special Offers</a></li>
                        <li><a href="#">FAQ’s</a></li>
                    </ul>
                    <ul class="usefull-links">
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Healthy Foods</a></li>
                        <li><a href="#">Appointments</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="#">Certificates</a></li>
                        <li><a href="#">Qualifications</a></li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mar-bottom">
                    <div class="title">
                        <h3>Contact Details</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-pin"></span>
                            </div>
                            <div class="text-holder">
                                <h5>{{ $contact->translate(App::getLocale())->address }}</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-interface"></span>
                            </div>
                            <div class="text-holder">
                                <h5>{{ $contact->email }}</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h5>{{ $contact->phone }}</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="text-holder">
                                <h5>Mon-Satday: 9am to 18pm</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Start single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget clearfix">
                    <div class="title">
                        <h3>Make an Appointment</h3>
                        <span class="border"></span>
                    </div>
                    <form class="appointment-form" action="#">
                        <div class="input-box">
                            <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                            <div class="icon-box">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <input type="email" name="form_email" value="" placeholder="Your Email" required="">
                            <div class="icon-box">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <textarea name="form_message" placeholder="Your Message.." required="" aria-required="true"></textarea>
                        </div>
                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>   
<!--End footer area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright-text">
                    <p>Copyrights © 2017 All Rights Reserved, Powered by <a href="#">Hospitals.</a></p> 
                </div>
            </div>
            <div class="col-md-4">
                <ul class="footer-social-links">
                    <li><a href="{{ $contact->facebook }}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{ $contact->instagram }}"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="{{ $contact->youtube }}"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="{{ $contact->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End footer bottom area-->

</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-triangle-inside-circle"></span></div>

<!-- main jQuery -->
<script src="{{ asset('template') }}/js/jquery-1.11.1.min.js"></script>
<!-- Wow Script -->
<script src="{{ asset('template') }}/js/wow.js"></script>
<!-- bootstrap -->
<script src="{{ asset('template') }}/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="{{ asset('template') }}/js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="{{ asset('template') }}/js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="{{ asset('template') }}/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="{{ asset('template') }}/js/validation.js"></script>
<!-- mixit up -->
<script src="{{ asset('template') }}/js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="{{ asset('template') }}/js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="{{ asset('template') }}/js/gmaps.js"></script>
<script src="{{ asset('template') }}/js/map-helper.js"></script>
<!-- fancy box -->
<script src="{{ asset('template') }}/js/jquery.fancybox.pack.js"></script>
<script src="{{ asset('template') }}/js/jquery.appear.js"></script>
<!-- Mirrored from st.ourhtmldemo.com/new/Hospitals/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Apr 2023 17:39:27 GMT -->
<!-- isotope script-->
<script src="{{ asset('template') }}/js/isotope.js"></script>
<script src="{{ asset('template') }}/js/jquery.prettyPhoto.js"></script> 
<script src="{{ asset('template') }}/js/jquery.bootstrap-touchspin.js"></script>
<!-- jQuery timepicker js -->
<script src="{{ asset('template') }}/assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="{{ asset('template') }}/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               
<!-- Bootstrap bootstrap touchspin js -->
<!-- jQuery ui js -->
<script src="{{ asset('template') }}/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="{{ asset('template') }}/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- Html 5 light box script-->
<script src="{{ asset('template') }}/assets/html5lightbox/html5lightbox.js"></script>


<!-- revolution slider js -->
<script src="{{ asset('template') }}/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('template') }}/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('template') }}/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{ asset('template') }}/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{ asset('template') }}/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset('template') }}/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset('template') }}/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{ asset('template') }}/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{ asset('template') }}/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{ asset('template') }}/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset('template') }}/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="{{ asset('template') }}/js/custom.js"></script>





</body>

</html>