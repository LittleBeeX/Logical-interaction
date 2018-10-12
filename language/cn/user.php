<?
	global $main;//个人中心主页
	global $my_company;//我得公司
	global $invoice;//发票申请
	global $order_del;//订单删除
	global $invoice_ajax;//发票申请ajax
	global $wait;//正在开发


	$main = array(
		'title' => '个人中心',
		'my_company' => '我的公司',
		'my_order' => '我的订单',
		'updpwd' => '修改密码',
		'invoice' => '发票申请',
		'service' => '在线客服',
		'logout' => '退出',
	);

	$my_company = array(
		'title' => '我的公司',
		'name'  => '公司名称：',
		'type' => '注册类型：',
		'type1' => '新加坡基金会注册',
		'type2' => '新加坡有限公司注册',
		'type3' => '英国私人有限公司注册',
		'type4' => 'BVI有限公司注册',
		'type5' => '开曼有限公司注册',
		'msg' => '请完善你的注册信息',
		'msg1' => '审核未通过，请查看并修改',
		'msg2' => '申请已受理',
		'msg3' => '已支付，待确认',
		'msg4' => '待支付',
		'msg5' => '注册完成',
		'msg6' => '已支付',
		'time1' => '注册时长：提交材料后10-15天，平均时长12天',
		'time2' => '注册时长：提交材料后24小时',
		'litt' => '区块链改变未来，LittleBeeX改变未来企业',
		'littbtn' => '探索未来',
		'pay' => '支付',
		'del' => '删除',
		'see' => '查看',
	);

	$order_del = array(
		'return_error' => '删除失败',
		'return_success' => '删除成功',
	);

	$invoice = array(
		'title' => '申请发票',
		'b' => '申请发票',
		'div'   => '特别说明：<br /> 发票将通过邮寄方式寄送至订单接收人，如需修改请联系客服。',
		'sel_order'   => '选择订单',
		'invoice_type'   => '发票类型',
		'type_sel1'   => '个人',
		'type_sel2'   => '公司',
		'invoice_number'   => '发票金额',
		'number_span'   => '请填写您的发票金额',
		'invoice_title'   => '发票抬头',
		'title_span'   => '请填写您的发票抬头',
		'invoice_ein'   => '税号',
		'ein_span'   => '请填写您的税号',
		'btn'   => '提交',
	);

	$invoice_ajax = array(
		'poid_ajax' => '请先选择要打印的票据',
		'type_ajax' => '发票类型不能为空',
		'number_ajax' => '票据金额不能为空',
		'title_ajax' => '发票抬头不能为空',
		'ein_ajax' => '税号不能为空',
		'return_error' => '发票申请失败',
		'return_success' => '发票申请成功',
	);






?>