# lumen-wechat
A wechat Application build on lumen

lumen-wechat 基于[lumen](https://lumen.laravel.com/)以及[easywechat](easywechat.org)开发的微信项目

## Installation

```
composer create-project hanson/wechat wechat dev-master
```

## Configure
配置env，填写好需要的wechat信息即可
```
cp .env.example .env
```

## Migration
暂时提供两个表，wechat_user以及message，执行migrate即可生成数据表
```
php artisan migrate
```

## Handler
所有消息事件都位于`app/Handlers`中，事件Handler位于`app/Handlers/EventHandlers`中
