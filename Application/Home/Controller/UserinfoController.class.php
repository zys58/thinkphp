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
				$this->success('添加用户成功','index',2);
				}else{
				$this->error( "添加用户失败");
			}
		}
	}

?>