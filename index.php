<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-type: json/application');

    require_once 'config/connect.php';
    require 'functions.php';

    $q = $_GET['q'];
    $params = explode('/', $q);

    $type = $params[0];
    $id = $params[1];

    if ($type === 'checkups') {
        getCheckUps($connect);
    }
    if ($type === 'getCheckUpsCount') {
        getCheckUpsCount($connect);
    }


