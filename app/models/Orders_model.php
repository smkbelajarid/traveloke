<?php

class Orders_model
{
    private $db;
    private $table = 'pemesanan';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addOrdersData($data, $type)
    {
        if ($type == 'mobil') {
            $total_harga = $data['jumlah'] * $data['harga'];
            $query = "INSERT INTO {$this->table}
                        (id_user, jenis_pesanan, hari_mulai, hari_selesai, jumlah, id_mobil, total_harga)
                        VALUES
                        (:id_user, :jenis_pesanan, :hari_mulai, :hari_selesai, :jumlah, :id_mobil ,:total_harga)";
            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('jenis_pesanan', $type);
            $this->db->bind('hari_mulai', $data['hari_mulai']);
            $this->db->bind('hari_selesai', $data['hari_selesai']);
            $this->db->bind('jumlah', $data['jumlah']);
            $this->db->bind('id_mobil', $data['id_mobil']);
            $this->db->bind('total_harga', $total_harga);
            $this->db->execute();
            return $this->db->rowCount();
        } elseif ($type == 'pelayaran') {
            $total_harga = $data['jumlah'] * $data['harga'];
            $query = "INSERT INTO {$this->table}
                        (id_user, jenis_pesanan, hari_mulai, hari_selesai, jumlah, id_pelayaran, total_harga)
                        VALUES
                        (:id_user, :jenis_pesanan, :hari_mulai, :hari_selesai, :jumlah, :id_pelayaran, :total_harga)";
            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('jenis_pesanan', $type);
            $this->db->bind('hari_mulai', $data['hari_mulai']);
            $this->db->bind('hari_selesai', $data['hari_selesai']);
            $this->db->bind('jumlah', $data['jumlah']);
            $this->db->bind('id_pelayaran', $data['id_pelayaran']);
            $this->db->bind('total_harga', $total_harga);
            $this->db->execute();
            return $this->db->rowCount();
        } elseif ($type == 'kamar') {
            $total_harga = $data['jumlah'] * $data['harga'];
            $query = "INSERT INTO {$this->table}
                        (id_user, jenis_pesanan, hari_mulai, hari_selesai, jumlah, id_kamar, total_harga)
                        VALUES
                        (:id_user, :jenis_pesanan, :hari_mulai, :hari_selesai, :jumlah, :id_kamar, :total_harga)";
            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('jenis_pesanan', $type);
            $this->db->bind('hari_mulai', $data['hari_mulai']);
            $this->db->bind('hari_selesai', $data['hari_selesai']);
            $this->db->bind('jumlah', $data['jumlah']);
            $this->db->bind('id_kamar', $data['id_kamar']);
            $this->db->bind('total_harga', $total_harga);
            $this->db->execute();
            return $this->db->rowCount();
        } elseif ($type == 'penerbangan') {
            $total_harga = $data['jumlah'] * $data['harga'];
            $query = "INSERT INTO {$this->table}
                        (id_user, jenis_pesanan, hari_mulai, hari_selesai, jumlah, id_penerbangan, total_harga)
                        VALUES
                        (:id_user, :jenis_pesanan, :hari_mulai, :hari_selesai, :jumlah, :id_penerbangan, :total_harga)";
            $this->db->query($query);
            $this->db->bind('id_user', $data['id_user']);
            $this->db->bind('jenis_pesanan', $type);
            $this->db->bind('hari_mulai', $data['hari_mulai']);
            $this->db->bind('hari_selesai', $data['hari_selesai']);
            $this->db->bind('jumlah', $data['jumlah']);
            $this->db->bind('id_penerbangan', $data['id_penerbangan']);
            $this->db->bind('total_harga', $total_harga);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }

    public function getCarsOrdersById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_mobil = :id_mobil");
        $this->db->bind('id_mobil', $id);
        return $this->db->single();
    }

    public function getOrdersByIdShips($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_pelayaran = :id_pelayaran");
        $this->db->bind('id_pelayaran', $id);
        return $this->db->single();
    }

    public function getOrdersByIdRooms($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_kamar = :id_kamar");
        $this->db->bind('id_kamar', $id);
        return $this->db->single();
    }

    public function getOrdersByIdFlights($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_penerbangan = :id_penerbangan");
        $this->db->bind('id_penerbangan', $id);
        return $this->db->single();
    }
}
