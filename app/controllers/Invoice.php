<?php

/**
 * 
 */
class Invoice extends Controller
{

	public function index()
	{
		if (!$this->model('Auth_model')->isLoggedIn()) {
			header('Location: ' . BASEURL . '/login');
		}
		$data['title'] = 'Invoice';
		$data['invoice']['cars'] = $this->model('Invoice_model')->getRecentCars($_SESSION['user_session']);
		$data['invoice']['rooms'] = $this->model('Invoice_model')->getRecentRooms($_SESSION['user_session']);
		$data['invoice']['flights'] = $this->model('Invoice_model')->getRecentFlights($_SESSION['user_session']);
		$data['invoice']['ships'] = $this->model('Invoice_model')->getRecentShips($_SESSION['user_session']);
		$this->view('templates/header', $data);
		$data['user'] = $this->model('Auth_model')->getUser();
		if ($data['user']['level'] == 'admin') {
			$this->view('invoice/index', $data);
		} else if ($data['user']['level'] == 'user') {
			$this->view('invoice/user', $data);
		}
		$this->view('templates/footer');
	}

	public function cars($id = null)
	{
		if (isset($id)) {
			$data['title'] = 'Cars - orders';
			$data['res']['cars'] = $this->model('Cars_model')->getCarsById($id);
			if (!$data['res']['cars']) {
				exit(header('Location: ' . BASEURL . '/cars/orders'));
			}
			if (isset($_POST['jumlah'])) {
				if ($this->model('Orders_model')->addOrdersData($_POST, 'mobil') > 0) {
					$this->index();
					echo "<script>window.location.href='/traveloke/invoice'</script>";
					exit;
				}
			}
		} else {
			$this->index();
			exit;
		}
	}

	public function rooms($id = null)
	{
		if (isset($id)) {
			$data['title'] = 'Order Kamar';
			$data['res']['rooms'] = $this->model('Rooms_model')->getRoomsById($id);
			if (!$data['res']['rooms']) {
				exit(header('Location: ' . BASEURL . '/rooms/orders'));
			}
			if (isset($_POST['jumlah'])) {
				if ($this->model('Orders_model')->addOrdersData($_POST, 'kamar') > 0) {
					$this->index();
					echo "<script>window.location.href='/traveloke/invoice'</script>";
					exit;
				}
			}
		} else {
			$this->index();
			exit;
		}
	}

	public function flights($id = null)
	{
		if (isset($id)) {
			$data['title'] = 'Penerbangan';
			$data['res']['flights'] = $this->model('Flights_model')->getFlightsById($id);
			if (!$data['res']['flights']) {
				exit(header('Location: ' . BASEURL . '/flights/orders'));
			}
			if (isset($_POST['jumlah'])) {
				if ($this->model('Orders_model')->addOrdersData($_POST, 'penerbangan') > 0) {
					$this->index();
					echo "<script>window.location.href='/traveloke/invoice'</script>";
					exit;
				}
			}
		} else {
			$this->index();
			exit;
		}
	}

	public function ships($id = null)
	{
		if (isset($id)) {
			$data['title'] = 'Pelayaran';
			$data['res']['ships'] = $this->model('Ships_model')->getShipsById($id);
			if (!$data['res']['ships']) {
				exit(header('Location: ' . BASEURL . '/ships/orders'));
			}
			if (isset($_POST['jumlah'])) {
				if ($this->model('Orders_model')->addOrdersData($_POST, 'pelayaran') > 0) {
					$this->index();
					echo "<script>window.location.href='/traveloke/invoice'</script>";
					exit;
				}
			}
		} else {
			$this->index();
			exit;
		}
	}
}
