<?php
/**
 * Created by PhpStorm.
 * User: Hanson
 * Date: 2016/7/24
 * Time: 22:28
 */

namespace App\Handlers\EventHandlers;

use App\Handlers\HandlerInterface;

class ViewHandler implements HandlerInterface
{

    public static function run($message)
    {
        return 'view';
    }
}