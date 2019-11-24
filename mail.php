<?php
    $error = "";
    $successMessage = "";
    if ($_POST) {
        
        if (!$_POST["email"]) {
            $error .= "An email address is required.";
        }
        
        if (!$_POST["subject"]) {
            $error .= " The subject field is required. ";
        }
        
        if (!$_POST["message"]) {
            $error .= "A message is required. ";
        }
        
        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email address is invalid.";
        }
        
        if($error != "") {
            $error = '<div><p><strong>There were error(s) in your form:</strong></p>'.$error.'</div>';
        } else {
            $emailTo = "jayneish@btinternet.com";
            $name = $_POST['name'];
            $company = $_POST['company'];
            $subject = $_POST["subject"];
            $message = $_POST["message"];
            $headers = "From: ".$_POST["email"];
            if (mail($emailTo, $subject, $message, $headers)) {
                $successMessage = '<div>Your message was sent, we will get back to you ASAP!</div>';
            } else {
                $error = '<div>Your message could not be sent. Please try again later.</div>';
            }
        }
    }
?>