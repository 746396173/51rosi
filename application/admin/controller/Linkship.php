<?php
/**
 * Created by PhpStorm.
 * User: hiliq
 * Date: 2018/7/11
 * Time: 14:11
 */

namespace app\admin\controller;

use app\admin\model\Linkship as LinkshipModel;
use think\Request;

class Linkship extends BaseAdmin
{
    public function index(){
        $links = LinkshipModel::where('id','>','-1')->order('id','desc')
            ->paginate(10,false, [
                'query' => request()->param(),
                'type' => 'util\AdminPage',
                'var_page' => 'page'
            ]);
        $this->assign('links',$links);
        $this->assign('title','友链管理');
        return $this->fetch();
    }

    public function add(){
        $this->assign('title', '友链新增');
        return $this->fetch();
    }

    public function addsave(Request $request){
        $link = new LinkshipModel();
        $link->link_name = $request->post('link_name');
        $link->link_addr = $request->post('link_addr');
        $result = $link->save();
        if ($result){
            return $this->success('添加成功','index','',1);
        }else{
            return $this->error('添加失败');
        }
    }

    public function edit(Request $request){
        $id = $request->get('id');
        $link = LinkshipModel::get($id);
        if (!$link) {
            $this->error('找不到该友链!');
        }
        $this->assign('link',$link);
        $this->assign('title','友链编辑');
        return $this->fetch();
    }

    public function editsave(Request $request){
        $link = LinkshipModel::get($request->post('id'));
        if (!$link){
            return $this->error('找不到该友链');
        }
        $link->link_name = $request->post('link_name');
        $link->link_addr = $request->post('link_addr');
        $result = $link->save();
        if ($result){
            return $this->success('编辑成功','index','',1);
        }else{
            return $this->error('编辑失败');
        }
    }

    public  function delete(Request $request){
        $link = LinkshipModel::get($request->get('id'));
        if (!$link){
            return $this->error('找不到该友链');
        }
        $result = $link->delete();
        if ($result){
            return $this->success('删除成功','index','',1);
        }else{
            return $this->error('删除失败');
        }
    }
}