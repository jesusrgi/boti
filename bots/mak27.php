
<?php#*wataw*
#حماية قنوات


if($start=="non"){
$start="في
🤖⁞ بوت حماية القنوات من الاعلانات
🔘⁞ فقط قم باضافة البوت اداري في القناة
🌀⁞ ثم ارسل الامر تفعيل ثم الاوامر لمعرفة المزيد

 ";

}


mkdir("data/UEE_E");
    $channel_id           = $update->channel_post->chat->id;
    $channeltext         = $update->channel_post->text;
    $channel_message_id      = $update->channel_post->message_id;
    $document       = $update->channel_post->document;
    $sticker        = $update->channel_post->sticker;
    $photo          = $update->channel_post->photo;
    $video          = $update->channel_post->video;
    $forward        = $update->channel_post->forward_from_chat;
    $contact        = $update->channel_post->contact;
    $audio          = $update->channel_post->audio;
    $is_sticker = $update->channel_post->sticker->is_sticker;
    $video_note = $update->channel_post->video_note;

#فيديو نوت
$video_notes = file_get_contents("data/UEE_E/$channel_id/video_note.txt");
if($video_note and $video_notes == "close"){
bot('deletemessage',[
'chat_id'=>$channel_id,
'message_id'=>$channel_message_id
]);
}
#متحركات&ملفات
$documents = file_get_contents("data/UEE_E/$channel_id/document.txt");
if($document  and $documents == "close"){  
bot('deletemessage',[
'chat_id'=>$channel_id,
'message_id'=>$channel_message_id
]);
}
#مـلصـقآآت
$stickers = file_get_contents("data/UEE_E/$channel_id/sticker.txt");
if($sticker and $stickers == "close"){  
bot('deletemessage',[
'chat_id'=>$channel_id,
'message_id'=>$channel_message_id
]);
}
#صور
$photos = file_get_contents("data/UEE_E/$channel_id/photo.txt");
if($photo and $photos == "close"){  
bot('deletemessage',[
'chat_id'=>$channel_id,
'message_id'=>$channel_message_id
]);
}
#فيديو
$videos = file_get_contents("data/UEE_E/$channel_id/video.txt");
if($video and $videos == "close"){  
bot('deletemessage',[
'chat_id'=>$channel_id,
 'message_id'=>$channel_message_id
]);
}
 #توجيه
 $forwards = file_get_contents("data/UEE_E/$channel_id/forward.txt");
if($forward  and $forwards == "close"){  
bot('deletemessage',[
'chat_id'=>$channel_id,
'message_id'=>$channel_message_id
]);
}
  #موقع
 $contacts = file_get_contents("data/UEE_E/$channel_id/contact.txt");
if($contact and $contacts == "close"){  
bot('deletemessage',[
'chat_id'=>$channel_id,
'message_id'=>$channel_message_id
]);
}
#صوت
$audios = file_get_contents("data/UEE_E/$channel_id/audio.txt");
if($audio and $audios == "close"){  
bot('deletemessage',[
'chat_id'=>$channel_id,
'message_id'=>$channel_message_id
]);
}
  #روابط
 $links = file_get_contents("data/UEE_E/$channel_id/link.txt");
if($links == "close" and preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$channeltext) ){
bot('deleteMessage',[
'chat_id'=>$channel_id,
'message_id'=>$channel_message_id,
]);
} 
#معرفات&تاك
$usenames = file_get_contents("data/UEE_E/$channel_id/username.txt");
if($usenames == "close" and  preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$channeltext)){
bot('deleteMessage',[
'chat_id'=>$channel_id,
'message_id'=>$channel_message_id,
]);
}
//**********************//
if($text == "/start" ){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"😻⁞ مرحبا بك عزيزي $name
$start
$txtfree ",
  'disable_web_page_preview'=>'true',
  'parse_mode'=>"html",


							]);
}


if($channeltext == "الاوامر" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"💻┊اهلا بك في اوامر البوت
━━━━━━━━━━━━━
🔖┊م1 ↭ اوامر الحمايه
🔖┊م2 ↭ اوامر عامة
━━━━━━━━━━━━━
",
'reply_to_message_id'=>$channel_message_id, 
]);
}
if( $channeltext == "م1" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"⚡️ اوامر حماية القناة ⚡️
━━━━━━━━━━━━━
📡┊قفل ↭ فتح •⊱ التوجيه ⊰•
🖇┊قفل ↭ فتح •⊱ الروابط ⊰•
🖼┊قفل ↭ فتح •⊱ الصور ⊰•
📟┊قفل ↭ فتح •⊱ فيديو نوت ⊰•  
🔗┊قفل ↭ فتح •⊱ المعرفات ⊰•
🎆┊قفل ↭ فتح •⊱ المتحركه ⊰•
⛱┊قفل ↭ فتح •⊱ الملصقات ⊰•
🎞┊قفل ↭ فتح •⊱ الفيديو ⊰•
🎙┊قفل ↭ فتح •⊱ الصوت ⊰•
🌐┊قفل ↭ فتح •⊱ الموقع ⊰•
📺┊ قفل ↭ فتح •⊱ القناة ⊰• 
━━━━━━━━━━━━━
",
'reply_to_message_id'=>$channel_message_id,
]);
} 
if( $channeltext == "م2" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"⚡️ اوامر عامة ⚡️
━━━━━━━━━━━━━
🧭┊مسح + العدد ↭ •⊱ لمسح الرسائل ⊰• 
🎟┊معلومات القناة ↭ •⊱ لعرض معلومات القناة ⊰•
🎫┊الادمنيه ↭ ⊰• لعرض ادمنية القناة ⊰•  
✅┊رفع ادمن ↭ •⊱ لرفع ادمن بالقناة ⊰•  
❎┊تنزيل ادمن ↭ •⊱ لتنزيل ادمن من القناة ⊰• 
⚠️┊حظر + الايدي ↭ •⊱ لحظر العضو من القناة ⊰•  
🔰┊الغاء حظر + الايدي ↭ •⊱ لالغاء حظر العضو من القناة ⊰• 
━━━━━━━━━━━━━  ",
'reply_to_message_id'=>$channel_message_id,
]);
} 
if( $channeltext == "تفعيل" ){
mkdir("data/UEE_E/$channel_id");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"📮┊تـم تـفـعـيـل القناة بنجاح 
📡┊ارسل ، الاوامر ، لمعرفة الاوامر
✓️",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$channel_message_id,
]);
}      
#قفل القناة
if( $channeltext == "قفل القناة" ){
file_put_contents("data/UEE_E/$channel_id/username.txt","close");
file_put_contents("data/UEE_E/$channel_id/link.txt","close");
file_put_contents("data/UEE_E/$channel_id/contact.txt","close");
file_put_contents("data/UEE_E/$channel_id/audio.txt","close");
file_put_contents("data/UEE_E/$channel_id/forward.txt","close");
file_put_contents("data/UEE_E/$channel_id/document.txt","close");
file_put_contents("data/UEE_E/$channel_id/sticker.txt","close");
file_put_contents("data/UEE_E/$channel_id/video.txt","close");
file_put_contents("data/UEE_E/$channel_id/photo.txt","close");
file_put_contents("data/UEE_E/$channel_id/video_note.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي 
📡┊تم قفل جميع اوامر القناة",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$channel_message_id,
]);
}
#فتح القناة
if( $channeltext == "فتح القناة" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم فتح جميع اوامر القناة",
'reply_to_message_id'=>$channel_message_id,
]);
unlink("data/UEE_E/$channel_id/video_note.txt");
unlink("data/UEE_E/$channel_id/photo.txt");
unlink("data/UEE_E/$channel_id/video.txt");
unlink("data/UEE_E/$channel_id/sticker.txt");
unlink("data/UEE_E/$channel_id/document.txt");
unlink("data/UEE_E/$channel_id/forward.txt");
unlink("data/UEE_E/$channel_id/audio.txt");
unlink("data/UEE_E/$channel_id/contact.txt");
unlink("data/UEE_E/$channel_id/link.txt");
unlink("data/UEE_E/$channel_id/username.txt");
}
#فيديو نوت
if($channeltext =="فتح فيديو نوت" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي المدير
📡┊تم فتح فيديو نوت",
'reply_to_message_id'=>$channel_message_id,
 ]);
 unlink("data/UEE_E/$channel_id/video_note.txt");
}
if($channeltext =="قفل فيديو نوت" ){
file_put_contents("data/UEE_E/$channel_id/video_note.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم قفل فيديو نوت",
'reply_to_message_id'=>$channel_message_id,
]);
}
#صور
if($channeltext =="فتح الصور" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم فتح الصور",
'reply_to_message_id'=>$channel_message_id,
 ]);
 unlink("data/UEE_E/$channel_id/photo.txt");
}
if($channeltext =="قفل الصور" ){
file_put_contents("data/UEE_E/$channel_id/photo.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم قفل الصور",
'reply_to_message_id'=>$channel_message_id,
]);
}
#فيديو
if($channeltext =="قفل الفيديو" ){
file_put_contents("data/UEE_E/$channel_id/video.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم قفل الفيديو",
'reply_to_message_id'=>$channel_message_id,
]);
}
if($channeltext =="فتح الفيديو" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم فتح الفيديو",
'reply_to_message_id'=>$channel_message_id,
]);
 unlink("data/UEE_E/$channel_id/video.txt");
}
#ملصقات
if($channeltext =="قفل الملصقات" ){
file_put_contents("data/UEE_E/$channel_id/sticker.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم قفل الملصقات",
 'reply_to_message_id'=>$channel_message_id,
 ]);
 }
if($channeltext =="فتح الملصقات" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير] 
📡┊تم فتح الملصقات",
 'reply_to_message_id'=>$channel_message_id,
 ]);
 unlink("data/UEE_E/$channel_id/sticker.txt");
}
#متحركات
if($channeltext =="قفل المتحركة" ){
file_put_contents("data/UEE_E/$channel_id/document.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم قفل المتحركة",
 'reply_to_message_id'=>$channel_message_id,
]);
}
if($channeltext =="فتح المتحركة" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم فتح المتحركة",
  'reply_to_message_id'=>$channel_message_id,
 ]);
 unlink("data/UEE_E/$channel_id/document.txt");
 }
#توجيه
if($channeltext =="قفل التوجيه" ){
file_put_contents("data/UEE_E/$channel_id/forward.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم قفل التوجيه",
'reply_to_message_id'=>$channel_message_id,
 ]);
}
if($channeltext =="فتح التوجيه" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم فتح التوجيه",
 'reply_to_message_id'=>$channel_message_id,
 ]);
 unlink("data/UEE_E/$channel_id/forward.txt");
}
#الصوت
if($channeltext =="قفل الصوت" ){
file_put_contents("data/UEE_E/$channel_id/audio.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم قفل الصوت",
  'reply_to_message_id'=>$channel_message_id,
 ]);
}
if($channeltext =="فتح الصوت" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي [المدير]
📡┊تم فتح الصوت",
  'reply_to_message_id'=>$channel_message_id,
 ]);
 unlink("data/UEE_E/$channel_id/audio.txt");
}

#الموقع
if($channeltext =="قفل الموقع" ){
file_put_contents("data/UEE_E/$channel_id/contact.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي المدير
📡┊تم قفل الموقع",
  'reply_to_message_id'=>$channel_message_id,
 ]);
}
if($channeltext =="فتح الموقع" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي المدير
📡┊تم فتح الموقع",
  'reply_to_message_id'=>$channel_message_id,
 ]);
 unlink("data/UEE_E/$channel_id/contact.txt");
}
#روابط
if($channeltext =="قفل الروابط" ){
file_put_contents("data/UEE_E/$channel_id/link.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي المدير
📡┊تم قفل الروابط",
  'reply_to_message_id'=>$channel_message_id,
 ]);
}
if($channeltext =="فتح الروابط" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي المدير
📡┊تم فتح الروابط",
  'reply_to_message_id'=>$channel_message_id,
 ]);
 unlink("data/UEE_E/$channel_id/link.txt");
}

#المعرف
if($channeltext =="قفل المعرفات" ){
file_put_contents("data/UEE_E/$channel_id/username.txt","close");
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي المدير
📡┊تم قفل المعرفات",
  'reply_to_message_id'=>$channel_message_id,
 ]);
}
if($channeltext =="فتح المعرفات" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"🙋🏻‍♂┊اهلا عزيزي المدير
📡┊تم فتح المعرفات",
  'reply_to_message_id'=>$channel_message_id,
 ]);
 unlink("data/UEE_E/$channel_id/username.txt");
}


$linko = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$channel_id"));
$linkchannel = $linko->result;
if($channeltext == "الرابط" ){
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"رابط القناة 🌻،
$linkchannel", 
'reply_to_message_id'=>$channel_message_id,
'disable_web_page_preview'=>true,
]);
}
if(preg_match('/^(مسح) (.*)/', $channeltext, $delete)){
for($m=$channel_message_id; $m>=$channel_message_id-$delete[2]; $m--){
bot('deletemessage',[
'chat_id' => $channel_id,
'message_id' =>$m,]);
}
bot('sendmessage',[
'chat_id' => $channel_id,
'text' =>"*🗑┊تم *$channeltext* من الرسائل*",
'parse_mode'=>"markdown",
]);
}
if($channeltext == "الادمنيه" ){
$up = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatAdministrators?chat_id=".$channel_id),true);
$result = $up['result']; 
$admins = "";
foreach($result as $key=>$value){
$found = array_search("administrator",$result[$key]);
$found2 = array_search("creator",$result[$key]);
if($found !== false or $found2 !== false){
$admins = $admins."*↭ ❲* @[".$result[$key]['user']['username']."] *❳* *»* *❲* `".$result[$key]['user']['id']."` *❳*\n";  }  }
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"
📮┊قائمه الادمنيه،

$admins",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$channel_message_id,
]);
}
#رفع حظر الغاء حظر
$ALOOSH = str_replace("حظر ","$ALOOSH",$channeltext); 
if($channeltext == "حظر $ALOOSH"){
bot('sendmessage',[
'chat_id'=>$channel_id,
"text"=>"🙍🏻‍♂┊ العضو ↭  ❪ $ALOOSH ❫
📛┊تم حظره  
✓️
",
'parse_mode'=>"MARKDOWN",
]);
bot('kickChatMember',[
'chat_id'=>$channel_id,
'user_id'=>$ALOOSH,
]);
}
$UALOOSH = str_replace("الغاء حظر ","$UALOOSH",$channeltext); 
if($channeltext == "الغاء حظر $UALOOSH"){
bot('sendmessage',[
'chat_id'=>$channel_id,
"text"=>"🙍🏻‍♂┊ العضو ↭  ❪ $UALOOSH  ❫
📛┊تم الغاء الحظر
✓️ 
",
'parse_mode'=>"MARKDOWN",
]);
bot('unbanChatMember',[
'chat_id'=>$channel_id,
'user_id'=>$UALOOSH,
]);
}
#رفع تنزيل ادمن
$ad = str_replace("رفع ادمن ","$ad",$channeltext); 
if($channeltext == "رفع ادمن $ad"){
bot('promoteChatMember',[
'chat_id'=>$channel_id,
'user_id'=>$ad,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>true,
'can_pin_messages'=>true,
]);
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"
🙍🏻‍♂┊ العضو ↭  ❪ $ad  ❫
💯┊تم رفعة ادمن
✓️ 
",
'reply_to_message_id'=>$channel_message_id,
]);
}
$unad = str_replace("تنزيل ادمن ","$unad",$channeltext); 
if($channeltext == "تنزيل ادمن $unad"){
bot('promoteChatMember',[
'chat_id'=>$channel_id,
'user_id'=>$unad,
'can_delete_messages'=>false,
'can_invite_users'=>false,
'can_restrict_members'=>false,
'can_pin_messages'=>false,
]);
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"
🙍🏻‍♂┊ العضو ↭  ❪ $unad  ❫
💯 ┊تم تنزيلة من الادمنية  
✓️ 
",
'reply_to_message_id'=>$channel_message_id,
]);
}
if($channeltext == "معلومات القناة" ){
date_default_timezone_set("Asia/Baghdad");
$time = date('h:i');
$date = date('Y/n/j');
$Al = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$channel_id"));
$mem = $Al->result;
$title = $update->channel_post->chat->title;
$ko = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$channel_id"));
$linkcht = $ko->result;
bot('sendmessage',[
'chat_id'=>$channel_id,
'text'=>"
🔘┊مـعلومات القناة ،
📦┊ايدي القناة ↭ $channel_id.
🗄┊عدد اعضا القناة ↭ $mem.
📜┊اسم القناة ↭ $title.
🖇┊رابط آلخآص بالقناة.
$linkcht
🔖┊الساعة ↭ $time
📕┊التاريخ ↭ $date", 
'reply_to_message_id'=>$channel_message_id,
'disable_web_page_preview'=>true,
]);
}
 






