<?php
$access_token = 'Q+46J0IinwQOOu2sBi2N/+nbvsUkhQCw1c0typHR6g5uhw6GdqduJgChMJ70RGcRxMxWIA9GMYbrdNg3u58qc8pkfNDee2VBJ+tnmNjo5p5hnCs81YuFgEZ9iiUnBxskIfFPLFvtapf8LFdKj+wmXAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
