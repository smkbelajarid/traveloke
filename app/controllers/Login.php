<?php

class Login extends Controller {
	public function index(){
		if ($this->model('Auth_model')->isLoggedIn()){
			header('Location: '.BASEURL.'/index');
			exit;
		}
		$data['title'] = 'Login';
		$this->view('templates/header', $data);
		$this->view('login/index', $data);
		$this->view('templates/footer');
	}

	public function auth(){
		if (!isset($_POST['username']) && !isset($_POST['password'])){
			header('Location: '.BASEURL.'/login');
			exit;
		}
		if ($this->model('Auth_model')->login($_POST['username'], $_POST['password'])){
			header('Location: '.BASEURL.'/index');
			exit;
		} else {
			$error = $this->model('Auth_model')->getLastError();
			// echo $error;
			header('Location: '.BASEURL.'/login');
			exit;
		}
	}
}