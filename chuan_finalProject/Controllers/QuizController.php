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

        //Gets all categories
        $categories = $serviceQuestions->getAllCategories();

        //includes quix php
        require_once ('../Views/quiz.php');
    }

    public function submit(){

        //if submit is clicked
        if(isset($_POST['quizSubmit'])){

            $service = new QuizService();
            $list = $service->getPointsByCategory();
            //gets total number of questions
            $questionCount = $service->getQuestionCount();

            $totalCategoryPoints = 0;
            $userCategoryPoints = 0;

            //echo's display to browser
            echo '<div id="submissionResults">';

            //get array from within list
            foreach ($list as $categoryArray){

                //get each category
                foreach ($categoryArray as $key=>$value){
                    $count = 0;
                    $categoryName = $key;
                    $categoryPoints = $value;
                    $points = 0;

                    //loop over number of questions
                    while($count <= $questionCount[0]){
                        //get specific category group
                        if(isset($_POST[$categoryName . $count])){

                            //get answer from radio value
                            $answerId = intval($_POST[$categoryName . $count]);

                            //get point value
                            $quizPoints = $service->getTotalPoints($count, $answerId);
                            //add to sum
                            $points += $quizPoints->getPoints();

                        }
                        $count++;
                    }

                    //sum all category points. sum all user points.
                    $totalCategoryPoints += $categoryPoints;
                    $userCategoryPoints += $points;

                    //calculate score and display for each category.
                    $categoryResult = $points/$categoryPoints;

                    echo '<div class="categoryResult"><p>Your score for the ' . $categoryName . ' category is: ' . $categoryResult * 100 . '%</p></div>';

                }

            }

            echo '<div class="learnMoreText"><p>Use the <a href="../index.html">search</a> to learn more about the Star Wars universe.</p></div>';

            //calculate overall score and display.
            $score = ($userCategoryPoints/$totalCategoryPoints) * 100;
            echo '<div id="score"><p>Overall score is: ' . $score . '%</p></div>';

            //display image based on range of score.
            if($score > 90){

                echo '<div class="resultImg"><img src="../Content/imgs/above90_2.jpg" alt="Above 90%"/></div>';

            }elseif ($score >= 80 && $score <= 89){

                echo '<div class="resultImg"><img src="../Content/imgs/between80-89.jpg" alt="Between 80% - 89%"/></div>';

            }elseif ($score >= 70 && $score <= 79){

                echo '<div class="resultImg"><img src="../Content/imgs/between70-79.jpg" alt="Between 70% - 79%"/></div>';

            }elseif ($score >= 60 && $score <= 69){

                echo '<div class="resultImg"><img src="../Content/imgs/between60-69.jpg" alt="Between 60% - 69%"/></div>';

            }else{

                echo '<div class="resultImg"><img src="../Content/imgs/below60.jpg" alt="Below 60%"/></div>';

            }

            echo '</div>';
        }
    }
}