<?php
    /*
    Template Name: How To Play
    */
    get_header();
    $howToPlayPageUrl = GetApiBaseUrl('/7');
    $howToPlayPageDetails = json_decode(get_api_response($howToPlayPageUrl));
    // echo'<pre>';print_r($howToPlayPageDetails->acf);exit;
?>
<?php 
    $url=$_SERVER['REQUEST_URI'];
    if($url=="/how-to-play-app/"){
?>
	<style>
	    footer,header, .inner-banner,.fixed_btn_mobile.visible-xs {display: none !important;}
	</style>
<?php
    }
    else{}
?>
<div class="how_to_play_wrapper">
    <section class="inner-banner">
        <div class="inner-banner-heading">How to Play</div>
    </section>
    <section class="section_first">
        <div class="container">
            <p class="desc under_heading" data-aos="zoom-in" data-aos-duration="1000"><?=$howToPlayPageDetails->acf->description;?></p>
            <div class="video">
                <img src="<?=$howToPlayPageDetails->acf->image;?>" class="img-responsive" alt="">
                <div class="caption">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/youtube-icon.png" class="youtube-icon" alt="">
                    <p>Walkthrough Video</p>
                </div>
            </div>
            <div class="brif_game_steps">
                <?php $i=0; foreach ($howToPlayPageDetails->acf->game_steps as $value) { ?>
                <div class="row">
                    <div class="game_step_number">
                        <p><?=$value->game_step_number?></p>
                    </div>
                    <?php if($i%2==0){ ?>
                    <div class="game_step_desc">
                        <div class="col-md-6 col-md-push-1 col-sm-12 visible-sm visible-xs">
                            <a class="image-link" href="<?=$value->image?>">
                            <img src="<?=$value->image?>" class="step-img img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-md-push-2 col-sm-12" data-aos="zoom-in" data-aos-duration="1000">
                            <p class="title"><?=$value->title?></p>
                            <p class="desc"><?=$value->description?></p>
                        </div>
                        <div class="col-md-6 col-md-push-1 col-sm-12 hidden-sm hidden-xs" data-aos="zoom-in" data-aos-duration="1000">
                            <a class="image-link" href="<?=$value->image?>">
                            <img src="<?=$value->image?>" class="step-img img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="game_step_desc">
                        <div class="col-md-6 col-md-push-1 col-sm-12 visible-sm visible-xs">
                            <a class="image-link" href="<?=$value->image?>">
                            <img src="<?=$value->image?>" class="step-img img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-md-push-1 col-sm-12 hidden-sm hidden-xs" data-aos="zoom-in" data-aos-duration="1000">
                            <a class="image-link" href="<?=$value->image?>">
                            <img src="<?=$value->image?>" class="step-img img-responsive" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 col-md-push-2 col-sm-12" data-aos="zoom-in" data-aos-duration="1000">
                            <p class="title"><?=$value->title?></p>
                            <p class="desc"><?=$value->description?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php $i++; } ?>
            </div>
        </div>
    </section>
    <section class="hwp_questions gray_background">
        <div class="container">
            <div class="row">
                <?php foreach ($howToPlayPageDetails->acf->questions as $value) { ?>
                <div class="questions">
                    <p class="title"><?=$value->title?></p>
                    <p class="desc"><?=$value->description?></p>
                </div>
                <?php } ?>
                <div class="questions last-question">
                    <div class="inner-banner-heading">SO FOLKS, ARE YOU READY?</div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>