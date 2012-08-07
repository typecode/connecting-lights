<?php

	require_once("../incl/mailchimp/MCAPI.class.php");
	require_once("../incl/mailchimp/config.php");

	$api = new MCAPI($apiKey);
	$email = $_REQUEST["email"];

	if (!$email) {
		die("false");
	}

	$api->listSubscribe($listId, $email);

	if ($api->errorCode) {
		echo $api->errorMessage;
	} else {
		echo "true";
	}

?>