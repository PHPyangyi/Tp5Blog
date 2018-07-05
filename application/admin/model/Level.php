<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 18:08
     */

    namespace app\admin\model;


    use think\Model;

    class Level extends Model
    {
        public function getAll ()
        {
            return $this::paginate(10,false);
        }

        public function getOne ($id)
        {
            return $this::find($id);
        }

        public function add ($data)
        {
           $data['premission'] =implode(',',$data['premission']);
            return $this::save($data);
        }
        public function updates ($data,$id)
        {
            $data['premission'] =implode(',',$data['premission']);
            return $this::save($data,['id'=>$id]);
        }
        public function del ($id)
        {
            return $this::destroy($id);
        }
    }