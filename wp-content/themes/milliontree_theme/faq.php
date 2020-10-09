<?php
    /*
    Template Name: FAQ
    */
    get_header();
    $faqPageUrl = GetApiBaseUrl('/16');
    $faqPageDetails = json_decode(get_api_response($faqPageUrl));
    // echo'here---';echo'<pre>';print_r($faqPageDetails->acf);exit;
?>
<?php 
    $url=$_SERVER['REQUEST_URI'];
    if($url=="/faq-app/"){
        ?>
    <style>
        footer,header, .inner-banner,.fixed_btn_mobile.visible-xs{display: none !important;}
    </style>
<?php
    }
    else{}
?>
<div class="faq_wrapper">
    <section class="inner-banner">
        <div class="inner-banner-heading">FAQ</div>
    </section>
    <section class="help_form ">
        <div class="container gray_background">
            <h2 class="main_heading">How can we help?</h2>
            <div class="faq_help_form">
                <div class="form-group">                      
                    <input type="search" class="faq_input form-control faq" id="" placeholder="Ask a question...">
                    <button href="#" type="button" class="red_btn" id="btnFaqSearch">Search</button>
                </div>
            </div>
        </div>
    </section>
    <div id="noResultFoundDiv"></div>
    <section class="faq_page" id="faq_section_page">
        <div class="container">
            <div class="panel-group faq-list" id="accordion">
                <!-- First Panel -->
                <?php $i=1; foreach ($faqPageDetails->acf->faqs as $value) { ?>
                <h2 class="main_heading"><?=$value->heading?></h2>
                <?php if($value->description){ ?>
                <p class="title"><?=$value->description?></p>
                <?php } 
                    foreach($value->q_and_a as $faqs){?> 
                <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000"> -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" data-toggle="collapse" data-target="#collapse<?=$i?>">
                            <?=$faqs->questions?>
                        </h4>
                    </div>
                    <div id="collapse<?=$i?>" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="col-md-8">
                                <p><?=$faqs->answers?></p>
                            </div>
                            <div class="col-md-4">
                                <img src="<?=$faqs->image;?>" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; } } ?>
            </div>
        </div>
    </section>

    <?php
        $homePageUrl = GetApiBaseUrl('/14');
        $homePageDetails = json_decode(get_api_response($homePageUrl));
    ?>
    <section class="faqs gray_background" id="faq_section_home_page" style="display: none;">
        <div class="container">
            <h2 class="main_heading">FAQ<span>s</span></h2>
            <div class="panel-group" id="accordion">
                <!-- First Panel -->
                <?php $i=1;foreach ($homePageDetails->acf->faq as $value) { ?>
                <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
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
        </div>
    </section>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function () {
        function FullTextContains(innerText, searchTerm) {
            for (x = 0; x < searchTerm.length; x++) {
                if (innerText.toLowerCase().indexOf(searchTerm[x].toLowerCase()) >= 0) {
                    return true;
                }
            }
            return false;
        }
    
    
        $('.faq').on('keyup input', function (e) {
            var text = $.trim($(this).val());
            if (e.keyCode == 13) {
                SearchFAQ(text);
            } else if (text == '') {
                SearchFAQ('');
            }
        });
    
        $('#btnFaqSearch').on('click', function (e) {
            var text = $.trim($('.faq').val());
            SearchFAQ(text);
        });
    
        function SearchFAQ(searchTermText) {
            var searchTerm = searchTermText.split(' ');
            if (searchTermText != '') {
                $(".faq-list .panel").filter(function (index) {
                    var panelText = $.trim($(this).text());
                    // if('.faq-list:contains(searchTerm)'){
                    if (FullTextContains(panelText, searchTerm) == true) {
                        console.log("fouznd it");
                        $('.faq-list').hide();
                        $('.faq-list:contains("'+searchTerm+'")').show();
                        return true;
                    } else {
                        //console.log("not found")
                        $('#noResultFoundDiv').html('<p style="text-align: center;"><b>No Result Found</b></p>');
                        $('#faq_section_page').hide();
                        $('#faq_section_home_page').show();
                        // $(this).slideUp();
                        return false;
                    }
                }).slideDown();
            } else {
                $(".faq-list .panel").slideDown();
            }
        }
    });
</script>
<?php get_footer(); ?>