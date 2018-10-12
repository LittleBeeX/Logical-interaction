<?
	global $main;//个人中心主页
	global $my_company;//我得公司
	global $invoice;//发票申请
	global $order_del;//订单删除
	global $invoice_ajax;//发票申请ajax
	global $wait;//正在开发


	$main = array(
		'title' => '개인센터',
		'my_company' => '나의회사',
		'my_order' => '나의 주문서',
		'updpwd' => '비밀번호 수정',
		'invoice' => '영수증 신청',
		'service' => '온라이 고객센터',
		'logout' => '로그아웃',
	);

	$my_company = array(
		'title' => '나의회사',
		'name'  => '회사명칭:',
		'type' => '등기유형:',
		'type1' => '싱가포르 기금회 등기',
		'type2' => '싱가포르 회사 등기',
		'type3' => '영국 유한회사 등기',
		'type4' => 'BVI 회사 등기',
		'type5' => 'Cayman 회사 등기',
		'msg' => '완벽하다',
		'msg1' => '심의가 통과되지 않았습니다. 조회 및 수정하기',
		'msg2' => '신청이 접수되었습니다',
		'msg3' => '지불완성, 확인중',
		'msg4' => '미지불',
		'msg5' => '등기완성',
		'msg6' => '지불완성',
		'time1' => '등기 수요 시간: 자료를 제공한 뒤, 10-15일, 평균 시간12일',
		'time2' => '등기 수요 시간: 자료를 제공한 뒤 24시간',
		'litt' => '블록체인은 미래를 개변하고, LittleBeeX는 미래의 기업을 개변합니다',
		'littbtn' => '미래를 탐색하기',
		'pay' => '지불',
		'del' => '삭제',
		'see' => '조회',
	);

	$order_del = array(
		'return_error' => '삭제실패',
		'return_success' => '삭제성공',
	);

	$invoice = array(
		'title' => '영수증 신청',
		'b' => '영수증 신청',
		'div'   => '특별설명:<br /> 영수증은 우편 형식으로 주문 접수인에게 발송됩니다. 수정이 필요하시면 고객 서비스에 연락을 주세요.',
		'sel_order'   => '주문서 선택하기',
		'invoice_type'   => '영수증 유형',
		'type_sel1'   => '개인',
		'type_sel2'   => '회사',
		'invoice_number'   => '영수증 금액',
		'number_span'   => '영수증 금액을 입력하여 주세요',
		'invoice_title'   => '영수증 발급 대상',
		'title_span'   => '영수증 발급 대상을 입력하여 주세요',
		'invoice_ein'   => '세번',
		'ein_span'   => '세번을 입력하여 주세요',
		'btn'   => '입력하여 주세요',
	);

	$invoice_ajax = array(
		'poid_ajax' => '프린트가 필요한 수표를 선택하여 주세요',
		'type_ajax' => '영수증 유형을 반드시 입력하셔야 합니다',
		'number_ajax' => '수표의 금액을 반드시 입력하셔야 합니다',
		'title_ajax' => '영수증 발급 대상을 반드시 입력하셔야 합니다',
		'ein_ajax' => '세번을 반드시 입력하셔야 합니다',
		'return_error' => '영수증 신청 실패',
		'return_success' => '영수증 신청 성공',
	);





?>