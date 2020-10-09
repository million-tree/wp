<?php

// echo "in";exit();
error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');

$number = $_POST['number'];
$submit_date = date('Y-m-d H:i:s');
$to = $_POST['number'];
// $message = urlencode("Thank you http://milliontree.brightbrain.in/wp-content/app/MillionTree.apk");

include('db.php');
$table = "app_enquiry";
$con = mysqli_connect($servername,$username,$password,$database);	

$data = array(
			'number' => $number,
			'submit_date' => $submit_date
			);

if($_POST['number']){
	$insert = insert_in_database($table,$data,$con);
	if($insert == 1){
		send_message($to);	
    	echo 200;
	}else{
		echo 301;
	}
}else{
	echo 300;
}
			
function insert_in_database($table,$data,$con)
 {
	$fields = array_keys($data);
 	$values = array_values($data);
 	$result = mysqli_query($con, "INSERT INTO $table(".implode(",",$fields).") VALUES ('".implode("','", $values )."');") or die( mysqli_error($con) );
	return $result;
}

function send_message($to)
{
	$method = 'POST';
	$resData = "method=".$method."&MobileNumber=".$to;
	$url = "http://13.235.192.202:8030/api/sms/SendLink";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$resData);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$url);
	$result = curl_exec($ch);
	curl_close($ch);
}

mysqli_close($con);
?>

