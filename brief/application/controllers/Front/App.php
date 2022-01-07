<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends Front_Controller
{
    
    public function index()
    {
        
        if ($this->input->post()) {
            // echo "<pre>";
            // print_r($this->input->post());
            // die("ok here");
            
            $path = '';
            if (!empty($_FILES['material1']) && $_FILES['material1']['size'] > 0) {
                $file_upload = single_file_upload($_FILES['material1'], './uploads/brief_files');
                if (is_array($file_upload)) {
                    $this->session->set_flashdata('error', $file_upload);
                } else {
                    
                }
                $path = 'https://technosavvyllc.com/brief/uploads/brief_files/' . $file_upload;
            }
            
            
            $section['body'] = '<table width=100%>';

            $section['body'] .= '<tr><td><strong> Client Contact Details :</strong> ' . $this->input->post('contact_details') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Technical staff involved in the project :</strong> ' . $this->input->post('technical_staff') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Do you have any apps made in the past? :</strong> ' . $this->input->post('anyApp') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> budject and Time:</strong> ' . $this->input->post('budjectTime') . '<br><td></tr>';

            
            $section['body'] .= '<tr><td><strong> App Outline :</strong> ' . $this->input->post('webname') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Devices  : </strong>' . $this->input->post('additionalcomment1') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Platforms Accessibility : </strong>' . $this->input->post('additionalcomment2') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Briefly Describe the Concept of the app ? : </strong>' . $this->input->post('additionalcomment3') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Do you have any creative/design specifications for the application? : </strong>' . $this->input->post('additionalcomment4') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Do you have ‘Wireframes’ for the app? : </strong>' . $this->input->post('additionalcomment5') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> What content will be included in the app? What is the required functionality? : </strong>' . $this->input->post('additionalcomment6') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Do you need to involve the focus/test group to get feedback about the app/design? : </strong>' . $this->input->post('additionalcomment7') . '<br><td></tr>';
            //$section['body'] .= '<tr><td><strong>  : </strong>' . $this->input->post('nodomname1') . '<br><td></tr>';
            
            //$section['body'] .= '<tr><td><strong> Do you want us to provide hosting : </strong>' . $this->input->post('wanthostyes1') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Name : </strong>' . $this->input->post('custname') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Phone : </strong>' . $this->input->post('custphone') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> Email: </strong>' . $this->input->post('custemail') . '<br><td></tr>';
            $section['body'] .= '<tr><td><strong> File Attchments: </strong>' . $path . '<br><td></tr>';
            
            
            
            
            $section['body'] .= '</table>';
            
            $section['subject'] = 'Welcome to Techno Savvy';
            
            $body               = $this->load->view('front/email/template', $section, TRUE);
          
            send_email_attch('info@technosavvyllc.com', $this->input->post('custemail'), 'Website Brief', $body);
            redirect("/");
            
            
        } else {
            $content['app'] = 'app';
            $this->load->view("front/layout/app",$content);
        }
        
    }
    
}