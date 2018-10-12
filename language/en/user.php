<?
	global $main;//个人中心主页
	global $my_company;//我得公司
	global $invoice;//发票申请
	global $order_del;//订单删除
	global $invoice_ajax;//发票申请ajax


	$main = array(
		'title' => 'Personal Center',
		'my_company' => 'My company',
		'my_order' => 'My Order',
		'updpwd' => 'change Password',
		'invoice' => 'Invoice application',
		'service' => 'Online service',
		'logout' => 'Logout',
	);

	$my_company = array(
		'title' => 'My company',
		'name' => 'Company Name:',
		'type' => 'Type:',
		'type1' => 'Singapore Foundation Registration',
		'type2' => 'Singapore company registration',
		'type3' => 'British company registration',
		'type4' => 'BVI company registration',
		'type5' => 'Cayman company registration',
		'msg' => 'Please improve',
		'msg1' => 'The audit failed, please review and modify',
		'msg2' => 'Application has been accepted',
		'msg3' => 'Paid, to be confirmed',
		'msg4' => 'To be paid',
		'msg5' => 'Registration is complete',
		'msg6' => 'Paid',
		'time1' => 'Registration duration: 10-15 days after the submission of the material, with an average duration of 12 days',
		'time2' => 'Registration duration: 24 hours after the submission of the material',
		'litt' => 'Blockchain Changes Future, LittleBeeX Changes Future Companies',
		'littbtn' => 'Explore the future',
		'pay' => 'Payment',
		'del' => 'Delete',
		'see' => 'View',
	);

	$order_del = array(
		'return_error' => 'Failed to delete',
		'return_success' => 'Successfully deleted',
	);

	$invoice = array(
		'title' => 'Apply for invoice',
		'b' => 'Apply for invoice',
		'div' => 'Special Note: <br /> The invoice will be sent to the order recipient by post. If you need to modify, please contact customer service.',
		'sel_order' => 'Select Order',
		'invoice_type' => 'Invoice type',
		'type_sel1' => 'Individual ',
		'type_sel2' => 'Company',
		'invoice_number' => 'Invoice amount',
		'number_span' => 'Please fill in your invoice amount',
		'invoice_title' => 'Invoice title',
		'title_span' => 'Please fill in your invoice title',
		'invoice_ein' => 'Tax ID',
		'ein_span' => 'Please fill in your tax ID',
		'btn' => 'Submit',
	);

	$invoice_ajax = array(
		'poid_ajax' => 'Please first select the bill to be printed',
		'type_ajax' => 'Invoice type cannot be empty',
		'number_ajax' => 'Bill amount cannot be empty',
		'title_ajax' => 'Invoice title cannot be empty',
		'ein_ajax' => 'Tax ID cannot be empty',
		'return_error' => 'Invoice application failed',
		'return_success' => 'Invoice application success'
	);







?>