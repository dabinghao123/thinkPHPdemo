<?php
namespace app\index\controller;
use think\Db;
use think\Request;
use think\Controller;

class User extends Controller
{  
	   /**
     * @var \think\Request Request实例
     */
    protected $request;

   public function __construct(Request $request)
    {    
    	 echo __CLASS__.'/'.__FUNCTION__;
         parent::__construct(); 

        

    	if (isset($request)) {
    		$this->request = $request;
    	}

		
    }
    
    //数据库连接
// http://localhost/phpDemo/public/index.php/index/user/id/15111408430
    public function index()
    {
      // $array = array("foo" => "bar","bar" => "foo",);
    // 查询数据
    	 $username  = $this->request->param('id');
    	 $name  = $this->request->param('name');

    	if (isset($username) && !empty($username)) {
    	    $list = Db::name('user')->where('username',$username) ->select();
           
            if (empty($list)) {
      	        return '查询不到用户信息';
             }

             return  json_encode($list[0]).$name;

    	}else{

             return  '用户地为空';
    	}
    }

// 打印json数据
     public function index2()
    {
       $array = ["foo2","bar","bar2","foo"];

       $arrayStr = json_encode($array);

       return  $arrayStr;
    }

// 视图渲染
      public function edit()
    {
      return $this->fetch();
    }


}
?>