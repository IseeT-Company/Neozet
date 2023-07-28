<?php
function sendTg($message)
{
    $token = '6410264768:AAGebxBGCP_VFPMIpYRV6kcCZM2FN8I6ZpE';
    $chat_id = -833371327;
    $url = sprintf('https://api.telegram.org/bot%s/sendMessage', $token);

    $post_data = array(
        'chat_id' => $chat_id,
        'text' => $message,
        'disable_notification' => false
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $post_data
    ));
    $sr = curl_exec($ch);
    curl_close($ch);
}

