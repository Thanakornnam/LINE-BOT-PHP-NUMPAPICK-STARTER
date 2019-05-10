<?php
$access_token = 'FpQsVAo7nqFv7CZ/LLv8PJtOvkGtT90MlKY+7031Uhxce9GvTMUFfClKEfSmi7Ovtm9nbnDa2rOY0yKnpNrYC7wRHCPec4OkJobNKjSUtEFC00jWXXY4XRKBlGa7VohO47zaLCAlKPftDe/GT9yrTQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
