<?php#*wataw*
#القران
if($start=="non"){
$start="
        💭┊مرحبا يا {$name } 🍃
=

❇{♤مرحبا بك في البوت القران الكريم
❇{♤يمكنك الاستماع الى القران الكريم من خلال القوائم
❇{♤يمكنك ايضا قراء الاذكار من خلال البوت /azka 
❇ملاحظه للدخول للاذكار
/azka
=
";

}



if($text == "القران الكريم صوت"){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>"https://t.me/PHP_E/6",
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[
['text'=>'سورة الفاتحة'],['text'=>'سورة البقرة'],['text'=>'سورة آل عمران']
],

[ 
['text'=>'سورة النساء'],['text'=>'سورة المائدة'],['text'=>'سورة الأنعام']
],
[ 
['text'=>'سورة الأنفال'],['text'=>'سورة الأعراف'],['text'=>'سورة التوبة']
],

[ 
['text'=>'سورة يونس'],['text'=>'سورة هود'],['text'=>'سورة يوسف']
],

[ 
['text'=>'سورة الرعد'],['text'=>'سورة إبراهيم'],['text'=>'سورة الحجر']
],




[ 
['text'=>'سورة النحل'],['text'=>'سورة الإسراء'],['text'=>'سورة الكهف']
],
[
['text'=>' سورة مريم'],['text'=>'سورة طه'],['text'=>'سورة الأنبياء']
],

[
['text'=>'سورة الحج'],['text'=>'سورة المؤمنون'],['text'=>'سورة النور']
],

[ 
['text'=>'سورة الفرقان'],['text'=>'سورة الشعراء'],['text'=>'سورة النمل']
],


[ 
['text'=>'سورة القصص'],['text'=>'سورة العنكبوت'],['text'=>'سورة الروم']
],

[ 
['text'=>'سورة لقمان'],['text'=>'سورة السجدة'],['text'=>'سورة الأحزاب']
],

[ 
['text'=>'سورة سبأ'],['text'=>'سورة فاطر'],['text'=>'سورة يس']
],

[
['text'=>'سورة الصافات'],['text'=>'سورة ص'],['text'=>'سورة الزمر']
],


[ 
['text'=>'سورة غافر'],['text'=>'سورة فصلت'],['text'=>'سورة الشورى']
],
[ 
['text'=>'سورة الزخرف'],['text'=>'سورة الدخان'],['text'=>'سورة الجاثية']
],

[ 
['text'=>'سورة الأحقاف'],['text'=>'سورة محمد'],['text'=>'سورة الفتح']
],

[ 
['text'=>'سورة الحجرات'],['text'=>'سورة ق'],['text'=>'سورة الذاريات']
],




[ 
['text'=>'سورة الطور'],['text'=>'سورة النجم'],['text'=>'سورة القمر']
],
[
['text'=>'سورة الرحمن'],['text'=>'سورة الواقعة'],['text'=>'سورة الحديد']
],



[ 
['text'=>'سورة المجادلة'],['text'=>'سورة الحشر'],['text'=>'سورة الممتحنة']
],
[ 
['text'=>'سورة الصف'],['text'=>'سورة الجمعة'],['text'=>'سورة المنافقون']
],





[ 
['text'=>'سورة التغابن'],['text'=>'سورة الطلاق'],['text'=>'سورة التحريم']
],

[ 
['text'=>'سورة الملك'],['text'=>'سورة القلم'],['text'=>'سورة الحاقة']
],




[ 
['text'=>'سورة المعارج'],['text'=>'سورة نوح'],['text'=>'سورة الجن']
],
[
['text'=>'سورة المزمل'],['text'=>'سورة المدثر'],['text'=>'سورة القيامة']
],

[ 
['text'=>'سورة الإنسان'],['text'=>'سورة المرسلات'],['text'=>'سورة النبأ']
],
[ 
['text'=>'سورة النازعات'],['text'=>'سورة عبس'],['text'=>'سورة التكوير']
],

[ 
['text'=>'سورة الإنفطار'],['text'=>'سورة المطففين'],['text'=>'سورة الإنشقاق']
],

[ 
['text'=>'سورة البروج'],['text'=>'سورة الطارق'],['text'=>'سورة الأعلى']
],


[ 
['text'=>'سورة الغاشية'],['text'=>'سورة الفجر'],['text'=>'سورة البلد']
],
[
['text'=>'سورة الشمس'],['text'=>'سورة الليل'],['text'=>'سورة الضحى']
],

[ 
['text'=>'سورة الشرح'],['text'=>'سورة التين'],['text'=>'سورة العلق']
],
[ 
['text'=>'سورة القدر'],['text'=>'سورة البينة'],['text'=>'سورة الزلزلة']
],
[ 
['text'=>'سورة العاديات'],['text'=>'سورة القارعة'],['text'=>'سورة التكاثر']
],

[ 
['text'=>'سورة العصر'],['text'=>'سورة الهمزة'],['text'=>'سورة الفيل']
],


[ 
['text'=>'سورة قريش'],['text'=>'سورة الكوثر'],['text'=>'سورة الكافرون']
],

[ 
['text'=>'سورة النصر'],['text'=>'سورة المسد'],['text'=>'سورة الإخلاص']
],

[ 
['text'=>'سورة الناس'],['text'=>'سورة الفلق']
],

[
['text'=>'تطبيق القران الكريم']
],
[
['text'=>'الصفحة الرئيسية 🏚']
],
]
]) 
]); 
}



if($text == "الصفحة الرئيسية 🏚"){
bot('sendvideo',[
'video'=>"https://t.me/PHP_E/6",
'chat_id'=>$chat_id,
'caption'=>"
$start


$txtfree
",	'parse_mode'=>HTML,
'reply_markup'=>json_encode([
'keyboard'=>[ 
[
['text'=>'القران الكريم صوت'],['text'=>'القران الكريم صوره']
],
[ 
['text'=>'تطبيق القران الكريم']],

] 
]) 
]); 
}

if($text == "/start"){
bot('sendvideo',[
'video'=>"https://t.me/PHP_E/6",
'chat_id'=>$chat_id,
'caption'=>"$start


$txtfree
",
	'parse_mode'=>HTML,
'reply_markup'=>json_encode([
'keyboard'=>[ 
[
['text'=>'القران الكريم صوت'],['text'=>'القران الكريم صوره']
],
[ 
['text'=>'تطبيق القران الكريم']
],
] 
]) 
]); 
}

//////
if($text == "سورة الفاتحة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/3",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/15",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    سورة الفاتحة من أعظم سور كتاب الله عزّ وجل، وقد وردت في فَضلها الكثير من الأحاديث النبويّة الصحيحة، ومنها ما رُوي عَنْ أَبِي سَعِيدِ بْنِ المعلَّى رَضِيَ اللَّهُ عَنْهُ قَالَ: (كُنْتُ أُصَلِّي فَدَعَانِي رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ فَلَمْ أُجِبْهُ حَتَّى صلّيت، قال: فأتيته، فَقَالَ: مَا مَنَعَكَ أَنْ تَأْتِيَنِي؟ قَالَ: قُلْتُ يَا رَسُولَ اللَّهِ إِنِّي كُنْتُ أُصَلِّي، قَالَ: ألم يقل الله تعالى: {يَا أَيُّهَا الَّذِينَ آمَنُواْ اسْتَجِيبُوا للَّهِ وَلِلرَّسُولِ إِذَا دَعَاكُم لِمَا يُحْيِيكُمْ}؟ ثُمَّ قَالَ: لَأُعَلِّمَنَّكَ أَعْظَمَ سُورَةٍ فِي الْقُرْآنِ قَبْلَ أَنْ تَخْرُجَ مِنَ الْمَسْجِدِ، قَالَ: فَأَخَذَ بِيَدِي فَلَمَّا أَرَادَ أَنْ يَخْرُجَ مِنَ الْمَسْجِدِ قُلْتُ: يَا رَسُولَ اللَّهِ إِنَّكَ قُلْتَ لأعلمنَّك أَعْظَمَ سُورَةٍ فِي الْقُرْآنِ، قَالَ: نَعَمْ {الْحَمْدُ للَّهِ رَبِّ الْعَالَمِينَ} هِيَ السَّبْعُ الْمَثَانِي وَالْقُرْآنُ الْعَظِيمُ الَّذِي أُوتِيتُهُ)،[٢] كما جاء في الحديث القدسي أنّ الله يقول: (قسمت الصلاة بيني وبين عبدي نصفين: نصفها لي ونصفها لعبدي، ولعبدي ما سأل، فإذا قال العبد {الحمد لله رب العالمين} قال الله: حمدني عبدي، وإذا قال: {الرحمن الرحيم} قال الله: أثنى علي عبدي، وإذا قال: {مالك يوم الدين} قال الله: مجدني عبدي أو قال: فوض إلي عبدي، وإذا قال: {إياك نعبد وإياك نستعين} قال: فهذه الآية بيني وبين عبدي نصفين، ولعبدي ما سأل، فإذا قال {اهدنا الصراط المستقيم صراط الذين أنعمت عليهم غير المغضوب عليهم ولا الضالين } قال: فهؤلاء لعبدي ولعبدي ما سأل)،[٣] ومن أهم فضائلها كونها شفاءٌ لكل داءٍ، فعن أبي سعيد - رضي الله عنه قال: إنها شفاءٌ من كل سقم. وقيل: إن موضع الرُّقية والاستشفاء منها (إياك نستعين).[٤]
    
    
    〰️〰️〰️〰️〰️
    "
    ]);
    }

    
    if($text == "سورة البقرة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/5",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/4",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    من فضائل سورة البقرة العديدة أنّ الشيطان يَنفر من البيت الذي تُقرأ فيه سورة البقرة،[٥] فعن ‏ ‏أبي هريرة ‏ رضي الله عنه ‏أنّ رسول الله ‏ ‏صلى الله عليه وسلم ‏ ‏قال‏: (لا تجعلوا بيوتكم مقابر إن الشيطان ينفر من البيت الذي تقرأ فيه سورة ‏ ‏البقرة)،[٦] وهي بركةٌ في البيت الذي تُقرأ فيه لقوله صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ: (اقرأوا سورة البقرة فإن أخذها بركة وتركها حسرة، ولا يستطيعها البطلة).[٧]
    
    〰️〰️〰️〰️〰️
    
    "
    ]);
    }

    if($text == "سورة آل عمران"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/112",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/5",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    من أهمّ وأبرز فضائل هذه السورة أنّها تُحاجج عن أصحابها؛[٥] فقد روى ‏أبو أمامة الباهلي ‏قال:‏ ‏سمعت رسول الله ‏ ‏صلى الله عليه وسلم ‏ ‏يقول: (‏اقرءوا القرآن فإنه يأتي يوم القيامة شفيعاً لأصحابه اقرءوا الزهراوين ‏البقرة‏ ‏وسورة ‏‏آل ‏عمران ‏ ‏فإنهما تأتيان يوم القيامة كأنهما غمامتان أو كأنهما غيايتان أو كأنهما ‏فرقان ‏من ‏‏طير صواف‏ ‏تحاجان ‏‏عن أصحابهما).[٧]
    
    〰️〰️〰️〰️〰️
   
    "
    ]);
    }
    
    
    if($text == "سورة النساء"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/113",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/7",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
           "
    ]);
    }
    
    
    if($text == "سورة المائدة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/114",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/8",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
           "
    ]);
    }
    
    
    if($text == "سورة الأنعام"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/115",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/9",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
           "
    ]);
    }
    
    
    if($text == "سورة الأعراف"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/116",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/11",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
           "
    ]);
    }
    
    
    if($text == "سورة الأنفال"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/7",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/12",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
           "
    ]);
    }
    
    
    if($text == "سورة التوبة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/117",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/13",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
           "
    ]);
    }
    
    if($text == "سورة يونس"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/8",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/14",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة هود"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/9",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/17",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة يوسف"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/10",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/18",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة الرعد"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/11",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/21",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة إبراهيم"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/12",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/25",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة الحجر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/13",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/29",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة النحل"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/14",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/33",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الإسراء"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/15",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/37",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة الكهف"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/16",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/41",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة مريم"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/17",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/45",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة طه"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/18",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/47",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الأنبياء"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/19",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/49",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة الحج"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/20",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/51",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة المؤمنون"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/21",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/53",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة النور"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/22",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/56",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    سورة النور: الآية رقم 35: ((للَّهُ نُورُ السَّمَاوَاتِ وَالْأَرْضِ ۚ مَثَلُ نُورِهِ كَمِشْكَاةٍ فِيهَا مِصْبَاحٌ ۖ الْمِصْبَاحُ فِي زُجَاجَةٍ ۖ الزُّجَاجَةُ كَأَنَّهَا كَوْكَبٌ دُرِّيٌّ يُوقَدُ مِن شَجَرَةٍ مُّبَارَكَةٍ زَيْتُونَةٍ لَّا شَرْقِيَّةٍ وَلَا غَرْبِيَّةٍ يَكَادُ زَيْتُهَا يُضِيءُ وَلَوْ لَمْ تَمْسَسْهُ نَارٌ ۚ نُّورٌ عَلَىٰ نُورٍ ۗ يَهْدِي اللَّهُ لِنُورِهِ مَن يَشَاءُ ۚ وَيَضْرِبُ اللَّهُ الْأَمْثَالَ لِلنَّاسِ ۗ وَاللَّهُ بِكُلِّ شَيْءٍ عَلِيمٌ)) فأقرأوها واسألوا الله نورها وبركتها.
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الفرقان"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/23",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/58",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الشعراء"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/24",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/60",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة النمل"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/25",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/62",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة القصص"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/26",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/66",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة العنكبوت"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/27",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/66",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الروم"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/28",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/68",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    //=====================//
    # Ch: @OOKO0#
    # DEV: @kkfkk#
    # الملف مقدم من قناتي. #
    # لصير فاشل وتغير حقوق #
    //====================//
    if($text == "سورة لقمان"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/29",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/70",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة السجدة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/30",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/72",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الأحزاب"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/31",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/74",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة سبأ"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/32",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/76",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة فاطر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/33",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/78",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة يس"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/34",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/80",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الصافات"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/35",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/82",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة ص"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/36",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/84",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة الزمر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/37",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/86",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة غافر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/38",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/88",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة فصلت"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/39",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/91",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الشورى"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/40",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/93",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الزخرف"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/41",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/95",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    //=====================//
    # ch: @OOKO0#
    # By: @kkfkk#
    # الملف مقدم من قناتي. #
    # لصير فاشل وتغير حقوق #
    //====================//
    if($text == "سورة الدخان"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/42",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/97",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الجاثية"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/43",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/99",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الأحقاف"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/44",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/101",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة محمد"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/46",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/103",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الفتح"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/48",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/105",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الحجرات"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/45",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/107",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة ق"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/47",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    //=====================//
    # ch: @OOKO0#
    # By: @kkfkk#
    # الملف مقدم من قناتي. #
    # لصير فاشل وتغير حقوق #
    //====================//
    if($text == "سورة الذاريات"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/50",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/111",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الطور"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/49",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/115",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة النجم"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/51",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة القمر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/52",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/121",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الرحمن"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/53",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/123",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الواقعة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/54",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/125",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الحديد"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/55",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/127",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة المجادلة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/56",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/129",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الممتحنة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/57",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/133",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة الصف"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/58",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/135",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الجمعة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/59",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/137",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة المنافقون"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/60",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/139",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة التغابن"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/61",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/141",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الطلاق"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/62",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/143",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الملك"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/64",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/147",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة التحريم"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/63",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/145",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة القلم"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/65",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/149",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الحاقة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/66",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة المعارج"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/67",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/152",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة نوح"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/68",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/154",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الجن"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/69",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/156",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة المزمل"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/70",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/158",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة المدثر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/71",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/160",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة القيامة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/72",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/162",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة الإنسان"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/73",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/164",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة المرسلات"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/74",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/166",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة النبأ"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/75",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/168",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة النازعات"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/76",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/170",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة عبس"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/77",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/172",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة التكوير"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/78",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/174",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة الإنفطار"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/79",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة المطففين"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/80",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/178",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الإنشقاق"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/81",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/180",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة البروج"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/82",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/302",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الطارق"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/83",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/304",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الأعلى"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/84",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/306",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الغاشية"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/85",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/308",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الفجر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/86",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/310",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة البلد"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/87",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/312",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الشمس"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/88",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/314",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الليل"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/89",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/316",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الضحى"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/90",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/318",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الشرح"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/91",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/320",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة التين"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/119",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/322",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة العلق"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/93",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/324",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة القدر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/94",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/326",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة البينة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/95",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/330",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الزلزلة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/96",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/328",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة العاديات"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/97",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/332",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
    if($text == "سورة القارعة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/98",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/334",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
            "
    ]);
    }
    
    if($text == "سورة التكاثر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/99",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/336",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة العصر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/100",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/338",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الهمزة"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/101",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/340",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الفيل"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/102",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/342",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة قريش"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/103",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/344",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الماعون"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/104",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/346",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الكوثر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/105",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/348",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الكافرون"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/106",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/350",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة النصر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/107",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/352",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة المسد"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/108",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/354",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الإخلاص"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/109",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/356",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الفلق"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/110",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/358",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    if($text == "سورة الناس"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/111",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/bot_qran/360",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    if($text == "سورة الحشر"){
    bot( sendaudio ,[
     chat_id =>$chat_id, 
     audio =>"https://t.me/mroan7/118",
     reply_to_message_id =>$message->message_id, 
    ]);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    
    〰️〰️〰️〰️〰️
        "
    ]);
    }
    
    
  
    
    
    if($text ==  '/azka' ){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     text => "أهلا بــــــك في بــــوت أذكار الصباح والمساء 
     
     البوت مطور بطريقة مميزة ليسهل عليك قراءة الأذكار
    "
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'أذكــار الـصـبـاح 🌤',callback_data => 'c' ]],
    [['text'=> 'أذكــار الـمـسـاء 🌖' ,callback_data => 'e']] ,
    
        
        
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    
    if($data ==  'c' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '▪️أَعُوذُ بِاللهِ مِنْ الشَّيْطَانِ الرَّجِيمِ
     
     ⏺اللّهُ لاَ إِلَـهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ نَوْمٌ لَّهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَن ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ وَلاَ يُحِيطُونَ بِشَيْءٍ مِّنْ عِلْمِهِ إِلاَّ بِمَا شَاء وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالأَرْضَ وَلاَ يَؤُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ الْعَظِيمُ.[آية الكرسى - البقرة 255]. 
     🔹مرة واحدة ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c1' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c1' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '➖بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     
     ⏺قُلْ هُوَ ٱللَّهُ أَحَدٌ، ٱللَّهُ ٱلصَّمَدُ، لَمْ يَلِدْ وَلَمْ يُولَدْ، وَلَمْ يَكُن لَّهُۥ كُفُوًا أَحَدٌۢ.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c2' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '➖بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     
     ⏺قُلْ أَعُوذُ بِرَبِّ ٱلْفَلَقِ، مِن شَرِّ مَا خَلَقَ، وَمِن شَرِّ غَاسِقٍ إِذَا وَقَبَ، وَمِن شَرِّ ٱلنَّفَّٰثَٰتِ فِى ٱلْعُقَدِ، وَمِن شَرِّ حَاسِدٍ إِذَا حَسَدَ. 
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c3' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '➖بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     
     ⏺قُلْ أَعُوذُ بِرَبِّ ٱلنَّاسِ، مَلِكِ ٱلنَّاسِ، إِلَٰهِ ٱلنَّاسِ، مِن شَرِّ ٱلْوَسْوَاسِ ٱلْخَنَّاسِ، ٱلَّذِى يُوَسْوِسُ فِى صُدُورِ ٱلنَّاسِ، مِنَ ٱلْجِنَّةِ وَٱلنَّاسِ.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c4' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c4' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '
     🔸أَصْـبَحْنا وَأَصْـبَحَ المُـلْكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على كلّ شَيءٍ قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذا اليوم وَخَـيرَ ما بَعْـدَه ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذا اليوم وَشَرِّ ما بَعْـدَه، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ الْكِـبَر ، رَبِّ أَعـوذُ بِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في القَـبْر. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c5' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c5' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '
     🔸اللّهـمَّ أَنْتَ رَبِّـي لا إلهَ إلاّ أَنْتَ ، خَلَقْتَنـي وَأَنا عَبْـدُك ، وَأَنا عَلـى عَهْـدِكَ وَوَعْـدِكَ ما اسْتَـطَعْـت ، أَعـوذُبِكَ مِنْ شَـرِّ ما صَنَـعْت ، أَبـوءُ لَـكَ بِنِعْـمَتِـكَ عَلَـيَّ وَأَبـوءُ بِذَنْـبي فَاغْفـِرْ لي فَإِنَّـهُ لا يَغْـفِرُ الذُّنـوبَ إِلاّ أَنْتَ . ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c6' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c6' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔸رَضيـتُ بِاللهِ رَبَّـاً وَبِالإسْلامِ ديـناً وَبِمُحَـمَّدٍ صلى الله عليه وسلم نَبِيّـاً. 
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c7' ]]
    ]
    ])
    ]);
    }
    
    
    
    if($data ==  'c7' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '
     🔸حَسْبِـيَ اللّهُ لا إلهَ إلاّ هُوَ عَلَـيهِ تَوَكَّـلتُ وَهُوَ رَبُّ العَرْشِ العَظـيم. 
     🔹7 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c8' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c8' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘بِسـمِ اللهِ الذي لا يَضُـرُّ مَعَ اسمِـهِ شَيءٌ في الأرْضِ وَلا في السّمـاءِ وَهـوَ السّمـيعُ العَلـيم.    
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c9' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c9' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘اللّهُـمَّ بِكَ أَصْـبَحْنا وَبِكَ أَمْسَـينا ، وَبِكَ نَحْـيا وَبِكَ نَمُـوتُ وَإِلَـيْكَ النُّـشُور' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c10' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c10' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘أَصْبَـحْـنا عَلَى فِطْرَةِ الإسْلاَمِ، وَعَلَى كَلِمَةِ الإِخْلاَصِ، وَعَلَى دِينِ نَبِيِّنَا مُحَمَّدٍ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ، وَعَلَى مِلَّةِ أَبِينَا إبْرَاهِيمَ حَنِيفاً مُسْلِماً وَمَا كَانَ مِنَ المُشْرِكِينَ. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي' , callback_data => 'c11' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c11' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '
     🔘سُبْحـانَ اللهِ وَبِحَمْـدِهِ عَدَدَ خَلْـقِه ، وَرِضـا نَفْسِـه ، وَزِنَـةَ عَـرْشِـه ، وَمِـدادَ كَلِمـاتِـه.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c12' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c12' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘اللّهُـمَّ عافِـني في بَدَنـي ، اللّهُـمَّ عافِـني في سَمْـعي ، اللّهُـمَّ عافِـني في بَصَـري ، لا إلهَ إلاّ أَنْـتَ اللّهُـمَّ إِنّـي أَعـوذُ بِكَ مِنَ الْكُـفر ، وَالفَـقْر ، وَأَعـوذُ بِكَ مِنْ عَذابِ القَـبْر ، لا إلهَ إلاّ أَنْـتَ.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c13' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c13' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '
     🔘اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في الدُّنْـيا وَالآخِـرَة ، اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في ديني وَدُنْـيايَ وَأهْـلي وَمالـي ، اللّهُـمَّ اسْتُـرْ عـوْراتي وَآمِـنْ رَوْعاتـي ، اللّهُـمَّ احْفَظْـني مِن بَـينِ يَدَيَّ وَمِن خَلْفـي وَعَن يَمـيني وَعَن شِمـالي ، وَمِن فَوْقـي ، وَأَعـوذُ بِعَظَمَـتِكَ أَن أُغْـتالَ مِن تَحْتـي. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c14' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c14' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘يَا حَيُّ يَا قيُّومُ بِرَحْمَتِكَ أسْتَغِيثُ أصْلِحْ لِي شَأنِي كُلَّهُ وَلاَ تَكِلُنِي إلَى نَفْسِي طَـرْفَةَ عَيْنٍ.' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c15' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c15' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘اللّهُـمَّ عالِـمَ الغَـيْبِ وَالشّـهادَةِ فاطِـرَ السّماواتِ وَالأرْضِ رَبَّ كـلِّ شَـيءٍ وَمَليـكَه ، أَشْهَـدُ أَنْ لا إِلـهَ إِلاّ أَنْت ، أَعـوذُ بِكَ مِن شَـرِّ نَفْسـي وَمِن شَـرِّ الشَّيْـطانِ وَشِـرْكِه ، وَأَنْ أَقْتَـرِفَ عَلـى نَفْسـي سوءاً أَوْ أَجُـرَّهُ إِلـى مُسْـلِم. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c17' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c17' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘أَعـوذُ بِكَلِمـاتِ اللّهِ التّـامّـاتِ مِنْ شَـرِّ ما خَلَـق.
     🔹3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c18' ]]
    ]
    ])
    ]);
    }
    
    
    if($data ==  'c18' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘اللَّهُمَّ صَلِّ وَسَلِّمْ وَبَارِكْ على نَبِيِّنَا مُحمَّد.
     ✔️غير مقيد بعدد' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c19' ]]
    ]
    ])
    ]);
    }
    if($data ==  'c19' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => '🔘اللَّهُمَّ إِنَّا نَعُوذُ بِكَ مِنْ أَنْ نُشْرِكَ بِكَ شَيْئًا نَعْلَمُهُ ، وَنَسْتَغْفِرُكَ لِمَا لَا نَعْلَمُهُ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'c20' ]]
    ]
    ])
    ]);
    }
    
    if($data ==  'c20' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     
    text => 
     
     "تـمــ الإنــتــــهـــاء بــحـــمــــد الــلــه
     
     ارسل /start للعودة للقائمة الرئيسية
     "
     
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [["text" => "قناتنا" , "url"=> "t.me/OOKO0"]]
    
    ]
    ])
    ]);
    }
    
    
    
    
    
    
    
    if($data ==  'e' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أَعُوذُ بِاللهِ مِنْ الشَّيْطَانِ الرَّجِيمِ
     اللّهُ لاَ إِلَـهَ إِلاَّ هُوَ الْحَيُّ الْقَيُّومُ لاَ تَأْخُذُهُ سِنَةٌ وَلاَ نَوْمٌ لَّهُ مَا فِي السَّمَاوَاتِ وَمَا فِي الأَرْضِ مَن ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلاَّ بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ وَلاَ يُحِيطُونَ بِشَيْءٍ مِّنْ عِلْمِهِ إِلاَّ بِمَا شَاء وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالأَرْضَ وَلاَ يَؤُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ الْعَظِيمُ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'e1' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e1' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     قُلْ هُوَ ٱللَّهُ أَحَدٌ، ٱللَّهُ ٱلصَّمَدُ، لَمْ يَلِدْ وَلَمْ يُولَدْ، وَلَمْ يَكُن لَّهُۥ كُفُوًا أَحَدٌۢ 
     3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e2' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e2' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     قُلْ أَعُوذُ بِرَبِّ ٱلْفَلَقِ، مِن شَرِّ مَا خَلَقَ، وَمِن شَرِّ غَاسِقٍ إِذَا وَقَبَ، وَمِن شَرِّ ٱلنَّفَّٰثَٰتِ فِى ٱلْعُقَدِ، وَمِن شَرِّ حَاسِدٍ إِذَا حَسَدَ. 
     3 مرات'
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e3' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e3' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'بِسْمِ اللهِ الرَّحْمنِ الرَّحِيم
     قُلْ أَعُوذُ بِرَبِّ ٱلنَّاسِ، مَلِكِ ٱلنَّاسِ، إِلَٰهِ ٱلنَّاسِ، مِن شَرِّ ٱلْوَسْوَاسِ ٱلْخَنَّاسِ، ٱلَّذِى يُوَسْوِسُ فِى صُدُورِ ٱلنَّاسِ، مِنَ ٱلْجِنَّةِ وَٱلنَّاسِ
     3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e4' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e4' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أَمْسَيْـنا وَأَمْسـى المـلكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على كلّ شَيءٍ قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذهِ اللَّـيْلَةِ وَخَـيرَ ما بَعْـدَهـا ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذهِ اللَّـيْلةِ وَشَرِّ ما بَعْـدَهـا ، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ الْكِـبَر ، رَبِّ أَعـوذُ بِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في القَـبْر. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e5' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e5' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهـمَّ أَنْتَ رَبِّـي لا إلهَ إلاّ أَنْتَ ، خَلَقْتَنـي وَأَنا عَبْـدُك ، وَأَنا عَلـى عَهْـدِكَ وَوَعْـدِكَ ما اسْتَـطَعْـت ، أَعـوذُبِكَ مِنْ شَـرِّ ما صَنَـعْت ، أَبـوءُ لَـكَ بِنِعْـمَتِـكَ عَلَـيَّ وَأَبـوءُ بِذَنْـبي فَاغْفـِرْ لي فَإِنَّـهُ لا يَغْـفِرُ الذُّنـوبَ إِلاّ أَنْتَ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e6' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e6' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'رَضيـتُ بِاللهِ رَبَّـاً وَبِالإسْلامِ ديـناً وَبِمُحَـمَّدٍ صلى الله عليه وسلم نَبِيّـاً. 3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e7' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e7' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'حَسْبِـيَ اللّهُ لا إلهَ إلاّ هُوَ عَلَـيهِ تَوَكَّـلتُ وَهُوَ رَبُّ العَرْشِ العَظـيم.   7 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e8' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e8' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'بِسـمِ اللهِ الذي لا يَضُـرُّ مَعَ اسمِـهِ شَيءٌ في الأرْضِ وَلا في السّمـاءِ وَهـوَ السّمـيعُ العَلـيم. 3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e9' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e9' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهُـمَّ بِكَ أَمْسَـينا وَبِكَ أَصْـبَحْنا، وَبِكَ نَحْـيا وَبِكَ نَمُـوتُ وَإِلَـيْكَ الْمَصِيرُ.' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻' , callback_data => 'e10' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e10' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أَمْسَيْنَا عَلَى فِطْرَةِ الإسْلاَمِ، وَعَلَى كَلِمَةِ الإِخْلاَصِ، وَعَلَى دِينِ نَبِيِّنَا مُحَمَّدٍ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ، وَعَلَى مِلَّةِ أَبِينَا إبْرَاهِيمَ حَنِيفاً مُسْلِماً وَمَا كَانَ مِنَ المُشْرِكِينَ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e11' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e11' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهُـمَّ عافِـني في بَدَنـي ، اللّهُـمَّ عافِـني في سَمْـعي ، اللّهُـمَّ عافِـني في بَصَـري ، لا إلهَ إلاّ أَنْـتَ.  اللّهُـمَّ إِنّـي أَعـوذُ بِكَ مِنَ الْكُـفر ، وَالفَـقْر ، وَأَعـوذُ بِكَ مِنْ عَذابِ القَـبْر لا إلهَ إلاّ أَنْـتَ
     3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e12' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e12' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في الدُّنْـيا وَالآخِـرَة ، اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في ديني وَدُنْـيايَ وَأهْـلي وَمالـي اللّهُـمَّ اسْتُـرْ عـوْراتي وَآمِـنْ رَوْعاتـي ، اللّهُـمَّ احْفَظْـني مِن بَـينِ يَدَيَّ وَمِن خَلْفـي وَعَن يَمـيني وَعَن شِمـالي ، وَمِن فَوْقـي وَأَعـوذُ بِعَظَمَـتِكَ أَن أُغْـتالَ مِن تَحْتـي. ' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e13' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e13' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'يَا حَيُّ يَا قيُّومُ بِرَحْمَتِكَ أسْتَغِيثُ أصْلِحْ لِي شَأنِي كُلَّهُ وَلاَ تَكِلُنِي إلَى نَفْسِي طَـرْفَةَ عَيْنٍ. 3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e14' ]]
    ]
    ])
    ]);
    }if($data ==  'e14' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللّهُـمَّ عالِـمَ الغَـيْبِ وَالشّـهادَةِ فاطِـرَ السّماواتِ وَالأرْضِ رَبَّ كـلِّ شَـيءٍ وَمَليـكَه ، أَشْهَـدُ أَنْ لا إِلـهَ إِلاّ أَنْت ، أَعـوذُ بِكَ مِن شَـرِّ نَفْسـي وَمِن شَـرِّ الشَّيْـطانِ وَشِـرْكِه ، وَأَنْ أَقْتَـرِفَ عَلـى نَفْسـي سوءاً أَوْ أَجُـرَّهُ إِلـى مُسْـلِم' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e15' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e15' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أَعـوذُ بِكَلِمـاتِ اللّهِ التّـامّـاتِ مِنْ شَـرِّ ما خَلَـق
     3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e16' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e16' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'اللَّهُمَّ صَلِّ وَسَلِّمْ وَبَارِكْ على نَبِيِّنَا مُحمَّد.
     غير مقيد بعدد' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e17' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e17' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'أسْتَغْفِرُ اللهَ َ الَّذِي لاَ إلَهَ إلاَّ هُوَ، الحَيُّ القَيُّومُ، وَأتُوبُ إلَيهِ. 3 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e19' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e19' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'لَا إلَه إلّا اللهُ وَحْدَهُ لَا شَرِيكَ لَهُ، لَهُ الْمُلْكُ وَلَهُ الْحَمْدُ وَهُوَ عَلَى كُلُّ شَيْءِ قَدِيرِ. 10 مرات' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e20' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e20' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     'text' => 'سُبْحـانَ اللهِ وَبِحَمْـدِهِ.100 مرة' 
     ,
     
     reply_markup =>json_encode([
     inline_keyboard =>[
    [[ 'text' => 'الـتـالـي 🌻 ' , callback_data => 'e21' ]]
    ]
    ])
    ]);
    }
    if($data ==  'e21' ){
    bot( editMessageText ,[
     chat_id =>$chat_id,
     'message_id'=>$message_id,
     
     text => 
     
     "تـمــ الإنــتــــهـــاء بــحـــمــــد الــلــه
     
     ارسل /start للعودة للقائمة الرئيسية
     "
     
     ,
    
    ]);
    }

if($text == "تطبيق القران الكريم" or $text == "تطبيق القران"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/Qran00/269",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "اذكار الصباح والمساء" or $text == "اذكار الصباح والمساء"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"أذكار الصباح والمساء 👇
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
بسم الله الرحمن الرحيم 
 اللَّهُ لَا إِلَهَ إِلَّا هُوَ الْحَيُّ الْقَيُّومُ لَا تَأْخُذُهُ سِنَةٌ وَلَا نَوْمٌ لَهُ مَا فِي السَّمَوَاتِ وَمَا فِي الْأَرْضِ مَنْ ذَا الَّذِي يَشْفَعُ عِنْدَهُ إِلَّا بِإِذْنِهِ يَعْلَمُ مَا بَيْنَ أَيْدِيهِمْ وَمَا خَلْفَهُمْ وَلَا يُحِيطُونَ بِشَيْءٍ مِنْ عِلْمِهِ إِلَّا بِمَا شَاءَ وَسِعَ كُرْسِيُّهُ السَّمَاوَاتِ وَالْأَرْضَ وَلَا يَئُودُهُ حِفْظُهُمَا وَهُوَ الْعَلِيُّ الْعَظِيمُ
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
بسم الله الرحمن الرحيم 
 قُلْ هُوَ اللَّهُ أَحَدٌ (1) اللَّهُ الصَّمَدُ (2) لَمْ يَلِدْ وَلَمْ يُولَدْ (3) وَلَمْ يَكُنْ لَهُ كُفُوًا أَحَدٌ (4)
3مرات
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
بسم الله الرحمن الرحيم 
 قُلْ أَعُوذُ بِرَبِّ الْفَلَقِ (1) مِنْ شَرِّ مَا خَلَقَ (2) وَمِنْ شَرِّ غَاسِقٍ إِذَا وَقَبَ (3) وَمِنْ شَرِّ النَّفَّاثَاتِ فِي الْعُقَدِ (4) وَمِنْ شَرِّ حَاسِدٍ إِذَا حَسَدَ (5)
3مرات
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
بسم الله الرحمن الرحيم 
 قُلْ أَعُوذُ بِرَبِّ النَّاسِ (1) مَلِكِ النَّاسِ (2) إِلَهِ النَّاسِ (3) مِنْ شَرِّ الْوَسْوَاسِ الْخَنَّاسِ (4) الَّذِي يُوَسْوِسُ فِي صُدُورِ النَّاسِ (5) مِنَ الْجِنَّةِ وَالنَّاسِ (6)
3مرات
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
اللّهـمَّ أَنْتَ رَبِّـي لا إلهَ إلاّ أَنْتَ ، خَلَقْتَنـي وَأَنا عَبْـدُك ، وَأَنا عَلـى عَهْـدِكَ وَوَعْـدِكَ ما اسْتَـطَعْـت ، أَعـوذُبِكَ مِنْ شَـرِّ ما صَنَـعْت ، أَبـوءُ لَـكَ بِنِعْـمَتِـكَ عَلَـيَّ وَأَبـوءُ بِذَنْـبي فَاغْفـِرْ لي فَإِنَّـهُ لا يَغْـفِرُ الذُّنـوبَ إِلاّ أَنْتَ .-------↯
من قالها من النهار موقنا بها. فمات من يومه قبل ان يمسي . فهو من اهل الجنة .وكذلك من قالها في المساء
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في الدُّنْـيا وَالآخِـرَة ، اللّهُـمَّ إِنِّـي أسْـأَلُـكَ العَـفْوَ وَالعـافِـيةَ في ديني وَدُنْـيايَ وَأهْـلي وَمالـي ، اللّهُـمَّ اسْتُـرْ عـوْراتي وَآمِـنْ رَوْعاتـي ، اللّهُـمَّ احْفَظْـني مِن بَـينِ يَدَيَّ وَمِن خَلْفـي وَعَن يَمـيني وَعَن شِمـالي ، وَمِن فَوْقـي ، وَأَعـوذُ بِعَظَمَـتِكَ أَن أُغْـتالَ مِن تَحْتـي .-----↯
ويقال عند النوم ايضا.
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
أَصْـبَحْنا وَأَصْـبَحَ المُـلْكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على كلّ شَيءٍ قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذا اليوم وَخَـيرَ ما بَعْـدَه ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذا اليوم وَشَرِّ ما بَعْـدَه، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ الْكِـبَر ، رَبِّ أَعـوذُبِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في القَـبْر.
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
أَمْسَيْـنا وَأَمْسـى المـلكُ لله وَالحَمدُ لله ، لا إلهَ إلاّ اللّهُ وَحدَهُ لا شَريكَ لهُ، لهُ المُـلكُ ولهُ الحَمْـد، وهُوَ على كلّ شَيءٍ قدير ، رَبِّ أسْـأَلُـكَ خَـيرَ ما في هـذهِ اللَّـيْلَةِ وَخَـيرَ ما بَعْـدَهـا ، وَأَعـوذُ بِكَ مِنْ شَـرِّ ما في هـذهِ اللَّـيْلةِ وَشَرِّ ما بَعْـدَهـا ، رَبِّ أَعـوذُبِكَ مِنَ الْكَسَـلِ وَسـوءِ الْكِـبَر ، رَبِّ أَعـوذُ بِكَ مِنْ عَـذابٍ في النّـارِ وَعَـذابٍ في القَـبْر.
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
بِسـمِ اللهِ الذي لا يَضُـرُّ مَعَ اسمِـهِ شَيءٌ في الأرْضِ وَلا في السّمـاءِ وَهـوَ السّمـيعُ العَلـيم ----↯
3مرات
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ
أَعـوذُبِكَلِمـاتِ اللّهِ التّـامّـاتِ مِنْ شَـرِّ ما خَلَـق .----↯
3مرات
ــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــــ",
]);}            
?>