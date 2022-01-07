<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends Front_Controller {
	
	public function index()
	{   
	  if($this->input->post()){
	      $path='';
	      if(!empty($_FILES['material1']) && $_FILES['material1']['size'] > 0){
                    $file_upload = single_file_upload($_FILES['material1'],'./uploads/brief_files');
                    if(is_array($file_upload)){            
                        $this->session->set_flashdata('error', $file_upload);
                    }else{
                        
                    }
                    $path='https://technosavvyllc.com/brief/uploads/brief_files/'.$file_upload;
                } 
               

	        $section['body'] = '<table width=100%>';
            $section['body'] .='<tr><td><strong> Business/organization :</strong> '.$this->input->post('webname').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> State the purpose of your website : </strong>'.$this->input->post('additionalcomment1').'<br><td></tr>';
            $section['body'] .='<tr><td><strong>Company Profile : </strong>'.$this->input->post('additionalcomment2').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> What type ? : </strong>'.$this->input->post('additionalcomment3').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> brief description : </strong>'.$this->input->post('additionalcomment4').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> State the target : </strong>'.$this->input->post('additionalcomment5').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Do you have any specific design : </strong>'.$this->input->post('additionalcomment6').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Do you have any additional comments : </strong>'.$this->input->post('additionalcomment7').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Do you have a Domain Name : </strong>'.$this->input->post('nodomname1').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Do you want us to provide hosting : </strong>'.$this->input->post('wanthostyes1').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Name : </strong>'.$this->input->post('custname').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Phone : </strong>'.$this->input->post('custphone').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Email: </strong>'.$this->input->post('custemail').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> File Attchments: </strong>'.$path.'<br><td></tr>';

      
            
		
			$section['body'].= '</table>';
		
			$section['subject'] = 'Welcome to Techno Savvy';
			$body = $this->load->view('front/email/template',$section, TRUE);
			//$result = send_email($this->input->post('custemail'),'New Client Registration',$body);
			 send_email_attch('info@technosavvyllc.com',$this->input->post('custemail'),'Website Brief',$body);//info@outsourceinpakistan.com
			 redirect("/");
			
	
			
	    }
	    else{
	    
	        $content['app']='website';
	        $this->load->view("front/layout/app",$content);
	    }
	        
	    }

}
