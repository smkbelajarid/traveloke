<?php

/**
 * 
 */
class Flights extends Controller
{

    public function index()
    {
        if (!$this->model('Auth_model')->isLoggedIn()) {
            header('Location: ' . BASEURL . '/login');
        }
        $data['title'] = 'flights';
        $data['res']['flights'] = $this->model('Flights_model')->getAllFlights();
        $this->view('templates/header', $data);
        $data['user'] = $this->model('Auth_model')->getUser();
        if ($data['user']['level'] == 'admin') {
            $this->view('flights/index', $data);
        } else if ($data['user']['level'] == 'user') {
            $this->view('flights/user', $data);
        }
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Flights_model')->addFlightsData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambah', 'success', 'penerbangan');
            header('Location: ' . BASEURL . '/flights');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambah', 'danger', 'penerbangan');
            header('Location: ' . BASEURL . '/flights');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Flights_model')->deleteFlightsData($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success', 'penerbangan');
            header('Location: ' . BASEURL . '/flights');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger', 'penerbangan');
            header('Location: ' . BASEURL . '/flights');
            exit;
        }
    }

    public function edit()
    {
        if ($this->model('Flights_model')->editFlightsData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success', 'penerbangan');
            // echo "true";
            header('Location: ' . BASEURL . '/flights');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger', 'penerbangan');
            // echo "false";
            header('Location: ' . BASEURL . '/flights');
            exit;
        }
    }

    public function orders($id = null)
    {
        if (isset($id)) {
            $data['title'] = 'Flights - orders';
            $data['res']['flights'] = $this->model('Flights_model')->getFlightsById($id);
            if (!$data['res']['flights']) {
                exit(header('Location: ' . BASEURL . '/flights/orders'));
            }
            $this->view('templates/header', $data);
            $this->view('flights/orders', $data);
            $this->view('templates/footer');
            if (isset($_POST['jumlah'])) {
                if ($this->model('Orders_model')->addOrdersData($_POST, 'penerbangan') > 0) {
                    // header('Location: '.BASEURL.'/invoice');
                    // exit;
                }
            }
        } else {
            $this->index();
        }
    }
}
