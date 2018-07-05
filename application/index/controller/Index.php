<?php
namespace app\index\controller;


class Index extends Common
{
    public function index()
    {
        //article
        $article=db('article')->order('id desc')->paginate($this->confs['article'],false);
        $this->assign('article',$article);
        return view();
    }
}
