<?php

class Orders extends Controller
{
    public function index()
    {
        if (!$this->model('Auth_model')->isLoggedIn()){
            header('Location: '.BASEURL.'/login');
        }
        $data['title'] = 'Orders';
        $data['orders'] = $this->model('Orders_model')->getAllOrders();
        $this->view('templates/header', $data);
        $this->view('orders/index', $data);
        $this->view('templates/footer');
    }

    public function get($id)
    {
        $data['res'] = $this->model('Orders_model')->getOrdersByIdCars($id);
        var_dump($data['res']);
    }

    public function cars()
    {
        if ($this->model('Orders_model')->addOrdersData($_POST, 'mobil') > 0) {
            echo "sukses";
        };
        $data['cars'] = $this->model('Cars_model')->getCarsById($_POST['id_mobil']);
        $data['orders'] = $this->model('Orders_model')->getOrdersByIdCars($_POST['id_mobil']);
        $data['title'] = 'Cars';
        $this->view('templates/header', $data);
        $this->view('orders/cars', $data);
        $this->view('templates/footer');
    }

    public function flights()
    {
        if ($this->model('Orders_model')->addOrdersData($_POST, 'penerbangan') > 0) {
            echo "sukses";
        };
        $data['flights'] = $this->model('Flights_model')->getFlightsById($_POST['id_penerbangan']);
        $data['orders'] = $this->model('Orders_model')->getOrdersByIdFlights($_POST['id_penerbangan']);
        $data['title'] = 'Flights';
        $this->view('templates/header', $data);
        $this->view('orders/flights', $data);
        $this->view('templates/footer');
    }

    public function ships()
    {
        if ($this->model('Orders_model')->addOrdersData($_POST, 'pelayaran') > 0) {
            echo "sukses";
        };
        $data['cars'] = $this->model('Ships_model')->getShipsById($_POST['id_pelayaran']);
        $data['orders'] = $this->model('Orders_model')->getOrdersByIdShips($_POST['id_pelayaran']);
        $data['title'] = 'Ships';
        $this->view('templates/header', $data);
        $this->view('orders/ships', $data);
        $this->view('templates/footer');
    }

    public function rooms()
    {
        if ($this->model('Orders_model')->addOrdersData($_POST, 'kamar') > 0) {
            echo "sukses";
        };
        $data['rooms'] = $this->model('Rooms_model')->getRoomsById($_POST['id_kamar']);
        $data['orders'] = $this->model('Orders_model')->getOrdersByIdRooms($_POST['id_kamar']);
        $data['title'] = 'Rooms';
        $this->view('templates/header', $data);
        $this->view('orders/rooms', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Orders_model')->addOrdersData($_POST) > 0) {
            header('Location: ' . BASEURL . '/orders');
            exit;
        } else {
            header('Location: ' . BASEURL . '/orders');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Orders_model')->deleteOrdersData($id) > 0) {
            header('Location: ' . BASEURL . '/orders');
            exit;
        } else {
            header('Location: ' . BASEURL . '/orders');
            exit;
        }
    }

    public function edit()
    {
        if ($this->model('Orders_model')->editOrdersData($_POST) > 0) {
            // echo "true";
            header('Location: ' . BASEURL . '/orders');
            exit;
        } else {
            // echo "false";
            header('Location: ' . BASEURL . '/orders');
            exit;
        }
    }
}
