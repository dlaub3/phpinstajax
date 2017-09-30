<?php

if(isset($_POST['submit'])) {
    $username = $post["username"];
    $message = "...loading...";
} else {
    $username = "pupularmechanics";
}



$url = "https://www.instagram.com/$username/?__a=1";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HTTPHEADER,['Accept:application/json', 'Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);

echo $data;
