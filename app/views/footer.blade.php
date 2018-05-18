<!-- footer -->
<div class="footer_top_agileits">
    <div class="container">
        <div class="col-md-12 footer_grid">
            <h3>Contact Info</h3>
            <ul class="address">
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>3440 Wilshire Blvd., 10th Floor, Suite #1000 <span>Los Angeles, CA 90010, USA</span></li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@sciuniversity.com">info@sciuniversity.com</a></li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+1 213 204 3907</li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="footer_grids">
            <div class="col-md-4 footer_grid_left">
                <h3>Request Information</h3>
            </div>
            <div class="col-md-8 footer_grid_right">
                <input type="email" name="Email" id="email" placeholder="Enter Email Address..." required="">
                <input type="submit" value="Submit" id="newsletter">

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="footer_w3ls">
    <div class="container">
        <div class="footer_bottom1">
            <p>© 2018 SCIU. All Rights Reserved</p>
        </div>
    </div>
</div>
<!-- //footer -->


<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.countup.js') }}"></script>
<script src="{{ asset('js/sciu/home.js') }}"></script>
<script>
    $('.counter').countUp();
</script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay: true,
            items: 3,
            itemsDesktop: [991, 2],
            itemsDesktopSmall: [414, 4]

        });
    });
</script>

</body>

</html>