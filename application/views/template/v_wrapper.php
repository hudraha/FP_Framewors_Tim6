<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('v_header.php'); ?>
</head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

    <!-- NAVBAR -->
    <?php require_once('v_navbar.php'); ?>
    <!-- END NAVBAR -->

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                <!-- SIDEBAR -->
                <?php require_once('v_sidebar.php'); ?>
                <!-- END SIDEBAR -->


                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- BODY -->
                                <?php $this->load->view($v_template); ?>
                            <!-- END BODY -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Required Jquery -->
<?php require_once('v_footer.php'); ?>
</body>

</html>
