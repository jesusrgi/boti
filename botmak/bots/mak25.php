<?php#*wataw*
#مشاركةبدون توجية

if($start=="non"){
$start="مرحبا بك عزيزي 🥳
• في بوت مشاركة المنشورات بدون توجيه 😄

------------------------

• كل ما عليك هوه ارسال المنشور ( صوره ، فديو ، ملف ، ملف صوتي ، بصمه )
• وسارسل كود نشر بعدها فقط قم بختيار المحادثة وسيظهر لك زر الارسال
• يمكنك تعين وصف جديد  للمنشور من خلال كتابتهة بعد الكود ❤️


";

}
if ($text == '/start' ){
  bot('sendMessage', [
  'chat_id' => $chat_id, 
  'text' => "..
  $start
  
$txtfree
",
'parse_mode'=>HTML,
]);
  
  }
$media = json_decode(file_get_contents("data/media.json"),true);
if (!file_exists("data/media.json")) {
	$put = [];
	file_put_contents("data/media.json", json_encode($put));
}


if($text and $text!="/start" ){

bot('sendmessage',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$message_id,
'text'=>"اقبل الميديا فقط",

]);
}

if($update->message->voice){
$file_id = $update->message->voice->file_id;
$rand=$from_id.rand(1111111111,9999999999);
$media["info"]["$rand"]['no3']="voice";
$media["info"]["$rand"]['url']="voice_file_id";
$media["info"]["$rand"]['file_id']="$file_id";

file_put_contents("data/media.json", json_encode($media));


bot('sendmessage',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$message_id,
'text'=>"•`@$usernamebot $rand`",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"مشاركة ",'switch_inline_query'=>$rand]],
]
])
]);
}
      
if($update->message->photo){
$file_id = $update->message->photo[2]->file_id;
$rand=$from_id.rand(1111111111,9999999999);
$media["info"]["$rand"]['no3']="photo";
$media["info"]["$rand"]['url']="photo_file_id";
$media["info"]["$rand"]['file_id']="$file_id";

file_put_contents("data/media.json", json_encode($media));

bot('sendmessage',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$message_id,
'text'=>"•`@$usernamebot $rand`",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"مشاركة ",'switch_inline_query'=>$rand]],
]
])
]);
}
if($update->message->video){
$file_id = $update->message->video->file_id;
$rand=$from_id.rand(1111111111,9999999999);
$media["info"]["$rand"]['no3']="video";
$media["info"]["$rand"]['url']="video_file_id";
$media["info"]["$rand"]['file_id']="$file_id";

file_put_contents("data/media.json", json_encode($media));

bot('sendmessage',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$message_id,
'text'=>"•`@$usernamebot $rand`",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"مشاركة ",'switch_inline_query'=>$rand]],
]
])
]);
}


if($update->message->sticker){
$file_id = $update->message->sticker->file_id;
$rand=$from_id.rand(1111111111,9999999999);
$media["info"]["$rand"]['no3']="sticker";
$media["info"]["$rand"]['url']="sticker_file_id";
$media["info"]["$rand"]['file_id']="$file_id";

file_put_contents("data/media.json", json_encode($media));

bot('sendmessage',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$message_id,
'text'=>"•`@$usernamebot $rand`",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"مشاركة ",'switch_inline_query'=>$rand]],
]
])
]);
}
if($update->message->document){
$r = $update->message->animation->thumb->file_id;
if($r){
$file_id = $update->message->document->file_id;

$rand=$from_id.rand(1111111111,9999999999);
$media["info"]["$rand"]['no3']="gif";
$media["info"]["$rand"]['url']="gif_url";
$media["info"]["$rand"]['file_id']="$file_id";


file_put_contents("data/media.json", json_encode($media));

bot('sendmessage',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$message_id,
'text'=>"•`$usernamebot $rand`",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"مشاركة ",'switch_inline_query'=>$rand]],
]
])
]);
}}

if ($text_inline!=null) { 

$ex3 = explode(" ", $text_inline);

$code=$ex3[0];

$txt=str_replace($code,'',$text_inline);

$media = json_decode(file_get_contents("data/media.json"),true);
$title=
$media["info"]["$code"]['title'];
$description=
$media["info"]["$code"]['description'];
$no3=$media["info"]["$code"]['no3'];
$url=$media["info"]["$code"]['url'];
$file_idd=$media["info"]["$code"]['file_id'];




    bot('answerInlineQuery',[ 
            'inline_query_id'=>$update->inline_query->id,   
              'cache_time'=>'0',
            'results' => json_encode([[ 
                'type'=>$no3, 
 'id'=>base64_encode(rand(5,555)), 
"$url"=>"$file_idd", 
"thumb_url"=>"$file_idd",  
       'title'=>"$title..", 
          'caption'=>"$txt",
          ]]) 
        ]); 

}










