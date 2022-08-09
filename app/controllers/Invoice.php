<?php

/**
 * 
 */
class Invoice extends Controller
{
	
	function index()
	{
		if (!$this->model('Auth_model')->isLoggedIn()){
            header('Location: '.BASEURL.'/login');
        }
		$data['title'] = 'Invoice';
		$data['invoice']['cars'] = $this->model('Invoice_model')->getRecentCars($_SESSION['user_session']);
		$data['invoice']['rooms'] = $this->model('Invoice_model')->getRecentRooms($_SESSION['user_session']);
		$data['invoice']['flights'] = $this->model('Invoice_model')->getRecentFlights($_SESSION['user_session']);
		$data['invoice']['Ships'] = $this->model('Invoice_model')->getRecentShips($_SESSION['user_session']);
		// var_dump($data['invoice']);
		$this->view('templates/header', $data);
		$this->view('invoice/index', $data);
		$this->view('templates/footer');
	}
}