<?php

/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 3:55 PM
 */
class PagesController
{

    /**
     *
     */
    public function index() {
        require_once('Views/index.php');
    }

    public function error() {
        require_once('Views/error.php');
    }
}