<?php

class Send_Contact_Mail
{
    //Email Subject and To Email Address
    var $to = "ravat.s@gurukul.org,rushabh.t@gurukul.org";
    var $subject = "New Contact From Website";

    // Always set content-type when sending HTML email
    var $common_header = "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n";
    var $From = 'From: <info@touchandfeelelectro.com>';
    var $Reply_To='Reply-To: webmaster@example.com' . "\r\n";
    var $CC = "\r\n" . 'Cc: myboss@example.com' . "\r\n";


    function send_mail($name, $email, $subject, $message)
    {
    }
}
