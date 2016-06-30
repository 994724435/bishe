<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends CommonAction{	

	public function prize(){
	     $num =rand(1, 5);
	     switch ($num){
	     	case 1:
	     		echo "<script>window.location.href='/project/index.php/User/one';</script>";exit;
	     		break;
	     	case 2:
	     		echo "<script>window.location.href='/project/index.php/User/two';</script>";exit;
	     		break;
	     	case 3:
	     		echo "<script>window.location.href='/project/index.php/User/three';</script>";exit;
	     		break;
	     	default:
	     	    echo "<script>window.location.href='/project/index.php/User/four';</script>";exit;
	     		break;			
	     }
	}
	
	public function user(){
	   $userobj =M('user');
	   if($_POST){
//	        print_r($_POST);die;
		  	$data['age'] = $_POST['age'];
		  	$data['tel'] = $_POST['tel']; 
		  	$data['email'] = $_POST['email']; 
		  	$userobj->where(array('open_id'=>session('open_id')))->save($data);
		  	  echo "<script>alert('保存成功！');</script>";
	   }
	   $user    = $userobj->where(array('open_id'=>session('open_id')))->select();
	   if($user[0]['sex']==1){
	   	  $user[0]['sex']="男";
	   }else{
	      $user[0]['sex']="女";
	   }
	   $this->assign('user',$user[0]);
	   $this->display();
	}
	
	public function one(){
		$userobj =M('user');
		$prize =$userobj->field('prize')->where(array('open_id'=>session('open_id')))->select();
		if($prize[0]['prize']){
			//你已经抽奖了
			echo "<script>alert('你已经抽过奖了');window.location.href='/project/index.php/Index/AllList';</script>";exit;
		}else{
		    $result =$userobj->where(array('open_id'=>session('open_id')))->save(array('prize'=>"一等奖"));
		}
		$this->display();
	}
	
	public function two(){
		$userobj =M('user');
		$prize =$userobj->field('prize')->where(array('open_id'=>session('open_id')))->select();
		if($prize[0]['prize']){
			//你已经抽奖了
			echo "<script>alert('你已经抽过奖了');window.location.href='/project/index.php/Index/AllList';</script>";exit;
		}else{
		    $result =$userobj->where(array('open_id'=>session('open_id')))->save(array('prize'=>"二等奖"));
		}
		$this->display();
	}
	
	public function three(){
		$userobj =M('user');
		$prize =$userobj->field('prize')->where(array('open_id'=>session('open_id')))->select();
		if($prize[0]['prize']){
			//你已经抽奖了
			echo "<script>alert('你已经抽过奖了');window.location.href='/project/index.php/Index/AllList';</script>";exit;
		}else{
		    $result =$userobj->where(array('open_id'=>session('open_id')))->save(array('prize'=>"三等奖"));
		}
		$this->display();
	}
	
	public function four(){
		$userobj =M('user');
		$prize =$userobj->field('prize')->where(array('open_id'=>session('open_id')))->select();
		if($prize[0]['prize']){
			//你已经抽奖了
			echo "<script>alert('你已经抽过奖了');window.location.href='/project/index.php/Index/AllList';</script>";exit;
		}else{
		    $result =$userobj->where(array('open_id'=>session('open_id')))->save(array('prize'=>"谢谢参与"));
		}
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