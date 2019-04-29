  <!-- jQuery  -->
    <script src="minton-hr-dark/assets/js/jquery.min.js"></script>
    <script src="minton-hr-dark/assets/js/popper.min.js"></script><!-- Popper for Bootstrap --><!-- Tether for Bootstrap -->
    <script src="minton-hr-dark/assets/js/bootstrap.min.js"></script>
    <script src="minton-hr-dark/assets/js/waves.js"></script>
    <script src="minton-hr-dark/assets/js/jquery.slimscroll.js"></script>
    <script src="minton-hr-dark/assets/js/jquery.scrollTo.min.js"></script>

    <!-- Counter Up  -->
    <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="../plugins/counterup/jquery.counterup.min.js"></script>

    <!-- circliful Chart -->
    <script src="../plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
    <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- skycons -->
    <script src="../plugins/skyicons/skycons.min.js" type="text/javascript"></script>

    <!-- Page js  -->
    <script src="minton-hr-dark/assets/pages/jquery.dashboard.js"></script>

    <!-- Custom main Js -->
    <script src="minton-hr-dark/assets/js/jquery.core.js"></script>
    <script src="minton-hr-dark/assets/js/jquery.app.js"></script>


    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
            $('.circliful-chart').circliful();
        });

        // BEGIN SVG WEATHER ICON
        if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                    {"color": "#3bafda"},
                    {"resizeClear": true}
                    ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);
            icons.play();
        };

    </script>
