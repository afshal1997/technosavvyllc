<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderPreview extends Front_Controller {
	
	public function index()
	{   
	 
	// $content['main_content']='order-preview';
	 $this->load->view("front/order-preview");
	}

}
