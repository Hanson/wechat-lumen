<?php
/**
 * Created by PhpStorm.
 * User: Hanson
 * Date: 2016/7/24
 * Time: 22:27
 */

namespace App\Handlers;


interface HandlerInterface
{

    /**
     * @param $message
     * @return mixed
     */
    public static function run($message);

}