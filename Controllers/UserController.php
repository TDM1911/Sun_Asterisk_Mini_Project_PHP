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
    		'users' => User::all()
    	];
        $this->render('user.index',$data);
    }

}
