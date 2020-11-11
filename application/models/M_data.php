<?php

class M_data extends CI_Model
{
	// fungsi untuk mengambil data dari database
	function get_data($table)
	{
		return $this->db->get($table);
	}
}
