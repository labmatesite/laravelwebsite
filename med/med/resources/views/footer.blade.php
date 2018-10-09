        <!-- Footer Start -->
        <footer id="rs-footer" class="bg3 rs-footer">
 
      <!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        
                        
                        <div class="col-lg-5 col-md-12">
                            <h5 class="footer-title">OUR SITEMAP</h5>
                            <style>
                                .sitemap-widget li{
                                    white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                }
                            </style>
                            <ul class="sitemap-widget">
                                @foreach($categories as $value)
									<li><a href="/{{$value->page_url}}"><i class="fa fa-angle-right" aria-hidden="true"></i>{{$value->name}}</a></li>
                                    @endforeach
                            </ul>
                        </div>                        

                        <div class="col-lg-4 col-md-12">
                            <h5 class="footer-title">NEWSLETTER</h5>
                            <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
                            <form class="news-form">
                                <input type="text" class="form-input" placeholder="Enter Your Email">
                                <button type="submit" class="form-button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12">
                             <h5 class="footer-title">Google Map</h5>
                            <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2496.3219149262923!2d-1.0773818846698184!3d51.26839323597171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48742179e6bbaf11%3A0xe9742d767bbe3292!2sBasing+View%2C+Basingstoke%2C+Hampshire+RG21+4RG%2C+UK!5e0!3m2!1sen!2sin!4v1466752539491"
                        width="100%" height="220px" frameborder="0"
                        style="border: 5px solid #ffffff; border-radius: 6px;" allowfullscreen=""></iframe>

                        </div>

                    </div>
                                              
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p>© 2018 <a href="#">medofficesupplies.com</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>

        <!-- Search Modal Start -->
 
        

        <!-- modernizr js -->
        <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- slick.min js -->
        <script src="{{asset('js/slick.min.js')}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('js/wow.min.js')}}"></script>
        <!-- counter top js -->
        <script src="{{asset('js/waypoints.min.js')}}"></script>
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <!-- magnific popup -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <!-- rsmenu js -->
        <script src="{{asset('js/rsmenu-main.js')}}"></script>
        <!-- plugins js -->
        <script src="{{asset('js/plugins.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
 
</html>