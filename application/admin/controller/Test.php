<?php
/**
 * Created by PhpStorm.
 * User: hiliq
 * Date: 2018/7/27
 * Time: 10:54
 */

namespace app\admin\controller;

use app\index\model\Site as SiteModel;
class Test extends BaseAdmin
{
    public function index(){
        $site = SiteModel::get(0);
        $url = $site->pc_url;
        echo $url;
    }
}