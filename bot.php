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




$events = json_decode($content, true);
if(!is_null($events)){
    // ถ้ามีค่า สร้างตัวแปรเก็บ replyToken ไว้ใช้งาน
    $replyToken = $events['events'][0]['replyToken'];
    $typeMessage = $events['events'][0]['message']['type'];
    $userMessage = $events['events'][0]['message']['text'];
    $userMessage = strtolower($userMessage);
    switch ($typeMessage){
        case 'text':
            switch ($userMessage) {
                case "t":
                    $textReplyMessage = "Bot ตอบกลับคุณเป็นข้อความ";
                    $replyData = new TextMessageBuilder($textReplyMessage);
                    break;
			    
			    
			    
			    
			    
if (!is_null($events['events'])) {
   echo "line bot";
   // Loop through each event
   foreach ($events['events'] as $event) {
	// Reply only when message sent is in 'text' format
	if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
	   // Get text sent
	   $text = $event['message']['text'];
	   // Get replyToken
	   $replyToken = $event['replyToken'];

  	   // Build message to reply back
           $Topic = "NodeMCU1" ;
	   getMqttfromlineMsg($Topic,$text);
	}
    }
 }
 echo "OK3";
?>
