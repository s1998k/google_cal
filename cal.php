<?php
session_start();
require 'google-login-api.php';
	// echo $_SESSION['access_token'];


	$cal=new GoogleCalendarApi();
	$time=$cal->GetUserCalendarTimezone($_SESSION['access_token']);
	$access_token=$_SESSION['access_token'];

	$user_timezone = $cal->GetUserCalendarTimezone($access_token);

	$calendar_id = 'primary';
	$event_title = 'testtttttttttttttttttt';

	// Event starting & finishing at a specific time
	$full_day_event = 0; 
	$event_time = [ 'start_time' => '2018-12-31T15:00:00', 'end_time' => '2018-12-31T16:00:00' ];

	// Full day event
	// $full_day_event = 1; 
	// $event_time = [ 'event_date' => '2018-12-31' ];

	// Create event on primary calendar
	$event_id = $cal->CreateCalendarEvent($calendar_id, $event_title, $full_day_event, $event_time, $user_timezone, $access_token);



?>

<button onclick="window.location.href =' <?php echo "del.php?event_id=".$event_id; ?>'" >delete</button>