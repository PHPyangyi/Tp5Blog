<?php
    /**
     * Created by PhpStorm.
     * User: 阳毅
     * Date: 2018/7/3
     * Time: 10:53
     */

    namespace app\admin\model;


    use think\Model;

    use think\Image;

    class Article extends Model
    {
        //push img
        private function thumb()
        {
            $file=request()->file('thumb');
            if ($info=$file->move(ROOT_PATH . 'public' . DS .'static'. DS.'admin'.DS.'uploads')) {
                $imgs=str_replace('\\','/',$info->getPath().'\\'.$info->getFilename())  ;
                $images=Image::open($imgs);
                $images->thumb(358,239,2)->save(str_replace('\\','/',$info->getPath().'\\'.'thumb'.$info->getFilename()));
                return str_replace('\\','/',$info->getPath().'\\'.'thumb'.$info->getFilename());
            }else{
                return   $info->getError();
            }
        }

        //get all limit
        public function lst ()
        {
            return $this::paginate(10,false);
        }

        //get one

        public function getOne ($id)
        {
            return $this::find($id);
        }

        //add
        public function add ($data)
        {
            if($_FILES['thumb']['tmp_name'] != ''){
                $data['thumb']=$this->thumb();
            }
            $data['date']=time();
            return  $this::save($data);
        }

        //update
        public function updates ($data,$id){
            if($_FILES['thumb']['tmp_name'] != ''){
                $data['thumb']=$this->thumb();
            }
            return $this::save($data,['id'=>$id]);

        }

        //del
        public function del ($id)
        {
            return $this::destroy($id);
        }


    }