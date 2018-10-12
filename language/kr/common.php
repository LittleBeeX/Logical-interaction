<?php
	global $nav; //导航
	global $footer;//页脚
	global $greetings;//时间问候
	global $nobacks;//不可后退

	$nav = array(
		'login' => '로그인',
		'menu1' => '회사 등기',
		'nav_menu1' => array(
			'column1' => '세계 회사 등기',
			'column2' => '싱가포르 기금회 등기',
			'column3' => '싱가포르 유한회사 등기',
			'column5' => '영국 개인 유한회사 등기',
			'column6' => 'B.V.I 유한회사 등기',
			'column7' => 'Cayman 유한회사 등기',
			'column4' => '기업 조회'
		),
		'nav_menu1_column3' => array(
			'column1' => '기업 조회',
			'column2' => 'LittleBeeX 온라인 등기 조회',
			'column3' => '기업 공상 정보 조회',
		),
		'menu2' => '온라인 관리',
		'menu3' => '자산 거래',
		'menu4' => '블록',
		'menu5' => '개발자',
		'menu6' => '사용자 센터',
		'menu7' => '온라인 비서',
		'menu8' => '문제 안내',
		'nav_menu8' => array(
			'column1' => '싱가포르 기금회',
			'column2' => '싱가포르 유한회사',
			'column3' => '영국 개인 유한회사',
			'column4' => 'B.V.I 유한회사',
			'column5' => 'Cayman 유한회사',
		),
		'menu9' => '로그인',
		'menu10' => '등록',
		'menu11' => '로그아웃',
	);



	$footer = array(
		'address1' => '© 2018 LITTLEBEEX.COM',
		'text1' => '개인정보 보호',
		'text2' => '법률 협의',
		'text3' => '면책 성명',
		'tel'   => '+65 86870888',
		'link'  => 'support@littlebeex.com',
		'foot1' => '152 BEACH ROAD',
		'foot2' => '＃14-02 <br/> GATEWAY EAST',
		'foot3' => 'SINGAPORE（189721）',
	);

	$greetings = array('좋은 오전입니다!!','좋은 오후입니다!','좋은 저녁입니다!');


	$nobacks = '너는 지금 조작을 포기하려고하 느냐?';
?>