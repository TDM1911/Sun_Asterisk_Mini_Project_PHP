<?php

class User
{
    public $id,$username,$email,$created_at,$updated_at,$deleted_at;

    public function __construct($id,$username,$email,$created_at,$updated_at,$deleted_at)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }

    public function find($id)
    {
    	//connect to database
        $connection = DB::getInstance();
        $query = "SELECT * FROM `users` WHERE `id` = $id LIMIT 1";
        $req = $connection->query($query);
        // check query
        if ($req != false) {
            $user = $req->fetch();
            return new User($user['id'],$user['username'],$user['email'],$user['created_at'],$user['updated_at'],$user['deleted_at']);
        }
        return NULL;
    }

    public function all() {
    	//connect to database
        $connection = DB::getInstance();
        $query = "SELECT * FROM `users`";
        $req = $connection->query($query);
        $list = [];
        // check query
        if ($req != false) {
            foreach ($req->fetchAll() as $user) {
            	$list[] = new User($user['id'],$user['username'],$user['email'],$user['created_at'],$user['updated_at'],$user['deleted_at']);
            }
        }
        return $list;
    }
}
