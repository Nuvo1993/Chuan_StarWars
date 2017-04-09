<?php

/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 12:12 PM
 */
class QuizController
{
    public function index(){
        $serviceQuestions = new QuizService();
        $questions = $serviceQuestions->getAllQuestions();

        foreach($questions as $key=>$value){
            $answers = $serviceQuestions->getAnswerByQuestion($key);

        }

        require_once ('Views/quiz.php');
    }

    public function submit(){

        if(isset($_POST['quizSubmit'])){

            $service = new QuizService();

            $categories = $service->getAllCategories();

            foreach ($categories as $category){

                $count = 0;
                $name = $category->getName();

                while($count < 40){

                    if(isset($_POST[$name . $count])){
                        echo "Selected value: " . $_POST[$name . $count] . '<br>'; //Selected value.
                    }
                    $count++;
                }

            }

        }
    }
}