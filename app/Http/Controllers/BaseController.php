<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;

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


    public function __construct()
    {
        $this->option = config('wechat');
        
        $this->initApplication();
    }

    protected function initApplication()
    {
        $this->app = new Application($this->option);

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


    public function __get($value)
    {
        return $this->app->$value;
    }

}
