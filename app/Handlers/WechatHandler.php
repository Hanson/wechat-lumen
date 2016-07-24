<?php
/**
 * Created by PhpStorm.
 * User: Hanson
 * Date: 2016/7/24
 * Time: 22:28
 */

namespace App\Handlers;


class WechatHandler implements HandlerInterface
{

    public static function run($message)
    {
        $handler = 'App\Handlers\\' . ucfirst($message->MsgType) . 'Handler';

        return call_user_func_array([$handler, 'run'], [$message]);
    }
}