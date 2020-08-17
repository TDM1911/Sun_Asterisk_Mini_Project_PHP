<?php

require_once('Controller.php');

class PagesController extends Controller
{

    public function __construct() {
        // $this->auth();
    }

    public function welcome() 
    {
        $this->render('welcome');
    }

}
