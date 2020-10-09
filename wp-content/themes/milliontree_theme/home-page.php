<?php
    /*
    Template Name: Home Page
    */
    get_header();
    $homePageUrl = GetApiBaseUrl('/14');
    $homePageDetails = json_decode(get_api_response($homePageUrl));
    // echo'here---';echo'<pre>';print_r($homePageDetails->acf);exit;
    ?>
<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators hidden-xs">
            <?php $i=0; foreach ($homePageDetails->acf->banner_slider as $value) {
                if($i==0){$addClass="active";}else{$addClass='';} ?>
            <li data-target="#myCarousel" data-slide-to="<?=$i?>" class="<?=$addClass?>"></li>
            <?php $i++; } ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php $i=0; foreach ($homePageDetails->acf->banner_slider as $value) {
                if($i==0){$addClass="active";}else{$addClass='';} ?>
            <div class="item <?=$addClass?>">
                <img src="<?=$value->image?>" alt="Slider" class="img-responsive img100 banner_img hidden-xs" alt="">
                <img src="<?=$value->mobile_banner?>" alt="Slider" class="img-responsive img100 banner_img visible-xs" alt="">
                <div class="caption">
                    <h2><?=$value->title_one?></h2>
                    <h3><?=$value->title_two?></h3>                    
                    <div class="banner_download_button hidden-xs">
                        <a data-toggle="modal" data-target="#appModal"><img src="<?php bloginfo('template_directory'); ?>/assets/img/downlaod-btn-new.png" class="download_btn" alt=""></a>
                    </div>
                </div>
            </div>
            <?php $i++; } ?>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/left-arrow.png" alt="">                
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/right-arrow.png" alt="">
        </a>
    </div>
    <div class="text-center bottom_headline">
        <h2 class="heading">Luck ne haar maani, dimag ki aayi baari!</h2>
    </div>
</section>
<section class="zone">
    <div class="gray_background">
        <h2 class="main_heading">Zone to Conquer</h2>
        <div class="menus">
            <ul class="nav nav-tabs">
                <?php $i=0; foreach ($homePageDetails->acf->zone as $value) {
                    if($i==0){$addClass="active";}else{$addClass='';}  ?>
                <li class="<?=$addClass?>">
                    <a data-toggle="tab" href="#menu-<?=$i?>" class="tab-select">
                    <img src="<?=$value->image?>" class="nav_icon" alt="">
                    <img src="<?=$value->mobile_image?>" class="nav_icon_hover" alt="">
                    <span><?=$value->name?> </span>
                    </a>
                </li>
                <?php $i++; } ?>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="tab-content">
            <?php $i=0; foreach ($homePageDetails->acf->zone as $value) {
                if($i==0){$addClass="active";}else{$addClass='';}  ?>
            <div id="menu-<?=$i?>" class="tab-pane fade in <?=$addClass?>">
                <div class="col-sm-6 column_left" data-aos="fade-up" data-aos-duration="1000">
                    <p class="desc" ><?=$value->description?></p>
                    <?php if($value->list){ ?>
                    <ul>
                        <?php foreach ($value->list as $value1) { ?>
                        <li><?=$value1->list?></li>
                        <?php } ?>
                    </ul>
                    <p class="desc">Choose a segment and hit it!</p>
                    <?php } ?>
                </div>
                <div class="col-sm-6 column_right">
                    <img src="<?=$value->display_image?>" class="img-responsive screen-img" data-aos="fade-down" data-aos-duration="1000" alt="">
                    <div class="bg-img"></div>
                </div>
            </div>
            <?php $i++; } ?>
        </div>
    </div>
</section>
<section class="how_to_play gray_background">
    <div class="container">
        <h2 class="main_heading">How to play</h2>
        <p class="desc under_heading" data-aos="zoom-in" data-aos-duration="1000"><?=$homePageDetails->acf->how_to_play->description?></p>
        <div class="video">
            <img src="<?=$homePageDetails->acf->how_to_play->image?>" class="img-responsive" alt="">
            <div class="caption">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/youtube-icon.png" class="youtube-icon" alt="">
                <p>Walkthrough Video</p>
            </div>
        </div>
        <div class="game_steps">
            <?php foreach ($homePageDetails->acf->how_to_play->steps as $value) {  ?>
            <div class="col-md-2 col-sm-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="step_number">
                    <p><?=$value->name?></p>
                </div>
                <div class="step_desc">
                    <p class="step_title"><?=$value->title?></p>
                    <p class="step_text"><?=$value->text?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        <div>
            <a href="how-to-play"><button class="btn btn-2g">Know More</button></a>
        </div>
    </div>
</section>
<section class="list_table">
    <div class="container">
        <h2 class="main_heading">consecutive SCORE SYSTEM</h2>
        <p class="desc under_heading" data-aos="zoom-in" data-aos-duration="1000"><?=$homePageDetails->acf->consecutive_score_system->description;?></p>
        <div class="main_table">
            <div class="table_scroll">
                <?php foreach ($homePageDetails->acf->consecutive_score_system->score_list as $value) { ?>
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <img src="<?=$value->image?>" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-9 col-xs-12">
                        <div class="table_right_section">
                            <div class="table_section_1">
                                <div class="table_heading"><?=$value->title?></div>
                                <p class="table_text">
                                    <?=$value->description?> 
                                </p>
                                <a href="/scoring-ranking-system" class="read_more">Read more <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div>
            <h2 class="main_heading">features of Milliontree</h2>
            <p class="desc under_heading" data-aos="zoom-in" data-aos-duration="1000"><?=$homePageDetails->acf->features->description?></p>
        </div>

        <div class="flex-container">
            <!-- <div class="row"> -->
                <?php $i=1;foreach ($homePageDetails->acf->features->boxes as $value) { ?>
                    <!-- <div class="col-md-6 col-sm-12"> -->
                <div>
                    <div class="features_info" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="<?=$value->image?>" alt="">
                        <p class="features_title"><?=$value->title?></p>
                        <p class="desc"><?=$value->description?>
                            <span id="one_dots_<?=$i?>">...</span><span id="one_more_<?=$i?>"><?=$value->information?>
                            <!-- <span id="a_click_id"> -->
                                <a class="read_more est_btn" onclick="myFunctionOne_<?=$i?>()" id="one_myBtn_<?=$i?>">Read more <i class="fa fa-chevron-right"></i></a>
                            <!-- </span> -->
                    </div>
                </div>
                <?php $i++; } ?>
            <!-- </div> -->
        </div>

    </div>
</section>
<section class="faqs gray_background">
    <div class="container">
        <h2 class="main_heading">FAQ<span>s</span></h2>
        <div class="panel-group" id="accordion">
            <!-- First Panel -->
            <?php $i=1;foreach ($homePageDetails->acf->faq as $value) { ?>
            <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="500">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapse<?=$i?>">
                        <?=$value->question?>
                    </h4>
                </div>
                <div id="collapse<?=$i?>" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p><?=$value->answer?></p>
                    </div>
                </div>
            </div>
            <?php $i++; } ?>
        </div>
        <a class="read_more">Read more <i class="fa fa-chevron-right"></i></a>
    </div>
</section>
<!-- <section class="about_us text-center" id="about_us">
    <div class="container">
        <h2 class="main_heading">About Us</h2>
        <p class="desc" data-aos="zoom-in" data-aos-duration="1000"><?=$homePageDetails->acf->about_us->description?></p>
        <div class="features_list">
            <ul class="p0">
                <?php foreach($homePageDetails->acf->about_us->feature_list as $value) { ?>
                <li>
                    <img src="<?=$value->icon?>" alt="" data-aos="fade-down" data-aos-duration="1000">
                    <p class="features_text"><?=$value->title?></p>
                </li>
                <?php } ?>
            </ul>
        </div>
        <p class="desc" data-aos="fade-up" data-aos-duration="2000"><?=$homePageDetails->acf->about_us->information; ?></p>
    </div>
</section> -->
<section  class="fixed_btn hidden-xs" id="download_fixed_btn" onclick="topFunction()">
    <a data-toggle="modal" data-target="#appModal"><img src="<?php bloginfo('template_directory'); ?>/assets/img/downlaod-btn-new.png" class="download_btn" alt=""></a>    
</section>
<?php get_footer(); ?>