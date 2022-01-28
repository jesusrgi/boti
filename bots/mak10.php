<?php#*wataw*
#ترجمة
if($start=="non"){
$start="-اهلا بك عزيزي $name

- قم بارسال النص الذي تريد ترجمته ";

}

$trjson = json_decode(file_get_contents("data/tr.json"),true);
if (!file_exists("data/tr.json")) {
	$put = [];
	file_put_contents("data/tr.json", json_encode($put));
}
if($text=="/start" and $type=="private"){

				bot('sendmessage',[
					'chat_id'=>$chat_id,
				'text'=>"$start

$txtfree",
'parse_mode'=>HTML,
'reply_to_message_id'=>$message_id,


							]);
			}


if($text and $text !="/start" && $text !="/sudo" and !$data and $type=="private"){
$trjson["info"]["$from_id"]['text']=$text;
file_put_contents("data/tr.json", json_encode($trjson));
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"اختر اللغة التي ترجمة النص الخاص بك اليها .. ⚡️",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"الأنكليزية 🇱🇷",'callback_data'=>"trn en"],['text'=>"العربية 🇾🇪",'callback_data'=>"trn ar"]],
                [['text'=>"الروسية 🇸🇰",'callback_data'=>"trn ru"],['text'=>"الفارسية 🇮🇷",'callback_data'=>"trn fa"]],
                [['text'=>"الأيطيالية 🇮🇪",'callback_data'=>"trn it"],['text'=>"اليابانية 🇰🇷",'callback_data'=>"trn ja"]],
                [['text'=>"الصينية 🇨🇳",'callback_data'=>"trn ch"],['text'=>"الألمانية 🇩🇪",'callback_data'=>"trn gr"]],
                [['text'=>"التركية 🇹🇷",'callback_data'=>"trn tr"],['text'=>"الفرنسية 🇫🇷",'callback_data'=>"trn fr"]],
                [['text'=>"الأوزبكية 🇬🇺",'callback_data'=>"trn oz"],['text'=>"الهندية 🇮🇳",'callback_data'=>"trn in"]],
                [['text'=>"الأوكرانية 🇨🇴",'callback_data'=>"trn ok"],['text'=>"التايلاندية 🇨🇷",'callback_data'=>"trn ta"]],
            ]
        ])
        ]);
}
$tentext=$trjson["info"]["$from_id"]['text'];

if(preg_match('/^(trn) (.*)/s', $data)){
$t = str_replace('trn ',"",$data);

bot('EditMessageText',[
'message_id'=>$message_id,
'chat_id'=>$chat_id,
'text'=>"⏳جاري الترجمة انتظر قليلا من فظلك ...",
]);
				
$json = json_decode(file_get_contents("https://alivrx.tk/wataw/Translation/api.php?text=".urlencode($tentext)."&tr=$t"));
$org_lang=$json->Original_Language;
$org_txt=$json->Original_Text;
$txt_after=$json->Text_after_translation;
$tra_lang=$json->translation_Language;
bot('sendmessage',[
 	'chat_id'=>$chat_id,
 	'text'=>"
 	- ستتم الترجمة من : $org_lang
- 	الى : $tra_lang

 	الترجمة : 
`$txt_after`
 	",		
 'parse_mode'=>"MarkDown",
 			]);

}



