<?php

/**
 * 
 */
class Rooms extends Controller
{

    public function index()
    {
        if (!$this->model('Auth_model')->isLoggedIn()){
            header('Location: '.BASEURL.'/login');
        }
        $data['title'] = 'rooms';
        $data['res']['rooms'] = $this->model('Rooms_model')->getAllRooms();
        $data['res']['hotels'] = $this->model('Hotels_model')->getAllHotels();
        $this->view('templates/header', $data);
        $data['user'] = $this->model('Auth_model')->getUser();
        if ($data['user']['level'] == 'admin'){
            $this->view('rooms/index', $data);
        } else if ($data['user']['level'] == 'user') {
            $this->view('rooms/user', $data);
        }
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Rooms_model')->addRoomsData($_POST) > 0) {
            Flasher::setFlash('berhasil','ditambah','success','kamar');
            header('Location: ' . BASEURL . '/rooms');
            exit;
        } else {
            Flasher::setFlash('gagal','ditambah','danger','kamar');
            header('Location: ' . BASEURL . '/rooms');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Rooms_model')->deleteRoomsData($id) > 0) {
            Flasher::setFlash('berhasil','dihapus','success','kamar');
            header('Location: ' . BASEURL . '/rooms');
            exit;
        } else {
            Flasher::setFlash('gagal','dihapus','danger','kamar');
            header('Location: ' . BASEURL . '/rooms');
            exit;
        }
    }

    public function edit()
    {
        if ($this->model('Rooms_model')->editRoomsData($_POST) > 0) {
            // echo "true";
            Flasher::setFlash('berhasil','diubah','success','kamar');
            header('Location: ' . BASEURL . '/rooms');
            exit;
        } else {
            // echo "false";
            Flasher::setFlash('gagal','diubah','danger','kamar');
            header('Location: ' . BASEURL . '/rooms');
            exit;
        }
    }

    public function getAllHotels()
    {
        $data['hotels'] = $this->model('Hotels_model')->getAllHotels();
        $this->view('rooms/index', $data);
    }

    public function orders($id=null)
    {
        if (isset($id)){
            $data['title'] = 'Rooms - orders';
            $data['res']['rooms'] = $this->model('Rooms_model')->getAllRooms($id);
            $data['res']['hotels'] = $this->model('Hotels_model')->getHotelsById($id);
            $this->view('templates/header', $data);
            $this->view('rooms/orders', $data);
            $this->view('templates/footer');
        } else {
            $this->index();
        }
    }
}
