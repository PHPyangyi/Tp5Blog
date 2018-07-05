<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/4
     * Time: 11:49
     */

    namespace app\admin\model;


    use think\Model;

    class Contact extends Model
    {
        //
        public function getStateAttr ($value)
        {
            switch ($value) {
                case '0':
                    return "<span style='color:red'>未读</span>";
                    break;
                case "1":
                    return "<span style='color:green'>已读</span>";
                    break;
            }
        }

        //get all
        public function getAll ()
        {
            return $this::paginate(10,false);
        }

        public function del ($id)
        {
            return $this::destroy($id);
        }
    }