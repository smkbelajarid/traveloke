<?php

/**
 * 
 */
class Invoice_model
{
	private $db;
	private $table = 'pemesanan';
	
	function __construct()
	{
		$this->db = new Database;
	}

	function getAllInvoice($id){
		$this->db->query("SELECT * FROM {$this->table} WHERE id_user = :id");
		$this->db->bind('id', $id);
		return $this->db->resultSet();
	}

	function getRecentCars($id){
		$this->db->query("SELECT * FROM {$this->table} INNER JOIN mobil on {$this->table}.id_mobil = mobil.id_mobil WHERE id_user = :id");
		$this->db->bind('id', $id);
		return $this->db->resultSet();
	}

	function getRecentRooms($id){
		$this->db->query("SELECT * FROM {$this->table} INNER JOIN kamar on {$this->table}.id_kamar = kamar.id_kamar WHERE id_user = :id");
		$this->db->bind('id', $id);
		return $this->db->resultSet();
	}

	function getRecentFlights($id){
		$this->db->query("SELECT * FROM {$this->table} INNER JOIN penerbangan on {$this->table}.id_penerbangan = penerbangan.id_penerbangan WHERE id_user = :id");
		$this->db->bind('id', $id);
		return $this->db->resultSet();
	}

	function getRecentShips($id){
		$this->db->query("SELECT * FROM {$this->table} INNER JOIN pelayaran on {$this->table}.id_pelayaran = pelayaran.id_pelayaran WHERE id_user = :id");
		$this->db->bind('id', $id);
		return $this->db->resultSet();
	}
}