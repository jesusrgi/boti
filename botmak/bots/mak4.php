<?php#*wataw*
#المتجر

if($start=="non"){
$start="لم يتم تعيين كليشة /start من قبل الادمن ";

}

$sales = json_decode(file_get_contents('data/sales.txt'),true);
$buttons = json_decode(file_get_contents('/data/button.json'),true);

function save($array){
    file_put_contents('data/sales.txt', json_encode($array));

}


$me = bot('getme',['bot'])->result->username;
$sales = json_decode(file_get_contents('data/sales.txt'),1);
if($data == "pointsfile"){
$user = (file_get_contents("data/sales.txt"));
file_put_contents("data/backup.txt",$user);
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
▪ تم عمل نسخة احتياطية بنجاح
إذا البوت حذف النقاط راسلني",
]);
}
if($data == 'c'){
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"مرحــبـاً مطــوري 😘 @$user  
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
شبيك لبيك بوت الأرقام بين يديك       ❂ 
بعض الأوامر اللازمة.👇                     ❂
ـ⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁
إرســـــال نــقاط➕ /sendcoin         
خصـــم نــقـــاط➖ /takecoin          
تــسـلـيـم رقــــم 🔝/sendnumber   
رسالة لمـستخدم👁‍🗨 /sendmessage 
إرســـال تــحذيـر🔴 /sendwarning  
مشتركين واذاعه📣 /admin              
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'إضافة دولة','callback_data'=>'add'],['text'=>'- حذف دولة','callback_data'=>'del']],[['text'=>'نسخة إحتياطية','callback_data'=>'pointsfile']]
      ]
    ])
  ]);
$sales['mode'] = null;
  save($sales);
 }
 

  
if($chat_id == $admin){
 if($text == '/start'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"مرحــبـاً مطــوري 😘@$user  
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
شبيك لبيك بوت الأرقام بين يديك       ❂ 
بعض الأوامر اللازمة.👇                     ❂
ـ⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁⌁
إرســـــال نــقاط➕ /sendcoin         
خصـــم نــقـــاط➖ /takecoin          
تــسـلـيـم رقــــم 🔝/sendnumber   
رسالة لمـستخدم👁‍🗨 /sendmessage 
إرســـال تــحذيـر🔴 /sendwarning  
مشتركين واذاعه📣 /admin              
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'اضـافة عـرض Ⓜ️','callback_data'=>'add'],['text'=>'- حـذف عـرض ⛔️','callback_data'=>'del']],[['text'=>'نسخـة احـتياطـية 🔊','callback_data'=>'pointsfile']]
      ]
    ])
  ]);
$sales['mode'] = null;
  save($sales);
 }
if($text == "/sendcoin"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
أرسل أيدي الشخص الذي تريد إرسال النقاط له
",
]);
  $sales['mode'] = 'chat';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد إرسالها",
 ]);
   $sales['mode'] = 'poi';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إضافة $text نقطة إلى حساب ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"تمت إضافة $text نقطة إلى حسابك في البوت من قبل المطور ",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] += $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
if($text == "/takecoin"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
أرسل أيدي الشخص الذي تريد خصم النقاط منه
",
]);
  $sales['mode'] = 'chat1';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat1'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد خصمها",
 ]);
   $sales['mode'] = 'poi1';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi1'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم خصم $text نقطة من حساب ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"تمت خصم $text نقطة من حسابك في البوت من قبل المطور ",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] -= $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
if($text == "/sendnumber"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
أرسل أيدي الشخص الذي تريد تسليم الرقم له
",
]);
  $sales['mode'] = 'chat2';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat2'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "
أرسل الرقم مع الكود",
 ]);
   $sales['mode'] = 'poi2';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi2'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال الرقم إلى ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"تـوصـيــل الـطــلـبـات ✅
شـكرا لثقـتك بنـا هـذاء هـواء طلبـك 💋

$text
",
  ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit;
}
if($text == "/sendmessage"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
أرسل أيدي الشخص الذي تريد إرسال الرسالة له
",
]);
  $sales['mode'] = 'chat3';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat3'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "
أرسل رسالتك",
 ]);
   $sales['mode'] = 'poi3';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi3'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال الرسالة إلى ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"رسالة من الإدارة:

$text",
  ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit;
}
if($text == "/sendwarning"){
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
أرسل أيدي الشخص الذي تريد إرسال التحذير له
",
]);
  $sales['mode'] = 'chat4';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat4'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "
إضغط /Confirm لتأكيد إرسال التحذير",
 ]);
   $sales['mode'] = 'poi4';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi4'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إرسال التحذير إلى ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"تحذير من الإدارة!
❌❌❌❌❌❌❌❌❌❌
إستعمال حسابات وهمية الدخول
 لرابطك بها يؤدي إلى حظر حسابك 👉🔪
في حال إستعمال الوهمي سينحظر حسابك... إنتبه... شكرا على تفهمك للموضوع
ـ⊟⊟⊟⊟⊟⊟⊟⊟⊟⊟⊟⊟⊟⊟⊟",
  ]);
  $sales['mode'] = null;
  $sales['idd'] = null;
  save($sales);
  exit;
}

 if($data == 'add'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'أرسل إسم السلعة؟!
مثال:
رقم بلجيكي 🇧🇪',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'c']]
      ]
    ])
  ]);
  $sales['mode'] = 'add';
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'add'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'- تم حفظ إسم السلعة (الرقم)
أرسل الآن سعرها ( كم نقطة؟ )
مثال:
25'
  ]);
  $sales['n'] = $text;
  $sales['mode'] = 'addm';
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'addm'){
  $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,7);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم حفظ الإسم والسعر...✅
   إسم السلعة: '.$sales['n'].'
السعر: '.$text.'
الكود: '.$code
  ]);
  
  $sales['sales'][$code]['name'] = $sales['n'];
  $sales['sales'][$code]['price'] = $text;
  $sales['n'] = null;
  $sales['mode'] = null;
  save($sales);
  exit;
 }
 if($data == 'del'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'أرسل كود السلعة للتأكيد',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- إلغاء الأمر 🚫','callback_data'=>'c']]
      ]
    ])
  ]);
  $sales['mode'] = 'del';
  save($sales);
  exit;
 }
 
 
 
 if($text != '/start' and $text != null and $sales['mode'] == 'del'){
  if($sales['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحذف بنجاح...✅
   إسم السلعة: '.$sales['sales'][$text]['name'].'
السعر: '.$sales['sales'][$text]['price'].'
الكود: '.$text
  ]);
  unset($sales['sales'][$text]);
  $sales['mode'] = null;
  save($sales);
  exit;
  } else {
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'خطأ - الكود غير صحيح'
   ]);
  }
 }
} else {
 if(preg_match('/\/(start)(.*)/', $text)){
  $ex = explode(' ', $text);
  if(isset($ex[1])){
   if(!in_array($chat_id, $sales[$chat_id]['id'])){
    $sales[$ex[1]]['collect'] += 1;
    save($sales);
    bot('sendMessage',[
     'chat_id'=>$ex[1] ,
     'text'=>"اهـلا ﻋــــــــــــــــــزيـزي 💖 قـــــام 
هـذاء الشخـص ⚶  @$user ⚶ بـالدخول الـئ الرابـط الخـاص بـك وحصـلت علـئ نقـطة واحـدة عـدد نقـاطـك الان ♲".$sales[$ex[1]]['collect'], 
    ]);
    $sales[$chat_id]['id'][] = $chat_id;
    save($sales);
   }
  }
/*
إستبدل chs12345678900987654321 بمعرف قناتك
وتأكد أن البوت أدمن في القناة
*/
  
  if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>'
عـــــزيــــــــزي ☺️ المـستـخـدم 💻
اخـتـــــر العــــــرض الـــــــــذي تريـده 
مـن هـــــــــذة الـــــــقــــائـــــــــــمـــــة👇🏼

عـــــدد نــــــقاطـــــك الان ❀ '.$sales[$chat_id]['collect']."\n".$txtfree
,
'parse_mode'=>"html",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'شــراء عــرض 🍒','callback_data'=>'sales'],
     ['text'=>'جـمـع الـنـقـاط 💻','callback_data'=>'col']],[['text'=>'شــرح الـبـوت 🚦','callback_data'=>'about'],['text'=>'شــراء نـقـاط 💳','callback_data'=>'buy']],[['text'=>'أرقـام بدون نقاط 🆓','callback_data'=>'numberfree']],
    ] 
   ])
  ]);
 }
if($data == 'back'){
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
  bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'
عـــــزيــــــــزي ☺️ المسـتخـدم  💻
اخـتـــــر العــــــرض الـــــــــذي تريـده 
مـن هـــــــــذة الـــــــقــــائـــــــــــمـــــة👇🏼

عـــــدد نــــــقاطـــــك الان ❀ '.$sales[$chat_id]['collect']."\n".$txtfree,
'parse_mode'=>"html",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'شــراء عــرض 🍒','callback_data'=>'sales'],
     ['text'=>'جـمـع الـنـقـاط 💻','callback_data'=>'col']],[['text'=>'شــرح الـبـوت 🚦','callback_data'=>'about'],['text'=>'شــراء نـقـاط 💳','callback_data'=>'buy']],[['text'=>'أرقـام بدون نقاط 🆓','callback_data'=>'numberfree']],
    ] 
   ])
  ]);
 }
 if($data == 'buy'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"للشراء إضغط تحدث للادمن
 قم بمراسلته للشراء فقط...💸
[الادمن](tg://user?id=$admin)
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }



if($data == "about"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
البوت بسيط ولا يحتاج لشرح أصلا...🗣

ولكن على كل حال هذا شرح سريع
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"الخطوة الأولى",'callback_data'=>"k1"],['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "k1"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
بعد الدخول للبوت إضغط على زر تجميع النقاط وبعدها سيرسل البوت لك رابط خاص بك فقط قم بنشره وأي شخص يدخل على الرابط تحصل على 1 نقطة
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"الخطوة الثانية",'callback_data'=>"k2"],['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "k2"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
بعد جمع عدد جيد من النقاط إضغط على زر طلب رقم وبعدها اختر الدولة (يجب أن يتوافق سعر الرقم مع نقاطك) بعدها تأكد أن لديك إسم مستخدم في إعدادات تيليجرام بعدها إضغط نعم لدي معرف - تأكيد
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"الخطوة الثالثة",'callback_data'=>"k3"],['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "k3"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
سيصل طلبك لنا وسنرسل الرقم لك في غضون 48 (طبعا 48 ساعة أقصى مدة نتأخر فيها وذلك لكثرة الطلبات) وفي حال كانت الطلبات قليلة يصلك الرقم في نفس اليوم وربما في نفس الساعة
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"لا أستطيع جمع النقاط",'callback_data'=>"k4"],['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "k4"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
إذا لا تستطيع جمع النقاط يمكنك شراؤها...💸
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"شراء نقاط 💸",'callback_data'=>"buy"],['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "numberfree"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
أرقام بدون نقاط تعتمد على السرعة
حيث أننا نقوم بتوزيع أرقام في القناة وكل كود يعمل مع أول شخص فقط...🍃
لو نشرنا رقم مغربي 🇲🇦 مع الكود بالطبع سيعمل مع أول شخص يدخله ولن يعمل مع البقية - فالأرقام بدون نقاط تعتمد على السرعة

",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>" القائمة الرئيسية 🔙",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }
if($data == "bot"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
لتحميل ملف البوت إضغط على تحميل - Download
",
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"اطلـب الملف مجانا 🤖",'url'=>"https://t.me/wataw"],['text'=>" القائمة الرئيسية 👒",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }


 if($data == 'col'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'- هـذا هـو الرابـط الـخـاص بـك

https://t.me/'.$me.'?start='.$chat_id.'
حسـنــاً هـذاء هــو الـرابــط الخـاص بـك 👍🏿
الان قـم بنـسخـة ومشـاركتـه مـع اصـداقائك
وكل شخص يدخل الرابط تحلص علئ نقـطة ✅
',
'reply_markup'=>json_encode([
    'inline_keyboard'=>[
[['text'=>"العودة إلى القائمة الرئيسية ↪",'callback_data'=>"back"]],
    ] 
   ])
  ]);
 }


 elseif($data == 'sales'){
  $reply_markup = [];
  $reply_markup['inline_keyboard'][] = [['text'=>'سعــر العـرض 💎','callback_data'=>'s'],['text'=>'اسـم العـرض 🛍','callback_data'=>'s']];
  foreach($sales['sales'] as $code => $sale){
   $reply_markup['inline_keyboard'][] = [['text'=>$sale['price'],'callback_data'=>$code],['text'=>$sale['name'],'callback_data'=>$code]];
  }
if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
$reply_markup['inline_keyboard'][] = [['text'=>'العودة إلى القائمة الرئيسية 🔙 ','callback_data'=>'back']];
  $reply_markup = json_encode($reply_markup);
  bot('editMessageText',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>'
عـــــزيــــــــزي ☺️ @$user   💻
اخـتـــــر العــــــرض الـــــــــذي تريـده 
مـن هـــــــــذة الـــــــقــــائـــــــــــمـــــة👇🏼

عـــــدد نــــــقاطـــــك الان ❀'.$sales[$chat_id]['collect']."\n".$txtfree,
'parse_mode'=>"html",
   'reply_markup'=>($reply_markup)
  ]);
  $sales[$chat_id]['mode'] = null;
   save($sales);
   exit;
 } elseif($data == 'yes'){
  $price = $sales['sales'][$sales[$chat_id]['mode']]['price'];
$name = $sales['sales'][$sales[$chat_id]['mode']]['name'];
  bot('editMessageText',[
   'chat_id'=>$chat_id,
   'message_id'=>$message_id,
   'text'=>"▪تم شراء العرض بنجاح ☎💰✅
▪ في خلال 48 ساعة بالكثير سيتم تسليم عرضك 😼👍

▪ يرجى التواصل معنا اذا لم تستلم طلبك في غضون 48 ساعه 😐"
  ]);
  bot('sendmessage',[
   'chat_id'=>$admin,
   'text'=>"🛍 عزيـزي المطـور لديـك طلـب جـديد

مـعـرف الشخـص 🎀 @$user  🎀
ايـــدي الشـخـص $chat_id  

قــــام بـــشراء 🎊 $name
بــســــعـــــــر 💰 $price

لتـسلـيم الطـلب اضغـط هنـا 👇🏼😊
ـ██    /sendnumber   ██ـ"
  ]);
  $sales[$chat_id]['mode'] = null;
  $sales[$chat_id]['collect'] -= $price;
  save($sales);
  exit;
 } else {
   if($data == 's') { exit; }
   $price = $sales['sales'][$data]['price'];
   $name = $sales['sales'][$data]['name'];
   if($price != null){
    if($price <= $sales[$chat_id]['collect']){
     bot('editMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
عـزيـزي الـعضـو 💘💝

ُهـل انـت متـاكد وتـريد اتمام الطـلب 🤓


طلـبك هـــواء ⇦📭 $name

بـسعـــــر ⇦ 💰  $price",
      'reply_markup'=>json_encode([
       'inline_keyboard'=>[
        [['text'=>'نـعم متـاكد 👜','callback_data'=>'yes'],['text'=>'لا - إلغاء الشراء 🍓','callback_data'=>'sales']] 
       ] 
      ])
     ]);
     $sales[$chat_id]['mode'] = $data;
     save($sales);
     exit;
    } else {
     bot('answercallbackquery',[
      'callback_query_id' => $update->callback_query->id,
      'text'=>'❌نقـاطك غيـر كافـيه لشـراء هـذاء العـرض 😭😢',
      'show_alert'=>true
     ]);
    }
   }
 }
}

$ary = array($admin);
$id = $message->from->id;
$admins = in_array($id,$ary);
$data = $update->callback_query->data;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$chat_id2 = $update->callback_query->message->chat->id;
$cut = explode("\n",file_get_contents("data/stats/users.txt"));
$users = count($cut)-1;
$mode = file_get_contents("data/stats/bc.txt");
#Start code 

if ($update && !in_array($id, $cut)) {
    mkdir('data/stats');
    file_put_contents("data/stats/users.txt", $id."\n",FILE_APPEND);
  }

    if(preg_match("/(admin)/",$text) && $admins) {
        bot('sendMessage',[
            'chat_id'=>$chat_id,
          'text'=>"
اهـلا عـــزيزي الـمــــطـــور 😉
انـت فـي قـسم المشتـركين والاذاعه📡
اخـتر مـاذ تـــريد ان تفـعل👇🏼 🤷🏿‍♂
-",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    [['text'=>'عدد المشتركين 👥 ','callback_data'=>'users'],['text'=>'رسالة للكل 📩 ','callback_data'=>'set']],
    [['text'=>'حالة البوت 🔋 ','callback_data'=>'stats']],
                ]
                ])
            ]);
    }
    if($data == 'homestats'){
    bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>"
اهـلا عـــزيزي الـمــــطـــور 😉
انـت فـي قـسم المشتـركين والاذاعه📡
اخـتر مـاذ تـــريد ان تفـعل👇🏼 🤷🏿‍♂
-",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    [['text'=>'عدد المشتركين 👥 ','callback_data'=>'users'],['text'=>'رسالة للكل 📩 ','callback_data'=>'set']],
    [['text'=>'حالة البوت 🔋 ','callback_data'=>'stats']],
                ]
                ])
    ]);
    file_put_contents('data/stats/bc.txt', 'no');
    }
    
    if($data == "users"){ 
        bot('answercallbackquery',[
            'callback_query_id'=>$update->callback_query->id,
            'text'=>"
المشتركين $users
-",
            'show_alert'=>true,
    ]);
    }
    
    if($data == "set"){ 
        file_put_contents("data/stats/bc.txt","yas");
        bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$update->callback_query->message->message_id,
        'text'=>"
أرسل رسالتك ليتم إرسالها إلى $users مشترك 👥
كتابة فقط...🌚
-
    ",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>' الغاء 🚫. ','callback_data'=>'homestats']]    
            ]
        ])
        ]);
    }
    if($text and $mode == "yas" && $admins){
        bot('sendMessage',[
              'chat_id'=>$chat_id,
              'text'=>"
تم قبول رسالتك!
ويتم إرسالها إلى $users مشترك 👥
-",
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'رجوع ','callback_data'=>'homestats']]    
            ]
        ])
    ]);
    for ($i=0; $i < count($cut); $i++) { 
     bot('sendMessage',[
    'chat_id'=>$cut[$i],
    'text'=>"$text",
    'parse_mode'=>"MarkDown",
    'disable_web_page_preview'=>true,
    ]);
    file_put_contents("data/stats/bc.txt","no");
    } 
    }
    date_default_timezone_set("Asia/Baghdad");
    $getMe = bot('getMe')->result;
    $date = $message->date;
    $gettime = time();
    $sppedtime = $gettime - $date;
    $time = date('h:i');
    $date = date('y/m/d');
    $userbot = "{$getMe->username}";
    $userb = strtoupper($userbot);
    if($data == "stats"){ 
    if ($sppedtime == 3  or $sppedtime < 3) {
    $f = "ممتازة";
    }
    if ($sppedtime == 9 or $sppedtime > 9 ) {
    $f = "لا بأس";
    }
    if ($sppedtime == 10 or $sppedtime > 10) {
    $f = " سيئة جدا";
    }
     bot('EditMessageText',[
        'chat_id'=>$chat_id2,
        'message_id'=>$update->callback_query->message->message_id,
        'text' =>"
معلومات البوت:

معرف البوت @$userb
حالة البوت $f
الوقت الآن: 20$date | $time 
-",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>'رجوع ','callback_data'=>'homestats']]    
            ]
        ])
       ]);
    }


    ?>

