<?php
	namespace Home\Controller;
	use Think\Controller;

	class IndexController extends Controller{
		public function index(){
			$this->display();
		}
		public function login(){
			if (IS_POST){
				$login = D('user');

			if (!$data = $login ->create()){
				header("content-type: text/html; charset=utf8");
				exit($login ->geterror());
			}
			$where =array();
			$where['uname'] = $data['username'];
			$result = $login ->where($where)->field('uid','uname','password')->find();	
			if ($result && $result['password'] ==$result['password']){
				$this->success('登录成功');
			}else{
				$this ->error('登录失败');
			}
			}
		}
	}

?>