<?php
    /*
    Template Name: Fair Play
    */
    get_header();
    $fairplayPageUrl = GetApiBaseUrl('/9');
    $fairplayPageDetails = json_decode(get_api_response($fairplayPageUrl));
    // echo'here---';echo'<pre>';print_r($fairplayPageDetails->acf);exit;
    ?>
<?php 
    $url=$_SERVER['REQUEST_URI'];
    if($url=="/fair-play-app/"){
        ?>
<style>
    footer,header, .inner-banner,.fixed_btn_mobile.visible-xs{display: none !important;}
</style>
<?php
    }
    else{}
    ?>
<div class="fairplay_wrapper">
    <section class="inner-banner">
        <div class="inner-banner-heading">Fair Play</div>
    </section>
    <section class="section_first">
        <div class="container">
            <?php for($i=0;$i<sizeof($fairplayPageDetails->acf->information);$i++){ 
                if($i==1){$addClass="<hr class=''>";}else{$addClass="";} ?>
            <p class="title"><?=$fairplayPageDetails->acf->information[$i]->title?></p>
            <p class="desc" data-aos="zoom-in" data-aos-duration="1000">
                <?=$fairplayPageDetails->acf->information[$i]->description?>
            </p>
            <br>
            <?=$addClass?>
            <?php } ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>