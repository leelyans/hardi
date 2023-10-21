<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';


if (isset($_POST["submit"])) {

    $full_name = $_POST["full_name"];
    $phone_number = $_POST["phone_number"];
    $car_rental = $_POST["car_rental"];
    $duration = $_POST["duration"];
    $category = $_POST["category"];
    $email = $_POST["email"];

    if($car_rental == "none" || $category == "none"){
        echo
        "
        <script>
        alert('All fieds must be filled');
        document.location.href = 'index.php';
        </script>
        ";
        
    }else{
        $message = "Full Name: $full_name\n";
        $message .= "Phone Number: $phone_number\n";
        $message .= "Car Rental: $car_rental\n";
        $message .= "Duration: $duration\n";
        $message .= "Category: $category\n";


        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'iraguhaaimebruce@gmail.com';
        $mail->Password = 'hfsqcucjibswplxt';
        $mail->SMtpSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('iraguhaaimebruce@gmail.com');
        $mail->addAddress($email);

        $mail->isHTML(true);

        $mail->Subject = "Car rental";
        $mail->Body = $message;

        $mail->send();

        echo
        "
        <script>
        alert('Sent Successfully');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>