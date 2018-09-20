<?php
/**
 * Created by PhpStorm.
 * User: hiliq
 * Date: 2018/7/8
 * Time: 16:18
 */

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;
use app\index\model\Site as SiteModel;
use app\admin\model\Linkship as LinkModel;

class Base extends Controller
{
    protected $site = '';
    protected $links = [];
    public function __construct(Request $request = null)
    {
        $this->site = SiteModel::get(0)->cache(true,600);
        $this->links = Db::cache(true,600)->select();
        parent::__construct($request);
        $this->assign('links',$this->links);
        $this->assign('site',$this->site);
    }
}