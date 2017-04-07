<?php

/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 7:25 PM
 */
class QuizCategory
{

    private $name;

    /**
     * QuizCategory constructor.
     * @param $name
     */
/*    public function __construct($name)
    {
        $this->name = $name;
    }*/

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}