<?php#*wataw*
#التعليقات


if($start=="non"){
$start="• اهلا بك عزيزي - $name 🔱 •

- في بوت التعليقات ⚜️ يقوم بمساعدتك في الكثير من الامور منها انشاء استفتاء لأي شي لمجموعتك او لقناتك ومشاركتها عبر خاصية الانلاين 🐾 ويمكنك التحكم في الاستفتاء 📨 -

- وهناك الكثير من المميزات ⬇️ -

- الاستخدام السهل 📃 -
- الازرار الشفافة داخل البوت 📪 -
- سرعة التحكم ⏱ -

 - والكثير يمكنك اكتشافها بنفسك ⚠️ -";

}

#$msgs = json_decode(file_get_contents("data/$from_id.json"),true);

if ($text == '/start' ){
  bot('sendMessage', [
  'chat_id' => $chat_id, 
  'text' => "
  $start
  
  $txtfree",
  'parse_mode'=>"html",
 'disable_web_page_preview' => true, 'reply_markup' => json_encode(['inline_keyboard' => [

[['text'=>"صنع منشور",'switch_inline_query'=>'']],
 ]]) ]);
  
  }
  



if (!file_exists("data/msgs.json")) {
    $msgs = array('data/msgs' => array(), );
    file_put_contents("data/msgs.json", json_encode($msgs));
}
if (!file_exists("data/data.json")) {
    $msgs = array();
    file_put_contents("data/data.json", json_encode($msgs));
}
 
$msgs = json_decode(file_get_contents("data/msgs.json"),true);
$dataa = json_decode(file_get_contents("data/data.json"),true);
$msg_id   = $update->callback_query->inline_message_id;
if ($text_inline==null) {
    bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"قم بكتابة المنشور الذي تريد عمل التعليقات له",
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"
."],

          ]])
        ]);
}
elseif ($text_inline) {
    bot('answerInlineQuery',[
            'inline_query_id'=>$update->inline_query->id,    
            'results' => json_encode([[
                'type'=>'article',
                'id'=>base64_encode(rand(5,555)),
                'title'=>"اضغط لارسال المنشور 📩",
             'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"$text_inline
"],
            'reply_markup'=>['inline_keyboard'=>[
                [
                ['text'=>'بدء استقبال التعليقات 📩','callback_data'=>"onpost &--&$from_id&--&$text_inline"]
                ],
             ]]
          ]])
        ]);
}
if(preg_match('/^(onpost) (.*)/s', $data)){


    $ex = explode('&--&', $data);
    if ($ex[0] == 'onpost ' and $ex[1] == $from_id) {
       
        bot('editMessageText',[
            'inline_message_id'=>$msg_id,
            'text'=>$ex[2],
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>'ارسال تعليق 📩','url'=>"https://t.me/$usernamebot?start=$msg_id"]],
               [['text'=>"🔥 اصنع بوتك الخاص",'url'=>"t.me/$user_bot_sudo"]],
                ]])
            ]);
            bot('answerCallbackQuery',[
            'callback_query_id'=>$update->callback_query->id,
            'text'=>"✅ تم بداء استقبال التعليقات ",
            'show_alert'=>true
            ]);
            
         $msgs['msgs'][$msg_id] = $ex[2]."\n\n\n";
        file_put_contents("data/msgs.json", json_encode($msgs));
        
    }
elseif(isset($ex[1])and $ex[0] == 'onpost' and $ex[1] != $from_id) {
        bot('answerCallbackQuery',[
            'callback_query_id'=>$update->callback_query->id,
            'text'=>"متاح للادمن فقط 🚫",
            'show_alert'=>true
            ]);
    }
}



$txt = explode(' ', $text);
if (isset($start[0]) and isset($txt[1]) and $txt[0]=='/start' and $txt[1] != null) {
    $dataa[$from_id] = 'out#'.$txt[1];
    file_put_contents("data/data.json", json_encode($dataa));
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'الان قم بأرسال تعليقك  📝',
        'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>'خروج 🗳','callback_data'=>"out"]]
                ]])
        ]);
}
$sajad = explode("#",$dataa[$from_id]);
    if($text and $text != '/start' and $sajad[0] == 'out'){
       
    $msg_id = $sajad[1];
    bot('editMessageText',[
        'inline_message_id'=>$msg_id,
        'text'=>$msgs['msgs'][$msg_id] ,
                'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>'ارسال تعليق 📩','url'=>"https://t.me/$usernamebot?start=$msg_id"]],
               [['text'=>"🔥 اصنع بوتك الخاص",'url'=>"t.me/$user_bot_sudo"]],
            ]])
        ]);
        $dataa[$from_id] = 's#'.$msg_id;
    file_put_contents("data/data.json", json_encode($dataa));
    }
    if($sajad[0] == 's'){
    
        bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>'لقد تم ارسال تعليقك بنجاح 🔖',
        'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                [['text'=>'خروج 🗳','callback_data'=>"out"]]
                ]])
        ]);
    $msg_id = $sajad[1];
    $msgs['msgs'][$msg_id] = $msgs['msgs'][$msg_id].$name ." :- ".$text."\n";
    file_put_contents("data/msgs.json", json_encode($msgs));
    bot('editMessageText',[
        'inline_message_id'=>$msg_id,
        'text'=>$msgs['msgs'][$msg_id] ,
                'reply_markup'=>json_encode([
                'inline_keyboard'=>[
  [['text'=>'ارسال تعليق 📩','url'=>"https://t.me/$usernamebot?start=$msg_id"]],
               [['text'=>"🔥 اصنع بوتك الخاص",'url'=>"t.me/$user_bot_sudo"]],
 ]]) 
        ]);
         $dataa[$from_id] = null;
    file_put_contents("data/data.json", json_encode($dataa));
        
        
    }
   
    

if ($data == 'out') {
    $dataa[$from_id] = null;
    file_put_contents("data/data.json", json_encode($dataa));
    bot('editMessageText',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"• اهلا بك عزيزي - $name 🔱 •

- في بوت التعليقات ⚜️ يقوم بمساعدتك في الكثير من الامور منها انشاء استفتاء لأي شي لمجموعتك او لقناتك ومشاركتها عبر خاصية الانلاين 🐾 ويمكنك التحكم في الاستفتاء 📨 -

- وهناك الكثير من المميزات ⬇️ -

- الاستخدام السهل 📃 -
- الازرار الشفافة داخل البوت 📪 -
- سرعة التحكم ⏱ -

$txtfree
 - والكثير يمكنك اكتشافها بنفسك ⚠️ -",
       'parse_mode'=>"html",
        ]);
}
