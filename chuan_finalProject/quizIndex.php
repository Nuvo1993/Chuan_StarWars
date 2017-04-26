<?php

require_once('connection.php');
require_once('Controllers/QuizController.php');
require_once ('Models/QuizService.php');

$controller = new QuizController();
$controller->index();