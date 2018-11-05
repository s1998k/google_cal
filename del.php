<?php
session_start();
require 'google-login-api.php';

$cal=new GoogleCalendarApi();

	$cal->DeleteCalendarEvent($_GET['event_id'],"primary",$_SESSION['access_token']);


?>