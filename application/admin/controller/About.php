<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/6/25
     * Time: 19:21
     */

    namespace app\admin\controller;


    class About  extends Common
    {
        public function lst ()
        {
            $about=model('About');
            $this->assign('a',$about->getOne());
            return view();
        }

        public function add ()
        {
            $about=model('About');
            if (request()->isPost()) {
                $data=input('post.');
                $about=model('About');
                $about->updates($data)?$this->success('修改成功',url('lst')) :$this->error('修改失败');
            }
            $this->assign('a',$about->getOne());
            return view();
        }
    }