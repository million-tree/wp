<?php
    /*
    Template Name: Scoring Ranking
    */
    get_header();
    $scorePageUrl = GetApiBaseUrl('/20');
    $scorePageDetails = json_decode(get_api_response($scorePageUrl));
    // echo'<pre>';print_r($scorePageDetails->acf);exit;
?>
<?php 
    $url=$_SERVER['REQUEST_URI'];
    if($url=="/scoring-ranking-system-app/"){
        ?>
	<style>
	    footer,header, .inner-banner,.fixed_btn_mobile.visible-xs {display: none !important;}
	</style>
<?php
    }
    else{}
?>
<div class="scoring_ranking_wrapper">
    <section class="inner-banner">
        <div class="inner-banner-heading">
            Scoring & Ranking System<br>
            <p class="heading_tagline">(Applicable to MCQ, AIO, T&F, OMO, and CW)</p>
        </div>
    </section>
    <section class="content_section">
        <div class="container">
            <p class="title">The scoring and ranking system is based on two factors.</p>
            <p class="desc" data-aos="zoom-in" data-aos-duration="1000">a) PERFORMANCE  SCORE: The score achieved purely due to the performance of knowledge and/or skill.</p>
            <br>
            <p class="desc" data-aos="zoom-in" data-aos-duration="1000">b) TIME COUNT: The amount of time taken to complete that particular contest. The time shall be measured in terms of milliseconds, i.e., represented as  XX:YY:ZZZ (where 'X' is minutes, and 'Y' is seconds, and 'Z' is millisecond). There will be no embedded time limit for this; however, the player has to take care to complete the game within the window time of the contest.</p>
            <br>
            <p class="desc" data-aos="zoom-in" data-aos-duration="1000">After calculating both the factors, the FINAL RANK shall be calculated.</p>
            <br>
            <p class="desc" data-aos="zoom-in" data-aos-duration="1000">The FINAL RANK  shall be a combination of (a) and (b), where (a) being the value of knowledge and/or skill shall hold more value than (b). </p>
        </div>
    </section>
    <section class="first_table">
        <div class="container">
            <p class="title">Below are some scenario examples for an easy understanding: </p>
            <?php foreach ($scorePageDetails->acf->table as $value) { ?>
            <div class="scenario_table">
                <p class="scenario_title"><?=$value->scenario?></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <?php foreach ($value->table_heading as $th_data) { ?>
                                <th><?=$th_data->th_data?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i==0;
                                foreach ($value->table_row_data as $tr_data) {
                                if($i==0){$addClass="first_clm";}else{$addClass="";} ?>
                            <tr>
                                <td class="<?=$addClass?>"><?=$tr_data->tr_data_one?></td>
                                <td><?=$tr_data->tr_data_two?></td>
                                <td><?=$tr_data->tr_data_three?></td>
                                <td><?=$tr_data->tr_data_four?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <section class="content_section">
        <div class="container">
            <?=$scorePageDetails->acf->save_the_bunny_description;?>
        </div>
    </section>
    <section class="second_table">
        <div class="container">
            <p class="title">Below is a scenario for the PERFORMANCE SCORE SYSTEM TABLE:</p>
            <div class="scenario_table">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td rowspan="2" class="bg-brown" style="border-bottom: 2px solid #282828;vertical-align: middle;">ITEM NAME</td>
                            <td rowspan="2" class="bg-brown" style="border-bottom: 2px solid #282828;vertical-align: middle;">SYMBOL</td>
                            <td colspan="2" class="bg-brown" style="text-align: center;">IF CLICKED</td>
                            <td colspan="2" class="bg-brown" style="text-align: center;">IF MISSED</td>
                        </tr>
                        <tr style="border-bottom: 2px solid #282828;">
                            <td>PER CLICK</td>
                            <td style="border-right:  2px solid #282828;">CONSECUTIVE</td>
                            <td>PER MISS</td>
                            <td>CONSECUTIVE</td>
                        </tr>
                        <?php $i=0;foreach ($scorePageDetails->acf->bunny_table_row_data as $value) { ?>
                        <tr>
                            <td><?=$value->tr_data_one?></td>
                            <?php if($i==0){ ?>
                            <td><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/hamster.png" alt=""></td>
                            <?php }elseif ($i==1) { ?>
                            <td><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/bunny.png" alt=""></td>
                            <?php }elseif ($i==2) { ?>
                            <td><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/hamster-2.png" alt=""></td>
                            <?php } ?>
                            <td class="text-center"><?=$value->tr_data_two?></td>
                            <td style="border-right:  2px solid #282828;text-align: center;"><?=$value->tr_data_three?></td>
                            <td class="text-center"><?=$value->tr_data_four?></td>
                            <td class="text-center"><?=$value->tr_data_five?></td>
                        </tr>
                        <?php $i++; } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="content_section">
        <div class="container">
            <?=$scorePageDetails->acf->flying_bird_description;?>
        </div>
    </section>
    <section class="third_table">
        <div class="container">
            <p class="title">Below is a scenario for the PERFORMANCE SCORE SYSTEM TABLE:</p>
            <div class="scenario_table">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ITEM NAME</th>
                                <th>SYMBOL</th>
                                <th colspan="2" style="text-align: center;">IF CLICKED</th>
                                <th colspan="2" style="text-align: center;">IF MISSED</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg_table_gray rank">
                                <td></td>
                                <td></td>
                                <td>FIRST BALL</td>
                                <td style="border-right: 1px solid #c4c4c4;">CONSEQUITIVES<br><span class="small_text">i.e. every consecutive clicks will have a <br>cumulative impact multiples of foll.</span></td>
                                <td>PER MISS</td>
                                <td>CONSEQUITIVES<br><span class="small_text">i.e. every consecutive clicks will have a <br>cumulative impact multiples of foll.</span></td>
                            </tr>
                            <?php foreach ($scorePageDetails->acf->flying_table_row_data as $value) { ?>
                            <tr class="rank">
                                <td class="first_clm"><?=$value->tr_data_one?></td>
                                <td><?=$value->tr_data_two?></td>
                                <td><?=$value->tr_data_three?></td>
                                <td style="border-right: 1px solid #c4c4c4;"><?=$value->tr_data_four?></td>
                                <td><?=$value->tr_data_five?></td>
                                <td><?=$value->tr_data_six?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="content_section">
        <div class="container">
            <?=$scorePageDetails->acf->brick_game_description;?>
        </div>
    </section>
    <section class="forth_table">
        <div class="container">
            <p class="title">Below is a scenario for the PERFORMANCE SCORE SYSTEM TABLE:</p>
            <div class="scenario_table">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Player 1</th>
                                <th>Player 2</th>
                                <th>Player 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($scorePageDetails->acf->brick_table_row_data as $value) { ?>
                            <tr class="rank">
                                <td class="first_clm rank"><?=$value->tr_data_one?><br><span></span></td>
                                <td><?=$value->tr_data_two?></td>
                                <td><?=$value->tr_data_three?></td>
                                <td><?=$value->tr_data_four?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="content_section">
        <div class="container">
            <?=$scorePageDetails->acf->general_rule_description?>
        </div>
    </section>
    <section class="fifth_table">
        <div class="container">
            <?php foreach ($scorePageDetails->acf->condition_table as $value) { ?>
            <p class="title"><?=$value->title?></p>
            <p class="desc" data-aos="zoom-in" data-aos-duration="1000"><?=$value->description_one?></p>
            <p class="desc" data-aos="zoom-in" data-aos-duration="1000"><?=$value->description_two?></p>
            <div class="scenario_table">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Player 1</th>
                                <th>Player 2</th>
                                <th>Player 3</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($value->condition_table_row_data as $tr_data) { ?>
                            <tr>
                                <td class="first_clm rank"><?=$tr_data->tr_data_one?></td>
                                <td><?=$tr_data->tr_data_two?></td>
                                <td><?=$tr_data->tr_data_three?></td>
                                <td><?=$tr_data->tr_data_four?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <section class="seventh_table">
        <div class="container">
            <p class="title">TYPICAL REAL LIFE SCENARIO IN CASE OF TIE UPS</p>
            <div class="scenario_table">
                <div class="table-responsive">
                    <table class="table" class="text-center">
                        <thead>
                            <tr>
                                <th>SET NO.</th>
                                <th>SPOTS</th>
                                <th>PRIZE AMOUNT TO BE DISTRIBUTED</th>
                                <th>RANK</th>
                                <th>PRIZE PER PERSON</th>
                                <th>SUM AMOUNT IN CASE OF SAME RANKS</th>
                                <th>PRIZE PER PERSON IN CASE OF SAME RANKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i==0;
                                foreach ($scorePageDetails->acf->real_life_scenario_table_row_data as $value) { 
                                	if($i==0 || $i==2 || $i==3 || $i==4 || $i==6 || $i==8 || $i==9 || 
                                	   $i==10 || $i==12 || $i==14 || $i==16 || $i==18 || $i==20 )
                                		{$addClass="bg_table_gray";}else{$addClass='';}?>
                            <tr>
                                <td><?=$value->tr_data_one?></td>
                                <td class="<?=$addClass?>"><?=$value->tr_data_two?></td>
                                <td><?=$value->tr_data_three?></td>
                                <td class="<?=$addClass?>"><?=$value->tr_data_four?></td>
                                <td class="<?=$addClass?>"><?=$value->tr_data_five?></td>
                                <td class="<?=$addClass?>"><?=$value->tr_data_six?></td>
                                <td class="<?=$addClass?>"><?=$value->tr_data_seven?></td>
                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>