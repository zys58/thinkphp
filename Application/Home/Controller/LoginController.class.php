<?php
	namespace Home\Controller;
	use Think\Controller;

	class LoginController extends Controller{
		public function index(){
			$this->display();
		}
		public function login(){
			$login = M('user');
			$where =array();
			$where['uname'] = $_POST['username'];
			$where['password'] = MD5($_POST['password']);
			$result = $login ->where($where)->field('uid','uname','password')->find();	
			if ($result && $result['password'] == MD5($_POST['password'])){
				$this->success('登录成功',U('Index/index'),2);
			}else{
				$this ->error('登录失败');
			}
			}
		public function loginout(){
			 session(null);
        redirect(U('Login/index'), 2, '正在退出登录...');
    	}
	}
?>