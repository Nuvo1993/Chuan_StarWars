<?php

/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 7:25 PM
 */
class QuizAnswer
{
    private $id;
    private $question_id;
    private $answer;
    private $is_correct;

    /**
     * QuizAnswer constructor.
     * @param $id
     * @param $question_id
     * @param $answer
     * @param $is_correct
     */
/*    public function __construct($id, $question_id, $answer, $is_correct)
    {
        $this->id = $id;
        $this->question_id = $question_id;
        $this->answer = $answer;
        $this->is_correct = $is_correct;
    }*/

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getQuestionId()
    {
        return $this->question_id;
    }

    /**
     * @param mixed $question_id
     */
    public function setQuestionId($question_id)
    {
        $this->question_id = $question_id;
    }

    /**
     * @return mixed
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param mixed $answer
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    }

    /**
     * @return mixed
     */
    public function getIsCorrect()
    {
        return $this->is_correct;
    }

    /**
     * @param mixed $is_correct
     */
    public function setIsCorrect($is_correct)
    {
        $this->is_correct = $is_correct;
    }

}