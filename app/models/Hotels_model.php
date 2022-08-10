<?php

class Hotels_model
{
    private $db;
    private $table = 'hotel';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllHotels()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getHotelsById($id){
        $this->db->query("SELECT * FROM {$this->table} WHERE id_hotel = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addHotelsData($data)
    {
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];

        if (empty($img)) {
            $query = "INSERT INTO {$this->table}
                        VALUES
                        (null,:nama_hotel,:deskripsi,:fasilitas,:bintang)";
            $this->db->query($query);
            $this->db->bind('nama_hotel', $data['nama_hotel']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('fasilitas', $data['fasilitas']);
            $this->db->bind('bintang', $data['bintang']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $extension = explode('.', $_FILES['img']['name']);
            $img = 'img-' . round(microtime(true)) . '.' . end($extension);
            $tmp = $_FILES['img']['tmp_name'];

            $query = "INSERT INTO {$this->table}
            VALUES
            (null,:nama_hotel,:deskripsi,:fasilitas,:bintang,:gambar)";
            $this->db->query($query);
            $this->db->bind('nama_hotel', $data['nama_hotel']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('fasilitas', $data['fasilitas']);
            $this->db->bind('bintang', $data['bintang']);
            $this->db->bind('gambar', $img);
            $this->db->execute();

            move_uploaded_file($tmp, 'img/' . $img);
            return $this->db->rowCount();
        }
    }

    public function deleteHotelsData($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id_hotel = :id_hotel";
        $this->db->query($query);
        $this->db->bind('id_hotel', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editHotelsData($data)
    {
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];

        if (empty($img)) {
            $query = "UPDATE {$this->table} SET
            nama_hotel = :nama_hotel,
            deskripsi = :deskripsi,
            fasilitas = :fasilitas,
            bintang = :bintang
            WHERE id_hotel = :id_hotel";
            $this->db->query($query);
            $this->db->bind('nama_hotel', $data['nama_hotel']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('fasilitas', $data['fasilitas']);
            $this->db->bind('bintang', $data['bintang']);
            $this->db->bind('id_hotel', $data['id_hotel']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $extension = explode('.', $_FILES['img']['name']);
            $img = 'img-' . round(microtime(true)) . '.' . end($extension);
            $tmp = $_FILES['img']['tmp_name'];
            $query = "UPDATE {$this->table} SET
            nama_hotel = :nama_hotel,
            deskripsi = :deskripsi,
            fasilitas = :fasilitas,
            bintang = :bintang,
            gambar = :gambar
            WHERE id_hotel = :id_hotel";
            $this->db->query($query);
            $this->db->bind('nama_hotel', $data['nama_hotel']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('fasilitas', $data['fasilitas']);
            $this->db->bind('bintang', $data['bintang']);
            $this->db->bind('gambar', $img);
            $this->db->bind('id_hotel', $data['id_hotel']);
            $this->db->execute();

            move_uploaded_file($tmp, 'img/' . $img);
            return $this->db->rowCount();
        }
    }
}
