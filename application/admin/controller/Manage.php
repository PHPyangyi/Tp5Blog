<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 18:28
     */

    namespace app\admin\controller;



    class Manage extends Common
    {
        public function lst ()
        {
            $manage=model('Manage');
            $this->assign('manageAll',$manage->getAll());
            return view();
        }


        public function add ()
        {
            if (request()->isPost()) {
                $data=input('post.');
                $manage=model('Manage');
                $manage->add($data)?$this->success('数据添加成功',url('lst')):$this->error('数据添加失败');
            }
            //get level
            $this->getLevel();
            return view();
        }

        public function edit ($id)
        {
            $manage=model('Manage');
            if (request()->isPost()) {
                $data=input('post.');
                $manage->updates($data,$id)?$this->success('数据修改成功',url('lst')):$this->error('数据修改失败');
            }
            //get one
            $this->assign('one',$manage->getOne($id));
            $this->getLevel();
            return view();
        }

        private function getLevel ()
        {
            $level=db('Level');
            $this->assign('level',$level->select());
        }

    }