<?php
namespace app\index\controller;

use think\Controller;

class Index  extends Controller
{
    public function index()
    {
         return $this->fetch();
    }

    public function index2()
    {
        return 'headers_list';
    }

 
//view/index/index.html

    // 视图渲染
      public function edit()
    {
      return $this->fetch();
    }
}
