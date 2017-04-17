<?php

require_once ('connection.php');

if(isset($_GET['controller']) && isset($_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else{
    $controller = 'pages';
    $action = 'index';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Star Wars Search</title>

    <link rel="stylesheet" href="Content/bootstrap_css/bootstrap.css">
    <link rel="stylesheet" href="Content/bootstrap_css/bootstrap-theme.css">
    <link rel="stylesheet" href="Content/styles.css">

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
                    <li class="active"><a href="/searchwars">Home</a></li>
                    <li><a href="?controller=quiz&action=index">Quiz</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container">
        <?php require_once('routes.php'); ?>
    </div><!-- /.container -->

    <script src="Scripts/searchCall2.js"></script>
    <script src="Scripts/bootstrap_js/jquery.min.js"></script>
    <script src="Scripts/bootstrap_js/bootstrap.js"></script>
</body>
</html>
