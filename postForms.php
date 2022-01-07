<?php
if ($_POST) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $message = $_POST['message'];


    $ota_email = "info@outsourcetoasia.co";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= 'From: ' . $email . "\r\n";
    $headers .= 'Reply-To: ' . $ota_email . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();


    $section = "Full Name : " . $full_name . "<br>" . "Email : " . $email . "<br>" . "Phone : " . $phone . "<br>" . "Company : " . $company . "<br>" . "Message : " . $message;
    mail($ota_email, "Techno Savvy", $section, $headers);
    $data['status'] = TRUE;
    echo json_encode($data);
} else {
    $data['status'] = FALSE;
    $data['message'] = "Server Error";
    echo json_encode($data);
}
