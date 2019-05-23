 <?php


  $replyToken = $deCode['events'][0]['replyToken'];
function send_LINE($msg){
 $access_token = 'd7cxHcU4JT1xLULO9UvbIpYFdA6PWyiOZ0USp8SvlaHpkPTOW0V0Efr/vD/QxSAphyCZYWF5wRy3uOjm3NJI80E4SHbQLfVas9ET1NEQU5WAavnrCsePI2C/6k01cZcLuLDQuKMlgYSra96CWHQy5QdB04t89/1O/w1cDnyilFU='; 

   $messages = [
        'type' => 'text',
        'text' => $msg
      	];
	


      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U698986bb41c79a7bc93ba1c5d19f0aa9',
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
