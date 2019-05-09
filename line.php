 <?php
  

function send_LINE($msg){
 $access_token = 'FpQsVAo7nqFv7CZ/LLv8PJtOvkGtT90MlKY+7031Uhxce9GvTMUFfClKEfSmi7Ovtm9nbnDa2rOY0yKnpNrYC7wRHCPec4OkJobNKjSUtEFC00jWXXY4XRKBlGa7VohO47zaLCAlKPftDe/GT9yrTQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '502529af8d24e757599c5e57ef74f983',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
