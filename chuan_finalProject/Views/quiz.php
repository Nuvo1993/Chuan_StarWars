<!--
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 12:12 PM
 */
-->

<h1>Quiz page</h1>

<form action="?controller=quiz&action=submit" method="post">

    <?php

        $previous ='';
        foreach ($questions as $key=>$value) { ?>
        <div>
            <p id="category">
                <?php

                    $current = $value->getCategoryName();

                    if($previous != $current){
                        echo 'Category: ' . $current;
                    }

                    $previous = $current;
                ?>
            </p>
            <?php echo $key+1 . '. ' . $value->getQuestion(); ?>
        </div>

        <div id="answerGroup" style="margin-left: 10px;">
            <?php
            $answers = $serviceQuestions->getAnswerByQuestion($key+1);
            $radioName = $current . $key;
            foreach($answers as $answer){ ?>
                <input type="radio" name="<?php echo $radioName ?>" value="<?php echo $answer->getId();?>"> <?php echo $answer->getAnswer(); ?><br>
            <?php
                }
            ?>
        </div>
    <?php } ?>

    <input type="submit" name="quizSubmit" id="quizSubmit" style="color:black;margin-top: 10px;" value="Submit Quiz"/>
</form>

