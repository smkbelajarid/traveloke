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
        $data['user'] = $this->model('Auth_model')->getUser();
        if ($data['user']['level'] == 'admin'){
            $this->view('hotels/index', $data);
        } else if ($data['user']['level'] == 'user') {
            $this->view('hotels/user', $data);
        }
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Hotels_model')->addHotelsData($_POST) > 0) {
            Flasher::setFlash('berhasil','ditambah','success','hotel');
            header('Location: ' . BASEURL . '/hotels');
            exit;
        } else {
            Flasher::setFlash('gagal','ditambah','danger','hotel');
            header('Location: ' . BASEURL . '/hotels');
            exit;
        }
    }

    public function    delete($id)
    {
        if ($this->model('Hotels_model')->deleteHotelsData($id) > 0) {
            Flasher::setFlash('berhasil','delete','success','hotel');
            header('Location: ' . BASEURL . '/hotels');
            exit;
        } else {
            Flasher::setFlash('gagal','delete','danger','hotel');
            header('Location: ' . BASEURL . '/hotels');
            exit;
        }
    }

    public function edit()
    {
        if ($this->model('Hotels_model')->editHotelsData($_POST) > 0) {
            // echo "true";
            Flasher::setFlash('berhasil','diubah','success','hotel');
            header('Location: ' . BASEURL . '/hotels');
            exit;
        } else {
            // echo "false";
            Flasher::setFlash('gagal','diubah','danger','hotel');
            header('Location: ' . BASEURL . '/hotels');
            exit;
        }
    }
}
