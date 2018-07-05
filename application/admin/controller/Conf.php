<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 17:10
     */

    namespace app\admin\controller;


    class Conf extends Common
    {
        public function lst ()
        {
            $conf=db('conf');
            if (request()->isPost()) {
                $data=input('post.');
                $conf->where('id',1)-> update($data);
            }


            $this->assign('conf',$conf->find(1));
            return view();
        }


        //log 图片上传
        public function log ()
        {
            $file=request()->file('logs');
            if ($info=$file->move('./uploads/')) {
                // return '1'. $info->getsaveName();
                $response['success'] = 1;
                $response['filename']=$info->getsaveName();
                echo json_encode($response);
            }else{
                return '0';
            }
        }

        // //log 图片上传
        public function background ()
        {
            $file=request()->file('backgrounds');
            if ($info=$file->move('./uploads/')) {
                // return '1'. $info->getsaveName();
                $response['success'] = 1;
                $response['filename']=$info->getsaveName();
                echo json_encode($response);
            }else{
                return '0';
            }
        }

    }