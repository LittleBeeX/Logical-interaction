<?php
	global $nav; //导航
	global $footer;//页脚
	global $greetings;//时间问候
	global $nobacks;//不可后退

	$nav = array(
		'login' => '登录',
		'menu1' => '公司注册',
		'nav_menu1' => array(
			'column1' => '全球公司注册',
			'column2' => '新加坡基金会注册',
			'column3' => '新加坡有限公司注册',
			'column5' => '英国私人有限公司注册',
			'column6' => 'BVI有限公司注册',
			'column7' => '开曼有限公司注册',
			'column4' => '企业查询'
		),
		'nav_menu1_column3' => array(
			'column1' => '企业查询',
			'column2' => 'LittleBeeX网络注册查询',
			'column3' => '企业工商信息查询',
		),
		'menu2' => '在线治理',
		'menu3' => '资产交易',
		'menu4' => '区块',
		'menu5' => '开发者',
		'menu6' => '用户中心',
		'menu7' => '在线秘书',
		'menu8' => '问题指引',
		'nav_menu8' => array(
			'column1' => '新加坡基金会',
			'column2' => '新加坡有限公司',
			'column3' => '英国私人有限公司',
			'column4' => 'BVI有限公司',
			'column5' => '开曼有限公司',
		),
		'menu9' => '登录',
		'menu10' => '注册',
		'menu11' => '退出',
	);



	$footer = array(
		'address1' => '© 2018 LITTLEBEEX.COM',
		'text1' => '隐私保护',
		'text2' => '法律协议',
		'text3' => '免责声明',
		'tel'   => '+65 86870888',
		'link'  => 'support@littlebeex.com',
		'foot1' => '152 BEACH ROAD',
		'foot2' => '＃14-02 <br/> GATEWAY EAST',
		'foot3' => 'SINGAPORE（189721）',
	);

	$greetings = array('上午好！','下午好！','晚上好！');


	$nobacks = '你想放弃当前操作吗？';
?>