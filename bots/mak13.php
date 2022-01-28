<?php#*wataw*
#محول صيغ 
if($start=="non"){
$start="
        
        بوت تحويل الصيغ تستطيع تحويل جميع صيغ الميديا من خلال البوت      
";

}

$jsonfrom = json_decode(file_get_contents("data/$from_id.json"),true);
if (!file_exists("data/$from_id.json")) {
	$put = [];
	file_put_contents("data/$from_id.json", json_encode($put));
}

$m=$jsonfrom["info"]["amr"];


if (!is_dir('data')) {
	mkdir('data');
}
















if($text=="/start" or strpos($data,'_')!== false ){

	$jsonfrom["info"]["amr"]="$data";
file_put_contents("data/$from_id.json", json_encode($jsonfrom));

}
if ($text == '/start') {

	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"اهلا بك عزيزي $name 
		$start
		
		$txtfree
		",
	'parse_mode'=>HTML,
		'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🎶┇قسم الصوت ','callback_data'=>'g_mp3']],
[['text'=>'🎥┇قسم الفديو','callback_data'=>'g_video']],
[['text'=>'🎆┇قسم الصور','callback_data'=>'g_photo']],
[['text'=>'🔱┇قسم تغيير الحقوق','callback_data'=>'audio']],

]    
])
		
	]);
	$jsonfrom["info"]["amr"]="null";
file_put_contents("data/$from_id.json", json_encode($jsonfrom));
}
if ($data == 'hoooome') {
		bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>"اهلا بك عزيزي $name 
		$start
		
		$txtfree
		",
	'parse_mode'=>HTML,
		'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🎶┇قسم الصوت ','callback_data'=>'g_mp3']],
[['text'=>'🎥┇قسم الفديو','callback_data'=>'g_video']],
[['text'=>'🎆┇قسم الصور','callback_data'=>'g_photo']],
[['text'=>'🔱┇قسم تغيير الحقوق','callback_data'=>'audio']],
]    
])
		
	]);
}
if ($data == 'g_photo') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'☑️┇تم اختبار قسم ؛ 🎆┇قسم الصور
🔽┇يمكنك اختيار نوع التحويل',

			'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'من ملصق الى صورة ','callback_data'=>'m_ph']],
[['text'=>'من صورة الى ملصق','callback_data'=>'ph_m']],
[['text'=>'الصفحة الرئيسية  ','callback_data'=>'hoooome']],
 
]    
])
		
	
	]);
	
}
if ($data == 'ph_m') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎆┇الان ارسل الصوره لتحويلها الى ملصق',
	'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_photo']],
 
]    
])
	]);

}
if ($message->photo and $m == 'ph_m') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->photo[1]->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.png",file_get_contents($file));
	    bot('sendsticker',[
	    	'chat_id'=>$chat_id,
	    	'sticker'=>new CURLFile("data/$chat_id.png")
	    ]);
	    unlink("data/$chat_id.png");
}
if ($data == 'm_ph') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'🎆┇الان ارسل الملصق لتحويله الى صوره',
		'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_photo']],
 
]    
])
	]);

}
if ($message->sticker and $m == 'm_ph') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->sticker->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.jpg",file_get_contents($file));
	    bot('sendphoto',[
	    	'chat_id'=>$chat_id,
	    	'photo'=>new CURLFile("data/$chat_id.jpg")
	    ]);
	    unlink("data/$chat_id.jpg");
}
if ($data == 'g_video') {
		bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'☑️┇تم اختبار قسم ؛ 🎥┇قسم الفديو
🔽┇يمكنك اختيار نوع التحويل',

		'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'من فيديو الى موسيقى','callback_data'=>'v_mp']],
[['text'=>'من فيديو الى بصمة','callback_data'=>'v_p']],

[['text'=>'من فيديو الى فيديو نوت','callback_data'=>'v_vn']],
[['text'=>'من فيديو الى متحركة','callback_data'=>'v_m']],

[['text'=>'الصفحه الرئيسية ','callback_data'=>'hoooome']],
 
]    
])
		
	]);
}

if ($data == 'v_mp') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎥┇الان ارسل الفديو لتحويله الى موسيقى',
		'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_video']],
 
]    
])
	]);
	
}
if ($message->video and $m == 'v_mp') {
$file_id = $update->message->video->file_id;
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.mp3",file_get_contents($file));
	    
bot('sendaudio',[
	    	'chat_id'=>$chat_id,
	    	'audio'=>new CURLFile("data/$chat_id.mp3")
	
]);
	    unlink("data/$chat_id.mp3");
}

if ($data == 'v_p') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎥┇الان ارسل الفيديو لتحويله الى بصمه',
	'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_video']],
 
]    
])
	]);

}
if ($message->video and $m == 'v_p') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.ogg",file_get_contents($file));
	    bot('sendvoice',[
	    	'chat_id'=>$chat_id,
	    	'voice'=>new CURLFile("data/$chat_id.ogg")
	    ]);
	    unlink("data/$chat_id.ogg");
}

if ($data =='v_m') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎥┇الان ارسل الفديو لتحويله الى متحركه',
		'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_video']],
 
]    
])
	]);

}
if ($message->video and $m == 'v_m') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.mp4",file_get_contents($file));
	    bot('senddocument',[
	    	'chat_id'=>$chat_id,
	    	'document'=>new CURLFile("data/$chat_id.mp4")
	    ]);
	    unlink("data/$chat_id.mp4");
}




if ($data == 'v_vn') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎥┇الان ارسل الفديو لتحويله الى فديو نوت
❗️┇يجب ان يكون الفديو مربع',
		'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_video']],
 
]    
])
	]);
	
}
if ($message->video and $m == 'v_vn') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.mp4",file_get_contents($file));
	    bot('sendVideoNote',[
	    	'chat_id'=>$chat_id,
	    	'video_note'=>new CURLFile("data/$chat_id.mp4")
	    ]);
	    unlink("data/$chat_id.mp4");
}

if ($data =='m_v') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎥┇الان ارسل متحركة لتحويلها الى فيديو',
		'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_video']],
 
]    
])
	]);
	
}
if ($message->document and $m == 'm_v') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.mp4",file_get_contents($file));
	    bot('sendvideo',[
	    	'chat_id'=>$chat_id,
	    	'video'=>new CURLFile("data/$chat_id.mp4")
	    ]);
	    unlink("data/$chat_id.mp4");
}

if ($data =='m_vn') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎥┇الان ارسل متحركة لتحويلها الى فيديو نوت',
		'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_video']],
 
]    
])
	]);
	}
if ($message->document and $m == 'm_vn') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.mp4",file_get_contents($file));
	    bot('sendVideoNote',[
	    	'chat_id'=>$chat_id,
	    	'video_note'=>new CURLFile("data/$chat_id.mp4")
	    ]);
	    unlink("data/$chat_id.mp4");
}


if ($data == 'g_mp3') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'☑️┇تم اختبار قسم ؛ 🎶┇قسم الصوت
🔽┇يمكنك اختيار نوع التحويل',
	
			'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'من موسيقى الى بصمة  ','callback_data'=>'mp_p']],
[['text'=>'من بصمة الى موسيقى  ','callback_data'=>'p_mp']],
[['text'=>'من بصمة الى فيديو نوت','callback_data'=>'p_vn']],
[['text'=>'من موسيقى الى فيديو نوت','callback_data'=>'mp_vn']],
[['text'=>'الصفحه الرئيسية ','callback_data'=>'hoooome']],
 
]    
])
	]);
}
if ($data == 'mp_vn') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎶┇الان ارسل موسيقى لتحويلها الى فديو نوت',
			'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_mp3']],
 
]    
])
	]);
	
}
if ($message->audio and $m == 'mp_vn') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->audio->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.mp4",file_get_contents($file));
	    bot('sendVideoNote',[
	    	'chat_id'=>$chat_id,
	    	'video_note'=>new CURLFile("data/$chat_id.mp4")
	    ]);
	    unlink("data/$chat_id.mp4");
}
if ($data == 'p_vn') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎶┇الان ارسل الصوت لتحويله الى فديو نوت',
		'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_mp3']],
 
]    
])
	]);
	
}
if ($message->voice and $m == 'p_vn') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->voice->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.mp4",file_get_contents($file));
	    bot('sendVideoNote',[
	    	'chat_id'=>$chat_id,
	    	'video_note'=>new CURLFile("data/$chat_id.mp4")
	    ]);
	    unlink("data/$chat_id.mp4");
}
if ($data == 'p_mp') {
		bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎶┇الان ارسل البصمة لتحويلها الى موسيقى',
	'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_mp3']],
 
]    
])
	]);
	
}
if ($message->voice and $m == 'p_mp') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->voice->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.mp3",file_get_contents($file));
	    bot('sendaudio',[
	    	'chat_id'=>$chat_id,
	    	'audio'=>new CURLFile("data/$chat_id.mp3")
	    ]);
	    unlink("data/$chat_id.mp3");
}
if ($data == 'mp_p') {
			bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎶┇الان ارسل موسيقى لتحويلها الى بصمة',
	'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'↪ عودة  ','callback_data'=>'g_mp3']],
 
]    
])
	]);

}
if ($message->audio and $m == 'mp_p') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'🕧┇جاري التحويل انتظر قليلا'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->audio->file_id])->result->file_path;
	    file_put_contents("data/$chat_id.ogg",file_get_contents($file));
	    bot('sendvoice',[
	    	'chat_id'=>$chat_id,
	    	'voice'=>new CURLFile("data/$chat_id.ogg")
	    ]);
	    unlink("data/$chat_id.ogg");
}

if($data == 'audio') {
		bot('editmessagetext',[
				'message_id'=>$message_id,
		'chat_id'=>$chat_id,
		'text'=>'🎶 تستطيع من هذا القسم تعديل حقوق المقاطع الصوتية من حيث اسم المقطع والمؤدي والوصف 
		
قم بارسال مقطع صوتي 
		',
	'reply_markup'=>json_encode([
'inline_keyboard'=>[

[['text'=>'↪ عودة  ','callback_data'=>'hoooome']],
 
]    
])
	]);
	$jsonfrom["info"]["amr"]="hogog";

file_put_contents("data/$from_id.json", json_encode($jsonfrom));
	}
	
$audio=$message->audio;


if($audio and $m == "hogog" ){

$file_id = $update->message->audio->file_id;
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"حسنا عزيزي قم بارسال اسم للمقطع الصوتي  ",
]);

$jsonfrom["info"]["amr"]="title";
$jsonfrom["info"]["file_id"]="$file_id";
file_put_contents("data/$from_id.json", json_encode($jsonfrom));
}


if($text and $m == "title" ){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ اسم المقطع 
$text 
قم بإرسال اسم المؤدي ( الفنان - المنشد
 ..الخ )
 
",
]);
$jsonfrom["info"]["amr"]="performer";
$jsonfrom["info"]["title"]="$text";
file_put_contents("data/$from_id.json", json_encode($jsonfrom));
}

if($text and $m == "performer" ){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ اسم المؤدي 
$text 
قم بارسال وصف المقطع ",
]);
$jsonfrom["info"]["amr"]="caption";
$jsonfrom["info"]["performer"]="$text";
file_put_contents("data/$from_id.json", json_encode($jsonfrom));
}
$jsonfrom = json_decode(file_get_contents("data/$from_id.json"),true);
$getfile_id=$jsonfrom["info"]["file_id"];
if($text and $m == "caption" ){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ الوصف  
$text 
جاري تغيير الحقوق انتظر قليلا من فضلك
",
]);
$wathq = json_decode(file_get_contents('https://api.telegram.org/bot'.$token.'/getFile?file_id='.$getfile_id),true);
$wathqpath = $wathq['result']['file_path'];
$wathq_file = 'https://api.telegram.org/file/bot'.$token.'/'.$wathqpath;

file_put_contents('data/'.$from_id.'-wataw'.'.mp3',file_get_contents($wathq_file));

$jsonfrom["info"]["amr"]="get";
$jsonfrom["info"]["caption"]="$text";
file_put_contents("data/$from_id.json", json_encode($jsonfrom));
}
$jsonfrom = json_decode(file_get_contents("data/$from_id.json"),true);
$getaudio=$jsonfrom["info"]["amr"];

$gettitle=$jsonfrom["info"]["title"];
$getperformer=$jsonfrom["info"]["performer"];
$getcaption=$jsonfrom["info"]["caption"];

if( $getaudio == "get" ){

$audio = bot('sendaudio',[
       'chat_id'=>$chat_id,
       'audio'=>new CURLFile('data/'.$from_id.'-wataw'.'.mp3'),
       'performer'=>$getperformer,
       'title'=>$gettitle,
       'caption'=>$getcaption ,
 			]);
 		unlink('data/'.$from_id.'-wataw'.'.mp3');
$jsonfrom["info"]["amr"]="null";
file_put_contents("data/$from_id.json", json_encode($jsonfrom));
}



