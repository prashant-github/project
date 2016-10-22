<body>
    <footer>
        <div class="container">
            <div class="row">
                <div class="field-trip-logo">
                    <img src="images/footer-logo.png" alt="">
                </div>
                <p class="line"></p>
                <div class="social-icon">
                    <ul>
                        <li><a href="#" class="social-sprites"></a></li>
                        <li><a href="#" class="social-sprites twitter-sprite"></a></li>
                        <li><a href="#" class="social-sprites youtube-sprite"></a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <ul>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">PROGRAMMS</a></li>
                        <li><a href="#">CONTACT US</a></li>
                    </ul>
                </div>
                <p class="copyright">&COPY; Fieldtrip Inc Pvt Ltd.</p>
            </div>
        </div>
    </footer>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('.button').click(function () {
                $('.button').removeClass('remove-btn');
                $(this).addClass('remove-btn');
                $('.posted-date').addClass('post-top');
            });

        });
    </script>
 <!--    <script>
         $(document).ready(function () {
             $(".navbar-nav a").click(function () {
                 $(this).addClass("active-blue");
                 $(this).parent().siblings().find('a').removeClass('active-blue');
             });
         });
     </script>-->
 <!--    <script>
         $(document).ready(function () {
             $(".join-accordian").click(function () {
                 $(".join-accordian").addClass("remove-btn");
                $(".posted-date").addClass("post-top")
             });
         });
     </script>-->

    <script type="text/javascript" src="http://cdn.dev.skype.com/uri/skype-uri.js"></script>

    <script>
        var map;
        function initialize() {
            map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: new google.maps.LatLng(-33.91722, 151.23064),
                mapTypeId: 'roadmap',
                styles: [
                    {
                        featureType: 'road',
                        elementType: 'geometry',
                        stylers: [
                            {color: '#000000'},
                            {weight: 1.6}
                        ]
                    }, {
                        featureType: 'road',
                        elementType: 'labels',
                        stylers: [
                            {saturation: -100},
                            {invert_lightness: true}
                        ]
                    }, {
                        featureType: 'landscape',
                        elementType: 'geometry',
                        stylers: [
                            {hue: '#ffff00'},
                            {gamma: 1.4},
                            {saturation: 82},
                            {lightness: 96}
                        ]
                    }, {
                        featureType: 'poi.school',
                        elementType: 'geometry',
                        stylers: [
                            {hue: '#fff700'},
                            {lightness: -15},
                            {saturation: 99}
                        ]
                    }, {
                        featureType: 'poi',
                        elementType: 'geometry',
                        stylers: [
                            {visibility: 'off'}
                        ]
                    }, {
                        featureType: 'poi.school',
                        elementType: 'geometry',
                        stylers: [
                            {visibility: 'on'},
                            {hue: '#fff700'},
                            {lightness: -15},
                            {saturation: 99}
                        ]
                    }
                ]
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initialize">
    </script>


    <!--    Google Maps-->

</body>

</html>
