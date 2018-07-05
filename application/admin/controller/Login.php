<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 18:54
     */

    namespace app\admin\controller;


    use think\Controller;

    class Login extends Controller
    {
        public function index ()
        {
            if(request()->isPost()){
                $this->check(input('code'));
                $manage=model('Manage');
                $num=$manage->login(input('post.'));
                if($num==1){
                    $this->error('用户不存在！');
                }
                if($num==2){
                    $this->success('登录成功！',url('index/index'));
                }
                if($num==3){
                    $this->error('密码错误！');
                }
                return;
            }
            return view();
        }

        private function check ($code="")
        {
            if (!captcha_check($code)) {
                $this->error('验证码错误');
            } else {
                return true;
            }
        }


        public function logout()
        {
            session(null);
            $this->success('退出系统成功！',url('login/index'));
        }

    }