<?php
    /**
     * The template for displaying the footer
     *
     * Contains the closing of the #content div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package _s
     */
    ?>
<footer>
    <div class="container">
        <div class="top_footer">
            <div class="col-sm-4">
                <a href="/"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/mt-logo-footer.png" class="footer_logo"></a>
                <p class="desc">Welcome to the tree of a million opportunities!!! MILLIONTREE  Techsystems Pvt. Ltd. is India’s first and most trusted platform where you can earn in minutes and with minimal efforts&absolutely no luck.</p>
            </div>
            <div class="col-sm-4 p0 hidden-xs">
                <div class="col-sm-6 p0">
                    <p class="footer_title">Quick Links</p>
                    <ul class="p0">
                        <a data-toggle="modal" data-target="#appModal">
                            <li class="desc">Download App</li>
                        </a>
                        <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' =>   'Footer1' ) );?>
                    </ul>
                </div>
                <div class="col-sm-6 p0">
                    <ul class="p0">
                        <li class="footer_title hidden-xs"></li>
                        <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' =>   'Footer2' ) );?>
                    </ul>
                </div>
            </div>
            <div class="visible-xs">
                <p class="footer_title">Quick Links</p>
                <div class="col-xs-12">
                    <?php 
                        wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' =>   'Footer1' ) );
                        wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' =>   'Footer2' ) );
                        ?>                    
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 social_icons">
                <p class="footer_title">Follow US</p>
                <ul class="p0">
                    <li class=""><a target="_blank" href="https://www.facebook.com/Million-Tree-105960201114176/"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/ft-social2.png"></a></li>
                    <!-- <li class=""><a target="_blank" href=""><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/ft-social1.png"></a></li> -->
                    <li class=""><a target="_blank" href="https://www.youtube.com/channel/UCxZaN_xxsiczS90EbdbMxAA?view_as=subscriber"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/ft-social3.png"></a></li>
                    <li class=""><a target="_blank" href="https://www.instagram.com/million_tree/"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/ft-social4.png"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="line">
    <div class="container">
        <div class="bottom_footer">
            <div class="col-sm-8">
                <p class="desc">2020 © MILLIONTREE  Techsystems Pvt. Ltd. All rights reserved.</p>
            </div>
            <div class="col-sm-4">
                <p class="footer_note">*You must be 18 years to play real money skill games</p>
            </div>
        </div>
    </div>
</footer>
<!-- Download App Modal -->        
<div class="modal fade appModal" id="appModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4> Download App</h4>
            </div>
            <div class="modal-body" >
                <form class="form-inline" method="POST" id="downloadAppForm">
                    <div class="form-group">
                        +91 <input type="text" class="form-control" id="number" name="number" placeholder="Enter Mobile number">
                        <button type="submit" id="submit_btn" class="form_btn">Get Link</button>
                        <p id="submit_spinner" style="display: none;"><b>Please Wait....!</b></p>
                        <div id="responseMsgDiv"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div><!-- closed content div -->
<section  class="fixed_btn_mobile visible-xs">
    <ul>
        <li><a href="/"><img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/mt-logo-footer.png" class="fixed_logo"></a></li>
        <li>
            <a class="visible-xs" href="http://milliontree.com/wp-content/app/MillionTree.apk" download>
            <img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/downlaod-btn-new.png" class="download_btn">
            </a>
        </li>
    </ul>
</section>
<!-- Back to top button -->
<a id="back-button"></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/aos.js"></script>
<script>
    AOS.init();
</script>        
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js"></script>
<?php include('validations.php'); ?>
</body>
</html>