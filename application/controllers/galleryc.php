<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galleryc extends CI_controller {

  public function index()
  {
    $data['konten']="gallery";
$this->load->view('template', $data);
	}
}
 ?>
