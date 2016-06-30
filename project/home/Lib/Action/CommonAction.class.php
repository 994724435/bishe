<?php
// 本类由系统自动生成，仅供测试用途
class CommonAction extends Action {
	public function _initialize(){
		session_start();
		$_GET['openid'] ="o2MKus50uEq7Iky9VWxKrEa3BtEs";
		if($_GET['openid']){
			$userObj =M('User');
			$user_num=M('User_num'); 
			$user = $userObj->where(array('open_id'=>$_GET['openid']))->select(); //查询
			if($user[0]['id']){
				session('name',$user[0]['nickname']);
			}else{
				 session('name','匿名用户');
				 $userObj->add(array('open_id'=>$_GET['openid']));   //没有  添加一条
				 $date =date('Y-m-d');
				 $result_date= $user_num->where(array('time'=>$date))->select(); 
				 //查询今天日期  有 更新    无添加
				 if($result_date[0]['time']){
				 	$all = $userObj->select();
				     $user_num->where(array('time'=>$date))->save(array('num'=>count($all)+1));
				 }else{
				 	 $all = $userObj->select();
				              $user_num->add(array('time'=>$date,'num'=>count($all)+1));
				 }
			}
			session('open_id',$_GET['openid']);
			
		}	
	}
}