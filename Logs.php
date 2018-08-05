<?php

include("Telegram.php");
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.04.2018
 * Time: 14:36
 */
class Logs
{
    private $me = '32512143';
    public function __construct($bot_id) {
        return $this->telegram = new Telegram($bot_id);
    }

    public function Send2Me($text) {
        return $this->telegram->sendMessage([
            'chat_id'=>$this->me,
            'text'=>$text
        ]);
    }
}