 <?php


  $replyToken = $deCode['events'][0]['replyToken'];
function send_LINE($msg){
 $access_token = 'RnleJ9mfXwshKzIVXw815036Pj5qDchpkJKmIk/KXlRWTP8d/b8LkGPQ0gz09soxr+hbc4GooVYSfEZJNVPk6AcRrrtkTAIXHbsOn+yX5g1cTv5ar6PY83jpLxZr1d/6/WiKhUfeh18cK+cp6nhXhgdB04t89/1O/w1cDnyilFU='; 

   $messages = [
        'type' => 'text',
        'text' => $msg
      	];
	


      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U01ac5d0756d74bfc13526e4a25833c9c',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
        
$strUrl = "https://api.line.me/v2/bot/message/push";
	  $curl = curl_init();
		curl_setopt_array($curl, array(
          CURLOPT_URL => strUrl,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $post,
          CURLOPT_HTTPHEADER => $headers,
          ),
    ));
    $response = curl_exec($curl);
	
	
      echo $result . "\r\n"; 
}
?>
