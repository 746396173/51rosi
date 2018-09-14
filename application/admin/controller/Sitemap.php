<?php
/**
 * Created by PhpStorm.
 * User: hiliq
 * Date: 2018/7/13
 * Time: 22:29
 */

namespace app\admin\controller;

use app\index\model\Site as SiteModel;
use app\index\model\Taotu as TaotuModel;

class Sitemap extends BaseAdmin
{
    public function index()
    {
        $content = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
        $data_array = $this->create_array();
        foreach ($data_array as $data) {
            $content .= $this->create_item($data);
        }
        $content .= '</urlset>';
        $fp = fopen($_SERVER['DOCUMENT_ROOT'] .'/sitemap.xml', 'w+');
        fwrite($fp, $content);
        fclose($fp);
        return $this->success('生成网站地图成功','/admin','',1);
    }

    private function create_array(){
        $site_name = SiteModel::get(0)->column('pc_url')[0];
        $data = array();
        $main = array(
            'loc' => $site_name,
            'priority' => '1.0',
            //'lastmod' => date("Y-m-d"),
            //'changefreq' => 'always'
        );
        $brand_newest = array(
            'loc' => $site_name.'/brand/newest',
            'priority' => '0.5',
            'lastmod' => date("Y-m-d"),
            'changefreq' => 'yearly'
        );
        $taotu_newest = array(
            'loc' => $site_name.'/taotu/newest',
            'priority' => '0.5',
            'lastmod' => date("Y-m-d"),
            'changefreq' => 'yearly'
        );
        $taotus = TaotuModel::all();
        foreach ($taotus as $key=>$taotu){ //这里构建所有的内容页数组
            $temp = array(
                'loc' => $site_name.'/taotu/'.$taotu->id,
                'priority' => '0.9',
                //'lastmod' => $taotu->update_time,
                //'changefreq' => 'yearly'
            );
            array_push( $data,$temp);
        }
        array_push($data,$main);
        array_push($data,$brand_newest);
        array_push($data,$taotu_newest);
        array_push($data,$this->create_category_array($site_name,'meinvdalei'));
        array_push($data,$this->create_category_array($site_name,'mingxingmote'));
        array_push($data,$this->create_category_array($site_name,'jigou'));
        return $data;
    }


    private function create_category_array($site_name,$cate_name){
        $array = array(
            'loc' => $site_name.'/brandlistall/'.$cate_name,
            'priority' => '0.5',
            //'lastmod' => date("Y-m-d"),
            //'changefreq' => 'yearly'
        );
        return $array;
    }


    private function create_item($data)
    {
        $item = "<url>\n";
        $item .= "<loc>" . $data['loc'] . "</loc>\n";
        $item .= "<priority>" . $data['priority'] . "</priority>\n";
        $item .= "</url>\n";
        return $item;
    }
}