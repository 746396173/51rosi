<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\phpStudy\PHPTutorial\WWW/application/admin\view\account\login.html";i:1529653782;s:64:"D:\phpStudy\PHPTutorial\WWW\application\admin\view\pub\head.html";i:1526714681;s:64:"D:\phpStudy\PHPTutorial\WWW\application\admin\view\pub\foot.html";i:1526714703;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?>-后台管理</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/public/static/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/public/static/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="/public/static/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/public/static/css/amazeui.min.css" />
    <link rel="stylesheet" href="/public/static/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/public/static/css/app.css">
    <script src="/public/static/js/jquery.min.js"></script>

</head>

<body data-type="login">
<script src="/public/static/js/theme.js"></script>

<div class="tpl-skiner">
    <div class="tpl-skiner-toggle am-icon-cog">
    </div>
    <div class="tpl-skiner-content">
        <div class="tpl-skiner-content-title">
            选择主题
        </div>
        <div class="tpl-skiner-content-bar">
            <span class="skiner-color skiner-white" data-color="theme-white"></span>
            <span class="skiner-color skiner-black" data-color="theme-black"></span>
        </div>
    </div>
</div>
<div class="tpl-login">
    <div class="tpl-login-content">
        <div class="tpl-login-logo">

        </div>


        <form action="<?php echo url('account/loginConfirm'); ?>" method="post" class="am-form tpl-form-line-form">
            <div class="am-form-group">
                <input type="text" class="tpl-form-input" name="username"  placeholder="请输入账号">

            </div>

            <div class="am-form-group">
                <input type="password" class="tpl-form-input" name="password" placeholder="请输入密码">

            </div>


            <div class="am-form-group">
                <input type="submit" value="提交" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">
            </div>
        </form>
    </div>
</div>

<script src="/public/static/js/amazeui.min.js"></script>
<script src="/public/static/js/amazeui.datatables.min.js"></script>
<script src="/public/static/js/dataTables.responsive.min.js"></script>
<script src="/public/static/js/app.js"></script>

</body>

</html>