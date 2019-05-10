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
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$strUrl);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close ($ch);
	
	
	
      echo $result . "\r\n"; 
}
?>
