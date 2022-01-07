<?php
include 'dbconnect.php';

if ($_POST) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

     
    $sql = "INSERT INTO  contactus (full_name, email, phone,subject,message)VALUES ('$full_name', '$email', '$phone','$subject','$message')";
    if ($conn->query($sql) === TRUE) {

        $oip_email = "admin@outsourceinpakistan.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: ' . $email . "\r\n";
        $headers .= 'Reply-To: ' . $oip_email . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();


        $section ="Full Name : ".$full_name. "<br>"."Email : ".$email ."<br>"."Phone : ".$phone."<br>"."Company : " .$subject. "<br>" ."Message : ".$message;
        mail($oip_email,"Contact Us Techno Savvy", $section, $headers);
        $data['status'] = TRUE;
        echo json_encode($data);

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $data['status'] = FALSE;
        $data['message'] = "Database Error";
        echo json_encode($data);
    }
} else {
    $data['status'] = FALSE;
    $data['message'] = "Server Error";
    echo json_encode($data);
}

?>