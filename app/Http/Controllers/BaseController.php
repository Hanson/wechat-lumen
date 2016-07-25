<?php

namespace App\Http\Controllers;

use EasyWeChat\Broadcast\Broadcast;
use EasyWeChat\Foundation\Application;
use EasyWeChat\Js\Js;
use EasyWeChat\Material\Material;
use EasyWeChat\Material\Temporary;
use EasyWeChat\Menu\Menu;
use EasyWeChat\Notice\Notice;
use EasyWeChat\Payment\LuckyMoney\LuckyMoney;
use EasyWeChat\Payment\MerchantPay\MerchantPay;
use EasyWeChat\Payment\Payment;
use EasyWeChat\QRCode\QRCode;
use EasyWeChat\Reply\Reply;
use EasyWeChat\Semantic\Semantic;
use EasyWeChat\Server\Guard;
use EasyWeChat\Staff\Staff;
use EasyWeChat\Stats\Stats;
use EasyWeChat\Url\Url;
use EasyWeChat\User\Group;
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
     * @var Menu
     */
    protected $menu;

    /**
     * @var Broadcast
     */
    protected $broadcast;

    /**
     * @var Notice
     */
    protected $notice;

    /**
     * @var Group
     */
    protected $group;

    /**
     * @var Material
     */
    protected $material;

    /**
     * @var Temporary
     */
    protected $tmpMaterial;

    /**
     * @var Js
     */
    protected $js;

    /**
     * @var Payment
     */
    protected $payment;

    /**
     * @var MerchantPay
     */
    protected $merchantPay;

    /**
     * @var LuckyMoney
     */
    protected $luckyMoney;

    /**
     * @var Staff
     */
    protected $staff;

    /**
     * @var Stats
     */
    protected $stats;

    /**
     * @var QRCode
     */
    protected $qrcode;

    /**
     * @var Url
     */
    protected $url;

    /**
     * @var Semantic
     */
    protected $semantic;

    /**
     * @var Reply
     */
    protected $reply;

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
        $this->menu = $this->app->menu;
        $this->broadcast = $this->app->broadcast;
        $this->notice = $this->app->notice;
        $this->group = $this->app->user_group;
        $this->material = $this->app->material;
        $this->tmpMaterial = $this->app->material_temporary;
        $this->js = $this->app->js;
        $this->payment = $this->app->payment;
        $this->merchantPay = $this->app->merchant_pay;
        $this->luckyMoney = $this->app->lucky_money;
        $this->staff = $this->app->staff;
        $this->stats = $this->app->stats;
        $this->qrcode = $this->app->qrcode;
        $this->url = $this->app->url;
        $this->semantic = $this->app->semantic;
        $this->reply = $this->app->reply;
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
