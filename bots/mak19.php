<?php#*wataw*
#الاذكار
if($start=="non"){
$start="
        💞 | اهلا بك في 🔖
🇮🇶 |  بوت الـ قران الكريم الاذكار 
📋 |  ارسل اسم السورة 
📮 | كـ مثال  (سورة الفاتحه)
💌 | سأقوم بالتذكير بمواعيد الصلاة
💭 | سأقوم بارسال اذكار لمجموعتك كل ساعه
🕯 | ارسل امر  (( الايات )) لعرض سـور القران
🕯 | ارفعني مشرف في كروبك يمكنني التذكير ونشر الاذكار
🕯 | يمكنني استعراض الايات في الكروبات ايضا ارسل الايات

";

}





$armoufthkk = explode("\n",file_get_contents("armofgroup.txt"));
$armofgp = count($armoufthkk)-1;
if ($message->chat->type== "supergroup" or $message->chat->type== "group"){
if(!in_array($chat_id, $armoufthkk)){
file_put_contents("armofgroup.txt", $chat_id."\n",FILE_APPEND);}}




$armof2 = explode("\n",file_get_contents("armof4.txt"));
$armof3 = count($armof2)-1;
if ($message && !in_array($from_id, $armof2)){
file_put_contents("armof4.txt", $from_id."\n",FILE_APPEND);}

if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$start

$txtfree
",
'parse_mode'=>HTML,
]);
}

if($text == "الايات" or $text == "ألايات" or $text == "قائمة الايات"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🗃ســور الـقران الكـريـم 🗃
ا ֆ • • • • • • • • • • • • • ֆ
🕋 | 1-سورة الفاتحه
🕋 | 2-البقرة
🕋 | 3-سورة ال عمران
🕋 | 4-سورة النساء
🕋 | 5-سورة المائدة
🕋 | 6-سورة الانعام
🕋 | 7-سورة الأعراف
🕋 | 8-سورة الأنفال
🕋 | 9-سورة التوبة
🕋 | 10-سورة يونس
🕋 | 11-سورة هود
🕋 | 12-سورة يوسف
🕋 | 13-سورة الرعد
🕋 | 14-سورة أبراهيم
🕋 | 15-سورة الحجر
🕋 | 16-سورة النحل
🕋 | 17-سورة الاسراء
🕋 | 18-سورة الكهف
🕋 | 19-سورة مريم
🕋 | 20-سورة طه
🕋 | 21-سورة الأنبياء
🕋 | 22-سورة الحج
🕋 | 23-سورة المؤمنون
🕋 | 24-سورة النور
🕋 | 25-سورة الفرقان
🕋 | 26-سورة الشعراء
🕋 | 27-سورة النحل
🕋 | 28-سورة القصص
🕋 | 29-سورة العنكبوت
🕋 | 30-سورة الروم
🕋 | 31-سورة لقمان
🕋 | 32-سورة السجدة
🕋 | 33-سورة الاحزاب
🕋 | 34-سورة سبأ
🕋 | 35-سورة فاطر
🕋 | 36-سورة يس
🕋 | 37-سورة الصافات
🕋 | 38-سورة ص
🕋 | 39-سورة الزمر
🕋 | 40-سورة غافر
🕋 | 41-سورة فصلت
🕋 | 42-سورة الشورئ
🕋 | 43-سورة الزخرف
🕋 | 44-سورة الدخان
🕋 | 45-سورة الجاثيه
🕋 | 46-سورة الاحقاف
🕋 | 47-سورة محمد
🕋 | 48-سورة الفتح
🕋 | 49-سورة الحجرات
🕋 | 50-سورة ق
🕋 | 51-سورة الذاريات
🕋 | 52-سورة الطور
🕋 | 53-سورة النجم
🕋 | 54-سورة القمر
🕋 | 55-سورة الرحمن
🕋 | 56-سورة الواقعه
🕋 | 57-سورة الحديد
🕋 | 58-سورة المجادلة
🕋 | 59-سورة الحشر
🕋 | 60-سورة الممتحنة
🕋 | 61-سورة الصف
🕋 | 62-سورة الجمعة
🕋 | 63-سورة المنافقون
🕋 | 64-سورة التغابن
🕋 | 65-سورة الطلاق
🕋 | 66-سورة التحريم
🕋 | 67-سورة الملك
🕋 | 68-سورة القلم
🕋 | 69-سورة الحاقة
🕋 | 70-سورة المعارج
🕋 | 71-سورة نوح
🕋 | 72-سورة الجن
🕋 | 73-سورة المزمل
🕋 | 74-سورة المدثر
🕋 | 75-سورة القيامة
🕋 | 76-سورة الانسان
🕋 | 77-سورة المرسلات
🕋 | 78-سورة النبأ
🕋 | 79-سورة النازعات
🕋 | 80-سورة عبس
🕋 | 81-سورة التكوير
🕋 | 82-سورة الانفطار
🕋 | 83-سورة المطففين
🕋 | 84-سورة الانشقاق
🕋 | 85-سورة البروج
🕋 | 86-سورة الطارق
🕋 | 87-سورة الاعلئ
🕋 | 88-سورة الغاشية
🕋 | 89-سورة الفجر
🕋 | 90-سورة البلد
🕋 | 91-سورة الشمس
🕋 | 92-سورة الليل
🕋 | 93-سورة الضحئ
🕋 | 94-سورة الشرح
🕋 | 95-سورة التين
🕋 | 96- سورة العلق  
🕋 | 97- سورة القدر
🕋 | 98-سورة البينة
🕋 | 99-سورة الزلزلة
🕋 | 100-سورة العاديات
🕋 | 101-سورة القارعة
🕋 | 102-سورة التكاثر
🕋 | 103-سورة العصر
🕋 | 104-سورة الهمزة
🕋 | 105-سورة الفيل
🕋 | 106-سورة قريش
🕋 | 107-سورة الماعون
🕋 | 108-سورة الكوثر
🕋 | 109-سورة الكافرون
🕋 | 110-سورة النصر
🕋 | 111-سورة المسد
🕋 | 112-سورة الاخلاص
🕋 | 113-سورة الفلق
🕋 | 114-سورة الناس
ا ֆ • • • • • • • • • • • • • ֆ
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "سورة الفاتحه" or $text == "سوره الفاتحه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/15",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره البقره" or $text == "سورة البقره"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/4",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ال عمران" or $text == "سوره ال عمران"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/5",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره النساء" or $text == "سورة النساء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/7",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المائده" or $text == "سوره المائده"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/8",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانعام" or $text == "سورة الأنعام"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/9",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانعام" or $text == "سورة الانعام"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/10",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاعراف" or $text == "سوره الاعراف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/11",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانفال" or $text == "سوره الانفال"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/12",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره التوبه" or $text == "سورة التوبه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/13",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره يونس" or $text == "سورة يونس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/14",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة هود" or $text == "سوره هود"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/17",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة يوسف" or $text == "سوره يوسف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/18",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الرعد" or $text == "سوره الرعد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/21",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره ابراهيم" or $text == "سورة ابراهيم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/25",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحجر" or $text == "سورة الحجر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/29",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النحل" or $text == "سوره النحل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/33",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الاسراء" or $text == "سورة الاسراء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/37",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الكهف" or $text == "سوره الكهف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/41",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة مريم" or $text == "سوره مريم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/45",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سوره طه" or $text == "سورة طه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/47",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الانبياء" or $text == "سورة الانبياء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/49",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحج" or $text == "سوره الحج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/51",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المؤمنون" or $text == "سوره المؤمنون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/53",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره النور" or $text == "سورة النور"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/56",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفرقان" or $text == "سوره الفرقان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/58",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشعراء" or $text == "سوره الشعراء"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/60",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القصص" or $text == "سورة القصص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/62",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره العنكبوت" or $text == "سورة العنكبوت"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/66",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الروم" or $text == "سوره الروم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/68",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة لقمان" or $text == "سوره لقمان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/70",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة السجده" or $text == "سوره السجده"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/72",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاحزاب" or $text == "سوره الاحزاب"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/74",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة سبأ" or $text == "سوره سبأ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/76",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره فاطر" or $text == "سورة فاطر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/78",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره يس" or $text == "سورة يس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/80",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الصافات" or $text == "سوره الصافات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/82",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة ص" or $text == "سوره ص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/84",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الزمر" or $text == "سورة الزمر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/86",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة غافر" or $text == "سوره غافر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/88",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة فصلت" or $text == "سوره فصلت"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/91",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشورئ" or $text == "سوره الشورئ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/93",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الزحرف" or $text == "سوره الزحرف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/95",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الدخان" or $text == "سوره الدخان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/97",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الجاثية" or $text == "سوره الجاثيه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/99",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاحقاف" or $text == "سوره الاحقاف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/101",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة محمد" or $text == "سوره محمد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/103",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفتح" or $text == "سوره الفتح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/105",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحجرات" or $text == "سورة الحجرات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/107",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة ق" or $text == "سوره ق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة الذاريات" or $text == "سوره الذاريات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/111",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الطور" or $text == "سوره الطور"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/115",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة القمر" or $text == "سوره القمر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/121",
 reply_to_message_id =>$message->message_id, 
]);
}if($text == "سورة الرحمن" or $text == "سوره الرحمن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/123",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الواقعه" or $text == "سوره الواقعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/125",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الحديد" or $text == "سوره الحديد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/127",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورةه المجادله" or $text == "سوره المجادله"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/129",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الحشر" or $text == "سورة الحشر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/131",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الممتحنه" or $text == "سوره الممتحنه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/133",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الصف" or $text == "سوره الصف"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/135",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سوره الجمعه" or $text == "سورة الجمعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/137",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المنافقون" or $text == "سوره المنافقون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/139",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة التغابن" or $text == "سوره التغابن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/141",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الطلاق" or $text == "سوره الطلاق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/143",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة التحريم" or $text == "سوره التحريم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/145",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الملك" or $text == "سوره الملك"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/147",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سوره القلم" or $text == "سورة القلم"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/149",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المعارج" or $text == "سوره المعارج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/152",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة نوح" or $text == "سوره نوح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/154",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الجن" or $text == "سوره الجن"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/156",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المزمل" or $text == "سوره المزمل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/158",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المدثر" or $text == "سوره المدثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/160",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورةه القيامه" or $text == "سوره القيامه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/162",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة الانسان" or $text == "سوره الانسان"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/164",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة المرسلات" or $text == "سوره المرسلات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/166",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة نبأ" or $text == "سوره نبأ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/168",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "سورة النازعات" or $text == "سوره النازعات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/170",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره عبس" or $text == "سوره عبس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/172",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التكوير" or $text == "سوره التكوير"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/174",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانفطار" or $text == "سورة الانفطار"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/176",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره المطففين" or $text == "سورة المطففين"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/178",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الانشقاق" or $text == "سورة الانشقاق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/180",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البروج" or $text == "سورة البروج"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/302",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الطارق" or $text == "سورة الطارق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/304",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الاعلئ" or $text == "سورة الاعلئ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/306",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الغاشيه" or $text == "سوره الغاشيه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/308",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفجر" or $text == "سوره الفجر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/310",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة البلد" or $text == "سوره البلد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/312",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الشمس" or $text == "سورة الشمس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/314",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الليل" or $text == "سوره الليل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/316",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الضحئ" or $text == "سوره الضحئ"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/318",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الشرح" or $text == "سوره الشرح"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/320",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة التين" or $text == "سوره التين"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/322",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العلق" or $text == "سوره العلق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/324",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القدر" or $text == "سورة القدر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/326",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الزلزلة" or $text == "سورة الزلزله"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/328",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره البينة" or $text == "سورة البينة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/330",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة العاديات" or $text == "سوره العاديات"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/332",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره القارعه" or $text == "سورة القارعه"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/334",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره التكاثر" or $text == "سورة التكاثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/336",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره العصر" or $text == "سورة العصر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/338",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الهمزة" or $text == "سورة الهمزة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/340",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفيل" or $text == "سوره الفيل"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/342",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة قريش" or $text == "سوره قريش"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/344",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الماعون" or $text == "سوره الماعون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/346",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "" or $text == ""){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الكوثر" or $text == "سوره الكوثر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/348",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الكافرون" or $text == "سورة الكافرون"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/350",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة النصر" or $text == "سوره النصر"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/352",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة المسد" or $text == "سوره المسد"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/354",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الاخلاص" or $text == "سوره الاخلاص"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/356",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سورة الفلق" or $text == "سوره الفلق"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/358",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "سوره الناس" or $text == "سورة الناس"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/360",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "مطور" or $text == "المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مـطور البـوت 🍂 :- @BYYYY
تـُواصـل المحضـوريـن 🛡",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "سوره الحاقة" or $text == "سورة الحاقة"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/bot_qran/364",
 reply_to_message_id =>$message->message_id, 
]);
}
#####تذكير خاص#####
$azan = file_get_contents("azan.txt");
$azangroup = file_get_contents("azangroup.txt");
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a'); 
if($time == "7:40 pm"){
file_put_contents("azangroup.txt","no5");
}
if($time == "6:10 pm"){
file_put_contents("azangroup.txt","no4");
}
if($time == "3:29 pm"){
file_put_contents("azangroup.txt","no3");
}
if($time == "11:58 am"){
file_put_contents("azangroup.txt","no2");
}
if($time == "4:19 am"){
file_put_contents("azangroup.txt","no1");
}
if($time == "4:19 am"){
file_put_contents("azan.txt","no1");
}
if($time == "11:58 am"){
file_put_contents("azan.txt","no2");
}
if($time == "3:29 pm"){
file_put_contents("azan.txt","no3");
}
if($time == "6:10 pm"){
file_put_contents("azan.txt","no4");
}
if($time == "7:40 pm"){
file_put_contents("azan.txt","no5");
}
if($time == "4:19 am"){
if($azan == "no1"){
for($armo=0;$armo<count($armof2); $armo++){
bot("SendMessage",[
'chat_id'=>$armof2[$armo],
'text'=>"انه وقت صلاة الفجر بتوقيت مدينة بغداد وظواحيها لطفا قم لصلاتك الان غفر الله لك ذنبك  
💞استغفر الله الحمد لله",
]);
file_put_contents("azan.txt","1");
}
}
}
if($time == "11:58 am"){
if($azan == "no2"){
for($armo=0;$armo<count($armof2); $armo++){
bot("SendMessage",[
'chat_id'=>$armof2[$armo],
'text'=>"حان الان موعد اذان الظهر بتوقيت بغداد وظواحيها لطفا قم لصلاتك غفر الله لك 
💞الله اكبر لا الله الا الله",
]);
file_put_contents("azan.txt","2");
}
}
}
if($time == "3:29 pm"){
if($azan == "no3"){
for($armo=0;$armo<count($armof2); $armo++){
bot("SendMessage",[
'chat_id'=>$armof2[$armo],
'text'=>"حان الان موعد اذان العصر لطفا قم لصلاتك غفر الله لك ذنبك 
💞الحمد لله الشكر لله",
]);
file_put_contents("azan.txt","3");
}
}
}
if($time == "6:10 pm"){
if($azan == "no4"){
for($armo=0;$armo<count($armof2); $armo++){
bot("SendMessage",[
'chat_id'=>$armof2[$armo],
'text'=>"حان الان موعد اذان المغرب بتوقيت بغداد وظواحيها قم لصلاتك غفر الله لك 
💞اللهم صل على محمد وعلى اله وصحبه وسلم",
]);
file_put_contents("azan.txt","4");
}
}
}
if($time == "7:40 pm"){
if($azan == "no5"){
for($armo=0;$armo<count($armof2); $armo++){
bot("SendMessage",[
'chat_id'=>$armof2[$armo],
'text'=>"حان الان موعد اذان العشاء بتوقيت بغداد وظواحيها قم لصلاتك غفر الله لك 
💞الله اكبر الله اكبر",
]);
file_put_contents("azan.txt","5");
}
}
}
if($time == "4:19 am"){
if($azangroup == "no1"){
for($armo=0;$armo<count($armoufthkk); $armo++){
bot("SendMessage",[
'chat_id'=>$armoufthkk[$armo],
'text'=>"انه وقت صلاة الفجر بتوقيت مدينة بغداد وظواحيها لطفا قم لصلاتك الان غفر الله لك ذنبك  
💞استغفر الله الحمد لله",
]);
file_put_contents("azangroup.txt","1");
}
}
}
if($time == "11:58 am"){
if($azangroup == "no2"){
for($armo=0;$armo<count($armoufthkk); $armo++){
bot("SendMessage",[
'chat_id'=>$armoufthkk[$armo],
'text'=>"حان الان موعد اذان الظهر بتوقيت بغداد وظواحيها لطفا قم لصلاتك غفر الله لك 
💞الله اكبر لا الله الا الله",
]);
file_put_contents("azangroup.txt","2");
}
}
}
if($time == "3:29 pm"){
if($azangroup == "no3"){
for($armo=0;$armo<count($armoufthkk); $armo++){
bot("SendMessage",[
'chat_id'=>$armoufthkk[$armo],
'text'=>"حان الان موعد اذان العصر لطفا قم لصلاتك غفر الله لك ذنبك 
💞الحمد لله الشكر لله",
]);
file_put_contents("azangroup.txt","3");
}
}
}
if($time == "6:10 pm"){
if($azangroup == "no4"){
for($armo=0;$armo<count($armoufthkk); $armo++){
bot("SendMessage",[
'chat_id'=>$armoufthkk[$armo],
'text'=>"حان الان موعد اذان المغرب بتوقيت بغداد وظواحيها قم لصلاتك غفر الله لك 
💞اللهم صل على محمد وعلى اله وصحبه وسلم",
]);
file_put_contents("azangroup.txt","4");
}
}
}
if($time == "7:40 pm"){
if($azangroup == "no5"){
for($armo=0;$armo<count($armoufthkk); $armo++){
bot("SendMessage",[
'chat_id'=>$armoufthkk[$armo],
'text'=>"حان الان موعد اذان العشاء بتوقيت بغداد وظواحيها قم لصلاتك غفر الله لك 
💞الله اكبر الله اكبر",
]);
file_put_contents("azangroup.txt","5");
}
}
}

#######
$a = array("
‏كُل سعي تجتهدُ فيه يُتعبك، إلّا الطاعة كلّما 
أعطيتها حقّها زادتك قوّة؛ فخُذها بقوّة
","
بسمِ اللهِ الذي لا يَضُرُّ مع اسمه شيءٌ في الأرضِ و لا في السماءِ ، و هو السميعُ العليمُ
🍃🌻
","
‌‎اللهم اكتب لنا من خشيتك ماتحولُ به بيننا وبين معصيتك ، ومن طاعتك ماتبلغنا به جنتك❤️
","
”اللهُم إنا نسألك الخير الذي يُعانق حياتنا دائمًا وأبدًا” ❤️.
","
‏وهبْ لي يالله في حنايا قلبي نُوراً يُضئ بصيرتي و يبين لي دربي❤
","
ثقل ميزانك بِـ : سبحان الله وبحمده، سبحان الله العظيم💛
","
‏وهبْ لي يالله في حنايا قلبي نُوراً يُضئ بصيرتي و يبين لي دربي❤
","
‏صباح النور ثمّ:
ولِّ وجهك شطر ربّك تلقى النور ✨
 ويارب هب لنا فرحاً يعقب كُل تعب نتعبه ✨
","
‏وذكُرالرسول ‌تُضاء بهِ ‌الحياة 
اللهم صل و سلم على رسول الله.. 💛
","
ثم أهدني إلى النُّور يارب ، أنبت بقلبي زهورًا من سلام.
","
عش جمعتك بحبّ ، إقرأ الكهفّ بقلبٍ حاضر ، صلِّ على رسولك وإستشعر شفاعته ، ودثّـر نفسُك بالدعاء💭🌿
إن الصلاة على النبي تكفل إستجابة كل ما خُفي في قلبك ، عليه الصلاة والسلام
","
‏حيثُما كُنتُم فَصلَّوا عَليَّ فَإنَّ صَلاتُكُم تَبلُغُني
 -اللّهُمَّ صلِّ علىٰ نَبينا محمد
","
‏وإننِي يا الله ، أحِب أن تغرقنِي صلاحاً فـ تُحبنِي وتجعَل ملائكة السماء من حُبك تُحِبني فلاَ الأرض موطنِي ولا أهل الأرض غايتِي .
","
‏اللهم أرحم أرواحاً صعدت إليك كانت ولاتزال تعيش في قلوبنا نحبها ولم يعد بيننا وبينها إلا الدعاء🖤❤.
","
اللهم صل وسلم وبارك على سيدنا وحبيبنا محمد
اللهم صل وسلم وبارك على سيدنا وحبيبنا محمد💕
","
‏﴿والله يعلم و أنتم لا تعلمون﴾
","
كل التأخيرات في حياتك هي لحكمة يعلمها الله، سلم أمرك له وثق به وهو سبحانه سيعوضك خيرا ❤
","
‏حتّى عندمـا أعجز تمامًا عن قول الدعاء المناسب لشعوري ، كان يكفيني جداً أن أضع يدي على قلبي وأردد : اللهُم قلبي لأطمئن وأنجو 💜
","
‏اللهم شفاءً لمريض بكى من ألمه واستصعب دواءه ولازال يناديك طالباً الشفاء♥️.
","
‏وقُل الحمد لله ❤️،
حتى يتسع صدرُك للحياة،
وقُل الحمدُلله فإنَ بِها تطيبُ الأحَوال.
","
قال ﷺ(أَحَبُّ الْأَعْمَالِ إِلَى اللهِ عَزَّ وَجَلَّ-:
سُرُورٌ تُدْخِلُهُ عَلَى مُسْلِم)
","
‏وأعوذُ بك اللهّم من دربٍ مسدود، وسعيٍ مردود، وظنٍّ مخذول، وأن يتعلق قلبي بما ليس لي🌻.
","
‏الحمدلله. 🌿
استغفرالله. ♥️
لااله الا الله. 💜
الله اكبر.🌸
","
‏• أستغفرالله العظيم لي ولوالدي
وللمؤمنين والمؤمنات والمسلمين والمسلمات الأحياء منهم والأموات❤️ .
","
صباح الخير  ثُم اللهم رب الحياة ارزقنا نصيبًا من الحياة في هذه الحياة.
","
﴿وَلا تَكونوا كَالَّذينَ نَسُوا اللَّهَ فَأَنساهُم أَنفُسَهُم أُولئِكَ هُمُ الفاسِقونَ﴾
","
‏لنتفَائل بحُدوث أشياء سَعيدهہ وَ أخبآر جَميلہ وَ مُستَقبل أفضَل فَ الثقهه بِ اللہ تَجلب كل مَ لم يَكن بالحُسبان♡
","
‏يارب حقق لنا مبتغانا يارب ادخلنا الفردوس الاعلى من الجنه يارب ارضى عنا واقبل دعائنا يارررب أرزقنا سعادة القلب و طمأنينة النفس يارب 🧡🧡
","
اللهم صل وسلم وبارك على سيدنا محمد
","
‏- رسالة لك #تفاءل 
اتركها تأتي كما كتبها الله لك ، لعلها تأتي كما تمناها قلبك . ❤️
","
صباح الخير ، توكل على الله، و ردّد اذكارك ، وتفائل وابتسم ،أصبحنا وأصبح المُلك لله وحده لاشريك له 💙☀️.
","
‏الُّلهم اجعل كل ما فقدتُه خيراً، وكل ما أحزنَنِي خيراً، وكل ما أبعدتهُ عنّي خيراً واجعل لي نصيباً من الرحمة والمغفرة والفرح والسعادة  والرزق والهداية.
","
- اللَّهُـمَّ صلِّ وسَلِّم على نبيّنا مُحمَد ﷺ

‏قال النبي ﷺ: اكثروا من الصلاة عليّ ليلة الجمعة ويوم الجمعة فإن صلاتكم معروضة عليّ .. 🍃
","
اللهم صل وسلم على نبينا محمد🌿
اللهم صل وسلم على نبينا محمد 🌿
","
‏سيفاجئك الله بلطفه من حيث لاتدري ، وتهدأ روحك وتنعم براحة البال ، ثق في الواحد اللطيف الخبير . واصبر لحكم ربك فإنك بأعيننا❤
","
‏ يا مالك المُلك وكلتك أمري وأستودعتك همي فبشرني بما يفتح مداخل السعادة إلى قلبي ❤️
","
‏﴿ما يفتح الله للناس من رحمة فلا ممسك لها﴾🌿💜
","
عش حياتك قرير العين ، مطمئناً ، موقناً ، واثقاً بأنه لن يستطيع أحدٌ أن يغلق باباً فتحه الله لك .
","
لا إلهَ إلا اللهُ وحدَه لا شريكَ له ،له الملكُ ، و له الحمدُ يحيي و يُميتُ ، و هو على كلِّ شيءٍ قديرٌ
🍃🌻
","
﴿ إن الذين قالوا ربنا الله ثم استقاموا تتنزل عليهم الملائكة ألا تخافوا ولا تحزنوا وأبشروا بالجنة التي كنتم توعدون ﴾
🍃🌻
","
عَنْ أبي مالكٍ الأشْعَرِيِّ رضي اللَّه عنْهُ قال : قال رسُولُ اللَّه صَلّى اللهُ عَلَيْهِ وسَلَّم : 
( الطُّهُورُ شَطْرُ الإيمان ، والحمدُ للَّهِ تَمْلأُ المِيْزانَ ، وسُبْحَانَ اللَّهِ والحمْدُ للَّه تمْلآنِ أو تَمْلأُ ما بَيْنَ السَّمَواتِ والأرْضِ )

 رواهُ مسلم .
🍃🌻
","
اللهمَّ اغفر لي ولوالدي
🍃🌻
","
الله اكبـر الله اكبـر لا حول ولا قوة الا بالله العلي العظيم
🍃🌻
","
سيأتيك الفرج من الله من حيث لا تدري، ويذهلك بفضله وكرمه،
 ويغمر قلبك وروحك برحمته .. 

أبشر بالكريم وتفاءل به وثق به واطمئن لكل أقداره. 💛🥺
🍃🌻
","
كلّ يوم تعيشه هو هدية
من الله.. 
فلا تضيّعه بالقلق من المستقبل
أو الحسرة على الماضي.

 فقط قلّ ( توكّلتُ على اللّه). 🌸
🍃🌻
","
سُبْحَان اللَّهِ وَبِحَمْدِهِ عَدَدَ خَلْقِهِ ، وَرِضَا نَفْسِهِ ، وَزِنَةِ عَرْشِهِ ، وَمِدَادَ كَلِمَاتِه
🍃🌻
","
اللهم صل وسلم وبارك على سيدنا محمد 🌸
🍃🌻
","
الا بذكر الله تطمئن القلوب 🌱.
🍃🌻
","
‏﴿ فَصَبْرٌ جَمِيلٌ وَاللَّهُ الْمُسْتَعَانُ عَلَى مَا تَصِفُونَ ﴾
🍃🌻
","
‏يا حي يا قيوم برحمتك أستغيث أصلح لي شأني كُله
🍃🌻
","
‏﴿ ولقد نعلمُ أنك يضِيق صدرُك بِما يقولون 
 فسبِح بِحمد ربكَ وكُن مِن الساجدين ﴾.
🍃🌻
","
‏﴿ وَاصْبِرُواْ إِنَّ اللَّهَ مَعَ الصَّابِرِينَ ﴾
🍃🌻
","
اللـهمُ صَل علىّ محمدً وعلىّ آل مُحَمَّد ﷺ
🍃🌻
","
‏ياَرب الأرضَ والسَماء
‏ومَا بِينَهمَا ، إشَملنا بِمغفَرتك
‏التِي وسَعت كُل شَيء
🍃🌻
","
‏من أسباب استجابة الدعاء 

جاءت أم سُليم إلى النبي ﷺ فقالت:
يا رسول الله عَلِّمْنِي كَلِمَاتٍ أَدْعُو بِهِنَّ، قال ﷺ:
تُسبحين الله عَشْرًا، وتحمدينه عَشْرًا وَتُكَبِّرِينَهُ عَشْرًا، ثُمَّ سَلِي حاجتك فَإِنَّهُ يَقُولُ
قَدْ فَعَلْتُ، قَدْ فَعَلْتُ
 أخرجه الترمذي .
🍃🌻
","
- سبحان الله وبحمده 💭❥
- سبحان الله العظيم 💭❥
🍃🌻
","
°° قال ﷺ 
طوبى لِمن وجد في صحيفته استغفاراً كثيراً
       
 أستغفر الله العظيم واتوب اليه
🍃🌻
","
اللهم يافارج الهم، ياكاشف الغم، يارحمن الدنيا والأخرة ورحيمهما، نسألك برحمةٍ من عندك تغنينا عن رحمة من سواك، ياخفي الألطاف، نجنا مما نخاف، اللهم انا نسألك توفيقاً وتيسيراً لجميع أمورنا، وتشرح صدورنا، وترفع عنا البلاء والوباء.
🍃🌻
","
‏﴿ وَاذْكُر ربّكَ إِذَا نَسِيتَ ﴾ 
سُبحان الله ، الحمدالله ، 
الله أكبّر ، أسِتغفر الله ، لا إله إلا الله ، 
لاحُول ولا قوة إلا بالله ، 
اللهُم صَل وسلم على نبينا محمد .
🍃🌻
","
إن الله إذا أراد أمرًا ، أزال العواقب وأتمه 

اللُهُم تمام الأمور ، اللهُم البشائر والتياسير💛
🍃🌻
","
‏- سُبحان الله 
‏- الحَمدُ لله 
‏- لا إله إلا الله 
‏- الله أكبر 
‏- أستغفِرُ الله 
‏- لا حَول و لا قوة إلا بالله 
‏- سُبحان الله و بِحمده 
‏- سُبحان الله العَظيم 
‏- اللهم صلِّ و سلِّم على نبينا محمد
🍃🌻
","
‏استودع الله أمري كُله ، دقّه وجُله 
‏فيه الرجاء وعليه التُكلان 
‏اللهم إني أسألك تياسير تعقُبها تباشير
‏يارب بشرني بما يَسرّ خاطري 💜
🍃🌻
","
يا حيّ يا قيّوم برحمتك أستغيث أصلح لي شأني كله ولا تكلني إلى نفسي طرفة عينٍ أبداً ...

🌿🌿🌿
🍃🌻
","
﴿وألنّا له الحديد﴾ 
 إذا تولاك الله فرّج همّك ولوكان أقسى من الحديد! 
 اللهم تولّ أمرناوفرج همنا 
 ويسر ماأستعسر  
 اللهم كن لنا وليا ومعينا وظهيرا ونصيرا 
 اللهم يسر لنا الخير حيث كنا وحيث توجهنا, اللهم سخر لنا من الارزاق أبركها وأوسعها..
🍃🌻
","
رب اجعلني مقيم الصلاة ومن ذريتي ربنا وتقبل دعاء . ربنا تقبل منا إنك أنت السميع العليم وتب علينا إنك أنت التواب الرحيم
🍃🌻
","

‏دعاء الكرب
.. 
لا إله إلا الله العظيم الحليم،لا إله إلا الله ربُّ العرش العظيم،لا إله إلا الله ربُّ السماوات وربُّ الأرض وربُّ العرش الكريم
🍃🌻
","
- اللهم أننا نستغفرك من جميع الذنوب والخطايا التي نعلمها والتي لا نعلمها سبحانك تعلم مافي أنفسنا ولا نعلم مافي نفسك وأنت علام الغيوب
🍃🌻
","
رَبَّنَا اغْفِرْ لِي وَلِوَالِدَيَّ وَلِلْمُؤْمِنِينَ يَوْمَ يَقُومُ الْحِسَابُ. [إبرهيم - 41].
🍃🌻
","
حَسْبِـيَ اللّهُ لا إلهَ إلاّ هُوَ عَلَـيهِ تَوَكَّـلتُ وَهُوَ رَبُّ العَرْشِ العَظـيم.
🍃🌻
","
سُبْحـانَ اللهِ وَبِحَمْـدِهِ
🍃🌻
","
سبحان الله والحمد لله ، ولا إله إلا الله ،والله أكبر ،و لا حول ولا قوة إلا بالله
🍃🌻
","
وَقَالَ صلى الله عليه وسلم: ((أَحَبُّ الْكَلاَمِ إِلَى اللَّهِ أَرْبَعٌ: سُبْحَانَ اللَّهِ، وَالْحَمْدُ لِلَّهِ، وَلاَ إِلَهَ إِلاَّ اللَّهُ، وَاللَّهُ أَكْبَرُ، لاَ يَضُرُّكَ بِأَيِّهِنَّ بَدَأتَ)).
🍃🌻
","
الْحَمْدُ لِلَّهِ حَمْداً كَثِيراً طَيِّباً مُبَارَكاً فِيهِ، غَيْرَ [مَكْفِيٍّ وَلاَ ] مُوَدَّعٍ، وَلاَ مُسْتَغْنَىً عَنْهُ رَبَّنَا
🍃🌻
","
سُبْحَانَ الَّذِي يُسَبِّحُ الرَّعْدُ بِحَمْدِهِ وَالْمَلاَئِكةُ مِنْ خِيفَتِهِ
🍃🌻
","
مَنْ كَانَ آخِرُ كَلاَمِهِ لاَ إِلَهَ إِلاَّ اللَّهُ دَخَلَ الْجَنَّةَ
🍃🌻
","
اللَّهُمَّ اغْفِرْ لِي، وَارْحَمْنِي، وَأَلْحِقْنِي بِالرَّفِيقِ الْأَعْلَى
🍃🌻
","
هُوَ الْأوَّلُ وَالْآخِرُ وَالظّاهِرُ وَالْباطِنُ وَهُوَ بِكُلِّ شَيْءٍ عَلِيمٌ
🍃🌻
","
باسمك ربي حصَّنتُ نفسي
 وأهلي ومن أحب من أن يصيبنا أذى،
🍃🌻
","
أعوذُ بِكَلماتِ اللَّهِ التَّامَّاتِ من شرِّ ما خلقَ
🍃🌻");
$baageelll=file_get_contents("baageelll.txt");
$baageel=file_get_contents("baageel.txt");
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a'); 
$b = array_rand($a,1);
if($time == "06:39 pm" or $time == "02:44 am" or $time == "01:00 pm" or $time == "02:00 pm" or $time == "03:00 pm" or $time == "04:00 pm" or $time == "05:00 pm" or $time == "06:00 pm" or $time == "07:00 pm" or $time == "08:00 pm" or $time == "09:00 pm" or $time == "10:00 pm" or $time == "11:00 pm" or $time == "12:00 pm" or $time == "01:00 am" or $time == "02:00 am" or $time == "03:00 am" or $time == "04:00 am" or $time == "05:00 am" or $time == "06:00 am" or $time == "07:00 am" or $time == "08:00 am" or $time == "09:00 am" or $time == "10:00 am" or $time == "11:00 am" or $time == "12:00 am"){
file_put_contents("baageelll.txt","y");
}
if($time == "06:39 pm" or $time == "02:44 am" or $time == "01:00 pm" or $time == "02:00 pm" or $time == "03:00 pm" or $time == "04:00 pm" or $time == "05:00 pm" or $time == "06:00 pm" or $time == "07:00 pm" or $time == "08:00 pm" or $time == "09:00 pm" or $time == "10:00 pm" or $time == "11:00 pm" or $time == "12:00 pm" or $time == "01:00 am" or $time == "02:00 am" or $time == "03:00 am" or $time == "04:00 am" or $time == "05:00 am" or $time == "06:00 am" or $time == "07:00 am" or $time == "08:00 am" or $time == "09:00 am" or $time == "10:00 am" or $time == "11:00 am" or $time == "12:00 am"){
file_put_contents("baageel.txt","y");
}
if($time == "06:39 pm" or $time == "02:44 am" or $time == "01:00 pm" or $time == "02:00 pm" or $time == "03:00 pm" or $time == "04:00 pm" or $time == "05:00 pm" or $time == "06:00 pm" or $time == "07:00 pm" or $time == "08:00 pm" or $time == "09:00 pm" or $time == "10:00 pm" or $time == "11:00 pm" or $time == "12:00 pm" or $time == "01:00 am" or $time == "02:00 am" or $time == "03:00 am" or $time == "04:00 am" or $time == "05:00 am" or $time == "06:00 am" or $time == "07:00 am" or $time == "08:00 am" or $time == "09:00 am" or $time == "10:00 am" or $time == "11:00 am" or $time == "12:00 am"){
if($baageel == "y"){
for($armo=0;$armo<count($ARMOF2); $armo++){
 bot('sendmessage',[
 'chat_id'=>$ARMOF2[$armo],
 'message_id'=>$message_id,
 'text'=>$a[$b],
 ]);
file_put_contents("baageel.txt","1");
}
}
}
if($time == "06:39 pm" or $time == "02:44 am" or $time == "01:00 pm" or $time == "02:00 pm" or $time == "03:00 pm" or $time == "04:00 pm" or $time == "05:00 pm" or $time == "06:00 pm" or $time == "07:00 pm" or $time == "08:00 pm" or $time == "09:00 pm" or $time == "10:00 pm" or $time == "11:00 pm" or $time == "12:00 pm" or $time == "01:00 am" or $time == "02:00 am" or $time == "03:00 am" or $time == "04:00 am" or $time == "05:00 am" or $time == "06:00 am" or $time == "07:00 am" or $time == "08:00 am" or $time == "09:00 am" or $time == "10:00 am" or $time == "11:00 am" or $time == "12:00 am"){
if($baageelll == "y"){
for($armo=0;$armo<count($armoufthkk); $armo++){
 bot('sendmessage',[
 'chat_id'=>$armoufthkk[$armo],
 'message_id'=>$message_id,
 'text'=>$a[$b],
 ]);
file_put_contents("baageelll.txt","1");
}
}
}


