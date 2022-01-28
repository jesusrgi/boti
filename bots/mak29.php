<?php#*wataw*
# نسبة الحب


if($start=="non"){
$start="
اهـلا بك في بوت نسبة الحب ؛❤
قم بارسال اسمك واسم حبيبك بهذة الصيغة ✔️
اسمك + اسم حبيبك ";

}



if ($text == '/start' ){
  bot('sendMessage', [
  'chat_id' => $chat_id, 
  'text'=>"$start

$txtfree",
'parse_mode'=>"html", 
]);
  
  }
  
  


		if($data == "kk" ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ℹ قم بارسال اسمك واسم حبيبك بهذه الصيغة 
        اسمك - اسم حبيبك ",
        'show_alert'=>true,
]);
}
		$love = explode(" + ",$text);
$Love = rand(0, 100)."%";
if($text == "$love[0] + $love[1]"){
bot("sendMessage", [
"chat_id"=>$chat_id,
"text"=>"- نسبة الحب ❤️ بين $love[0] و $love[1] هي $Love 😍🌹

$txtfree",
'parse_mode'=>"html", 

]);
}
