<?php#*wataw*
# حجر ورقة مقص


if($start=="non"){
$start="
• 👋🏻 اهلا بك ($name) في لعبه حجر ورق مقص يمكنك العب معي في الخاص او المجموعات

";

}








if($text != "حجرة" && $text != "ورقة" && $text != "مقص" && $text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$start

$txtfree",
'parse_mode'=>"html", 

]); 
}
$random = array('انت فزت لان اختياري مقص 🌝🤞🏻', 'انا فزت لان اختياري ورقة 🌝🖱', 'نحن متعادلين 🌝✊🏻');
$random1 = array_rand($random, 1);
$rrues = array('انت الفائز لان اختياري حجرة 🌝✊🏻', 'نحن متعادلين 🤝🌝', 'انا فزت لان اختياري مقص 🌝🤞🏻');
$rues = array_rand($rrues);
$ccut = array('نحن متعادلين 🌝🤝 ','انا فزت لان اختياري حجرة 🌝✊🏻', ' انت فزت لان اختياري ورقة 🖱🌝');
$cut = array_rand($ccut);

if($text == "حجر" or $text == "حجره" or $text == "حجرة" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$random[$random1],
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مقص"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ccut[$cut],
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ورقة" or $text == "ورقه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$rrues[$rues],
'reply_to_message_id'=>$message->message_id, 
]);
} 
