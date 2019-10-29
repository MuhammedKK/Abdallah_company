<?php

if(isset($_POST['submit']))
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Msg = $_POST['message'];

    $to = 'khaloood2281999@gmail.com';
    $subject = 'Form Submission';
    $message = 'Name' . $name '\n' . 'Phone' . $phone . '\n' . 'Write The Following :' . '\n\n' $Msg;
    $header = 'From' . $email;

    if(mail($to, $subject, $message, $header)) {
        echo '<h1> Sent Successfully! Thank You' . $name . ' , We Will Contact You As Soon As Possible </h1>';
    }
    else {
        echo 'Some Thing Wrong Happened Please Try Again';
    }
?>