<?php

ob_start();
//--------
$token = "[*[TOKEN]*]"; # Token
$tokensan3 = "[*[TOKENSAN3]*]"; # Token
$tokensan3plus = "[*[TOKENSAN3PLUS]*]"; # Token
$admin = file_get_contents("admin.txt");
$sudo = array("$admin","00");
$infobot=explode("\n",file_get_contents("info.txt"));


$usernamebot=$infobot['1'];
$no3mak=$infobot['6'];
//--------
define('API_KEY',$token);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}



$update = json_decode(file_get_contents("php://input"));
file_put_contents("update.txt",json_encode($update));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;$type = $message->chat->type;
$message_id = $message->message_id;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = strtolower($message->from->username);

$t =$message->chat->title; 

if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = strtolower($up->from->username); 
$name = $up->from->first_name.' '.$up->from->last_name;
$message_id = $up->message->message_id;
$mes_id = $update->callback_query->inline_message_id; 
$data = $up->data;
}

if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 

$user = strtolower($update->inline_query->from->username); 
}
$caption = $update->message->caption;
function getChatstats1($chat_id,$token) {
  $url = 'https://api.telegram.org/bot'.$token.'/getChatAdministrators?chat_id='.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->ok;
  return $result;
}
 function getmember($token,$idchannel,$from_id) {
  $join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$idchannel&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"Bad Request: user not found"') or strpos($join,'"ok": false') or strpos($join,'"status":"kicked"')) !== false){
$wataw="no";}else{$wataw="yes";}
return $wataw;


}
@mkdir("sudo");
@mkdir("data");
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
$admin=file_get_contents("admin.txt");








@$watawjson = json_decode(file_get_contents("../wataw.json"),true);

$url=$watawjson["info"]["url"];
$st_ch_bots=$watawjson["info"]["st_ch_bots"];
$id_ch_sudo=$watawjson["info"]["id_channel"];
$link_ch_sudo=$watawjson["info"]["link_channel"];
$user_bot_sudo=$watawjson["info"]["user_bot"];



@$watawsudo = json_decode(file_get_contents("$url/wataw.json"),true);
$st_ch_wataw=$watawsudo["info"]["st_ch_bots"];
$id_ch_wataw1=$watawsudo["info"]["id_channel"];
$link_ch_wataw1=$watawsudo["info"]["link_channel"];
$id_ch_wataw2=$watawsudo["info"]["id_channel2"];
$link_ch_wataw2=$watawsudo["info"]["link_channe2"];


if($message  and $st_ch_wataw=="مفعل"){
$stuts = getmember($tokensan3plus,$id_ch_wataw1,$from_id);
if($stuts=="no"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>"
⛔️| عذرا عزيزي
◾| البوت لا يعمل الا اذا قمت بالاشتراك بقناة البوت
◾| وعند الغاء الاشتراك فان البوت سوف يتوقف .

",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" اضغط للاشتراك في القناة ", 'url'=>"https://t.me/joinchat/$link_ch_wataw1"]],

]
])
]);
return false;}
$stuts = getmember($tokensan3plus,$id_ch_wataw2,$from_id);
if($stuts=="no"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>"
⛔️| عذرا عزيزي
◾| البوت لا يعمل الا اذا قمت بالاشتراك بقناة البوت
◾| وعند الغاء الاشتراك فان البوت سوف يتوقف .

",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" اضغط للاشتراك في القناة ", 'url'=>"https://t.me/joinchat/$link_ch_wataw2"]],

]
])
]);
return false;}

}







@$projson = json_decode(file_get_contents("pro.json"),true);
$pro=$projson["info"]["pro"];

$dateon=$projson["info"]["dateon"];

$dateoff=$projson["info"]["dateoff"];


$time=time()+(3600 * 1);

if($pro!="yes" or $pro==null){
#if($time < $dateoff){
$txtfree='<a href="https://t.me/'.$user_bot_sudo.'">• اضغط هنا لنصع '.$no3mak.' خاص بك </a>';
#}
}



if($message  and $st_ch_bots=="مفعل" and $pro!="yes"){
$stuts = getmember($tokensan3,$id_ch_sudo,$from_id);
if($stuts=="no"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>"
⛔️| عذرا عزيزي
◾| البوت لا يعمل الا اذا قمت بالاشتراك بقناة البوت
◾| وعند الغاء الاشتراك فان البوت سوف يتوقف .

",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" اضغط للاشتراك في القناة ", 'url'=>"https://t.me/joinchat/$link_ch_sudo"]],

]
])
]);
return false;}
}

if($message  and in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ لا تستطيع استخدام البوت انت محظور ❌
",
]);return false;}

@$infosudo = json_decode(file_get_contents("sudo.json"),true);
if (!file_exists("sudo.json")) {
#	$put = [];
	$infosudo["info"]["admins"][]="$admin";
	$infosudo["info"]["st_grop"]="ممنوع";
		$infosudo["info"]["st_channel"]="مسموح";
$infosudo["info"]["fwrmember"]="معطل";
$infosudo["info"]["tnbih"]="مفعل";
$infosudo["info"]["silk"]="مفعل";
$infosudo["info"]["allch"]="مفردة";
$infosudo["info"]["start"]="non";
$infosudo["info"]["klish_sil"]="كليشة الاشتراك الاجباري";


file_put_contents("sudo.json", json_encode($infosudo));
}
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$start=$infosudo["info"]["start"];
$klish_sil=$infosudo["info"]["klish_sil"];

$sudo=$infosudo["info"]["admins"];








if($message){
$false="";
if($allch!="مفردة"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];


$keyboard["inline_keyboard"]=[];

foreach($orothe as $co=>$s ){

$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($token,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";
$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];
}
if($silk=="مفعل"){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'url'=>$url]];

}else{
$txt=$txt."\n".$tt;

}
$false="yes";
}

}

}
$reply_markup=json_encode($keyboard);
if($false=="yes"){
	bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$klish_sil
$txt
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup,
]);
return $false;}
}else{
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];




foreach($orothe as $co=>$s ){
$keyboard["inline_keyboard"]=[];
$namechannel= $s["name"];
$st= $s["st"];
$userchannel=str_replace('@','', $s["user"]);
if($namechannel!=null){
$stuts = getmember($token,$co,$from_id);
if($stuts=="no"){
if($st=="عامة"){
$url="t.me/$userchannel";
$tt=$s["user"];
}else{
$url =$s["user"];
$tt=$s["user"];

}
if($silk=="مفعل"){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'url'=>$url]];

}


#$reply_markup=json_encode($keyboard);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$klish_sil
$tt
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode($keyboard),
]);
return $false;

}

}

}

}


}

if($update and !in_array($from_id,$member)){file_put_contents("sudo/member.txt","$from_id\n",FILE_APPEND);

if($tnbih == "مفعل" ){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- دخل شخص إلى البوت 🚶‍♂
[....$name](tg://user?id=$from_id) 
- ايديه $from_id 🆔
- معرفة : $user
---------
عدد اعضاء بوتك هو : $cunte
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"markdown",
]);
}}

if($countban<=0){
$countban="لايوجد محظورين";
}
if($text == "/start" and in_array($from_id,$sudo)){

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"اهلا بك عزيزي الادمن في قائمة التحكم الخاص 

- الاحصائية : 

• عدد الاعضاء : $cunte

• المحظورين: $countban

",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- تعيين رسالة /start ",'callback_data'=>"start"]],[['text'=>"- التوجية من الاعضاء :$fwrmember",'callback_data'=>"fwrmember"]],
[['text'=>"- تنبية دخول الاعضاء : $tnbih",'callback_data'=>"tnbih"]],


[['text'=>"مسح قناة",'callback_data'=>"delchannel"],['text'=>"إضافة قناة",'callback_data'=>"addchannel"]],[['text'=>"- عرض قنوات الاشتراك الاجباري ",'callback_data'=>"viwechannel"]],
[['text'=>"- تعيين رسالة الاشتراك الاجباري ",'callback_data'=>"klish_sil"]],
[['text'=>"- خيارات عرض الاشتراك الاجباري ",'callback_data'=>"null"]],
[['text'=>"- ازرار انلاين :$silk ",'callback_data'=>"silk"],
['text'=>"- الرسالة :$allch ",'callback_data'=>"allch"]],
[['text'=>"- معلومات البوت ",'callback_data'=>"botinfofree"]],
[['text'=>"- إعدادات بوت التمويل ",'callback_data'=>"sitingbots"]],

]
])
]);
}

function sendwataw($chat_id,$message_id){

$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
if($countban<=0){
$countban="لايوجد محظورين";
}	

bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"اهلا بك عزيزي الادمن في قائمة التحكم الخاص 

- الاحصائية : 

• عدد الاعضاء : $cunte

• المحظورين: $countban

",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- تعيين رسالة /start ",'callback_data'=>"start"]],[['text'=>"- التوجية من الاعضاء :$fwrmember",'callback_data'=>"fwrmember"]],


[['text'=>"- تنبية دخول الاعضاء : $tnbih",'callback_data'=>"tnbih"]],

[['text'=>"مسح قناة",'callback_data'=>"delchannel"],['text'=>"إضافة قناة",'callback_data'=>"addchannel"]],

[['text'=>"- عرض قنوات الاشتراك الاجباري ",'callback_data'=>"viwechannel"]],
[['text'=>"- تعيين رسالة الاشتراك الاجباري ",'callback_data'=>"klish_sil"]],
[['text'=>"- خيارات عرض الاشتراك الاجباري ",'callback_data'=>"null"]],
[['text'=>"- ازرار انلاين :$silk ",'callback_data'=>"silk"],
['text'=>"- الرسالة :$allch ",'callback_data'=>"allch"]],
[['text'=>"- معلومات البوت ",'callback_data'=>"botinfofree"]],
[['text'=>"- إعدادات بوت التمويل ",'callback_data'=>"sitingbots"]],
]
])
]);
} 
 ###wataw### 
if($data == "botinfofree"){
$infobot=explode("\n",file_get_contents("info.txt"));

$tokenbot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
if($pro=="yes"){
$dayon = date('Y/m/d',$dateon);
$timeon =date('H:i:s A',$dateon);
$dayoff = date('Y/m/d',$dateoff);
$timeoff =date('H:i:s A',$dateon);



$tx="✅ مفعل 

- وقت الاشتراك : 
⏰ $timeon
📅 $dayon
- موعد انتهاء الاشتراك : 
⏰ $timeoff
📅 $dayoff
";

}else{$tx="🚫 لايوجد لديك اشتراك مدفوع";}

bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- ℹ معلومات بوتك 
النوع : $no3mak
توكن : `$tokenbot`
يوزر البوت : *@$userbot*
ايدي البوت : `$idbots`

🔰 حالة الاشتراك المدفوع :$tx
 
- الاحصائية : 

• عدد الاعضاء : $cunte

• المحظورين: $countban


 ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- العودة  ",'callback_data'=>"home"]],
]
])
]);

}

//~~~~~~~~~~~//

if($data == "start"){
$infosudo["info"]["amr"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال نص رسالة /start
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);

}
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="start" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ كليشة /start 
-الكليشة : 
$text ",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["start"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($data == "klish_sil"){
$infosudo["info"]["amr"]="klish_sil";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال كليشة الاشتراك الاجباريي 
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);

}
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="klish_sil" and in_array($from_id,$sudo)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ كليشة الاشتراك الاجباري 
-الكليشة : 
$text ",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
$infosudo["info"]["amr"]="null";
$infosudo["info"]["klish_sil"]="$text";
file_put_contents("sudo.json", json_encode($infosudo));
}

if($data == "home" and in_array($from_id,$sudo)){
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "fwrmember"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
if($fwrmember=="مفعل"){
$infosudo["info"]["fwrmember"]="معطل";
}
if($fwrmember=="معطل"){
$infosudo["info"]["fwrmember"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "tnbih"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$tnbih=$infosudo["info"]["tnbih"];
if($tnbih=="مفعل"){
$infosudo["info"]["tnbih"]="معطل";
}
if($tnbih=="معطل"){
$infosudo["info"]["tnbih"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}

if($data == "silk"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$skil=$infosudo["info"]["silk"];
if($skil=="مفعل"){
$infosudo["info"]["silk"]="معطل";
}
if($skil=="معطل"){
$infosudo["info"]["silk"]="مفعل";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}

if($data == "allch"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$allch=$infosudo["info"]["allch"];
if($allch=="مفردة"){
$infosudo["info"]["allch"]="مجموعة";
}
if($allch=="مجموعة"){
$infosudo["info"]["allch"]="مفردة";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}


if($data == "addchannel"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$count=count($orothe);
if($count<4){
$infosudo["info"]["amr"]="addchannel";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- اذا كانت القناة التي تريد اضافتها عامة قم بارسال معرفها .
* اذا كانت خاصة قم بإعادة توجية منشور من القناة إلى هنا .
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}else{
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- 🚫 لا يمكنك اضافة اكثر من  3 قنوات للإشتراك الاجباري 
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
}
}
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="addchannel" and in_array($from_id,$sudo) and !$message->forward_from_chat ){

$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
$idchan=$ch_id;
if($ch_id != null){

  $checkadmin = getChatstats1($text,$token);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->title;
$infosudo["info"]["channel"][$ch_id]["st"]="عامة";
$infosudo["info"]["channel"][$ch_id]["user"]="$text";
$infosudo["info"]["channel"][$ch_id]["name"]="$namechannel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
user : $text 
name : $namechannel
id : $ch_id
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- إضافة قناة آخرى  ",'callback_data'=>"addchannel"]],
 ]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- إعادة المحاولة   ",'callback_data'=>"addchannel"]],
 ]])
]);

}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
❌ لم تتم إضافة القناة لا توجد قناة تمتلك هذا المعرف 
$text ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
 [['text'=>"- عودة   ",'callback_data'=>"home"]],
 ]])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
if($message->forward_from_chat and $infosudo["info"]["amr"]=="addchannel" and in_array($from_id, $sudo)){
$id_channel= $message->forward_from_chat->id;
if($id_channel != null){

  $checkadmin = getChatstats1($id_channel,$token);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$id_channel"))->result->title;
$infosudo["info"]["channel_id"]="$id_channel";


bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
user : • قناة خاصة • 
name : $namechannel
id : $id_channel

*يجب عليك ارسال رابط القناة الخاص قم بارسالة الان
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- الغاء ",'callback_data'=>"addchannel"]],
 ]])
 ]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- إعادة المحاولة   ",'callback_data'=>"addchannel"]],
 ]])
]);

}
}
$infosudo["info"]["amr"]="channel_id";
file_put_contents("sudo.json", json_encode($infosudo));
}
$channel_id=$infosudo["info"]["channel_id"];

if($text  and $text !="/start" and $infosudo["info"]["amr"]=="channel_id" and in_array($from_id,$sudo) and !$message->forward_from_chat ){

  $checkadmin = getChatstats1($channel_id,$token);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$channel_id"))->result->title;
$infosudo["info"]["channel"][$channel_id]["st"]="خاصة";
$infosudo["info"]["channel"][$channel_id]["user"]="$text";
$infosudo["info"]["channel"][$channel_id]["name"]="$namechannel";
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
link : $text 
name : $namechannel
id : $channel_id
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- إضافة قناة آخرى  ",'callback_data'=>"addchannel"]],
 ]])
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- إعادة المحاولة   ",'callback_data'=>"addchannel"]],
 ]])
]);

}

$infosudo["info"]["amr"]="null";
$infosudo["info"]["channel_id"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}






if($data == "viwechannel" and in_array($from_id, $sudo)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];


$keyboard["inline_keyboard"]=[];

foreach($orothe as $co ){

$namechannel= $co["name"];
$st= $co["st"];
$userchannel= $co["user"];
if($namechannel!=null){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'callback_data'=>'null']];
if($st=="خاصة"){
$userchannel="null";
}
$keyboard["inline_keyboard"][] =
[['text'=>$userchannel,'callback_data'=>'cull'],['text'=>$st,'callback_data'=>'null']];
}}
	$keyboard["inline_keyboard"][] = [['text'=>"- عودة  ",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
	
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- هذة هي قنوات الاشتراك الاجباري الخاصة بك 
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
]);

}


if($data == "delchannel" and in_array($from_id, $sudo)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];


$keyboard["inline_keyboard"]=[];

foreach($orothe as $co=>$s ){

$namechannel= $s["name"];
$st= $s["st"];
$userchannel= $s["user"];
if($namechannel!=null){
	$keyboard["inline_keyboard"][] = [['text'=>$namechannel,'callback_data'=>'null']];
if($st=="خاصة"){
$userchannel="null";
}
$keyboard["inline_keyboard"][] =
[['text'=>'🚫 حذف','callback_data'=>'deletchannel '.$co],['text'=>$st,'callback_data'=>'null']];
}}
	$keyboard["inline_keyboard"][] = [['text'=>"- عودة  ",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
	
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بالضغط على خيار الحذف بالاسفل 
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
]);

}

if(preg_match('/^(deletchannel) (.*)/s', $data)){
$nn = str_replace('deletchannel ',"",$data);
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حذف القناة بنجاح 
-id $nn
",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- عودة  ",'callback_data'=>"delchannel"]],
 ]])
]);
unset($infosudo["info"]["channel"][$nn]);
file_put_contents("sudo.json", json_encode($infosudo));
}

if($message and $fwrmember=="مفعل"){
bot('ForwardMessage',[
 'chat_id'=>$admin,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
]);
}



if($start=="non"){
$start="
- اهلا بك  ؛ $name
️ ";

}

$up = $update->callback_query;
$data = $up->data;
$forward_from = $update->message->forward_from;
$forward_from_id = $forward_from->id;
$forward_from_username = $forward_from->username;
$forward_from_first_name = $forward_from->first_name;
$reply = $update->message->reply_to_message->forward_from->id;
$reply_username = $update->message->reply_to_message->forward_from->username;
$reply_first = $update->message->reply_to_message->forward_from->first_name;


$membercall = $update->callback_query->id;
$tc = $update->message->chat->type;
$infobot=explode("\n",file_get_contents("info.txt"));


$usernamebot=$infobot['1'];

$channel = str_replace('@',file_get_contents("data/channelyes.txt"));
$admin = file_get_contents("admin.txt");
$channelcode = str_replace('@',file_get_contents("data/channelcode.txt"));
$coins_start=file_get_contents("data/coins_start.txt");

$channel = str_replace('@',file_get_contents("data/channelyes.txt"));
$admin = file_get_contents("admin.txt");
$channelcode = str_replace('@',file_get_contents("data/channelcode.txt"));
$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tch = $forchannel->result->status;
$forchannelq = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$tchq = $forchannelq->result->status;


function getChatMembersCount($chat_id,$token) {
  $url = 'https://api.telegram.org/bot'.$token.'/getChatMembersCount?chat_id=@'.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->result;
  return $result;
}
function getChatstats($chat_id,$token) {
  $url = 'https://api.telegram.org/bot'.$token.'/getChatAdministrators?chat_id=@'.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->ok;
  return $result;
}


if($coins_start==null){
$coins_start=5;
}
$adna_coins=file_get_contents("data/adna_coins.txt");

if($adna_coins==null){
$adna_coins=40;
}
$day_coins=file_get_contents("data/day_coins.txt");

if($day_coins==null){
$day_coins=5;
}

$username_admin=file_get_contents("data/username_admin.txt");


$Dev = array("$admin");
$sudo = $admin;



mkdir("data");

@$user = json_decode(file_get_contents("data/user.json"),true);
@$juser = json_decode(file_get_contents("data/$from_id.json"),true);
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);

if(!in_array($from_id, $user["userlist"]) == true) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }

if(in_array($from_id, $user["blocklist"])) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انت محظور من البوت 🚫
بسبب عدم اتباعك للقوانين.

-",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
    		]);
}
if(preg_match("/^\/(start) (code)_(.*)/s",$text)){
   preg_match("/^\/(start) (code)_(.*)/s",$text,$matchaa);
  $codematch = $matchaa[3];
  $code = $user["codecoin"];
  if ($codematch == $code) {
  $coincode = $user["howcoincode"];

           bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>"تم الحصول على النقاط بنجاح ✅

  تمت اضافة $coincode الى حسابك 💰
  ",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"رجوع ↪️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
   ]);
   bot('sendmessage',[
    'chat_id'=>"@$channelcode",
    'text'=>"تهانينا 💸❗️
حصل [ $name ]
على الهدية : $code
التي قيمتها ($coincode)
الف مبروك 💐

-"
]);
  unset($user["codecoin"]);
  unset($user["howcoincode"]);
  $user = json_encode($user,true);
  file_put_contents("data/user.json",$user);
  $coin = $juser["userfild"]["$from_id"]["coin"];
  $coinplus = $coin + $coincode;
  $juser["userfild"]["$from_id"]["coin"]="$coinplus";
  $juser = json_encode($juser,true);
  file_put_contents("data/$from_id.json",$juser);
  }
  else
  {
  	bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>"لم تنجح العملية :(

  ⚠️ بسبب خطأ في الرمز أو تم أخذه من قبل شخص اخر",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"رجوع ↪️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
   ]);
  }
}
$G =array("🥺🌻","😋🌹","😎💐","🌚🍂","🙃🌼","🌝🍃","😏🌺"); 
$G1 = array_rand($G, 1); $H = $G[$G1];
if($text=="/start" && $tc == "private" and !preg_match("/^\/(start) (code)_(.*)/s",$text)){
if(in_array($from_id, $user["userlist"]) == true) {
	
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$start
اجمع النقاط واستبدلها بلأعضاء $H
🆔 : #$from_id

$txtfree
",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
   	'reply_markup'=>json_encode([
  	'inline_keyboard'=>[
                 [['text'=>"💰 جمع نقاط 💰",'callback_data'=>'takecoinn'],['text'=>"👤 طلب اعضاء 👤",'callback_data'=>'takemember']],
      [['text'=>"💡 قنواتي 💡",'callback_data'=>'order'],['text'=>"⁉️ شرح البوت ⁉️",'callback_data'=>'learn']],
      [['text'=>"",'callback_data'=>'sup'],['text'=>"📤 تحويل النقاط 📤",'callback_data'=>'sendcoin']],
      [['text'=>"🎖احصائيات الرابط والنقاط🎖",'callback_data'=>'accont']],
	  	],
	  	'resize_keyboard'=>true,
  	])
  	]);

$arr = $user['finance'];
$channel = array_rand($arr);
$channelincoin = $arr[$channel][1];
$channelssssss = $arr[$channel][0];
$join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channelssssss&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"')) !== false){
if(!in_array($channelssssss, $juser["userfild"]["$from_id"]["channeljoin"])) {
if($channelincoin > 0){
$text_add = "انضم في القناة ".$arr[$channel][0]." ✅
 واحصل على 10 نقاط 💰";
           bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>$text_add,
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"تحقق من الانظمام ♻️",'callback_data'=>"finance_".$channel]
  				   ],
                       ]
                 ])
   ]);
}else {
@$usernew = json_decode(file_get_contents("data/user.json"),true);
unset($usernew['finance'][$channel]);
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}
}
}
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
  bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"$start
اجمع النقاط واستبدلها بلأعضاء 🌚🌷
🆔 : #$from_id

$txtfree

",
  'parse_mode'=>"html",
  'disable_web_page_preview'=>true,
     	'reply_markup'=>json_encode([
    	'inline_keyboard'=>[
                [['text'=>"💰 جمع نقاط 💰",'callback_data'=>'takecoinn'],['text'=>"👤 طلب اعضاء 👤",'callback_data'=>'takemember']],
      [['text'=>"💡 قنواتي 💡",'callback_data'=>'order'],['text'=>"⁉️ شرح البوت ⁉️",'callback_data'=>'learn']],
      [['text'=>"",'callback_data'=>'sup'],['text'=>"📤 تحويل النقاط 📤",'callback_data'=>'sendcoin']],
      [['text'=>"🎖احصائيات الرابط والنقاط🎖",'callback_data'=>'accont']],
	  	],
  	  	'resize_keyboard'=>true,
    	])
    	]);
$arr = $user['finance'];
$channel = array_rand($arr);
$channelincoin = $arr[$channel][1];
$channelssssss = $arr[$channel][0];
$join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channelssssss&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"')) !== false){
if(!in_array($channelssssss, $juser["userfild"]["$from_id"]["channeljoin"])) {
if($channelincoin > 0){
$text_add = "انضم في القناة ".$arr[$channel][0]." ✅
 واحصل على 10 نقاط 💰";
           bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>$text_add,
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"تحقق من الانظمام ♻️",'callback_data'=>"finance_".$channel]
  				   ],
                       ]
                 ])
   ]);
}else {
@$usernew = json_decode(file_get_contents("data/user.json"),true);
unset($usernew['finance'][$channel]);
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}
}
}
$juser = json_decode(file_get_contents("data/$from_id.json"),true);
$juser["userfild"]["$from_id"]["invite"]="0";
$juser["userfild"]["$from_id"]["coin"]="0";
$juser["userfild"]["$from_id"]["setchannel"]="لا يوجد !";
$juser["userfild"]["$from_id"]["setmember"]="لا يوجد !";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif(strpos($text , '/start ') !== false   and !preg_match("/^\/(start) (code)_(.*)/s",$text)) {
$start = str_replace("/start ","",$text);
if(in_array($from_id, $user["userlist"])) {
  bot('sendmessage',[
  	'chat_id'=>$chat_id,
  		'text'=>"$start
اجمع النقاط واستبدلها بلأعضاء 🌚🌷
🆔 : #$from_id

$txtfree

",
  'parse_mode'=>"html",
  'disable_web_page_preview'=>true,
     	'reply_markup'=>json_encode([
    	'inline_keyboard'=>[
                 [['text'=>"💰 جمع نقاط 💰",'callback_data'=>'takecoinn'],['text'=>"👤 طلب اعضاء 👤",'callback_data'=>'takemember']],
      [['text'=>"💡 قنواتي 💡",'callback_data'=>'order'],['text'=>"⁉️ شرح البوت ⁉️",'callback_data'=>'learn']],
      [['text'=>"",'callback_data'=>'sup'],['text'=>"📤 تحويل النقاط 📤",'callback_data'=>'sendcoin']],
      [['text'=>"🎖احصائيات الرابط والنقاط🎖",'callback_data'=>'accont']],
	  	],
  	  	'resize_keyboard'=>true,
    	])
    	]);
$arr = $user['finance'];
$channel = array_rand($arr);
$channelincoin = $arr[$channel][1];
$channelssssss = $arr[$channel][0];
$join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channelssssss&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"')) !== false){
if(!in_array($channelssssss, $juser["userfild"]["$from_id"]["channeljoin"])) {
if($channelincoin > 0){
$text_add = "انضم في القناة ".$arr[$channel][0]." ✅
 واحصل على 10 نقاط 💰";
           bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>$text_add,
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"تحقق من الانظمام ♻️",'callback_data'=>"finance_".$channel]
  				   ],
                       ]
                 ])
   ]);
}else {
@$usernew = json_decode(file_get_contents("data/user.json"),true);
unset($usernew['finance'][$channel]);
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}
}
}
}
else
{
$juser = json_decode(file_get_contents("data/$from_id.json"),true);
$inuser = json_decode(file_get_contents("data/$start.json"),true);
$member = $inuser["userfild"]["$start"]["invite"];
$coin = $inuser["userfild"]["$start"]["coin"];
$memberplus = $member + 1;
$coinplus = $coin  + $coins_start;
bot('sendmessage',[
	'chat_id'=>$start,
	'text'=>"• تم دخول عضو من خلال رابطك الخاص 😃

• عدد الاعضاء الذي استخدمو رابطك » $memberplus
• عدد النقاط الخاصة بك » $coinplus",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع 🔙",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
bot('sendmessage',[
  'chat_id'=>$chat_id,
 	'text'=>"$start
اجمع النقاط واستبدلها بلأعضاء 🌚🌷
🆔 : #$from_id

$txtfree

",
  'parse_mode'=>"html",
'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
              [['text'=>"💰 جمع نقاط 💰",'callback_data'=>'takecoinn'],['text'=>"👤 طلب اعضاء 👤",'callback_data'=>'takemember']],
      [['text'=>"💡 قنواتي 💡",'callback_data'=>'order'],['text'=>"⁉️ شرح البوت ⁉️",'callback_data'=>'learn']],
      [['text'=>"",'callback_data'=>'sup'],['text'=>"📤 تحويل النقاط 📤",'callback_data'=>'sendcoin']],
      [['text'=>"🎖احصائيات الرابط والنقاط🎖",'callback_data'=>'accont']],
	  	],
      'resize_keyboard'=>true,
    ])
    ]);
$arr = $user['finance'];
$channel = array_rand($arr);
$channelincoin = $arr[$channel][1];
$channelssssss = $arr[$channel][0];
$join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channelssssss&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"')) !== false){
if(!in_array($channelssssss, $juser["userfild"]["$from_id"]["channeljoin"])) {
if($channelincoin > 0){
$text_add = "انضم في القناة ".$arr[$channel][0]." ✅
 واحصل على 10 نقاط 💰";
           bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>$text_add,
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"تحقق من الانظمام ♻️",'callback_data'=>"finance_".$channel]
  				   ],
                       ]
                 ])
   ]);
}else {
@$usernew = json_decode(file_get_contents("data/user.json"),true);
unset($usernew['finance'][$channel]);
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}
}
}
$inuser["userfild"]["$start"]["invite"]="$memberplus";
$inuser["userfild"]["$start"]["coin"]="$coinplus";
$inuser = json_encode($inuser,true);
file_put_contents("data/$start.json",$inuser);
$juser["userfild"]["$from_id"]["invite"]="0";
$juser["userfild"]["$from_id"]["coin"]="0";
$juser["userfild"]["$from_id"]["setchannel"]="لا يوجد !";
$juser["userfild"]["$from_id"]["setmember"]="لا يوجد !";
$juser["userfild"]["$from_id"]["inviter"]="$start";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif($cuser["userfild"]["$from_id"]["channeljoin"] == true){
$allchannel = $cuser["userfild"]["$from_id"]["channeljoin"];
for($z = 0;$z <= count($allchannel) -1;$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if($allchannel[$z] == true){
if(in_array($allchannel[$z], $user["channellist"])) {
     bot('answercallbackquery', [
              'callback_query_id' =>$membercall,
            'text' => "تم خصم 2 من نقاطك بسبب مغادرة @$allchannel[$z] القناة ⚠️",
            'show_alert' =>false
         ]);
unset($cuser["userfild"]["$from_id"]["channeljoin"][$z]);
$cuser["userfild"]["$from_id"]["channeljoin"]=array_values($cuser["userfild"]["$from_id"]["channeljoin"]);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$pluscoin = $coin - 2;
$cuser["userfild"]["$from_id"]["coin"]="$pluscoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
}

if($allchannel[$z] == true){
if(in_array($allchannel[$z], $user["channellist"])) {
     bot('SendMessage', [
              'chat_id'=>$chat_id,
            'text' => "⚠️ عذرا عزيزي ❗️
لقد قمت بمغادرة قنوات ولايمكنك طلب اعضاء 🚫.
الا عند رجوعك الى القنوات المشاركة 📜

▪️ملاحضة :- عند مغادرتك اي من القنوات يتم الخصم 2 نقطة لكل قناة

▪️اشترك واستعيد قنواتك 🌐
@$allchannel[$z]

▪️بعدها اضغط على تحديث 🔄",
            'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [['text'=>"تحديث 🔄",'callback_data'=>'takecoin']]
                     ]
               ])
         ]);
unset($cuser["userfild"]["$from_id"]["channeljoin"][$z]);
$cuser["userfild"]["$from_id"]["channeljoin"]=array_values($cuser["userfild"]["$from_id"]["channeljoin"]);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$pluscoin = $coin - 2;
$cuser["userfild"]["$from_id"]["coin"]="$pluscoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
}
}
if($data=="learn"){
 bot('editmessagetext',[
          'chat_id'=>$chat_id,
       'message_id'=>$message_id,
       'text'=>"طريقة عمل البوت تكون بتحويل النقاط الى اعضاء تضيفهم الى قناتك 👥
تكسب النقاط من خلال :
 الانضمام بقنوات {2💰}
يعطيك 2 💰 مقابل انضمامك لقناة واحده ☝🏻
في حال كنت قد غادرت احدى القنوات الي اخذت نقاط مقابل الانضمام فيها فلن تتمكن من طلب اعضاء حتى تقوم بلرجوع اليها 😅

مشاركة الرابط { $coins_start 💰}
يعطيك ($coins_start 💰) مقابل كل شخص جديد يدخل البوت من خلال رابطك Ⓜ️

بعد ان تقوم بجمع ع الاقل 40 نقطة اضغط على طلب اعضاء 👤
 يتم تحويل النقاط الى اعضاء بهذا المقياس 🔰
 2 💰 = 1 👤
 20 💰 = 10 👤 
بعد ان تقوم بطلب الاعضاء 👤 سيتم تثبيت قناتك في  ( الانضمام بقنوات 💡 )
  سينضم الاعضاء بقناتك مقابل 2 💰 نقاط تضاف لهم
بعد اكتمال دخول الاعضاء سيتم اعلامك بأنتهاء طلبك وانتهاء دخول العدد الذي طلبته 😼",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
         ]);
}
if($data=="panel"){
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
  bot('editmessagetext',[
          'chat_id'=>$chat_id,
       'message_id'=>$message_id,
       'text'=>"اهلا بك يا : $name
       
اجمع النقاط واستبدلها بلأعضاء 😊🌼
نقاطك : ( $coin ) 💰",
     'parse_mode'=>"html",
     'disable_web_page_preview'=>true,
         'reply_markup'=>json_encode([
         'inline_keyboard'=>[
                [['text'=>"💰 جمع نقاط 💰",'callback_data'=>'takecoinn'],['text'=>"👤 طلب اعضاء 👤",'callback_data'=>'takemember']],
      [['text'=>"💡 قنواتي 💡",'callback_data'=>'order'],['text'=>"⁉️ شرح البوت ⁉️",'callback_data'=>'learn']],
      [['text'=>"",'callback_data'=>'sup'],['text'=>"📤 تحويل النقاط 📤",'callback_data'=>'sendcoin']],
      [['text'=>"🎖احصائيات الرابط والنقاط🎖",'callback_data'=>'accont']],
	  	],
           'resize_keyboard'=>true,

         ])
         ]);
$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$cuser["userfild"]["$from_id"]["file"]="none";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}

elseif($data=="takecoinn" ){
@$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"نقاطك : ( $coin ) 💰
🔦 انضمام بقنــوات ( 💰 2 )
🌀 مشاركة الـرابــط ( 💰 $coins_start )
🎁 الهدية اليـوميــة ( 💰 $day_coins )
➖ 
",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [['text'=>"انضمام بقنوات 💡",'callback_data'=>'takecoin'],['text'=>"مشاركة الرابط Ⓜ️",'callback_data'=>'member']],
   [['text'=>"هدية يومية 🎁",'callback_data'=>"kk"]],
     [['text'=>"هدية كود 🎁",'callback_data'=>"code"]],
   [['text'=>"شراء نقاط 💰",'url'=>'t.me/'.str_replace('@','',$username_admin)]],
   [['text'=>"رجوع 🔙",'callback_data'=>'panel']],
  [
  				   ],
                       ]
                 ])
  	]);
}
elseif($data=="code"){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"رمز الهدية 💰

قم بجلبه من قناة ( @$channelcode ) وارساله الى هنا ⚙️
💡للحصول على نقاط مجانية",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["file"]="takecodecoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'takecodecoin') {
$code = $user["codecoin"];
if ($text == $code) {
$coincode = $user["howcoincode"];
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم الحصول على النقاط بنجاح ✅

تمت اضافة $coincode الى حسابك 💰
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
             ['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
unset($user["codecoin"]);
unset($user["howcoincode"]);
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
$coin = $juser["userfild"]["$from_id"]["coin"];
$coinplus = $coin + $coincode;
$juser["userfild"]["$from_id"]["coin"]="$coinplus";
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
	bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لم تنجح العملية :(

⚠️ بسبب خطأ في الرمز أو تم أخذه من قبل شخص اخر",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
             ['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
elseif($data=="takecoin" ){
$rules = $cuser["userfild"]["$from_id"]["acceptrules"];
if($rules == false){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"انتضر عزيزي 💜'
🔸عليك قراءة جميع القنوانين :-
🔹كل اشتراك بلقناة تحصل على نقطة واحدة
🔸اذا قمت بمغادرة قناة فان يتم خصم 2 نقاط من كل قناة تغادرها
🔹عند اضافة قناة غير اخلاقية يتم حذفها وحضرك من استخدام البوت

🔸ملاحضة :- اذا كانت لديك مشكلة مع قناة او عند ضهور قناة احترافية
🔹عليك التبليغ من خلال كلمة الدعم ويم حذفها مباشرآ .

 اضغط الان على بدء التجميع ☑️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"بدء التجميع ☑️",'callback_data'=>"takecoin"],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
[
				   ],
                     ]
               ])
	]);
$cuser["userfild"]["$from_id"]["acceptrules"]="true";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		   }
else
{
if($tchq != 'member' && $tchq != 'creator' && $tchq != 'administrator'){
$join = $cuser["userfild"]["$from_id"]["canceljoin"];
if($join == false){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"▪️عزيزي اشترك بلقناة الرئيسية ( @$channel )
⚠️ عند اشتراكك ستحصل على نقطتين مجانا .

بعد الاشتراك اضغط على كلمة [تحقق من الانضمام 🔄]",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [['text'=>"انضمام 🔭",'url'=>"https://t.me/$channel"]],
                     [['text'=>"تحقق من الانضمام 🔄",'callback_data'=>'mainchannel'],['text'=>"مشترك مسبقا ❗️",'callback_data'=>'takecoin']],
                     [['text'=>"رجوع ↪️",'callback_data'=>'panel']],
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["canceljoin"]="true";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
else
{
$allchannel = $user["channellist"];
for($z = 0;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if ($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"نقاطك : ( $coin ) 💰
▪️ انضم بــ  @$username  
وستحصل على 2 نقاط 🌝✌🏻
يرجى الابلاغ عن القنوات المخالفة 📛
➖➖➖➖➖➖➖➖➖➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"تحقق من الانضمام 🔄",'callback_data'=>'truechannel'],['text'=>"تخطي 🔜",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel'],['text'=>"رجوع ↪️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser["userfild"]["$from_id"]["arraychannel"]="$z";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
}
else
{
$allchannel = $user["channellist"];
for($z = 0;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if ($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"نقاطك : ( $coin ) 💰
▪️ انضم بــ  @$username  
وستحصل على 2 نقاط 🌝✌🏻
يرجى الابلاغ عن القنوات المخالفة 📛
➖➖➖➖➖➖➖➖➖➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"تحقق من الانضمام 🔄",'callback_data'=>'truechannel'],['text'=>"تخطي 🔜",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel'],['text'=>"رجوع ↪️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser["userfild"]["$from_id"]["arraychannel"]="$z";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
else
{
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  			   ]);
}
}
}
}
elseif($data=="truechannel" ){
$getjoinchannel = $cuser["userfild"]["$from_id"]["getjoin"];
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$getjoinchannel."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
        bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' =>  " انضم في القناة ثم اضغط على التحقق من الانضمام 😕♻️", 
            'show_alert' =>true
        ]);
}
else
{
$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$arraychannel = $cuser["userfild"]["$from_id"]["arraychannel"];
$coinchannel = $user["setmemberlist"];
$channelincoin = $coinchannel[$arraychannel];
$downchannel = $channelincoin - 1;
$pluscoin = $coin + 2;
bot('answercallbackquery', [
           'callback_query_id' =>$membercall,
           'text' =>"
تم اشتراك واضافة نقاط لحسابك 💜
",
           'show_alert' =>false
          ]);
$cuser["userfild"]["$from_id"]["channeljoin"][]="$getjoinchannel";
$cuser["userfild"]["$from_id"]["coin"]="$pluscoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
if($downchannel > 0){
@$user = json_decode(file_get_contents("data/user.json"),true);
$user["setmemberlist"]["$arraychannel"]="$downchannel";
$user["setmemberlist"]=array_values($user["setmemberlist"]);
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
@$user = json_decode(file_get_contents("data/user.json"),true);
$allchannel = $user["channellist"];
for($z = 0;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if ($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"نقاطك : ( $coin ) 💰
▪️ انضم بــ  @$username  
وستحصل على 2 نقاط 🌝✌🏻
يرجى الابلاغ عن القنوات المخالفة 📛
➖➖➖➖➖➖➖➖➖➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"تحقق من الانضمام 🔄",'callback_data'=>'truechannel'],['text'=>"تخطي 🔜",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel'],['text'=>"رجوع ↪️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser["userfild"]["$from_id"]["arraychannel"]="$z";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
else
{
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  			   ]);
}
}
else
{
    $chhhhhhanel = $user["channellist"]["$arraychannel"];
    if($chhhhhhanel != "" and $chhhhhhanel != null){
	bot('sendmessage',[
	'chat_id'=>"$admin",
	'text'=>"✅ تم اكتمال تمويل القناة : ".$user["channellist"]["$arraychannel"],
  	]);
	bot('sendmessage',[
	'chat_id'=>$user["admin"]["$arraychannel"],
	'text'=>"✅ تم اكتمال تمويل القناة : ".$user["channellist"]["$arraychannel"],
	                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				 ['text'=>"القائمة الرئيسية ⚙️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  	]);
    }
unset($user["setmemberlist"]["$arraychannel"]);
unset($user["channellist"]["$arraychannel"]);
unset($user["admin"]["$arraychannel"]);
$user["channellist"]=array_values($user["channellist"]);
$user["setmemberlist"]=array_values($user["setmemberlist"]);
$user["admin"]=array_values($user["admin"]);
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
@$user = json_decode(file_get_contents("data/user.json"),true);
$allchannel = $user["channellist"];
for($z = 0;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if ($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"نقاطك : ( $coin ) 💰
▪️ انضم بــ  @$username  
وستحصل على 2 نقاط 🌝✌🏻
يرجى الابلاغ عن القنوات المخالفة 📛
➖➖➖➖➖➖➖➖➖➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"تحقق من الانضمام 🔄",'callback_data'=>'truechannel'],['text'=>"تخطي 🔜",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel'],['text'=>"رجوع ↪️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser["userfild"]["$from_id"]["arraychannel"]="$z";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
else
{
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  			   ]);
}
}
}
}
elseif($data=="nextchannel" ){
 bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => " انتضر قليلا ⏳،",
            'show_alert' =>false
        ]);
$arraychannel = $cuser["userfild"]["$from_id"]["arraychannel"];
$plusarraychannel = $arraychannel + 1 ;
$allchannel = $user["channellist"];
for($z = $plusarraychannel;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
break;
}
}
if ($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"نقاطك : ( $coin ) 💰
▪️ انضم بــ  @$username  
وستحصل على 2 نقاط 🌝✌🏻
يرجى الابلاغ عن القنوات المخالفة 📛
➖➖➖➖➖➖➖➖➖➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"تحقق من الانضمام 🔄",'callback_data'=>'truechannel'],['text'=>"تخطي 🔜",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel'],['text'=>"رجوع ↪️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser["userfild"]["$from_id"]["arraychannel"]="$z";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
else
{
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  			   ]);
}
}
elseif($data=="mainchannel" ){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
  bot('answercallbackquery', [
      'callback_query_id' =>$membercall,
 'text' =>" انضم في القناة ثم اضغط على التحقق من الانضمام 😕♻️", 
      'show_alert' =>true
  ]);
}
else
{
$coin = $cuser["userfild"]["$from_id"]["coin"];
$pluscoin = $coin + 2;
bot('answercallbackquery', [
           'callback_query_id' =>$membercall,
           'text' =>"
تم اشتراك واضافة نقاط لحسابك 💜
",
           'show_alert' =>false
          ]);
$cuser["userfild"]["$from_id"]["coin"]="$pluscoin";
$cuser["userfild"]["$from_id"]["channeljoin"][]="$channel";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
@$user = json_decode(file_get_contents("data/user.json"),true);
$allchannel = $user["channellist"];
for($z = 0;$z <= count($allchannel);$z++){
$getchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$allchannel[$z]."&user_id=".$from_id));
$okchannel = $getchannel->result->status;
if($okchannel != 'member' && $okchannel != 'creator' && $okchannel != 'administrator'){
$omm = $allchannel[$z];
break;
}
}
if ($allchannel[$z] == true){
$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$allchannel[$z]");
$getchat = json_decode($url, true);
$name = $getchat["result"]["title"];
$username = $getchat["result"]["username"];
$id = $getchat["result"]["id"];
if($username != "" and $username != null){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"نقاطك : ( $coin ) 💰
▪️ انضم بــ  @$username  
وستحصل على 2 نقاط 🌝✌🏻
يرجى الابلاغ عن القنوات المخالفة 📛
➖➖➖➖➖➖➖➖➖➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                   [['text'=>"تحقق من الانضمام 🔄",'callback_data'=>'truechannel'],['text'=>"تخطي 🔜",'callback_data'=>'nextchannel']],
                   [['text'=>"ابلاغ 📛",'callback_data'=>'badchannel'],['text'=>"رجوع ↪️",'callback_data'=>'panel']]
                     ]
               ])
			   ]);
$cuser = json_decode(file_get_contents("data/$from_id.json"),true);
$cuser["userfild"]["$from_id"]["getjoin"]="$username";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
else
{
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
                 'text'=>"انتهت القنوات المضافة يمكنك الان
مشاركة رابطك مع صديق والحصول
على $coins_start نقاط 😃",
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
  				   ['text'=>"تحديث 🔄",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
  				   ],
                       ]
                 ])
  			   ]);
}
}
}
elseif($data=="badchannel"){
$getjoinchannel = $cuser["userfild"]["$from_id"]["getjoin"];
	 bot('answercallbackquery', [
	            'callback_query_id' =>$membercall,
            'text' => "تم ارسال الابلاغ الى مبرمج البوت, وسوف يقوم بمراجعة القناة ومعرفة محتوى القناة ،
نشكرك للتعاون معنا  ♥️ !",
            'show_alert' =>true
        ]);
	bot('sendmessage',[
	'chat_id'=>"$admin",
	'text'=>"ابلاغ جديد!

القناة : @$getjoinchannel
معرف المبلغ : @$usernames
-",
  	]);
}
elseif($data=="accont"){
$invite = $cuser["userfild"]["$from_id"]["invite"];
$coin = $cuser["userfild"]["$from_id"]["coin"];
$setchannel = $cuser["userfild"]["$from_id"]["setchannel"];
$setmember = $cuser["userfild"]["$from_id"]["setmember"];
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"
نقاطك :( $coin )💰
الأنضمام بلقنوات 2 💰💡
مشـاركـة الـرابـط $coins_start 💰➰
 الـهـديـة الـيـومـيـة $day_coins 🎁⚖️
اخر تمويل لك $setchannel 🎗
العدد الذي طلبتة هو $setmember 📥
عداد الرابط الخاص بك $invite
➖➖➖➖➖➖➖➖➖➖
• معلومات حسابك الشخصي ؛ 📌

◾️ الاسم ؛ $name
▫️ المعرف ؛ @$user
◾️ الايدي ؛ $from_id
➖➖➖➖➖➖➖➖➖➖",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [['text'=>"قنواتي 💡",'callback_data'=>'order']],
                     [['text'=>"رجوع ↪️",'callback_data'=>'panel']],
                     ]
               ])
			   ]);
}
elseif($data=="mechannel"){
$allchannel = $cuser["userfild"]["$from_id"]["channeljoin"];
for($z = 0;$z <= count($allchannel)-1;$z++){
$result = $at.$result."📢 "."@".$allchannel[$z]."\n";
}
if($result == true){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
	'text'=>"لسته القنوات المشترك بها 🗳️ !

$result

ملاحضة ~ عند مغادرتك قناة يتم خصم نقطتين من النقاط الخاصة بك !.",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
}
else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
	'text'=>"انت لم تقم بتجميع نقاط حتى ⚠️ !

عليك تجميع نقاط اولا ومن ثم طلب اعضاء ❗️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"تجميع 💰",'callback_data'=>'takecoin'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
}
}
elseif($data=="order"){
$i=0;$allchannel = $cuser["userfild"]["$from_id"]["listorder"];

$keyboard = [];
$keyboard["inline_keyboard"] = [];
    foreach($allchannel as $row){
        $keyboard["inline_keyboard"][$i]=[];
        $dataa = explode("-",$row);
        $usernamechannel = str_replace("@","",$dataa[0]);
        $members = str_replace("> ","",$dataa[1]);
                $Ibotton = ["text" => $dataa[0], "callback_data" => "manachs_".$usernamechannel."_".$members];
                $keyboard["inline_keyboard"][$i][] = $Ibotton;
            $i++;
        }
        $Ibotton = ['text'=>"رجوع ↪️",'callback_data'=>'panel'];
        $keyboard["inline_keyboard"][$i][] = $Ibotton;
$reply_markup=json_encode($keyboard);
if($reply_markup == true){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
	'text'=>"لسته القنوات قمت بتمويلها 〽️ !
",
               'reply_markup'=>$reply_markup
  	]);
}
else
{
$coin = $cuser["userfild"]["$from_id"]["coin"];
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
	'text'=>"انت لم تقم بتمويل اي قناة ❗️

جمع نقاط اولا من ثم اشتر اعضاء
ومول قناتك مجانا من ��خلال البوت 🎒💰.",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"شراء الاعضاء 💰",'callback_data'=>'takemember'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
}
}
if(preg_match("/^(manachs)_(.*)_(.*)/s",$data)){
   preg_match("/^(manachs)_(.*)_(.*)/s",$data,$matchaa);
  $channel = $matchaa[2];
 $members = $matchaa[3];
$setchannel = $channel;

$howmember = getChatMembersCount($setchannel,$token);
$endmember = $howmember + $members;
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
	'text'=>"▪️ عدد اعضاء القناة : $howmember
▪️ عدد الاعضاء بعد التمويل : $endmember
:)️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>"حذف القناة",'callback_data'=>'deletechannel_'.$channel]],
				   [
['text'=>"رجوع ↪️",'callback_data'=>'order']
				   ]
				   ]
            ])
  	]);
}
if(preg_match("/^(deletechannel)_(.*)/s",$data)){
   preg_match("/^(deletechannel)_(.*)/s",$data,$matchaa);
$channel = "@".$matchaa[2];

$how = array_search($channel,$user["channellist"]);
unset($user["setmemberlist"][$how]);
unset($user["channellist"][$how]);
unset($user["admin"][$how]);
$user["channellist"]=array_values($user["channellist"]);
$user["setmemberlist"]=array_values($user["setmemberlist"]);
$user["admin"]=array_values($user["admin"]);

$user = json_encode($user,true);
file_put_contents("data/user.json",$user);

$invite = $cuser["userfild"]["$from_id"]["invite"];
$coin = $cuser["userfild"]["$from_id"]["coin"];
$setchannel = $cuser["userfild"]["$from_id"]["setchannel"];
$setmember = $cuser["userfild"]["$from_id"]["setmember"];
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"نقاطك : ( $coin )💰
الأنضمام بلقنوات 2 💰💡
مشـاركـة الـرابـط $coins_start 💰➰
 
اخر تمويل لك $setchannel 🎗
العدد الذي طلبتة هو $setmember 📥
عداد الرابط الخاص بك $invite
➖➖➖➖➖➖➖➖➖➖
- تم حذف القناة من الدعم فقط",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [['text'=>"اشتركت بها 🗳️",'callback_data'=>'mechannel'],['text'=>"تم تمويلها 💰",'callback_data'=>'order']],
                     [['text'=>"رجوع ↪️",'callback_data'=>'panel']],
                     ]
               ])
			   ]);
}
elseif($data=="member"){
$invite = $cuser["userfild"]["$from_id"]["invite"];
$coin = $cuser["userfild"]["$from_id"]["coin"];
		bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>"
- تريد تزيد اعضاء قناتك ؟! 🤔
- بالمجان بدون ماتدفع ؟! 🤤
- تمويل حقيقي كلهم عرب 💘💘
- تقدر توصل قناتك باليوم 200 عضو 👍🏼
- دعوكم من البوتات الكاذبة هاذا افضل بوت 🤖
- ضمان عدم المغادرة 💙 فقط التزم بالقنوانين ؛ ✅
- الفرصه لاتاتي مرتين 🖤!

https://t.me/$usernamebot?start=$from_id",
    		]);
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"شارك الرابط الخاص بك 💰'
بدون الاشتراك بلقنوات ⚠️،
وبدون تجميع نقاط بنفسك تحصل على نقطة لكل اشتراك ❗️

نقاطك :- ( $coin )
المشتركين بالرابط الخاص بك :- ( $invite )",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
                        ['text'=>"🌐 مشاركة الرابط",'switch_inline_query'=>" "],
                        ],
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
}
elseif($data=="sendcoin"){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
	'text'=>"عند ارسال نقاط الى صديق اخر ❗️

يجب ان ييكون مشترك في البوت 💰
بعدها ارسل الايدي او ارسال توجيه من الرسائل .",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
$cuser["userfild"]["$from_id"]["file"]="sendcoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'sendcoin') {
$coin = $juser["userfild"]["$from_id"]["coin"];
if($forward_from == true){
if($forward_from_id != $from_id){
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"معلومات التحويل 💰 :-
• تم العثور على المستخدم معلومات المستخدم 👤:

▫️ الاسم :-  $forward_from_first_name
◾️ المعرف :- @$forward_from_username
▫️ الايدي :- $forward_from_id

ارسل عدد النقاط المراد تحويلها .
نقاطك 💰 ( $coin )",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$juser["userfild"]["$from_id"]["file"]="setsendcoin";
$juser["userfild"]["$from_id"]["sendcoinid"]="$forward_from_id";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
	bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لا يمكن ارسال نقاطك الى نفسك ❗️
ارسل ايدي المستخدم فقط
او ارسل توجيه من رسائله ☑️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
else
{
if($text != $from_id){
if(is_numeric($text)){
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$status = $statjson['ok'];
if($status == 1){
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"معلومات التحويل 💰 :-
• تم العثور على المستخدم معلومات المستخدم 👤:

▫️ الاسم :-  $name
◾️ المعرف :- @$usrrname
▫️ الايدي :- $id

ارسل عدد النقاط المراد تحويلها .
نقاطك 💰 ( $coin )",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$juser["userfild"]["$from_id"]["file"]="setsendcoin";
$juser["userfild"]["$from_id"]["sendcoinid"]="$text";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"الايدي خطا ❗️
ان لم تتاكد من الايدي ارسل توجيه من رسائلة",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
else
{
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"الايدي خطا ❗️
ان لم تتاكد من الايدي ارسل توجيه من رسائله 📎
من ثم التاكد ان العضو مشترك بلبوت.",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
else
{
	bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"لايمكن ارسال نقاط لنفسك 🚫.",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
}
elseif($juser["userfild"]["$from_id"]["file"] == "setsendcoin"){
$coin = $juser["userfild"]["$from_id"]["coin"];
$userid = $juser["userfild"]["$from_id"]["sendcoinid"];
$inuser = json_decode(file_get_contents("data/$userid.json"),true);
$coinuser = $inuser["userfild"]["$userid"]["coin"];
if($text <= $coin && $coin > 0){
$coinplus = $coin - $text;
$sendcoinplus = $coinuser + $text;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"تم ارسال النقاط ( $text ) بنجاح ☑️💰

معلومات المرسل 👇🏻
▫️ ايدي العضو  :- $userid
▫️ نقاطك الآن :- $coinplus",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
		bot('sendmessage',[
	'chat_id'=>$userid,
	'text'=>"عزيزي  ♥️.

قام ( @$user ) .
بتحويل نقاط اليك قدرها ( $text ) 💰.
-",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
$juser["userfild"]["$from_id"]["file"]="none";
$juser["userfild"]["$from_id"]["coin"]="$coinplus";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
$inuser["userfild"]["$userid"]["coin"]="$sendcoinplus";
$inuser = json_encode($inuser,true);
file_put_contents("data/$userid.json",$inuser);
}
else
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انت لاتمتلك هذا النقاط ❗️
اقصى عدد بمقدور تحويلة هو ( $coin ) 💰",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
				   ]
            ])
  	]);
}
}

elseif($data=="takemember"){
$coin = $cuser["userfild"]["$from_id"]["coin"];
if($coin >= $adna_coins){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"الان ارسل معرف قناة او كروب 💜.
مثال :- @$channel",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["file"]="setchannel";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
else
{
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"
- يجب ان يكون العدد اكثر من $adna_coins نقاط ،🌻'

نقاطك ( $coin ) 💰
",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
             ['text'=>"تجميع نقاط💰",'callback_data'=>'takecoinn'],['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'setchannel') {
if(preg_match('/^(@)(.*)/s',$text)){
$coin = $juser["userfild"]["$from_id"]["coin"];
$max = $coin / 2;
$maxmember = floor($max);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"قم بأرسال عدد الاعضاء الان ليتم لتمويل 😉
قناتك : $text 📡
نقاطك : $coin 💰
أسعار النقاط كما يلي في الاسفل 👇🌻

20 = 6 عضو      |💰|    30 = 10 عضو  
40 = 13 عضو    |💰|    50 = 16 عضو  
60 = 20 عضو    |💰|    70 = 23 عضو  
80 = 26 عضو    |💰|    90 = 30 عضو  
100 = 33 عضو  |💰|    110 = 36 عضو
120 = 40 عضو  |💰|    130 = 43 عضو
140 = 46 عضو  |💰|    150 = 50 عضو

🛎 يمكنك طلب اعضاء عدد : $maxmember",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$juser["userfild"]["$from_id"]["file"]="setmember";
$juser["userfild"]["$from_id"]["setchannel"]="$text";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
	bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تاكد من معرف القناة ❗️
ارسل المعرف الصحيح مثل :- @$channel .",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'setmember') {
$coin = $juser["userfild"]["$from_id"]["coin"];
$setchanel = $juser["userfild"]["$from_id"]["setchannel"];
$max = $coin / 2;
$maxmember = floor($max);
if($maxmember >= $text){
$howmember = getChatMembersCount($setchanel,$token);
$endmember = $howmember + $text;
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"معلومات طلبك 📝

📡 • القناة المراد تمويلها : $setchannel ،
👥 • العدد المطلوب : $text ،
👤 • اعضاء القناة الحالي  : $howmember ،
➕ • عدد الاعضاء بعد التمويل : $endmember ،
📟 • تسلسل طلبك : $i ،

ارفع البوت ادمن حتى يتم تمويل القناة 🔭.
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   				   [
['text'=>"تاكيد ☑️",'callback_data'=>'trueorder'],['text'=>"رجوع ↪️",'callback_data'=>'panel'],
				   ],
                     ]
               ])
 ]);
$juser["userfild"]["$from_id"]["file"]="none";
$juser["userfild"]["$from_id"]["setmember"]="$text";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
	bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"نقاطك ( $coin ) 💰
اقصى عدد يمكن ان تطلبه ( $maxmember ) ❗️
يرجى ارسال $maxmember او اقل منه 💡",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
}
}
elseif($data=="trueorder"){
$setchannel = $cuser["userfild"]["$from_id"]["setchannel"];
if(!in_array($setchannel, $user["channellist"])) {
$admin = getChatstats(@$setchannel,$token);
if($admin != true){
	       bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "ارفع البوت ادمن اولا ❗️
حتى يتم التمويل بشكل جيد 💰",
            'show_alert' =>true
        ]);
}
else
{
    	bot('sendmessage',[
	'chat_id'=>"$admin",
	'text'=>"✅ تم اضافة قناة جديده للبوت : $setchannel",
  	]);
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"تم تنفيذ الطلب بنجاح 📎☑️
يمكنك طلب الهدايا ايضا ♥️.
ملاحظة اذا قمت بمخالفة قوانين وقواعد وتعليمات البوت سوف ��قوم بحذف قناتك تأكد من الذهاب  الى  المساعدة والقواعد تجنب الحظر ، 🚫 !
-",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel'],
				   ],
                     ]
               ])
			   ]);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$setchannel = $cuser["userfild"]["$from_id"]["setchannel"];
$setmember = $cuser["userfild"]["$from_id"]["setmember"];
$pluscoin = $setmember * 2;
$coinplus = $coin - $pluscoin;
$cuser["userfild"]["$from_id"]["coin"]="$coinplus";
$cuser["userfild"]["$from_id"]["listorder"][]="$setchannel -> $setmember";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
$user["channellist"][]="$setchannel";
$user["setmemberlist"][]="$setmember";
$user["admin"][]="$from_id";

$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}else {
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
	'text'=>"عذراً القناة في حالة تمويل بالفعل ⚠️",
   	'reply_markup'=>json_encode([
  	'inline_keyboard'=>[
          [['text'=>"💰 جمع نقاط 💰",'callback_data'=>'takecoinn'],['text'=>"👤 طلب اعضاء 👤",'callback_data'=>'takemember']],
      [['text'=>"💡 قنواتي 💡",'callback_data'=>'order'],['text'=>"⁉️ شرح البوت ⁉️",'callback_data'=>'learn']],
      [['text'=>"",'callback_data'=>'sup'],['text'=>"📤 تحويل النقاط 📤",'callback_data'=>'sendcoin']],
      [['text'=>"🎖 احصائيات الرابط والنقاط 🎖",'callback_data'=>'accont']],
	  	],
	  	'resize_keyboard'=>true,
  	])
  	]);
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif($data=="sup"){
bot('editmessagetext',[
                'chat_id'=>$chat_id,
     'message_id'=>$message_id,
               'text'=>"▫️ الدعم وحل المشاكل الموجودة بالبوت 📩
▫️ الرجاء ارسال الشكاوي او المشاكل الموجودة بالبوت ليتم تصحيحها ارسل مشكلتك برسالة واحدة فضلا ❗️
▫️عند وجود مشكلة كبرى يرجى اخذ لقطة شاشه للمشكلة وارسالها هنا
-",
                'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
			   ]);
$cuser["userfild"]["$from_id"]["file"]="sendsup";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'sendsup') {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم توصيل رسالتك ☑️
انتضر الرد باسرع وقت ♥️.",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
bot('ForwardMessage',[
'chat_id'=>$username_admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
	elseif($update->message && $update->message->reply_to_message && in_array($from_id,$Dev) && $tc == "private"){
	bot('sendmessage',[
        "chat_id"=>$chat_id,
        "text"=>"تم توصيل الرسالة الى العضو  📩"
		]);
	bot('sendmessage',[
        "chat_id"=>$reply,
        "text"=>"$text",
'parse_mode'=>'MarkDown'
		]);
}
if(file_get_contents("data/$from_id.txt") == "true"){
$pluscoin = file_get_contents("data/".$from_id."coin.txt");
$inviter = $cuser["userfild"]["$from_id"]["inviter"];
$invitercoin = $pluscoin / 100 * 20;
	       bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "اضافة النقود الان 💰",
            'show_alert' =>false
        ]);
		         bot('sendmessage',[
        	'chat_id'=>$inviter,
        	'text'=>"تم اضافة ( $invitercoin 💰 ) بنجاح ☑️",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$coin = $cuser["userfild"]["$from_id"]["coin"];
$coinplus = $coin + $pluscoin;
$cuser["userfild"]["$from_id"]["coin"]="$coinplus";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
$inuser = json_decode(file_get_contents("data/$inviter.json"),true);
$coininviter = $inuser["userfild"]["$inviter"]["coin"];
$coinplusinviter = $coininviter + $invitercoin ;
$inuser["userfild"]["$inviter"]["coin"]="$coinplusinviter";;
$inuser = json_encode($inuser,true);
file_put_contents("data/$inviter.json",$inuser);
unlink("data/".$from_id."coin.txt");
unlink("data/$from_id.txt");
}


//panel admin
elseif($text=="/update"){
if ($tc == "private") {
if (in_array($from_id,$Dev)){
$order = $user["channellist"];
$ordercount = count($user["channellist"]);
for($z = 0;$z <= count($order)-1;$z++){
$admin = getChatstats(@$order[$z],$token);
if($admin != true){
$how = array_search($order[$z],$user["channellist"]);
unset($user["setmemberlist"][$how]);
unset($user["channellist"][$how]);
unset($user["admin"][$how]);
$user["channellist"]=array_values($user["channellist"]);
$user["setmemberlist"]=array_values($user["setmemberlist"]);
$user["admin"]=array_values($user["admin"]);

$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
unlink('Member.txt');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم تحديث 🔄 البوت وحذف الملفات المؤقته ✅"
 ]);
}
}
}

if($data=="sitingbots"){

if (in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لوحة تحكم الادمنية 🌐",
    
 'reply_markup'=>json_encode([
             'inline_keyboard'=>[
             [['text'=>" القناة الرئيسية",'callback_data'=>'admin_chanelyes'],['text'=>"قناة الاكواد",'callback_data'=>'admin_chanelcod']],
       [['text'=>" تعيين نقاط الدخول ",'callback_data'=>'coins_start'],['text'=>"تعيين معرف التواصل",'callback_data'=>'username_admin_twasl']],
               [['text'=>"الأحصائيات 👤",'callback_data'=>'admin_members'],['text'=>"القنوات 📣",'callback_data'=>'admin_channels']],
        [['text'=>" اذاعة رسالة💌",'callback_data'=>'admin_send'],['text'=>"اذاعة توجية🔂",'callback_data'=>'admin_fwd']],
        [['text'=>"Ⓜ️اذاعة للقنوات",'callback_data'=>'admin_sendch'],['text'=>"اذاعة نقاط💲",'callback_data'=>'admin_bcconmem']],
        [['text'=>"حظر عضو ⛔️",'callback_data'=>'admin_ban'],['text'=>"حذف قناة 🗑",'callback_data'=>'admin_deletech']],
        [['text'=>"زيادة نقاط➕",'callback_data'=>'admin_sendcon'],['text'=>"خصم نقاط➖",'callback_data'=>'admin_deletecon']],
        [['text'=>"عمل هدية 🎁",'callback_data'=>'admin_code'],['text'=>"🆓ارسال نقاط للكل",'callback_data'=>'admin_bccon']],
[['text'=>"اضافة تمويل 💳",'callback_data'=>'admin_addfinance'],['text'=>"الممولات❕",'callback_data'=>'admin_listfinance']],
        [['text'=>"ادنى حد للنقاط ",'callback_data'=>'adna_coins'],['text'=>"تعيين نقاط الهدية اليومية ",'callback_data'=>'day_coins']],
        
               ]
         ])
 ]);
}

}
elseif($data =="paneladmin"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
  'text'=>"لوحة تحكم الادمنية 🌐",
          
           'reply_markup'=>json_encode([
               'inline_keyboard'=>[
                [['text'=>" القناة الرئيسية",'callback_data'=>'admin_chanelyes'],['text'=>"قناة الاكواد",'callback_data'=>'admin_chanelcod']],
[['text'=>" تعيين نقاط الدخول ",'callback_data'=>'coins_start'],['text'=>"تعيين معرف التواصل",'callback_data'=>'username_admin_twasl']], [['text'=>"الأحصائيات 👤",'callback_data'=>'admin_members'],['text'=>"القنوات 📣",'callback_data'=>'admin_channels']],
        [['text'=>" اذاعة رسالة💌",'callback_data'=>'admin_send'],['text'=>"اذاعة توجية🔂",'callback_data'=>'admin_fwd']],
        [['text'=>"Ⓜ️اذاعة للقنوات",'callback_data'=>'admin_sendch'],['text'=>"اذاعة نقاط💲",'callback_data'=>'admin_bcconmem']],
        [['text'=>"حظر عضو ⛔️",'callback_data'=>'admin_ban'],['text'=>"حذف قناة 🗑",'callback_data'=>'admin_deletech']],
        [['text'=>"زيادة نقاط➕",'callback_data'=>'admin_sendcon'],['text'=>"خصم نقاط➖",'callback_data'=>'admin_deletecon']],
        [['text'=>"عمل هدية 🎁",'callback_data'=>'admin_code'],['text'=>"🆓ارسال نقاط للكل  ",'callback_data'=>'admin_bccon']],
[['text'=>"اضافة تمويل 💳",'callback_data'=>'admin_addfinance'],['text'=>"الممولات❕",'callback_data'=>'admin_listfinance']],
          [['text'=>"ادنى حد للنقاط ",'callback_data'=>'adna_coins'],['text'=>"تعيين نقاط الهدية اليومية ",'callback_data'=>'day_coins']],   ]
           ])
   ]);
$cuser["userfild"]["$from_id"]["file"]="none";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
}

elseif($data == "admin_chanelyes"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"أرسل معرف القناة الرئيسة  📣",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="admin_chanelyes";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'admin_chanelyes' ) {
  $checkadmin = getChatstats($text,$token);
  if($checkadmin == true){
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"✅ تم اختيار هذة القناة لكي تكون القناة الرئيسيية $text",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
file_put_contents("data/channelyes.txt",$text);
}else {
  bot('sendmessage',[
            'chat_id'=>$chat_id,
   'text' => "ارفع البوت ادمن اولا ❗️
حتى يعمل الامر بشكل جيد 💰",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
    ]
])
]);
}
}

elseif($data == "admin_chanelcod"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"أرسل معرف القناة الخاصة بالتفاعلات واكواد النقاط  📣",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="admin_chanelcod";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'admin_chanelcod') {
  $checkadmin = getChatstats($text,$token);
  if($checkadmin == true){
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"✅ تم اختيار هذة القناة لكي تكون القناة للتفاعلات والاكواد $text",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
file_put_contents("data/channelcode.txt",$text);
}else {
  bot('sendmessage',[
            'chat_id'=>$chat_id,
   'text' => "ارفع البوت ادمن اولا ❗️
حتى يعمل الامر بشكل جيد 💰",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
    ]
])
]);
}
}
#تعيين نقاط الدخول 
elseif($data == "coins_start"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"💰 ارسل عدد نقاط الدخول التي سيتلقاها العضو عند دخول احد الاشخاص للبوت من رابطة الخاص 
- نقاط الدخول الافتراضية 5 نقاط
		",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="coins_start";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'coins_start') {
 
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"✅ تم حفظ نقاط الدخول $text نقطة ",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
file_put_contents("data/coins_start.txt",$text);

}


#تعيين حساب التواصل 
elseif($data == "username_admin_twasl"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"💳 قم بارسال معرف حساب التواصل لكي يتمكن الاعضاء من ارسال الرسائل اليك او طلب التمويل المدفوع
		",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="username_admin_twasl";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'username_admin_twasl') {
 
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"✅ تم حفظ حساب التواصل $text  ",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
file_put_contents("data/user_name_admin.txt",$text);

}
#ادنى حد

elseif($data == "adna_coins"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"🔬 قم بإرسال عدد نقاط ادنئ حد لطلب التمويل 
		- الحد الادنى الافتراضي : 40 نقطة 
		",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="adna_coins";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'adna_coins') {
 
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"✅ تم حفظ الحد الادنئ $text نقطة ",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
file_put_contents("data/adna_coins.txt",$text);

}

#ادنى حد

elseif($data == "day_coins"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"🔬 قم بإرسال عدد نقاط النقاط للهدية اليومية
		-الهدية اليومية الافتراضيه : 5 نقاط  
		",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="day_coins";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'day_coins') {
 
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"✅ تم حفظ نقاط الهدية اليومية $text نقطة ",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
file_put_contents("data/day_coins.txt",$text);

}

elseif($data == "admin_addfinance"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"أرسل معرف القناة ليتم تمويلها ( مدفوع ) 📣",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="addfinance";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'addfinance') {
  $checkadmin = getChatstats($text,$token);
  if($checkadmin == true){
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"جيد !
الأن ارسل عدد الأعضاء الذي تريد تمويلهم 👤
-",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
$juser["idforsend"]="$text";
$juser["userfild"]["$from_id"]["file"]="addfinance_2";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}else {
  bot('sendmessage',[
            'chat_id'=>$chat_id,
   'text' => "ارفع البوت ادمن اولا ❗️
حتى يعمل الامر بشكل جيد 💰",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
    ]
])
]);
}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'addfinance_2') {
$id = $juser["idforsend"];
$user["finance"][]=[$id,$text];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"جاري تمويل [$text] للقناة [$id] ✅",
	  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
    ]
])
 ]);

$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
if(preg_match("/^(coin)_(.*)_(.*)/s",$data)){
   preg_match("/^(coin)_(.*)_(.*)/s",$data,$matchaa);
  $channel = $matchaa[2];
  $coinpluss = $matchaa[3];
  $join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channel&user_id=".$from_id);
  if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))=== false){
    bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id
       ]);
 bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "تم اعطائك ($coinpluss) 💰",
            'show_alert' =>false
        ]);
    $inuser = json_decode(file_get_contents("data/$from_id.json"),true);
    $coin = $inuser["userfild"]["$from_id"]["coin"];
    $coinplus = $coin + $coinpluss;
    $inuser["userfild"]["$from_id"]["coin"]="$coinplus";
    $inuser = json_encode($inuser,true);
    file_put_contents("data/$from_id.json",$inuser);
}else {
  bot('answercallbackquery', [
    'callback_query_id' =>$membercall,
    'text' => "عذرا ❗️
اشترك بلقناة اولا :)
-",
    'show_alert' =>true
]);
}
}
elseif($data=="admin_bcconmem"){
  if (in_array($from_id,$Dev)){
    bot('editmessagetext',[
                    'chat_id'=>$chat_id,
         'message_id'=>$message_id,
		'text'=>"ارسل معرف القناة 📣
مثال : @$channel",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="setchmembers";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'setchmembers') {
  $checkadmin = getChatstats($text,$token);
  if($checkadmin == true){
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"جيد, الأن ارسل عدد النقاط 💰
التي يحصلها المستخدم عند الأشتراك ✅
-",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
$user["coinbc"]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
$juser["userfild"]["$from_id"]["file"]="setchmembers2";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}else {
  bot('sendmessage',[
            'chat_id'=>$chat_id,
   'text' => "ارفع البوت ادمن اولا ❗️
حتى يعمل الامر بشكل جيد 💰",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
    ]
])
]);
}
}

elseif ($juser["userfild"]["$from_id"]["file"] == 'setchmembers2') {
$code = $user["coinbc"];

$numbers = $user["userlist"];
foreach($numbers as $key){
 $user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($key,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $key."\n";
     file_put_contents('Member.txt',$add_user);
bot('sendmessage',[
          'chat_id'=>$key,
          'text'=>"?? اشترك بلقناة  :- $code
واضغط للحصول على [ $text ] نقاط 💰.",
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"اشترك ✅",'callback_data'=>'coin_'.$code.'_'.$text]
  ],
        ]
  ])
 ]);
}
}

$all = count($user["userlist"]);
bot('sendmessage',[
          'chat_id'=>$chat_id,
          'text'=>"جيد, ✅
القناة : $code
النقاط : $text

تم النشر الى [$all] مستخدم بنجاح 👤
-",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
 ]);
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
elseif($data=="admin_members"){
if (in_array($from_id,$Dev)){
$all = count($user["userlist"]);
$order = count($user["channellist"]);
bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "عدد المستخدمين 👤 [$all]
عدد القنوات 📣 [$order]",
            'show_alert' =>true
        ]);
		}
}
elseif($data == "admin_ban"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"ارسل رسالة موجهة أو ايدي العضو ✉️
ليتم حظره من البوت ⛔️
-",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="block";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'block') {
if ($forward_from == true) {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"العضو تم حظره بنجاح ✅

الأيدي : $forward_from_id
أسم المستخدم : @$forward_from_username
-",
	  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
 ]);
$juser["blocklist"][]="$forward_from_id";
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"العضو تم حظره بنجاح ✅

الأيدي : $text
-",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
 ]
])
]);
$juser["blocklist"][]="$text";
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif ($data == "admin_send" ) {
if (in_array($from_id,$Dev)){
  $all = count($user["userlist"]);

  bot('editmessagetext',[
            'chat_id'=>$chat_id,
 'message_id'=>$message_id,
        	'text'=>"ارسل رسالتك ليتم ارساله الى [$all] مستخدم ✅
-",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
 ]);
$cuser["userfild"]["$from_id"]["file"]="sendtoall";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
}
elseif ($data == "admin_sendch" ) {
if (in_array($from_id,$Dev)){
  $all = count($user["channellist"]);
  bot('editmessagetext',[
            'chat_id'=>$chat_id,
 'message_id'=>$message_id,
        	'text'=>"ارسل رسالتك ليتم ارساله الى [$all] قناة ✅
-",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
 ]);

$cuser["userfild"]["$from_id"]["file"]="sendtochs";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);

}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'sendtochs') {
$juser["userfild"]["$from_id"]["file"]="sendtochs2";
$juser["idforsend"]="$text";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);

bot('sendmessage',[
 'chat_id'=>$chat_id,
        'text'=>"جيد !

الأن ارسل الأزرار بالطريقة الأتيه
TEXT = LINK + TEXT = LINK
TEXT = LINK
-",
  'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
]);
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'sendtochs2') {
$texttt = $juser["idforsend"];

  $i=0;
    $keyboard = [];
    $keyboard["inline_keyboard"] = [];
    $rows = explode("\n",$text);
        foreach($rows as $row){
            $j=0;
            $keyboard["inline_keyboard"][$i]=[];
            $bottons = explode("+",$row);
                foreach($bottons as $botton){
                    $data = explode("=",$botton."=");
                    $Ibotton = ["text" => trim($data[0]), "url" => trim($data[1])];
                    $keyboard["inline_keyboard"][$i][$j] = $Ibotton;
                    $j++;
                }
                $i++;
            }

    $reply_markup=json_encode($keyboard);

$order = $user["channellist"];
for($z = 0;$z <= count($order);$z++){
     $user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($order[$z],$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $order[$z]."\n";
     file_put_contents('Member.txt',$add_user);

$url = file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$order[$z]");
$getchat = json_decode($url, true);
$id = $getchat["result"]["id"];

     bot('sendmessage',[
          'chat_id'=>$id,
		  'text'=>"$texttt",
        'reply_markup'=>($reply_markup)
        ]);
}
}
        $all = count($user["channellist"]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
        'text'=>"تم ارسال رسالتك الى [$all] قناة بنجاح 👋🏻",
  'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
]);

$juser["userfild"]["$from_id"]["file"]="nonde";
$juser["idforsend"]="";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'sendtoall') {
$juser["userfild"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
for($z = 0;$z <= count($numbers)-1;$z++){


 $user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($numbers[$z],$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $numbers[$z]."\n";
     file_put_contents('Member.txt',$add_user);
     bot('sendmessage',[
          'chat_id'=>$numbers[$z],
		  'text'=>"$text",
        ]);
}
  }
        $all = count($user["userlist"]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
        'text'=>"تم ارسال رسالتك الى [$all] مستخدم بنجاح 👋🏻",
  'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
]);
}
elseif ($data == "admin_fwd" ) {
if (in_array($from_id,$Dev)){
  $all = count($user["userlist"]);
  bot('editmessagetext',[
            'chat_id'=>$chat_id,
 'message_id'=>$message_id,
        	'text'=>"ارسل رسالة التوجيه ليتم ارساله الى [$all] مستخدم ✅
-",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
 ]);
$cuser["userfild"]["$from_id"]["file"]="fortoall";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'fortoall') {
$juser["userfild"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
for($z = 0;$z <= count($numbers)-1;$z++){
     $user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($numbers[$z],$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $numbers[$z]."\n";
     file_put_contents('Member.txt',$add_user);

Forward($numbers[$z], $chat_id,$message_id);
}
}
$all = count($user["userlist"]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم ارسال رسالتك الى [$all] مستخدم بنجاح 👋🏻",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
]
])
]);
}
elseif($data=="admin_channels"){
if (in_array($from_id,$Dev)){
$order = $user["channellist"];
$ordercount = count($user["channellist"]);
for($z = 0;$z <= count($order)-1;$z++){
$result = $result.$order[$z]."\n";
}
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
		'text'=>"📣 القنوات الجاري تمويلها($ordercount):
$result",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
      ]
])
		]);
		}
}
elseif($data=="admin_listfinance"){
if (in_array($from_id,$Dev)){
$arr = $user['finance'];
$out = "" ;
for($z = 0;$z <= count($arr);$z++){
if($arr[$z][0] != null and $arr[$z][0] != ""){
$out = $out.$arr[$z][0]." - ".$arr[$z][1]."\n";
}
}
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
		'text'=>"📣 القنوات الجاري تمويلها:
$out",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
      ]
])
		]);
		}
}

elseif($data == "admin_deletech"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"ارسل معرف القناة ليتم حذفها 🗑
مثال : @mshro7
-",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
      ]
])
		]);
$cuser["userfild"]["$from_id"]["file"]="remorder";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'remorder') {
$how = array_search($text,$user["channellist"]);
unset($user["setmemberlist"][$how]);
unset($user["channellist"][$how]);
unset($user["admin"][$how]);
$user["channellist"]=array_values($user["channellist"]);
$user["setmemberlist"]=array_values($user["setmemberlist"]);
$user["admin"]=array_values($user["admin"]);

$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"تم حذف القناة بنجاح 🗑",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
      ]
])
]);
}
elseif($data == "admin_sendcon"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
		'text'=>"ارسل رسالة موجهة أو ايدي العضو ✉️
ليتم زيادة نقاطه 💰
-",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
		]);
$cuser["userfild"]["$from_id"]["file"]="adminsendcoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'adminsendcoin') {
if ($forward_from == true) {
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"جيد, الأن ارسل عدد النقاط 💰

  الأيدي : $forward_from_id
  أسم المستخدم : @$forward_from_username
  -",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
$juser["idforsend"]="$forward_from_id";
$juser["userfild"]["$from_id"]["file"]="sethowsendcoin";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
	         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"جيد, الأن ارسل عدد النقاط 💰

الأيدي : $text
-",
	  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
 ]);
$juser["idforsend"]="$text";
$juser["userfild"]["$from_id"]["file"]="sethowsendcoin";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'sethowsendcoin') {
$id = $juser["idforsend"];
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال [$text] الى العضو [$id] بنجاح 💰✅",
	  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
    ]
])
 ]);
          bot('sendmessage',[
        	'chat_id'=>$id,
        	'text'=>"تم ارسال لك $text نقطه هدية من البوت 💰

🌷",
			               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$inuser = json_decode(file_get_contents("data/$id.json"),true);
$coin = $inuser["userfild"]["$id"]["coin"];
$coinplus = $coin + $text;
$inuser["userfild"]["$id"]["coin"]="$coinplus";
$inuser = json_encode($inuser,true);
file_put_contents("data/$id.json",$inuser);

$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
elseif($data == "admin_deletecon"){
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                    'chat_id'=>$chat_id,
         'message_id'=>$message_id,
      'text'=>"ارسل رسالة موجهة أو ايدي العضو ✉️
  ليتم خصم نقاطه 🗑
  -",
      'reply_markup'=>json_encode([
          'inline_keyboard'=>[
      [
      ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
      ],
            ]
      ])
      ]);
$cuser["userfild"]["$from_id"]["file"]="adminsendcoin2";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
		}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'adminsendcoin2') {
if ($forward_from == true) {
  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"جيد, الأن ارسل عدد النقاط التي تريد خصمها 💰

  الأيدي : $forward_from_id
  أسم المستخدم : @$forward_from_username
  -",
      'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
    [
    ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
    ],
          ]
    ])
   ]);
$juser["idforsend"]="$forward_from_id";
$juser["userfild"]["$from_id"]["file"]="sethowsendcoin2";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
else
{
 bot('sendmessage',[
          'chat_id'=>$chat_id,
          'text'=>"جيد, الأن ارسل عدد النقاط التي تريد خصمها 💰

الأيدي : $text
-",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
 ]);
$juser["idforsend"]="$text";
$juser["userfild"]["$from_id"]["file"]="sethowsendcoin2";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'sethowsendcoin2') {
$id = $juser["idforsend"];
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"تم خصم [$text] من العضو [$id] بنجاح 💰✅",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
]
])
]);
          bot('sendmessage',[
        	'chat_id'=>$id,
        	'text'=>"تم خصم [$text] من نقاطك من قبل البوت 💰

-",
			               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
 ]);
$inuser = json_decode(file_get_contents("data/$id.json"),true);
$coin = $inuser["userfild"]["$id"]["coin"];
$coinplus = $coin - $text;
$inuser["userfild"]["$id"]["coin"]="$coinplus";
$inuser = json_encode($inuser,true);
file_put_contents("data/$id.json",$inuser);

$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}

if(preg_match("/^\/(newcode) (.*)/s",$text)){
   preg_match("/^\/(newcode) (.*)/s",$text,$matchaa);
if (in_array($from_id,$Dev)){

$Rand = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -8);
$user["howcoincode"]=$matchaa[2];
$user["codecoin"]="$Rand";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم صناعة الهدية ( $Rand )
التي قيمتها ( ".$matchaa[2]." )

بنجاح ✅",
 ]);
}
}
elseif($data == "admin_code"){
if (in_array($from_id,$Dev)){
$Rand = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -8);
bot('editmessagetext',[
                  'chat_id'=>$chat_id,
       'message_id'=>$message_id,
 'text'=>"تم صناعة هدية 🎁
رمز الهدية : $Rand

الأن ارسل عدد نقاط الهدية 💰
-",
'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
    ]
])
]);
$user["codecoin"]="$Rand";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
$cuser["userfild"]["$from_id"]["file"]="howcodecoin";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
}
elseif ($juser["userfild"]["$from_id"]["file"] == 'howcodecoin') {
$code = $user["codecoin"];
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال الهدية الى القناة [@$channelcode] ✅
-",
'reply_markup'=>json_encode([
   'inline_keyboard'=>[
[
['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
],
     ]
])
 ]);
          bot('sendmessage',[
        	'chat_id'=>"@$channelcode",
        	'text'=>"هدية جديدة, قيمتها [$text] 💰",
          'reply_markup'=>json_encode([
  'inline_keyboard'=>[
[
['text'=>"اضغط هنا",'url'=>"https://t.me/$usernamebot?start=code_".$code]
],
    ]
])
 ]);
$user["howcoincode"]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
}
elseif ($data == "admin_bccon") {
if (in_array($from_id,$Dev)){
  bot('editmessagetext',[
                    'chat_id'=>$chat_id,
         'message_id'=>$message_id,
      'text'=>"ارسل عدد النقاط التي تريد ارسالها للكل 💰؟
-",
      'reply_markup'=>json_encode([
          'inline_keyboard'=>[
      [
      ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
      ],
            ]
      ])
      ]);
$cuser["userfild"]["$from_id"]["file"]="sendcointoall";
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}
}

elseif ($juser["userfild"]["$from_id"]["file"] == 'sendcointoall') {
$juser["userfild"]["$from_id"]["file"]="none";
$juser = json_encode($juser,true);
file_put_contents("data/$from_id.json",$juser);
$numbers = $user["userlist"];
$all = count($user["userlist"]);

bot('sendmessage',[
          'chat_id'=>$chat_id,
          'text'=>"تم ارسال [$text] نقطة لكل الاعضاء [$all] بنجاح ✅",
    'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  [
  ['text'=>"رجوع ↪️",'callback_data'=>'paneladmin']
  ],
        ]
  ])
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     $user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($numbers[$z],$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $numbers[$z]."\n";
     file_put_contents('Member.txt',$add_user);
   bot('sendmessage',[
          'chat_id'=>$numbers[$z],
		  'text'=>"تم اعطائك [$text] نقاط هدية من البوت 💰

-",
          'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
				   [
['text'=>"رجوع ↪️",'callback_data'=>'panel']
				   ],
                     ]
               ])
        ]);
$juser = json_decode(file_get_contents("data/$numbers[$z].json"),true);
$coin = $juser["userfild"]["$numbers[$z]"]["coin"];
$coinplus = $coin + $text;
$juser["userfild"]["$numbers[$z]"]["coin"]="$coinplus";
$juser = json_encode($juser,true);
file_put_contents("data/$numbers[$z].json",$juser);
}
}
}
if($text=="/wow"){
   $message_id = $update->message->message_id;
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"-_-"
]);
for($i=1;$i<=10;$i++){
sleep(1);
$str = str_repeat("➖", $i);
$strx = $str."".$i."0%";
  bot('editMessageText',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id +1,
   'text'=>"$strx"
        ]);
}
  bot('editMessageText',[
   'chat_id'=>$chat_id,
    'message_id'=>$message_id +1,
   'text'=>"Done ✅"
        ]);
}
$settings = $juser["userfild"]["$from_id"]["file"];
if($text){
if($settings == "none"){
$arr = $user['finance'];
$channel = array_rand($arr);
$channelincoin = $arr[$channel][1];
$channelssssss = $arr[$channel][0];
$join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channelssssss&user_id=".$from_id);
if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"')) !== false){
if(!in_array($channelssssss, $juser["userfild"]["$from_id"]["channeljoin"])) {
if($channelincoin > 0){
$text_add = "انضم في القناة ".$arr[$channel][0]." ✅
 واحصل على 10 نقاط 💰";
           bot('sendmessage',[
          	'chat_id'=>$chat_id,
          	'text'=>$text_add,
                 'reply_markup'=>json_encode([
                     'inline_keyboard'=>[
  				   [
               ['text'=>"تحقق من الانظمام ♻️",'callback_data'=>"finance_".$channel]
  				   ],
                       ]
                 ])
   ]);
}else {
@$usernew = json_decode(file_get_contents("data/user.json"),true);
unset($usernew['finance'][$channel]);
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}
}
}
}
}

if(preg_match("/^(finance)_(.*)/s",$data)){
   preg_match("/^(finance)_(.*)/s",$data,$matchaa);
  $numarr = $matchaa[2];
  $arr = $user['finance'];
  $channel = $arr[$numarr][0];
  $join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$channel&user_id=".$from_id);
  if((strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))=== false){

$member = $arr[$numarr][1];
$downchannel = $member - 1;

if($downchannel <= 0){
@$usernew = json_decode(file_get_contents("data/user.json"),true);
unset($usernew['finance'][$numarr]);
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}else {

@$usernew = json_decode(file_get_contents("data/user.json"),true);
$usernew['finance'][$numarr] = [$channel,$downchannel];
$usernew = json_encode($usernew,true);
file_put_contents("data/user.json",$usernew);
}

 bot('deleteMessage',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id
       ]);
 bot('answercallbackquery', [
            'callback_query_id' =>$membercall,
            'text' => "تم الأنظمام بنجاح ✅
وتم اعطائك [10] نقاط الى حسابك 💰
-",
            'show_alert' =>true
        ]);
    $inuser = json_decode(file_get_contents("data/$from_id.json"),true);
    $coin = $inuser["userfild"]["$from_id"]["coin"];
    $inuser["userfild"]["$from_id"]["channeljoin"][]="$channel";
    $coinplus = $coin + 10;
    $inuser["userfild"]["$from_id"]["coin"]="$coinplus";
    $inuser = json_encode($inuser,true);
    file_put_contents("data/$from_id.json",$inuser);
}else {
  bot('answercallbackquery', [
    'callback_query_id' =>$membercall,
    'text' =>"
 انضم في القناة ثم اضغط على التحقق من الانضمام 😕♻️
",
    'show_alert' =>true
]);
}
}
$from_idin = $update->inline_query->from->id;
$usernameinl = $update->inline_query->from->username;
if($update->inline_query){
$inlineqt = $update->inline_query->query;
if($inlineqt == ''){
bot('answerInlineQuery', [
'inline_query_id' => $update->inline_query->id,
'results' => json_encode([[
'type' => 'article',
'id' => base64_encode(rand(5, 555)),
'title' => '◾ شارك رابطك الخاص لتحصل على نقاط .',
'description' => 'اضغط هنا لمشاركة رابطك 😉',
'input_message_content' => ['parse_mode' => 'MarkDown', 'disable_web_page_preview'=> true, 'message_text' => "
 ▪ اول بوت عربي مجاني ✅ 
للحصول على اعضاء من جميع الدول 🇯🇴🇮🇶🇸🇾🇾🇪
 وعدم المغادرة😉✌"],
'reply_markup' => [
'inline_keyboard' => [
[['text' => "دخول للبوت 👥", 'url' => "http://t.me/$usernamebot?start=$from_idin"]],
]]
]])
]);
}else {
bot('answerInlineQuery', [
'inline_query_id' => $update->inline_query->id,
'results' => json_encode([[
'type' => 'article',
'id' => base64_encode(rand(5, 555)),
'title' => '◾ شارك رابطك الخاص لتحصل على نقاط .',
'description' => 'اضغط هنا لمشاركة رابطك 😉',
'input_message_content' => ['parse_mode' => 'MarkDown', 'disable_web_page_preview'=> true, 'message_text' => "
 ▪ اول بوت عربي مجاني ✅ 
للحصول على اعضاء من جميع الدول 🇯🇴🇮🇶🇸🇾🇾🇪
 وعدم المغادرة😉✌"],
'reply_markup' => [
'inline_keyboard' => [
[['text' => "دخول للبوت 👥", 'url' => "http://t.me/$usernamebot?start=$from_idin"]],
]]
],[
'type' => 'article',
'id' => base64_encode(rand(5, 555)),
'title' => '◾ شارك رابطك الخاص لتحصل على نقاط .',
'description' => 'اضغط هنا لمشاركة رابطك 😉',
'input_message_content' => ['parse_mode' => 'MarkDown', 'disable_web_page_preview'=> true, 'message_text' => "
 ▪ اول بوت عربي مجاني ✅ 
للحصول على اعضاء من جميع الدول 🇯🇴🇮🇶🇸🇾🇾🇪
 وعدم المغادرة😉✌"],
'reply_markup' => [
'inline_keyboard' => [
[['text' => "دخول للبوت 👥", 'url' => "http://t.me/$usernamebot?start=$from_idin"]],
]]
]])
]);
}
}else {
if($inlineqt == ''){
bot('answerInlineQuery', [
'inline_query_id' => $update->inline_query->id,
'results' => json_encode([[
'type' => 'article',
'id' => base64_encode(rand(5, 555)),
'title' => '◾ شارك رابطك الخاص لتحصل على نقاط .',
'description' => 'اضغط هنا لمشاركة رابطك 😉',
'input_message_content' => ['parse_mode' => 'MarkDown', 'disable_web_page_preview'=> true, 'message_text' => "
 ▪ اول بوت عربي مجاني ✅ 
للحصول على اعضاء من جميع الدول 🇯🇴🇮🇶🇸🇾🇾🇪
 وعدم المغادرة😉✌"],
'reply_markup' => [
'inline_keyboard' => [
[['text' => "دخول للبوت 👥", 'url' => "http://t.me/$usernamebot?start=$from_idin"]],
]]
]])
]);
}else {
    bot('answerInlineQuery', [
'inline_query_id' => $update->inline_query->id,
'results' => json_encode([[
'type' => 'article',
'id' => base64_encode(rand(5, 555)),
'title' => '◾  شارك رابطك الخاص لتحصل على نقاط .',
'description' => 'اضغط هنا لمشاركة رابطك 😉',
'input_message_content' => ['parse_mode' => 'MarkDown', 'disable_web_page_preview'=> true, 'message_text' => "
 ▪ اول بوت عربي مجاني ✅ 
للحصول على اعضاء من جميع الدول 🇯🇴🇮🇶🇸🇾🇾🇪
 وعدم المغادرة😉✌"],
'reply_markup' => [
'inline_keyboard' => [
[['text' => "دخول للبوت 👥", 'url' => "http://t.me/$usernamebot?start=$from_idin"]],
]]
],[
'type' => 'article',
'id' => base64_encode(rand(5, 555)),
'title' => '◾  شارك رابطك الخاص لتحصل على نقاط .',
'description' => 'اضغط هنا لمشاركة رابطك 😉',
'input_message_content' => ['parse_mode' => 'MarkDown', 'disable_web_page_preview'=> true, 'message_text' => "
 ▪ اول بوت عربي مجاني ✅ 
للحصول على اعضاء من جميع الدول 🇯🇴🇮🇶🇸🇾🇾🇪
 وعدم المغادرة😉✌"],
'reply_markup' => [
'inline_keyboard' => [
[['text' => "دخول للبوت 👥", 'url' => "http://t.me/$usernamebot?start=$from_idin"]],
]]
]])
]);
}
}
$d = date('D');
$day = explode("\n",file_get_contents("data/".$d.".txt"));
if($d == "Sat"){
unlink("data/Fri.txt");
}
if($d == "Sun"){
unlink("data/Sat.txt");
}
if($d == "Mon"){
unlink("data/Sun.txt");
}
if($d == "Tue"){
unlink("data/Mon.txt");
}
if($d == "Wed"){
unlink("data/The.txt");
}
if($d == "Thu"){
unlink("data/Wedtxt");
}
if($d == "Fri"){
unlink("data/Thu.txt");
}
  if($data == "kk"){ 
  if(!in_array($from_id, $day)){
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"لقد ربحت 5 نقاط 💰
 يمكنك الربح مجدد بعد منتصف الليل",
 'show_alert'=>true,
]);
 file_put_contents("data/".$d.'.txt',$from_id."\n",FILE_APPEND);
$cuser["userfild"]["$from_id"]["coin"]+=$day_coins;
$cuser = json_encode($cuser,true);
file_put_contents("data/$from_id.json",$cuser);
}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
 'text' =>"
 حاول مجددا بعد منتصف الليل 🔄",
        'show_alert'=>true,
]);
}
}
unlink("error_log");

?>
