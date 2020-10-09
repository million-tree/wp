<?php
    /*
    Template Name: About Us page
    */
    get_header();
	$aboutUsPageUrl = GetApiBaseUrl('/164');
    $aboutUsPageDetails = json_decode(get_api_response($aboutUsPageUrl));
    // echo'<pre>';print_r($aboutUsPageDetails->acf);exit;

    ?>
<?php 
    $url=$_SERVER['REQUEST_URI'];
    if($url=="/about-us-app/"){
        ?>
<style>
    footer,header, .inner-banner,.fixed_btn_mobile.visible-xs {display: none !important;}
</style>
<?php
    }
    else{}
    ?>
<div class="about_wrapper">
    <section class="inner-banner">
        <div class="inner-banner-heading">About Us</div>
    </section>
    <section class="about_us text-center">
        <div class="container">
            <h2><?=$aboutUsPageDetails->acf->heading;?> </h2>
            <p class="desc" data-aos="zoom-in" data-aos-duration="1000"><?=$aboutUsPageDetails->acf->description;?></p>
            <div class="features_list">
                <ul class="p0">
                	<?php foreach ($aboutUsPageDetails->acf->feature_list as $value) { ?>
                		<li>
	                        <img alt="" src="<?=$value->icon?>" data-aos="fade-down" data-aos-duration="1000">
	                        <p class="features_text"><?=$value->name?></p>
                    	</li>
                	<?php } ?>
                  <!--   <li>
                        <img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/trust.png" data-aos="fade-down" data-aos-duration="1000">
                        <p class="features_text">Trust</p>
                    </li>
                    <li>
                        <img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/ethics.png" data-aos="zoom-in" data-aos-duration="1000">
                        <p class="features_text">Ethics</p>
                    </li>
                    <li>
                        <img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/society.png" data-aos="zoom-in" data-aos-duration="1000">
                        <p class="features_text">Society & environment</p>
                    </li>
                    <li>
                        <img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/to-serve.png" data-aos="zoom-in" data-aos-duration="1000">
                        <p class="features_text">To serve</p>
                    </li>
                    <li>
                        <img alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/icons/knowledge.png" data-aos="fade-down" data-aos-duration="1000">
                        <p class="features_text">Knowledge & progress</p>
                    </li> -->
                </ul>
            </div>
            <p class="desc" data-aos="fade-up" data-aos-duration="2000"><?=$aboutUsPageDetails->acf->information?></p>
            <p class="desc" data-aos="fade-up" data-aos-duration="2000"><?=$aboutUsPageDetails->acf->extra_information?></p>
        </div>
    </section>
</div>
<?php get_footer(); ?>