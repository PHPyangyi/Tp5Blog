<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/4
     * Time: 10:50
     */

    namespace app\index\controller;



    class Details extends Common
    {
//        public function index ($id)
//        {
//            if (request()->isPost()) {
//                $data=input('post.');
//                $data['date']=time();
//                $data['aid']=$id;
//                $common=db('comment')->insert($data);
//                if ($common) {
//                    $this->success('数据提交成功');
//                } else {
//                    $this->error('数据提交失败');
//                }
//            }
//
//            $details=db('article')->find($id);
//            $this->assign('details',$details);
//
//            $comment=db('comment')->where('aid',$id)->paginate($this->confs['comment'],false);
//            $this->assign('comment',$comment);
//
//            $commentnum=db('comment')->where('aid',$id)->count();
//            $this->assign('num',$commentnum);
//
//
//            return view();
//        }

        public function lst ()
        {
            return view();
        }
    }