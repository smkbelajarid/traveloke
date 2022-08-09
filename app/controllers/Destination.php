<?php 

/**
 * 
 */
class Destination extends Controller{
	
	public function index(){
		if (!$this->model('Auth_model')->isLoggedIn()){
            header('Location: '.BASEURL.'/login');
        }
		$data['title'] = 'Destination';
		$data['destinations'] = $this->model('Destination_model')->getAllDestination();
		$this->view('templates/header', $data);
		$this->view('destination/index', $data);
		$this->view('templates/footer');	
	}

    public function add(){
        if ($this->model('Destination_model')->addDestination($_POST) > 0){
			Flasher::setFlash('berhasil','ditambahkan','success','destinasi');
			header('Location: '.BASEURL.'/destination');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','danger','destinasi');
			header('Location: '.BASEURL.'/destination');
			exit;
		}
    }

    public function	delete($id){
		if ($this->model('Destination_model')->deleteDestination($id) > 0){
			Flasher::setFlash('berhasil','dihapus','success','destinasi');
			header('Location: '.BASEURL.'/destination');
			exit;
		} else{
			Flasher::setFlash('gagal','dihapus','danger','destinasi');
			header('Location: '.BASEURL.'/destination');
			exit;
		}
	}

    public function	edit(){
		if ($this->model('Destination_model')->editDestination($_POST) > 0){
			Flasher::setFlash('berhasil','diubah','success','destinasi');
			// echo "true";
			header('Location: '.BASEURL.'/destination');
			exit;
		} else{
			// echo "false";
			Flasher::setFlash('gagal','diubah','danger','destinasi');
			header('Location: '.BASEURL.'/destination');
			exit;
		}
	}

	
}