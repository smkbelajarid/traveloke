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
        $data['rooms'] = $this->model('Rooms_model')->getAllRooms();
        $data['hotels'] = $this->model('Hotels_model')->getAllHotels();
        $this->view('templates/header', $data);
        $this->view('rooms/index', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        if ($this->model('Rooms_model')->addRoomsData($_POST) > 0) {

            header('Location: ' . BASEURL . '/rooms');
            exit;
        } else {
            header('Location: ' . BASEURL . '/rooms');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Rooms_model')->deleteRoomsData($id) > 0) {
            header('Location: ' . BASEURL . '/rooms');
            exit;
        } else {
            header('Location: ' . BASEURL . '/rooms');
            exit;
        }
    }

    public function    edit()
    {
        if ($this->model('Rooms_model')->editRoomsData($_POST) > 0) {
            // echo "true";
            header('Location: ' . BASEURL . '/rooms');
            exit;
        } else {
            // echo "false";
            header('Location: ' . BASEURL . '/rooms');
            exit;
        }
    }

    public function getAllHotels()
    {
        $data['hotels'] = $this->model('Hotels_model')->getAllHotels();
        $this->view('rooms/index', $data);
    }


    public function orders()
    {
        $data['title'] = 'Rooms';
        $data['rooms'] = $this->model('Rooms_model')->getAllRooms();
        $this->view('templates/header', $data);
        $this->view('rooms/orders', $data);
        $this->view('templates/footer');
    }
}
