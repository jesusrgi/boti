<?php#*wataw*
#حساب العمر

if($start=="non"){
$start="
• اهلا بك عزيزي في بوت حساب العمر •
• ارسل تاريخ ميلادك لحساب عمرك •
• ارسله بالشكل الاتي 2000/1/1 •";

}



if ($text == '/start' ){
  bot('sendMessage', [
  'chat_id' => $chat_id, 
  'text' => "
  $start
  
  $txtfree
",
'parse_mode'=>HTML,
  
 'disable_web_page_preview' => true, 'reply_markup' => json_encode(['inline_keyboard' => [
[['text' => "طريقة الاستخدام؛ℹ", 'callback_data' => "kk"]],

 ]]) ]);
  
  }
  
  


		if($data == "kk" ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ℹ قم بارسال تاريخ ميلادك بهذه الصيغة 
2001/1/17",
        'show_alert'=>true,
]);
}

function GetAge($Date,$c,$user_bot_sudo,$txtfree){
$hours_in_day = 24;
$minutes_in_hour = 60;
$seconds_in_mins = 60;
$birth_date = new DateTime($Date);
$current_date = new DateTime();
date_default_timezone_set("Asia/Baghdad");
$date = date('n');
$dat = date('j');
$diff = $birth_date->diff($current_date);
$years = $diff->y;
$mn = $diff->m;
$doy = $diff->d;
$months = ($diff->y * 12);
$weeks = floor($diff->days/7); echo "\n";
$days = $diff->days;
$hours = $diff->h + ($diff->days * $hours_in_day);
$mins = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour);
$seconds = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins);
bot('Sendmessage',[
'chat_id'=>$c,
'text'=>" 💘| تم حساب عمرك بالتفصيل،
 
🌻|عمرك هوا الان : $years سـنةه، و $mn اشهر،

📕| مرة على ولادتك : $months. شهر،

📌| مرة على ولادتك : $weeks. اسبوع،

🔖| مرة على ولادتك : $days. يوم،

📮| مرة على ولادتك : $hours. ساعه،

📯| مرة على ولادتك : $mins. دقيقةه،

📆| مرة على ولادتك : $seconds. ثانيةه،

$txtfree
",
'parse_mode'=>HTML,

 'disable_web_page_preview' => true, 
]);
}
$mb=mb_strlen($text);
if($text and $mb<11 and $mb>7){
GetAge($text,$chat_id,$user_bot_sudo,$txtfree);
}




