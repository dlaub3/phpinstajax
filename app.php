<?php
ini_set('display_errors', 'on');
require_once('functions.php');

if (isAjax()) {
}

if (isset($_POST['username']) && $_POST['username'] != '') {
    $username = $_POST['username'];
} else {
    $username = "popularmechanics";
}

$query = new ClassCurlInstagram;
$data = $query->queryUsername($username);
echo $data;
