<?php

/**
 * 
 */
class Cars extends Controller
{

	public function index()
	{
		if (!$this->model('Auth_model')->isLoggedIn()){
            header('Location: '.BASEURL.'/login');
        }
		$data['title'] = 'Cars';
		$data['cars'] = $this->model('Cars_model')->getAllCars();
		$this->view('templates/header', $data);
		$this->view('cars/index', $data);
		$this->view('templates/footer');
	}

	public function add()
	{
		if ($this->model('Cars_model')->addCarsData($_POST) > 0) {
			Flasher::setFlash('berhasil','ditambahkan','success','mobil');
			header('Location: ' . BASEURL . '/cars');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','danger','mobil');
			header('Location: ' . BASEURL . '/cars');
			exit;
		}
	}

	public function	delete($id)
	{
		if ($this->model('Cars_model')->deleteCarsData($id) > 0) {
			Flasher::setFlash('berhasil','dihapus','success','mobil');
			header('Location: ' . BASEURL . '/cars');
			exit;
		} else {
			Flasher::setFlash('gagal','dihapus','danger','mobil');
			header('Location: ' . BASEURL . '/cars');
			exit;
		}
	}

	public function	edit()
	{
		if ($this->model('Cars_model')->editCarsData($_POST) > 0) {
			Flasher::setFlash('berhasil','diubah','success','mobil');
			echo "true";
			header('Location: ' . BASEURL . '/cars');
			exit;
		} else {
			Flasher::setFlash('gagal','diubah','danger','mobil');
			echo "false";
			header('Location: ' . BASEURL . '/cars');
			exit;
		}
		// $this->model('Cars_model')->editCarsData($_POST);
	}

	public function orders($id=null)
	{
		if (isset($id)){
			$data['title'] = 'Cars - orders';
			$data['res'] = $this->model('Cars_model')->getCarsById($id);
			$this->view('templates/header', $data);
			$this->view('cars/orders', $data);
			$this->view('templates/footer');
			if (isset($_POST['jumlah'])){
				if ($this->model('Orders_model')->addOrdersData($_POST, 'mobil') > 0){
					// $_SESSION['res'] = $data['res'];
					// $_SESSION['invoice'] = $this->model('Orders_model')->getCarsOrdersById($id);
					echo "ok";
				}
				// exit(header('Location: '.BASEURL.'/cars/orders/invoice'))
			}
		} else {
			$this->index();
		}
	}

	public function invoice($data){
		$data['title'] = 'Cars - invoice';
		$this->view('templates/header', $data);
		$this->view('invoice/index', $data);
		$this->view('templates/footer');
	}
}
