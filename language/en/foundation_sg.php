<?php
	global $guide;//问题指引
	global $basic;//基本信息
	global $basic_ajax;//基本信息ajax返回
	global $projects;//服务项目
	global $project_ajax;//服务项目ajax返回
	global $add_director;//董事添加
	global $people_ajax;//董事添加ajax返回
	global $director_list;//董事信息展示
	global $people_del_ajax;//董事成员删除ajax
	global $dir_next_ajax;//懂事下一步ajax
	global $add_member;//成员添加
	global $member_pass_ajax;//跳过成员添加ajax
	global $member_list;//成员信息展示
	global $mem_next_ajax;//成员下一步ajax
	global $dir_mem_list;//董事成员上传信息页
	global $uploads;//董事成员上传信息页
	global $uploads_ajax;//董事成员上传信息页
	global $new_order;//跳转订单支付
	global $order_show;//展示



	$guide = array(
		'title' => 'Problem Guidelines',
		'h1' => 'Registration notice',
		'nav1' => array(
			'title' => 'Basic',
			'div1' => 'Foundation Proposed name',
			'p1' => 'The proposed name of Foundation is limited to the English name. For example: ABC FOUNDATION LTD. This name must be approved by ACRA before it is valid. If the proposed name fails to pass, We will remind you to change the name by phone or system message.',
			'div2' => 'Order Recipient',
			'p2' => 'The only recipient of information and material during the Foundation registration process,must ensure that the email address, telephone number, and mailing address are true and valid.',
			'div3' => 'Director/Members',
			'p3' => '1. The director is the decision maker of the foundation and is responsible for signing all relevant affairs of the foundation.<br/>
			2. At least 2 directors are required for this registration,one of the directors must be a Singapore citizen or PR. If you choose to purchase a “local director” service, we will provide you with a local nominal director. The directors we provide will not be members. <br/>
			3. The member, also known as the guarantor, assumes the pre-agreed debt responsibilities for the foundation, which can be at least 1SGD, but it is recommended to increase the amount, such as 1000SGD.<br/>
			4. At least one member is required for this registration. Directors may serve as members, except for the nominal directors we provide. ',
			'div4' => 'Registration process',
		),
		'nav2' => array(
			'title' => 'Material',
			'div1' => 'Director/member information',
			'p1' => '1, Prepare a clear electronic picture of your valid passport and ID card. <br/>
			2. The picture is in jpeg format, you can choose to upload from the phone album. ',
			'div2' => 'Documents that need to be signed',
			'p2' => 'After the basic information of the registration application is approved, we will notify you by email and send the documents that require signature confirmation by the directors to the recipient\'s e-mail. After the completion of the signature confirmation, the scanned copy of signed document need to be sent back. Please keep the paper version of the signed documents and the provided director/member documents, such relevant documents must be mailed to the assigned address after the registration is completed.',
		),
		'nav3' => array(
			'title' => 'Price',
			'div1' => 'Local registration ¥7500/one-time (required)',
			'p1' => 'If the CLG registration is rejected due to the project, no refund can be made',
			'div2' => ' Legal secretarial service ¥6000/year (required)',
			'p2' => 'Foundation must have a Singaporean citizen as secretary',
			/*'div3' => 'Legal secretarial service ¥6000/year (required)',
			'p3' => 'Foundation must have a Singaporean citizen as secretary',*/
			'div4' => 'Registered address and mail management service ¥1500/year (required)',
			'p4' => 'Services include control panel, standard office address, mail collection, etc.',
			'div5' => 'Local nominal director service ¥30000/year',
			'p5' => 'The Foundation must have a director who is a Singapore citizen or PR. If you select this service,we will provide you with one Singaporean director. The directors provided by this service will not be a member. ',
			'div6' => 'Bank account assistance service ¥2000/room',
			'p6' => 'After the bank account opening application is submitted, we will make an appointment for you to open an bank account. After receiving the bank appointment notice, the directors are required to go to the local site to sign relevant documents. Please keep the mobile phone open and the customer service staff will contact you.',
		),
		'nav4' => array(
			'title' => 'Payment',
			'div1' => 'Alipay',
			'p1' => 'Alipay accepts RMB payment. The payment limit is set according to your personal banking online bank quota. Please ensure that your payment limit can complete this payment.',
			'div2' => 'Bank Transfer',
			'p2' => 'When the payment amount is limited, you can choose to complete the payment through personal bank account or Corporate bank account transfer. ',
			'div3' => 'Digital payment',
			'p3' => 'Support LT TOKEN payment',
		),
		'nav5' => array(
			'title' => 'Other',
			'div1' => 'Open a Bank Account',
			'p1' => 'After the bank account opening application is submitted, we will make an appointment for you to open an bank account. After receiving the bank appointment notice, the directors are required to go to the local site to sign relevant documents. Please keep the mobile phone open and the customer service staff will contact you. ',
			'div2' => 'Register original',
			'p2' => 'The registration original is a ACRA\'s stamped print version document, which has the same legal effect as the electronic document. If you did not choose bank account opening/registration original service at the time of application, you can also apply at the user center after registration.',
		),
	);


	$basic = array(
		'title' => 'Basic information',
		'h1' => 'Apply for a Singapore Foundation',
		'div1' => array(
			'h6' => 'Singapore Foundation',
			'p' => '7 days after submitting the materials to complete registration.<br/>the average registration duration is 5 days.
			<br /> Registration fee<br/>¥7500/one-time.',
			'div' => 'MORE'
		),
		'div2'  => array(
			'money' => '¥15000',
			'p1' => 'Minimum fee',
			'p2' => '',
			'p3' => '* supports LT TOKEN payment',
		),
		'div3'  => array(
			'b' => 'Fill basic information',
			'b1' => 'The Foundation name',
			'i' => 'FOUNDATION LTD.',
			'p1' => 'Please fill in the Foundation\'s proposed name in English'
		),
		'input' => array(
			'b' => 'Order Recipient Information',
			'b1' => 'Name',
			'p1' => 'Please fill in the name of the recipient of the order',
			'b2' => 'Email',
			'p2' => 'Please fill in the correct email address',
			'b3' => 'Contact number',
			'p3' => 'Please fill in the correct contact number',
			'b4' => 'Mailing address',
			'p4' => 'Please fill in the order recipient\'s mailing address',
		),
		'next' => 'Next, select the service item',
		'back' => 'return',
		'upd' => 'confirm'
	);

	$basic_ajax = array(
		'name1' => 'Foundation proposed name cannot be empty',
		'name2' => 'Please fill in the proposed name of Limited company in English',
		'contact_name' => 'Order recipient’s name cannot be empty',
		'contact_email1' => 'Order recipient’s email cannot be empty',
		'contact_email2' => 'Please enter the correct email format',
		'contact_mobile1' => 'Order recipient\'s mobile phone number cannot be empty',
		'contact_mobile2' => 'Please enter the correct contact information',
		'address' => 'Order recipient\'s mailing address cannot be empty',
		'return_error' => 'Failed to fill in the basic information',
		'return_success' => 'The basic information is filled in successfully',
	);


	$projects = array(
		'title' => 'Service Item',
		'b' => 'Select service item',
		'year' => '/year',
		'yn_choice' => '(required)',
		'con' => 'confirm',
		'back' => 'return',
		'next' => 'Next, fill in the director'
	);

	$project_ajax = array(
		'error' => 'cannot be modified',
		'return_error' => 'Service item selection failed',
		'return_success' => 'Service item selection success',
	);


	$add_director = array(
		'title' => 'Director Information',
		'h1' => 'Basic information of director',
		'div' => 'Special Note:<br /> 
		1. The director is the decision maker of the Foundation and is responsible for signing all relevant affairs of the Foundation.<br /> 
		2. At least 2 directors are required for this registration,one of director must be a Singapore citizen or PR. If you have already purchased a local nominal director service, we will provide you with a local nominal director. The directors we provide will not serve as a member. ',
		'div1' => array(
			'b' => 'Passport information',
			'labe' => 'Upload passport',
			'b1' => 'Types',
			'p1' => 'Please fill in the type',
			'b2' => 'Country code',
			'p2' => 'Please fill in the country code',
			'b3' => 'Passport number',
			'p3' => 'Please fill in your passport number',
			'b4' => 'Name',
			'p4' => 'Please fill in your name',
			'b5' => 'Gender',
			'p5-1' => 'Male',
			'p5-2' => 'Female',
			'b6' => 'Country of Citizenship',
			'b7' => 'Date of birth',
			'p7' => 'Please fill in date of birth',
			'b8' => 'Birth place',
			'p8' => 'Please fill in the place of birth',
			'b9' => 'Date of issue',
			'p9' => 'Please fill in the date of issue',
			'b10' => 'Issuing location',
			'p10' => 'Please fill in the place of issuance',
		),
		'div2' => array(
			'b' => 'other information',
			'b1' => 'Current residence',
			'p1' => 'The above address requires proof of address',
			'b2' => 'Email',
			'p2' => 'Please fill in the correct email',
			'b3' => 'Contact phone',
			'p3' => 'Please fill in the correct contact number',
			'b4' => 'WeChat',
			'p4' => 'Please fill in the correct Wechat number',
			'b5' => 'Whether set as a member of the Foundation',
			'p5-1' => 'Yes',
			'p5-2' => 'No',
		),
		'back' => 'return',
		'button' => 'Submit'
	);


	$people_ajax = array(
		'passport_type' => 'Passport type cannot be empty',
		'country_code' => 'Country code cannot be empty',
		'passport_no1' => 'Passport number cannot be empty',
		'passport_no2' => 'Incorrect passport number format',
		'name' => 'Name cannot be empty',
		'sex' => 'Gender cannot be empty',
		'nationality' => 'Country of citizenship cannot be empty',
		'date_birth' => 'Date of birth cannot be empty',
		'date_birth_time' => 'The date of birth you filled in is incorrect',
		'place_birth' => 'Place of birth cannot be empty',
		'date_issue' => 'Date of issue cannot be null',
		'date_issue_time' => 'The date of issue you filled in is incorrect',
		'place_issue' => 'Place of issue cannot be empty',
		'address' => 'Current residence cannot be empty',
		'email1' => 'Email can not be empty',
		'email2' => 'Email format is incorrect',
		'mobile1' => 'Phone number could not be empty',
		'mobile2' => 'Contact phone format is incorrect',
		'return_error' => 'Failed to fill in the basic information',
		'return_success' => 'The basic information is filled in successfully',
	);

	$director_list = array(
		'title' => 'Director Information',
		'h1' => 'Special Note: <br /> 1. The director is the decision maker of the Foundation and is responsible for signing all relevant affairs of the Foundation. <br />
		2. At least 2 directors are required for this registration,one of director must be a Singapore citizen or PR. If you have already purchased a local nominal director service, we will provide you with a local nominal director. The directors we provide will not serve as a member.',
		'dis' => 'Acting Director',
		'del' => 'Delete',
		'upd' => 'Modify',
		'con' => 'Confirm',
		'back' => 'Return',
		'look' => 'View',
		'new' => 'Add a director\'s information',
		'next' => 'Next, fill in the members',
	);


	$people_del_ajax = array(
		'return_error' => 'Failed to delete',
		'return_success' => 'Successfully deleted',
	);


	$dir_next_ajax = array(
		'return_error' => 'Foundation must have at least two directors',
		'return_success' => 'Success'
	);

	$add_member = array(
		'title' => 'Member information',
		'h1' => 'Member basic information',
		'div' => 'Special Note:<br /> 
		1. The member, also known as the guarantor, assumes the pre-agreed debt liability for the foundation, which may be at least 1SGD, but it is recommended to increase the amount, such as 1000SGD.<br />
		2. At least one member is required for this registration. Directors may serve as member, except for nominal directors we provide.<br />',
		'is_pass' => '3. If you still need to add members, you can fill in the member information on this page. If you do not need to add new members, you can<a href="javascript:void(0)" id="pass" class="c-f76959 di">Click here to skip>></a>',
		'div1' => array(
			'b' => 'Passport information',
			'labe' => 'Upload passport',
			'b1' => 'Types',
			'p1' => 'Please fill in the type',
			'b2' => 'Country code',
			'p2' => 'Please fill in the country code',
			'b3' => 'Passport number',
			'p3' => 'Please fill in your passport number',
			'b4' => 'Name',
			'p4' => 'Please fill in your name',
			'b5' => 'Gender',
			'p5-1' => 'Male',
			'p5-2' => 'Female',
			'b6' => 'Country of Citizenship',
			'b7' => 'Date of birth',
			'p7' => 'Please fill in date of birth',
			'b8' => 'Birth place',
			'p8' => 'Please fill in the place of birth',
			'b9' => 'Date of issue',
			'p9' => 'Please fill in the date of issue',
			'b10' => 'Issue place',
			'p10' => 'Please fill in the place of issuance',
		),
		'div2' => array(
			'b' => 'other information',
			'b1' => 'Current residence',
			'p1' => 'The above address requires proof of address',
			'b2' => 'Email',
			'p2' => 'Please fill in the correct email address',
			'b3' => 'contact number',
			'p3' => 'Please fill in the correct contact number',
			'b4' => 'WeChat',
			'p4' => 'Please fill in the correct WeChat number'
		),
		'back' => 'return',
		'button' => 'Submit'
	);

	$member_pass_ajax = array(
		'return_error' => 'You haven\'t set a director as a member and cannot be skipped',
		'return_success' => 'Skip success'
	);


	$member_list = array(
		'title' => 'Member information',
		'h1' => 'Special Note: <br />
		 1. The member, also known as the guarantor, assumes the pre-agreed debt liability for the foundation, which may be at least 1SGD, but it is recommended to increase the amount, such as 1000SGD.<br /> 
		 2. At least one member is required for this registration. Directors may serve as member, except for nominal directors we provide.',
		'del' => 'Delete',
		'upd' => 'Modify',
		'con' => 'confirm',
		'back' => 'return',
		'look' => 'View',
		'new' => 'add a member information',
		'next' => 'Next, upload files'
	);


	$mem_next_ajax = array(
		'return_error' => 'The foundation must meet two members of a director',
		'return_error1' => 'Foundation must have a member',
		'return_success' => 'success'
	);


	$dir_mem_list = array(
		'title' => 'Upload files',
		'b' => 'Upload personal information',
		'dl' => '<dt> Files requirements: </dt><dd>1. Proof of ID: Clear electronic pictures of valid passport. </dd><dd>2. Proof of address: Clear electronic pictures of valid ID card.</dd><dd>3. upload files only support jpeg format.</dd>',
		'upload' => 'Upload',
		'upd' => 'Modify',
		'btn' => 'Submit',
		'look' => 'View',
		'con' => 'confirm',
		'back' => 'Return'
	);

	$uploads = array(
		'title' => 'Upload files',
		'b1' => 'Upload',
		'b2' => 'Profile',
		'dl' => '<dt> Files requirements: </dt><dd>1, Proof of ID: Clear electronic pictures of valid passport. </dd><dd>2. Proof of address: Clear electronic pictures of valid ID cards.</dd><dd>3, upload files only support jpeg format.</dd>',
		'passport' => 'Upload passport',
		'card_a' => 'Upload the front of ID card',
		'card_b' => 'Upload the back of ID card',
		'btn' => 'Submit',
		'back' => 'Back'
	);

	$uploads_ajax = array(
		'passport' => 'Passport failed to upload',
		'card_a' => 'Failed to upload the front of ID card',
		'card_b' => 'Failed to upload the back of ID card',
		'passport_ajax' => 'Please upload a clear electronic pictures of valid passport',
		'card_a_ajax' => 'Please upload a clear electronic pictures of the front of ID card',
		'card_b_ajax' => 'Please upload a clear electronic pictures of the back of ID card',
		'return_success' => 'Upload successful'
	);

	$new_order = array(
		'return_error' => 'Please upload all personal files',
		'return_success' => 'Orders submit successful'
	);

	$order_show = array(
		'title' => 'View Order',
		'state' => array(
			'sta1' => 'application',
			'sta2' => 'processing',
			'sta2_sp' => 'under review',
			'sta3' => 'signing',
			'sta4' => 'declaration',
			'sta4_sp' => 'declared',
			'sta5' => ' review',
			'sta5_sp' => 'about 5-7 working days',
			'sta6' => 'complete',
		),
		'option' => array(
			'basic' => 'Registration basic information',
			'project' => 'View/Add Service Items',
			'dir' => 'Director Information',
			'mem' => 'Member Information',
			'msg' => 'Personal information',
		),
		'choice' => array(
			'see' => 'View',
			'audit' => 'under review',
			'passed' => 'Did not pass',
			'nopassed' => 'failed',
			'pleaseadd' => 'Please add on',
		),
		'addproject' => 'Please select a service item'
	);
?>