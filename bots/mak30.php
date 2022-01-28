<?php#*wataw*

function SendMsg($chat_id,$text,$parse_mode,$disable_web_page_preview,$reply_markup,$message_id){ //SendMessage
return bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>$parse_mode,
'disable_web_page_preview'=>$disable_web_page_preview,
'reply_markup'=>$reply_markup,
'reply_to_message_id'=>$message_id,
]);
}
function DelMsg($chat_id,$message_id){ //DeleteMessage
return bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
function GetChat($chat_id){
return bot('getChat',[
'chat_id'=>$chat_id
]);
}
function SaveJson($file,$array){  
return file_put_contents($file, json_encode($array));}

function Up_True(){
return json_decode(file_get_contents('php://input'),true);
}
function SendChatAction($chat_id,$action){
return bot('sendChatAction',[
'chat_id'=>$chat_id,
'action'=>$action
]);
}
function ExportChatInviteLink($chat_id){
return bot('exportChatInviteLink',[
'chat_id'=>$chat_id,
]);
}
function GetChatMembersCount($chat_id){
return bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
}

function EditMsg($chat_id,$message_id,$text,$parse_mode,$disable_web_page_preview,$reply_markup){
return bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>$text,
'parse_mode'=>$parse_mode,
'disable_web_page_preview'=>$disable_web_page_preview,
'reply_markup'=>$reply_markup
]);
}
mkdir("data/bot");
if($start=="non"){
$start="مرحبا بك - $name ❤
- اهلا بك في بوت زيادة اعضاء قناتك من خلال مجموعتك ؛ 👥
- اضفني الى مجموعتك وقم برفعي مشرف ؛ 👨‍✈️
- بعدها ارسل { تفعيل البوت } واتبع التعليمات التي ارسلها اليك ؛ 🈯️
- لتعطيل البوت ارسل داخل مجموعتك كلمة { تعطيل البوت } ؛ ❎ ";
}


$ge = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$chat_id."&user_id=".$from_id);
$Als = json_decode($ge, true);
$al = $Als['result']['status'];

$chn = file_get_contents("data/bot/u$chat_id.txt");
$join = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=$chn&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
if($al != "creator" and $al != "administrator"){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"عزيزي انت غير مشترك - [$name](tg://user?id=$from_id) ؛ ❤️

- لايمكنك ارسال اي رسالة هنا لانك غير مشترك في قناة المجموعة ؛ ✅
قناة المجموعه ؛ [$chn] 🌐
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>" اضغط هنا للاشتراك ✅",'url'=>"t.me/".str_replace('@',null,$chn)]]
]
])
]);return false;}}
$link = file_get_contents("data/bot/l$chat_id.txt");
$id = file_get_contents("data/bot/d$chat_id.txt");
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$id&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
if($al != "creator" and $al != "administrator"){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"عزيزي انت غير مشترك - [$name](tg://user?id=$from_id) ؛ ❤️

- لايمكنك ارسال اي رسالة هنا لانك غير مشترك في قناة المجموعة ؛ ✅
[في قناة المجموعة]($link)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>" اضغط هنا للاشتراك ✅",'url'=>"$link"]]
]
])
]);return false;}}
$dev = $admin;
$key = json_encode(['inline_keyboard' => [ //inline_keyboard =1 
[['text'=>"اضافة قناة عآمة 📧.",'callback_data' =>"ad"]],
[['text'=>"اضافة قناة خاصه 📨.",'callback_data' =>"d"]],

],
]); 
$key_start = json_encode(['inline_keyboard' => [ //inline_keyboard =2
[['text'=>"اضفني الى مجموعتك مباشراََ ⬆.",'url' =>"https://telegram.me/$usernamebot?startgroup=start"]],
],
]); 
if($text == "/start"){
SendMsg($chat_id,"$start

$txtfree ؛ 📮","HTML",True,$key_start,$message_id);
}
$com = json_decode(file_get_contents('data/bot/com.json'),true);
$private = json_decode(file_get_contents('data/bot/private.json'),true);
$get = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$chat_id."&user_id=".$from_id);
$Als = json_decode($get, true);
$alo = $Als['result']['status'];
if($from_id == $dev or $alo == "administrator" or $alo == "creator"){
if($data == "rm"){
EditMsg($chat_id,$message_id,"تم الغاء الامر بنجاح 🎫.","markdown",True,null);
$com[$chat_id]["com"] = "hi";
SaveJson("data/bot/com.json",$com);
}
}

if($from_id == $dev or $alo == "administrator" or $alo == "creator"){
if($data == "ad"){
EditMsg($chat_id,$message_id,"ارسل معرف القناة الان مع (@)","markdown",True,json_encode(['inline_keyboard' => [ [['text'=>"الغاء الامر ⬅.",'callback_data' =>"rm"]],],]));
$com[$chat_id]["com"] = "add";
SaveJson("data/bot/com.json",$com);
}
}
if($from_id == $dev or $alo == "administrator" or $alo == "creator"){
if($data == "d"){
EditMsg($chat_id,$message_id,"ارسل ايدي القناة 
لستخراج ايدي القناه اضغط
استخـراج ايدي قناتك","markdown",True,json_encode(['inline_keyboard' => [ [['text'=>"استخـراج ايدي قناتك 🆔.",'url' =>"https://telegram.me/Id_iBoT"]],
[['text'=>"الغاء الامر ⬅.",'callback_data' =>"rm"]],],]));
$com[$chat_id]["com"] = "ad";
SaveJson("data/bot/com.json",$com);
}
}
if($from_id == $dev or $alo == "administrator" or $alo == "creator"){
if($data == "adh"){
EditMsg($chat_id,$message_id,"ارسل ايدي القناة يجب ان يكون بداية ل ايدي (-100) ، كمثال".PHP_EOL."-100545763478","markdown",True,null);
$com[$chat_id]["com"] = "ad";
SaveJson("data/bot/com.json",$com);
}
}
$chat = GetChat($chat_id);     	             
$array = json_decode(json_encode($chat), True);
$getId = $array['result']['id']; $Title = $array['result']['title'];
$getType = $array['result']['type']; $username = $array['result']['username'];
$link = ExportChatInviteLink($chat_id)->result;
$GetChatMembersCount = GetChatMembersCount($chat_id)->result;
$ge = file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$chat_id."&user_id=".$from_id);
$Alsh = json_decode($ge, true);
$aloo = $Alsh['result']['status'];
if($from_id == $dev or $aloo == "administrator" or $aloo == "creator"){
if($text == "تفعيل البوت"){
SendMsg($chat_id,"اختر من الاسفل عزيزي.","markdown",True,$key,$message_id);
$inf = "- معلومٱت : ᴗ͈‸ᴗ *$Title* ،\n\n- النوع : *$getType * \n- الـ*ID*ـ : 〖`$getId`〗.\n- عدد الاعضاء : 〖`$GetChatMembersCount`〗.\n\n- رابـَط وهمي فعٱل لمده :〔 [$link] 〕";
SendMsg($dev,$inf,"MARKDOWN",true,null,null);
}
}
if($text != "/start" and $from_id == $dev or $aloo == "administrator" or $aloo == "creator"){
if($com[$chat_id]["com"] == "add"){
if(preg_match('/^(@)(.*)/s',$text)){
file_put_contents("data/bot/u$chat_id.txt",$text);
SendMsg($chat_id,"عزيزي تم حفظ القناة قم برفعي ادمن في قناتك","markdown",True,null,$message_id);
unset($com[$chat_id]["com"]);
SaveJson("date/bot/com.json",$com);
}elseif(!preg_match('/^(@)(.*)/s',$text)){
SendMsg($chat_id,"ارسل المعرف مع (@)","markdown",True,
json_encode(['inline_keyboard' => [ [['text'=>"الغاء الامر ⬅.",'callback_data' =>"rm"]]]]),$message_id);
}
}
}

if($text != "/start" and $from_id == $dev or $aloo == "administrator" or $aloo == "creator"){
if($com[$chat_id]["com"] == "ad"){
if(preg_match('/^- *.|([0-9])/',$text)){
file_put_contents("data/bot/d$chat_id.txt",$text);
SendMsg($chat_id,"عزيزي تم حفظ ايدي القناة الان ارسل رابط القناة من فضلك ♨.","markdown",True,json_encode(['inline_keyboard' => [ [['text'=>"الغاء الامر ⬅.",'callback_data' =>"rm"]]]]),$message_id);
unset($com[$chat_id]["com"]);
SaveJson("data/bot/com.json",$com);
$com[$chat_id]["com"] = "link";
SaveJson("data/bot/com.json",$com);
}elseif(!preg_match('/^- *.|([0-9])/',$text)){
SendMsg($chat_id,"ارسل ايدي القناة 
لستخراج ايدي القناه اضغط
استخـراج ايدي قناتك","markdown",True,json_encode(['inline_keyboard' => [ [['text'=>"استخـراج ايدي قناتك 🆔.",'url' =>"https://telegram.me/Id_iBoT"]],
[['text'=>"الغاء الامر ⬅.",'callback_data' =>"rm"]]]]),$message_id);
}
}
}
if($text != "/start" and $from_id == $dev or $aloo == "administrator" or $aloo == "creator"){
if($com[$chat_id]["com"] == "link"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) or !preg_match('/^- *.|([0-9])/',$text)){
file_put_contents("data/bot/l$chat_id.txt",$text);
SendMsg($chat_id,"عزيزي تم حفظ رابط القناة الان عليك رفعي ادمن في لقناة 📦.","markdown",True,null,$message_id);
unset($com[$chat_id]["com"]);
SaveJson("data/bot/com.json",$com);
}elseif(!preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text)){
SendMsg($chat_id,"ملاحظة ارسل الروابط فقط من فضلك 🎑.","markdown",True,json_encode(['inline_keyboard' => [ [['text'=>"الغاء الامر ⬅.",'callback_data' =>"rm"]]]]),$message_id);
}
}
}

if($from_id == $dev or $aloo == "administrator" or $aloo == "creator"){
if($text == "تعطيل البوت" or $text == "مسح القناة"){
SendMsg($chat_id,"تم تعطيل البوت و حذف القنوات الاشتراك 🌀.",null,True,null,null);
file_put_contents("data/bot/l$chat_id.txt","");
file_put_contents("data/bot/d$chat_id.txt","");
file_put_contents("data/bot/u$chat_id.txt","");
}
}
if($text && $type == "private"){
if(!in_array($from_id, $private["private"])){
$private['private'][] = "$from_id";
SaveJson("data/bot/private.json",$private);
}
}
if($text && $type == "supergroup" || $type == "group"){
if(!in_array($chat_id, $private["group"])){
$private['group'][] = "$chat_id";
SaveJson("data/bot/private.json",$private);
}
}
if(!preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text)){
if(preg_match('/^(@)(.*)/s',$text) or preg_match('/^- *.|([0-9])/',$text)){
if($type == "supergroup" || $type == "group"){
$user_id = GetChat($text)->result->id;
if(!in_array($user_id, $private["channel"])){
$private['channel'][] = "$user_id";
SaveJson("data/bot/private.json",$private);
}
}
}
}
$panel = json_encode(['keyboard'=>[
[['text'=>"- اذاعه للكل ، 🌈"]],
[['text'=>"- اذاعّه خاّص ،💞"],['text'=>"- اذاعّه للقروبات ، 🌤 "]],
[['text'=>"- اذاعّه للقنوات ، 𐂂"]],
[['text'=>"- تصفيّه الاعضاء ، 🌻 "],['text'=>"- تصفيّه المجموعات ، 🇬🇵 "]],
[['text'=>"- احصائيات البوت ، 🌱"]],
]]);
if($text == "/start" && $from_id == $dev){
SendMsg($chat_id,"مرحبا بك عزيزي المطور اختر من الكيبورد الخاص فيك .","MARKDOWN",true,$panel,$message_id);
}

#filter_member
if($text == "- تصفيّه الاعضاء ، 🌻" and $from_id == $dev){
$inf = "*- يقوم البوت الان بعمل تصفيه للاعضاء عند الانتهاء سيتم تبليغك بذلك .*";
SendMsg($chat_id,$inf,"markdown",true,null,$message_id);
foreach($private["private"] as $memberid){ 
$action = SendChatAction($memberid,"typing")->ok;
if($action != true){
$search = array_search($memberid,$private["private"]);
unset($private["private"][$search]);
$private["private"]= array_values($private["private"]); 
SaveJson("data/bot/private.json",$private);
}
}
$inf = "*- تمت عمليه تصفيه الاعضاء الحساباتهم محذوفه او من حظر البوت .*";
SendMsg($chat_id,$inf,"MARKDOWN",true,null,$message_id);
}

# filter_group
if($text == "- تصفيّه المجموعات ، 🇬🇵" and $from_id == $dev){
$inf = "*- يقوم البوت الان بعمل تصفيه للمجموعات عند الانتهاء سيتم تبليغك بذلك .*";
SendMsg($chat_id,$inf,"markdown",true,null,$message_id);
foreach($private["group"] as $groupid){ 
$action = SendChatAction($groupid,"typing")->ok;
if($action != true){
$search = array_search($groupid,$private["group"]);
unset($private["group"][$search]);
$private["group"] = array_values($private["group"]); 
SaveJson("data/bot/private.json",$private);
}
}
$inf = "*- تمت عمليه تصفيه المجموعات المحذوفه او من المجموعات التي حظرت البوت .*";
SendMsg($chat_id,$inf,"MARKDOWN",true,null,$message_id);
}

 # info
$Members  = count($private["private"]);
$Groups = count($private["group"]);
$Channel = count($private["channel"]);
if($text == "- احصائيات البوت ، 🌱"  and $from_id == $dev){
$inf = "- اليكّ المعلومات العامه حول عدد الاعضاء :"."\n"."- *عدد المجموعات '$Groups'*"."\n"."- *عدد الاعضاء '$Members'*"."\n"."*عدد القنوات '$Channel'*.";
SendMsg($chat_id,$inf,"markdown",true,null,$message_id);
} 
$broadcast = json_decode(file_get_contents('data/bot/broadcast.json'),true);
if($text == "- اذاعّه خاّص ،💞" and $from_id == $dev){
SendMsg($chat_id,"ارسل رسالتك عزيزي المطور للاذاعه   الى جميع الاعضاء.","markdown",true,null,$message_id);
$broadcast["bc"] = "bcm";
SaveJson("data/bot/broadcast.json",$broadcast);
}
if($broadcast["bc"] == "bcm" and $from_id == $dev and $text != "- اذاعّه خاّص ،💞" and $text != "/start"){
foreach($private["private"] as $bc => $member){
SendMsg($member,$text,null,True,null,null);
unset($broadcast["bc"]);
SaveJson("data/bot/broadcast.json",$broadcast);
}
SendMsg($chat_id,"تم الاذاعه للكل عزيزي.",null,True,$back,$message_id);
}
if($text == "- اذاعّه للقروبات ، 🌤" and $from_id == $dev){
EditMsg($chat_id,$message_id,"ارسل رسالتك عزيزي المطور لكي اقوم بلاذاعه الى جميع المجموعات.","markdown",True,$back);
$broadcast["bc"] = "bcg";
SaveJson("data/bot/broadcast.json",$broadcast);
}
if($broadcast["bc"] == "bcg" and $from_id == $dev and $text != "- اذاعّه للقروبات ، 🌤" and $text != "/start"){
foreach($private["group"] as $bc => $group){
SendMsg($group,$text,null,True,null,null);
unset($broadcast["bc"]);
SaveJson("data/bot/broadcast.json",$broadcast);
}
SendMsg($chat_id,"تم الاذاعه  للكل عزيزي.",null,True,null,$message_id);
}
if($text == "- اذاعّه للقنوات ، 𐂂" and $from_id == $dev and $text != "- اذاعّه للقنوات ، 𐂂"){
SendMsg($chat_id,"ارسل رسالتك عزيزي المطور لكي اقوم بالاذاعه الى جميع القنوات.","markdown",true,null,$message_id);
$broadcast["bc"] = "bcc";
SaveJson("data/bot/broadcast.json",$broadcast);
}
if($broadcast["bc"] == "bcc" and $from_id == $dev and $text != "- اذاعّه للقنوات ، 𐂂" and $text != "/start"){
foreach($private["channel"] as $bc => $channel){
SendMsg($channel,$text,null,True,null,null);
unset($broadcast["bc"]);
SaveJson("data/bot/broadcast.json",$broadcast);
}
SendMsg($chat_id,"تم ارسال الاذاعه لكل القنوات  عزيزي.",null,True,$back,$message_id);
}
if($text == "- اذاعه للكل ، 🌈" and $from_id == $dev){
SendMsg($chat_id,"ارسل رسالتك عزيزي المطور لكي اقوم بالاذاعه الى آلجميع ، القنوات ، القروبات ، الاعضاء.","markdown",true,null,$message_id);
$broadcast["bc"] = "bcall";
SaveJson("data/bot/broadcast.json",$broadcast);
}
if($broadcast["bc"] == "bcall" and $from_id == $dev and $text != "- اذاعه للكل ، 🌈" and $text != "/start"){
foreach($private["private"] as $bc => $member){
SendMsg($member,$text,null,True,null,null);
}
foreach($private["group"] as $bc => $group){
SendMsg($group,$text,null,True,null,null);
}
foreach($private["channel"] as $bc => $channel){
SendMsg($channel,$text,null,True,null,null);
unset($broadcast["bc"]);
SaveJson("data/bot/broadcast.json",$broadcast);
}
SendMsg($chat_id,"تم ارسال الاذاعه لكل عزيزي.",null,True,$back,$message_id);
}
