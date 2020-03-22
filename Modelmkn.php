<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelmkn extends CI_Model {
	public function __construct()
	{
	  parent::__construct();
	  //Codeigniter : Write Less Do More
	}
	public function get_makanan()
	{
	  return $this->db->get_where('tb_makanan');
	}
	public function tambah($data){
	return $this->db->insert('tb_makanan',$data);	
	  
	}
	


}