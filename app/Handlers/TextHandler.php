<?php
/**
 * Created by PhpStorm.
 * User: Hanson
 * Date: 2016/7/24
 * Time: 22:28
 */

namespace App\Handlers;


use App\Models\Message;

class TextHandler implements HandlerInterface
{

    public static function run($message)
    {
        Message::create(['open_id' => $message->FromUserName, 'content' => $message->Content]);
        return (string)$message.'text';
    }
}