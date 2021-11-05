	
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Uploads extends CI_Controller {
 
	function create()
	{
		$this->load->view('form_upload');
    }
}