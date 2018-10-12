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
		'title' => 'My order',
		'coding' => 'NO.',
		'pay' => 'Paid',
		'nopay' => 'To be paid',
		'paying' => 'Paid, to be confirmed',
		'date' => 'Date:',
		'see' => 'View',
		'gopay' => 'Payment',
		'litt' => 'Blockchain Changes Future, LittleBeeX Changes Future Companies',
		'littbtn' => 'Explore the future',
	);
	
	$sel_pay = array(
		'title' => 'Order payment',
		'money' => '¥',
		'msg' => '/One-time',
		'sum' => 'Total Payment:',
		'RMB' => 'RMB',
		'LITTLE' => 'LT',
		'ETH' => 'ETH',
		'p' => 'Please select payment currency',
		'ul1' => array(
			'div' => 'Select Payment Method',
			'div1' => 'Bank Transfer',
			'gopay' => 'Go to pay',
			'nopay' => 'Temporarily do not pay',
		),
		'ul2' => array(
			'div' => 'Select payment method',
			'div1' => 'LT',
			'gopay' => 'Use digital wallet to pay',
			'nopay' => 'Temporarily do not pay',
		),
		'ul3' => array(
			'div' => 'Select payment method',
			'div1' => 'ETH',
			'gopay' => 'Use digital wallet to pay',
			'nopay' => 'Temporarily do not pay',
		)
	);

	$yh_pay = array(
		'title' => 'Order payment',
		'b' => 'Total due:',
		'money' => 'RMB',
		'type' => 'payment method',
		'yh' => 'Bank transfer',
		'khyh' => 'Bank account',
		'yhname' => 'ICBC Beijing Jinshujie Street Branch',
		'zh' => 'Account Name',
		'zhname' => '九八锎科技（北京）有限公司',
		'payname' => 'Payment account',
		'payzh' => '0200 2914 0920 0036 304',
		'fkm' => 'payment confirmation code',
		'sucpay' => 'Transfer completed',
		'nopay' => 'Temporarily do not pay'
	);

	$yh_ajax = array(
		'return_error' => 'Payment failed',
		'return_success' => 'It may take some time to get to the account, please wait patiently',
	);

	$little_pay = array(
		'title' => 'Order payment',
		'b' => 'Total Payment:',
		'LITTLE' => 'LT',
		'type' => 'payment method',
		'addre' => 'receipt address',
		'address' => '0x5fA881A4632922c012de88Aac566d1E8d8E0F651',
		'cop' => 'copy',
		'coptips' => 'Transfer address copied successfully!',
		'sucpay' => 'Scan code payment completed',
		'nopay' => 'Temporarily do not pay'
	);

	$little_ajax = array(
		'return_error' => 'Please pay',
		'return_success' => 'Payment success',
	);

	$pay_success = array(
		'title' => 'Payment success',
		'p' => 'You have completed the payment, the business is accepted',
		'a' => 'View orders'
	);


	$pay_fail = array(
		'title' => 'Payment failed',
		'p' => 'Your payment is not completed. Please pay again',
		'a' => 'pay again'
	);

	$pro = array(
		'title' => 'Service Items',
		'mon' => '¥',
		'back' => 'return',
		'year' => '/year',
		'gopay' => 'Go to pay'
	);
?>