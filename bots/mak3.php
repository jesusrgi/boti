<?php#*wataw*
#الازرار
if($start=="non"){
$start="لم يتم تعيين كليشة /start من قبل الادمن ";
}



if($text == "/start" and in_array($from_id,$sudo)){

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"اهلا قم باختيار مايناسبة
 ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"إضافة زر ",'callback_data'=>"addz"]],[['text'=>"إضافة أزرار داخل زر",'callback_data'=>"addzs"]],
[['text'=>"تعديل  زر",'callback_data'=>"tedilz"]],
[['text'=>"حذف زر  ",'callback_data'=>"delz"]],
[['text'=>"تحديث الازرار للمستخدمين",'callback_data'=>"update"]],
[['text'=>"إخفاء الازرار للمستخدمين",'callback_data'=>"remove"]],
[['text'=>"نسخ الازرار",'callback_data'=>"bakeup"],['text'=>"رفع نسخة ازرار",'callback_data'=>"uplode"]],

]
])
]);
}

$azrar = json_decode(file_get_contents("data/azrar.json"),true);
if (!file_exists("data/azrar.json")) {
 $put = [];
 file_put_contents("data/azrar.json", json_encode($put));
}

$amraz=$azrar["info"]["amr"];
if($data == "addz"){

$azrar["info"]["amr"]="$data" ;
#$json=json_encode($azrar);
file_put_contents("data/azrar.json", json_encode($azrar));

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"اهلا عزيزي المطور قم بارسال نص اسم الزر الذي تريد اضافتة 
 ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"تراجع",'callback_data'=>"home"]],
]
])
]);
}

if($text and $amraz == "addz" and in_array($from_id, $sudo)){
$rand=rand(111111,999999);

bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"تم حفظ اسم الزر الجديد بنجاح
هذا هو اسم الزر الذي قمت بإضافتة 
$text

- قم الان بارسال محتوى الزر 
",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"تراجع",'callback_data'=>"null"]],
]
])
]);
$azrar["info"]["amr"]="addztext" ;
$azrar["info"]["name"]="$text";
$azrar["info"]["rand"]="$rand";


#$json=json_encode($azrar);
file_put_contents("data/azrar.json", json_encode($azrar));

} 
 ###wataw### 
$randaz=$azrar["info"]["rand"];
$nameaz=$azrar["info"]["name"];
$randaz2=$azrar["info"]["rand2"];
$nameaz2=$azrar["info"]["name2"];

$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;


if($message and  in_array($from_id,$sudo) ){

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


}






if($message and !$data and $amraz == "addztext" and in_array($from_id, $sudo)){

if($text){

bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"تم حفظ محتوى الزر الذي قمت بإضافتة 
المحتوى هو :
$text
اذا اردت زر اخر قم بالضغط على ➕ 
او قم بالضغط على حفظ لحفظ الزر 
",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"حفظ",'callback_data'=>"sive"]],
[['text'=>"$nameaz",'callback_data'=>"null"]],
]
])
]);
$azrar["info"]["amr"]="null" ;
$azrar["info"]["انشاء"]["tepy"]="1";
$azrar["info"]["انشاء"]["name"]="$nameaz";
$azrar["info"]["انشاء"]["send"]="text";
$azrar["info"]["انشاء"]["text"]="$text";

$json=json_encode($azrar);
file_put_contents("data/azrar.json", json_encode($azrar));

}else{


$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$caption",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"حفظ",'callback_data'=>"sive"]],
[['text'=>"$nameaz",'callback_data'=>"null"]
],
]
])
]);

$azrar["info"]["amr"]="null" ;
$azrar["info"]["انشاء"]["tepy"]="1";
$azrar["info"]["انشاء"]["name"]="$nameaz";
$azrar["info"]["انشاء"]["send"]="$sens";
$azrar["info"]["انشاء"]["file_id"]="$file_id";
$azrar["info"]["انشاء"]["caption"]="$caption";
$json=json_encode($azrar);
file_put_contents("data/azrar.json", json_encode($azrar));



}
} 
 ###wataw### 

$randaz=$azrar["info"]["rand"];
$nameaz=$azrar["info"]["انشاء"]["name"];
$textaz=$azrar["info"]["انشاء"]["text"];
$sendjson=$azrar["info"]["انشاء"]["send"];
$filejson=$azrar["info"]["انشاء"]["file_id"];
$captionjson=$azrar["info"]["انشاء"]["caption"];
if($data == "sive"){
$azrar = json_decode(file_get_contents("azrar.json"),true);
if($sendjson=="text"){
$azrar["info"]["array"]["$nameaz"]="$randaz";
$azrar["info"]["azrar"][$randaz]["tepy"]="1";
$azrar["info"]["azrar"][$randaz]["name"]="$nameaz";
$azrar["info"]["azrar"][$randaz]["send"]="text";
$azrar["info"]["azrar"][$randaz]["text"]="$textaz";
}else{
$azrar["info"]["array"]["$nameaz"]="$randaz";
$azrar["info"]["azrar"][$randaz]["tepy"]="1";
$azrar["info"]["azrar"][$randaz]["name"]="$nameaz";
$azrar["info"]["azrar"][$randaz]["send"]="$sendjson";
$azrar["info"]["azrar"][$randaz]["file_id"]="$filejson";
$azrar["info"]["azrar"][$randaz]["caption"]="$captionjson";

}





file_put_contents("data/azrar.json", json_encode($azrar));

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"تم حفظ الازرار بنجاح ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"تراجع",'callback_data'=>"delzs"]],
]
])
]);
unset($azrar["info"]["انشاء"]);
$json=json_encode($azrar);
file_put_contents("data/azrar.json", json_encode($azrar));
} 
 ###wataw### 
 

 
if($text == "/start" or $text == "🏠 الصفحة الرئيسية"){
$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$orothe= $azrar["info"]["azrar"];
#$json=json_decode($azrars);

#$keyboard["keyboard"]=[];
foreach($orothe as $co ){

#$info=json_decode($info);
$namezrar= $co["name"];
$tepy= $co["tepy"];

if($tepy!="no"){
if($tepy=="2" and $i !=1){
$i=1;
$k1=$namezrar;
$tepy=null;
}
if($tepy=="2" and $i ==1){
$k=[['text'=>$namezrar],['text'=>$k1]];

$keyboard[] =$k;
$i=0;
}

if($tepy=="1" and $i==1){
$k1=[['text'=>$k1]];
$keyboard[] =$k1;
$k=[['text'=>$namezrar]];

$keyboard[] =$k;
$tepy=null;
$i=0;
}
if($tepy=="1" and $i!=1){
$keyboard[] = [['text'=>"$namezrar"]];

}


}
 
}
if( $i==1){
$k1=[['text'=>$k1]];
$keyboard[] =$k1;

$tepy=null;
$i=0;
}
$keyboard[] = [['text'=>"🏠 الصفحة الرئيسية"]];
 $reply_markup = json_encode(['one_time_keyboard'=>true,'resize_keyboard'=>true,'keyboard'=> $keyboard ]);

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>".$start
$txtfree",
'parse_mode'=>html,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
#'resize_keyboard'=>true,
#'one_time_keyboard'=>true,
'reply_markup'=>$reply_markup
]);

}

$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$code= $azrar["info"]["array"][$text];

if($code !=null){

$textaz= $azrar["info"]["azrar"][$code]["text"];
$sendjson= $azrar["info"]["azrar"][$code]["send"];
$file_idjson= $azrar["info"]["azrar"][$code]["file_id"];

$captionjson= $azrar["info"]["azrar"][$code]["caption"];



$azrars= $azrar["info"]["azrar"][$code]["azrar"];

if($azrars!=null){

foreach($azrars as $co ){

$orothe= $azrar["info"]["azrar"][$co];

$namezrar= $orothe["name"];



$keyboard[] = [['text'=>"$namezrar"]];

}
$keyboard[] = [['text'=>"🏠 الصفحة الرئيسية"]];

$reply_markup = json_encode(['one_time_keyboard'=>true,'resize_keyboard'=>true,'keyboard'=> $keyboard ]);


}

if($sendjson=="text"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
$textaz
",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,

'reply_markup'=>$reply_markup
]);
}else{
$sss=str_replace("send","",$sendjson);
bot($sendjson,[
"chat_id"=>$chat_id,
"$sss"=>"$file_idjson",
'caption'=>"$captionjson",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
]);



}
} 
 ###wataw### 
if($data == "addzs"){
$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$orothe= $azrar["info"]["azrar"];
#$json=json_decode($azrars);

#$keyboard["keyboard"]=[];
foreach($orothe as $co=>$name ){

#$info=json_decode($info);
$namezrar= $name["name"];
$ss="- $namezrar \n /add_$co\n";
$info=$info.$ss;


}
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"هذة قائمة الازرار قم باختيار الزر الذي تريد الازرار له 
$info",
#'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
#'resize_keyboard'=>true,
#'one_time_keyboard'=>true,
'reply_markup'=>$reply_markup
]);
}
if (stristr($text,"/add_") )
{
$text=str_replace("/add_","",$text);
file_put_contents("code.txt","$text");
$azrar = json_decode(file_get_contents("data/azrar.json"),true);

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" حسنا عزيزي 
تستطيع اضافه اكثر من زر داخل هذا الزر {$namezr } 
لإضافة زر قم بارسال اسم الزر الان :",
#'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
#'resize_keyboard'=>true,
#'one_time_keyboard'=>true,
'reply_markup'=>$reply_markup
]);
$azrar = json_decode(file_get_contents("azrar.json"),true);
$azrar["info"]["amr"]="azrars";

file_put_contents("data/azrar.json", json_encode($azrar));



}


if($text and $amraz == "azrars" and in_array($from_id, $sudo)){
$code = file_get_contents("code.txt");
$azrar = json_decode(file_get_contents("data/azrar.json"),true);

$namezr= $azrar["info"]["azrar"][$code]["name"];








$rand=rand(111111,999999);

$azrar["info"]["rand"]="$rand";

$azrar["info"]["azrar"][$code]["azrar"][]="$rand";
$azrar["info"]["amr"]="addztext2" ;
$azrar["info"]["name"]="$text";


bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"تم حفظ اسم الزر الجديد بنجاح 
- اسم الزر : $text 
- داخل زر : $namezr

! قم بارسال محتوى الزرار ...

",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"تراجع",'callback_data'=>"null"]],
]
])
]);
file_put_contents("data/azrar.json", json_encode($azrar));

}

$nameaz=$azrar["info"]["name"];

if($message and !$data and $amraz == "addztext2" and in_array($from_id, $sudo)){

if($text){

bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"تم حفظ محتوى الزر الذي قمت بإضافتة 
المحتوى هو :
$text
",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"$nameaz",'callback_data'=>"null"]],
]
])
]);
$azrar["info"]["array"]["$nameaz"]="$randaz";
$azrar["info"]["azrar"][$randaz]["tepy"]="no";
$azrar["info"]["azrar"][$randaz]["name"]="$nameaz";
$azrar["info"]["azrar"][$randaz]["send"]="text";
$azrar["info"]["azrar"][$randaz]["text"]="$text";

}else{


$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$caption",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[


[['text'=>"$nameaz",'callback_data'=>"null"]
],
]
])
]);

$azrar["info"]["array"]["$nameaz"]="$randaz";
$azrar["info"]["azrar"][$randaz]["tepy"]="no";
$azrar["info"]["azrar"][$randaz]["name"]="$nameaz";
$azrar["info"]["azrar"][$randaz]["send"]="$sens";
$azrar["info"]["azrar"][$randaz]["file_id"]="$file_id";
$azrar["info"]["azrar"][$randaz]["caption"]="$caption";


}
$azrar["info"]["amr"]="null" ;
file_put_contents("data/azrar.json", json_encode($azrar));

} 
 ###wataw### 


if($data == "delz"){
$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$orothe= $azrar["info"]["azrar"];
#$json=json_decode($azrars);

#$keyboard["keyboard"]=[];
foreach($orothe as $co=>$name ){

#$info=json_decode($info);
$namezrar= $name["name"];
$ss="- $namezrar \n /delete_$co\n";
$info=$info.$ss;


}
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"هذة قائمة الازرار قم بإختيار الزر الذي تريد حذفة 
$info",
#'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
#'resize_keyboard'=>true,
#'one_time_keyboard'=>true,
'reply_markup'=>$reply_markup
]);
}
if (stristr($text,"/delete_") )
{
$text=str_replace("/delete_","",$text);

$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$namezr= $azrar["info"]["azrar"][$text]["name"];


bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"تم حذف هذا الزر بنجاح 
نص الزر - $namezr
كود الزر - $text",
#'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
#'resize_keyboard'=>true,
#'one_time_keyboard'=>true,
'reply_markup'=>$reply_markup
]);
$azrar = json_decode(file_get_contents("azrar.json"),true);

$azrars= $azrar["info"]["azrar"][$text]["azrar"];
if($azrars!=null){

foreach($azrars as $co ){

$orothe= $azrar["info"]["azrar"][$co];

$namezrar= $orothe["name"];

unset($azrar["info"]["array"][$namezrar]);
unset($azrar["info"]["azrar"][$co]);

}}

unset($azrar["info"]["array"][$namezr]);
unset($azrar["info"]["azrar"][$text]);

$json=json_encode($azrar);
file_put_contents("data/azrar.json", json_encode($azrar));



} 
 ###wataw### 

if($data == "tedilz"){
$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$orothe= $azrar["info"]["azrar"];
#$json=json_decode($azrars);

#$keyboard["keyboard"]=[];
foreach($orothe as $co=>$name ){

#$info=json_decode($info);
$namezrar= $name["name"];
$ss="- $namezrar \n /t3dil_n_$co : /t3dil_m_$co\n";
$info=$info.$ss;


}
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" هذة قائمة الازرار قم بإخيار الزر الذي تريد تعديلة 
$info",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,

]);
}
if (stristr($text,"/t3dil_n_") )
{
$text=str_replace("/t3dil_n_","",$text);
file_put_contents("data/code.txt","$text");
$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$namezr= $azrar["info"]["azrar"][$text]["name"];


bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>" حسنا عزيزي 
 هذا هو اسم الزر {$namezr } 
قم بارسال الاسم الجديد للزر لكي يتم تعديلة 
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,

]);
$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$azrar["info"]["amr"]="t3dil_name";
$json=json_encode($azrar);
file_put_contents("data/azrar.json", json_encode($azrar));



}
if($text and $amraz == "t3dil_name" and in_array($from_id, $sudo)){
$code = file_get_contents("data/code.txt");

$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$namezr= $azrar["info"]["azrar"][$code]["name"];

unset($azrar["info"]["array"][$namezr]);

$azrar["info"]["array"]["$text"]="$code";

$azrar["info"]["azrar"][$code]["name"]="$text";




bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"تم تعديل أسم الزر 
من : $namezr

الى : $text
",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"تراجع",'callback_data'=>"null"]],
]
])
]);

$azrar["info"]["amr"]="null";
$json=json_encode($azrar);
file_put_contents("data/azrar.json", json_encode($azrar));

} 
 ###wataw### 
if (stristr($text,"/t3dil_m_") )
{
$text=str_replace("/t3dil_m_","",$text);
file_put_contents("data/code.txt","$text");
$azrar = json_decode(file_get_contents("data/azrar.json"),true);



$textaz= $azrar["info"]["azrar"][$text]["text"];
$sendjson= $azrar["info"]["azrar"][$text]["send"];
$file_idjson= $azrar["info"]["azrar"][$text]["file_id"];

$captionjson= $azrar["info"]["azrar"][$text]["caption"];


if($sendjson=="text"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
هذا هو محتوى الزر 

$textaz

قم بارسال المحتوى الجديد
",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,

'reply_markup'=>$reply_markup
]);
}else{
$sss=str_replace("send","",$sendjson);
bot($sendjson,[
"chat_id"=>$chat_id,
"$sss"=>"$file_idjson",
'caption'=>"$captionjson

هذا هو محتوى الزر قم بارسال المحتوى الجديد
",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
]);



}




$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$azrar["info"]["amr"]="t3dil_text";
$json=json_encode($azrar);
file_put_contents("data/azrar.json", json_encode($azrar));



}
if($message and !$data and $amraz == "t3dil_text" and in_array($from_id, $sudo)){
$code = file_get_contents("data/code.txt");

$azrar = json_decode(file_get_contents("data/azrar.json"),true);
$textzr= $azrar["info"]["azrar"][$code]["text"];



if($text){

bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"تم تعديل محتوى الزر الذي قمت بإضافتة 
المحتوى  الاول :
$textzr
المحتوى الجديد
$text
",
"message_id"=>$message_id,

]);
$azrar["info"]["azrar"][$randaz]["send"]="text";
$azrar["info"]["azrar"][$code]["text"]="$text";

}else{


$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$caption
- تم تعديل المحتوى بنجاح
",
"message_id"=>$message_id,

]);

$azrar["info"]["azrar"][$randaz]["send"]="$sens";
$azrar["info"]["azrar"][$randaz]["file_id"]="$file_id";
$azrar["info"]["azrar"][$randaz]["caption"]="$caption";


}
$azrar["info"]["amr"]="null" ;
file_put_contents("data/azrar.json", json_encode($azrar));

} 
 ###wataw### 
if($data == "bakeup"){

date_default_timezone_set("Asia/Damascus");
$time = date("{h-i-s}");
bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"جاري عمل النسخة الاحتياطية..
",
         ]);
bot('senddocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("data/azrar.json"),
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆\n 
The Time is : ".date('h:i A')." ⏰
File size : ",

]);

}



if($data == "uplode"){


bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"حسناً عزيزي قم بارسال ملف الازرار لكي يتم رفعة .
",
         ]);
$azrar["info"]["amr"]="uplode";
$json=json_encode($azrar);
file_put_contents("data/azrar.json", json_encode($azrar));
}


$repad = $message->reply_to_message->document;
$aduo = $repad->file_id;
if(isset($repad) and in_array($from_id,$sudo)){
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$aduo),true);
$path = $url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$okey = file_put_contents("data/azrar.json",file_get_contents($file));
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم رفع نسخه بنجاح.",
]);
}


$memberi = explode("\n",file_get_contents("sudo/member.txt"));
$cuntei = count($memberi)-1;
#update
if($data == "update"){

bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>'تحــــــــديث آلڪـــيبورد 
هل انت متاكد من تحديث الكيبورد لجميع المستخدمين ؟!.',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- ✅ نعم ' ,'callback_data'=>"yesupdate"]],

]
])
]);
}




if($data == "yesupdate" and in_array($from_id, $sudo)){

bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"⏳جاري تحديث الكيبورد انتظر قليلا من فظلك ",

]);
$keyboard[] = [['text'=>"🏠 الصفحة الرئيسية"]];

$reply_markup = json_encode(['one_time_keyboard'=>true,'resize_keyboard'=>true,'keyboard'=> $keyboard ]);


for($i=0;$i<count($memberi);$i++){
$get =bot('sendmessage',[
'chat_id'=>$memberi[$i], 
'text'=>"تحديث",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
]);
}

bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"- تم تحديث الكيبورد لجميع الاعضاء ",
]);
}
if($data == "remove"){


bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
'text'=>'تحــــــــديث آلڪـــيبورد 
هل انت متاكد من إخفاء الكيبورد لجميع المستخدمين ؟!.',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- ✅ نعم ' ,'callback_data'=>"yesremove"]],

]
])
]);
}


/////////////////markdown


if($data == "yesremove" and in_array($from_id, $sudo)){

bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"⏳جاري تحديث الكيبورد انتظر قليلا من فظلك ",

]);

for($i=0;$i<count($memberi);$i++){
$get =bot('sendmessage',[
'chat_id'=>$memberi[$i], 
'text'=>"تحديث
",
'reply_markup'=>json_encode([
'remove_keyboard'=>true,
])
]);
}

bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"- تم إخفاء الكيبورد عن جميع الاعضاء ",
]);
} 
 ###wataw### 











