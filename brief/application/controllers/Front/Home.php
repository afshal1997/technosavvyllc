<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Front_Controller {
	
	public function index()
	{   
	    //echo getcwd();exit;
	    if($this->input->post()){
	        
	        
            $response['msg']="";
            $response['data']=$this->input->post();
            $response['status']=false;
            
            $helpproj_name = $this->input->post('helpproj_name');
            $helpproj_email = $this->input->post('helpproj_email');
            $helpproj_phone = $this->input->post('helpproj_phone');
            $helpproj_website = $this->input->post('helpproj_website');
            $helpproj_help = $this->input->post('helpproj_helpmsg');
            //$helpproj_file = $this->input->post('helpproj_file');
            
            $this->form_validation->set_rules('helpproj_email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('helpproj_name', 'Name', 'trim|required');
            // $this->form_validation->set_rules('helpproj_phone', 'Phone', 'trim|required');
            // $this->form_validation->set_rules('helpproj_website', 'Website', 'trim|required');
            // $this->form_validation->set_rules('helpproj_helpmsg', 'Message', 'trim|required|max_length[1000]');
            
            if($this->form_validation->run() == FALSE){
            
                $response['errors']['helpproj_email'] = form_error('helpproj_email',  '<div style="color:red;">', '</div>');
                $response['errors']['helpproj_name'] = form_error('helpproj_name',  '<div style="color:red;">', '</div>');
                // $response['errors']['helpproj_phone'] = form_error('helpproj_phone',  '<div style="color:red;">', '</div>');
                // $response['errors']['helpproj_website'] = form_error('helpproj_website',  '<div style="color:red;">', '</div>');
                // $response['errors']['helpproj_helpmsg'] = form_error('helpproj_helpmsg',  '<div style="color:red;">', '</div>');
                
            }else{
                
                $targetfolder = '';
                if($_FILES['helpproj_file']['name']){
                    $targetfolder =  getcwd().'/attachments/';
                    $timestamp = strtotime(date('d-m-Y H:i:s'));
                    $targetfolder = $targetfolder .$timestamp. basename( $_FILES['helpproj_file']['name']);
                    if(move_uploaded_file($_FILES['helpproj_file']['tmp_name'], $targetfolder)){
                        //echo "The file ". basename( $_FILES['helpproj_file']['name']). " is uploaded";
                        $this->email->attach($targetfolder, 'Need help file.');
                    }
                }
                
                $this->email->set_mailtype("html");
    			$this->email->from('noreply@technosavvyllc.com', 'Techno Savvy');
			$this->email->to('showzeb.jaffri@technado.co');
    			$this->email->subject('DIGITAL PARTNERSHIP - NEED HELP WITH A PROJECT?');
    			$body = $this->load->view('front/projecthelpform', ['request' => $this->input->post()], true);
    			$this->email->message($body);
    			
    			if($this->email->send()){
                    $response['msg']="We have recieved your message. We will get back to you shortly.";
                    $response['data']=$body;
                    $response['status']=true;
    			}else{
                    $response['msg']="Message sending failed. Please try again.";
                    $response['data']=$body;
                    $response['status']=false;
    			}
                
            }
            
            //$this->session->set_flashdata('response', $response);
            //redirect('home#helpproj_form');
	    }
	    
		$content['app'] = 'home';
		$content['response'] = (!empty($response))? $response: [];
		$this->load->view('front/layout/app',$content);      			
	}
	
	public function home_footer()
	{   
	    //echo getcwd();exit;
	    if($this->input->post()){
	        
            $response['msg']="";
            $response['data']=$this->input->post();
            $response['status']=false;
            
            $helpproj_name = $this->input->post('helpproj_name');
            $helpproj_email = $this->input->post('helpproj_email');
            $helpproj_phone = $this->input->post('helpproj_phone');
            $helpproj_website = $this->input->post('helpproj_website');
            $helpproj_help = $this->input->post('helpproj_helpmsg');
            //$helpproj_file = $this->input->post('helpproj_file');
            
            $this->form_validation->set_rules('helpproj_email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('helpproj_name', 'Name', 'trim|required');
            // $this->form_validation->set_rules('helpproj_phone', 'Phone', 'trim|required');
            // $this->form_validation->set_rules('helpproj_website', 'Website', 'trim|required');
            // $this->form_validation->set_rules('helpproj_helpmsg', 'Message', 'trim|required|max_length[1000]');
            
            if($this->form_validation->run() == FALSE){
            
                $response['errors']['helpproj_email'] = form_error('helpproj_email',  '<div style="color:red;">', '</div>');
                $response['errors']['helpproj_name'] = form_error('helpproj_name',  '<div style="color:red;">', '</div>');
                // $response['errors']['helpproj_phone'] = form_error('helpproj_phone',  '<div style="color:red;">', '</div>');
                // $response['errors']['helpproj_website'] = form_error('helpproj_website',  '<div style="color:red;">', '</div>');
                // $response['errors']['helpproj_helpmsg'] = form_error('helpproj_helpmsg',  '<div style="color:red;">', '</div>');
                
            }else{
                
                $targetfolder = '';
                if($_FILES['helpproj_file']['name']){
                    $targetfolder =  getcwd().'/attachments/';
                    $timestamp = strtotime(date('d-m-Y H:i:s'));
                    $targetfolder = $targetfolder .$timestamp. basename( $_FILES['helpproj_file']['name']);
                    if(move_uploaded_file($_FILES['helpproj_file']['tmp_name'], $targetfolder)){
                        //echo "The file ". basename( $_FILES['helpproj_file']['name']). " is uploaded";
                        $this->email->attach($targetfolder, 'Need help file.');
                    }
                }
                
                $this->email->set_mailtype("html");
    			$this->email->from('noreply@technosavvyllc.com', 'technosavvyllc');
			$this->email->to('showzeb.jaffri@technado.co');
/*            $this->email->cc('showzeb.jaffri@technado.co');*/
    			$this->email->subject('DIGITAL PARTNERSHIP - NEED HELP WITH A PROJECT? | Home Page');
    			$body = $this->load->view('front/projecthelpform', ['request' => $this->input->post()], true);
    			$this->email->message($body);
    			
    			if($this->email->send()){
                    $response['msg']="We have recieved your message. We will get back to you shortly.";
                    $response['data']=$body;
                    $response['status']=true;
    			}else{
                    $response['msg']="Message sending failed. Please try again.";
                    $response['data']=$body;
                    $response['status']=false;
    			}
                
            }
            
            //$this->session->set_flashdata('response', $response);
            //redirect('home#helpproj_form');
	    }
	    
	    
	    
        redirect('https://technosavvyllc.com');		
	}


	public function nslf_form(){

		$response['msg']="";
		$response['data']=$this->input->post();
		$response['status']=false;
		
        $nslf_form_email  = $this->input->post('nslf_form_email');
	    	
		$this->form_validation->set_rules('nslf_form_email', 'Newsletter Email', 'trim|required|valid_email');
		
		if($this->form_validation->run() == FALSE){

			$response['errors']['nslf_form_email_err'] = form_error('nslf_form_email',  '<div style="color:red;">', '</div>');
			
		}else{

			//email here

            $this->email->set_mailtype("html");
			$this->email->from('noreply@technosavvyllc.com', 'Techno Savvy');
			$this->email->to('showzeb.jaffri@technado.co');
			$this->email->subject('DIGITAL PARTNERSHIP - NEWSLETTER SIGNUP');
			$body = $this->load->view('front/newsletteremail', ['request' => $this->input->post()], true);
			$this->email->message($body);
			if($this->email->send()){
                $response['msg']="We have recieved your request. We will get back to you shortly.";
                $response['data']=$body;
                $response['status']=true;
			}else{
                $response['msg']="Request sending failed. Please try again.";
                $response['data']=$body;
                $response['status']=false;
			}
		}


		echo json_encode($response);
	}
	public function brief_form(){
	    if($this->input->post()){
	        
	         $path='';
	        if(!empty($_FILES['material']) && $_FILES['material']['size'] > 0){
                    $file_upload = single_file_upload($_FILES['material'],'./uploads/brief_files');
                    if(is_array($file_upload)){            
                        $this->session->set_flashdata('error', $file_upload);
                    }else{
                        
                    }
                     $path='https://technosavvyllc.com/brief/uploads/brief_files/'.$file_upload;
                } 
               
               
               

	        $section['body'] = '<table width=100%>';
            $section['body'] .='<tr><td><strong> Exact Name To Be Appeared On Logo :</strong> '.$this->input->post('logoname').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Slogan (If Any) : </strong>'.$this->input->post('slogan').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Preferred Style Of Logo : </strong>'.$this->input->post('styleoflogo').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Look And Feel : </strong>'.$this->input->post('looknfeel').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Any Additional Comments : </strong>'.$this->input->post('additionalcomment').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Company : </strong>'.$this->input->post('company').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Industry : </strong>'.$this->input->post('industry').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Description About Your Business : </strong>'.$this->input->post('briefdesc').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Your Target Audience : </strong>'.$this->input->post('yourtarget').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Name : </strong>'.$this->input->post('custname').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Phone : </strong>'.$this->input->post('custphone').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> Email: </strong>'.$this->input->post('custemail').'<br><td></tr>';
            $section['body'] .='<tr><td><strong> File Attchments: </strong>'.$path.'<br><td></tr>';
			$section['body'].= '</table>';
			$section['subject'] = 'Welcome to Techno Savvy';
			$body = $this->load->view('front/email/template',$section, TRUE);
			$result = send_email($this->input->post('custemail'),'New Client Registration',$body);
			send_email_attch('info@technosavvyllc.com',$this->input->post('custemail'),'Logo Brief',$body);
			 redirect("/");
			
	    }
	    
	}



	

}
