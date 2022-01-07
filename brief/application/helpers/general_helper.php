<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('findcountry')){
    function findcountry(){
        
        $ip = $_SERVER['REMOTE_ADDR'];
        $lead_user_agent_details = file_get_contents('http://ip-api.com/json/'.$ip);
        
        return $lead_user_agent_details;
        
    }    
}


if(!function_exists('single_image_upload')){
	function single_image_upload($image,$path){
		$_FILES['image']['name']= $image['name'];
		$_FILES['image']['type']= $image['type'];
		$_FILES['image']['tmp_name']= $image['tmp_name'];
		$_FILES['image']['error']= $image['error'];
		$_FILES['image']['size']= $image['size']; 
		if(!file_exists($path)){
			mkdir($path, 0777, true);
		}
		$ci =& get_instance();
		$config['upload_path'] = ''.$path.'';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_width'] = '400000';
		$config['max_height'] = '400000';
		$ci->load->library('upload', $config);
		$ci->upload->initialize($config);
		if(!$ci->upload->do_upload('image')){ 
			return array('error' => $ci->upload->display_errors());
		}else{
			$file_detail = $ci->upload->data();				
			return	$file_detail['file_name'];			
		}
		return FALSE;
	}
}

if(!function_exists('multi_image_upload')){	
	function multi_image_upload($image,$index,$path){         
		$_FILES['image']['name']= $image['name'][$index];
		$_FILES['image']['type']= $image['type'][$index];
		$_FILES['image']['tmp_name']= $image['tmp_name'][$index];
		$_FILES['image']['error']= $image['error'][$index];
		$_FILES['image']['size']= $image['size'][$index];
		if(!file_exists($path)){
			mkdir($path, 0777, true);
		}
		$ci =& get_instance();
		$config['upload_path'] = ''.$path.'';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width'] = '400000';
		$config['max_height'] = '400000';
		$ci->load->library('upload', $config);
		$ci->upload->initialize($config);
		if(!$ci->upload->do_upload('image')){ 
			return array('error' => $ci->upload->display_errors());
		}else{
			$file_detail = $ci->upload->data();				
			return	$file_detail['file_name'];			
		}
		return FALSE;
	}
}

if(!function_exists('send_email')){	
	function send_email($send_to,$subject,$body){
		$ci =& get_instance();
		$config['mailtype'] ='html';
		$ci->email->set_header('Header1', 'Payment Information');
		$ci->email->initialize($config);    
// 		$ci->email->from($ci->settings_email_from,$ci->settings_site_title);
        $ci->email->from("jaffri@technosavvyllc.com","Techno Savvy");
        $ci->email->cc('ammar@technosavvyllc.com,jaffri@technosavvyllc.com,nabeel.baig@technado.co,sumbla.qaiser@technado.co');
		$ci->email->to($send_to);		
		$ci->email->subject($subject);
		$ci->email->message($body);

		if($ci->email->send()){
			return TRUE;	
		}else{
			return FALSE;
		}
	}
}

if(!function_exists('send_email_attch')){	
	function send_email_attch($send_to,$from,$subject,$body){
		$ci =& get_instance();
		$config['mailtype'] ='html';
		$ci->email->set_header('Header1', 'Payment Information');
		$ci->email->initialize($config);    
// 		$ci->email->from($ci->settings_email_from,$ci->settings_site_title);
        $ci->email->from($from,"Techno Savvy");
        $ci->email->cc('ammar@technosavvyllc.com,jaffri@technosavvyllc.com,nabeel.baig@technado.co,sumbla.qaiser@technado.co');
		$ci->email->to($send_to);		
		$ci->email->subject($subject);
		$ci->email->message($body);
		
		//$ci->email->attach($attchment);
		if($ci->email->send()){
			return TRUE;	
		}else{
			return FALSE;
		}
	}
}

if (!function_exists('limit_text'))
{
	function limit_text($count,$text)
	{
		$result = strlen($text)>$count?substr($text, 0, $count).'...':$text;
		return $result;
	} 
}


	if (!function_exists('get_single_field'))
	{
		function get_single_field($tabel="",$where="",$field="")		
		{	
			$ci =& get_instance();
			$result = $ci->general->get_single_field($tabel,$where,$field);
			if($result){			
				return $result;
			}else{
				return FALSE;
			}	
		}	
	}


if (!function_exists('get_files_list'))
{
	function get_files_list($directory)
	{
		if ($handle = opendir($directory)) {
			$result = array();
			while (false !== ($entry = readdir($handle))) {

				if ($entry != "." && $entry != "..") {

					array_push($result,$entry);
				}
			}

			closedir($handle);
			return $result;
		}
	}	
}


if (!function_exists('get_templates'))
{
	function get_templates()
	{
		$result = array();
		$list = get_files_list('application/views/front/template'); 
		foreach($list as $val){
			array_push($result,str_replace('.php','',$val));
		}

		return $result;
	}	
}


if (!function_exists('dd')) {
	function dd($data, $die = true)
	{
		echo '<pre>';
		echo 'PRINT VIEW <br>------------------------------------<br>';
		echo '<br>Count: "'; echo count($data); echo '" <br>'; 
		print_r($data);
  
		echo '<br>';
		echo '<br>VARDUMP VIEW <br>------------------------------------<br>';
		var_dump($data);
		echo '<br>------------------------------------<br>';
		echo '</pre>';
		if($die == true){
			exit;
		}
	}
  }
  if(!function_exists('single_file_upload')){	
	function single_file_upload($image,$path){         
		$_FILES['image']['name']= $image['name'];
		$_FILES['image']['type']= $image['type'];
		$_FILES['image']['tmp_name']= $image['tmp_name'];
		$_FILES['image']['error']= $image['error'];
		$_FILES['image']['size']= $image['size']; 
		if(!file_exists($path)){
			mkdir($path, 0777, true);
		}
		$ci =& get_instance();
		$config['upload_path'] = ''.$path.'';
		$config['allowed_types'] = 'xlsx|docx|pdf|txt';
		$config['max_width'] = '400000';
		$config['max_height'] = '400000';
		$ci->load->library('upload', $config);
		$ci->upload->initialize($config);
		if(!$ci->upload->do_upload('image')){ 
			return array('error' => $ci->upload->display_errors());
		}else{
			$file_detail = $ci->upload->data();				
			return	$file_detail['file_name'];			
		}
		return FALSE;
	}
}
