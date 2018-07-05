<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/4
     * Time: 11:09
     */

    namespace app\index\controller;



    class About extends Common
    {
        public function index ()
        {
            $about=db('about')->find(1);
            $this->assign('about',$about);
            return view();
        }
    }