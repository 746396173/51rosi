<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:67:"D:\phpStudy\PHPTutorial\WWW/application/admin\view\taotu\index.html";i:1527504054;s:64:"D:\phpStudy\PHPTutorial\WWW\application\admin\view\pub\head.html";i:1526714681;s:63:"D:\phpStudy\PHPTutorial\WWW\application\admin\view\pub\nav.html";i:1527490652;s:64:"D:\phpStudy\PHPTutorial\WWW\application\admin\view\pub\menu.html";i:1531496536;s:64:"D:\phpStudy\PHPTutorial\WWW\application\admin\view\pub\foot.html";i:1526714703;}*/ ?>
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
    <div class="tpl-content-wrapper">

        <div class="container-fluid am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-9">
                    <div class="page-header-heading"><span class="am-icon-home page-header-heading-icon"></span> 套图管理
                        <small>taotu list</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget am-cf">
            <div class="widget-body  widget-body-lg am-fr">
                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                    <div class="am-form-group">
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <a href="<?php echo url('taotu/add'); ?>" class="am-btn am-btn-default am-btn-success">
                                    <span class="am-icon-plus"></span>
                                    新增
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="am-scrollable-horizontal ">
                    <table width="100%" class="am-table am-table-compact am-text-nowrap tpl-table-black "
                           id="example-r">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>套图标题</th>
                            <th>套图标签</th>
                            <th>来源网址</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($taotus) || $taotus instanceof \think\Collection || $taotus instanceof \think\Paginator): $i = 0; $__LIST__ = $taotus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr class="gradeX">
                            <td><?php echo $vo['id']; ?></td>
                            <td><?php echo $vo['title']; ?></td>
                            <td><?php echo $vo['tags']; ?></td>
                            <td><?php echo $vo['source_url']; ?></td>
                            <td>
                                <div class="tpl-table-black-operation">
                                    <a href="<?php echo url('photo/index',['id'=>$vo['id']]); ?>" class="tpl-table-black-operation-del">
                                        图片管理
                                    </a>
                                    <a href="edit?id=<?php echo $vo['id']; ?>">
                                        <i class="am-icon-pencil"></i> 编辑
                                    </a>
                                    <a href="javascript:if(confirm('确实要删除吗?'))location='delete?id=<?php echo $vo['id']; ?>'" class="tpl-table-black-operation-del">
                                        <i class="am-icon-trash"></i> 删除
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <!-- more data -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <?php echo $taotus->render(); ?>
    </div>
</div>
<script src="/public/static/js/amazeui.min.js"></script>
<script src="/public/static/js/amazeui.datatables.min.js"></script>
<script src="/public/static/js/dataTables.responsive.min.js"></script>
<script src="/public/static/js/app.js"></script>

</body>

</html>