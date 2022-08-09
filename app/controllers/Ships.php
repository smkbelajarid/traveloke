<?php

/**
 * 
 */
class Ships extends Controller
{

    public function index()
    {
        if (!$this->model('Auth_model')->isLoggedIn()){
            header('Location: '.BASEURL.'/login');
        }
        $data['title'] = 'ships';
        $data['ships'] = $this->model('Ships_model')->getAllShips();
        $this->view('templates/header', $data);
        $this->view('ship/index', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Ships_model')->addShipsData($_POST) > 0) {
            Flasher::setFlash('berhasil','ditambah','success','Kapal');
            header('Location: ' . BASEURL . '/ships');
            exit;
        } else {
            Flasher::setFlash('gagal','ditambah','danger','Kapal');
            header('Location: ' . BASEURL . '/ships');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Ships_model')->deleteShipsData($id) > 0) {
            Flasher::setFlash('berhasil','dihapus','success','Kapal');
            header('Location: ' . BASEURL . '/ships');
            exit;
        } else {
            Flasher::setFlash('gagal','dihapus','success','Kapal');
            header('Location: ' . BASEURL . '/ships');
            exit;
        }
    }

    public function    edit()
    {
        if ($this->model('Ships_model')->editShipsData($_POST) > 0) {
            Flasher::setFlash('berhasil','diubah','success','Kapal');
            // echo "true";
            header('Location: ' . BASEURL . '/ships');
            exit;
        } else {
            Flasher::setFlash('gagal','diubah','danger','Kapal');
            // echo "false";
            header('Location: ' . BASEURL . '/ships');
            exit;
        }
    }

    public function orders(){
        $data['title'] = 'Ships';
        $data['cars'] = $this->model('Ships_model')->getAllShips();
        $this->view('templates/header', $data);
        $this->view('ship/orders', $data);
        $this->view('templates/footer');
    }
}
