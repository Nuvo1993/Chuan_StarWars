<?php

/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 12:14 PM
 */

require_once ('Entities/Quiz.php');
require_once ('Entities/QuizAnswer.php');
require_once ('Entities/QuizCategory.php');
require_once ('Entities/QuizPoints.php');
require_once ('Entities/QuizQuestion.php');

class QuizDAO
{

    const SELECT_QUIZ_BY_ID = "SELECT name from quiz WHERE id = :quizId";
    const SELECT_ALL_QUESTIONS = "SELECT * from quiz_question";
    const SELECT_ALL_CATEGORIES = "SELECT * from quiz_category";
    const SELECT_ALL_ANSWERS = "SELECT * from quiz_answer";
    const SELECT_CATEGORY_BY_NAME = "SELECT * from quiz_category WHERE name = :name";
    //public const SELECT_QUESTION_BY_ID = "SELECT * from quiz_question WHERE id = :questionId";
    //public const SELECT_QUESTION_POINTS = "SELECT points from quiz_question WHERE id = :questionId";
    const SELECT_IS_CORRECT_ANSWER = "SELECT answer, is_correct, points from quiz_answer" .
                                            " INNER JOIN quiz_question ON quiz_answer.question_id = quiz_question.id where quiz_answer.id = :answerId and quiz_answer.question_id = :questionId";
    const SELECT_ANSWER_BY_QUESTION_ID = "SELECT * from quiz_answer WHERE question_id = :questionId";

    public function selectQuiz($quizId){

        $db = Db::getInstance();
        $quizId = intval($quizId);

        $req = $db->prepare(self::SELECT_QUIZ_BY_ID);
        $req->execute(array('quizId' => $quizId));

        $result = $req->fetch();
        $quiz = new Quiz();
        $quiz->setId($result['id']);
        $quiz->setName($result['name']);

        return $quiz;
    }

    public function selectAllCategories(){

        $list = [];

        $db = Db::getInstance();
        $req = $db->query(self::SELECT_ALL_CATEGORIES);

        foreach ($req->fetchAll() as $category){
            $quizCategory = new QuizCategory();
            $quizCategory->setName($category['name']);
            $list[] = $quizCategory;
        }

        return $list;
    }

    public function selectCategory($name){

        $db = Db::getInstance();

        $req = $db->prepare(self::SELECT_CATEGORY_BY_NAME);
        $req->execute(array('name' => $name));

        $result = $req->fetch();
        $category = new QuizCategory();
        $category->setName($result['name']);

        return $category;
    }

    public function selectAllQuestions(){

        $list = [];

        $db = Db::getInstance();
        $req = $db->query(self::SELECT_ALL_QUESTIONS);

        foreach ($req->fetchAll() as $question){

            $quizQuestion = new QuizQuestion();
            $quizQuestion->setId($question['id']);
            $quizQuestion->setQuizId($question['quiz_id']);
            $quizQuestion->setCategoryName($question['category_name']);
            $quizQuestion->setQuestion($question['question']);
            $quizQuestion->setPoints($question['points']);
            $quizQuestion->setIsActive($question['is_active']);

            $list[] = $quizQuestion;
        }

        return $list;
    }

    public function getQuestionPoints($questionId, $answerId){

        $db = Db::getInstance();

        $questionId = intval($questionId);
        $answerId = intval($answerId);

        $req = $db->prepare(self::SELECT_IS_CORRECT_ANSWER);
        $req->execute(array('questionId' => $questionId,
                            'answerId' => $answerId));

        $result = $req->fetch();

        $quizPoints = new QuizPoints();

        $quizPoints->setAnswer($result['answer']);
        $quizPoints->setIsCorrect($result['is_correct']);

        if($result['is_correct'] == 1){
            $quizPoints->setPoints($result['points']);
        }else{
            $quizPoints->setPoints(0);
        }

        return $quizPoints;

    }

    public function selectAllAnswers(){

        $list = [];

        $db = Db::getInstance();
        $req = $db->query(self::SELECT_ALL_ANSWERS);

        foreach ($req->fetchAll() as $answer){

            $quizAnswer = new QuizAnswer();
            $quizAnswer->setId($answer['id']);
            $quizAnswer->setQuestionId($answer['question_id']);
            $quizAnswer->setAnswer($answer['answer']);
            $quizAnswer->setIsCorrect($answer['is_correct']);

            $list[] = $quizAnswer;
        }

        return $list;
    }

    public function selectIsCorrectAnswer(){}

    public function selectAnswerByQuestion($questionId){

        $list = [];
        $questionId = intval($questionId);

        $db = Db::getInstance();
        $req = $db->prepare(self::SELECT_ANSWER_BY_QUESTION_ID);
        $req->execute(array('questionId' => $questionId));

        foreach ($req->fetchAll() as $answer){

            $quizAnswer = new QuizAnswer();
            $quizAnswer->setId($answer['id']);
            $quizAnswer->setQuestionId($answer['question_id']);
            $quizAnswer->setAnswer($answer['answer']);
            $quizAnswer->setIsCorrect($answer['is_correct']);

            $list[] = $quizAnswer;
        }

        return $list;
    }

    public function selectQuestionsByCategory($name){

        $query = 'SELECT * FROM quiz_question WHERE category_name = :name';

        $list = [];

        $db = Db::getInstance();
        $req = $db->prepare($query);
        $req->execute(array('name' => $name));

        foreach ($req->fetchAll() as $question){

            $quizQuestion = new QuizQuestion();
            $quizQuestion->setId($question['id']);
            $quizQuestion->setQuizId($question['quiz_id']);
            $quizQuestion->setCategoryName($question['category_name']);
            $quizQuestion->setQuestion($question['question']);
            $quizQuestion->setPoints($question['points']);
            $quizQuestion->setIsActive($question['is_active']);

            $list[] = $quizQuestion;
        }

        return $list;

    }

    public function selectPointsByCategory(){

        $query = 'SELECT category_name, SUM(points) AS category_points FROM quiz_question GROUP BY category_name';

        $list = [];

        $db = Db::getInstance();
        $req = $db->query($query);

        foreach ($req->fetchAll() as $category){

            $list[] = array($category['category_name']=>$category['category_points']);

        }

        return $list;

    }

    public function selectQuestionCount(){

        $query = 'SELECT COUNT(id) AS total_questions FROM quiz_question';

        $db = Db::getInstance();
        $req = $db->query($query);

        $totalQuestions = $req->fetch();

        return $totalQuestions;
    }

}