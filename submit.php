<?php
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>39900,
		"currency"=>"inr",
		"description"=>"Start your day with coffee",
		"source"=>$token,
	));

	echo "<pre>";
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PaymentDone</title>
</head>
<body>
	<h1>Payment Done!! Hope you will come again...</h1>
</body>
</html>