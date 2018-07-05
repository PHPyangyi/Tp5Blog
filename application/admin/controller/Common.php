<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 19:21
     */

    namespace app\admin\controller;


    use think\Controller;

    class Common extends Controller
    {
        public function _initialize()
        {
            if(!session('id') || !session('username')){
                $this->error('您尚未登录系统',url('login/index'));
            }

            if (!strstr(session('premission'),request()->controller())) {
                $this->error('权限不足');
            }
            $this->num();
            $this->left();
        }


        private function left ()
        {
            $this->assign('con',request()->controller());
        }

        private function num ()
        {
            $count=db('contact')->where('state','0')->count();
            $this->assign('num',$count);
        }

    }