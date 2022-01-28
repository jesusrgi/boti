<?php#*wataw*
#بوت الالعاب انلاين


if($start=="non"){
$start="
- اهلا بك  ؛ $name
في بوت العاب اونلاين ⭐️ ";

}




if($text == '/start'){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"$start
اختر لغتك💫
 ،  العربيه Arabic*🇸🇦* ، 
➖➖➖➖➖➖➖➖➖➖➖
-welcome Welcome 
In bot online games ⭐️
your language💫 
 الانكليزيه English* 🇺🇸* ،
$txtfree
",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العربيـة ،🇸🇦 arbic",'callback_data'=>"alawi"],['text'=>"الانكليزيـة ،🇺🇸 English",'callback_data'=>"tttitt"]],

        ] ])]);}
if($data == "tttitt"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"- HI 👋
Dear my dear to tomorrow I chose the English 🇺🇸  language
Here is a list of games 👇",
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Action ، 💛",'callback_data'=>"an"],['text'=>"Competitions ، 💛",'callback_data'=>"xc"]],
[['text'=>"Mix ، 💛",'callback_data'=>"nj"]],
[['text'=>"Back 🤷🏿‍♀️",'callback_data'=>"alo"]],] ])]);} 
if($data == "alawi"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"- اهلا بك  ؛ 
حسننا عزيزي لقد اخترته لغه العربيه ، Arabic 🇸🇦
اليك قائمه الالعاب  ،  👇",
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اكشن ، 🌐",'callback_data'=>"apol"],['text'=>"متنوعات ، 🌐",'callback_data'=>"als"]],
[['text'=>"مسابقات ، 🌐",'callback_data'=>"nk"]],
[['text'=>"الـرجـووع 🤷🏿‍♀️",'callback_data'=>"alo"]],] ])]);} 
if($data == "alo"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"$start
اختر لغتك💫
 ،  العربيه Arabic*🇸🇦* ، 
➖➖➖➖➖➖➖➖➖➖➖
-welcome Welcome 
In bot online games ⭐️
your language💫 
 الانكليزيه English* 🇺🇸* ،
 
$txtfree
",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"العربيـة ،🇸🇦arbic",'callback_data'=>"alawi"],['text'=>"الانكليزيـة ،🇺🇸 English",'callback_data'=>"tttitt"]],
  ] ])]);}
if($data == "apol"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"حسننا عزيزي لقد اخترته قائمه العاب اكشن ، 🚸
اليك العاب تاليه اختر واحد من الالعاب ولعب ، ⚖️",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"Qubo ، 🌐",'callback_data'=>"Qubo"],['text'=>"Snake ، 🌐",'callback_data'=>"Snake"]], 
 [['text'=>"HausschweinRun ، 🌐",'callback_data'=>"HausschweinRun"],['text'=>"GravityNinja21 ، 🌐",'callback_data'=>"GravityNinja21"]], 
 [['text'=>"Snake ، 🌐",'callback_data'=>"Snake"]], 
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 //اكشن
   if($data == "Qubo"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { Qubo }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=Qubo"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "Snake"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { Snake }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=Snake"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "HausschweinRun"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { HausschweinRun }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=HausschweinRun"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "Snake"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { Snake }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=Snake"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "GravityNinja21"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { GravityNinja21 }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=GravityNinja21"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 //متنوعات 
 if($data == "als"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"حسننا عزيزي لقد اخترته قائمه العاب متنوعات ، 🚸
اليك العاب تاليه اختر واحد من الالعاب ولعب ، ⚖️",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"Hexonix ، 🌐",'callback_data'=>"Hexonix"],['text'=>"MotoFX ، 🌐",'callback_data'=>"MotoFX"]], 
 [['text'=>"Towerman ، 🌐",'callback_data'=>"Towerman"],['text'=>"Squares ، 🌐",'callback_data'=>"Squares"]], 
 [['text'=>"Skipper ، 🌐",'callback_data'=>"Skipper"]], 
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "Hexonix"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { Hexonix }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=Hexonix"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "Towerman"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { Towerman }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=Towerman"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "Skipper"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { Skipper }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=Skipper"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "MotoFX"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { MotoFX }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=MotoFX"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "Squares"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { Squares }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=Squares"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 //مسابقات
 if($data == "nk"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"حسننا عزيزي لقد اخترته قائمه العاب ، مسابقات ، 🌐
اليك العاب تاليه اختر واحد من الالعاب ولعب ، ⚖️",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
 [['text'=>"AtomicDrop1 ، 🌐",'callback_data'=>"AtomicDrop1"],['text'=>"MotoFx ، 🌐",'callback_data'=>"MotoFx"]], 
 [['text'=>"F1Racer ، 🌐",'callback_data'=>"F1Racer"],['text'=>"SpeedDriver  ، 🌐",'callback_data'=>"SpeedDriver"]], 
 [['text'=>"BeachRacer ، 🌐",'callback_data'=>"BeachRacer"]], 
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "AtomicDrop1"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { AtomicDrop1 }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=AtomicDrop1"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "F1Racer"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { F1Racer }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=F1Racer"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "BeachRacer"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { BeachRacer }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=BeachRacer"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
 if($data == "MotoFx"){
    bot('EditMessageText',[
    'chat_id'=>$chat_id,    'message_id'=>$message_id,
    'text'=>"اهلا بك ! في لعبه { MotoFx }
اضغط عله زر لعب لتلعب ، 💛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
    [['text'=>"، لعب ،", 'url'=>"https://t.me/gamee?game=MotoFx"],['text'=>"تحميل الالعاب ، 🌜", 'url'=>"https://gamee.com/get"]],
 [['text'=>"رجوع ، 💱",'callback_data'=>"alawi"]], ] ])]);}
