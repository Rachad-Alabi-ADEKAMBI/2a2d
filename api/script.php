<?php
    include 'functions.php';
$action = $_GET['action'] ?? '';


if ($action == 'subscribe') {
   subscribe();
}

if ($action == 'newSurvey') {
    newSurvey();
 }

if ($action == 'newsletters') {
    newsletters();
 }

if($action == 'logout'){
    logout();
}
