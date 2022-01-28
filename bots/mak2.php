<?php#*wataw*
#سايت
if($start=="non"){
$start="لم يتم تعيين كليشة /start من قبل الادمن ";
}

if($text == "/start" ){
bot('sendmessage',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"$start

$txtfree",
'parse_mode'=>HTML,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"سايت ",'callback_data'=>"sayt"],
['text'=>"تواصل",'callback_data'=>"twasl"]],
[['text'=>"توضيح",'callback_data'=>"infobot"]],
]
])
]);
}
$status=file_get_contents("data/$from_id.txt");

if($data == "sayt" ){
if($status!="sayt"){
 bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"🎋 اهلا بك 😌🍂
💠 لقد اخترت سايت لن يستطيع الادمن معرفتك ",
        'show_alert'=>true
        ]);
mkdir("data");
file_put_contents("data/$from_id.txt","sayt");
}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"🎋 اهلا بك 😌🍂
💠 لقد اخترت السايت مسبقاً ",
        'show_alert'=>true
        ]);
} 
}
if($data == "twasl" ){
if($status!="twasl"){
 bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"🎋 اهلا بك 😌🍂
💠 لقد اخترت التواصل يستطيع الادمن معرفتك الان ",
        'show_alert'=>true
        ]);
mkdir("data");
file_put_contents("data/$from_id.txt","twasl");
}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"🎋 اهلا بك 😌🍂
💠 لقد اخترت التواصل مسبقاً ",
        'show_alert'=>true
        ]);
} 
}



if($data == "infobot" ){

 bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"🎋 اهلا بك 😌🍂
🎋اذا اخترت سايت صاحب البوات لن يعرف من انت
        
🎋واذا اخترت تواصل فانني سوف اقوم بوتجيه رسالتك وسوف يعرفك صاحب البوت
وشكرا",
        'show_alert'=>true
        ]);
} 



$forward = $update->message->forward_from;
$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;



if($photo){
$sens="sendphoto";
$file_id = $update->message->photo[1]->file_id;
}
if($document){
$sens="senddocument";
$file_id = $update->message->document->file_id;
}
if($video){
$sens="sendvideo";
$file_id = $update->message->video->file_id;
}

if($audio){
$sens="sendaudio";
$file_id = $update->message->audio->file_id;
}

if($voice){
$sens="sendvoice";
$file_id = $update->message->voice->file_id;
}

if($sticker){
$sens="sendsticker";
$file_id = $update->message->sticker->file_id;
}

if($message and $from_id !=$admin and $status==null and $text!="/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🚫 قم بإختيار نوعية الارسال اولا 
$txtfree",
'parse_mode'=>HTML,
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"سايت ",'callback_data'=>"sayt"],
['text'=>"تواصل",'callback_data'=>"twasl"]],
[['text'=>"توضيح",'callback_data'=>"infobot"]],

]
])
]);
}
if($message and $from_id !=$admin and $status!=null and $text!="/start" ){
if($status=="twasl"){
bot('ForwardMessage',[
 'chat_id'=>$admin,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
]);
$txxx="✅ تم ارسال رسالتك على شكل تواصل  يستطيع الادمن معرفتك";

}
if($status=="sayt"){

if($text){
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"$text",
]);

}else{
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$caption",
]);


}




$txxx="✅ تم ارسال رسالتك على شكل سايت لن يتم معرفتك";
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$txxx
$txtfree",
'parse_mode'=>HTML,
'reply_to_message_id'=>$message_id,

]);

}




