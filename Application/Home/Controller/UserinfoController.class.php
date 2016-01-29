<?php
	namespace Home\Controller;
	use Think\Controller;
	class UserinfoController extends Controller{
		 public function index(){
		 	$this-> display();
		 }
		public function add(){
				$data = array();
				$data['username'] = $_POST['username'];
				$data['mac'] = $_POST['mac'];
				$data['jieru'] = strtotime($_POST['jieru']);
				$data['lxfs'] = $_POST['lxfs'];
				$user = M('Userinfo');
			if ($result = $user->add($data)){
				$this->success('添加用户成功',U('Index/index'),2);
				}else{
				$this->error( "添加用户失败");
			}
		}
		public function red(){
				$userinfo =M('Userinfo');
				$list = $User -> where($userinfo['infoid'] == 0 )->select();
				$this ->assign('list',$list);
				dump($list);
		}
	}
?>