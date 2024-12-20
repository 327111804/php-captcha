<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: yunwuxin <448901948@qq.com>
// +----------------------------------------------------------------------

use PhpCaptcha\Captcha;

if (!function_exists('captcha')) {
    /**
     * 生成验证码
     * @param array $config 配置参数
     * @return string|array
     */
    function captcha(array $config = [])
    {
        $captcha = new Captcha($config);
        return $captcha->create();
    }
}

if (!function_exists('captcha_check')) {
    /**
     * 验证验证码是否正确
     * @param string $code 用户验证码
     * @return bool
     */
    function captcha_check(string $code): bool
    {
        $captcha = new Captcha();
        return $captcha->check($code);
    }
}

if (!function_exists('captcha_base64')) {
    /**
     * 获取验证码的 base64 图片和文本
     * @param array $config 配置参数
     * @return array
     */
    function captcha_base64(array $config = []): array
    {
        $captcha = new Captcha($config);
        return $captcha->getBase64();
    }
}
