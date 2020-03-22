<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {
	public function __construct()
  	{
  	  parent::__construct();
  	  $this->load->model('Modelmkn');
  	  
  	}

	public function index()
	{
	
	}
	public function tampilan()
	{	
		$q= $this->Modelmkn->get_makanan()->result();
		$data['makanan'] =$q;
		$this->load->view('tampilan',$data);
	}
	
	public function tambah()
	{
		$data= array(
			'id_makanan' =>$this->input->post('id_makanan') , 
			'nama_makanan' =>$this->input->post('nama_makanan') , 
			'harga_makanan' =>$this->input->post('harga_makanan') , 

		);
		if (!empty($_FILES['foto_makanan']['name'])) {
     	$config['upload_path']    ='./foto/';
     	$config['allowed_types']  ='gif|jpg|jpeg|png|jfif';
     	$config['encrypt_name']   =TRUE;
     	$config['max_size']       =2000;
     	$this->load->library('upload', $config);
     	if(! $this->upload->do_upload('foto_makanan'))
     	{
     	  print_r($this->upload->display_errors());
     	  return;
     	}
     	else
     	{
     	  $data['foto_makanan'] = $this->upload->data('file_name');
     	}
     	$q = $this->Modelmkn->tambah($data);
     	if($q){
     	  return redirect(base_url('Modelmkn/tampilan'));
     	}
     	echo $q;
	}

 	
}
}