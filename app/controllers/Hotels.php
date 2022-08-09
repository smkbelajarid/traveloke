<?php

/**
 * 
 */
class Hotels extends Controller
{

    public function index()
    {
        if (!$this->model('Auth_model')->isLoggedIn()){
            header('Location: '.BASEURL.'/login');
        }
        $data['title'] = 'Hotels';
        $data['hotels'] = $this->model('Hotels_model')->getAllHotels();
        $this->view('templates/header', $data);
        $this->view('hotels/index', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Hotels_model')->addHotelsData($_POST) > 0) {
            header('Location: ' . BASEURL . '/hotels');
            exit;
        } else {
            header('Location: ' . BASEURL . '/hotels');
            exit;
        }
    }

    public function    delete($id)
    {
        if ($this->model('Hotels_model')->deleteHotelsData($id) > 0) {
            header('Location: ' . BASEURL . '/hotels');
            exit;
        } else {
            header('Location: ' . BASEURL . '/hotels');
            exit;
        }
    }

    public function    edit()
    {
        if ($this->model('Hotels_model')->editHotelsData($_POST) > 0) {
            // echo "true";
            header('Location: ' . BASEURL . '/hotels');
            exit;
        } else {
            // echo "false";
            header('Location: ' . BASEURL . '/hotels');
            exit;
        }
    }
}
