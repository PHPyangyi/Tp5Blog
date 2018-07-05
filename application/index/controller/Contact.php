<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/4
     * Time: 11:07
     */

    namespace app\index\controller;



    class Contact extends Common
    {
        public function index ()
        {
            if (request()->isPost()) {
                $data=input('post.');
                $data['date']=time();
                $contact=db('contact')->insert($data);
                if ($contact) {
                    $this->success('数据提交成功');
                } else {
                    $this->error('数据提交失败');
                }
            }
            return view();
        }
    }