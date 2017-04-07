<!--
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 12:12 PM
 */
-->

<h1>Quiz page</h1>

<?php foreach ($questions as $key=>$value) { ?>
    <div>
        <?php echo $key+1 . '. ' . $value->getQuestion(); ?>
    </div>

    <div>
        <?php
        $answers = $serviceQuestions->getAnswerByQuestion($key+1);

        foreach($answers as $answer){
            echo $answer->getAnswer() . '<br>';
        }
        ?>
    </div>
<?php } ?>
