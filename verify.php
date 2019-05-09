<?php
$access_token = 'RnleJ9mfXwshKzIVXw815036Pj5qDchpkJKmIk/KXlRWTP8d/b8LkGPQ0gz09soxr+hbc4GooVYSfEZJNVPk6AcRrrtkTAIXHbsOn+yX5g1cTv5ar6PY83jpLxZr1d/6/WiKhUfeh18cK+cp6nhXhgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
