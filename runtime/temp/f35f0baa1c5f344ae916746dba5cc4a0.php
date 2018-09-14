<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"D:\phpStudy\PHPTutorial\WWW/application/index\view\taotu\newest.html";i:1530091902;s:64:"D:\phpStudy\PHPTutorial\WWW\application\index\view\pub\head.html";i:1530261761;s:63:"D:\phpStudy\PHPTutorial\WWW\application\index\view\pub\nav.html";i:1527563118;s:64:"D:\phpStudy\PHPTutorial\WWW\application\index\view\pub\foot.html";i:1531292320;}*/ ?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $site['site_name']; ?>最新美女图片_top100</title>
    <meta name="keywords" content="<?php echo $site['site_name']; ?>最新美女图片_top100">
    <meta name="description" content="<?php echo $site['site_name']; ?>最新美女图片_top100。">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <link href="/public/static/css/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/public/static/css/iconfont.css">
    <script type="text/javascript" src="/public/static/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/static/js/wrf_Marquee.min.js"></script>
    <script src="/public/static/js/superslide.2.1.js"></script>
    <script type="text/javascript" src="/public/static/js/imglazyload.js"></script>
    <script type="text/javascript" src="/public/static/js/jquery.banner.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#zxmmtp_box01").wrf_Marquee({
                auto: 0,
                img: "#zxmmtp_box01 li",
                ltbtn: "#zxmmtp_box01 .preBtn",
                rbbtn: "#zxmmtp_box01 .nextBtn"
            });
            $("#zxmmtp_box02").wrf_Marquee({
                auto: 0,
                img: "#zxmmtp_box02 li",
                ltbtn: "#zxmmtp_box02 .preBtn",
                rbbtn: "#zxmmtp_box02 .nextBtn"
            });
            $("#zxmmtp_box03").wrf_Marquee({
                auto: 0,
                img: "#zxmmtp_box03 li",
                ltbtn: "#zxmmtp_box03 .preBtn",
                rbbtn: "#zxmmtp_box03 .nextBtn"
            });
            $("#zxmmtp_box04").wrf_Marquee({
                auto: 0,
                img: "#zxmmtp_box04 li",
                ltbtn: "#zxmmtp_box04 .preBtn",
                rbbtn: "#zxmmtp_box04 .nextBtn"
            });
            //$("#show_box").wrf_Marquee({auto:1,img:"#show_box li",btn:"#show_box .num_box span",mstep:5});
        });
    </script>
</head>
<body>
<div class="pic_index_headc">
    <div class="secondaryHeader">
        <div class="logo" style="cursor:pointer">
            <a href="<?php echo $site['pc_url']; ?>" alt="<?php echo $site['pc_url']; ?>"></a></div>
        <!-- cheny start-->
        <div class="menu-wrapp">
            <div class="menucat">
                <a href="<?php echo $site['pc_url']; ?>" class="login-button">本站首页</a>
            </div>
            <div class="menucat" _t_nav="meinv">
                <a href="/brandlistall/meinvdalei">美女大全</a>
                <img class="navhot" src="/public/static/img/navhot.png">
            </div>
            <div class="menucat">
                <a href="/brandlistall/mingxingmote" class="login-button">明星模特</a>
            </div>
            <div class="menucat">
                <a href="/brandlistall/jigou" class="login-button">品牌大全</a>
            </div>
            <div class="menucat">
                <a href="/brand/newest" class="login-button">最新专辑</a>
            </div>
        </div>
        <!-- cheny end -->
        <div class="search_start">
            <div class="search_cont" style="width: 90px;">
                <form name="topSearchForm" action="<?php echo url('home/search'); ?>" method="get">
                    <input type="text" name="keywords" class="in_search" autocomplete="off" value="搜索">
                    <input type="submit" class="in_submit">
                    <i class="icon-search icon iconfont"></i>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="index_listc">
    <div class="camTitle">
        <div class="camNavC">
            <a href="<?php echo url('taotu/newest'); ?>" class="selected">最新更新T100</a>
        </div>
    </div>
    <div class="longTop">您现在的位置 &gt; <a href="<?php echo $site['pc_url']; ?>">首页</a> &gt;
        <a href="<?php echo url('taotu/newest'); ?>">最新更新T100</a></div>
    <div class="camWholeBox borderTop" id="load-img">
        <ul class="layout camWholeBoxUl">
            <?php if(is_array($taotus) || $taotus instanceof \think\Collection || $taotus instanceof \think\Paginator): $i = 0; $__LIST__ = $taotus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                <a href="/taotu/<?php echo $vo['id']; ?>" class="itemimg" title="<?php echo $vo['title']; ?>" target="_blank">
                    <img src="/public/static/upload/taotu/<?php echo $vo['id']; ?>/thumb.jpg" width="196" height="265" alt="<?php echo $vo['title']; ?>"
                         style="display: inline;">
                    <div class="itemset-num">
                        <span class="num"><?php echo $vo['count']; ?></span>
                        <span class="text">张</span>
                    </div>
                </a>
                <div class="camLiCon">
                    <div class="camLiTitleC hot">
                        <p>
                            <a href="/taotu/<?php echo $vo['id']; ?>" title="<?php echo $vo['title']; ?>" target="_blank"><?php echo $vo['title']; ?></a>
                        </p>
                    </div>
                    <div class="camLiDes">
                        <span class="mr3"><i class="icon iconfont fontico"></i><?php echo $vo['update_time']; ?></span>

                    </div>
                </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<div class="ggbottow">
    <div class="left">

    </div>
    <div class="right">

    </div>
</div>
<div class="wrapper1083 back_fff ofHidden">
    <div class="indexTitle b-1-f4f4f4 t-1-f4f4f4" data-unuse="1">
        <span class="c999"><?php echo $site['site_name']; ?>有部分资源来源于互联网，图片版权归原作者所有，若有侵权问题敬请告知，我们会立即处理.本站图片资源如果没有特殊声明，<span
                style="font-weight:bold">一律禁止任何形式的转载和盗用.</span></span>
        <div style="display:none;" class="itMore" data-unuse="1">欢迎加入我们! 相关合作请联系<?php echo $site['email']; ?></div>
    </div>
</div>
<div class="wrapper1083 back_fff ofHidden">
    <div class="indexTitle b-1-f4f4f4 t-1-f4f4f4" data-unuse="1">
        <span style="font-weight:bold">友情链接</span>
        <?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <span class="c999"><a href="<?php echo $vo['link_addr']; ?>"><?php echo $vo['link_name']; ?></a></span>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<div class="footer" data-unuse="1">
    <p><a href="<?php echo $site['pc_url']; ?>/map/">网站地图</a></p>
    <p>© 2015 (<?php echo $site['site_name']; ?>) 59pic<a href="<?php echo $site['pc_url']; ?>">美女图片</a> 版权所有 <?php echo $site['icp']; ?></p>
</div>
<div id="cbbfixed" style="bottom: 266px;_bottom: 0px;">
    <div class="dingyue">
        <a href="javascript:;"></a>
        <div class="qqdingyue">暂停订阅</div>
    </div>
    <a id="mweb" href="<?php echo $site['pc_url']; ?>"><span></span>
        <div style="display: none;"></div>
    </a>
    <div class="jianyi"><a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=<?php echo $site['email']; ?>"
                           target="_blank"></a></div>
</div>
<div id="back-to-top" class="back-to-top" style="display: none;"><a target="_self" href="javascript:void(0);"
                                                                    id="back-to-top-btn">&nbsp;</a></div>
<script type="text/javascript" src="/public/static/js/IE6Top.js"></script>
<script src="/public/static/js/picbase.js"></script>

</body>
</html>
