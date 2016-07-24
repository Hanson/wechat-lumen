<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use EasyWeChat\Server\Guard;
use EasyWeChat\User\User;
use Overtrue\Socialite\SocialiteManager;

class BaseController extends Controller
{

    /**
     * @var Application
     */
    protected $app;

    /**
     * @var array
     */
    private $option;

    /**
     * @var Guard
     */
    protected $server;

    /**
     * @var User
     */
    protected $user;

    /**
     * @var SocialiteManager
     */
    protected $oauth;

    public function __construct()
    {
        $this->option = config('wechat');
        
        $this->initApplication();
    }

    protected function initApplication()
    {
        $this->app = new Application($this->option);

        $this->initServices();
    }

    protected function initServices()
    {
        $this->server = $this->app->server;
        $this->user = $this->app->user;
        $this->oauth = $this->app->oauth;
    }

    protected function setOptions($option)
    {
        $this->option = $option;

        $this->initApplication();
    }

    protected function setOption($option)
    {
        array_merge($this->option, $option);

        $this->initApplication();
    }

}
