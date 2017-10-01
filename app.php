<?php
ini_set('display_errors', 'on');
require_once('functions.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
} else {
    $username = "popularmechanics";
}

$query = new ClassCurlInstagram;
$data = $query->queryUsername($username);
echo $data;
