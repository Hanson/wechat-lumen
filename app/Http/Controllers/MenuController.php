<?php

namespace App\Http\Controllers;

class MenuController extends BaseController
{

    /**
     * 获取所有菜单
     * @return \EasyWeChat\Support\Collection
     */
    public function index()
    {
        return $this->menu->all();
    }

    /**
     * 获取自定义菜单
     * @return \EasyWeChat\Support\Collection
     */
    public function current()
    {
        return $this->menu->current();
    }

    /**
     * 创建菜单
     * @param $menu
     * @return bool
     */
    public function store($menu)
    {
        return $this->menu->add($menu);
    }

    /**
     * 删除菜单
     * @param null $menuId
     * @return bool
     */
    public function destroy($menuId = null)
    {
        return $this->menu->destroy($menuId);
    }

    /**
     * 个性化菜单
     * @param $userId
     * @return bool
     */
    public function style($userId)
    {
        return $this->menu->test($userId);
    }

    public function test()
    {
        $this->store(config('menu'));
    }


}
