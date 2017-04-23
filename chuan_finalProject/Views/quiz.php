<!--
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 12:12 PM
 */
-->

<div id="quizContainer" style="text-align: center;">
    <h1 id="quizHeader">Take the quiz below</h1>

    <form class="form-horizontal" action="?controller=quiz&action=submit" method="post">

        <?php
        $previous = '';
        foreach ($categories as $key=>$value){
            $categoryIndex = $key;
            ?>
            <div class="categoryGroup">
                <h3 class="category">
                    <a data-toggle="collapse" href="#categoryGroup<?php echo $categoryIndex ?>">
                        <?php
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

                    foreach ($questions as $key=>$value) {
                        $questionIndex = $value->getId();
                        ?>
                        <div class="questionAnswerGroup">
                            <div class="questionGroup"><?php echo $questionIndex . '. ' . $value->getQuestion(); ?></div>
                            <div class="answerGroup" style="margin-left: 10px;">
                                <?php

                                $answers = $serviceQuestions->getAnswerByQuestion($questionIndex);
                                $radioName = $current . $questionIndex;

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