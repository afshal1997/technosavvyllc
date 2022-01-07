<?php 
$this->load->view('front/layout/header');
isset($app)?$this->load->view('front/'.$app):'';
$this->load->view('front/layout/footer');
?>