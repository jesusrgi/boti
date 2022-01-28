
<?php#*wataw*
#البلورة السحرية


if($start=="non"){
$start="
أهلاً بك عزيزي،
يمكنك تحميل فيديو من انستقرام
قم بارسال رابط المقطع وساقوم بتحميلة لك 
اوقم بارسال user حساب الانستقرام لكي اقوم بجلب معلوماته 
 ";

}




if($text == "/start" ){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"$start

$txtfree",
'parse_mode'=>HTML,
]);
}


if($text != "/start" and preg_match("/(.*?)(www.instagram.com)|(instagram)(.*?)/",$text) and !$data){

bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$text,
'caption'=>"️تم تنزيل الفيديو من انستقرام",
'reply_to_message_id'=>$message->message_id
]);
}
 if($text and $text != "/start"  and !$data and !preg_match("/(.*?)(www.instagram.com)|(instagram)(.*?)/",$text)){
$Api = json_decode(file_get_contents("https://7050.cf/insta.php?u=$text"), true);
$posts = $Api["user_data"]["posts"];
$user_img = $Api["user_data"]["user_img"];
$user = $Api["user_data"]["user"];
$followers = $Api["user_data"]["followers"];
$img = $Api["last_post"]["img"];
$time = $Api["last_post"]["time"];
$bio = $Api["user_data"]["bio"];
$following = $Api["user_data"]["following"];
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$user_img",
'caption'=>"
📒| 𝒖𝒔𝒆𝒓𝒏𝒂𝒎𝒆 ->  $user 
🌼| 𝒇𝒐𝒍𝒍𝒐𝒘𝒊𝒏𝒈 -> $followers
💛| 𝒇𝒐𝒍𝒍𝒐𝒘𝒆𝒅 -> $following
🍋| 𝒑𝒐𝒔𝒕 -> $posts
🌕| 𝒃𝒊𝒐 -> $bio
⚠️| 𝒍𝒂𝒔𝒕 𝒕𝒊𝒎𝒆 -> $time
",
]);
}



