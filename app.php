<?php

ini_set('display_errors', 'on');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
} else {
    $username = "popularmechanics";
}

// Debugging
// var_dump($_POST['username']);
// exit;

//set URL
$url = "https://www.instagram.com/$username/?__a=1";

//get API data
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

//send request
$result = curl_exec($ch);
if ($result === false) {
    //check for errors
    $result = curl_error($curl_connection);
}
// Close connection
curl_close($ch);

//return result
echo $result;
