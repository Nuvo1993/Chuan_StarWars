<?php

/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 12:14 PM
 */

require_once ('Models/QuizDAO.php');
require_once ('Models/ValidationException.php');

class QuizService
{
    private $quizDAO = NULL;

    public function __construct()
    {
        $this->quizDAO = new QuizDAO();
    }

  /*  public function getAllQuizzes(){

        $res = $this->quizDAO->selectAllQuizzes();
        return $res;
    }*/

    public function getQuiz(){

        $id = 1;
        $res = $this->quizDAO->selectQuiz($id);
        return $res;
    }

    public function getAllCategories(){

        $res = $this->quizDAO->selectAllCategories();
        return $res;
    }

    public function getCategory($name){

        $res = $this->quizDAO->selectCategory($name);
        return $res;
    }

    public function getAllQuestions(){

        $res = $this->quizDAO->selectAllQuestions();
        return $res;
    }

 /*   public function getQuestion($id){

        $res = $this->quizDAO->selectQuestion($id);
        return $res;
    }*/

    public function getAllAnswers(){

        $res = $this->quizDAO->selectAllAnswers();
        return $res;
    }

    public function getAnswerByQuestion($questionId){

        $res = $this->quizDAO->selectAnswerByQuestion($questionId);
        return $res;
    }

/*    public function getIsAnswerCorrect(){

        $res = $this->quizDAO->selectIsCorrectAnswer();
        return $res;
    }*/

    public function getTotalPoints($questionId, $answerId){

        $res = $this->quizDAO->getQuestionPoints($questionId, $answerId);
        return $res;
    }

}