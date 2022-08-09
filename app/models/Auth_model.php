<?php

class Auth_model {
    private $db;
    private $table = 'users';
    public $error;

    function __construct(){
        $this->db = new Database;
        // session_start();
    }

    public function register($data){
        if (isset($data['name']) && isset($data['username']) && isset($data['email']) && isset($data['phone']) && isset($data['password']) && isset($data['password2'])){
            if ($data['password'] != $data['password2']){
                $this->error = "Password tidak sama!";
                return false;
            } else {
                try {
                    $hashPasswd = password_hash($data['password'], PASSWORD_DEFAULT);
                    $this->db->query("INSERT INTO {$this->table} 
                        (id_user, level, name, username, email, phone, password)
                        VALUES
                        (null, 'user', :name, :username, :email, :phone, :password)");
                    $this->db->bind("name", $data['name']);
                    $this->db->bind("username", $data['username']);
                    $this->db->bind("email", $data['email']);
                    $this->db->bind("phone", $data['phone']);
                    $this->db->bind("password", $hashPasswd);
                    $this->db->execute();
                    // $this->db->rowCount();
                    return true;
                } catch (PDOException $e) {
                    if ($e->errorInfo[0] == 23000) {
                        //errorInfor[0] berisi informasi error tentang query sql yg baru dijalankan 
                        //23000 adalah kode error ketika ada data yg sama pada kolom yg di set unique 
                        $this->error = "Email sudah digunakan!";
                        return false;
                    } else {
                        $this->error = $e->getMessage();
                        return false;
                    }
                }
            }
        } else {
            $this->error = "Please fill all field's!";
            return false;
        }
    }

    public function login($username, $password){
        try {
            $this->db->query('SELECT * FROM users WHERE username=:username');
            $this->db->bind('username', $username);
            $this->db->execute();
            $data = $this->db->single(); 
            //var_dump($data);
            if ($this->db->rowCount() > 0) {
                if (password_verify($password, $data['password'])) {
                // if ($password == $data['password']){
                    $_SESSION['user_session'] = $data['id_user'];
                    $this->error = $this->error;
                    return true;
                } else {
                    $this->error = "Email atau Password Salah";
                    $this->error = $this->error;
                    return false;
                }
            } else {
                $this->error = "Email atau Password Salah";
                $this->error = $this->error;
                return false;
            }
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    public function isLoggedIn(){
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function getUser(){
        if (!$this->isLoggedIn()) {
            return false;
        }
        try {
            $this->db->query("SELECT * FROM users WHERE id_user = :id");
            $this->db->bind("id", $_SESSION['user_session']);
            $this->db->execute();
            return $this->db->single();
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    public function logout(){
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }

    public function getLastError(){
        return $this->error;
    }
}