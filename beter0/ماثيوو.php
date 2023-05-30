<?php
ob_start();
define('API_KEY','6016426666:AAGFtSepe8qrlzC-Xj_bb_-V2TNVTAgT_es');
function bot($method,$datas=[]){
$url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text; 
$fn = $message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$mid = $update->callback_query->message->message_id;
$from_id = $message->from->id;
$name = $update->message->from->first_name;

# گتابات ماثيوو #
# تابع قناتي @M1_M2S#

#﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎#
$ch = "M1_M2S"; 
$join = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
 'text'=>" عليك الاشتراك بقناة البوت اولا😊
@$ch",
]);return false;}
if($text !== "/start"){
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"$text",
'caption'=>"• تم تنزيل الصورةه المصغره للفيديو 🔰؛
~ تابع قناة المطور @cc2cc0",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• جديدنا 📢'",'url'=>'https://t.me/cc2cc0']],
[
['text'=>"• لـ شراء نسخةه📜'",'url'=>'t.me/iiiiZBot'],
['text'=>"• مراسلةه المطور ☑️'",'url'=>'t.me/cc2cc2']
],
]
])
]);
}
if($text !== "/start"){
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>"$text",
'caption'=>"• تم تنزيل الفيديو بنجاح ، 📥؛
~ تابع قناة المطور @cc2cc0 ، 🚸؛",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• جديدنا 📢'",'url'=>'https://t.me/cc2cc0']],
[
['text'=>"• لـ شراء نسخةه📜'",'url'=>'t.me/iiiiZBot'],
['text'=>"• مراسلةه المطور ☑️'",'url'=>'t.me/cc2cc2']
],
]
])
]);
bot('sendmessage',[
'chat_id'=> $admin,
'text'=> "~ هناك شخص قام بـ التحميل من البوت
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎  
- اسم العضو ⚜ ، $name 
- معرف العضو 🌐 ، @$username
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎ 
- رابط التحميل 🔰 ،
$text",
    ]);
}
#﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎#
if ($text == '/start') {
  bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- مرحبا بك ؛ [$name](tg://user?id=$chat_id)
~ في بوت التحميل من الفيسبوك والانستا 👤
~ فقط قم بأرسال رابط الفيديو 📥
~ يجب ان يكون الفيديو اقل من ٢ دقيقه 🚸
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🌐؛](https://t.me/BoTs0)", 'parse_mode' => "MarkDown", 'disable_web_page_preview' => true, 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "~ لـ شراء نسخةه 💰؛", 'url' => "https://t.me/iiiiZBot"]], ]]) ]);
}
# آوامر المطور #
$u = explode("\n",file_get_contents("Matthew.txt"));
$c = count($u)-1;
$modxe = file_get_contents("Mohamed.txt");
$admin = 500144557;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;

$chat_id2 = $update->callback_query->message->chat->id;
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("Matthew.txt", $chat_id."\n",FILE_APPEND);
  }
  if ($text == "الاوامر" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
        ]);
}
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
]);
file_put_contents('Mohamed.txt', '');
}
if($data == "co" and $update->callback_query->message->chat->id == $admin ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
        عدد مشتركين البوت📢 :- [ $c ] .
        ",
        'show_alert'=>true,
]);
}
if($data == "ce" and $update->callback_query->message->chat->id == $admin){ 
    file_put_contents("Mohamed.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    'text'=>"▪️ ارسل رسالتك الان 📩 وسيتم نشرها لـ [ $c ] مشترك . 
   ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>' الغاء 🚫 •','callback_data'=>'off']]    
        ]
    ])
    ]);
}
if($text and $modxe == "yas" and $chat_id == $admin ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    file_put_contents("Mohamed.txt","no");

} 
}
$id = $rep->id; 
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 

$sudo = 500144557;
if($text !== "/start"&& $from_id !== $sudo){
bot('forwardMessage',[
'chat_id'=>$sudo,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if ($text and $message->reply_to_message && $text!="/info") {
  bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
    'text'=>$text,
    ]);
}