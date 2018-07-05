<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 17:15
     */

    namespace app\admin\controller;



    class Jurisdiction extends Common
    {
        public function lst ()
        {
            $jurisdiction=model('Jurisdiction');
            $jurisdictionAll=$jurisdiction->getAll();
            $this->assign('jurisdictionAll',$jurisdictionAll);
            return view();
        }

        public function add ()
        {
            if (request()->isPost()) {
                $data=input('post.');
                $jurisdiction=model('Jurisdiction');
                $jurisdiction->add($data)?$this->success('数据添加成功',url('lst')):$this->error('数据添加失败');
            }
            return view();
        }

        public function edit ($id)
        {
            $jurisdiction=model('Jurisdiction');
            if (request()->isPost()) {
                $data=input('post.');
                $jurisdiction->updates($data,$id)?$this->success('数据修改成功',url('lst')):$this->error('数据修改失败');
            }
            //get one
            $this->assign('one',$jurisdiction->getOne($id));
            return view();
        }

        public function del ($id)
        {
            $jurisdiction=model('Jurisdiction');
            $jurisdiction->del($id)?$this->success('数据删除成功',url('lst')):$this->error('数据删除失败');
        }

    }