<?php

class Rooms_model
{
    private $db;
    private $table = 'kamar';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllRooms($id=null)
    {
        if (isset($id)){
            $this->db->query("SELECT * FROM hotel INNER JOIN {$this->table} ON hotel.id_hotel = {$this->table}.id_hotel WHERE hotel.id_hotel = :id");
            $this->db->bind('id', $id);
            return $this->db->resultSet();
        } else {
            $this->db->query("SELECT * FROM {$this->table}");
            return $this->db->resultSet();
        }
    }

    public function getRoomsById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_kamar = :id_kamar");
        $this->db->bind('id_kamar', $id);
        return $this->db->single();
    }

    public function addRoomsData($data)
    {
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];

        if (empty($img)) {
            $query = "INSERT INTO {$this->table}
                        VALUES
                        (null,:id_hotel,:tipe_kamar,:deskripsi,:harga)";
            $this->db->query($query);
            $this->db->bind('id_hotel', $data['id_hotel']);
            $this->db->bind('tipe_kamar', $data['tipe_kamar']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('harga', $data['harga']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $extension = explode('.', $_FILES['img']['name']);
            $img = 'img-' . round(microtime(true)) . '.' . end($extension);
            $tmp = $_FILES['img']['tmp_name'];

            $query = "INSERT INTO {$this->table}
            VALUES
            (null,:id_hotel,:tipe_kamar,:deskripsi,:harga,:gambar)";
            $this->db->query($query);
            $this->db->bind('id_hotel', $data['id_hotel']);
            $this->db->bind('tipe_kamar', $data['tipe_kamar']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('gambar', $img);
            $this->db->execute();

            move_uploaded_file($tmp, 'img/' . $img);
            return $this->db->rowCount();
        }
    }

    public function deleteRoomsData($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id_kamar = :id_kamar";
        $this->db->query($query);
        $this->db->bind('id_kamar', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editRoomsData($data)
    {
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];

        if (empty($img)) {
            $query = "UPDATE {$this->table} SET
            id_hotel = :id_hotel,
            tipe_kamar = :tipe_kamar,
            harga = :harga
            WHERE id_kamar = :id_kamar";
            $this->db->query($query);
            $this->db->bind('id_hotel', $data['id_hotel']);
            $this->db->bind('tipe_kamar', $data['tipe_kamar']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('id_kamar', $data['id_kamar']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $extension = explode('.', $_FILES['img']['name']);
            $img = 'img-' . round(microtime(true)) . '.' . end($extension);
            $tmp = $_FILES['img']['tmp_name'];
            $query = "UPDATE {$this->table} SET
            id_hotel = :id_hotel,
            tipe_kamar = :tipe_kamar,
            deskripsi = :deskripsi,
            harga = :harga,
            gambar = :gambar
            WHERE id_kamar = :id_kamar";
            $this->db->query($query);
            $this->db->bind('id_hotel', $data['id_hotel']);
            $this->db->bind('tipe_kamar', $data['tipe_kamar']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('gambar', $img);
            $this->db->bind('id_kamar', $data['id_kamar']);
            $this->db->execute();

            move_uploaded_file($tmp, 'img/' . $img);
            return $this->db->rowCount();
        }
    }
}
