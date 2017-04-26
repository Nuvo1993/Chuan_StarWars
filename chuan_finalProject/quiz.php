
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
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="quizIndex.php">Quiz</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div id="quizContainer" style="text-align: center;">

        <div id="quizContainer" style="text-align: center;">
            <h1 id="quizHeader">Take the quiz below</h1>

            <form class="form-horizontal" action="quizResults.php" method="post">

                <?php
                $previous = '';
                //loop over categories
                foreach ($categories as $key=>$value){
                    $categoryIndex = $key;
                    ?>
                    <div class="categoryGroup">
                        <h3 class="category">
                            <a class="categoryLink" data-toggle="collapse" href="#categoryGroup<?php echo $categoryIndex ?>">
                                <?php
                                //get one header per category.
                                $current = $value->getName();

                                if($previous != $current){
                                    echo 'Category: ' . $current;
                                }
                                $previous = $current;
                                ?>
                            </a>
                        </h3>

                        <div id="categoryGroup<?php echo $categoryIndex ?>" class="collapse">

                            <?php

                            $questions = $serviceQuestions->getQuestionsByCategory($current);
                            //loop over all questions within for category.
                            foreach ($questions as $key=>$value) {
                                $questionIndex = $value->getId();
                                ?>
                                <div class="questionAnswerGroup">
                                    <div class="questionGroup"><?php echo $questionIndex . '. ' . $value->getQuestion(); ?></div>
                                    <div class="answerGroup" style="margin-left: 10px;">
                                        <?php
                                        //get answers based on question id/
                                        $answers = $serviceQuestions->getAnswerByQuestion($questionIndex);
                                        //set radio name value.
                                        $radioName = $current . $questionIndex;
                                        //randomize order.
                                        shuffle($answers);

                                        //loop through answer group and display.
                                        foreach($answers as $answer){ ?>

                                            <input type="radio" name="<?php echo $radioName ?>" value="<?php echo $answer->getId();?>"> <?php echo $answer->getAnswer(); ?><br>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>

                        </div>

                    </div>
                    <?php
                }
                ?>

                <input type="submit" name="quizSubmit" id="quizSubmit" class="btn btn-default" style="margin-top: 10px;" value="Submit Quiz"/>

            </form>

        </div>
    </div>

</div><!-- /.container -->

<script src="Scripts/searchCall.js"></script>
<script src="Scripts/bootstrap_js/jquery.min.js"></script>
<script src="Scripts/bootstrap_js/bootstrap.js"></script>
</body>
</html>
