<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Star Wars Search</title>

    <link rel="stylesheet" href="Content/bootstrap_css/bootstrap.css">
    <link rel="stylesheet" href="Content/bootstrap_css/bootstrap-theme.css">
    <link rel="stylesheet" href="Content/styles.css">
    <link rel="stylesheet" href="Content/starwarsintro.css">
    <script src="Scripts/scripts.js"></script>

</head>
<body id="bootstrap-overrides">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Search Wars</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="quizIndex.php">Quiz</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/26/2017
 * Time: 1:26 AM
 */

    require_once('connection.php');
    require_once('Controllers/QuizController.php');
    require_once ('Models/QuizService.php');

    $controller = new QuizController();
    $controller->submit();

?>

<script src="Scripts/searchCall.js"></script>
<script src="Scripts/bootstrap_js/jquery.min.js"></script>
<script src="Scripts/bootstrap_js/bootstrap.js"></script>
</body>
</html>

