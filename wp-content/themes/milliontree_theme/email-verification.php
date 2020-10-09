<?php
/*
Template Name: Email verification
*/
get_header();
?>
<?php
$key = $_GET['key'];
$ckey =  urlencode($key);
email_verification($ckey);
$name = email_verification($ckey);
function email_verification($ckey)
{
	$resData = "?key=".$ckey;
	$url = "http://13.235.192.202:8030/api/Verification/email".$resData;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch);
	curl_close($ch);
	$rerr = json_decode($result);
	return $rerr->FirstName.' '.$rerr->LastName;
}
?>



<style>
	section{
		padding: 50px 0;
	}
	.fa{
		font-size: 30px;
		color: green;
	}
	h3{
		margin-bottom: 30px;
	}
	.btn{
		font-family: TitilliumWeb;
	    font-size: 20px;
	    font-weight: bold;
	    color: #ffffff;
	    background-color: #c61d23;
	    justify-content: center;
	    align-items: center;
	    margin: 0 auto;
	    width: auto;
	    border: 1px solid #c61d23;
	    cursor: pointer;
	    text-transform: uppercase;
	    -moz-transition: all 0.3s;
	    transition: all 0.3s;
	    display: inline-block;
    	border-radius: 0;
    	margin-top: 30px;
	}
	.message-img{
		width: 10%;
		margin: 0 auto;
	}
</style>

<section class="text-center">
	<div class="container">
		<h2 class="main-heading">Account Activated</h2>
		<img src="<?php bloginfo('template_directory'); ?>/assets/img/message.svg" class="img-responsive message-img">
		<h3>Hello <?php echo $name ; ?></h3>
		<p>Thank you. Your email has been verified. Your account is active now.
			<!-- <br> Please you the below link to login to your account.</p> -->

		<!-- <a href="#" class="btn">LOGIN TO YOUR ACCOUNT</a> -->
	</div>
</section>

<?php get_footer(); ?>