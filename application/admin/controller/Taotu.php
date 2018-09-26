<?php
/**
 * Created by PhpStorm.
 * User: hiliq
 * Date: 2018/5/23
 * Time: 16:28
 */

namespace app\admin\controller;

use app\index\model\Taotu as TaotuModel;
use app\index\model\Site as SiteModel;
use think\Log;
use think\Request;

class Taotu extends BaseAdmin
{
    public function index(){
        $taotus = TaotuModel::where('id','>',0)->order('id','desc')
            ->paginate(10,false,[
                'query'=>request()->param(),
                'type'      => 'util\AdminPage',
                'var_page'  => 'page'
            ]);
        $this->assign('taotus',$taotus);
        $this->assign('title','套图管理');
        return $this->fetch();
    }

    public function edit(Request $request){
        $taotu = TaotuModel::get($request->get('id'));
        if (!$taotu){
            $this->error('找不到该套图！');
        }
        $this->assign('taotu',$taotu);
        $this->assign('title','套图编辑');
        return $this->fetch();
    }

    public function editsave(Request $request){
        $taotu = TaotuModel::get($request->post('id'));
        if (!$taotu){
            $this->error('找不到该套图！');
        }
        $taotu->title = $request->post('title');
        $taotu->tags = $request->post('tags');
        $taotu->source_url = $request->post('source_url');
        $taotu->update_time = date("Y-m-d H:i:s");
        $result = $taotu->save();
        $file = $request->file('thumb');
        $info = null;
        $dir = ROOT_PATH . 'public/static/upload/taotu/'.$taotu->id;
        if ($file){
            if (!file_exists($dir)){
                mkdir($dir, 0777, true);
            }
            $info = $file->validate(['size'=>1024000,'ext'=>'jpg'])
                ->move($dir,'thumb.jpg');
        }
        if($result){

            $this->success('编辑成功','index','',1);
        } else {
            if ($info){
                $this->success('修改缩略图成功','index','',1);
            }
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('编辑失败');
        }
    }

    public function add(){
        $this->assign('title','套图新增');
        return view();
    }

    public function addsave(Request $request){
        $taotu = new TaotuModel();
        $taotu->title = $request->post('title');
        $taotu->tags = $request->post('tags');
        $taotu->source_url = $request->post('source_url');
        $result = $taotu->save();

        $api = config('xiongzhangtuisong'); //加载熊掌号接口配置
        $site = SiteModel::get(0);
        $url = $site->pc_url.'/taotu/'.$taotu->id;
        trace(xiongzhang_push($api,$url),'xiongzhangpush_log'); //调用熊掌号新增接口推送

        $file = $request->file('thumb');
        $info = null;
        $dir = ROOT_PATH . 'public/static/upload/taotu/'.$taotu->id;
        if ($file){
            if (!file_exists($dir)){
                mkdir($dir, 0777, true);
            }
            //上传并生成套图的缩略图
            $path = $dir.'/thumb.jpg';
            img_process($file,196,265,$path);
//            $info = $file->validate(['size'=>1024000,'ext'=>'jpg'])
//                ->move($dir,'thumb.jpg');
        }
        if($result){

            $this->success('添加成功','index','',1);
        } else {
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('添加失败');
        }
    }

    public function delete(Request $request){
        $taotu = TaotuModel::get($request->get('id'));
        if (!$taotu){
            $this->error('找不到该套图！');
        }
        $result = $taotu->delete();
        if($result){

            $this->success('删除成功','index','',1);
        } else {
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('删除失败');
        }
    }
}