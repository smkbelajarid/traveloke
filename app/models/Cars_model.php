<?php

class Cars_model
{
	private $db;
	private $table = 'mobil';

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllCars()
	{
		$this->db->query("SELECT * FROM {$this->table}");
		return $this->db->resultSet();
	}

	public function getCarsById($id)
	{
		$this->db->query("SELECT * FROM {$this->table} WHERE id_mobil = :id_mobil");
		$this->db->bind('id_mobil', $id);
		return $this->db->single();
	}

	public function addCarsData($data)
	{
		$img = $_FILES['img']['name'];
		$tmp = $_FILES['img']['tmp_name'];

		if (empty($img)) {
			$query = "INSERT INTO {$this->table}
						(id_mobil, tipe_mobil, merk_mobil, jumlah_kursi, harga)
						VALUES
						(null,:tipe_mobil,:merk_mobil,:jumlah_kursi,:harga)";
			$this->db->query($query);
			$this->db->bind('tipe_mobil', $data['tipe_mobil']);
			$this->db->bind('merk_mobil', $data['merk_mobil']);
			$this->db->bind('jumlah_kursi', $data['jumlah_kursi']);
			$this->db->bind('harga', $data['harga']);
			$this->db->execute();
			return $this->db->rowCount();
		} else {
			$extension = explode('.', $_FILES['img']['name']);
			$img = 'img-' . round(microtime(true)) . '.' . end($extension);
			$tmp = $_FILES['img']['tmp_name'];

			$query = "INSERT INTO {$this->table}
						(id_mobil, tipe_mobil, merk_mobil, jumlah_kursi, harga, image)
						VALUES
						(null,:tipe_mobil,:merk_mobil,:jumlah_kursi,:harga,:image)";
			$this->db->query($query);
			$this->db->bind('tipe_mobil', $data['tipe_mobil']);
			$this->db->bind('merk_mobil', $data['merk_mobil']);
			$this->db->bind('jumlah_kursi', $data['jumlah_kursi']);
			$this->db->bind('harga', $data['harga']);
			$this->db->bind('image', $img);
			$this->db->execute();
			move_uploaded_file($tmp, 'img/' . $img);
			return $this->db->rowCount();
		}
	}

	public function deleteCarsData($id)
	{
		$query = "DELETE FROM {$this->table} WHERE id_mobil = :id_mobil";
		$this->db->query($query);
		$this->db->bind('id_mobil', $id);
		$this->db->execute();
		return $this->db->rowCount();
	}

	public function editCarsData($data)
	{
		$image = $_FILES['img']['name'];
		$tmp = $_FILES['img']['tmp_name'];

		if (empty($image)) {
			$query = "UPDATE {$this->table} SET
						tipe_mobil = :tipe_mobil,
						merk_mobil = :merk_mobil,
						jumlah_kursi = :jumlah_kursi,
						harga = :harga
						WHERE id_mobil = :id_mobil";
			$this->db->query($query);
			$this->db->bind('tipe_mobil', $data['tipe_mobil']);
			$this->db->bind('merk_mobil', $data['merk_mobil']);
			$this->db->bind('jumlah_kursi', $data['jumlah_kursi']);
			$this->db->bind('harga', $data['harga']);
			$this->db->bind('id_mobil', $data['id_mobil']);
			$this->db->execute();
			return $this->db->rowCount();
		} else {
			$extension = explode('.', $_FILES['img']['name']);
			$image = 'img-' . round(microtime(true)) . '.' . end($extension);
			$tmp = $_FILES['img']['tmp_name'];

			$query = "UPDATE {$this->table} SET
						tipe_mobil = :tipe_mobil,
						merk_mobil = :merk_mobil,
						jumlah_kursi = :jumlah_kursi,
						harga = :harga,
						image = :image
						WHERE id_mobil = :id_mobil";
			$this->db->query($query);
			$this->db->bind('tipe_mobil', $data['tipe_mobil']);
			$this->db->bind('merk_mobil', $data['merk_mobil']);
			$this->db->bind('jumlah_kursi', $data['jumlah_kursi']);
			$this->db->bind('harga', $data['harga']);
			$this->db->bind('image', $image);
			$this->db->bind('id_mobil', $data['id_mobil']);
			$this->db->execute();
			move_uploaded_file($tmp, 'img/' . $image);
			return $this->db->rowCount();
		}
	}
}
