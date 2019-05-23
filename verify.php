<?php
$access_token = 'd7cxHcU4JT1xLULO9UvbIpYFdA6PWyiOZ0USp8SvlaHpkPTOW0V0Efr/vD/QxSAphyCZYWF5wRy3uOjm3NJI80E4SHbQLfVas9ET1NEQU5WAavnrCsePI2C/6k01cZcLuLDQuKMlgYSra96CWHQy5QdB04t89/1O/w1cDnyilFU=';

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
