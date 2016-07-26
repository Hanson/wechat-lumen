<?php

namespace App\Http\Controllers;

use EasyWeChat\Server\Guard;

/**
 * @property Guard server
 */

class HomeController extends BaseController
{

    public function index()
    {
        $this->server->setMessageHandler('App\Handlers\WechatHandler::run');

        $this->server->serve()->send();
    }
}
