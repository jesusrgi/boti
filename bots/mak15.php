<?php#*wataw*
#همسة

if($start=="non"){
$start="
• اهلا بك عزيزي في بوت الهمسة السرية •
•شـرح استـخدام البـوت \n \n للشخص محدد \n \n @$usernamebot كيف حـالك @WATAW \n \n للكـثر مـن شـخص \n \n @$usernamebot كـيف حـالكم @wataw @wataww @553356775 \n \n شـرح اكـثر علـئ القـناه @mshro7";

}



if ($text == '/start' ){
  bot('sendMessage', [
  'chat_id' => $chat_id, 
 'text'=>"$start

$txtfree",
'parse_mode'=>HTML,
]);
  
  }
  
  



$userjson = json_decode(file_get_contents("data/user.json"),true);
if (!file_exists("data/user.json")) {
	$put = [];
	file_put_contents("data/user.json", json_encode($put));
}
$fromjson = json_decode(file_get_contents("data/$from_id.json"),true);
if (!file_exists("data/$from_id.json")) {
	$put = [];
	file_put_contents("data/$from_id.json", json_encode($put));
}

if($update){
$users=str_replace('@','',$user);
if($users!=null){
$userjson["info"]["$users"]['id']="$from_id";
$userjson["info"]["$users"]['name']="$name";
file_put_contents("data/user.json", json_encode($userjson));
}
}

if ($text_inline==null) { 
    $get=bot('answerInlineQuery',[ 
            'inline_query_id'=>$update->inline_query->id,    
             'cache_time'=>'0',
            'results' => json_encode([[ 
                'type'=>'article', 
                'id'=>base64_encode(rand(5,555)), 
                'title'=>"اكـتب الهمـسه ثم معرف الشـخص او الاشخاص", 
                  'description'=>"@$usernamebot كيف حالك @WATAW \n\n @$usernamebot كيف حـالكم @WATAW @WATAWw @mshro7", 
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"شـرح استـخدام البـوت \n \n للشخص محدد \n \n @$usernamebot كيف حـالك @WATAW \n \n للكـثر مـن شـخص \n \n @$usernamebot كـيف حـالكم @wataw @wataww @553356775 \n \n شـرح اكـثر علـئ القـناه @mshro7"], 
          ]]) 
        ]); 
       
}


elseif ($text_inline and strpos($text_inline,'send')===false and strpos($text_inline,'get')===false  ) { 
if(strpos($text_inline,'@')!==false){
    $ex = explode("@", $text_inline);
    #if($ex)
    $txt=$ex[0];
    $us=str_replace($txt,"", $text_inline);
$co=count($ex);
if($co <= 2){
for($i=1;$i<count($ex);$i++){
$user_for =strtolower($ex[$i]);
$name_user=$userjson["info"]["$user_for"]['name'];
if($name_user!=null){
$l++;
$nn=$nn."\n$l-".$name_user;}
else
{$nn=$nn." @".$user_for;}
}
}else{
$nn=$us;
}

$rand=rand(111111,999999);
mkdir("data/code");
file_put_contents("data/code/$rand.txt","$txt");
$userh=str_replace(' ',"", $us);
    $userh =strtolower($userh);


bot('answerInlineQuery',[ 
            'inline_query_id'=>$update->inline_query->id,     
            'cache_time'=>'0',
            'results' => json_encode([[ 
                'type'=>'article', 
                'id'=>base64_encode(rand(5,555)), 
                'title'=>" 🔐 همسة سرية الى  
{ $nn }

", 
                  'description'=>"هـو فقـط مـن يستطـيع رويـتها", 
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"🔐 همسة سرية الى 
{ $nn }"], 
            'reply_markup'=>['inline_keyboard'=>[ 
                [ 
                ['text'=>'اظـهـار الهمسـه 🔐','callback_data'=>"hams ".$rand.'to'.$userh.'to'.$from_id] 
                ], 
             ]] 
          ]]) 
        ]);

 
}else{

$rand=rand(111111,999999);
mkdir("data/code");
file_put_contents("data/code/$rand.txt","$text_inline");
$userjson = json_decode(file_get_contents("data/user.json"),true);
$fromjson = json_decode(file_get_contents("data/$from_id.json"),true);
$member=$fromjson["info"]["member"];
$member = array_reverse($member);
for($i=0;$i<count($member);$i++){
	  	 $mem=$member[$i];
	  	 
	  	 $name_user=$userjson["info"]["$mem"]['name'];
if($name_user!=null){
$nn=$name_user;
}else{
$nn=$mem;
}

        $res[$i] = [
                'type'=>'article', 
                'id'=>base64_encode(rand(5,555)), 
                'title'=>" 🔐 همسة سرية الى  
{ $nn }

", 
                  'description'=>"هـو فقـط مـن يستطـيع رويـتها", 
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"🔐 همسة سرية الى 
{ $nn }"], 
            'reply_markup'=>['inline_keyboard'=>[ 
                [ 
                ['text'=>'اظـهـار الهمسـه 🔐','callback_data'=>"hams ".$rand.'to'.$mem.'to'.$from_id] 
                ], 
             ]] 
          ];
if($i==5){break;}
    }
	  	$r = json_encode($res);
	  	file_put_contents("r.txt",$r);
    bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'cache_time'=>'0',
            'results' =>($r)
        ]);



} 
}


if(preg_match('/^(hams) (.*)/s', $data)){
$data = str_replace('hams ',"",$data);


$ex = explode("to", $data); 

$rand=$ex[0];
$from=$ex[1];
$custom=$ex[2];
$e=explode("@",$from); 
$user=str_replace("@","",$user);
$txt=file_get_contents("data/code/$rand.txt");

if(in_array($user,$e) or in_array($from_id,$e) or $from_id==$custom or $from_id== $admin){
$mb_str=mb_strlen($txt,"utf-8");
if($mb_str<=200){
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>$txt, 
            'show_alert'=>true 
            ]); 
            }else{
             bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"⚠ المعذرة لايمكنني   عرض رسالة الهمسة هنا الرسالة طويلة جداً لذا ساقوم بارسالها اليك على خاص البوت ", 
            'show_alert'=>true 
            ]); 
            bot('sendMessage',[
  'chat_id'=>$from_id,
  'text'=>"🚩 الهمسة هي : 
  $txt
",
  ]);
            
           }
    } else{ 
   
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            
            'text'=>"الهمسـه ليسـت لـك ", 
            'show_alert'=>true 
            ]); 
    
    } 
    $cjson = json_decode(file_get_contents("data/$custom.json"),true);
$ex2 = explode("@", $from);
for($i=0;$i<count($ex2);$i++){
$user_for =strtolower($ex2[$i]);
if($user_for!=null){
if(!in_array('@'.$user_for,$cjson["info"]["member"])){
$cjson["info"]["member"][]="@$user_for";}
}}
file_put_contents("data/$custom.json", json_encode($cjson));


}




