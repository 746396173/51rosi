<?php
/**
 * Created by PhpStorm.
 * User: hiliq
 * Date: 2018/5/8
 * Time: 16:06
 */

namespace app\index\controller;
use app\index\model\Photo;
use app\index\model\Taotu as TaotuModel;
use app\index\model\Brand as BrandModel;
use app\index\model\Photo as PhotoModel;
use think\Db;


class Taotu extends Base
{
    public function index($id){
        //$site = SiteModel::get(0);
        $taotus = Db::query("SELECT ad1.id,title,update_time
FROM taotu AS ad1 JOIN (SELECT ROUND(RAND() * ((SELECT MAX(id) FROM taotu)-(SELECT MIN(id) FROM taotu))+(SELECT MIN(id) FROM taotu)) AS id)
 AS t2 WHERE ad1.id >= t2.id ORDER BY ad1.id LIMIT 9");
        $taotu = TaotuModel::get($id); //TaotuModel::get($id);
        $tags = explode("|",$taotu->tags);
        $brands = BrandModel::where('brand_name','in',$tags)->cache(true,600)->select();
        $brand = $brands[array_rand($brands,1)];
        if (isMobile()){
            $page = 'Mpage'; //选择分页设置
        }else{
            $page = 'Page2';
        }
        $photos = PhotoModel::where('taotu_id',$id)
            ->cache(true,600)
            ->paginate(1,false,[ //套图分页
            'query'=>request()->param(),
            'type'      => 'util\\'.$page,
            'var_page'  => 'page',
        ]);

        $this->assign('brand',$brand);
        $this->assign('brands',$brands);
        $this->assign('photos',$photos);
        $this->assign('taotus',$taotus);
        $this->assign('taotu',$taotu);
        if (isMobile()){
            return $this->fetch('mindex');
        }else{
            return $this->fetch();
        }
    }

    public function newest(){
        //$site = SiteModel::get(0);
        $taotus = TaotuModel::where('id','>',0)
            ->cache(true,600)
            ->order('id','desc')->limit(100)->select();
        foreach ($taotus as $taotu){
            $taotu->count = count($taotu->photos);
        }
        //$this->assign('site',$this->site);
        $this->assign('taotus',$taotus);
        if (isMobile()){
            return $this->fetch('mnewest');
        }else{
            return $this->fetch();
        }
    }
}