<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang_control extends CI_Controller {


	public function index()
	{
        //echo  'hello panda';
        $this->template->load('template','barang');
	}
}