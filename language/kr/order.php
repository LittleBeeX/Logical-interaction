<?php
	global $my_order;//我得订单
	global $sel_pay; //选择支付方式
	global $yh_pay; //银行支付方式
	global $yh_ajax; //银行ajax
	global $little_pay; //little支付方式
	global $little_ajax; //little ajax
	global $pay_success; //支付成功
	global $pay_fail; //支付失败
	global $pro; //服务项目


	$my_order = array(
		'title' => '나의주문서',
		'coding' => '주문번호:',
		'pay' => '지불완성',
		'nopay' => '미지불',
		'paying' => '지불완성, 미확인',
		'date' => '날짜:',
		'see' => '조회',
		'gopay' => '지불',
		'litt' => '블록체인은 미래를 개변하고, LittleBeeX는 미래의 기업을 개변합니다',
		'littbtn' => '미래를 탐색하기',
	);
	
	$sel_pay = array(
		'title' => '주문서 지불',
		'money' => '￥',
		'msg' => '/일시불',
		'sum' => '지불하여야 할 금액:',
		'RMB' => 'RMB',
		'LITTLE' => 'LT',
		'ETH' => 'ETH',
		'p' => '지불할 화폐의 종류를 선택하여 주세요',
		'ul1' => array(
			'div' => '지불방식 선택',
			'div1' => '은행 계좌 이체',
			'gopay' => '지불하러 가기',
			'nopay' => '잠시 후에 지불하기',
		),
		'ul2' => array(
			'div' => '지불방식 선택',
			'div1' => 'LT',
			'gopay' => '디지털 지갑으로 지불하기',
			'nopay' => '잠시 후에 지불하기',
		),
		'ul3' => array(
			'div' => '지불방식 선택',
			'div1' => 'ETH',
			'gopay' => '디지털 지갑으로 지불하기',
			'nopay' => '잠시 후에 지불하기',
		)
	);

	$yh_pay = array(
		'title' => '주문서 지불',
		'b' => '지불하여야 할 금액:',
		'money' => 'RMB',
		'type' => '지불방식',
		'yh' => '은행 계좌 이체',
		'khyh' => '계좌 개설 은행',
		'yhname' => '공상은행 북경 금수길 지행',
		'zh' => '계정명칭',
		'zhname' => '九八锎科技（北京）有限公司',
		'payname' => '지불계좌',
		'payzh' => '0200 2914 0920 0036 304',
		'fkm' => '지불확인번호',
		'sucpay' => '계좌 이체 완성',
		'nopay' => '잠시 후에 지불하기'
	);

	$yh_ajax = array(
		'return_error' => '지불 실패',
		'return_success' => '입금은 조금의 시간이 수요됩니다. 잠시 기다려 주세요',
	);

	$little_pay = array(
		'title' => '주문서 지불',
		'b' => '지불하여야 할 금액:',
		'LITTLE' => 'LT',
		'type' => '지불방식',
		'addre' => '수금주소',
		'address' => '0x5fA881A4632922c012de88Aac566d1E8d8E0F651',
		'cop' => '복제',
		'coptips' => '계좌 이체 주소 복제 성공!',
		'sucpay' => 'QR코드 스캔 지불 완성',
		'nopay' => '잠시 후에 지불하기'
	);

	$little_ajax = array(
		'return_error' => '지불하여 주세요',
		'return_success' => '지불성공',
	);

	$pay_success = array(
		'title' => '지불성공',
		'p' => '결제 완료 업무 수리 중',//您已支付完成，业务受理中
		'a' => '주문서를 확인하다.'//查看订单
	);


	$pay_fail = array(
		'title' => '지불실패',
		'p' => '지불이 완성되지 않았습니다. 다시 지불하여 주세요',
		'a' => '다시지불'
	);

	$pro = array(
		'title' => '서비스 항목',
		'mon' => '￥',
		'back' => '돌아가기',
		'year' => '/1년',
		'gopay' => '지불하러가기',
	);
?>