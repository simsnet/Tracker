<?php
// GLENNJAMIN Image Tracker
// ----------------------------------------
// Web Variables: email, event, imgurl

// if someone wants a custom image (embed links), read it from url
if (isset($_GET["imgurl"])) {
    $img = $_GET["imgurl"];   // convert variable for readfile() and the 2nd $body line
    $imginfo = getimagesize($_GET["imgurl"]);   // pull MIME data
    header("Content-type: {$imginfo['mime']}");   // change header to allow for the real image look
    readfile($img);   // read file in browser
    imagedestroy($img); // destroy file
    // if nothing is set, generate and destroy transparent pixel
    } else {
    $p = imagecreate(1,1);   // make a 1x1 pixel
    $color = imagecolorallocatealpha($p,255,255,255,127);   // all white with 100% transparency (0-127)
    header("content-type:image/png");   // change header to allow for the real image look
    imagepng($p);   // display pixel
    imagedestroy($p);  // destroy pixel to clear memory
}

// get image viewer information
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];

// if an event name is set, send email
if (isset($_GET["event"])) {
    $event = $_GET["event"];
    } else {
    $event = "[EVENT NAME IS UNSET!  CHECK YOUR URL!]";
}

if (isset($_GET["email"])) {
    $to = $_GET["email"];
    require('email.php');
    makeEmail();
}

if (empty($_GET["email"])) {
    $to = "N/A";
}

// if there's no image URL, do not put one in the messsage.
if (empty($img)) {
    $img = "N/A";
}

require('webhook.php');
makeDiscordMsg();
?>