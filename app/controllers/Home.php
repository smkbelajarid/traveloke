<?php 

class Home extends Controller {
    public function index()
    {
        if (!$this->model('Auth_model')->isLoggedIn()){
            header('Location: '.BASEURL.'/login');
        }
        $data['title'] = 'Dashboard';
        $data['user'] = $this->model('Auth_model')->getUser();
        if ($data['user']['level'] == 'user'){
            $this->model('Invoice_model')->getCount($_SESSION['user_session']);
        } else {
            $this->model('Home_model')->getCount();
        }
        $this->view('templates/header', $data);
        if ($data['user']['level'] == 'admin'){
            $this->view('home/index', $data);
        } else if ($data['user']['level'] == 'user') {
            $this->view('home/user', $data);
        }
        $this->view('templates/footer');
    }
}