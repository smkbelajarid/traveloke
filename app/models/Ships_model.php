<?php

class Ships_model
{
    private $db;
    private $table = 'pelayaran';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllShips()
    {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function getShipsById($id){
        $this->db->query("SELECT * FROM {$this->table} WHERE id_pelayaran = :id_pelayaran");
        $this->db->bind('id_pelayaran', $id);
        return $this->db->single();
    }

    public function addShipsData($data)
    {
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];

        if (empty($img)) {
            $query = "INSERT INTO {$this->table}
                        (id_pelayaran, kelas_pelayaran, maskapai_pelayaran, harga)
                        VALUES
                        (null,:kelas_pelayaran,:maskapai_pelayaran,:harga)";
            $this->db->query($query);
            $this->db->bind('kelas_pelayaran', $data['kelas_pelayaran']);
            $this->db->bind('maskapai_pelayaran', $data['maskapai_pelayaran']);
            $this->db->bind('harga', $data['harga']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $extension = explode('.', $_FILES['img']['name']);
            $img = 'img-' . round(microtime(true)) . '.' . end($extension);
            $tmp = $_FILES['img']['tmp_name'];

            $query = "INSERT INTO {$this->table}
            VALUES
            (null,:kelas_pelayaran,:maskapai_pelayaran,:harga,:gambar)";
            $this->db->query($query);
            $this->db->bind('kelas_pelayaran', $data['kelas_pelayaran']);
            $this->db->bind('maskapai_pelayaran', $data['maskapai_pelayaran']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('gambar', $img);
            $this->db->execute();

            move_uploaded_file($tmp, 'img/' . $img);
            return $this->db->rowCount();
        }
    }

    public function deleteShipsData($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id_pelayaran = :id_pelayaran";
        $this->db->query($query);
        $this->db->bind('id_pelayaran', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function editShipsData($data)
    {
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];

        if (empty($img)) {
            $query = "UPDATE {$this->table} SET
            kelas_pelayaran = :kelas_pelayaran,
            maskapai_pelayaran = :maskapai_pelayaran,
            harga = :harga
            WHERE id_pelayaran = :id_pelayaran";
            $this->db->query($query);
            $this->db->bind('kelas_pelayaran', $data['kelas_pelayaran']);
            $this->db->bind('maskapai_pelayaran', $data['maskapai_pelayaran']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('id_pelayaran', $data['id_pelayaran']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $extension = explode('.', $_FILES['img']['name']);
            $img = 'img-' . round(microtime(true)) . '.' . end($extension);
            $tmp = $_FILES['img']['tmp_name'];
            $query = "UPDATE {$this->table} SET
            kelas_pelayaran = :kelas_pelayaran,
            maskapai_pelayaran = :maskapai_pelayaran,
            harga = :harga,
            gambar = :gambar
            WHERE id_pelayaran = :id_pelayaran";
            $this->db->query($query);
            $this->db->bind('kelas_pelayaran', $data['kelas_pelayaran']);
            $this->db->bind('maskapai_pelayaran', $data['maskapai_pelayaran']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('gambar', $img);
            $this->db->bind('id_pelayaran', $data['id_pelayaran']);
            $this->db->execute();

            move_uploaded_file($tmp, 'img/' . $img);
            return $this->db->rowCount();
        }
    }
}
