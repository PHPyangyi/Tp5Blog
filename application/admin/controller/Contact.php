<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 12:15
     */

    namespace app\admin\controller;



    class Contact extends Common
    {
        public function lst ()
        {

            $contact=model('Contact');
            $this->assign('contact',$contact->getAll());
            return view();
        }
        public function details ($id)
        {
            $details=db('contact');
            $details->where('id',$id)->update(['state'=>1]);
            $this->assign('one',$details->find($id));
            return view();
        }

        public function del ($id)
        {
            $contact=model('Contact');
            $contact->del($id)?$this->success('数据删除成功',url('lst')):$this->error('数据删除失败');
        }

    }