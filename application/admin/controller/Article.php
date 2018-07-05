<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 10:31
     */

    namespace app\admin\controller;




    class Article extends Common
    {
        public function  lst ()
        {
            $article=model('article');
            $articleAll=$article->lst();
            $this->assign('article',$articleAll);
            return view();
        }

        public function add ()
        {
            if(request()->isPost()){
                $data=input('post.');
                $article=model('article');
                $article->add($data)?$this->success('数据添加成功',url('lst')):$this->error('数据添加失败');
            }

            return view();
        }

        public function edit ($id)
        {
            $article=model('article');
            if (request()->isPost()) {
                $data=input('post.');
                $article->updates($data,$id)?$this->success('数据修改成功',url('lst')):$this->error('数据修改失败');
            }
            //get one data
            $one=$article->getOne($id);
            $this->assign('one',$one);
            return view();
        }

        public function del ($id)
        {
            $article=model('article');
            $article->del($id)?$this->success('数据删除成功',url('lst')):$this->error('数据删除失败');
        }

    }