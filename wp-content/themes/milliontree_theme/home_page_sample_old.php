<?php

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
                        <img src="<?=$value->image?>" alt="Slider" class="img-responsive img100 banner_img hidden-xs">
                        <img src="<?=$value->mobile_banner?> alt="Slider" class="img-responsive img100 banner_img visible-xs">

                        <div class="caption">
                            <h2 data-aos="zoom-in" data-aos-duration="1000"><?=$value->title_one?></h2>
                            <h3 data-aos="zoom-in" data-aos-duration="1000"><?=$value->title_two?></h3>
                            <!-- <a class="download_btn" href="">Download App</a> -->
                            <div class="banner_download_button hidden-xs" data-aos="fade-right" data-aos-duration="1000">
                                <a data-toggle="modal" data-target="#appModal"><img src="<?php bloginfo('template_directory'); ?>/assets/img/downlaod-btn-new.png" class="download_btn"></a>
                            </div>
                        </div>
                    </div>
            <?php $i++; } ?>

            <!-- <div class="item">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/banner.jpg" alt="Slider" class="img-responsive img100 banner_img hidden-xs">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/mt-mobile-banner.jpg" alt="Slider" class="img-responsive img100 banner_img visible-xs">
                <div class="caption">
                    <h2 data-aos="zoom-in" data-aos-duration="1000">Game ho gaya hai <br class="hidden-xs">on sabse pehle <br class="hidden-xs">Jeetega kon?</h2>
                    <h3 data-aos="zoom-in" data-aos-duration="1000">ab dimaag kamayega...</h3>
                    <div class="banner_download_button hidden-xs" data-aos="fade-right" data-aos-duration="1000">
                        <a data-toggle="modal" data-target="#appModal"><img src="<?php bloginfo('template_directory'); ?>/assets/img/downlaod-btn-new.png" class="download_btn"></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/banner.jpg" alt="Slider" class="img-responsive img100 banner_img hidden-xs">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/mt-mobile-banner.jpg" alt="Slider" class="img-responsive img100 banner_img visible-xs">
                <div class="caption">
                    <h2 data-aos="zoom-in" data-aos-duration="1000">Game ho gaya hai <br class="hidden-xs">on sabse pehle <br class="hidden-xs">Jeetega kon?</h2>
                    <h3 data-aos="zoom-in" data-aos-duration="1000">ab dimaag kamayega...</h3>
                    <div class="banner_download_button hidden-xs" data-aos="fade-right" data-aos-duration="1000">
                        <a data-toggle="modal" data-target="#appModal"><img src="<?php bloginfo('template_directory'); ?>/assets/img/downlaod-btn-new.png" class="download_btn"></a>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/left-arrow.png">                
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/right-arrow.png">
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
                            <img src="<?=$value->image?>" class="nav_icon">
                            <img src="<?=$value->mobile_image?>" class="nav_icon_hover">
                            <span><?=$value->name?> </span>
                        </a>
                    </li>
                <?php $i++; } ?>
                <!-- <li>
                    <a data-toggle="tab" href="#menu-2" class="tab-select">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/crickbuster-icon.png" class="nav_icon">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/crickbuster-icon-red.png" class="nav_icon_hover">
                        <span> CRICBUSTER</span>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#menu-3" class="tab-select">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/crossword-icon.png" class="nav_icon">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/crossword-icon-red.png" class="nav_icon_hover">
                        <span> CROSSWORD</span>
                    </a>
                </li>
                <li>
                    <a data-toggle="tab" href="#menu-4" class="tab-select">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/game-icon.png" class="nav_icon">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/game-icon-red.png" class="nav_icon_hover">
                        <span> GAME</span>
                    </a>
                </li> -->
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
                                <ul class="">
                                    <?php foreach ($value->list as $value1) { ?>
                                        <li><?=$value1->list?></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                            <!-- <ul class="">
                                <li>Odd man out</li>
                                <li>Arrange in order</li>
                                <li>True / False</li>
                                <li>Multiple choice questions</li>
                            </ul> -->
                            <p class="desc">Choose a segment and hit it!</p>
                        </div>
                        <div class="col-sm-6 column_right">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/mobile-screen.png" class="img-responsive screen-img" data-aos="fade-down" data-aos-duration="1000">
                        </div>
                    </div>
              <?php $i++; } ?>
            <!-- <div id="menu-1" class="tab-pane fade in active">
                <div class="col-sm-6 column_left" data-aos="fade-up" data-aos-duration="1000">
                    <p class="desc" >Let your gray matter do some work as this zone is based on 100% knowledge and nothing else. And, it's a golden chance for you to relive your childhood as you are going to get a nostalgic hit. Presenting the four segments of this zone:</p>
                    <ul class="">
                        <li>Odd man out</li>
                        <li>Arrange in order</li>
                        <li>True / False</li>
                        <li>Multiple choice questions</li>
                    </ul>
                    <p class="desc">Choose a segment and hit it!</p>
                </div>
                <div class="col-sm-6 column_right">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/mobile-screen.png" class="img-responsive screen-img" data-aos="fade-down" data-aos-duration="1000">
                </div>
            </div>
            <div id="menu-2" class="tab-pane fade in">
                <div class="col-sm-6 column_left">
                    <p class="desc">'If loving Cricket is a crime, then we plead guilty!' Do you also fall under the same category? If yes, then you can surely ace this zone. All you have to do is answer some questions related to the latest or live cricket matches, and the reward prize can be yours. The questions can be like,  
                        ‘how many runs were scored by a particular batsman’, or ‘what is the color of some specific accessory of a particular player’. So, get ready to answer these 100% knowledge-based cricket related questions.
                    </p>
                </div>
                <div class="col-sm-6 column_right">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/mobile-screen.png" class="img-responsive screen-img">
                </div>
            </div>
            <div id="menu-3" class="tab-pane fade in">
                <div class="col-sm-6 column_left">
                    <p class="desc">Folks, it's time to brush up! This crossword zone will boost both of your attributes, knowledge, and skill. And, remember, a nice thing about crossword, there is always a solution. So, let your brain do some talking as we are waiting for your answers.</p>
                </div>
                <div class="col-sm-6 column_right">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/mobile-screen.png" class="img-responsive screen-img">
                </div>
            </div>
            <div id="menu-4" class="tab-pane fade in">
                <div class="col-sm-6 column_left">
                    <p class="desc">Unleash the gamer within you! Did you know you can earn money out of your epic gaming skills? Unlock the key to a world where skill-based virtual games can lead you to real money prizes. A whole new gaming universe awaits you!</p>
                </div>
                <div class="col-sm-6 column_right">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/mobile-screen.png" class="img-responsive screen-img">
                </div>
            </div> -->
        </div>
    </div>
</section>

<section class="how_to_play gray_background">
    <div class="container">
        <h2 class="main_heading">How to play</h2>
        <p class="desc under_heading" data-aos="zoom-in" data-aos-duration="1000"><?=$homePageDetails->acf->how_to_play->description?></p>
        <div class="video">
            <img src="<?=$homePageDetails->acf->how_to_play->image?>" class="img-responsive">
            <div class="caption">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/youtube-icon.png" class="youtube-icon">
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
            <!-- <div class="col-md-2 col-sm-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="step_number">
                    <p><span>Step</span><br>01</p>
                </div>
                <div class="step_desc">
                    <p class="step_title">Pick a category</p>
                    <p class="step_text">Select a category of your choice from the menu.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="step_number">
                    <p><span>Step</span><br>02</p>
                </div>
                <div class="step_desc">
                    <p class="step_title">Join a Contest</p>
                    <p class="step_text">Join any MILLIONTREE contest shown from the LIVE section by tapping the ‘Join’ button. Thereafter, ...</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4" data-aos="zoom-in" data-aos-duration="1000">
                <div class="step_number">
                    <p><span>Step</span><br>03</p>
                </div>
                <div class="step_desc">
                    <p class="step_title">Play a Contest</p>
                    <p class="step_text"> Once you join the contest, press the ‘Play’ button to make way for your winning prize so that the glory can be...</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4" data-aos="zoom-in" data-aos-duration="1000">
                <div class="step_number">
                    <p><span>Step</span><br>04</p>
                </div>
                <div class="step_desc">
                    <p class="step_title">View your performance</p>
                    <p class="step_text">In the case of Quiz, Crossword or Cricbuster, as soon as you finish the contest you will be able to see your performance...</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="step_number">
                    <p><span>Step</span><br>05</p>
                </div>
                <div class="step_desc">
                    <p class="step_title">Withdraw your rewards: </p>
                    <p class="step_text">Withdraw your winnings from your MILLIONTREE account after PAN verification by MILLIONTREE...</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="step_number">
                    <p><span>Step</span><br>06</p>
                </div>
                <div class="step_desc">
                    <p class="step_title">View Upcoming contest:</p>
                    <p class="step_text">You can see the upcoming contests in the ‘Upcoming’ section for each category and get ready for the next challenge.</p>
                </div>
            </div> -->
        </div>
        <div class="">
            <a href="how-to-play"><button class="btn btn-2g">Know More</button></a>
        </div>
    </div>
</section>

<section class="list_table">
    <div class="container">
        <h2 class="main_heading">consecutive SCORE SYSTEM</h2>
        <p class="desc under_heading" data-aos="zoom-in" data-aos-duration="1000"><?=$homePageDetails->acf->consecutive_score_system?></p>
        <div class="main_table">
            <div class="table_scroll">
                <?php foreach ($homePageDetails->acf->consecutive_score_system->score_list as $value) { ?>
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <img src="<?=$value->image?>" class="img-responsive">
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

        <div class="boxes">
            <div class="row">
            <?php $i=1;foreach ($homePageDetails->acf->features->boxes as $value) { ?>
                <div class="col-md-6 col-sm-12">
                    <div class="features_info" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="<?=$value->image?>">
                        <p class="features_title"><?=$value->title?></p>
                        <p class="desc"><?=$value->description?>
                        <?=$value->information?>
                        <a class="read_more" onclick="myFunctionOne()" id="<?=$i?>_myBtn">Read more <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            <?php $i++; } ?>
            <!-- <div class="col-md-6 col-sm-12">
                <div class="features_info" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/features-icon1.png">
                    <p class="features_title">AN EVEN BREAK FOR ALL</p>
                    <p class="desc">To leverage ‘General’ Knowledge, and foster equal opportunity to all users, MILLIONTREE  maintains a unique feature of providing all users with quiz questions of 
                    <span id="one_dots">...</span><span id="one_more">all different domains.
                    All the players are bound by the same rules/functions/features while playing the contests, such as an equal number of questions, same levels of difficulty, time limit for quiz/game, ranking systems, prize distribution systems, etc. To enhance the general knowledge of all the users, every contest is designed as a mixed bag of questions from assorted domains. For example, a quiz set of a few questions can belong to different domains like Bollywood, Geography, History Vocabulary, Maths, Science, etc.</span></p>
                    <a class="read_more" onclick="myFunctionOne()" id="one_myBtn">Read more <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="features_info" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/features-icon2.png">
                    <p class="features_title">PILLARS OF TRANSPARENCY</p>
                    <p class="desc">To ensure fair play and the spirit of sportsmanship, the performance of each player is visible to all the players. The winners are ranked based on time and 
                        <span id="two_dots">...</span><span id="two_more">knowledge, and in the case of a tie, time prevails. Also, the amount is credited to the player's bank account within 72 hours. Even before the user buys a ticket, he/she can view the earnings according to his/her rank. All the quizzes are system generated, and MILLIONTREE doesn't manipulate the results.The family of MILLIONTREE only allow genuine users to be a part of its universe.</span></p>
                    <a class="read_more" onclick="myFunctionTwo()" id="two_myBtn">Read more <i class="fa fa-chevron-right"></i></a>
                </div>
            </div> -->
        </div>
        <!-- <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="features_info" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/features-icon3.png">
                    <p class="features_title">FACTORS REFLECTING FAIR PLAY</p>
                    <p class="desc">MILLIONTREE maintains its core values by instilling transparency in services, product function & features.  We foster values of trust and faith in 
                    <span id="three_dots">...</span><span id="three_more">every arena. We also believe in being responsible towards our user's requirements & society's needs at the macro level.</span></p>
                    <a class="read_more" onclick="myFunctionThree()" id="three_myBtn">Read more <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="features_info" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/features-icon4.png">
                    <p class="features_title"> A FIRM TRUST BASE</p>
                    <p class="desc">We strive to ensure that we only have genuine users playing on MILLIONTREE. To facilitate this, we have put in place strict policies and protocols to check any 
                    <span id="four_dots">...</span><span id="four_more">violation of MILLIONTREE fair play. We work with trusted third party payment gateway authentication to ensure safety and security of all the financial transactions. We do not store your credit/debit card details with us. All associations of MILLIONTREE are strictly prohibited from participating in any paid contests on MILLIONTREE. The information of PAN Cards and Bank details shared with MILLIONTREE is only used for the user verification purposes and is never disclosed to any outside parties except Indian Govt. authorized parties for verification purposes. And, we do not allow or promote cash transactions on MILLIONTREE. We are sensitive for your valuable money investment. Thus, we may notify users in case their accrued losses exceed ₹30,000.</span></p>
                    <a class="read_more" onclick="myFunctionFour()" id="four_myBtn">Read more <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div> -->
        </div>
    </div>
</section>

<section class="faqs gray_background">
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
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne">
                        1.   How do I register?
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>That’s easy! Log on to the MILLIONTREE app. After you’re through with the registration, you can follow the simple starter guide, which will take you through the simple steps of joining contests to win cash. You can also go through the ‘How to Play’ page of MILLIONTREE.</p>
                    </div>
                </div>
            </div> -->
            <!-- Second Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTwo">
                        2.   Why can’t I log in to my account?
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Please check whether your registered email address and password are entered correctly and try logging in again. If you've forgotten your password, click on 'Forgot Password', enter your registered email ID and we’ll send you a link to reset your password on it within a few minutes! If you've forgotten your registered email id, reach out to us at Contact Us.</p>
                    </div>
                </div>
            </div> -->
            <!-- Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree">
                        3.   How many accounts can I create with the same user credentials or the same PAN details?
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>You can create only one account with one email id on MILLIONTREE. Creation of multiple accounts by a single gamer is strictly prohibited and violates our Fair Play policy.</p>
                    </div>
                </div>
            </div> -->
            <!-- Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFour">
                        4. What if my internet connection is lost when I am playing the contest?
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Once you have confirmed and entered any contest, it is not possible to go backward. Users shall be responsible for any disconnection issues / low bandwidth of internet connection / mobile handset issues, or any other network-related issues that deter the seamless data transfer of MILLIONTREE application. We suggest you maintain a good bandwidth and internet speed while playing MILLIONTREE application.</p>
                    </div>
                </div>
            </div> -->
            <!-- Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFive">
                        5. What happens if I have bought the ticket, but I was unable to complete the contest before the contest time runs out?
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>MILLIONTREE does not allow their users to buy ticket for a contest within the last 3 minutes before the contest ends. However, if you have purchased the ticket anytime before the last 3 minutes, you can play the contest till the last second of the available contest time. If the user has bought the ticket but fails to complete the contest before the last second of available contest time, it shall be the sole responsibility of the user to complete the contest within given time, and MILLIONTREE shall not be responsible for the
                        same.</p>
                    </div>
                </div>
            </div> -->
            <!-- Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapseSix">
                        6. Does the amount in my Winnings Account have any expiry date?
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>If the amount in your Winnings Account is not withdrawn to your bank account within 335 days from the date of credit, it will be deposited automatically to your bank account, which is on record, provided that your MILLIONTREE account is verified. In case no bank account is provided, or you have failed to complete the verification for the MILLIONTREE account, the amount would stand forfeited. Hence it's important that you get your MILLIONTREE account verified as soon as possible.</p>
                    </div>
                </div>
            </div> -->
            <!-- Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapseSeven">
                        7.   How do I withdraw?
                    </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>You may withdraw your earnings in the following manner : 
                        Main page > Left navigation > Menu > Wallet > Withdraw
                        You shall be able to withdraw once you have verified the below details:<br>
                        1) Mobile and Email Id <br>
                        2) PAN details<br>
                        3) Bank account details</p>
                    </div>
                </div>
            </div> -->
            <!-- Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapseEight">
                        8. Is there any Daily Withdrawal limit?
                    </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Yes, you can request a maximum of 3 withdrawals per day and not exceed a total value of Rs.2,00,000/-. The withdrawal amount limit is min. of Rs.200 and max. of Rs.2,00,000 at a time.</p>
                    </div>
                </div>
            </div> -->
            <!-- Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapseNine">
                        9. Am I allowed to play if I’m under the age of 18?
                    </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>No, MILLIONTREE is strictly for users who are at least 18 years of age. </p>
                    </div>
                </div>
            </div> -->
            <!-- Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTen">
                        10. Is the ticket cost inclusive of all taxes?
                    </h4>
                </div>
                <div id="collapseTen" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>The ticket cost as displayed in MILLIONTREE application is inclusive of all the taxes and the player does not need to pay anything besides the ticket costs. So, you do not have to pay additional taxes.</p>
                    </div>
                </div>
            </div> -->
            <!-- Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapse11">
                        11. I do not understand the scoring system. Can you give me some example for a clear understanding?
                    </h4>
                </div>
                <div id="collapse11" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Sure! Please have a look at the following example:
                        If player A answers 4 out of 5 questions correctly in 40 sec,
                        If player B answers 5 out of 5 questions correctly in 80 sec,
                        and player C answers 2 out of 5 questions correctly in 40 sec.<br>
                        The ranking shall be allotted as: Player B – Rank 1, Player A - Rank 2 & Player C - Rank 3.</p>
                    </div>
                </div>
            </div> -->
            <!-- Panel -->
            <!-- <div class="panel panel-default" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="panel-heading">
                    <h4 class="panel-title" data-toggle="collapse" data-target="#collapse12">
                        12. Can residents of Assam, Odisha, Telangana, Nagaland and Sikkim participate in paid contests of MILLIONTREE ?
                    </h4>
                </div>
                <div id="collapse12" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p>Currently, the residents of Assam, Odisha, Telangana, Nagaland and Sikkim are not permitted to play pay-to-play formats of any online games. The laws in these states are unclear as to whether games of skill may be played for a fee.</p>
                    </div>
                </div>
            </div> -->
        </div>
        <a class="read_more">Read more <i class="fa fa-chevron-right"></i></a>
    </div>
</section>

<section class="about_us text-center">
    <div class="container">
        <h2 class="main_heading">About Us</h2>
        <p class="desc" data-aos="zoom-in" data-aos-duration="1000"><?=$homePageDetails->acf->about_us->description?></p>
        <div class="features_list">
            <ul class="p0">
                <?php foreach ($homePageDetails->acf->feature_list as $value) { ?>
                    <li>
                        <img src="<?=$value->icon?>" data-aos="fade-down" data-aos-duration="1000">
                        <p class="features_text"><?=$value->title?></p>
                    </li>
                <?php } ?>
               <!--  <li>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/trust.png" data-aos="fade-down" data-aos-duration="1000">
                    <p class="features_text">Trust</p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/ethics.png" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="features_text">Ethics</p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/society.png" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="features_text">Society & environment</p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/to-serve.png" data-aos="zoom-in" data-aos-duration="1000">
                    <p class="features_text">To serve</p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/knowledge.png" data-aos="fade-down" data-aos-duration="1000">
                    <p class="features_text">Knowledge & progress</p>
                </li> -->
            </ul>
        </div>
        <p class="desc" data-aos="fade-up" data-aos-duration="2000"><?=$homePageDetails->acf->about_us->information; ?></p>
    </div>
</section>
<section  class="fixed_btn hidden-xs" id="download_fixed_btn" onclick="topFunction()">
    <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/cta-new.png" class="download_btn"> -->
    <!-- <div class="download_btn"> -->
        <a data-toggle="modal" data-target="#appModal"><img src="<?php bloginfo('template_directory'); ?>/assets/img/downlaod-btn-new.png" class="download_btn"></a>
        
    </div>
</section>
<?php get_footer(); ?>