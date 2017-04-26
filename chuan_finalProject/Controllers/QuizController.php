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

        //includes quiz php
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

            echo '<h1>Results!</h1>';

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

            echo '<div class="learnMoreText"><p>Use the <a id="textHref" href="../index.html">search</a> to learn more about the Star Wars universe.</p></div>';

            //calculate overall score and display.
            $score = ($userCategoryPoints/$totalCategoryPoints) * 100;
            echo '<div id="score"><p>Overall score is: ' . $score . '%</p></div>';

            //display image based on range of score.
            if($score > 90){

                echo '<div class="resultImg">
                    <div id="Carousel" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#Carousel" data-slide-to="1"></li>
                                <li data-target="#Carousel" data-slide-to="2"></li>
                                <li data-target="#Carousel" data-slide-to="3"></li>
                              </ol>
                            
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img class="carouselImg" src="../Content/imgs/above90/yoda1.jpg" alt="yoda1">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" src="../Content/imgs/above90/yoda2.jpg" alt="yoda2">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" src="../Content/imgs/above90/yoda3.jpg" alt="yoda3">
                                </div>
                            
                              </div>
                            
                              <!-- Left and right controls -->
                              <a class="left carousel-control" href="#Carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#Carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                            <p>You are a Jedo Master! Much knowledge you have.</p>
                    </div>';

            }elseif ($score >= 80 && $score <= 89){

                echo '<div class="resultImg">
                        <div id="Carousel" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#Carousel" data-slide-to="1"></li>
                                <li data-target="#Carousel" data-slide-to="2"></li>
                                <li data-target="#Carousel" data-slide-to="3"></li>
                              </ol>
                            
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img class="carouselImg" src="../Content/imgs/between80-89/rey1.png" alt="rey1">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" src="../Content/imgs/between80-89/rey2.jpg" alt="rey2">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" src="../Content/imgs/between80-89/rey3.jpg" alt="rey3">
                                </div>
                            
                              </div>
                            
                              <!-- Left and right controls -->
                              <a class="left carousel-control" href="#Carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#Carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                            <p>You are a very strong with the force! But you still have more to learn.</p>
                <   /div>';

            }elseif ($score >= 70 && $score <= 79){

                echo '<div class="resultImg">                        
                            
                       <div id="Carousel" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#Carousel" data-slide-to="1"></li>
                                <li data-target="#Carousel" data-slide-to="2"></li>
                                <li data-target="#Carousel" data-slide-to="3"></li>
                              </ol>
                            
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img class="carouselImg" class="carouselImg" src="../Content/imgs/between70-79/obi1.jpg" alt="Obi1">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" class="carouselImg" src="../Content/imgs/between70-79/obi2.jpg" alt="Obi2">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" class="carouselImg" src="../Content/imgs/between70-79/between70-79.jpg" alt="Obi3">
                                </div>
                            
                              </div>
                            
                              <!-- Left and right controls -->
                              <a class="left carousel-control" href="#Carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#Carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                            <p>You are very skilled! You know quite a bit.</p>
                            </div>';

            }elseif ($score >= 60 && $score <= 69){

                echo '<div class="resultImg">
                        <div id="Carousel" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#Carousel" data-slide-to="1"></li>
                                <li data-target="#Carousel" data-slide-to="2"></li>
                                <li data-target="#Carousel" data-slide-to="3"></li>
                              </ol>
                            
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img class="carouselImg" src="../Content/imgs/between60-69/han1.jpg" alt="han1">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" src="../Content/imgs/between60-69/han2.png" alt="han2">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" src="../Content/imgs/between60-69/han1.jpg" alt="han3">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" src="../Content/imgs/between60-69/han2.png" alt="han4">
                                </div>
                              </div>
                            
                              <!-- Left and right controls -->
                              <a class="left carousel-control" href="#Carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#Carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                        <p>You know enough to get by! You could always use some help though.</p>
                </div>';

            }else{

                echo '<div class="resultImg">
                           <div id="Carousel" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#Carousel" data-slide-to="1"></li>
                                <li data-target="#Carousel" data-slide-to="2"></li>
                                <li data-target="#Carousel" data-slide-to="3"></li>
                              </ol>
                            
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                  <img class="carouselImg" src="../Content/imgs/below60/jar1.jpg" alt="jar1">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" src="../Content/imgs/below60/jar.png" alt="jar2">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" src="../Content/imgs/below60/jar_3.jpg" alt="jar3">
                                </div>
                            
                                <div class="item">
                                  <img class="carouselImg" src="../Content/imgs/below60/jar4.jpg" alt="jar4">
                                </div>
                              </div>
                            
                              <!-- Left and right controls -->
                              <a class="left carousel-control" href="#Carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#Carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                            <p>Jar Jar! You have much to learn...</p>
                        </div>';

            }

            echo '</div>';
        }
    }
}