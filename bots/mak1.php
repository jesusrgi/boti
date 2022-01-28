
<?php#*wataw*

$amr = file_get_contents("sudo/amr.txt");

$estgbal = file_get_contents("sudo/estgbal.txt");

 //ايديك
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 


if($data=="admin"and in_array($from_id, $sudo)){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"👮|  اهلا بك عزيزي المطور اليك قائمة الاوامر الشفافة قم باختيار ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[
['text'=>'اضافه رساله الاستقبال','callback_data'=>'welc']
],
[
['text'=>'اضافه رساله الرد','callback_data'=>'msrd']
],


[['text'=>'- استقبال الرسائل من الأعضاء 🔃".' ,'callback_data'=>"estgbal"]],
[['text'=>'الحمايــــــــــــه 🔒' ,'callback_data'=>"hmaih"]],
   ] 
   ])
]);
unlink("sudo/amr.txt");

}
if($text=="/start"and in_array($from_id, $sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"👮|  اهلا بك عزيزي المطور اليك قائمة الاوامر الشفافة قم باختيار ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[
['text'=>'اضافه رساله الاستقبال','callback_data'=>'welc']
],
[
['text'=>'اضافه رساله الرد','callback_data'=>'msrd']
],
[['text'=>'- استقبال الرسائل من الأعضاء 🔃".' ,'callback_data'=>"estgbal"]],
[['text'=>'الحمايــــــــــــه 🔒' ,'callback_data'=>"hmaih"]],
   ] 
   ])
]);
unlink("sudo/amr.txt");

}
///====قنوات الاشتراك الاجباري ====\\\\

/////////////////7////////////////
if($data == "estgbal"){
bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>'- استقبال الرسائل من الأعضاء 🔃".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- تفعيل التواصل داخل البوت مع الاعضاء🔃✅".' ,'callback_data'=>"estgbalon"]],
[['text'=>'- تعطيل التواصل داخل البوت مع الاعضاء🔃❎".' ,'callback_data'=>"estgbaloff"]],
[['text'=>'مكان الاستقبال ".' ,'callback_data'=>"11111"]],
[['text'=>'الخاص ".' ,'callback_data'=>"typee"],
['text'=>'القروب ".' ,'callback_data'=>"supergruope"],
],
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"admin"]],
]
])
]);
}

if($data == "typee"){
bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>'- تم التفعيل سيتم ايصال الرسائل الى الخاص 🔃✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"admin"]],
]])
]);
file_put_contents("sudo/typee.txt","$from_id");
}


if($data == "supergruope"){
bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>'حسننا عزيزي الادمن قم بالذهاب الى قروب الاستقبال وارسل امر 
/setastgbal
📝".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"ethaa"]],
]])
]);
file_put_contents("sudo/amr.txt","set");
}
if($text=="/setastgbal" and $amr == "set" and in_array($from_id, $sudo)){
file_put_contents("sudo/amr.txt","");
bot('sendmessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>'- تم تحديد هذا القروب ليكون قروبا للاستقبال ".',
]);
file_put_contents("sudo/typee.txt","$chat_id");
}
if($data == "estgbalon"){
bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>'- تم تفعيل التواصل 🔃✅".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"admin"]],
]])
]);
file_put_contents("sudo/estgbal.txt","on");
}

if($data == "estgbaloff"){
bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>'- تم تعطيل التواصل 🔃❎".',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع ↩️".' ,'callback_data'=>"admin"]],
]])
]);
unlink("sudo/amr.txt");
unlink("sudo/estgbal.txt");
}


if($data == 'welc'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'ارسل الترحيب الان 🗒
تستطيع اضافة نص او ميديا قم فقط بالارسال 
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'atther']]    
]    
])
]);
file_put_contents("sudo/amr.txt","start");
}

$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;


if($message and $amr == "start" and in_array($from_id, $sudo)){
unlink("sudo/amr.txt");
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"تم حفظ الترحيب للاعضاء الجدد 
الترحيب هو : 
👇
",
]);
if($text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,    

]);
file_put_contents("data/start.txt","$text");

file_put_contents("data/send.txt","text");


}else{

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

$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$txt",
]);
file_put_contents("data/start.txt","$txt");

file_put_contents("data/send.txt","$sens");
file_put_contents("data/file_id.txt","$file_id");

}



}








if($data == 'msrd'){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"قم بتحديد رسالة الرد على العضو بعد ان يقوم بارسال رساله لك ....
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'atther']]    
]    
])
]);

file_put_contents("sudo/amr.txt","msrd");
}

if($message and $amr == "msrd" and in_array($from_id, $sudo)){
unlink("sudo/amr.txt");
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"تم حفظ رسالة الرد 
رسالة الرد هي  : 
$text
",
]);

file_put_contents("data/msrd.txt","$text");
}





$yppee=file_get_contents("sudo/typee.txt");
if($yppee==null or $yppee==""){
$yppee=$admin;

}
$get_ban=file_get_contents('data/ban.txt');
$ban =explode("\n",$get_ban);



///====  الاعضاء  ====\\\\

$infobot= file_get_contents("data/infobot.txt");
$msrd= file_get_contents("data/msrd.txt");
if($start=="non"){
$start="لم يتم تعيين كليشة /start من قبل الادمن ";
}


$sendstart= file_get_contents("data/send.txt");
if($sendstart==null){
$sendstart=="text";
}
$file_idstart= file_get_contents("data/file_id.txt");
if($text == '/start' and !in_array($from_id,$ban) and $message->chat->type == 'private' and $chat_id != $sudo ){
if($sendstart=="text"){


bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"


$start
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
$txtfree

",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,


]);
}else{
$ss=str_replace("send","",$sendstart);
bot($sendstart,[
"chat_id"=>$chat_id,
"$ss"=>"$file_idstart",
'caption'=>"$start
$txtfree
",

]);


}



}









$yppee=file_get_contents("sudo/typee.txt");
if($yppee==null or $yppee==""){
$yppee=$admin;

}

$co_m_all=file_get_contents("count/user/all.txt");
$co1=$co_m_all+1;



$repp=$message->reply_to_message->message_id-1;
$msg=explode("=",file_get_contents("message/$repp.txt"));

$get_ban=file_get_contents('data/ban.txt');
$get_ban=file_get_contents('data/ban.txt');
$ban =explode("\n",$get_ban);
if($text){

if($text != '/start' and $text != 'جهة اتصال المدير☎️' and $text != '⚜️〽️┇قناه البوت' and $text != 'ارفعني' and $text != 'القوانين ⚠️' and $text != 'معلومات المدير 📋' and   $text !='المساعده 💡' and $text !='اطلب بوتك من المطور' and $message->chat->type == 'private' and $from_id != $admin ){
if(!in_array($from_id, $ban)){
if($estgbal=="on" or $estgbal==null){
bot('sendMessage',[
'chat_id'=>$yppee,
'text'=>"name: [$name](tg://user?id=$from_id)
",
'reply_to_message_id'=>$message->reply_to_message->message_id-1,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);

$get= bot('forwardMessage',[
'chat_id'=>$yppee,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id,

]);
$msg_id = $get->result->message_id-1;

$from_id_name="$chat_id=$name=$message_id";
file_put_contents("data/message/$msg_id.txt","$from_id_name");

$co_m_us=file_get_contents("data/count/user/$from_id.txt");
$co=$co_m_us+1;
file_put_contents("data/count/user/$from_id.txt","$co");


file_put_contents("data/count/user/all.txt","$co1");


if($msrd !=null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$msrd ــــ ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"✴ إصنع بوتك الخاص", 'url'=>"t.me/$user_bot_sudo"]],
]
])

]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ارسال الرسالة ساقوم بالرد باقرب وقت ان شاء الله 🌸",
'reply_to_message_id'=>$message_id
,'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"✴ إصنع بوتك الخاص", 'url'=>"t.me/$user_bot_sudo"]],
]
])

]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ايقاف استقبال الرسائل من قبل مالك البوت ",
'reply_to_message_id'=>$message_id
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ المعذرة لا تستطيع ارسال الرسائل انت محظور ",
'reply_to_message_id'=>$message_id
]);
}
}}


$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;

$n_id =$msg['1'];
if($reply and $text != 'الغاء الحظر' and $text != 'حظر' and $text != 'معلومات' and $chat_id == $yppee  
and $n_id!= null){
if( in_array($from_id,$sudo)
or in_array($from_id, $adminall)){
$id_member=$msg['0'];

$ok = bot('sendChatAction' , ['chat_id' =>$id_member,
'action' => 'typing' ,])->ok;
$name_id =$msg['1'];

if($ok != 1){
$mem= file_get_contents("sudo/member.txt");
$mem= str_replace($id_member."\n",'',$mem);
file_put_contents("sudo/member.txt",$mem);
bot('sendmessage',[
'chat_id'=>$yppee,
'text'=>"
🚫 لم يتم الارسال لـ [$name_id](tg://user?id=$ch_id) 
لقد قام المشترك بحظر البوت وقد تمت تصفيه ايدي المشترك من تخزين الاعضاء
",
'reply_to_message_id'=>$message_id
,'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}else{
if($text){
$get=bot('sendMessage',[
'chat_id'=>$id_member,
'text'=>$text,    
'reply_to_message_id'=>$msg['2'],

]);
$msg_id = $get->result->message_id;
}else{

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

$ss=str_replace("send","",$sens);
$get1=bot($sens,[
"chat_id"=>$id_member,
"$ss"=>"$file_id",
'caption'=>"$getfull",
'reply_to_message_id'=>$msg['2'],
]);

$msg_id = $get->result->message_id;
}

$ch_id =$id_member;
$name_id =$msg['1'];
$wathqid="$ch_id=$msg_id=$name_id";
file_put_contents("data/message/$msg_id.txt","$wathqid");

$co_m_ad=file_get_contents("data/count/admin/$ch_id.txt");
$co=$co_m_ad+1;
file_put_contents("data/count/admin/$ch_id.txt","$co");

$co_m_all=file_get_contents("data/count/admin/all.txt");
$coo=$co_m_all+1;
file_put_contents("data/count/admin/all.txt","$coo");


bot('sendmessage',[
'chat_id'=>$yppee,
'text'=>"
◾ تم الارسال لـ [$name_id](tg://user?id=$ch_id) بنجاح .
",
'reply_to_message_id'=>$message_id
,'parse_mode'=>"MarkDown",

'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ تعديل الرسالة .",'callback_data'=>"edit_msg ".$msg_id],
['text'=>"◾ حذف الرسالة .",'callback_data'=>"del_msg ".$msg_id]],
]
])
]);


}#EIND ELSE


}




}

if (preg_match('/^(del_msg) (.*)/s',$data) ) {
if( in_array($from_id,$sudo)
or in_array($from_id, $adminall)){

  $data1 = explode(" ",$data);
  $wathqid= $data1['1'];
$info=explode("=",file_get_contents("data/message/$wathqid.txt"));

  $ch_id= $info['0'];
  $msg_id= $info['1'];
  $name_id =$info['2'];
bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>"
◾ تم حذف الرسالة لـ [$name_id](tg://user?id=$ch_id) بنجاح

",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
bot('deleteMessage',[
'chat_id'=>$ch_id,
'message_id'=>$msg_id,
]);
  }
}
if (preg_match('/^(edit_msg) (.*)/s',$data) ) {
if( in_array($from_id,$sudo)
or in_array($from_id, $adminall)){

$data1 = explode(" ",$data);
  $wathqid= $data1['1'];
$info=explode("=",file_get_contents("data/message/$wathqid.txt"));

  $ch_id= $info['0'];
  $msg_id= $info['1'];
  $name_id =$info['2'];
  file_put_contents("data/t3dil.txt","$ch_id=$msg_id=$name_id");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
◾ قم بارسال رسالتك الجديده ليتم تعديل الرسالة السابقه لدى [$name_id](tg://user?id=$ch_id)  .
",
'reply_to_message_id'=>$message_id
,'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- إلغاء ❌".' ,'callback_data'=>"trag3"]],
]])
]);
file_put_contents("sudo/amr.txt","edit");
  }
}
if($data == "trag3"){
bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>'تم الغاء التعديل بنجاح".',
]);
file_put_contents("sudo/amr.txt","");
file_put_contents("data/t3dil.txt","");
}
if($text and $amr == "edit" and $chat_id== $yppee){
if( in_array($from_id,$sudo)
or in_array($from_id, $adminall)){

file_put_contents("sudo/amr.txt","");
$wathqget=file_get_contents("data/t3dil.txt");

  $wathqidd = explode("=",$wathqget);
  $ch_id= $wathqidd['0'];
  $msg_id= $wathqidd['1'];
  $name_id =$wathqidd['2'];
  bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id-2,
]);
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id-1,
]);

bot('sendmessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>"- ✅ تم التعديل الرسالة لـ [$name_id](tg://user?id=$ch_id) بنجاح .",
'reply_to_message_id'=>$message_id
,'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"◾ تعديل الرسالة .",'callback_data'=>"edit_msg ".$msg_id],
['text'=>"◾ حذف الرسالة .",'callback_data'=>"del_msg ".$msg_id]],
]
])
]);
file_put_contents("data/t3dil.txt","");
bot('EditMessageText',[
    'chat_id'=>$ch_id,
    'message_id'=>$msg_id,
    'text'=>
$text,
]);
}}

if (preg_match('/^(حظر) (.*)/s',$text) and $chat_id == $yppee ) {
if( in_array($from_id,$sudo)
or in_array($from_id, $adminall)){

$textt = str_replace("حظر ","",$text);
$textt = str_replace(" ","",$text);
$strlen=strlen($textt);
if($strlen < 10){
if(!in_array($textt, $ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ حضر العضو 🚹',
'reply_to_message_id'=>$message_id
]);

bot('sendMessage',[
'chat_id'=>$textt,
'text'=>'تم ✅ حضرك من البوت ❌',
]);
file_put_contents('data/ban.txt', $textt. "\n", FILE_APPEND);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>' العضو محظور مسبقا🚫 🚹',
'reply_to_message_id'=>$message_id
]);
}
}}
}
if (preg_match('/^(الغاء حظر) (.*)/s',$text) and $chat_id == $yppee ) {
if( in_array($from_id,$sudo)
or in_array($from_id, $adminall)){

$textt = str_replace("الغاء حظر ","",$text);
$textt = str_replace(" ","",$text);
$strlen=strlen($textt);
if($strlen < 10){
if(in_array($textt, $ban)){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ الغاء حضر العضو ❌',
'reply_to_message_id'=>$message_id
]);

bot('sendMessage',[
'chat_id'=>$textt,
'text'=>'تم ✅ الغاء حضرك ❌'
]);
$bin=file_get_contents('data/ban.txt');
$str = str_replace($textt."\n", '' ,$bin);

file_put_contents('data/ban.txt', $str);

}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>' 🚫 العضو ليس محظور 🚹',
'reply_to_message_id'=>$message_id
]);
}}}
}



if($reply and $text == 'حظر' and $chat_id == $yppee  and $n_id!= null){
if( in_array($from_id,$sudo)
or in_array($from_id, $adminall)){

//$from = $message->reply_to_message->forward_from->id;
$from = $msg['0'];
if(!in_array($from, $ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ حضر العضو 🚹',
'reply_to_message_id'=>$message_id
]);

bot('sendMessage',[
'chat_id'=>$from,
'text'=>'تم ✅ حضرك من البوت ❌',
]);

file_put_contents('data/ban.txt', $from. "\n", FILE_APPEND);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>' العضو محظور مسبقا🚫 🚹',
'reply_to_message_id'=>$message_id
]);
}}
}

if($reply and $text == 'الغاء الحظر' and $chat_id == $yppee and $n_id!= null){
if( in_array($from_id,$sudo)
or in_array($from_id, $adminall)){

//$from = $message->reply_to_message->forward_from->id;
$from = $msg['0'];
if(in_array($from, $ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ الغاء حضر العضو ❌',
'reply_to_message_id'=>$message_id
]);

bot('sendMessage',[
'chat_id'=>$from,
'text'=>'تم ✅ الغاء حضرك ❌'
]);

$bin=file_get_contents('data/ban.txt');
$str = str_replace($from ."\n", '' ,$bin);

file_put_contents('data/ban.txt', $str);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>' 🚫 العضو ليس محظور 🚹',
'reply_to_message_id'=>$message_id,
]);
}
}
}
//معلومات الاعضاء 
if($reply and $text == 'معلومات' and $chat_id == $yppee){
if( in_array($from_id,$sudo)
or in_array($from_id, $adminall)){

//$from = $message->reply_to_message->forward_from->id;
$from = $msg['0'];

$admin = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$from"))->result;

$name= $admin->first_name;

$user= $admin->username;

if(!in_array($from, $ban)){

$info="✅ متفاعل";
}else{
$info="🚫 محظور";
}
$co_m_us=file_get_contents("data/count/user/$from.txt");
$co_m_ad=file_get_contents("data/count/admin/$from.txt");

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ℹ معلومات العضو 
~~~~~~~~~~~~~~~~~~~~~~~
- الاسم : [ $name](tg://user?id=$from)  .
- الايدي : `$from`
- المعرف : *@$user*
- حالة العضو : $info
- عدد الرسائل المستلمة منة : $co_m_us ✉
- عدد الرسائل المرسلة لة : $co_m_ad 📬

",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
}
if( $text == 'معلومات' and !$reply  and $chat_id == $yppee){
if( in_array($from_id,$sudo)
or in_array($from_id, $adminall)){

unlink("sudo/admins.txt");
for($h=0;$h<count($adminall);$h++){
if($adminall[$h] != ""){
$admin = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$adminall[$h]"))->result;
$from=$adminall[$h];
$name= $admin->first_name;
$c= $h+1;
$admins="$c - [$name](tg://user?id=$from) `$from`";
file_put_contents("sudo/admins.txt","$admins\n",FILE_APPEND);

}}

$admins=file_get_contents("sudo/admins.txt");


$co_m_us=file_get_contents("data/count/user/all.txt");
$co_m_ad=file_get_contents("data/count/admin/all.txt");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ℹ معلومات شاملة عن البوت  
~~~~~~~~~~~~~~~~~~~~~~~
👮 - الادمنية : 
$admins
--------------------
👪 - عدد الاعضاء : $cuntei
🚫 - المحضورين : $countben
--------------------
📮 - الرسائل 
📩 - المستلمة :$co_m_us
📬 - الصادرة :$co_m_ad


",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
}
$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;
$forward =$message->forward_from_chat;
$c_photo=file_get_contents("data/photo.txt");
$c_video=file_get_contents("data/video.txt");
$c_document=file_get_contents("data/document.txt");
$c_sticker=file_get_contents("data/sticker.txt");
$c_voice=file_get_contents("data/voice.txt");
$c_audio=file_get_contents("data/audio.txt");
$c_forward =file_get_contents("data/audio.txt");
if($from_id!=$wathq1 and $message->chat->type == 'private' ){
//الصور
if($photo and ! $forward){
if($c_photo=="❌"or $c_photo== null){
if($estgbal=="on" or $estgbal==null){

bot('sendMessage',[
'chat_id'=>$yppee,
'text'=>"name: [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->reply_to_message->message_id-1,
]);

$get=bot('forwardMessage',[
'chat_id'=>$yppee,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id

]);
$msg_id = $get->result->message_id-1;

$from_id_name="$chat_id=$name=$message_id";
file_put_contents("data/message/$msg_id.txt","$from_id_name");

$co_m_us=file_get_contents("data/count/user/$from_id.txt");
$co=$co_m_us+1;
file_put_contents("data/count/user/$from_id.txt","$co");

file_put_contents("data/count/user/all.txt","$co1");

if($msrd !=null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$msrd..",
'reply_to_message_id'=>$message_id
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ارسال الرسالة ساقوم بالرد باقرب وقت إن شاء الله 🌸",
'reply_to_message_id'=>$message_id
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ايقاف استقبال الرسائل من قبل مالك البوت ",
'reply_to_message_id'=>$message_id
]);
}
}else{

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذرا استقبال الصور مغلق ❌",
'reply_to_message_id'=>$message_id
]);
}

}
//الفيديو
if($video and ! $forward ){
if($c_video=="❌"or $c_photo== null){
if($estgbal=="on" or $estgbal==null){
bot('sendMessage',[
'chat_id'=>$yppee,
'text'=>"name: [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->reply_to_message->message_id-1,
]);
$get=bot('forwardMessage',[
'chat_id'=>$yppee,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id

]);
$msg_id = $get->result->message_id-1;

$from_id_name="$chat_id=$name=$message_id";
file_put_contents("data/message/$msg_id.txt","$from_id_name");

$co_m_us=file_get_contents("data/count/user/$from_id.txt");
$co=$co_m_us+1;
file_put_contents("data/count/user/$from_id.txt","$co");
file_put_contents("data/count/user/all.txt","$co1");


if($msrd !=null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$msrd",
'reply_to_message_id'=>$message_id
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ارسال الرسالة ساقوم بالرد باقرب وقت ان شاء الله 🌸",
'reply_to_message_id'=>$message_id
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ايقاف استقبال الرسائل من قبل مالك البوت ",
'reply_to_message_id'=>$message_id
]);
}
}else{

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذرا استقبال الفيديو مغلق ❌",
'reply_to_message_id'=>$message_id
]);
}

}

//الملفات
if($document and ! $forward){
if($c_document=="❌"or $c_photo== null){
if($estgbal=="on" or $estgbal==null){
bot('sendMessage',[
'chat_id'=>$yppee,
'text'=>"name: [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->reply_to_message->message_id-1,
]);
$get=bot('forwardMessage',[
'chat_id'=>$yppee,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id

]);
$msg_id = $get->result->message_id-1;

$from_id_name="$chat_id=$name=$message_id";
file_put_contents("data/message/$msg_id.txt","$from_id_name");

$co_m_us=file_get_contents("data/count/user/$from_id.txt");
$co=$co_m_us+1;
file_put_contents("data/count/user/$from_id.txt","$co");
file_put_contents("data/count/user/all.txt","$co1");

if($msrd !=null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$msrd",
'reply_to_message_id'=>$message_id
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ارسال الرسالة ساقوم بالرد باقرب وقت ان شاء الله 🌸",
'reply_to_message_id'=>$message_id
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ايقاف استقبال الرسائل من قبل مالك البوت ",
'reply_to_message_id'=>$message_id
]);
}
}else{

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذرا استقبال الملفات مغلق ❌",
'reply_to_message_id'=>$message_id
]);
}

}

//الملصقات
if($sticker and ! $forward ){
if($c_sticker=="❌"or $c_photo== null){
if($estgbal=="on" or $estgbal==null){
bot('sendMessage',[
'chat_id'=>$yppee,
'text'=>"name: [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->reply_to_message->message_id-1,
]);
$get=bot('forwardMessage',[
'chat_id'=>$yppee,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id

]);
$msg_id = $get->result->message_id-1;

$from_id_name="$chat_id=$name=$message_id";
file_put_contents("data/message/$msg_id.txt","$from_id_name");

$co_m_us=file_get_contents("data/count/user/$from_id.txt");
$co=$co_m_us+1;
file_put_contents("data/count/user/$from_id.txt","$co");
file_put_contents("data/count/user/all.txt","$co1");

if($msrd !=null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$msrd",
'reply_to_message_id'=>$message_id
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ارسال الرسالة ساقوم بالرد باقرب وقت ان شاء الله 🌸",
'reply_to_message_id'=>$message_id
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ايقاف استقبال الرسائل من قبل مالك البوت ",
'reply_to_message_id'=>$message_id
]);
}
}else{

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذرا استقبال الملفات مغلق ❌",
'reply_to_message_id'=>$message_id
]);
}

}

//الصوتيات
if($voice and ! $forward ){
if($c_voice=="❌"or $c_photo== null){
if($estgbal=="on" or $estgbal==null){
bot('sendMessage',[
'chat_id'=>$yppee,
'text'=>"name: [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->reply_to_message->message_id-1,
]);
$get=bot('forwardMessage',[
'chat_id'=>$yppee,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id

]);
$msg_id = $get->result->message_id-1;

$from_id_name="$chat_id=$name=$message_id";
file_put_contents("data/message/$msg_id.txt","$from_id_name");

$co_m_us=file_get_contents("data/count/user/$from_id.txt");
$co=$co_m_us+1;
file_put_contents("data/count/user/$from_id.txt","$co");
file_put_contents("data/count/user/all.txt","$co1");

if($msrd !=null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$msrd",
'reply_to_message_id'=>$message_id
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ارسال الرسالة ساقوم بالرد باقرب وقت ان شاء الله 🌸",
'reply_to_message_id'=>$message_id
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ايقاف استقبال الرسائل من قبل مالك البوت ",
'reply_to_message_id'=>$message_id
]);
}
}else{

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذرا استقبال الصوتيات مغلق ❌",
'reply_to_message_id'=>$message_id
]);
}

}
//الصوتيات
if($audio and ! $forward ){
if($c_audio=="❌"or $c_photo== null){
if($estgbal=="on" or $estgbal==null){
bot('sendMessage',[
'chat_id'=>$yppee,
'text'=>"name: [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->reply_to_message->message_id-1,
]);
$get=bot('forwardMessage',[
'chat_id'=>$yppee,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id

]);
$msg_id = $get->result->message_id-1;

$from_id_name="$chat_id=$name=$message_id";
file_put_contents("data/message/$msg_id.txt","$from_id_name");

$co_m_us=file_get_contents("data/count/user/$from_id.txt");
$co=$co_m_us+1;
file_put_contents("data/count/user/$from_id.txt","$co");
file_put_contents("data/count/user/all.txt","$co1");

if($msrd !=null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$msrd",
'reply_to_message_id'=>$message_id
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ارسال الرسالة ساقوم بالرد باقرب وقت ان شاء الله 🌸",
'reply_to_message_id'=>$message_id
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ايقاف استقبال الرسائل من قبل مالك البوت ",
'reply_to_message_id'=>$message_id
]);
}
}else{

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذرا استقبال الموسيقى مغلق ❌",
'reply_to_message_id'=>$message_id
]);
}

}
//التوجية
if($forward ){
if($c_forward=="❌"or $c_forward== null){
if($estgbal=="on" or $estgbal==null){
bot('sendMessage',[
'chat_id'=>$yppee,
'text'=>"name: [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->reply_to_message->message_id-1,
]);
$get=bot('forwardMessage',[
'chat_id'=>$yppee,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id

]);
$msg_id = $get->result->message_id-1;

$from_id_name="$chat_id=$name=$message_id";
file_put_contents("data/message/$msg_id.txt","$from_id_name");

$co_m_us=file_get_contents("data/count/user/$from_id.txt");
$co=$co_m_us+1;
file_put_contents("data/count/user/$from_id.txt","$co");
file_put_contents("data/count/user/all.txt","$co1");

if($msrd !=null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$msrd",
'reply_to_message_id'=>$message_id
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ارسال الرسالة ساقوم بالرد باقرب وقت ان شاء الله 🌸",
'reply_to_message_id'=>$message_id
]);
}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم ايقاف استقبال الرسائل من قبل مالك البوت ",
'reply_to_message_id'=>$message_id
]);
}
}else{

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عذرا استقبال التوجية مغلق ❌",
'reply_to_message_id'=>$message_id
]);
}

}
}


if(strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
if($users == "مقفول"){
	    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ يمنع ارسال الروابط .",
        ]);
}
}

if($data == "hmaih"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
تحكم بحماية وقفل الوسائط المتعدده

❌ =  مفتوح 
✅ = مقفل 

لقفل الوسائط ارسل امر 
قفل ( الصور - الفيديو - الملفات - التوجيه - الصوت - الموسيقى - الروابط - المعرفات ) 
مثال قفل التوجية
او 
فتح التوجية

قفل الكل : لقفل جميع الوسائط 
فتح الكل : لفتح جميع الوسائط 
-----------------------",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>" حالة الحماية  ",'callback_data'=>"halh"]],
]
])
]);
}
$c_photo=file_get_contents("data/photo.txt");
$c_video=file_get_contents("data/video.txt");
$c_document=file_get_contents("data/document.txt");
$c_sticker=file_get_contents("data/sticker.txt");
$c_voice=file_get_contents("data/voice.txt");
$c_audio=file_get_contents("data/audio.txt");
$c_forward =file_get_contents("data/audio.txt");

if($text=="قفل الصور" and in_array($from_id,$sudo)){
file_put_contents("data/photo.txt","✅");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم قفل الصور .",
        ]);
}

if($text=="فتح الصور" and in_array($from_id,$sudo)){
file_put_contents("data/photo.txt","❌");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم فتح الصور .",
        ]);
}
if($text=="قفل الفيديو" and in_array($from_id,$sudo)){
file_put_contents("data/video.txt","✅");

bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم قفل الفيديو .",
        ]);
}
if($text=="فتح الفيديو" and in_array($from_id,$sudo)){
file_put_contents("data/video.txt","❌");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم فتح الفيديو .",
        ]);
}

if($text=="قفل الملفات" and in_array($from_id,$sudo)){
file_put_contents("data/document.txt","✅");

bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم  $text .",
        ]);
}
if($text=="فتح الملفات" and in_array($from_id,$sudo)){
file_put_contents("data/document.txt","❌");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم $text .",
        ]);
}

if($text=="قفل الملصقات" and in_array($from_id,$sudo)){
file_put_contents("data/sticker.txt","✅");

bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم  $text .",
        ]);
}
if($text=="فتح الملصقات" and in_array($from_id,$sudo)){
file_put_contents("data/sticker.txt","❌");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم $text .",
        ]);
}

if($text=="قفل الصوتيات" and in_array($from_id,$sudo)){
file_put_contents("data/voice.txt","✅");

bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم  $text .",
        ]);
}
if($text=="فتح الصوتيات" and in_array($from_id,$sudo)){
file_put_contents("data/voice.txt","❌");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم $text .",
        ]);
}


if($text=="قفل الموسيقى" and in_array($from_id,$sudo)){
file_put_contents("data/audio.txt","✅");

bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم  $text .",
        ]);
}
if($text=="فتح الموسيقى" and in_array($from_id,$sudo)){
file_put_contents("data/audio.txt","❌");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم $text .",
        ]);
}
if($text=="قفل التوجية" and in_array($from_id,$sudo)){
file_put_contents("data/forward.txt","✅");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم  $text .",
        ]);
}
if($text=="فتح التوجية" and in_array($from_id,$sudo)){
file_put_contents("data/forward.txt","❌");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم $text .",
        ]);
}

if($text=="قفل الكل" and in_array($from_id,$sudo)){
file_put_contents("data/forward.txt","✅");
file_put_contents("data/audio.txt","✅");
file_put_contents("data/voice.txt","✅");
file_put_contents("data/sticker.txt","✅");
file_put_contents("data/document.txt","✅");
file_put_contents("data/video.txt","✅");
file_put_contents("data/photo.txt","✅");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم  $text .",
        ]);
}
if($text=="فتح الكل" and in_array($from_id,$sudo)){
file_put_contents("data/forward.txt","❌");
file_put_contents("data/audio.txt","❌");
file_put_contents("data/voice.txt","❌");
file_put_contents("data/sticker.txt","❌");
file_put_contents("data/document.txt","❌");
file_put_contents("data/video.txt","❌");
file_put_contents("data/photo.txt","❌");
bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"◾ تم  $text .",
        ]);
}


$c_photo=file_get_contents("data/photo.txt");
$c_video=file_get_contents("data/video.txt");
$c_document=file_get_contents("data/document.txt");
$c_sticker=file_get_contents("data/sticker.txt");
$c_voice=file_get_contents("data/voice.txt");
$c_audio=file_get_contents("data/audio.txt");
$c_forward =file_get_contents("data/audio.txt");

if($data == "halh"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
تحكم بحماية وقفل الوسائط المتعدده

❌ =  مفتوح 
✅ = مقفل 

⭕ الحالة /
▫الصور : $c_photo
▫الفيديو : $c_video
▫الملفات : $c_document
▫الملصقات : $c_sticker
▫ الصوتيات : $c_voice
▫الموسيقى : $c_audio
▫التوجية : $c_forward
▫الراوبط : 

-----------------------",
'reply_to_message_id'=>$message->message_id,
]);
}


