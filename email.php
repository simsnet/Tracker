<?php

function makeEmail() {
    // global variables
    global $event, $img, $ip, $to, $ua;
    
    // build message
    $subject = "TRACKING INFORMATION FOR EVENT " . $event;
    $body = "Tracking information received for event ".$event.":\r\n\n";
    $body .= "Image URL (if included): " . $img . "\r\n";
    $body .= "IP address: " . $ip . "\r\n";
    $body .= "User agent: " . $ua . "\r\n";
    $headers = "From: YOUREMAIL.YOURDOMAIN.COM\r\n";
    $headers .= "Reply-To: YOUREMAIL@YOURDOMAIN.COM\r\n";
    $headers .= "X-Mailer: PHP/".phpversion();
    // send email
    mail($to, $subject, $body, $headers);
}

?>
