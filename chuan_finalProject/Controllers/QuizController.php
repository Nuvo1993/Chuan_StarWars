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

        $categories = $serviceQuestions->getAllCategories();

        //path is relative to routes.php
        require_once ('../Views/quiz.php');
    }

    public function submit(){

        if(isset($_POST['quizSubmit'])){

            $service = new QuizService();
            $list = $service->getPointsByCategory();
            $questionCount = $service->getQuestionCount();

            $totalCategoryPoints = 0;
            $userCategoryPoints = 0;

            echo '<div id="submissionResults">';

            foreach ($list as $categoryArray){

                foreach ($categoryArray as $key=>$value){
                    $count = 0;
                    $categoryName = $key;
                    $categoryPoints = $value;
                    $points = 0;

                    while($count <= $questionCount[0]){

                        if(isset($_POST[$categoryName . $count])){

                            //get radio value
                            //pass value to function to get each point from database. Based on is_correct.
                            //set each name/point to list
                            $answerId = intval($_POST[$categoryName . $count]);
                            $quizPoints = $service->getTotalPoints($count, $answerId);
                            $points += $quizPoints->getPoints();

                        }
                        $count++;
                    }

                    $totalCategoryPoints += $categoryPoints;
                    $userCategoryPoints += $points;

                    $categoryResult = $points/$categoryPoints;

                    echo '<div class="categoryResult"><p>Your score for the ' . $categoryName . ' category is: ' . $categoryResult * 100 . '%</p></div>';

                    if($categoryResult <= .50){

                        echo '<div class="learnMoreText"><p>Use the search to learn more about the ' . $categoryName . ' in the Star Wars universe.</p></div>';
                    }

                }

            }

            $score = ($userCategoryPoints/$totalCategoryPoints) * 100;
            echo '<div id="score"><p>Overall score is: ' . $score . '%</p></div>';

            if($score > 90){

                echo '<div class="resultImg"><p>Image for 90% or above.</p></div>';

            }elseif ($score >= 80 && $score <= 89){

                echo '<div class="resultImg"><p>Image for between 80% and 89%.</p></div>';

            }elseif ($score >= 70 && $score <= 79){

                echo '<div class="resultImg"><p>Image for between 70% and 79%.</p></div>';

            }elseif ($score >= 60 && $score <= 69){

                echo '<div class="resultImg"><p>Image for between 60% and 69%.</p></div>';

            }else{

                echo '<div class="resultImg"><p>Image for below 60%.</p></div>';

            }

            echo '</div>';
        }
    }
}