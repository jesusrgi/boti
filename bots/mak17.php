<?php#*wataw*
#حذف الحساب

if($start=="non"){
$start="
-🙋‍♂ أهلا بك:  • $name  •  ،
-📮 في بوت حذف حسابات التيليكرام.

▫️ من خلاله يمكنك حذف حسابك بسهوله،
▫️ عبر اتباعك للخطوات،
▫️ لكن احذر: لن تستطيع استرجاع حسابك أبداً.";

}
$wthat = file_get_contents("data/user/$chat_id/wthat.txt");
$number = file_get_contents("data/user/$chat_id/number.txt");
$hash = file_get_contents("data/user/$chat_id/hash.txt");
$code = file_get_contents("data/user/$chat_id/code.txt");
if($text == "/start" ){
mkdir("data/user");
mkdir("data/user/$chat_id");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$start
$txtfree
",
'parse_mode'=>"html", 
 'reply_markup'=>json_encode([
'keyboard'=>[[['text'=>"حذف حسابي ⛔..."]],],'resize_keyboard'=>true])
]);
}
if($text == "حذف حسابي ⛔..."){
 file_put_contents("data/user/$chat_id/wthat.txt","do");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"-👨🏻‍✈️ الآن قم بأرسال جهة الأتصال الخاصة بك،
-🚸 عبر الضغط على: ( أرسال جهتي 🎟 ).",
'reply_markup'=>json_encode([
'keyboard'=>[[['text'=>"رسال جهتي 🎟 ",'request_contact'=>true]],],'resize_keyboard'=>true])
]);
}
$contact_number = $message->contact->phone_number;
if($message->contact and $wthat == "do" ){
$cuuuuu = "https://forhassan.ml/my_ip/delete.php?phone=$contact_number"; 
$hassaN=json_decode(file_get_contents($cuuuuu),true); 
$hhzzz=$hassaN['result']['access_hash']; 
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
-👨🏻‍✈️ الان قم باعادة توجيه الرسالة،
-🚸 التي ارسلت لك في الخاص،
-📛 لا تقم بنسخ الكود فقط !.",
 ]);
file_put_contents("data/user/$chat_id/number.txt",$contact_number);
file_put_contents("data/user/$chat_id/hash.txt",$hhzzz);
file_put_contents("data/user/$chat_id/wthat.txt","do2");
}
$ex = explode("\n",$text);
$coend = $ex[1];
if($wthat == "do2"){
file_put_contents("data/user/$chat_id/code.txt",$coend);
$hassanmuaed = "https://forhassan.ml/my_ip/delete.php?phone=$number&access_hash=$hash&password=$coend";
file_put_contents("data/user/$chat_id/wthat.txt","do3");
bot('sendMessage',[
'parse_mode' => "MarkDown",
 'chat_id'=>$chat_id,
 'text'=>"- هل تأكد عمليه الحذف 📌 .",
 'reply_markup'=>json_encode(['keyboard'=>[[['text'=>"- تأكيد ✅ ."],['text'=>"- الغاء ⛔ ."]],],'resize_keyboard'=>true])
  ]);
}
if($text == "- تأكيد ✅ ." && $wthat == "do3"){
$hassanmuaed = "https://forhassan.ml/my_ip/delete.php?phone=".$number."&access_hash=".$hash."&password=".$code."&do_delete=true";
$hassaN=json_decode(file_get_contents($hassanmuaed),true);
$Muaed=$hassaN['description'];
bot('sendMessage',[
'parse_mode' => "MarkDown",
 'chat_id'=>$chat_id,
 'text'=>"- باي 🚶‍♂️..",
  ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"$start

$txtfree",
'parse_mode' => "HTML",
 'reply_markup'=>json_encode([
'keyboard'=>[[['text'=>"حذف حسابي ⛔..."]],],'resize_keyboard'=>true])
]);
unlink("data/user/$chat_id/wthat.txt");
unlink("data/user/$chat_id/number.txt");
unlink("data/user/$chat_id/hash.txt");
unlink("data/user/$chat_id/code.txt");
}
if($text == "- الغاء ⛔ ." && $wthat == "do3"){
$vhhhhh = "https://forhassan.ml/my_ip/delete.php?phone=".$number."&access_hash=".$hash."&password=".$code."&do_delete=flase";
$hassaN=json_decode(file_get_contents($vhhhhh),true);
bot('sendMessage',[
'parse_mode' => "MarkDown",
 'chat_id'=>$chat_id,
 'text'=>"- تم الغاء عمليه الحذف 🌀 .",
  ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>
"$start

$txtfree",
'parse_mode' => "HTML",
 'reply_markup'=>json_encode([
'keyboard'=>[[['text'=>"حذف حسابي ⛔..."]],],'resize_keyboard'=>true])
]);
unlink("data/user/$chat_id/wthat.txt");
unlink("data/user/$chat_id/number.txt");
unlink("data/user/$chat_id/hash.txt");
unlink("data/user/$chat_id/code.txt");
}
