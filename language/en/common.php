<?php
	global $nav; //导航
	global $footer;//页脚
	global $greetings;//时间问候
	global $nobacks;//不可后退

	$nav = array(
		'login' => 'Login',
		'menu1' => 'Company Registration',
		'nav_menu1' => array(
			'column1' => 'Global Company',
			'column2' => 'Singapore Foundation',
			'column3' => 'Singapore Limited',
			'column5' => 'British Private Limited',
			'column6' => 'B.V.I Limited',
			'column7' => 'Cayman Limited',
			'column4' => 'Enterprise Query'
		),
		'nav_menu1_column3' => array(
			'column1' => 'Enterprise Query',
			'column2' => 'registration query',
			'column3' => 'Information Query',
		),
		'menu2' => 'Online Governance',
		'menu3' => 'Asset transaction',
		'menu4' => 'block',
		'menu5' => 'developer',
		'menu6' => 'User Center',
		'menu7' => 'Online secretary',
		'menu8' => 'Question',
		'nav_menu8' => array(
			'column1' => 'Singapore Foundation',
			'column2' => 'Singapore Limited',
			'column3' => 'British Private Limited',
			'column4' => 'B.V.I Limited',
			'column5' => 'Cayman Limited',
		),
		'menu9' => 'Login',
		'menu10' => 'Register',
		'menu11' => 'Logout',
	);



	$footer = array(
		'address1' => '© 2018 LITTLEBEEX.COM',
		'text1' => 'Privacy protection',
		'text2' => 'legal agreement',
		'text3' => 'Disclaimer',
		'tel'   => '+65 86870888',
		'link'  => 'support@littlebeex.com',
		'foot1' => '152 BEACH ROAD',
		'foot2' => '＃14-02 <br/> GATEWAY EAST',
		'foot3' => 'SINGAPORE（189721）',
	);

	$greetings = Array ('Good morning!', 'Good afternoon!', 'Good evening!');


	$nobacks = 'Do you want to abort the current operation?';
?>