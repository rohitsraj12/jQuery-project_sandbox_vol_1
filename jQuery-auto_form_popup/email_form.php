<?php


If(isset($_POST['submit_email'])){

    $user_name      = $_POST['name'];
    $user_phone     = $_POST['phone'];
    $user_email     = $_POST['email'];
    $select_value   = $_POST['select_item']; // item coming from select element
    //$radio_value    = $_POST['radio_option'] // value coming from radio button
    
    $to = "rohitwebco@gmail.com";
    // $to2 = ""; //2nd email id 
    $subject = "Enquire Form";
    $message = "<p>Enquiry</p></br>";
    $message .= "<p> name: <strong>". $user_name ."</strong></p></br>";
    $message .= "<p> phone number: <strong>". $user_phone ."</strong></p></br>";
    $message .= "<p> email: <strong>". $user_email ."</strong></p></br>";
    $message .= "<p> selected Item: <strong>". $select_value ."</strong></p></br>";
    // $message .= "<p> selected radio: <strong>". $radio_value ."</strong></p></br>";
    $message .= "<p>Thank you,</p>";
    $message .= "<p>". $user_name ."</p>";
    $message .= "<p>" . $user_email . " | " . $user_phone . "</p>";
    
    $headers = "From:" . $user_name . " <" . $user_email . ">\r\n";
    $headers .= "Reply-To: " . $user_email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);
    // mail($to2, $subject, $message, $headers);

    header("location:inde.html?message=success");
}


?>