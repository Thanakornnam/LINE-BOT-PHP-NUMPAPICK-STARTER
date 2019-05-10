<?php
 require("pub.php");
 require("line.php");
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['ESP'])) {
   send_LINE($events['ESP']);
   echo "OK";
}

		    
if (!is_null($events['events'])) {
	
	  $replyToken = $events['events'][0]['replyToken'];
    $typeMessage = $events['events'][0]['message']['type'];
    $userMessage = $events['events'][0]['message']['text'];
    $userMessage = strtolower($userMessage);
	
	
   echo "line bot";
   // Loop through each event
   foreach ($events['events'] as $event) {
	// Reply only when message sent is in 'text' format
	if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
	   // Get text sent
	   $text = $event['message']['text'];
	   // Get replyToken
	   $replyToken = $event['replyToken'];
   
		
		
    switch ($typeMessage){
        case 'text':
            switch ($userMessage) {
                case "t":
                    $textReplyMessage = "Bot ตอบกลับคุณเป็นข้อความ";
                    $replyData = new TextMessageBuilder($textReplyMessage);
                    break;
			    
			    
			    
  	   // Build message to reply back
           $Topic = "NodeMCU1" ;
	   getMqttfromlineMsg($Topic,$text);
		
	}
	   
    }
 }

 
			    
 echo "OK3";
?>
