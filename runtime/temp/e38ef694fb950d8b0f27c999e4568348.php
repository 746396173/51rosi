<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\phpStudy\PHPTutorial\WWW/application/index\view\home\index.html";i:1530071120;s:64:"D:\phpStudy\PHPTutorial\WWW\application\index\view\pub\head.html";i:1530261761;s:63:"D:\phpStudy\PHPTutorial\WWW\application\index\view\pub\nav.html";i:1527563118;s:64:"D:\phpStudy\PHPTutorial\WWW\application\index\view\pub\foot.html";i:1531292320;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>美女图片_性感高清美女模特图片写真-<?php echo $site['site_name']; ?></title>
    <meta name="keywords" content="美女图片，性感美女，美女写真，性感美女图片，妹子图，美女图片 高清，美女图片大全">
    <meta name="description" content="<?php echo $site['site_name']; ?>高清性感美女图片大全网站，分享优美高清美女图片内容、集性感美女、美女写真、妹子图、美女动态图、美女艺术摄影、美女明星模特图片等。图片分类清晰，让您一目了然找到喜欢的美女图片。">
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


<div class="slider">
    <div class="bd">
        <div class="tempWrap" style="overflow:hidden; position:relative; width:5415px">
            <div style="width: 15162px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -5415px;">
                <ul style="width: 15162px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -5415px;">
                    <?php if(is_array($lunbo) || $lunbo instanceof \think\Collection || $lunbo instanceof \think\Paginator): $i = 0; $__LIST__ = $lunbo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="txt_top" style="float: left; width: 1083px;">
                        <a href="/brand/<?php echo $vo['id']; ?>">
                            <img src="/public/static/upload/brand/<?php echo $vo['nick_name']; ?>/banner.jpg" alt="<?php echo $vo['brand_name']; ?>写真集">
                            <div class="txtshow"><?php echo $vo['brand_name']; ?>写真集欣赏</div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="pnBtn prev">
            <span class="blackBg"></span>
            <a class="arrow" href="javascript:void(0)" style="display: none;"></a>
        </div>
        <div class="pnBtn next">
            <span class="blackBg"></span>
            <a class="arrow" href="javascript:void(0)" style="display: none;"></a>
        </div>
    </div>
</div>
<div class="index_listc">
    <div class="indexTitle" data-unuse="1">
        <span class="indexTitleT f20 yh c666">套图推荐</span>
        <div class="itMore" data-unuse="1">
            <a href="/taotu/newest" class="imgitem" target="_blank">更多更新</a>
        </div>
    </div>
    <div class="camWholeBox borderTop">
        <ul class="layout camWholeBoxUl">
            <?php if(is_array($taotus) || $taotus instanceof \think\Collection || $taotus instanceof \think\Paginator): $i = 0; $__LIST__ = $taotus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="min-h-imgall">
                <a href="/taotu/<?php echo $vo['id']; ?>" class="itemimg" title="<?php echo $vo['title']; ?>" target="_blank">
                    <img src="/public/static/upload/taotu/<?php echo $vo['id']; ?>/thumb.jpg" width="196" height="265"
                         alt="<?php echo $vo['title']; ?>">
                    <div class="itemset-num">
                        <span class="num"><?php echo $vo['count']; ?></span>
                        <span class="text">张</span>
                    </div>
                </a>
                <div class="camLiCon">
                    <div class="camLiTitleC hot">
                        <p><a href="/taotu/<?php echo $vo['id']; ?>" title="<?php echo $vo['title']; ?>" target="_blank"><?php echo $vo['title']; ?></a>
                        </p>
                    </div>
                    <div class="camLiDes">
                        <span class="mr3"><i class="icon iconfont fontico">ღ</i><?php echo $vo['update_time']; ?></span>
                        <span class="mr3" id="hot"><i class="icon iconfont fontico"></i></span>
                        <script>
                            var num = Math.floor(Math.random() * 10000);
                            $('#hot').text(num);
                        </script>
                    </div>
                </div>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>
<div style="width:1083px; height:90px; margin:10px auto;">
    <script src=""></script>
    <div style="width:1082px;height:88px;border:0px dotted #ccc;text-align: center;line-height: 88px;background-color: #FFF;color: #333;font-family: 微软雅黑 Light;font-size: 20px;-moz-border-radius:4px;-webkit-border-radius: 4px;">
        精品广告位 ID:5 1080x90
    </div>
</div>
<?php if(is_array($brands) || $brands instanceof \think\Collection || $brands instanceof \think\Paginator): $i = 0; $__LIST__ = $brands;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
<div class="index-box2 pb10" id="JS-news">
    <div class="box2 layout">
        <div class="indexTitle b-1-f4f4f4 mb20" data-unuse="1">
                <span class="indexTitleT f20 yh c666">
                    <a href="/brandlistall/<?php echo $key; ?>" target="_blank">
                       <?php switch($key): case "jigou": ?>品牌大全<?php break; case "meinvdalei": ?>美女大全<?php break; case "diyufenbu": ?>各国风情<?php break; case "shencaitizheng": ?>各类身材<?php break; case "zhuozhuangleixing": ?>着装特色<?php break; case "tedingchangjing": ?>特定场景<?php break; case "mingxingmote": ?>明星模特<?php break; case "tedingleixing": ?>特定类型<?php break; endswitch; ?>
                    </a>
                </span>
            <div class="itMore" data-unuse="1">
                <a href="/brandlistall/<?php echo $key; ?>" class="title_rbt" target="_blank">查看全部</a>
            </div>
        </div>
        <div class="tab-box2">
            <div class="tab-box2-nr news1 layout" style="display:block;">
                <ul class="fn-clear news-list" id="list1">
                    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="/brand/<?php echo $vo['id']; ?>" class="imgitem">
                            <img src="/public/static/upload/brand/<?php echo $vo['nick_name']; ?>/thumb.jpg" alt="<?php echo $vo['brand_name']; ?>">
                            <span class="h2"><?php echo $vo['brand_name']; ?></span>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>

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