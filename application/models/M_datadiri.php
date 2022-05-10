<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class M_datadiri extends CI_model
{
	
	public function getdatadiri()
	{
		// cara 1
		return $this->db->get('tbl_datadiri',1)->row();

		// cara 2
		// $this->db->select()

		// cara 3
	}
	public function getdataorganisasi()
	{
		return $this->db->get('tbl_organisasi');
	}
	public function getdatakeahlian()
	{
		return $this->db->get('tbl_keahlian');
	}
}