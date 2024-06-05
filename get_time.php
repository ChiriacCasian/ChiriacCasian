<?php
// get_time.php

// Get the current time from the API
$apiUrl = "http://worldtimeapi.org/api/timezone/Etc/UTC";
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

// Extract the current time
$current_time = $data['datetime'];

// Redirect back to the HTML file with the current time as a parameter
header("Location: index.php?current_time=" . urlencode($current_time));
exit();
?>