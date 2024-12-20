<?php

namespace PhpCaptcha;

use think\Route;
use think\Service;
use think\Validate;

class CaptchaService extends Service
{
    public function boot()
    {
        Validate::maker(function ($validate) {
            $validate->extend('captcha', function ($value) {
                return captcha_check($value);
            }, ':attribute错误!');
        });

        $this->registerRoutes(function (Route $route) {
            $route->get('captcha/[:config]', "\\think\\captcha\\CaptchaController@index");
        });

        $this->app->bind('captcha', function () {
            return new Captcha($this->app->config, $this->app->session);
        });
    }

    public function register(): void
    {
        // 设置字体路径
        $fontttf_path = __DIR__ . '/../assets/fonts/';
        
        // 创建字体目录
        if (!is_dir($fontttf_path)) {
            mkdir($fontttf_path, 0755, true);
        }
    }
}
