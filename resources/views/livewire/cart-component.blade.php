<div>
    <div class="table-main  table-bordered table-dark mt-20">
        <table class="table">
            <thead>
                <tr>
                    <th>Images</th>
                    <th>product Name</th>
                    <th>Price</th>
                    <th class="text-center">Quantity</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="#">
                            {{-- <img class="img-fluid" src="{{ url('storage/' . $products->image) }}" /> --}}
                        </a>
                    </td>
                    <td>
                        {{-- {{ $products->name }} --}}
                    </td>
                    <td>
                    </td>
                    <td>
                        {{-- {{ $products->amount }} --}}
                    </td>
                    <td>
                    </td>
                    <td>
                        {{-- {{ $products->price }} --}}
                    </td>
                    <td>
                        {{-- <a wire:click="removeFromCart({{ $products->id }})">Remove</a> --}}
                    </td>
                </tr>
                <tr>
            </tbody>
        </table>
        <div class="text-center w-full border-collapse p-6">
            <span class="text-lg">¡Your cart is empty!</span>
        </div>
    </div>
</div>
</div>














<div class="section_footer">
    <div class="container">
        <div class="mail_section">
            <div class="row">
                <div class="col-sm-6 col-lg-2">
                    <div><a href="#"><img src="images/footer-logo.png"></a></div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(71)
                            1234567890</span></div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-logo"><img src="images/email-icon.png"><span
                            class="map_text">Demo@gmail.com</span></div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="social_icon">
                        <ul>
                            <li><a href="#"><img src="images/fb-icon.png"></a></li>
                            <li><a href="#"><img src="images/twitter-icon.png"></a>
                            </li>
                            <li><a href="#"><img src="images/in-icon.png"></a></li>
                            <li><a href="#"><img src="images/google-icon.png"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-4 col-lg-2">
                    <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum
                        dolor sit amet, consectetur
                        ipsum dolor sit amet,</p>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <h2 class="shop_text">Address </h2>
                    <div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">No 40 Baria
                            Sreet 15/2 NewYork City, NY, United States.</span></div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-3">
                    <h2 class="shop_text">Our Company </h2>
                    <div class="delivery_text">
                        <ul>
                            <li>Delivery</li>
                            <li>Legal Notice</li>
                            <li>About us</li>
                            <li>Secure payment</li>
                            <li>Contact us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h2 class="adderess_text">productss</h2>
                    <div class="delivery_text">
                        <ul>
                            <li>Prices drop</li>
                            <li>New productss</li>
                            <li>Best sales</li>
                            <li>Contact us</li>
                            <li>Sitemap</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h2 class="adderess_text">Newsletter</h2>
                    <div class="form-group">
                        <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                    </div>
                    <button class="subscribr_bt">Subscribe</button>
                </div>
            </div>
        </div>
        <!-- section footer end -->
        <div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html
                Templates</a></div>


        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <!-- javascript -->
        <script src="js/owl.carousel.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js">
        </script>
        <script>
            $(document).ready(function() {
                        $(".fancybox").fancybox({
                            openEffect: "none",
                            closeEffect: "none"
                        });


                        $('#myCarousel').carousel({
                            interval: false
                        });

                        //scroll slides on swipe for touch enabled devices

                        $("#myCarousel").on("touchstart", function(event) {

                            var yClick = event.originalEvent.touches[0]
                                .pageY;
                            $(this).one("touchmove", function(event) {

                                var yMove = event.originalEvent
                                    .touches[0]
                                    .pageY;
                                if (Math.floor(yClick - yMove) >
                                    1) {
                                    $(".carousel").carousel('next');
                                } else if (Math.floor(yClick -
                                        yMove) < -1) {
                                    $(".carousel").carousel('prev');
                                }
                            });
                            $(".carousel").on("touchend", function() {
                                $(this).off("touchmove");
                            });
                        });

        </script>
