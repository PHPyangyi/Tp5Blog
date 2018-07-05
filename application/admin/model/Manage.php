<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 18:30
     */

    namespace app\admin\model;


    use think\Model;

    class Manage extends Model
    {
        public function getAll ()
        {
           return $this->field("blog_manage.*,blog_level.name")->join("blog_level","blog_manage.lid=blog_level.id")->paginate(10,false);
        }

        public function getOne ($id)
        {
            return $this::find($id);
        }

        public function add ($data)
        {
            $data['password']=sha1($data['password']);
            return $this::save($data);
        }

        public function updates ($data,$id)
        {
            if ($data['password']) {
                $newdata['password']=sha1($data['password']);
                $newdata['lid']=$data['lid'];
            } else {
                $newdata['lid']=$data['lid'];
            }
            return $this::save($newdata,['id'=>$id]);
        }

        public function login ($data)
        {
            $manage=Manage::getByUsername($data['username']);
            if($manage){
                if($manage['password']==sha1($data['password'])){
                    $premission=db('level')->where('id',$manage['lid'])->find();

                    session('id', $manage['id']);
                    session('username', $manage['username']);
                    session('premission', $premission['premission']);

                    return 2; //登录密码正确的情况
                }else{
                    return 3; //登录密码错误
                }
            }else{
                return 1; //用户不存在的情况
            }






        }

    }