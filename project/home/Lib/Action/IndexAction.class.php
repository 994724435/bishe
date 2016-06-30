<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction{
    public function index(){
		$this->display();
    }
	
    //用户关注列表
    public function AllList(){

//  	$open_id='ddadfasfasdfaf';		//索取用户关注id号
		$open_id=session('open_id');
    	$user=M('User');
		$result =$user->where(array('open_id'=>$open_id))->select();
		$colle=explode(",",$result[0]['colle']); 
		$data['Lid'] = array('IN',$colle);	
    	$ZCobj=M('List');				//显示用户关注
    	$list= $ZCobj->where($data)->select();

    	import('ORG.Util.Page');// 导入分页类
		$count      = count($list);// 查询满足要求的总记录数
		$Page       = new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
       $list = $ZCobj->where($data)->limit($Page->firstRow.','.$Page->listRows)->select();
       	if($_POST['search']){
    		foreach ($list as $k=>$v){
    			$bool = strstr($list[$k]['Lname'],$_POST['search']); 
    			if($bool){   				
    			}else{
    			   unset($list[$k]);
    			} 		
    		}
    	}
    	
    	$this->assign("list",$list);
    	$this->assign('page',$show);// 赋值分页输出
    	$this->display();
    }
	
	//用户关注collct
	public function collct(){
//		$open_id='ddadfasfasdfaf';	
        $open_id=session('open_id');
		$listObj= M('User');
		$result= $listObj->where(array('open_id'=>$open_id))->select();
		
		$colle	=explode(",",$result[0]['colle']); 	
		array_push($colle,$_GET['Lid']);
		$colle2	=array_unique($colle);    	//除去数组重复元素
		$data['colle'] =implode(",",$colle2);
		
		$result= $listObj->where(array('open_id'=>$open_id))->save($data);
		if($result){
			echo "<script type='text/javascript'>alert('收藏成功');
			location.href='".__ROOT__."/index.php/Index/AllList';</script>";
		}else{
			echo "<script type='text/javascript'>alert('你已收藏');
			location.href='".__ROOT__."/index.php/Index/AllList';</script>";
		}
	}
	
    //扫描二维码详情页面
    public function detail(){
//  	$Lid =$_GET['Lid'];
    	$Lid = isset($_GET['Lid']) ? $_GET['Lid'] : 1;
    	$deObj =M('List');
    	if($_POST['text']){
    		
//    		print_r($_POST);
    		$replyObj =M('Reply');
    		$replyObj->add(array('Lid'=>$_POST['id'],'comtent'=>$_POST['text'],'time'=>date('Y-m-d'),'name'=>session('name')));
    	    echo "<script type='text/javascript'>alert('您的建议我们已经汇报给管理员，请耐心等待！');</script>";  
    	}
    	$list= $deObj->where(array('Lid'=>$Lid))->select();
//    	print_r($list);die;
    	$this->assign("list",$list[0]);
    	$this->display();
    }
    
	//用户取消关注
    public function delete(){
     	$Lid 	=$_GET['Lid'];	//去掉的ID
     	$open_id=session('open_id');
//		$open_id='ddadfasfasdfaf';
		$listObj=M(User);
		$list	=$listObj->where(array('open_id'=>$open_id))->select();
		$num	=$list[0]['colle'];		//现有的ID
		
		$colle	=explode(",",$num); 
		$colle2	=array_unique($colle);    	//除去数组重复元素
		$key	=array_search($Lid , $colle2) ; //  除去接受数据流的ID
 		unset($colle2[$key]);

		$data['colle'] =implode(',', $colle2);	//新数据
		
		$result= $listObj->where(array('open_id'=>$open_id))->save($data);
		if($result){
			echo "<script type='text/javascript'>alert('删除成功');
			location.href='".__ROOT__."/index.php/Index/AllList';</script>";
		}else{
			echo "<script type='text/javascript'>alert('删除失败');
			location.href='".__ROOT__."index.php/Index/AllList';</script>";

		}
		
    }
    
	
    public function signin(){
    	$this->display();
    }
    
	// 显示系统常量
	public function systemList() {
		session('open_id','ddadfasfasdfaf');  //设置session
		print_r(session('open_id'));
		header ( "content-type:text/html;charset=utf-8" );
	
		$str1 = "网站根目录地址：__ROOT__ :******************" . __ROOT__ . "<br>";
		$str2 = "当前项目（入口文件）地址：__APP__ :******************" . __APP__ . "<br>";
		$str3 = "当前模块的URL地址 ：__URL__ :******************" . __URL__ . "<br>";
		$str4 = "当前操作的URL地址  ：__ACTION__ :******************" . __ACTION__ . "<br>";
		$str5 = "当前URL地址   ：__SELF__ :******************" . __SELF__ . "<br>";
		$str6 = "当前项目名     ：APP_NAME :******************" . APP_NAME . "<br>";
		$str7 = "当前项目路径     ：APP_PATH :******************" . APP_PATH . "<br>";
		$str8 = "系统框架路径    ：THINK_PATH :******************" . THINK_PATH . "<br>";
	
		echo $str1 . $str2 . $str3 . $str4 . $str5 . $str6 . $str7 . $str8 . $str9;
	
	}
}