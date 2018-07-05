<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/4
     * Time: 12:19
     */

    namespace app\admin\controller;


    class Comment extends Common
    {
        public function lst ()
        {
            $comment=db('Comment');
            $this->assign('comment',$comment->paginate(10,false));
            return view();
        }
        public function del ($id)
        {
            $comment=db('Comment');
            $comment->delete($id);
        }
    }