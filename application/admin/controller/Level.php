<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 10:20
     */

    namespace app\admin\controller;



    class Level extends  Common
    {
        public function lst ()
        {
            $level=model('Level');
            $this->assign('levelAll',$level->getAll());
            return view();
        }
        public function add ()
        {
            if (request()->isPost()) {
                $data=input('post.');
                $level=model('Level');
                $level->add($data)?$this->success('数据添加成功',url('lst')):$this->error('数据添加失败');

            }
            $this->getJurisdiction();
            return view();
        }

        public function edit ($id)
        {
            $level=model('Level');
            if (request()->isPost()) {
                $data=input('post.');
                $level->updates($data,$id)?$this->success('数据修改成功',url('lst')):$this->error('数据修改失败');
            }
            //get one
            $this->assign('level',$level->getOne($id));
            $this->getJurisdiction();
            return view();
        }

        public function del ($id)
        {
            $level=model('Level');
            $level->del($id)?$this->success('数据删除成功',url('lst')):$this->error('数据删除失败');
        }

        private function getJurisdiction ()
        {
            $jurisdiction=db('Jurisdiction');
            $jurisdictionAll=$jurisdiction->select();
            $this->assign('jurisdiction',$jurisdictionAll);
        }
    }