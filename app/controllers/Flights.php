<?php

/**
 * 
 */
class Flights extends Controller
{

    public function index()
    {
        if (!$this->model('Auth_model')->isLoggedIn()){
            header('Location: '.BASEURL.'/login');
        }
        $data['title'] = 'flights';
        $data['flights'] = $this->model('Flights_model')->getAllFlights();
        $this->view('templates/header', $data);
        $this->view('flights/index', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Flights_model')->addFlightsData($_POST) > 0) {
            Flasher::setFlash('berhasil','ditambah','success','penerbangan');
            header('Location: ' . BASEURL . '/flights');
            exit;
        } else {
            Flasher::setFlash('gagal','ditambah','danger','penerbangan');
            header('Location: ' . BASEURL . '/flights');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Flights_model')->deleteFlightsData($id) > 0) {
            Flasher::setFlash('berhasil','dihapus','success','penerbangan');
            header('Location: ' . BASEURL . '/flights');
            exit;
        } else {
            Flasher::setFlash('gagal','dihapus','danger','penerbangan');
            header('Location: ' . BASEURL . '/flights');
            exit;
        }
    }

    public function edit()
    {
        if ($this->model('Flights_model')->editFlightsData($_POST) > 0) {
            Flasher::setFlash('berhasil','diubah','success','penerbangan');
            // echo "true";
            header('Location: ' . BASEURL . '/flights');
            exit;
        } else {
            Flasher::setFlash('gagal','diubah','danger','penerbangan');
            // echo "false";
            header('Location: ' . BASEURL . '/flights');
            exit;
        }
    }

    public function orders()
    {
        $data['title'] = 'Flights';
        $data['flights'] = $this->model('Flights_model')->getAllFlights();
        $this->view('templates/header', $data);
        $this->view('flights/orders', $data);
        $this->view('templates/footer');
    }
}
