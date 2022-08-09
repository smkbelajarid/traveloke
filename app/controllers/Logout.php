<?php 

/**
 * 
 */
class Logout extends Controller
{
	
	function index()
	{
		if ($this->model('Auth_model')->logout()){
			header('Location: '.BASEURL.'/login');
			exit;
		} else {
			echo "gagal";
		}
	}
}