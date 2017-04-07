<?php

/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/6/2017
 * Time: 12:52 AM
 */
class QuizPoints
{
    private $answer;
    private $is_correct;
    private $points;

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

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

}