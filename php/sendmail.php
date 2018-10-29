<?php

include "connect.php";

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])) {

    // create variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // check if variables are not empty
    if (!empty($name)) {
        if (!empty($email)) {
            if (!empty($phone)) {
                if (!empty($subject)) {
                    if (!empty($message)) {

                        //send to mail
                        $to = 'fwatilah@gmail.com';
                        $sub = $subject;
                        $mes = $message;
                        $headers = "From: " . $name . " <" . $email . ">\r\n";
                        /*$headers = "Reply-To: " . $email . "\r\n";
                        $headers = "Content-type: text/html; charset=iso-8859-1\r\n";*/
                        'X-Mailer: PHP/' . phpversion();

                        //echo json_encode("Thank you " . $name . " for contacting us. We'll respond as soon as possible.");

                        if (mail($to, $subject, $message, $headers)) {

                            //send data to database
                            $query = mysqli_query($conn, "INSERT INTO `customers` (`name`, `email`, `phone`, `subject`, `message`) VALUES ('$name', '$email', '$phone', '$subject', '$message')");

                            if ($query == true) {
                                echo json_encode("Thank you " . $name . " for contacting us. We'll respond as soon as possible.");
                            } else {
                                $error = mysqli_error($conn);
                                echo json_encode($error);
                            }

                        } else {
                            $error = mysqli_error($conn);
                            echo json_encode($error);
                        }

                    } else {
                        echo json_encode("Please enter your message");
                    }
                } else {
                    echo json_encode("Kindly enter your subject");
                }
            } else {
                echo json_encode("Kindly enter your phone number");
            }
        } else {
            echo json_encode("Please enter your email address");
        }
    } else {
        echo json_encode("Please enter your name");
    }

}