<?php

// GLENNJAM.IN Image Tracker - Discord Webhook Embed
// Learn how to make Discord webhooks here: https://support.discord.com/hc/en-us/articles/228383668-Intro-to-Webhooks
// Thanks to https://stackoverflow.com/users/5179786/khoa-truongdinh on Stack Overflow for the easy embed message: https://stackoverflow.com/questions/51747829/how-to-send-a-embedded-webhook-using-php-discord/51748785

// send to Discord webhook
function makeDiscordMsg() {
    // global variables
    global $event, $img, $ip, $to, $ua;

    // build message
    $webhookurl = "https://discordapp.com/api/webhooks/CHANNEL_ID/TOKEN";
    $timestamp = date("c", strtotime("now"));
    $json_data = json_encode([
    "content" => "",
    "username" => "GLENNJAMIN Tracker Data",
    "avatar" => "https://www.glennjam.in/media/img/bm_simsnet.png",
    "tts" => false,
    "embeds" => [
    [
        "title" => "New Tracking Request Received",
        "type" => "rich",
        "description" => "A new location has been tracked.",
        "timestamp" => $timestamp,
        "color" => hexdec( "3366ff" ),
        "footer" => [
            "text" => "GLENNJAM.IN Tracker",
            "icon_url" => "https://en.gravatar.com/userimage/115412162/0e44ad98b7cf1f8c7492b2688e5f6e44.png?size=375"
        ],
        "author" => [
            "name" => "GLENNJAMIN Tracker",
            "url" => "https://www.glennjam.in/tracker/track.html"
        ],
        "fields" => [
            [
                "name" => "Event Name",
                "value" => $event,
                "inline" => false
            ],
            [
                "name" => "Email Address",
                "value" => $to,
                "inline" => false
            ],
            [
                "name" => "IP Address",
                "value" => $ip,
                "inline" => false
            ],
            [
                "name" => "User Agent",
                "value" => $ua,
                "inline" => false
            ],
            [
                "name" => "Image URL",
                "value" => $img,
                "inline" => false
            ],
        ]
     ]
     ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

    $ch = curl_init( $webhookurl );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    curl_exec( $ch );
    curl_close( $ch );
}

?>
