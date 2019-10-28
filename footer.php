
        <!--/footer-bottom-->
        <div class="footerv3-w3ls">
           
            <!-- footerv3-top -->
            <div class="footerv3-top">
                <div class="container">
                    <div class="col-md-3 col-sm-6 footv3-left">
                        <h3>About Us</h3>
                        <h4>
                            <a href="index.html">Bookshelf</a>
                        </h4>
                        <p>The Online Library</p>
                    </div>
                    <div class="col-md-3 col-sm-6 footv3-left">
                        <h3>Get In Touch</h3>

                        <div class="fv3-contact">
                            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                            <p>Flat A3, Second Floor</p>
                            <p>No. 5/46, D-2, Maharaja Garden, Bajanaikoil Street</p>
                            <p>Ramapuram, Chennai - 600 089</p>
                        </div>
                        <div class="fv3-contact">
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            <p>+91 91639 25128</p>
                            <div class="fv3-contact">
                            </div>
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            <p>
                                <a href="mailto:example@email.com">info@bookshelf.com</a>
                            </p>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <div class="col-md-3 col-sm-6 footv3-left">
                        <h3>Latest releases</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="images/lt1.jpg" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lt4.jpg" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lt3.jpg" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lt6.jpg" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lt5.jpg" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lt2.jpg" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lt3.jpg" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lt6.jpg" alt="" class="img-responsive">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/lt6.jpg" alt="" class="img-responsive">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footv3-left">
                        <h3>Subscribe</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has </p>
                        <form action="#" method="post">
                            <input type="text" value="Your Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- /footerv3-top -->
        </div>
        <div class="cpy-right">
            <p>© 2018 Bookshelf. All rights reserved.
            </p>
        </div>
    </div>
    <!-- //home -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--search jQuery-->
    <script src="js/main.js"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        chr.render();

        chr.cart.on('new_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
    <!--//scripts-->
    <!-- //gallery-js  -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>