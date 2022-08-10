<?php

/**
 * 	
 */
class Home_model
{
	private	$db;
	function __construct()
	{
		$this->db = new Database;
	}

	function getCount(){
		$this->db->query("SELECT * FROM mobil");
		$this->db->execute();
		$_SESSION['count_cars'] = $this->db->rowCount();

		$this->db->query("SELECT * FROM hotel");
		$this->db->execute();
		$_SESSION['count_hotels'] = $this->db->rowCount();

		$this->db->query("SELECT * FROM kamar");
		$this->db->execute();
		$_SESSION['count_rooms'] = $this->db->rowCount();

		$this->db->query("SELECT * FROM penerbangan");
		$this->db->execute();
		$_SESSION['count_flights'] = $this->db->rowCount();

		$this->db->query("SELECT * FROM	pelayaran");
		$this->db->execute();
		$_SESSION['count_ships'] = $this->db->rowCount();

		$this->db->query("SELECT * FROM	destinasi");
		$this->db->execute();
		$_SESSION['count_destination'] = $this->db->rowCount();

		$this->db->query("SELECT * FROM users WHERE	level='user'");
		$this->db->execute();
		$_SESSION['count_users'] = $this->db->rowCount();

		$this->db->query("SELECT * FROM pemesanan");
		$this->db->execute();
		$_SESSION['count_orders'] = $this->db->rowCount();
		return true;
	}

}