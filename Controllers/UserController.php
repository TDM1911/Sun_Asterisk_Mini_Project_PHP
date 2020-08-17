<?php

require_once('Controller.php');
require_once('Models/User.php');

class UserController extends Controller
{

    public function __construct() {
        // $this->auth();
    }

    public function index() 
    {
    	$data = [
    		'user' => User::find(1)
    	];
        $this->render('user.index',$data);
    }

}
