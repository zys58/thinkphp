<?php
	namespace Home\Modle;
	use Think\Modle;

	class UserMole extends Modle{
		protected $_validata = array(
			array('uname','require','用户名不能为空'),
			array('password','require','密码不能为空')
			)
	}	

?>