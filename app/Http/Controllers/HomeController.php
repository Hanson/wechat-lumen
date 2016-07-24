<?php

namespace App\Http\Controllers;

class HomeController extends BaseController
{

    public function index()
    {
        $this->server->setMessageHandler('App\Handlers\WechatHandler::run');

        $this->server->serve()->send();
    }
}
