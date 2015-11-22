<?php
	session_start();
	include 'Services/Twilio.php';
	include("config.php");
 
	$client = new Services_Twilio($accountsid, $authtoken); 
	if (!isset($_REQUEST['called'])) {
		$err = urlencode("Must provide a phone number");
		header("Location: click2call.php?msg=$err");
		die;
	}
	$call = $client->account->calls->create($fromNumber, $toNumber, 'callback.php?number=' . $_REQUEST['called']);
	$msg = urlencode("Connecting, please wait ".$call->sid);
	header("Location: click2call.php?msg=$msg");
?>