<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/4
     * Time: 17:33
     */

    namespace app\admin\model;


    use think\Model;

    class About extends Model
    {
        //get one
        public function getOne ()
        {
            return $this::find(1);
        }

        //updates
        public function updates ($data)
        {
            return $this::save($data,['id'=>1]);
        }
    }