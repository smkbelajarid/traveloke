<?php

/**
 * 
 */
class Register extends Controller
{
	
	public function index()
	{
        if ($this->model('Auth_model')->isLoggedIn()){
        	header('Location: '.BASEURL.'/index');
        }
		$data['title'] = 'Register';
		$this->view('templates/header', $data);
		$this->view('register/index', $data);
		$this->view('templates/footer');
	}

	public function auth(){
		if (isset($_POST['username'])){
			if ($this->model('Auth_model')->register($_POST)){
				$error = $this->model('Auth_model')->getLastError();
				header('Location: '.BASEURL.'/login');
				exit;
			} else {
				$error = $this->model('Auth_model')->getLastError();
				header('Location: '.BASEURL.'/register');
				exit;
			}
		} else {
			header('Location: '.BASEURL.'/register');
			exit;
		}
	}
}