<?php#*wataw*
#همسة



if($start=="non"){
$start="اهلا عزيزي $name

انا بوت للمزاح فقط اقوم بكتشاف ماذا كنت صادق ام كاذب 

قم بارسال رسله وسارئ ماذا كنت صادق ام لا 

تستطيع استخدامي ايضاء في المجموعات عبر عمل رد بنص كشف لرساله الشخص الذي تريد الكشف عن مصداقيته 

";

}
if ($text == '/start' ){

  bot('sendMessage', [
  'chat_id' => $chat_id, 
   'text'=>"$start

$txtfree",
'parse_mode'=>HTML,
]);
  
  }
$ldev_a = array (
'ماشاء الله عليه صدقوه على ضمانتي 😒',
'كذاب كذاب رقم 1 😹💔'
,'شكلي مش مرتاح لك ');
$ailnoor = array_rand($ldev_a, 1);

 $me = $message->reply_to_message; 
$ldev_i = $me->message_id;
$re = $update->message->reply_to_message;
if($text == "كشف"and $re){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🤷🏿‍♂️ جآإري آإلڪشف  ",
'reply_to_message_id'=>$ldev_i,
  ]);
  sleep(2);
 bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
      'text'=>"خلوني كمان افكر شوي  😌💔",
  ]);
sleep(3);
 bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
      'text'=>$ldev_a[$ailnoor],
'reply_to_message_id'=>$ldev_i,
  ]);}


if($text and $text !="/start" and !$re){
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🤷🏿‍♂️ جآإري آإلڪشف  ",
'reply_to_message_id'=>$ldev_i,
  ]);
  sleep(2);
 bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
      'text'=>"خلوني كمان افكر شوي  😌💔",
  ]);
sleep(3);
 bot('editmessagetext',[
    'chat_id'=>$chat_id,
     'message_id'=>$message_id + 1,
      'text'=>$ldev_a[$ailnoor],
'reply_to_message_id'=>$ldev_i,
  ]);}


