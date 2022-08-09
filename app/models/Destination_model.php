<?php 

class Destination_model {
	private $db;
	private $table = 'destinasi';

	public function __construct(){
		$this->db = new Database;
	}

	public function getAllDestination(){
		$this->db->query("SELECT * FROM {$this->table}");
		return $this->db->resultSet();
	}
    public function addDestination($data){
        
        $extensi = explode("." ,$_FILES['gambar']['name']);
        $gbr = "imgDesti". round(microtime(true)) . "." .end($extensi);
        $tmpt = $_FILES['gambar']['tmp_name'];
        $upload = move_uploaded_file($tmpt,"img/" . $gbr);

        if ($upload) {
            $query = "INSERT INTO {$this->table} VALUES (null,:nama_destinasi,:lokasi,:tiket_masuk,:deskripsi,:gambar)";
            $this->db->query($query);
            $this->db->bind('nama_destinasi',$data['nama_destinasi']);
            $this->db->bind('lokasi',$data['lokasi']);
            $this->db->bind('tiket_masuk',$data['tiket_masuk']);
            $this->db->bind('deskripsi',$data['deskripsi']);
            $this->db->bind('gambar',$gbr);
            $this->db->execute();
            return $this->db->rowCount();
        }else{
            $query = "INSERT INTO {$this->table} VALUES (null,:nama_destinasi,:lokasi,:tiket_masuk,:deskripsi,:gambar)";
            $this->db->query($query);
            $this->db->bind('nama_destinasi',$data['nama_destinasi']);
            $this->db->bind('lokasi',$data['lokasi']);
            $this->db->bind('tiket_masuk',$data['tiket_masuk']);
            $this->db->bind('deskripsi',$data['deskripsi']);
            $this->db->bind('gambar','default.jpg');
            $this->db->execute();
            return $this->db->rowCount();
        }  
    }

    public function deleteDestination($id){
		$query = "DELETE FROM {$this->table} WHERE id_destinasi = :id_destinasi";
		$this->db->query($query);
		$this->db->bind('id_destinasi', $id);
		$this->db->execute();
		return $this->db->rowCount();
	}

    public function editDestination($data)
    {
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];

        if (empty($img)) {
            $query = "UPDATE {$this->table} SET
				nama_destinasi = :nama_destinasi,
				lokasi = :lokasi,
				tiket_masuk = :tiket_masuk,
				deskripsi = :deskripsi
				WHERE id_destinasi = :id_destinasi";
            $this->db->query($query);
            $this->db->bind('nama_destinasi', $data['nama_destinasi']);
            $this->db->bind('lokasi', $data['lokasi']);
            $this->db->bind('tiket_masuk', $data['tiket_masuk']);
            $this->db->bind('deskripsi', $data['deskripsi']);
			$this->db->bind('id_destinasi', $data['id_destinasi']);
            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $extension = explode('.', $_FILES['img']['name']);
            $img = 'img-' . round(microtime(true)) . '.' . end($extension);
            $tmp = $_FILES['img']['tmp_name'];
            $query = "UPDATE {$this->table} SET
				nama_destinasi = :nama_destinasi,
				lokasi = :lokasi,
				tiket_masuk = :tiket_masuk,
				deskripsi = :deskripsi,
				gambar = :gambar
				WHERE id_destinasi = :id_destinasi";
            $this->db->query($query);
            $this->db->bind('nama_destinasi', $data['nama_destinasi']);
            $this->db->bind('lokasi', $data['lokasi']);
            $this->db->bind('tiket_masuk', $data['tiket_masuk']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('gambar', $img);
            $this->db->bind('id_destinasi', $data['id_destinasi']);
            $this->db->execute();

            move_uploaded_file($tmp, 'img/' . $img);
            return $this->db->rowCount();
        }
    }
}