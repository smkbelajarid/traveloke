<?php

class Flights_model
{
    private $db;
    private $table = 'penerbangan';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllFlights()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getFlightsById($id)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_penerbangan = :id_penerbangan");
        $this->db->bind('id_penerbangan', $id);
        return $this->db->single();
    }

    public function addFlightsData($data)
    {
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];

        if (empty($img)) {
            $query = "INSERT INTO {$this->table}
                        VALUES
                        (null,:kelas_penerbangan,:maskapai_penerbangan,:harga)";
            $this->db->query($query);
            $this->db->bind('kelas_penerbangan', $data['kelas_penerbangan']);
            $this->db->bind('maskapai_penerbangan', $data['maskapai_penerbangan']);
            $this->db->bind('harga', $data['harga']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $extension = explode('.', $_FILES['img']['name']);
            $img = 'img-' . round(microtime(true)) . '.' . end($extension);
            $tmp = $_FILES['img']['tmp_name'];

            $query = "INSERT INTO {$this->table}
            VALUES
            (null,:kelas_penerbangan,:maskapai_penerbangan,:harga,:gambar)";
            $this->db->query($query);
            $this->db->bind('kelas_penerbangan', $data['kelas_penerbangan']);
            $this->db->bind('maskapai_penerbangan', $data['maskapai_penerbangan']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('gambar', $img);
            $this->db->execute();

            move_uploaded_file($tmp, 'img/' . $img);
            return $this->db->rowCount();
        }
    }

    public function deleteFlightsData($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id_penerbangan = :id_penerbangan";
        $this->db->query($query);
        $this->db->bind('id_penerbangan', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editFlightsData($data)
    {
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];

        if (empty($img)) {
            $query = "UPDATE {$this->table} SET
            kelas_penerbangan = :kelas_penerbangan,
            maskapai_penerbangan = :maskapai_penerbangan,
            harga = :harga
            WHERE id_penerbangan = :id_penerbangan";
            $this->db->query($query);
            $this->db->bind('kelas_penerbangan', $data['kelas_penerbangan']);
            $this->db->bind('maskapai_penerbangan', $data['maskapai_penerbangan']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('id_penerbangan', $data['id_penerbangan']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $extension = explode('.', $_FILES['img']['name']);
            $img = 'img-' . round(microtime(true)) . '.' . end($extension);
            $tmp = $_FILES['img']['tmp_name'];
            $query = "UPDATE {$this->table} SET
            kelas_penerbangan = :kelas_penerbangan,
            maskapai_penerbangan = :maskapai_penerbangan,
            harga = :harga,
            gambar = :gambar
            WHERE id_penerbangan = :id_penerbangan";
            $this->db->query($query);
            $this->db->bind('kelas_penerbangan', $data['kelas_penerbangan']);
            $this->db->bind('maskapai_penerbangan', $data['maskapai_penerbangan']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('gambar', $img);
            $this->db->bind('id_penerbangan', $data['id_penerbangan']);
            $this->db->execute();

            move_uploaded_file($tmp, 'img/' . $img);
            return $this->db->rowCount();
        }
    }
}
