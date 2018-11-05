<?php
if ( ! is_active_sidebar( 'footer-1' ) && !is_active_sidebar('footer-2') && !is_active_sidebar('footer-3')) {
    return;
}
?>

<footer class="footer">
        <!-- footer-top   -->
    <div class="footer-top">
        <div class="container positionrelative">
            <div class="row">
                <div class="col-lg-3 col-sm-5 order-lg-1 order-md-1 order-sm-1 order-1  footer-widget footer-social-area">
                     <?php
                        if (is_active_sidebar('footer-1')) {
                            dynamic_sidebar('footer-1');
                        }
                    ?>
                </div>
                
                <!-- Footer Widget, Site Info-->
                <div class="col-lg-4 col-md-8 col-sm-9 order-lg-2 order-md-3 order-sm-3 order-3 ml-lg-auto mx-md-auto mx-sm-auto mx-auto footer-widget footer-site-info">
                   <?php
                        if (is_active_sidebar('footer-2')) {
                            dynamic_sidebar('footer-2');
                        }
                    ?>
                </div>
                <!-- Footer Widget, POPULAR POST-->
                <div class="col-lg-4 col-sm-7 order-lg-3 order-md-2 order-sm-2 order-2  pl-lg-0 footer-widget footer-poputal-post">
                    <div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-11 ml-auto">
                             <?php
                                if (is_active_sidebar('footer-3')) {
                                    dynamic_sidebar('footer-3');
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="required_icon">
                <?php blogstart_required_link(); ?>
            </div>
        </div>
    </div>
    <!-- /footer-top  -->
</footer>