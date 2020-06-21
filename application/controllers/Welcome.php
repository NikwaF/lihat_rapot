<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}


	public function get_value()
	{
		$nis = $this->input->post('nis');
		// $nis= "2888/276.004";

		$sql = "select * from nilainya where nis='".$nis."'";
		$query = $this->db->query($sql)->row();
		
		$final = ['code' => 1];
		
		if($query === null){
			$final = ['code' => 0];

			echo json_encode($final);
			return;
		}

		$final['datanya'] = $query;
		echo json_encode($final);
	}
}
