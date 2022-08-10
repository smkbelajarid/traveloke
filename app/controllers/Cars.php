<?php

/**
 * 
 */
class Cars extends Controller
{

	public function index()
	{
		if (!$this->model('Auth_model')->isLoggedIn()) {
			header('Location: ' . BASEURL . '/login');
		}
		$data['title'] = 'Cars';
		$data['res']['cars'] = $this->model('Cars_model')->getAllCars();
		$this->view('templates/header', $data);
		$data['user'] = $this->model('Auth_model')->getUser();
		if ($data['user']['level'] == 'admin') {
			$this->view('cars/index', $data);
		} else if ($data['user']['level'] == 'user') {
			$this->view('cars/user', $data);
		}
		$this->view('templates/footer');
	}

	public function add()
	{
		if ($this->model('Cars_model')->addCarsData($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success', 'mobil');
			header('Location: ' . BASEURL . '/cars');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger', 'mobil');
			header('Location: ' . BASEURL . '/cars');
			exit;
		}
	}

	public function	delete($id)
	{
		if ($this->model('Cars_model')->deleteCarsData($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success', 'mobil');
			header('Location: ' . BASEURL . '/cars');
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger', 'mobil');
			header('Location: ' . BASEURL . '/cars');
			exit;
		}
	}

	public function	edit()
	{
		if ($this->model('Cars_model')->editCarsData($_POST) > 0) {
			Flasher::setFlash('berhasil', 'diubah', 'success', 'mobil');
			echo "true";
			header('Location: ' . BASEURL . '/cars');
			exit;
		} else {
			Flasher::setFlash('gagal', 'diubah', 'danger', 'mobil');
			echo "false";
			header('Location: ' . BASEURL . '/cars');
			exit;
		}
		// $this->model('Cars_model')->editCarsData($_POST);
	}

	public function orders($id = null)
	{
		if (isset($id)) {
			$data['title'] = 'Cars - orders';
			$data['res']['cars'] = $this->model('Cars_model')->getCarsById($id);
			if (!$data['res']['cars']) {
				exit(header('Location: ' . BASEURL . '/cars/orders'));
			}
			$this->view('templates/header', $data);
			$this->view('cars/orders', $data);
			$this->view('templates/footer');
			if (isset($_POST['jumlah'])) {
				if ($this->model('Orders_model')->addOrdersData($_POST, 'mobil') > 0) {
					// header('Location: '.BASEURL.'/invoice');
					// exit;
				}
			}
		} else {
			$this->index();
		}
	}
}
