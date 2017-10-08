<?php
ini_set('display_errors', 'on');
require_once('functions.php');

if (isAjax()) {
}


if (isset($_POST['data']) && $_POST['data'] != '') {
    $search = json_decode($_POST["data"]);
} else {
    exit;
}

/*
 *echo gettype($search);
 *echo var_dump($search);
 *echo $search->search;
 *
 */


$query = new ClassCurlInstagram;
if (isset($search->option) && $search->option === 'username') {
    //search for a user
    $data = $query->query($search->search);
} else {
    //default search is tag
    $data = $query->query($search->search, 'explore/tags/');
}


echo $data;
