<?php#*wataw*
#البلورة السحرية


if($start=="non"){
$start="
❤️| اهلا عزيزي ($name)

🔮| مرحبا بك في بوت البلورة السحرية 

📝| ارسل لي سؤال وساقوم بالاجابة عن الاسئله بنعم أو لا 👀

 ";

}



if($text=="/start" and $type=="private"){

				bot('sendmessage',[
					'chat_id'=>$chat_id,
					'text'=>"$start
					
	$txtfree
",		
'parse_mode'=>HTML,
							]);
			}
			
			$random = array(
			'( نعم ) ', '( لا ) ');
			$random1 = array_rand($random, 1);
			$random2 = array('💜', '💝','❤','💙','💚','💛','💟','💞');
			$random3 = array_rand($random2, 1);
$tx=$random[$random1].$random2[$random3];
if($text and $text !="/start"){
$tt="📝| سؤالي للبلورة كان $text 

🔮| البلورة السحرية تقول $tx";
bot('sendmessage',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$message_id,
'text'=>"📝| سؤالك هو $text 

🔮| البلورة السحرية تقول $tx",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• مشاركة نتائج البلورة السحرية • ",'switch_inline_query'=>$tt]],
]
])
]);
}
if($text_inline!=null){

bot('answerInlineQuery',[ 
            'inline_query_id'=>$update->inline_query->id,     
            'cache_time'=>'0',
            'results' => json_encode([[ 
                'type'=>'article', 
                'id'=>base64_encode(rand(5,555)), 
                'title'=>" اضغط للنشر 
", 
                  'description'=>"$text_inline", 
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"$text_inline"], 
            'reply_markup'=>['inline_keyboard'=>[ 
                [ 
                ['text'=>'• اضغط هنا لاستخدام البلورة 🔮','url'=>"t.me/$usernamebot"] 
                ], 
             ]] 
          ]]) 
        ]);

 





}







