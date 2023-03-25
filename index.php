<?php

declare(strict_types=1);

namespace App;

/* 
include
include_once
require
require_once
*/

// $_GET - zapytanie serwera
// $_POST - wysłanie do serwera
include_once('./src/View.php');
include_once('./src/utils/debug.php');


$action = $_GET['action'] ?? null;
$view = new View();
$view->render($action);