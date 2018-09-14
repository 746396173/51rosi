<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"D:\phpStudy\PHPTutorial\WWW/application/admin\view\site\index.html";i:1527503985;s:64:"D:\phpStudy\PHPTutorial\WWW\application\admin\view\pub\head.html";i:1526714681;s:63:"D:\phpStudy\PHPTutorial\WWW\application\admin\view\pub\nav.html";i:1527490652;s:64:"D:\phpStudy\PHPTutorial\WWW\application\admin\view\pub\menu.html";i:1531496536;s:64:"D:\phpStudy\PHPTutorial\WWW\application\admin\view\pub\foot.html";i:1526714703;}*/ ?>
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

<body data-type="widgets">
<script src="/public/static/js/theme.js"></script>
<div class="am-g tpl-g">
    <!-- 头部 -->
    <header>
    <!-- logo -->
    <div class="am-fl tpl-header-logo">
        <a href="javascript:;"><img src="/public/static/img/adminlogo.png" alt=""></a>
    </div>
    <!-- 右侧内容 -->
    <div class="tpl-header-fluid">
        <!-- 侧边切换 -->
        <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
        </div>
        <!-- 搜索 -->
        <div class="am-fl tpl-header-search">
            <form class="tpl-header-search-form" action="javascript:;">
                <button class="tpl-header-search-btn am-icon-search"></button>
                <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
            </form>
        </div>
        <!-- 其它功能-->
        <div class="am-fr tpl-header-navbar">
            <ul>
                <!-- 欢迎语 -->
                <li class="am-text-sm tpl-header-navbar-welcome">
                    <a href="javascript:;">欢迎你, <span><?php echo $username; ?></span> </a>
                </li>

                <!-- 退出 -->
                <li class="am-text-sm">
                    <a href="/admin/account/logout">
                        <span class="am-icon-sign-out"></span> 退出
                    </a>
                </li>
            </ul>
        </div>
    </div>

</header>
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
    <!-- 侧边导航栏 -->
    <div class="left-sidebar">
    <!-- 用户信息 -->
    <div class="tpl-sidebar-user-panel">
        <div class="tpl-user-panel-slide-toggleable">
            <div class="tpl-user-panel-profile-picture">
                <img src="/public/static/img/user04.png" alt="">
            </div>
            <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              管理员
          </span>
            <a href="<?php echo url('site/admin'); ?>" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
        </div>
    </div>

    <!-- 菜单 -->
    <ul class="sidebar-nav">
        <li class="sidebar-nav-link">
            <a href="/admin">
                <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="<?php echo url('brand/index'); ?>">
                <i class="am-icon-clone sidebar-nav-link-logo"></i> 分类管理
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="<?php echo url('taotu/index'); ?>">
                <i class="am-icon-table sidebar-nav-link-logo"></i> 套图管理
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="<?php echo url('linkship/index'); ?>">
                <i class="am-icon-calendar sidebar-nav-link-logo"></i> 友链管理
            </a>
        </li>
        <li class="sidebar-nav-link">
            <a href="<?php echo url('sitemap/index'); ?>">
                <i class="am-icon-bar-chart sidebar-nav-link-logo"></i> sitemap生成
            </a>
        </li>
    </ul>
</div>

    <!-- 内容区域 -->
    <div class="tpl-content-wrapper">

        <div class="container-fluid am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                    <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span>
                        网站设置
                        <small>brand edit</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">网站设置</div>
            </div>
            <div class="widget-body am-fr">
                <form action="<?php echo url('site/editsave'); ?>" method="post" class="am-form tpl-form-line-form">
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">网站名称 <span
                                class="tpl-form-line-small-title">site name</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="site_name" value="<?php echo $site['site_name']; ?>">
                            <small>输入网站名称</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">pc网址 <span
                                class="tpl-form-line-small-title">pc url</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="pc_url" value="<?php echo $site['pc_url']; ?>">
                            <small>输入pc网址</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">移动端网址 <span
                                class="tpl-form-line-small-title">mobile url</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="m_url" value="<?php echo $site['m_url']; ?>">
                            <small>输入移动端网址</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label  class="am-u-sm-3 am-form-label">pc logo <span
                                class="tpl-form-line-small-title">pc logo</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="pc_logo" value="<?php echo $site['pc_logo']; ?>">
                            <small>pc logo地址</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label  class="am-u-sm-3 am-form-label">mobile logo <span
                                class="tpl-form-line-small-title">mobile logo</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="m_logo" value="<?php echo $site['m_logo']; ?>">
                            <small>mobile logo地址</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label  class="am-u-sm-3 am-form-label">网站标题 <span
                                class="tpl-form-line-small-title">site title</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="title" value="<?php echo $site['title']; ?>">
                            <small>site title</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label  class="am-u-sm-3 am-form-label">网站关键词 <span
                                class="tpl-form-line-small-title">site keyword</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="keyword" value="<?php echo $site['keyword']; ?>">
                            <small>site keyword</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label  class="am-u-sm-3 am-form-label">网站描述 <span
                                class="tpl-form-line-small-title">site description</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="description" value="<?php echo $site['description']; ?>">
                            <small>site description</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label  class="am-u-sm-3 am-form-label">联系邮箱 <span
                                class="tpl-form-line-small-title">mobile logo</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="email" value="<?php echo $site['email']; ?>">
                            <small>email</small>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label  class="am-u-sm-3 am-form-label">icp备案号 <span
                                class="tpl-form-line-small-title">mobile logo</span></label>
                        <div class="am-u-sm-9">
                            <input type="text" class="tpl-form-input" name="m_logo" value="<?php echo $site['icp']; ?>">
                            <small>icp</small>
                        </div>
                    </div>


                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <input type="submit" value="保存" class="am-btn am-btn-primary tpl-btn-bg-color-success">
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
</div>
<script src="/public/static/js/amazeui.min.js"></script>
<script src="/public/static/js/amazeui.datatables.min.js"></script>
<script src="/public/static/js/dataTables.responsive.min.js"></script>
<script src="/public/static/js/app.js"></script>

</body>

</html>