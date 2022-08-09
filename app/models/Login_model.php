<?php

class Login_model {
	private $table = 'users';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function authUser(){
		$username	= $_POST['username'];
		$password	= $_POST['password'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username');
        $this->db->bind('username', $username);
        if ($this->db->single() > 0){
        	if ($this->db->single()['password'] == $password){
        		//success
        		$_SESSION['login'] = true;
        		header("Location: ".BASEURL."/index");
        	} else {
        		//failed
        		echo "Login Failed!";
        	}
        } else {
        	//failed
        	echo "Login Failed!";
        }
    }
}