        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">

                </nav>
                <p class="copyright pull-left">
                    Copyright &copy; 2016 <a href="http://penandaku.com/">Penandaku </a>All Rights Reserved.
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php print cdn('js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?php print cdn('js/jquery.dataTables.min.js') ?>" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php print cdn('js/bootstrap-checkbox-radio-switch.js') ?>"></script>

    <!--  Charts Plugin -->
    <script src="<?php print cdn('js/chartist.min.js') ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php PRINT cdn('js/bootstrap-notify.js') ?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php print cdn('js/light-bootstrap-dashboard.js') ?>"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="<?php print cdn('js/demo.js') ?>"></script>
        <script type="text/javascript">
            $(function() {
                $("#data-alumni").dataTable();
            });
        </script>    
</html>