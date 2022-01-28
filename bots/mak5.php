<?php#*wataw*
#البصمات

if($start=="non"){
$start="في بوت مشاركه الاصوات انلاين 
لإضافة بصمة صوتية جديده قم بارسالها ..
";

}


 if($text == '/start'){
bot('sendMessage',[
'chat_id'=>$update->message->chat->id,
'text'=>"- اهلا بك يا 👋🏻 ؛ $name
$start

$txtfree
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'parse_mode'=>"html",

	]);
 }
$voice = file_get_contents("data/$from_id.txt");
$made = file_get_contents("data/$from_id-made.txt");
if($message->voice){
mkdir("data");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم حفظ البصمة
قم الان بارسال عنوان الصوتيه",
'relpy_to_message_id'=> $message_id,
]);
file_put_contents("data/$from_id.txt",$message->voice->file_id);
file_put_contents("data/$from_id-made.txt","voice");
}


if($made == "voice"){
if($text){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم اضافه البصمه الان",
]);
$info = json_decode(file_get_contents('data/info.json'),true);
$info["info"][$text][] = $voice;
file_put_contents('data/info.json', json_encode($info));

  $hhhhr = explode("\n", file_get_contents('data/red.txt'));
 if(!in_array($text,$hhhhr)){
 file_put_contents("data/red.txt",$text."\n", FILE_APPEND);
 }
 unlink("data/$from_id-made.txt"); 
unlink("data/$from_id.txt");
}}
$info = json_decode(file_get_contents('data/info.json'),true);
if($text){
 bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>$info[$text]["voice"],
]);}




////////////////

if($text_inline){ 

$rand=$text_inline;
$info = json_decode(file_get_contents('data/info.json'),true);
$array=$info["info"][$rand];

for($l=0;$l<count($array);$l++){

$file_id=$info["info"][$rand][$l];
if($file_id!=null){
$s++;
        $res[] = [
                'type'=>'voice', 
                'id'=>base64_encode(rand(5,555)), 
               'thumb_url'=>"https://t.me/trachee/113403", 
'description'=>"$rand", 
'title' => "$rand", 
'voice_file_id'=>$file_id,
          ];

    }
    if($s>=20){break;}
    }
    
    
	  	$r = json_encode($res);
	  	file_put_contents("r.txt",$r);
    bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'cache_time'=>'0',
            'results' =>($r)
        ]);





}
////////////////

if($text_inline == ''){
$s=0;
 	 $hhhhr = explode("\n", file_get_contents('data/red.txt'));
	  	 $red=shuffle($hhhhr);
	  	 for($i=0;$i<count($hhhhr);$i++){
	  	 
$rand=$hhhhr[$i];
$info = json_decode(file_get_contents('data/info.json'),true);
$array=$info["info"][$rand];

for($l=0;$l<count($array);$l++){

$file_id=$info["info"][$rand][$l];
if($file_id!=null){
$s++;
        $res[] = [
                'type'=>'voice', 
                'id'=>base64_encode(rand(5,555)), 
               'thumb_url'=>"https://t.me/trachee/113403", 
'description'=>"$rand", 
'title' => "$rand", 
'voice_file_id'=>$file_id,
          ];

    }
    if($s>=20){break;}
    }
    
    }
	  	$r = json_encode($res);
	  	file_put_contents("r.txt",$r);
    bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'cache_time'=>'0',
            'results' =>($r)
        ]);







}
