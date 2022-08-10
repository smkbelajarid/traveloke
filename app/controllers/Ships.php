<?php

/**
 * 
 */
class Ships extends Controller
{

    public function index()
    {
        if (!$this->model('Auth_model')->isLoggedIn()) {
            header('Location: ' . BASEURL . '/login');
        }
        $data['title'] = 'ships';
        $data['res']['ships'] = $this->model('Ships_model')->getAllShips();
        $this->view('templates/header', $data);
        $data['user'] = $this->model('Auth_model')->getUser();
        if ($data['user']['level'] == 'admin') {
            $this->view('ship/index', $data);
        } else if ($data['user']['level'] == 'user') {
            $this->view('ship/user', $data);
        }
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Ships_model')->addShipsData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambah', 'success', 'Kapal');
            header('Location: ' . BASEURL . '/ships');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambah', 'danger', 'Kapal');
            header('Location: ' . BASEURL . '/ships');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Ships_model')->deleteShipsData($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'Kapal');
            header('Location: ' . BASEURL . '/ships');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'success', 'Kapal');
            header('Location: ' . BASEURL . '/ships');
            exit;
        }
    }

    public function    edit()
    {
        if ($this->model('Ships_model')->editShipsData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'Kapal');
            // echo "true";
            header('Location: ' . BASEURL . '/ships');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger', 'Kapal');
            // echo "false";
            header('Location: ' . BASEURL . '/ships');
            exit;
        }
    }

    public function orders($id = null)
    {
        if (isset($id)) {
            $data['title'] = 'Ships - orders';
            $data['res']['ships'] = $this->model('Ships_model')->getShipsById($id);
            if (!$data['res']['ships']) {
                exit(header('Location: ' . BASEURL . '/ships/orders'));
            }
            $this->view('templates/header', $data);
            $this->view('ship/orders', $data);
            $this->view('templates/footer');
            if (isset($_POST['jumlah'])) {
                if ($this->model('Orders_model')->addOrdersData($_POST, 'pelayaran') > 0) {
                    // header('Location: '.BASEURL.'/invoice');
                    // exit;
                }
            }
        } else {
            $this->index();
        }
    }
}
