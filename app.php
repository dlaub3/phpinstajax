<?php
ini_set('display_errors', 'on');
require_once('functions.php');

if (isAjax()) {
}

if (isset($_POST['search']) && $_POST['search'] != '') {
    $search = $_POST['search'];
} else {
    exit;
}


$query = new ClassCurlInstagram;
if (isset($_POST['option']) && $_POST['option'] === 'username') {
    //search for a user
    $data = $query->query($search);
} else {
    //default search is tag
    $data = $query->query($search, 'explore/tags/');
}


echo $data;
