# PHP Captcha

一个简单而灵活的 PHP 验证码库。

## 安装

```bash
composer require juhui/php-captcha
```

## 环境要求

- PHP >= 7.2.5
- GD 扩展

## 功能特点

- 支持中文和英文验证码
- 支持数学运算验证码
- 支持自定义字体
- 支持自定义验证码样式
- 支持 base64 输出
- 简单易用的 API

## 使用方法

### 基本使用

```php
// 生成验证码
$captcha = captcha();

// 验证验证码
if (captcha_check($_POST['code'])) {
    // 验证码正确
} else {
    // 验证码错误
}
```

### 获取 base64 图片和文本

```php
// 获取验证码的 base64 图片和文本
$result = captcha_base64();
echo $result['img'];  // base64 图片
echo $result['code']; // 验证码文本
```

### 自定义配置

```php
$config = [
    // 验证码位数
    'length'   => 4,
    // 验证码字符集合
    'codeSet'  => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY',
    // 验证码字体大小(px)
    'fontSize' => 18,
    // 是否画混淆曲线
    'useCurve' => true,
    // 验证码图片高度
    'imageH'   => 38,
    // 验证码图片宽度
    'imageW'   => 106,
    // 验证码过期时间（s）
    'expire'   => 1800,
    // 是否使用中文验证码
    'useZh'    => false,
    // 是否使用背景图片
    'useImgBg' => false,
    // 是否添加杂点
    'useNoise' => true,
    // 验证码字体，不设置随机获取
    'fontttf'  => '',
    // 背景颜色
    'bg'       => [255, 255, 255],
    // 验证码类型（是否使用算术验证码）
    'math'     => false,
    // 透明度
    'alpha'    => 0,
];

// 使用自定义配置生成验证码
$captcha = captcha($config);
```

## 自定义字体

将 TTF 字体文件放在 `vendor/juhui/php-captcha/assets/fonts` 目录下即可。

## 许可证

MIT
