<?php

include("Telegram.php");
include("conf.php");
$telegram = new Telegram(BOT_ID);
$text = $telegram->Text();
$chat_id = $telegram->ChatID();
$message=$telegram->Message();
$redis=new Redis();
function redis_error($error) {
    throw new error($error);
}

/*/ Check if the text is a command
/if($chat_id==ME){
    if (!$telegram->messageFromGroup()) {
        if ($text == "/migrate") {

            $mysqli = new mysqli('format3d.beget.tech', 'format3d_axenia', 'lH%}4#*{', 'format3d_axenia');
            if ($mysqli->connect_errno) {
                $telegram->sendMessage(['chat_id'=>ME, 'text'=>$mysqli->connect_error]);
                exit;
            }
            $sql = "SELECT * FROM Chats";
            if (!$result = $mysqli->query($sql)) {
                $telegram->sendMessage(['chat_id'=>ME, 'text'=>$mysqli->connect_error]);
                exit;
            }
            if ($result->num_rows === 0) {
                $telegram->sendMessage(['chat_id'=>ME, 'text'=>'Empty']);
                exit;
            }
            $chats = $result->fetch_all();
            $text=print_r($chats,true);
            //file_put_contents("1",$text);
           //$telegram->sendMessage(['chat_id'=>ME, 'text'=>$text]);
            while ($actor = $result->fetch_assoc()) {
                echo "<li><a href='" . $_SERVER['SCRIPT_FILENAME'] . "?aid=" . $actor['actor_id'] . "'>\n";
                echo $actor['first_name'] . ' ' . $ac tor['last_name'];
                echo "</a></li>\n";
            }
            //$telegram->sendMessage(['chat_id'=>ME, '  text'=>'Empty']);
            $result->free();
            $mysqli->close();


        }
    }
}*/
preg_match('/^(.)()? (\w+))/ui', $text, $matches);
//$telegram->sendMessage(['chat_id'=>$chat_id, 'text'=>print_r($message,true)]);
if($text[0]=="/"){

}elseif(in_array('mention',$message['entities'][0])){
  //in_array(explode(" ",$text)[0],["+","-","👍","👎"]) || in_array($message['sticker']['emoji'],["👍","👎"] )
      $telegram->sendMessage(['chat_id'=>$chat_id, 'text'=>'1']);
}
