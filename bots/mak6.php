<?php

ob_start();
//--------
$token = "[*[TOKENBOT]*]"; # Token
$tokensan3 = "[*[TOKENSAN3BOT]*]"; # Token
$admin = file_get_contents("admin.txt");
$infobot=explode("\n",file_get_contents("info.txt"));

$idbots=$infobot['4'];
$usernamebot=$infobot['1'];
$no3mak=$infobot['6'];

$user_bot_sudo="$usernamebot";

define("API_KEY", $token);

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
}}



function remove_dir($path){
	if(is_dir($path) === false)	{		return false;	}	
	$dir = opendir($path);
		while 
		(($file = readdir($dir) )!== false)	{		
		if($file == '.' OR $file == '..' OR $file == 'sudo' OR $file == 'pro.json')		{			continue;		}		if(is_file($path.'/'.$file))		{						unlink($path.'/'.$file);		}		elseif(is_dir($path.'/'.$file))		{						remove_dir($path.'/'.$file);		}		}		rmdir($path);	closedir($dir);}
	
	
	
	



# Short
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$txt = $message->caption;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$new = $message->new_chat_members;
$message_id = $message->message_id;
$type = $message->chat->type;
$name = $message->from->first_name;
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}
$id = $update->inline_query->from->id; 

$sudo = array("000","566660041","973336449");
$wathq1 = $admin; 

mkdir("sudo");


$get_ban=file_get_contents('sudo/ban.txt');
$ban =explode("\n",$get_ban);
/////////////////////

$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
//////////
$folder="https://kkfkk.ml/san3";


$folder2="botmak/$idbots";
 //ايديك
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 


$watawjson = json_decode(file_get_contents("botmak/wataw.json"),true);
if (!file_exists("botmak/wataw.json")) {
#	$put = [];
$watawjson["info"]["url"]="$folder/botmak";
$watawjson["info"]["st_ch_bots"]="معطل";
$watawjson["info"]["user_bot"]="$user_bot_sudo";
file_put_contents("botmak/wataw.json", json_encode($watawjson));
}

$st_ch_bots=$watawjson["info"]["st_ch_bots"];



$infosudo = json_decode(file_get_contents("sudo.json"),true);
if (!file_exists("sudo.json")) {
#	$put = [];
	$infosudo["info"]["admins"][]="$admin";
$infosudo["info"]["update"]="مفعل";
$infosudo["info"]["propots"]="مجانية";

$infosudo["info"]["fwrmember"]="معطل";
$infosudo["info"]["listbots"]="كل الانواع";
$infosudo["info"]["tnbih"]="مفعل";
$infosudo["info"]["silk"]="مفعل";
$infosudo["info"]["allch"]="مفردة";
$infosudo["info"]["klish_sil"]="كليشة الاشتراك الاجباري";


file_put_contents("sudo.json", json_encode($infosudo));
}
$updatenew=$infosudo["info"]["update"];
$propots=$infosudo["info"]["propots"];
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$start=$infosudo["info"]["start"];
$klish_sil=$infosudo["info"]["klish_sil"];
$admins=$infosudo["info"]["admins"];
$info_kl=$infosudo["info"]["info_kl"];
$token_kl=$infosudo["info"]["token_kl"];
$listbots=$infosudo["info"]["listbots"];








if($message and $updatenew=="معطل" and $from_id!= $wathq1){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
تم إيقاف البوت من خلال المالك 
",
'reply_to_message_id'=>$message->message_id,
]);
return false;
}

function getChatstats($chat_id,$token) {
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
$admin=file_get_contents("admin.txt");

$adminjson = json_decode(file_get_contents("botmak/wataw.json"),true);
$id_ch_admin=$adminjson["info"]["id_channel"];
$link_ch_admin=$adminjson["info"]["link_channel"];
$user_bot_admin=$adminjson["info"]["user_bot"];



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
"chat_id"=>$wathq1,
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
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;

$botfreeid=explode("\n",file_get_contents("infoidbots.txt"));
$countbots = count($botfreeid)-1;
if($countbots<=0){
$countbots="لايوجد بوتات مصنوعة";
}
if($message  and in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌ لا تستطيع استخدام البوت انت محظور ❌
",
]);return false;}

if($countban<=0){
$countban="لايوجد محظورين";
}
if($text == "/start" and in_array($from_id,$admins) ){

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"اهلا بك عزيزي المدير في قائمة التحكم الخاصة بالمصنع  
الاحصائية : 

• عدد الاعضاء : $cunte

• المحظورين: $countban

• البوتات المصنوعة : $countbots

",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"الإشتراك الاجباري لكل البوتات : $st_ch_bots ",'callback_data'=>"st_ch_bots"]],

[['text'=>"ضبط قناة الاشتراك الاجباري للبوتات ",'callback_data'=>"channelbots"]],
[['text'=>"الغاء اشتراك مدفوع",'callback_data'=>"delprobot"],['text'=>"اضافة اشتراك مدفوع",'callback_data'=>"addprobot"]],
[['text'=>"-  البوتات المصنوعة :$propots",'callback_data'=>"propots"]],
[['text'=>"- نوع البوتات المصنوعة:$listbots",'callback_data'=>"listbots"]],
[['text'=>"- تعيين رسالة /start ",'callback_data'=>"start"]],
[['text'=>"- تعيين كليشة ارسال التوكن",'callback_data'=>"token_kl"]],
[['text'=>"- التوجية من الاعضاء :$fwrmember",'callback_data'=>"fwrmember"]],


[['text'=>"- تنبية دخول الاعضاء : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"- حظر عضو ",'callback_data'=>"ban"],['text'=>"- الغاء حظر عضو ",'callback_data'=>"unban"]],
[['text'=>"- مسح قائمة الحظر ",'callback_data'=>"unbanall"]],
[['text'=>"- قسم الادمنية ",'callback_data'=>"admins"],['text'=>"- قسم الاذاعة ",'callback_data'=>"sendmessage"]],
[['text'=>"مسح قناة",'callback_data'=>"delchannel"],['text'=>"إضافة قناة",'callback_data'=>"addchannel"]],[['text'=>"- عرض قنوات الاشتراك الاجباري ",'callback_data'=>"viwechannel"]],
[['text'=>"- تعيين رسالة الاشتراك الاجباري ",'callback_data'=>"klish_sil"]],
[['text'=>"- خيارات عرض الاشتراك الاجباري ",'callback_data'=>"null"]],
[['text'=>"- ازرار انلاين :$silk ",'callback_data'=>"silk"],
['text'=>"- الرسالة :$allch ",'callback_data'=>"allch"]],


]
])
]);
}

function sendwataw($chat_id,$message_id){
$watawjson = json_decode(file_get_contents("botmak/wataw.json"),true);
$st_ch_bots=$watawjson["info"]["st_ch_bots"];

$infosudo = json_decode(file_get_contents("sudo.json"),true);

$updatenew=$infosudo["info"]["update"];
$propots=$infosudo["info"]["propots"];
$fwrmember=$infosudo["info"]["fwrmember"];
$listbots=$infosudo["info"]["listbots"];
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
$botfreeid=explode("\n",file_get_contents("infoidbots.txt"));
$countbots = count($botfreeid)-1;
if($countbots<=0){
$countbots="لايوجد بوتات مصنوعة";
}
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"اهلا بك عزيزي المدير في قائمة التحكم الخاصة بالمصنع 
الاحصائية : 

• عدد الاعضاء : $cunte

• المحظورين: $countban

• البوتات المصنوعة :  $countbots

",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"الإشتراك الاجباري لكل البوتات : $st_ch_bots ",'callback_data'=>"st_ch_bots"]],
[['text'=>"ضبط قناة الاشتراك الاجباري للبوتات ",'callback_data'=>"channelbots"]],
[['text'=>"-  البوتات المصنوعة :$propots",'callback_data'=>"propots"]],
[['text'=>"- نوع البوتات المصنوعة:$listbots",'callback_data'=>"listbots"]],
[['text'=>"الغاء اشتراك مدفوع",'callback_data'=>"delprobot"],['text'=>"اضافة اشتراك مدفوع",'callback_data'=>"addprobot"]],
[['text'=>"- تعيين رسالة /start ",'callback_data'=>"start"]],
[['text'=>"- تعيين كليشة ارسال التوكن",'callback_data'=>"token_kl"]],
[['text'=>"- التوجية من الاعضاء :$fwrmember",'callback_data'=>"fwrmember"]],


[['text'=>"- تنبية دخول الاعضاء : $tnbih",'callback_data'=>"tnbih"]],
[['text'=>"- حظر عضو ",'callback_data'=>"ban"],['text'=>"- الغاء حظر عضو ",'callback_data'=>"unban"]],
[['text'=>"- مسح قائمة الحظر ",'callback_data'=>"unbanall"]],
[['text'=>"- قسم الادمنية ",'callback_data'=>"admins"],['text'=>"- قسم الاذاعة ",'callback_data'=>"sendmessage"]],
[['text'=>"مسح قناة",'callback_data'=>"delchannel"],['text'=>"إضافة قناة",'callback_data'=>"addchannel"]],

[['text'=>"- عرض قنوات الاشتراك الاجباري ",'callback_data'=>"viwechannel"]],
[['text'=>"- تعيين رسالة الاشتراك الاجباري ",'callback_data'=>"klish_sil"]],
[['text'=>"- خيارات عرض الاشتراك الاجباري ",'callback_data'=>"null"]],
[['text'=>"- ازرار انلاين :$silk ",'callback_data'=>"silk"],
['text'=>"- الرسالة :$allch ",'callback_data'=>"allch"]],

]
])
]);
} 
 ###wataw### 
#اضافة اشتراك مدفوع 
if($data == "addprobot"){
$infosudo["info"]["amr"]="addprobot";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"✴ اضافة اشتراك مدفوع : 
قم بارسال معرف البوت المصنوع الذي تود اضافة الاشتراك المدفوع له",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="addprobot" and in_array($from_id,$admins)){
$us_bo=str_replace('@','',$text);

$idbots=file_get_contents("user/$us_bo.txt");



if($idbots!=null){

$infobot=explode("\n",file_get_contents("botmak/$idbots/info.txt"));

$tokenbot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];


bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" 
ℹ معلومات البوت 
•النوع : $no3mak
توكن : `$tokenbot`
يوزر البوت : *@$userbot*
ايدي البوت : `$idbots`


معلومات صاحب البوت 🙎 
الايدي : `$id`
[صاحب البوت ](tg://user?id=$id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"سنوي  ",'callback_data'=>"probotyes yars_".$idbots],['text'=>"6 اشهر  ",'callback_data'=>"probotyes 6mo_".$idbots],['text'=>"3 اشهر  ",'callback_data'=>"probotyes 3mo_".$idbots],['text'=>"شهر واحد  ",'callback_data'=>"probotyes 1mo_".$idbots]],
[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);

}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ لايوجد بوت مصنوع بنفس هذا المعرف $text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- معاودة المحاولة  ",'callback_data'=>"addprobot"]],
]
])
]);

}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}

if(preg_match('/^(probotyes) (.*)/s', $data)){
$nn = str_replace('probotyes ',"",$data);
$ex=explode('_',$nn);
$ash=$ex[0];
$idbots=$ex[1];
if($idbots!=null){
$mo=86400*30;
$time=time()+(3600 * 1);


if($ash=="yars"){$ti=$time+($mo * 12);}
if($ash=="6mo_"){$ti=$time+($mo * 6);}
if($ash=="3mo_"){$ti=$time+($mo * 3);}
if($ash=="1mo_"){$ti=$time+($mo * 1);}
$projsonmem["info"]["pro"]="yes";
$projsonmem["info"]["dateon"]="$time";
$projsonmem["info"]["dateoff"]="$ti";
file_put_contents("botmak/$idbots/pro.json", json_encode($projsonmem));

$projson = json_decode(file_get_contents("prodate.json"),true);
$projson["info"][$idbots]["pro"]="yes";
$projson["info"][$idbots]["dateon"]="$time";
$projson["info"][$idbots]["dateoff"]="$ti";
file_put_contents("prodate.json", json_encode($projson));





$infobot=explode("\n",file_get_contents("botmak/$idbots/info.txt"));
$tokenbot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];

$dayon = date('Y/m/d',$time);
$timeon =date('H:i:s A',$time);
$dayoff = date('Y/m/d',$ti);
$timeoff =date('H:i:s A',$ti);

bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"✅ تم اضافة الاشتراك المدفوع بنجاح 

ℹ معلومات البوت 
•النوع : $no3mak
يوزر البوت : @$userbot
ايدي البوت : $idbots

ℹمعلومات الاشتراك 
- وقت الاشتراك : 
⏰ $timeon
📅 $dayon
- موعد انتهاء الاشتراك : 
⏰ $timeoff
📅 $dayoff
",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- العودة  ",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$id, 
'text'=>"✅ تم اضافة الاشتراك لبوتك المصنوع بنجاح

ℹ معلومات البوت 
•النوع : $no3mak
يوزر البوت : @$userbot
ايدي البوت : $idbots

ℹمعلومات الاشتراك 
- وقت الاشتراك : 
⏰ $timeon
📅 $dayon
- موعد انتهاء الاشتراك : 
⏰ $timeoff
📅 $dayoff
",
'disable_web_page_preview'=>true,
]);
}}

#حذف اشتراك مدفوع 

if($data == "delprobot"){
$infosudo["info"]["amr"]="delprobot";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"ℹ حذف اشتراك مدفوع : 
قم بارسال معرف البوت المصنوع الذي تود حذف❌ الاشتراك المدفوع له",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="delprobot" and in_array($from_id,$admins)){
$us_bo=str_replace('@','',$text);

$idbots=file_get_contents("user/$us_bo.txt");



if($idbots!=null){
$projson = json_decode(file_get_contents("prodate.json"),true);
if($projson["info"][$idbots]["pro"]=="yes"){



$infobot=explode("\n",file_get_contents("botmak/$idbots/info.txt"));

$tokenbot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
$time=$projson["info"][$idbots]["dateon"];
$ti=$projson["info"][$idbots]["dateoff"];

$dayon = date('Y/m/d',$time);
$timeon =date('H:i:s A',$time);
$dayoff = date('Y/m/d',$ti);
$timeoff =date('H:i:s A',$ti);


bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" 
ℹ معلومات البوت 
•النوع : $no3mak
يوزر البوت : @$userbot
ايدي البوت : $idbots

",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"حذف   ",'callback_data'=>"delprobotyes ".$idbots],['text'=>"تراجع   ",'callback_data'=>"home"]],
]
])
]);
$projson = json_decode(file_get_contents("prodate.json"),true);
$projson["info"][$idbots]["pro"]="no";
file_put_contents("prodate.json", json_encode($projson));

}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ هذا البوت لا يمتلك اشتراك مدفوع  $text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- معاودة المحاولة  ",'callback_data'=>"delprobot"]],
]
])
]);


}
}else{

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ لايوجد بوت مصنوع بنفس هذا المعرف $text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- معاودة المحاولة  ",'callback_data'=>"delprobot"]],
]
])
]);

}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}


if(preg_match('/^(delprobotyes) (.*)/s', $data)){
$idbots = str_replace('delprobotyes ',"",$data);
if($idbots!=null){

$projsonmem["info"]["pro"]="no";
file_put_contents("botmak/$idbots/pro.json", json_encode($projsonmem));

$projson = json_decode(file_get_contents("prodate.json"),true);
$projson["info"][$idbots]["pro"]="no";
file_put_contents("prodate.json", json_encode($projson));





$infobot=explode("\n",file_get_contents("botmak/$idbots/info.txt"));

$tokenbot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"🚫 تم حذف الاشتراك المدفوع بنجاح 

ℹ معلومات البوت 
•النوع : $no3mak
يوزر البوت : @$userbot
ايدي البوت : $idbots

",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- العودة  ",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$id, 
'text'=>"❌ تم حذف الاشتراك المدفوع لبوتك المصنوع 

ℹ معلومات البوت 
•النوع : $no3mak
يوزر البوت : @$userbot
ايدي البوت : $idbots
",
'disable_web_page_preview'=>true,
]);
}}

#حظر 
if($data == "ban"){
$infosudo["info"]["amr"]="ban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال أيدي العضو لحظره",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);

}
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="ban" and in_array($from_id,$admins) and is_numeric($text)){
if(!in_array($text,$ban)){

file_put_contents("sudo/ban.txt","$text\n",FILE_APPEND);

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حظر العضو بنجاح 
$text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"❌ لقد قام الادمن بحظرك من استخدام البوت",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🚫 العضو محظور مسبقاً",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);

}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
#الغاء الحظر
if($data == "unban"){
$infosudo["info"]["amr"]="unban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال أيدي العضو للإلغاء الحظر عنه",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);

}
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="ban" and in_array($from_id,$admins) and is_numeric($text)){
if(in_array($text,$ban)){

$str=file_get_contents("sudo/ban.txt");
$str=str_replace("$text\n",'',$str);
file_put_contents("sudo/ban.txt",$str);

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم الغاء حظر العضو بنجاح 
$text",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);

bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"✅ لقد قام الادمن بالغاء الحظر عنك  .",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🚫 العضو ليسِ محظور مسبقاً",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"home"]],
]
])
]);

}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}

if($data == "unbanall"){
if($countban>0){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم مسح قائمة المحظورين بنجاح ",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"🚫 ليس لديك اعضاء محظورين ",
        'show_alert'=>true
        ]);

}
}





//~~~~~~~~~~~//

if($data == "st_ch_bots"){
if($countbots>=40){
$watawjson = json_decode(file_get_contents("botmak/wataw.json"),true);
$join=$watawjson["info"]["st_ch_bots"];
if($join=="مفعل"){
$watawjson["info"]["st_ch_bots"]="معطل";
}
if($join=="معطل"){
$watawjson["info"]["st_ch_bots"]="مفعل";
}
file_put_contents("botmak/wataw.json", json_encode($watawjson));
sendwataw($chat_id,$message_id);
}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"🚫 لايمكنك تفعيل الاشتراك الاجباري لكل البوتات يجب ان يكون هناك على الاقل 40 بوتاً مصنوعاً من بوت الصانع الخاص بك  ",
        'show_alert'=>true
        ]);
}


}

if($data == "propots"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$join=$infosudo["info"]["propots"];
if($join=="مجانية"){
$infosudo["info"]["propots"]="مدفوعة";
}
if($join=="مدفوعة"){
$infosudo["info"]["propots"]="مجانية";
}
file_put_contents("sudo.json", json_encode($infosudo));
sendwataw($chat_id,$message_id);
}
if($data == "channelbots"){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$infosudo["info"]["amr"]="channelbots";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- حسننا عزيزي المدير قم بإعادة توجية منشور من القناة التي تريد جعلها قناة الاشتراك الاجباري في كل البوتات المصنوعة
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);
}




if($message->forward_from_chat and $infosudo["info"]["amr"]=="channelbots" and in_array($from_id, $admins)){
$id_channel= $message->forward_from_chat->id;
if($id_channel != null){

  $checkadmin = getChatstats($id_channel,$token);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$id_channel"))->result->title;
$watawjson["info"]["id_channel"]="$id_channel";
$watawjson["info"]["name_channel"]="$namechannel";

file_put_contents("botmak/wataw.json", json_encode($watawjson));
$infosudo["info"]["amr"]="channel_idlink";
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

 [['text'=>"- الغاء ",'callback_data'=>"home"]],
 ]])
 ]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
 ",
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- إعادة المحاولة   ",'callback_data'=>"channelbots"]],
 ]])
]);
$infosudo["info"]["amr"]="null";

}
}
file_put_contents("sudo.json", json_encode($infosudo));
}

if($text  and $text !="/start" and $infosudo["info"]["amr"]=="channel_idlink" and in_array($from_id,$admins) and !$message->forward_from_chat ){
$tex=str_replace(['https://t.me/joinchat/','http://t.me/joinchat/'],'',$text);
$watawjson["info"]["link_channel"]="$tex";
file_put_contents("botmak/wataw.json", json_encode($watawjson));

bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
link : $text 
t : $tex
 ",
 'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- تتغيير القناة   ",'callback_data'=>"chaneelbots"]],
 ]])
]);


$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}


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
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="start" and in_array($from_id,$admins)){
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

if($data == "token_kl"){
$infosudo["info"]["amr"]="token_kl";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال نص كليشة إرسال التوكن",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- الغاء  ",'callback_data'=>"home"]],
]
])
]);

}
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="token_kl" and in_array($from_id,$admins)){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ كليشة إرسال التوكن
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
$infosudo["info"]["token_kl"]="$text";
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
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="klish_sil" and in_array($from_id,$admins)){
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

if($data == "home" and in_array($from_id,$admins)){
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
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="addchannel" and in_array($from_id,$admins) and !$message->forward_from_chat ){

$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
$idchan=$ch_id;
if($ch_id != null){

  $checkadmin = getChatstats($text,$token);
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
if($message->forward_from_chat and $infosudo["info"]["amr"]=="addchannel" and in_array($from_id, $admins)){
$id_channel= $message->forward_from_chat->id;
if($id_channel != null){

  $checkadmin = getChatstats($id_channel,$token);
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

if($text  and $text !="/start" and $infosudo["info"]["amr"]=="channel_id" and in_array($from_id,$admins) and !$message->forward_from_chat ){

  $checkadmin = getChatstats($channel_id,$token);
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






if($data == "viwechannel" and in_array($from_id, $admins)){
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


if($data == "delchannel" and in_array($from_id, $admins)){
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



#قسم الاذاعة 

$amr = file_get_contents("sudo/amr.txt");
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
if($data == "sendmessage" and  in_array($from_id,$admins)){

bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› قم بتحديد نوع الاذاعة ومكان ارسال الاذاعة
ثم قم الضغط على ارسال الرسالة 
",'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"نوع الاذاعة : $no3send",'callback_data'=>"button"]],
[['text'=>"توجية",'callback_data'=>"forward"],
['text'=>"MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"HTML",'callback_data'=>"HTML"]],
[['text'=>"الارسال الى  : $chatsend",'callback_data'=>"button"]],
[['text'=>"الاعضاء",'callback_data'=>"member"],
['text'=>"كل البوتات",'callback_data'=>"botsall"]],
[['text'=>"ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>" - العودة ",'callback_data'=>"home"]],


]
])
]);
}
function sendwataw2($chat_id,$message_id){
$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");

bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› قم بتحديد نوع الاذاعة ومكان ارسال الاذاعة
ثم قم  الضغط على ارسال الرسالة
"
,'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"نوع الاذاعة : $no3send",'callback_data'=>"button"]],
[['text'=>"توجية",'callback_data'=>"forward"],
['text'=>"MARKDOWN",'callback_data'=>"MARKDOWN"],['text'=>"HTML",'callback_data'=>"HTML"]],
[['text'=>"الارسال الى  : $chatsend",'callback_data'=>"button"]],
[['text'=>"الاعضاء",'callback_data'=>"member"],
['text'=>"كل البوتات",'callback_data'=>"botsall"]],
[['text'=>"ارسال الرسالة",'callback_data'=>"post"]],
[['text'=>" - العودة ",'callback_data'=>"home"]],
]
])
]);
} 
 ###wataw### 


//~~~~~~~~~~~//
if($data == "forward"){
file_put_contents("no3send.txt","forward");
sendwataw2($chat_id,$message_id);

}


if($data == "MARKDOWN"){
file_put_contents("no3send.txt","MARKDOWN");
sendwataw2($chat_id,$message_id);

}
if($data == "HTML"){
file_put_contents("no3send.txt","html");
sendwataw2($chat_id,$message_id);

}

//~~~~~~~~~~~//


if($data == "member"){
file_put_contents("chatsend.txt","member");
sendwataw2($chat_id,$message_id);


}

$datatime = json_decode(file_get_contents("datatime.json"),true);
$datatimesendadmin = $datatime["info"]['admin']["date"];


if($data == "botsall"){
if($countbots>=40){
$timeuoto=time()+(3600 * 1);
$day = date('Y-m-d',$timeuoto);
if($day!=$datatimesendadmin){

$datatime["info"]['admin']["date"]="$day";

file_put_contents("datatime.json", json_encode($datatime));

file_put_contents("chatsend.txt","botsall");
sendwataw2($chat_id,$message_id);
}else{
bot('answercallbackquery',[
'callback_query_id'=>$up->id,
"text"=>"🚫 معذرة لاتستطيع عمل الاذاعة لكل البوتات المصنوعة من مصنعك الخاص اكثر من مرة واحدة فقط في اليوم $day 
- ستتمكن من نشر الاذاعة غداً

 ",
'show_alert'=>true,
]);
}
}else{
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"🚫 لايمكنك عمل اذاعة لكل البوتات يجب ان يكون هناك على الاقل 40 بوتاً مصنوعاً من بوت الصانع الخاص بك  ",
        'show_alert'=>true
        ]);


}
}




$no3send =file_get_contents("no3send.txt");
$chatsend=file_get_contents("chatsend.txt");
if($data == "post" and $no3send!=null and $chatsend!=null and  in_array($from_id,$admins) ){

file_put_contents("sudo/amr.txt","sendsend");
bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"قم بارسال رسالتك الان  
نوع الارسال : $no3send
مكان الارسال : $chatsend
",
'message_id'=>$message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء",'callback_data'=>"set"]],

]
])
]);
}
if($data == "set" and  in_array($from_id,$admins) ){
unlink("sudo/amr.txt");
bot('EditMessageText',[
'chat_id'=>$chat_id,
'text'=>"تم إلغاء الارسال بنجاح 
",
'message_id'=>$message_id,
]);
} 
 ###wataw### 

$forward = $update->message->forward_from;
$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;

$member =file_get_contents("sudo/member.txt");


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



 ###wataw### 


##تنفيذ الاذاعة 
if($message  and $text !="الاذاعة" and $amr == "sendsend" and $no3send=="forward" and  in_array($from_id,$admins) ){
unlink("sudo/amr.txt");


if($chatsend=="member"){
$for=$member;
$txt="  تم التوجية - خاص - للاعضاء فقط";

$foor=explode("\n",$for);
bot('ForwardMessage',[
 'chat_id'=>$chat_id,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
]);
for($i=0;$i<count($foor); $i++){
bot('ForwardMessage',[
 'chat_id'=>$foor[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
]);

}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅ $txt
",
'message_id'=>$message_id,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'عودة ' ,'callback_data'=>"home"]],
]])
]);


}
if($chatsend=="botsall"){
$bots=explode("\n",file_get_contents("infoidbots.txt"));
$coo=count($bots)-1;
for ($i=0; $i < count($bots); $i++) { 
$idbots=$bots[$i];


include("wataw/$idbots.php");

$tokenboot="$tokenbot";
$mm=explode("\n",file_get_contents("botmak/$idbots/sudo/member.txt"));
for ($l=0; $l < count($mm); $l++) {
$id=$mm[$l];
file_get_contents("https://api.telegram.org/bot".$tokenboot."/ForwardMessage?chat_id=".$id."&from_chat_id=$chat_id&message_id=".$message->message_id);


}
$co=$co+$l-1;
}
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"- تمت الاذاعة في جميع البوتات المصنوعة 
- تم الارسال الى $co مستخدم.
- عدد البوتات : $coo
",
'reply_to_message_id'=>$message_id,
]);
}



unlink("no3send.txt");
unlink("chatsend.txt");


}


if($message and $text !="الاذاعة"  and $amr == "sendsend"and $no3send !="forward" and  in_array($from_id,$admins) ){
unlink("sudo/amr.txt");


if($chatsend=="member"){
$for=$member;
$txt=" تم النشر - خاص - للاعضاء فقط";

$foor=explode("\n",$for);
if($text){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$text",
'parse_mode'=>"$no3send",
'disable_web_page_preview'=>true,

]);

for($i=0;$i<count($foor); $i++){
 
 
 
bot('sendMessage', [
'chat_id'=>$foor[$i],
'text'=>"$text",
'parse_mode'=>"$no3send",
'disable_web_page_preview'=>true,
]);





}
}else{
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$file_id",
'caption'=>"$caption",
]);

for($i=0;$i<count($foor); $i++){
 
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$foor[$i],
"$ss"=>"$file_id",
'caption'=>"$caption",

]);
}


}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅ $txt
"
,'message_id'=>$message_id,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>' عودة ' ,'callback_data'=>"home"]],
]])
]);
unlink("no3send.txt");
unlink("chatsend.txt");
}

if($chatsend=="botsall"){



$bots=explode("\n",file_get_contents("infoidbots.txt"));
$coo=count($bots)-1;
for ($i=0; $i < count($bots); $i++) { 
$idbots=$bots[$i];


include("wataw/$idbots.php");

$tokenboot="$tokenbot";
$mm=explode("\n",file_get_contents("botmak/$idbots/sudo/member.txt"));
for ($l=0; $l < count($mm); $l++) {
$id=$mm[$l];
if($text){
file_get_contents("https://api.telegram.org/bot".$tokenboot."/sendMessage?chat_id=".$id."&text=$text&parse_mode=".$no3send);
}else{
$ss=str_replace("send","",$sens);
file_get_contents("https://api.telegram.org/bot".$tokenboot."/$sens?chat_id=".$id."&$ss=$file_id&caption=".$caption);
}

}
$co=$co+$l-1;
}
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"- تمت الاذاعة في جميع البوتات المصنوعة 
- تم الارسال الى $co مستخدم.
- عدد البوتات : $coo
",
'reply_to_message_id'=>$message_id,
]);
}




} 

 ###wataw### 

if($data == "admins" and $from_id ==$admin ){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["admins"];


$keyboard["inline_keyboard"]=[];

foreach($orothe as $co=>$sss ){


if($co!=null and $co!=$admin ){

$keyboard["inline_keyboard"][] =
[['text'=>' 🗑','callback_data'=>'deleteadmin '.$co.'#'.$sss],['text'=>$sss,'callback_data'=>'null']];
}}
	$keyboard["inline_keyboard"][] = [['text'=>"- اضافة ادمن  ",'callback_data'=>"addadmin"]];
	$keyboard["inline_keyboard"][] = [['text'=>"- عودة  ",'callback_data'=>"home"]];
$reply_markup=json_encode($keyboard);
	
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- تستطيع فقط رفع 5 ادمنية 
*تنوية : الادمنية يستطيعون التحكم بإعدادات البوت ماعدا قسم الادمنية .
",

'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
]);

}

if($data == "addadmin" and $from_id ==$admin ){
$infosudo["info"]["amr"]="addadmin";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- قم بارسال ايدي الادمن 
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
if($text  and $text !="/start" and $infosudo["info"]["amr"]=="addadmin" and $from_id ==$admin and is_numeric($text)){
if(!in_array($text,$admins)){
$infosudo = json_decode(file_get_contents("sudo.json"),true);
$orothe= $infosudo["info"]["channel"];
$count=count($orothe);
if($count<6){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حفظ  رفع الادمن بنجاح",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"admins"]],
]
])
]);

$infosudo["info"]["admins"][]="$text";
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🚫 لايمكنك اضافة اكثر من 5 ادمنية ً",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"admins"]],
]
])
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- ⚠ الادمن مضاف مسبقاً",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>"- عودة  ",'callback_data'=>"admins"]],
]
])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));

}

if(preg_match('/^(deleteadmin) (.*)/s', $data) ){
$nn = str_replace('deleteadmin ',"",$data);
$ex=explode('#',$nn);
$id=$ex[1];
$n=$ex[0];

bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"- ✅ تم حذف الادمن بنجاح 
-id $id
",
#'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

 [['text'=>"- عودة  ",'callback_data'=>"admins"]],
 ]])
]);
unset($infosudo["info"]["admins"][$n]);
file_put_contents("sudo.json", json_encode($infosudo));
}
if($data == "listbots"){

bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"⭕ اهلا بك عزيزي المدير
-قم بتحديد نوع البوت المصنوع من المصنع الخاص بك ، تستطيع اختيار نوع واحد او اختيار جميع الانواع .",
'parse_mode'=>markdown,
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[

[['text'=>'- بوت سايت ' ,'callback_data'=>"listbots 2"]],
[['text'=>'- بوت الازرار ' ,'callback_data'=>"listbots 3"],['text'=>'- بوت المتجر ' ,'callback_data'=>"listbots 4"]],
[['text'=>'- بوت البصمات ' ,'callback_data'=>"listbots 5"],['text'=>'- بوت تواصل  ' ,'callback_data'=>"listbots 1"]],
[['text'=>'- بوت التعليقات ' ,'callback_data'=>"listbots 7"],['text'=>'-  ادارة منشورات القناة  ' ,'callback_data'=>"listbots 8"]],
[['text'=>'- بوت زخرفة ' ,'callback_data'=>"listbots 9"],['text'=>'- بوت ترجمة ' ,'callback_data'=>"listbots 10"]],
[['text'=>'- القرآن الكريم  ' ,'callback_data'=>"listbots 11"],['text'=>'- بوت العاب  انلاين ' ,'callback_data'=>"listbots 12"]],
[['text'=>'- بوت تحويل الصيغ ' ,'callback_data'=>"listbots 13"],['text'=>'- إستخراج روابط القنوات ' ,'callback_data'=>"listbots 14"]],
[['text'=>'- بوت همسة ' ,'callback_data'=>"listbots 15"],['text'=>'- بوت كشف الكذب ' ,'callback_data'=>"listbots 16"]],
[['text'=>'- حذف الحساب  ' ,'callback_data'=>"listbots 17"],['text'=>'- بوت الاعلانات ' ,'callback_data'=>"listbots 18"]],
[['text'=>'- بوت الأذكار ' ,'callback_data'=>"listbots 19"],['text'=>'- بوت الاكواد الجاهزة ' ,'callback_data'=>"listbots 20"]],
[['text'=>'- بوت حساب العمر ' ,'callback_data'=>"listbots 21"],['text'=>'-  تحميل انستقرام ' ,'callback_data'=>"listbots 22"]],
[['text'=>'- البلورة السحرية  ' ,'callback_data'=>"listbots 23"],['text'=>'- زخرفة تمبلر ' ,'callback_data'=>"listbots 24"]],
[['text'=>'- مشاركة بدون توجية ' ,'callback_data'=>"listbots 25"],['text'=>'- حجر ورقة مقص ' ,'callback_data'=>"listbots 26"]],
[['text'=>'- حماية القنوات ' ,'callback_data'=>"listbots 27"],['text'=>'- تمويل القنوات ' ,'callback_data'=>"listbots 28"]],
[['text'=>'- نسبة الحب ' ,'callback_data'=>"listbots 29"],['text'=>'- بوت دعم القنوات ' ,'callback_data'=>"listbots 30"]],
[['text'=>'• جميع الانواع • ' ,'callback_data'=>"listbots all"]],
[['text'=>'• العودة • ' ,'callback_data'=>"home"]],
   ] 
   ])
]);
}

if(preg_match('/^(listbots) (.*)/s', $data)){
$nu = str_replace('listbots ',"",$data);

if($nu==2){$b="بوت سايت";
}
if($nu==3){$b="بوت الازرار";
}
if($nu==4){$b="بوت المتجر";
}
if($nu==5){$b="بوت البصمات";
}
if($nu==6){$b="بوت صانع بوتات";
}
if($nu==7){$b="بوت التعليقات";
}
if($nu==8){$b="بوت ادارة منشور القنوات";
}
if($nu==9){$b="بوت الزخرفة";
}
if($nu==10){$b="بوت الترجمة";
}
if($nu==11){$b="بوت القرآن الكريم";
}
if($nu==12){$b="بوت العاب  انلاين";
}
if($nu==13){$b="بوت تحويل الصيغ";
}
if($nu==14){$b="بوت إستخراج روابط القنوات";
}
if($nu==15){$b="بوت همسة";
}
if($nu==16){$b="بوت كشف الكذب";
}
if($nu==17){$b="بوت حذف الحساب ";
}
if($nu==18){$b="بوت الاعلانات";
}
if($nu==19){$b="بوت الأذكار";
}
if($nu==20){$b="بوت الاكواد الجاهزة";
}
if($nu==21){$b="بوت حساب العمر";
}
if($nu==22){$b="بوت تحميل انستقرام";
}
if($nu==23){$b="بوت البلورة السحرية";
}
if($nu==24){$b="بوت زخرفة تمبلر";
}
if($nu==25){$b="بوت مشاركة بدون توجية";
}
if($nu==26){$b="بوت حجر ورقة مقص";
}
if($nu==27){$b="بوت حماية القنوات";
}
if($nu==28){$b="بوت تمويل القنوات";
}
if($nu==29){$b="بوت نسبة الحب";
}
if($nu==30){$b="بوت دعم القنوات";
}
if($nu=="all"){
$b="جميع الانواع";
$infosudo["info"]["listbots"]="كل الانواع";
file_put_contents("sudo.json", json_encode($infosudo));

}else{
$infosudo["info"]["listbots"]="$b";
$infosudo["info"]["listnu"]="$nu";

file_put_contents("sudo.json", json_encode($infosudo));
}

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" ✅ تم تحديد نوعية البوتات المصنوعة 
النوع : $b
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• العودة • ' ,'callback_data'=>"home"]],
   ] 
   ])
]);
}
$listnu=$infosudo["info"]["listnu"];

if($listbots=="كل الانواع"){
$key_start = json_encode(['inline_keyboard' => [ //inline_keyboard =2
[['text'=>'صنع بوت جديد ✅ ' ,'callback_data'=>"sn3botfre"],
['text'=>'🔖بوتاتك المصنوعة ' ,'callback_data'=>"botsmember"]],
],
]); 


}else{
$key_start = json_encode(['inline_keyboard' => [ //inline_keyboard =2
[['text'=>"صنع $listbots ",'callback_data'=>"mak $listnu"],['text'=>'🔖بوتاتك المصنوعة ' ,'callback_data'=>"botsmember"]],
],
]); 


}






$botfree=explode("\n",file_get_contents("from_id/$from_id/countuserbot.txt"));

$countbot=count($botfree)-1;
$infobots=file_get_contents("from_id/$from_id/countuserbot.txt");
if($infobots!=null ){
$infobotsmember="♻ بوتاتك المصنوعة ($countbot) هي : \n$infobots";


}else{
$infobotsmember="لم تقم بصنع اي بوت مسبقاً";


}

if($start==null){
$start="لم يتم تعيين كليشة /start من قبل المدير ";

}

if($info_kl==null){
$info_kl="لم يتم تعيين الكليشة من قبل المدير ";

}
if($token_kl==null){
$token_kl="
لإنشاء توكن توكن : @botfather
قم بارسال التوكن لصنع بوت : 
";

}
$amrmem=file_get_contents("from_id/$from_id/amr.txt");
if($text=="/start"){

mkdir("from_id");
mkdir("from_id/$from_id");
file_put_contents("from_id/$from_id/amr.txt","");
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"مرحبا  [$name](tg://user?id=$chat_id)
~~~~~~~~~~~~~~~~~
$start
~~~~~~~~~~~~~~~~~
`$infobotsmember`
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>$key_start,
]);
}


if($data=="freebot"){
file_put_contents("from_id/$from_id/amr.txt","");

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$chat_id)
~~~~~~~~~~~~~~~~~
$start
~~~~~~~~~~~~~~~~~
`$infobotsmember`

",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>$key_start,
]);
}
if($data=="sn3botfre"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"👮|  مرحبا بك عزيزي 
قوم بإختيار نوعية البوت الذي تود صناعتة ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• قائمة البوتات • ' ,'callback_data'=>"null"]],
[['text'=>'- بوت سايت ' ,'callback_data'=>"mak 2"]],
[['text'=>'- بوت الازرار ' ,'callback_data'=>"mak 3"],['text'=>'- بوت المتجر ' ,'callback_data'=>"mak 4"]],
[['text'=>'- بوت البصمات ' ,'callback_data'=>"mak 5"],['text'=>'- بوت تواصل  ' ,'callback_data'=>"mak 1"]],
[['text'=>'- بوت التعليقات ' ,'callback_data'=>"mak 7"],['text'=>'-  ادارة منشورات القناة  ' ,'callback_data'=>"mak 8"]],
[['text'=>'- بوت زخرفة ' ,'callback_data'=>"mak 9"],['text'=>'- بوت ترجمة ' ,'callback_data'=>"mak 10"]],
[['text'=>'- القرآن الكريم  ' ,'callback_data'=>"mak 11"],['text'=>'-  بوت العاب  انلاين ' ,'callback_data'=>"mak 12"]],
[['text'=>'- بوت تحويل الصيغ ' ,'callback_data'=>"mak 13"],['text'=>'- إستخراج روابط القنوات ' ,'callback_data'=>"mak 14"]],
[['text'=>'- بوت همسة ' ,'callback_data'=>"mak 15"],['text'=>'- بوت كشف الكذب ' ,'callback_data'=>"mak 16"]],
[['text'=>'• المزيد من البوتات • ' ,'callback_data'=>"makll"]],
[['text'=>'•  رجوع  • ' ,'callback_data'=>"freebot"]],
   ] 
   ])
]);

}

if($data=="makll"){

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"👮|  مرحبا بك عزيزي 
قوم بإختيار نوعية البوت الذي تود صناعتة ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• قائمة البوتات • ' ,'callback_data'=>"null"]],
[['text'=>'- بوت سايت ' ,'callback_data'=>"mak 2"]],
[['text'=>'- بوت الازرار ' ,'callback_data'=>"mak 3"],['text'=>'- بوت المتجر ' ,'callback_data'=>"mak 4"]],
[['text'=>'- بوت البصمات ' ,'callback_data'=>"mak 5"],['text'=>'- بوت تواصل  ' ,'callback_data'=>"mak 1"]],
[['text'=>'- بوت التعليقات ' ,'callback_data'=>"mak 7"],['text'=>'-  ادارة منشورات القناة  ' ,'callback_data'=>"mak 8"]],
[['text'=>'- بوت زخرفة ' ,'callback_data'=>"mak 9"],['text'=>'- بوت ترجمة ' ,'callback_data'=>"mak 10"]],
[['text'=>'- القرآن الكريم  ' ,'callback_data'=>"mak 11"],['text'=>'-  بوت العاب  انلاين  ' ,'callback_data'=>"mak 12"]],
[['text'=>'- بوت تحويل الصيغ ' ,'callback_data'=>"mak 13"],['text'=>'- إستخراج روابط القنوات ' ,'callback_data'=>"mak 14"]],
[['text'=>'- بوت همسة ' ,'callback_data'=>"mak 15"],['text'=>'- بوت كشف الكذب ' ,'callback_data'=>"mak 16"]],
[['text'=>'- حذف الحساب  ' ,'callback_data'=>"mak 17"],['text'=>'- بوت الاعلانات ' ,'callback_data'=>"mak 18"]],
[['text'=>'- بوت الأذكار ' ,'callback_data'=>"mak 19"],['text'=>'- بوت الاكواد الجاهزة ' ,'callback_data'=>"mak 20"]],
[['text'=>'- بوت حساب العمر ' ,'callback_data'=>"mak 21"],['text'=>'-  تحميل انستقرام ' ,'callback_data'=>"mak 22"]],
[['text'=>'- البلورة السحرية  ' ,'callback_data'=>"mak 23"],['text'=>'- زخرفة تمبلر ' ,'callback_data'=>"mak 24"]],
[['text'=>'- مشاركة بدون توجية ' ,'callback_data'=>"mak 25"],['text'=>'- حجر ورقة مقص ' ,'callback_data'=>"mak 26"]],
[['text'=>'- حماية القنوات ' ,'callback_data'=>"mak 27"],['text'=>'- تمويل القنوات ' ,'callback_data'=>"mak 28"]],
[['text'=>'- نسبة الحب ' ,'callback_data'=>"mak 29"],['text'=>'- بوت دعم القنوات ' ,'callback_data'=>"mak 30"]],
[['text'=>'• العودة • ' ,'callback_data'=>"freebot"]],
   ] 
   ])
]);

}







$botfree=explode("\n",file_get_contents("from_id/$from_id/countbot.txt"));

$countbot=count($botfree);
if(preg_match('/^(mak) (.*)/s', $data)){
$nu = str_replace('mak ',"",$data);

if($nu==2){$b="بوت سايت";
}
if($nu==3){$b="بوت الازرار";
}
if($nu==4){$b="بوت المتجر";
}
if($nu==5){$b="بوت البصمات";
}
if($nu==6){$b="بوت صانع بوتات";
}
if($nu==7){$b="بوت التعليقات";
}
if($nu==8){$b="بوت ادارة منشور القنوات";
}
if($nu==9){$b="بوت الزخرفة";
}
if($nu==10){$b="بوت الترجمة";
}
if($nu==11){$b="بوت القرآن الكريم";
}
if($nu==12){$b="بوت العاب  انلاين";
}
if($nu==13){$b="بوت تحويل الصيغ";
}
if($nu==14){$b="بوت إستخراج روابط القنوات";
}
if($nu==15){$b="بوت همسة";
}
if($nu==16){$b="بوت كشف الكذب";
}
if($nu==17){$b="حذف الحساب";
}
if($nu==18){$b="بوت الاعلانات";
}
if($nu==19){$b="بوت الأذكار";
}
if($nu==20){$b="بوت الاكواد الجاهزة";
}
if($nu==21){$b="بوت حساب العمر";
}
if($nu==22){$b="بوت تحميل انستقرام";
}
if($nu==23){$b="بوت البلورة السحرية";
}
if($nu==24){$b="بوت زخرفة تمبلر";
}
if($nu==25){$b="بوت مشاركة بدون توجية";
}
if($nu==26){$b="بوت حجر ورقة مقص";
}
if($nu==27){$b="بوت حماية القنوات";
}
if($nu==28){$b="بوت تمويل القنوات";
}
if($nu==29){$b="بوت نسبة الحب";
}
if($nu==30){$b="بوت دعم القنوات";
}

file_put_contents("from_id/$from_id/botmak.txt","mak$nu");
file_put_contents("from_id/$from_id/no3mak.txt","$b");

file_put_contents("from_id/$from_id/amr.txt","sn3free");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"$token_kl  $b",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'تراجع  ' ,'callback_data'=>"freebot"]],
   ] 
   ])
]);

}


mkdir("wataw");
if($text and $amrmem =="sn3free"){
file_put_contents("from_id/$from_id/amr.txt","");

$no3mak=file_get_contents("from_id/$from_id/no3mak.txt");
$botmak=file_get_contents("from_id/$from_id/botmak.txt");

$url = "https://api.telegram.org/bot".$text."/getWebhookInfo";
 $check_token = json_decode(file_get_contents($url));

$check = $check_token;
$yes=$check->ok ;
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"⏰ انتظر قليلا جاري فحص التوكن  
",
]);

if($yes == "true"){



  $url = "https://api.telegram.org/bot$text/getme";
 $getidbots = json_decode(file_get_contents($url) , true);
 
 $idbot = $getidbots['result']['id'];
 $userbot = $getidbots['result']['username'];
$name1bot = $getidbots["result"]["first_name"];
 $userbot=trim($userbot);
 $idbot=trim($idbot);


mkdir("botmak");
mkdir("user");
mkdir("botmak/$idbot");
//عدم التكرار

$botfree=explode("\n",file_get_contents("botfreeid.txt"));
$botfreeid=explode("\n",file_get_contents("infoidbots.txt"));
$botfrom=explode("\n",file_get_contents("from_id/$from_id/countbot.txt"));
$idbotfrom=explode("\n",file_get_contents("from_id/$from_id/idbot.txt"));
$infobots="$userbot==code#$userbot#$idbot";

# تخزين البوتات للعضو
if(!in_array($userbot,$botfrom )){
file_put_contents("from_id/$from_id/countuserbot.txt","》- @$userbot\n",FILE_APPEND);

file_put_contents("from_id/$from_id/countbot.txt",$userbot."\n",FILE_APPEND);
}
#bots

if(!in_array($infobots,$idbotfrom )){
file_put_contents("from_id/$from_id/idbot.txt","$infobots\n",FILE_APPEND);
}

if(!in_array($from_id,$botfree )){
file_put_contents("botfreeid.txt",$from_id."\n",FILE_APPEND);
}
if(!in_array($idbot,$botfreeid )){
file_put_contents("infoidbots.txt",$idbot."\n",FILE_APPEND);


}

file_put_contents("botmak/$idbot/admin.txt","$from_id");



$mak=file_get_contents("../bots/mak.php");
$bot=file_get_contents("../bots/$botmak.php");


$mak=str_replace("[*[TOKEN]*]","$text",$mak);
$mak=str_replace("[*[TOKENSAN3]*]","$token",$mak);
$mak=str_replace("[*[TOKENSAN3PLUS]*]","$tokensan3",$mak);

$bot=str_replace("<?php#*wataw*","$mak",$bot);
file_put_contents("botmak/$idbot/$userbot.php","$bot");

if($botmak=="mak28"){
$bot=file_get_contents("../bots/$botmak.php");

$bot=str_replace("[*[TOKEN]*]","$text",$bot);
$bot=str_replace("[*[TOKENSAN3]*]","$token",$bot);
$bot=str_replace("[*[TOKENSAN3PLUS]*]","$tokensan3",$bot);

file_put_contents("botmak/$idbot/$userbot.php","$bot");

}



file_get_contents("https://api.telegram.org/bot".$text."/setwebhook?url=".$folder."/$folder2"."/botmak/".$idbot."/$userbot.php");


file_put_contents("botmak/$idbot/info.txt","-- محمي --\n$userbot\n$name1bot\n$from_id\n$idbot\n$botmak\n$no3mak");


file_put_contents("user/$userbot.txt","$idbot");


file_put_contents("wataw/$idbot.php",'<?php '."\n".'$tokenbot= "'.$text.'";');
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id+1,
"text"=>"🎊 تم صنع بوتك بنجاح 🎊
- معرف البوت : @$userbot
- نوع البوت : $no3bot
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
	[['text'=>"- دخول الى البوت؛🎒",'url'=>"https://t.me/$userbot?start"]
	],
	[['text'=>'رجوع  ' ,'callback_data'=>"freebot"]],
	
   ] 
   ])
]);
// تحميل الاعدادات 

bot('sendmessage',[
'chat_id'=>$wathq1,
'message_id'=>$message_id,
"text"=>"👮|  تم صنع بوت جديد من المصنع الخاص بك  ✅ 
ℹ معلومات البوت 
النوع : $no3mak
توكن : `$textt...`
يوزر البوت : `$userbot@`
namebot : `$name1bot`
idbot : `$idbot`
معلومات صاحب البوت 🙎 
الاسم : *$name*
الايدي : `$from_id`
[$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
	[['text'=>"- دخول الى البوت؛🎒",'url'=>"https://t.me/$userbot?start"]
	],
   ] 
   ])
]);


}else{


bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id+1,
"text"=>"🚫 هناك خطاء التوكن الذي قمت بارسالة خاطئ قم بالارسال مره اخرى  

",
'reply_markup'=>$key_start,
]);

}

}






$botfree=explode("\n",file_get_contents("botfreeid.txt"));
$botf=file_get_contents("from_id/$from_id/countuserbot.txt");
if($data=="botsmember"){
if(in_array($from_id, $botfree) and $botf != "" and $botf != " " and $botf!= null){
$idbotfrom=explode("\n",file_get_contents("from_id/$from_id/idbot.txt"));

$keyboard["inline_keyboard"]=[];
      	for ($i=0; $i < count($idbotfrom); $i++) { 
      	$ex = explode("#", $idbotfrom[$i]);
$idbot=$ex['2'];
$userbot="@".$ex['1'];
$in="infobot ".$ex['1'];
$number = strlen($idbot);


$infobot=explode("\n",file_get_contents("botmak/$idbot/info.txt"));
$userbott=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];

if($number > 4){
	$keyboard["inline_keyboard"][$i] = [['text'=>$userbot,'url'=>"t.me/$userbott"],
	['text'=>$no3mak,'url'=>"t.me/$userbott"],['text'=>'معلومات اكثر ','callback_data'=>$in]];
      	}
      }
	$keyboard["inline_keyboard"][] = [['text'=>"- إذاعة لكل البوتات ",'callback_data'=>"sendpostbotsall"]];
		$keyboard["inline_keyboard"][] = [['text'=>"• رجوع • ",'callback_data'=>"freebot"]];	$reply_markup=json_encode($keyboard);
	unlink("from_id/$from_id/yes.txt");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"👦| اهلا بك عزيزي المستخدم
📡 | هذه هي قائمة بوتاتك المصنوعة ..
$infobotsmember

- قم بالضغط على معلومات اكثر لعرض معلوماتة وامكانية التعديل علية.


",
"message_id"=>$message_id,
'reply_markup'=>$reply_markup
]);

}else{
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"❌ عذراً لم تقم بصنع بوت من قبل ",
'reply_markup'=>$key_start,
]);
}
}




if(preg_match('/^(infobot) (.*)/s', $data)){
$userbot = str_replace('infobot ',"",$data);
	$userbot = str_replace(' ',"",$userbot);

$idbots=file_get_contents("user/$userbot.txt");

$infobot=explode("\n",file_get_contents("botmak/$idbots/info.txt"));


$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
include("wataw/$idbots.php");

$tokenboot="$tokenbot";


$mm=explode("\n",file_get_contents("botmak/$idbots/sudo/member.txt"));
$co=count($mm)-1;
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"معلومات البوت المصنوع  : 
`$use`
•النوع : $no3mak
idbot : `$idbots`
namebot : `$namebot`

token : \n `$tokenboot`
•عدد الاعضاء المشتركين في البوت : $co
~~~~~~~~~~~~~~~
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🚫 حذف  ' ,'callback_data'=>"deletebot ".$userbot],
['text'=>'♻ تغيير النوع  ' ,'callback_data'=>"naglbot ".$userbot],['text'=>'نقل الملكية  ' ,'callback_data'=>"naglbotmember ".$userbot]],

[['text'=>'• عودة •  ' ,'callback_data'=>"botsmember"]],
   ] 
   ])
]);
}
	




if(preg_match('/^(deletebot) (.*)/s', $data)){
$userbot = str_replace('deletebot ',"",$data);
	$userbot = str_replace(' ',"",$userbot);

$idbots=file_get_contents("user/$userbot.txt");
	$botfrom=explode("\n",file_get_contents("from_id/$from_id/countbot.txt"));
			
if(in_array($userbot,$botfrom ) and $idbots!=null){



$infobot=explode("\n",file_get_contents("botmak/$idbots/info.txt"));

$tokenbot=$infobot['0'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
#حذف البوت 
$us=file_get_contents("from_id/$from_id/countbot.txt");
$us=str_replace("$userbot\n","",$us);
file_put_contents("from_id/$from_id/countbot.txt",$us);

#حذف ازرار
$ussss="$userbot==code#$userbot#$idbots";
$uss=file_get_contents("from_id/$from_id/idbot.txt");
$uss=str_replace("$ussss\n","",$uss);
file_put_contents("from_id/$from_id/idbot.txt",$uss);

unlink("botmak/user/$userbot.txt");

unlink("botmak/$idbots/$userbot.php");

$us2="》- @$userbot";
$us1=file_get_contents("from_id/$from_id/countuserbot.txt");
$us1=str_replace("$us2\n","",$us1);
file_put_contents("from_id/$from_id/countuserbot.txt",$us1);

$us11=file_get_contents("infoidbots.txt");
$us11=str_replace("$idbots\n","",$us11);
file_put_contents("infoidbots.txt",$us11);
if(is_dir("botmak/$idbots")){

remove_dir("botmak/$idbots");
}

include("wataw/$idbots.php");

$tokenboot="$tokenbot";
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ تم حذف البوت بنجاح 
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'العودة  ' ,'callback_data'=>"botsmember"]],
]
])
]);


bot('sendmessage',[
'chat_id'=>$wathq1,
'message_id'=>$message_id,
"text"=>"🚫|  تم حذف بوت من المصنع الخاص بك  ❌ 
ℹ معلومات البوت 
•النوع : $no3mak
يوزر البوت : *@$userbot*
ايدي البوت : `$idbot`


معلومات صاحب البوت 🙎 
الاسم : *$name*
الايدي : `$from_id`
[$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);


}}


$listnu=$infosudo["info"]["listnu"];

if($listbots=="كل الانواع"){
$key_ngl = json_encode(['inline_keyboard' => [ //inline_keyboard =2
[['text'=>'• قائمة البوتات • ' ,'callback_data'=>"null"]],
[['text'=>'- بوت سايت ' ,'callback_data'=>"ngl 2"]],
[['text'=>'- بوت الازرار ' ,'callback_data'=>"ngl 3"],['text'=>'- بوت المتجر ' ,'callback_data'=>"ngl 4"]],
[['text'=>'- بوت البصمات ' ,'callback_data'=>"ngl 5"],['text'=>'-  بوت تواصل ' ,'callback_data'=>"ngl 1"]],
[['text'=>'- بوت التعليقات ' ,'callback_data'=>"ngl 7"],['text'=>'-  ادارة منشورات القناة  ' ,'callback_data'=>"ngl 8"]],
[['text'=>'- بوت زخرفة ' ,'callback_data'=>"ngl 9"],['text'=>'- بوت ترجمة ' ,'callback_data'=>"ngl 10"]],
[['text'=>'- القرآن الكريم  ' ,'callback_data'=>"ngl 11"],['text'=>'-  بوت العاب  انلاين ' ,'callback_data'=>"ngl 12"]],
[['text'=>'- بوت تحويل الصيغ ' ,'callback_data'=>"ngl 13"],['text'=>'- إستخراج روابط القنوات ' ,'callback_data'=>"ngl 14"]],
[['text'=>'- بوت همسة ' ,'callback_data'=>"ngl 15"],['text'=>'- بوت كشف الكذب ' ,'callback_data'=>"ngl 16"]],
[['text'=>'- حذف الحساب  ' ,'callback_data'=>"ngl 17"],['text'=>'- بوت الاعلانات ' ,'callback_data'=>"ngl 18"]],
[['text'=>'- بوت الأذكار ' ,'callback_data'=>"ngl 19"],['text'=>'- بوت الاكواد الجاهزة ' ,'callback_data'=>"ngl 20"]],
[['text'=>'- بوت حساب العمر ' ,'callback_data'=>"ngl 21"],['text'=>'-  تحميل انستقرام ' ,'callback_data'=>"ngl 22"]],
[['text'=>'- البلورة السحرية  ' ,'callback_data'=>"ngl 23"],['text'=>'- زخرفة تمبلر ' ,'callback_data'=>"ngl 24"]],
[['text'=>'- مشاركة بدون توجية ' ,'callback_data'=>"ngl 25"],['text'=>'- حجر ورقة مقص ' ,'callback_data'=>"ngl 26"]],
[['text'=>'- حماية القنوات ' ,'callback_data'=>"ngl 27"],['text'=>'- تمويل القنوات ' ,'callback_data'=>"ngl 28"]],
[['text'=>'- نسبة الحب ' ,'callback_data'=>"ngl 29"],['text'=>'- بوت دعم القنوات ' ,'callback_data'=>"ngl 30"]],
[['text'=>'• العودة • ' ,'callback_data'=>"botsmember"]],
   ] 
]); 


}else{
$key_ngl = json_encode(['inline_keyboard' => [ //inline_keyboard =2
[['text'=>'• قائمة البوتات • ' ,'callback_data'=>"null"]],
[['text'=>" $listbots ",'callback_data'=>"ngl $listnu"]],
[['text'=>'• العودة • ' ,'callback_data'=>"botsmember"]],
],
]); 


}








if(preg_match('/^(naglbot) (.*)/s', $data)){
$userbot = str_replace('naglbot ',"",$data);
	$userbot = str_replace(' ',"",$userbot);
if($userbot!=null){
file_put_contents("from_id/$from_id/nagl.txt","$userbot");



bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"👮|  مرحبا بك عزيزي 
- قم باختيار نوع البوت الذي تريد نقل @$userbot الية 
",
'reply_markup'=>$key_ngl,
]);

}}


if(preg_match('/^(ngl) (.*)/s', $data)){
$nu = str_replace('ngl ',"",$data);
if($nu==1){$b="بوت تواصل";
}
if($nu==2){$b="بوت سايت";
}
if($nu==3){$b="بوت الازرار";
}
if($nu==4){$b="بوت المتجر";
}
if($nu==5){$b="بوت البصمات";
}
if($nu==6){$b="بوت صانع بوتات";
}
if($nu==7){$b="بوت التعليقات";
}
if($nu==8){$b="بوت ادارة منشور القنوات";
}
if($nu==9){$b="بوت الزخرفة";
}
if($nu==10){$b="بوت الترجمة";
}
if($nu==11){$b="بوت القرآن الكريم";
}
if($nu==12){$b="بوت العاب  انلاين";
}
if($nu==13){$b="بوت تحويل الصيغ";
}
if($nu==14){$b="بوت إستخراج روابط القنوات";
}
if($nu==15){$b="بوت همسة";
}
if($nu==16){$b="بوت كشف الكذب";
}
if($nu==17){$b="بوت حذف الحساب";
}
if($nu==18){$b="بوت الاعلانات";
}
if($nu==19){$b="بوت الأذكار";
}
if($nu==20){$b="بوت الاكواد الجاهزة";
}
if($nu==21){$b="بوت حساب العمر";
}
if($nu==22){$b="بوت تحميل انستقرام";
}
if($nu==23){$b="بوت البلورة السحرية";
}
if($nu==24){$b="بوت زخرفة تمبلر";
}
if($nu==25){$b="بوت مشاركة بدون توجية";
}
if($nu==26){$b="بوت حجر ورقة مقص";
}
if($nu==27){$b="بوت حماية القنوات";
}
if($nu==28){$b="بوت تمويل القنوات";
}
if($nu==29){$b="بوت نسبة الحب";
}
if($nu==30){$b="بوت دعم القنوات";
}
$ngluser=file_get_contents("from_id/$from_id/nagl.txt");
unlink("from_id/$from_id/nagl.txt");
$idbots=file_get_contents("user/$ngluser.txt");


include("wataw/$idbots.php");

$tokenboot="$tokenbot";


$url = "https://api.telegram.org/bot".$tokenboot."/getWebhookInfo";
 $check_token = json_decode(file_get_contents($url));

$check = $check_token;
$yes=$check->ok ;


if($yes == "true"){

  $url = "https://api.telegram.org/bot$tokenboot/getme";
 $getidbots = json_decode(file_get_contents($url) , true);
 
 $idbot = $getidbots['result']['id'];
 $userbot = $getidbots['result']['username'];
$name1bot = $getidbots["result"]["first_name"];
 $userbot=trim($userbot);
 $idbot=trim($idbot);


if(is_dir("botmak/$idbot")){

remove_dir("botmak/$idbot");
}

mkdir("botmak");
mkdir("user");
mkdir("botmak/$idbot");
//عدم التكرار


$mak=file_get_contents("../bots/mak.php");
$bot=file_get_contents("../bots/mak$nu.php");


$mak=str_replace("[*[TOKEN]*]","$tokenboot",$mak);
$mak=str_replace("[*[TOKENSAN3]*]","$token",$mak);
$mak=str_replace("[*[TOKENSAN3PLUS]*]","$tokensan3",$mak);
$bot=str_replace("<?php#*wataw*","$mak",$bot);
file_put_contents("botmak/$idbot/$userbot.php","$bot");

if($nu=="28"){
$bot=file_get_contents("../bots/mak$nu.php");

$bot=str_replace("[*[TOKEN]*]","$tokenboot",$bot);
$bot=str_replace("[*[TOKENSAN3]*]","$token",$bot);
$bot=str_replace("[*[TOKENSAN3PLUS]*]","$tokensan3",$bot);
file_put_contents("botmak/$idbot/$userbot.php","$bot");

}


file_get_contents("https://api.telegram.org/bot".$tokenboot."/setwebhook?url=".$folder."/$folder2"."/botmak/".$idbot."/$userbot.php");

file_put_contents("botmak/$idbot/admin.txt","$from_id");

file_put_contents("botmak/$idbot/info.txt","-- محمي --\n$userbot\n$name1bot\n$from_id\n$idbot\nmak$nu\n$b");



$iin="infobot ".$userbot;

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"🎊 تم تتغير نوع بوتك بنجاح 🎊
معرف البوت : 
@$userbot
النوع : 
$b
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"- دخول الى البوت؛🎒",'url'=>"https://t.me/$userbot?start"]
 ],
 [['text'=>'• العودة • ' ,'callback_data'=>"$iin"]],
 
   ] 
   ])
]);
// تحميل الاعدادات 

bot('sendmessage',[
'chat_id'=>$wathq1,
'message_id'=>$message_id,
"text"=>"👮|  تم تغيير نوع من المصنع الخاص بك ✅ 
ℹ معلومات البوت 
النوع : $b
توكن : *$tokenbott....*
يوزر البوت : `@$userbot`
namebot : *$name1bot*
idbot : $idbot
معلومات صاحب البوت 🙎 
الاسم : *$name*
الايدي : $from_id
[$name](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"- دخول الى البوت؛🎒",'url'=>"https://t.me/$userbot?start"]
 ],
   ] 
   ])
]);


}else{


bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"🚫 هناك خطاء التوكن المخزن في البيانات الخاصة بك قد تم تحديثه قم بإعادة صنع البوت من جديد بالتوكن الجديد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'معاودة المحاولة مجددا   ' ,'callback_data'=>"botsmember"]],
   ] 
   ])
]);

}


} 


$codejson = json_decode(file_get_contents("code.json"),true);
if (!file_exists("code.json")) {
	$put = [];

file_put_contents("code.json", json_encode($put));
}
if(preg_match('/^(naglbotmember) (.*)/s', $data)){
$userbotfree = str_replace('naglbotmember ',"",$data);
$code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -35);


$idbots=file_get_contents("user/$userbotfree.txt");

$infobot=explode("\n",file_get_contents("botmak/$idbots/info.txt"));


$userbot=$infobot['1'];
$id=$infobot['3'];
$no3mak=$infobot['6'];
$codejson["info"][$code]["st"]="yes";
$codejson["info"][$code]["idbot"]="$idbots";
$codejson["info"][$code]["userbot"]="$userbot";
$codejson["info"][$code]["admin"]="$id";

file_put_contents("code.json", json_encode($codejson));
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"• هذا هو كود النقل الخاص ببوتك 
https://t.me/$user_bot_sudo?start=$code

- قم بارسالة للشخص الذي تريد نقل البوت الية.
⚠ - تنوية :
عند نقل البوت لشخص اخر ستفقد امكانية التحكم في البوت .
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>' عودة    ' ,'callback_data'=>"botsmember"]],
   ] 
   ])
]);

}
if(preg_match('/^\/([Ss]tart) (.*)/',$text)){
preg_match('/^\/([Ss]tart) (.*)/',$text,$match);
$code=$match[2];
$codejson = json_decode(file_get_contents("code.json"),true);

$st=$codejson["info"][$code]["st"];
$idbots=$codejson["info"][$code]["idbot"];
$userbots=$codejson["info"][$code]["userbot"];
$admin=$codejson["info"][$code]["admin"];

$idbots=file_get_contents("user/$userbots.txt");
	$botfrom=explode("\n",file_get_contents("from_id/$admin/countbot.txt"));
	if($admin!=$from_id){
if($st=="yes" and $admin!=null){	
if(in_array($userbots,$botfrom ) and $idbots!=null){



$infobot=explode("\n",file_get_contents("botmak/$idbots/info.txt"));

$tokenboot=$infobot['0'];
$userbot=$infobot['1'];
$namebot=$infobot['2'];
$id=$infobot['3'];
$idbots=$infobot['4'];
$no3mak=$infobot['6'];
#حذف البوت 
$us=file_get_contents("from_id/$admin/countbot.txt");
$us=str_replace("$userbot\n","",$us);
file_put_contents("from_id/$admin/countbot.txt",$us);

#حذف ازرار
$ussss="$userbot==code#$userbot#$idbots";
$uss=file_get_contents("from_id/$admin/idbot.txt");
$uss=str_replace("$ussss\n","",$uss);
file_put_contents("from_id/$admin/idbot.txt",$uss);


$us2="》- @$userbot";
$us1=file_get_contents("from_id/$admin/countuserbot.txt");
$us1=str_replace("$us2\n","",$us1);
file_put_contents("from_id/$admin/countuserbot.txt",$us1);




$us5=file_get_contents("botmak/$idbots/info.txt");
$us5=str_replace("$admin","$from_id",$us5);
file_put_contents("botmak/$idbots/info.txt",$us5);







# تخزين البوتات للعضو

file_put_contents("from_id/$from_id/countuserbot.txt","》- @$userbot\n",FILE_APPEND);

file_put_contents("from_id/$from_id/countbot.txt",$userbot."\n",FILE_APPEND);

#bots

$idbotfrom=explode("\n",file_get_contents("from_id/$from_id/idbot.txt"));
if(!in_array($ussss,$idbotfrom )){
file_put_contents("from_id/$from_id/idbot.txt","$ussss\n",FILE_APPEND);
}

$botfree=explode("\n",file_get_contents("botfreeid.txt"));
if(!in_array($from_id,$botfree )){
file_put_contents("botfreeid.txt",$from_id."\n",FILE_APPEND);
}


file_put_contents("botmak/$idbots/admin.txt","$from_id");

$us6=file_get_contents("botmak/$idbots/sudo.json");
$us6=str_replace("$admin","$from_id",$us6);
file_put_contents("botmak/$idbots/sudo.json",$us6);

#unlink("botmak/$idbots/sudo.json");

$mm=explode("\n",file_get_contents("botmak/$idbots/sudo/member.txt"));
$co=count($mm)-1;
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"✅ تم نقل البوت اليك بنجاح 
بيانات البوت 
 
- اسم البوت : $namebot
- معرف البوت : @$userbots
- نوع البوت : $no3mak
- توكن البوت : $tokenboot
- عدد الاعضاء المشتركين في البوت : $co
",

]);
bot('sendmessage',[
'chat_id'=>$admin,
"text"=>"
تم نقل [بوت](t.me/$userbot) الى [$from_id](tg://user?id=$from_id)
",
'parse_mode'=>"MarkDown",
]);
unset($codejson["info"][$code]);
file_put_contents("code.json", json_encode($codejson));
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"ارسال /start .!
",
'reply_to_message_id'=>$message_id,
]);

}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"لايمكنك نقل البوت لنفسك 
",
'reply_to_message_id'=>$message_id,
]);

}

}
$datatime = json_decode(file_get_contents("datatime.json"),true);
$datatimesend = $datatime["info"][$from_id]["date"];


if($data=="sendpostbotsall"){

$timeuoto=time()+(3600 * 1);
$day = date('Y-m-d',$timeuoto);
if($day!=$datatimesend){

$datatime["info"][$from_id]["date"]="$day";

file_put_contents("datatime.json", json_encode($datatime));

file_put_contents("from_id/$from_id/amr.txt","sendpostbotsall");

bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" حسنا قم بارسال النص لكي يتم 
ارسال الاذاعة في هذة البوتات

 ~~~~~~~~~~~~~~~~~
$infobotsmember
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'• الغاء • ' ,'callback_data'=>"botsmember"]],

   ] 
   ])
]);
}else{
bot('answercallbackquery',[
'callback_query_id'=>$up->id,
"text"=>"🚫 معذرة لاتستطيع عمل الاذاعة لكل بوتاتك المصنوعة اكثر من مرة واحدة فقط في اليوم $day 
- ستتمكن من نشر الاذاعة غداً

* يمكنك عمل الاذاعة من داخل بوتاتك المصنوعة
 ",
'show_alert'=>true,
]);

}

}
if($text and $amrmem =="sendpostbotsall"){
file_put_contents("from_id/$from_id/amr.txt","");
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"جاري عمل الاذاعة ",
'reply_to_message_id'=>$message_id,
]);
$bots=explode("\n",file_get_contents("from_id/$from_id/countbot.txt"));
$coo=count($bots)-1;
for ($i=0; $i < count($bots); $i++) { 
$userbots=$bots[$i];
$idbots=file_get_contents("user/$userbots.txt");

include("wataw/$idbots.php");

$tokenboot="$tokenbot";
$mm=explode("\n",file_get_contents("botmak/$idbots/sudo/member.txt"));
for ($l=0; $l < count($mm); $l++) {
$id=$mm[$l];
file_get_contents("https://api.telegram.org/bot".$tokenboot."/sendmessage?chat_id=".$id."&text=$text");


}
$co=$co+$l-1;
}
bot('sendmessage',[
'chat_id'=>$chat_id,
"text"=>"- تمت الاذاعة في جميع البوتات المصنوعة 
- تم الارسال الى $co مستخدم.
- عدد البوتات : $coo
",
'reply_to_message_id'=>$message_id,
]);

}








 ###wataw### 
