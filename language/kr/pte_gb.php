<?php
	global $guide;//问题指引
	global $basic;//注册页面所有信息,前台第一个类名
	global $scope;
	global $scope_list;
	global $ds_insert;
	global $ds_list;
	global $ms_insert;
	global $ms_list;
	global $equity_insert;
	global $equity_list;
	global $share_shop_insert;
	global $share_shop_list;
	global $control_people;
	global $control_people1;
	global $control_people2;
	global $control_personal;
	global $control_company;
	global $control_people_list;
	global $control_msg;
	global $director_roster;
	global $director_address;
	global $control_statement;
	global $control_statement2;
	global $order_show;
	global $conp;
	global $conc;
	
	$guide = array(
		'title' => '문제 가이드',
		'nav1' => array(
			'title' => '기본정보',
			'div1' => '개인 유한회사 비축 명칭',
			'p1' => '사용자는 반드시 건의한 회사명칭을 입력하여야 하고, <br/>
				그중 하나의 사용 가능한 명칭을 선택하여야 합니다. <br/>
				명칭은 160문자 부호를 (스페이스와 명칭포함) <br/>
				초과하시면 안되고, 소수의 부호는 사용할 수 없습니다. <br/>
				모든 새로운 명칭의 자모는 대문자여야 합니다. 이 <br/>
				서비스는 자동적으로 제의한 명칭이 민감한 단어 및 <br/>
				등기표의 임의의 명칭과 일치여부를 체크합니다. 명칭이 <br/>
				반드시 접수됨을 보장하여 드리지 못합니다.',
			'div2' => '주문서 접수인',
			'p2' => '유한회사 등기 과정에서의 정보와 자료의 왕래의 유일한 <br/>
				접수인은 반드시 메일주소, 전화와 우편 주소가 진실한 <br/>
				것을 보장하여야 합니다.',
			'div3' => '이사 / 주주',
			'p3' => '1, 만 16세 이상 신분증명 문서를 가지고 있는 사람은 <br/>
				모두 이사를 신청할 수 있고, 적어도 한명의 이사가 <br/>
				있어야 하고, 이사와 주주는 같은 사람으로 간주되며, <br/>
				자연인 혹은 법인이 담당할 수 있고 국적의 제한이 <br/>
				없습니다.<br />
				2, 구매 인증인은 유한회사의 최초 주주이고 희원이여야 <br/>
				합니다,<br />
				3, 주주는 조직 규정 요강을 구독하는 사랍입니다. 이는 <br/>
				하나의 문서는 매개 사용자는 모두 2006년의 회사법에 <br/>
				근거하여 회사을 설립하고, 매개 사용자는 회사의 멤버가 <br/>
				되는 것을 동의하며 적어도 회사의 지분 하나를 <br/>
				소유하여야 합니다. 회사의 조직 규정 요강은 법률 법규의 <br/>
				형식을 채용하고, 사용자는 필요한 정보를 입력한 뒤 개요 <br/>
				정보 페이지에서 확인할 수 있습니다.<br />
				4, 주주는 개인, 회사 혹인 기업입니다',
		),
		'nav2' => array(
			'title' => '특별설명',
			'div1' => '등기주소',
			'p1' => '1, 이 주소는 반드시 지불 혹은 문서의 지리적 위치를 <br/>
				체크하는데 사용되어야 합니다. 주소는 우편 사서함의 <br/>
				번호가 아니고 (완정한 주소를 포함하고 있는 경우를 <br/>
				제외), DX혹은 LP번호입니다.',
		),
		'nav3' => array(
			'title' => '지불방식',
			'div1' => ' alipay',
			'p1' => 'Alipay는 위안 지불을 지지하고, 지불 한도는 사용자 개인 <br/>
				은행의 지불 한도 설정에 의하여 결정되기에 자신의 지불 <br/>
				한도를 체크하여 이번의 지불을 완성하여 주세요.',
			'div2' => '은행 계좌 개설',
			'p2' => '은행 계좌 개설 신청 후, 저희는 개설 은행을 예약하여 <br/>
				드리고, 은행의 예약 통지를 받은 뒤, 문서 서명 이사가 <br/>
				면접 사무를 진행하여야 하기에, 휴대폰을 잘 받으시고, <br/>
				고객 서비스 직원은 귀하에게 연락드립니다.',
			'div3' => '디지털 지불',
			'p3' => 'LT TOKEN지불 지지',
		),
		'nav4' => array(
			'title' => '기타',
			'div1' => '은행 계좌 개설',
			'p1' => '은행 계좌 개설 신청 후, 저희는 개설 은행을 예약하여 <br/>
				드리고, 은행의 예약 통지를 받은 뒤, 문서 서명 이사가 <br/>
				면접 사무를 진행하여야 하기에, 휴대폰을 잘 받으시고, <br/>
				고객 서비스 직원은 귀하에게 연락드립니다.',
			'div2' => '세금신고 등기',
			'p2' => '회사 등기를 진행하면 사용자는 “회사등기증서”를 <br/>
				획득할 수 있습니다. 이 증서는 이 회사는 합법적으로 <br/>
				존재하고 및 회사의 번호화 창립일자를 표시합니다. <br/>
				사용자는 영업을 시작한 3개월내에 회사 세부 등기를 <br/>
				완성하여야 합니다.',
		),
	);
	$basic = array(
		'title' => '등기신청',
		'registgbr'=>'영국 개인 유한회사 신청',
		'gbrcompany'=>'영국 개인 유한회사',
		'time_money'=>'자료를 제공한 뒤 24시간내에 <br/>완성<br/>등록비용 1500 위안/일시불',
		'know_more'=>'더 알아보기',
		'money_rmb'=>'¥1500',
		'money_min'=>'이번 서비스의 최저비용은',
		'money_little'=>'',//약 <br />  <span class="fz44">150</span> LT
		'littlepay_nb'=>'* LT TOKEN 지불 지지',
		'basic_data'=>'기본정보 입력',
		'name'=>'개인유한회사 비축명칭',
		'name_msg'=>'회사 비축명칭을 입력하여 주세요',
		'region'=>'등기 지역',	
		'address_data'=>'등기 주소 정보',
		'register_address1'=>'건축명칭/번호',
		'register_address1_msg'=>'건축명칭/번호를 입력하여 주세요',
		'register_address2'=>'등기 지소',
		'register_address2_msg'=>'등기 주소를 입력하여 주세요',
		'register_address3'=>'행정 구역',
		'register_address3_msg'=>'행정 구역을 입력하여 주세요',
		'register_address4'=>'국가',
		'contact_data'=>'주문서 접수인 정보',
		'contact_name'=>'성명',
		'contact_name_msg'=>'성명을 입력하여 주세요',
		'contact_email'=>'전자메일',
		'contact_email_msg'=>'정확한 메일 주소를 입력하여 주세요',
		'contact_mobile'=>'연략처',
		'contact_mobile_msg'=>'연락처 격식이 정확하지 않습니다',
		'address'=>'우편주소',
		'address_msg'=>'우편 주소를 입력하여 주세요',
		'submit'=>array(
			'button'=>'다음 절차, 회사의 경영범위를 선택하여 주세요',
			'return'=>'돌아가기',
			'yes'=>'제출'
		),
		'submit2' => '확인',
		'msg'=>array(
			'msg1'=>'회사의 명칭을 반드시 입력하여 주셔야 합니다',
			'msg1_1'=>'회사 명칭에 수자가 있어서는 안됩니다',
			'msg1_2'=>'이미 존재하는 회사 명칭입니다',
			'msg1_3'=>'회사명칭의 접미사를 반드시 입력하여 주셔야 합니다 ',
			'msg2'=>'등기 지역을 반드시 입력하여 주셔야 합니다',
			'msg3'=>'건축명칭 번호를 반드시 입력하여 주셔야 합니다',
			'msg3_1'=>'건축명칭 번호는 반드시 영문이여야 합니다',
			'msg4'=>'등기 주소를 반드시 입력하여 주셔야 합니다',
			'msg4_1'=>'등기 주소는 반드시 영문이여야 합니다',
			'msg5'=>'행정 지역을 반드시 입력하여 주셔야 합니다',
			'msg5_1'=>'행정 구역은 반드시 영문이여야 합니다',
			'msg6'=>'국가를 반드시 입력하여 주셔야 합니다',
			'msg7'=>'연락 담당자의 성명을 반드시 입력하여 주셔야 합니다',
			'msg8'=>'연락 담당자의 메일을 반드시 입력하여 주셔야 합니다',
			'msg8_1'=>'정확한 전자 메일을 입력하여 주세요',
			'msg9'=>'연락 담당자의 휴대폰 번호를 반드시 입력하여 주셔야 합니다',
			'msg10'=>'우편 주소를 반드시 입력하여 주셔야 합니다',
			'msg11'=>'회사 기본 정보 추가 실패',
			'msg12'=>'회사 기본 정보 추가 성공',
			'msg13'=>'회사 기본 정보 수정 실패',
			'msg14'=>'회사 기본 정보 수정 성공',
		)
	);
	$scope = array(
		'title'=>'경영범위',
		'title_1'=>'회사 경영 범위',
		'title_2'=>'경영범위',
		'title_3'=>'업무묘사',
		'select'=>'-- Please select --',
		'button'=>'제출',
		'alert1'=>'경영범위를 선택하여 주세요',
		'alert2'=>'업무 묘사를 선택하여 주세요',
		'alert3'=>'이미 추가한 선택항입니다, 경영 범위를 다시 선택하여 주세요',
		'alert4'=>'경영범위 선택 실패',
		'alert5'=>'경영범위 서택 성공',
	);
	$scope_list = array(
		'title'=>'경영 범위 리스트',
		'title1'=>'회사 경영 범위',
		'title2'=>'SIC코드',
		'title3'=>'묘사',
		'button1'=>'삭제',
		'button2'=>'회사 경영 범위 추가하기',
		'button3'=>'다음 절차, 이사 기본 정보 입력하기',
		'button4'=>'돌아가기',
		'button5'=>'확인',
		'button6'=>'수정이 불가능합니다',
		'alert1'=>'삭제 실패',
		'alert2'=>'삭제 성공',
		'alert3'=>'최소한 1가지 경영범위를 추가하셔야 합니다!',
		'alert4'=>'경영범위는 4개를 초과하면 안됩니다!',
		);
	$ds_insert = array(
		'title'=>'이사정보',
		'title1'=>'이사 기본 정보 입력하기',
		'title1_msg'=>'특별 설명: <br />
			1、만 16세 이상 신분증명 문서를 가지고 있는 사람은 모두 <br/>
			이사를 신청할 수 있고, 적어도 한명의 이사가 있어야 하고, <br/>
			이사와 주주는 같은 사람으로 간주되며, 자연인 혹은 법인이 <br/>
			담당할 수 있고 국적의 제한이 없습니다.<br />
			2、첫 번째 이사의 임명을 완성한 뒤, 기타 고층을 임명할 수 <br/>
			있고, 이는 비서와 회사 이사 / 회사 비서를 포함합니다.',
		'title2'=>'이름',
		'title2_msg'=>'이름을 입력하여 주세요',
		'title3'=>'성',
		'title3_msg'=>'성을 입력하여 주세요',
		'title4'=>'국가/거주국가',
		'title5'=>'국가',
		'title6'=>'출생일자',
		'title6_msg'=>'출생일자를 입력하여 주세요',
		'title7'=>'직업',
		'title7_msg'=>'직업을 입력하여 주세요',
		'title8'=>'이사 서비스 주소',
		'title9'=>'서비스 주소',
		'title10'=>'서비스 주소가 제출한 주소일 경우 (아래의 정보를 입력하여 주세요)',
		'title11'=>'서비스 주소와 회사의 등기 주소와 일치',
		'title12'=>'국가',
		'title13'=>'건축명칭/번호',
		'title13_msg'=>'건축명칭/번호를 입력하여 주세요',
		'title14'=>'주소',
		'title14_msg'=>'주소를 입력하여 주세요',
		'title15'=>'구역',
		'title15_msg'=>'구역을 입력하여 주세요',
		'title16'=>'이사 거주 주소',
		'title17'=>'주소',
		'title18'=>'나는 상술한 인원이 이사를 맡을 것을 동의하였음을 <br/>
			이미 확인하였음',
		'submit1'=>'제출',
		'submit2'=>'돌아가기',
		'title19'=>'이사 서비스 주소',
		'title19_msg_p1'=>'이는 공공기록에 나타날 주소입니다, 꼭 주택 주소가 아닐 <br/>
			수 있습니다.',
		'title19_msg_p2'=>'사용자는 드롭다운 리스트에서 아래의 두가지 주소를 선택:<br />
			첫 번째 선택항은 서비스 주소와 회사의 등기 사무 주소와 <br/>
			일치하다. 주소지 선택을 통하여 이사의 서비스 주소는 <br/>
			등기 주소의 변화의 영향을 받을 수 있습니다.',
		'title19_msg_p3'=>'두 번째는 서비스 주소를 완정한 주소로 제공하여야 하고, <br/>
			사용자는 상세한 정보를 주소 필드에 입력할 수 있습니다.',
		'title20'=>'이사 거주 주소',
		'title20_msg_p1'=>'드롭다운 리스트에서 아래의 두가지 주소를 선택:<br />
			첫 번째 선택항은 이사 거주 주소와 이사 서비스 주소와 <br/>
			일치하다. 주소지 선택을 통하여 이사의 서비스 주소는 <br/>
			이사 서비스 주소의 변화의 영향을 받을 수 있습니다.',
		'title20_msg_p2'=>'아래의 상황이 나타날 경우, 첫번째를 선택하여 주세요:<br />
			- 서비스 주소는 회사 등기 주소와 동일하다고 표기되었다<br />
			-  서비스 주소는 \'토스트\' (c / o) 가 포함되어 있습니다.<br />
			- (혹은 신청) 공표면제',
		'title20_msg_p3'=>'두번째 선택항은 주소를 완정한 주소로 제공하여야 하고, <br/>
			사용자는 상세한 정보를 주소 필드에 입력할 수 있습니다. <br/>
			주소지는 PO Box，DX혹은 LP（스코틀랜드 당지 법정 <br/>
			우편）번호가 아니여야 합니다.',
		'title21'=>'이사 주소지가 제공한 주소일 경우 (아래의 <br/>
			정보를 입력하여 주세요)',
		'title22'=>'상술한 인원은 이사를 맡을 것을 동의하였음을 확인',
		'text1' => '서비스 주소는 회사의 등기 주소와 동일',
		'text2' => '서비스 주소가 제출한 주소일 경우 (아래의 정보를 <br/>
			입력하여 주세요)',
		'name_1' => '이름을 반드시 입력하여 주셔야 합니다',
		'name_2' => '이름을 영어로 입력하여 주세요',
		'surname_1' => '성을 반드시 입력하여 주셔야 합니다',
		'surname_2' => '성을 영어로 입력하여 주세요',
		'date_birth_ajax' => '출생일자를 반드시 입력하여 주셔야 합니다',
		'profession_1' => '직업을 반드시 입력하여 주셔야 합니다',
		'profession_2' => '직업 명칭을 영어로 입력하여 주세요',
		'building_a_1' => '서비스 주소 건축 명칭/번호를 반드시 입력하여 주셔야 합니다',
		'building_a_2' => '서비스 주소 건축 명칭/번호를 영어로 입력하여 주세요',
		'address_a_1' => '서비스 주소를 반드시 입력하여 주셔야 합니다',
		'address_a_2' => '서비스 주소를 영어로 입력하여 주세요',
		'area_a_1' => '서비스 지역을 반드시 입력하여 주셔야 합니다',
		'area_a_2' => '서비스 지역을 영어로 입력하여 주세요',
		'building_b_1' => '거주 지역 건축 명칭/번호를 반드시 입력하여 주셔야 합니다',
		'building_b_2' => '거주 지역 건축 명칭/번호를 영어로 입력하여 주세요',
		'address_b_1' => '거주 주소를 반드시 입력하여 주셔야 합니다',
		'address_b_2' => '거주 주소를 영어로 입력하여 주세요',
		'area_b_1' => '거주 지역을 반드시 입력하여 주셔야 합니다',
		'area_b_2' => '거주 지역을 영어로 입력하여 주세요',
		'return_1' => '이사 정보 입력 실패',
		'return_2' => '이사 정보 입력 성공',
		'return_3' => '이사 정보 수정 실패',
		'return_4' => '이사 정보 수정 성공',
		'date_birth_16' =>'출생일자가 부합되지 않습니다! 이사의 연령은 반드시 만 16세 이상이여야 합니다',
		'service_a'=>'이사 서비스 주소를 반드시 입력하여 주셔야 합니다',
		'service_b'=>'이사 거주 주소를 반드시 입력하여 주셔야 합니다',
	);
	$ds_list = array(
		'title' => '이사 리스트',
		'text11' => '이사 정보',
		'text22' => '수정',
		'text33' => '삭제',
		'text44' => '회사 이사 한명 추가하기',
		'text55' => '다음 절차, 비서 기본 정보 입력하기',
		'text66' => '돌아가기',
		'text77' => '조회',
		'text88' => '확인',
		'alert1'=>'삭제실패',
		'alert2'=>'삭제성공',
		'text1' => '서비스 주소와 회사의 등기 주소와 일치',
		'text2' => '서비스 주소가 제출한 주소일 경우 (아래의 정보를 입력하여 주세요)',
		'name_1' => '이름을 반드시 입력하여 주셔야 합니다',
		'name_2' => '이름을 영어로 입력하여 주세요',
		'surname_1' => '성을 반드시 입력하여 주셔야 합니다',
		'surname_2' => '성을 영어로 입력하여 주세요',
		'date_birth_ajax' => '출생일자를 반드시 입력하여 주셔야 합니다',
		'profession_1' => '직업을 반드시 입력하여 주셔야 합니다',
		'profession_2' => '직업 명칭을 영어로 입력하여 주세요',
		'building_a_1' => '서비스 주소 건축 명칭/번호를 반드시 입력하여 주셔야 합니다',
		'building_a_2' => '서비스 주소 건축 명칭/번호를 영어로 입력하여 주세요',
		'address_a_1' => '서비스 주소를 반드시 입력하여 주셔야 합니다',
		'address_a_2' => '서비스 주소를 영어로 입력하여 주세요',
		'area_a_1' => '서비스 지역을 반드시 입력하여 주셔야 합니다',
		'area_a_2' => '서비스 지역을 영어로 입력하여 주세요',
		'building_b_1' => '거주 지역 건축 명칭/번호를 반드시 입력하여 주셔야 합니다',
		'building_b_2' => '거주 지역 건축 명칭/번호를 영어로 입력하여 주세요',
		'address_b_1' => '거주 주소를 반드시 입력하여 주셔야 합니다',
		'address_b_2' => '거주 주소를 영어로 입력하여 주세요',
		'area_b_1' => '거주 지역을 반드시 입력하여 주셔야 합니다',
		'area_b_2' => '거주 지역을 영어로 입력하여 주세요',
		'return_1' => '이사 정보 입력 실패',
		'return_2' => '이사 정보 입력 성공',
		'return_3' => '이사 정보 수정 실패',
		'return_4' => '이사 정보 수정 성공',
		'aaa' => '최소 한명의 이사가 필요합니다, 추가하여 주세요',
		'bbb' => '다음 절차, 비서 기본 정보 입력하기',
	);
	$ms_insert = array(
		'title'=>'비서정보',
		'text1_a' => '비서 기본 정보 입력하기',
		'text1_b' => '비서 기본 정보 수정하기',
		'text2' => '특별설명:<br />사용자는 회사의 비서를 임명할 수 있으나, 이는 선택사항이고 필요하지 앟으면 선택하지 않으시고',
		'text3' => '이곳을 클릭하여 페이지를 넘겨주세요>>',
		'name' => '이름',
		'name_span' => '이름을 영어로 입력하여 주세요',
		'surname' => '성',
		'surname_span' => '성을 영어로 입력하여 주세요',
		'submit1'=>'제출',
		'submit2'=>'돌아가기',
		'text4' => '비서 서비스 주소',
		'text4_title' => '비서 서비스 주소',
		'text4_prompt' => '이는 공공기록에 나타날 주소입니다, 꼭 주택 주소가 아닐 수 있습니다.<br/><br/>
		용자는 드롭다운 리스트에서 아래의 두가지 주소를 선택:<br />
		첫 번째 선택항은 서비스 주소와 회사의 등기 사무 주소와 일치하다. 주소지 선택을 통하여 이사의 서비스 주소는 등기 주소의 변화의 영향을 받을 수 있습니다.<br/><br/>
		두 번째는 서비스 주소를 완정한 주소로 제공하여야 하고, 사용자는 상세한 정보를 주소 필드에 입력할 수 있습니다.',
		'text5' => '서비스 주소',
		'text6' => '서비스 주소가 제출한 주소일 경우 (아래의 정보를 입력하여 주세요)',
		'text7' => '서비스 주소는 회사의 등기 주소와 동일',
		'text8' => '서비스 주소가 제출한 주소일 경우',
		'nation_a' => '국가',
		'building_a' => '건축명칭/번호',
		'building_a_span' => '건축명칭/번호를 입력하여 주세요',
		'address_a' => '주소',
		'address_a_span' => '서비스 주소를 영어로 입력하여 주세요',
		'area_a' => '구역',
		'area_a_span' => '구역을 영어로 입력하여 주세요',
		'ms_insert_span' => '나는 상술한 인원이 비서를 맡을 것을 동의하였음을 이미 확인하였음',
		'ms_insert_span_ajax' => '상술한 인원은 비서를 맡을 것을 동의하였음을 확인',
		'service_a_ajax' => '서비스 주소가 제출한 주소일 경우 (아래의 정보를 입력하여 주세요)',
		'surname_ajax' => '성을 반드시 입력하여 주셔야 합니다',
		'name_ajax' => '이름을 반드시 입력하여 주셔야 합니다',
		'nation_a_ajax' => '국가를 반드시 입력하여 주셔야 합니다',
		'building_a_ajax' => '건축명칭/번호를 반드시 입력하여 주셔야 합니다',
		'address_a_ajax' => '주소를 반드시 입력하여 주셔야 합니다',
		'area_a_ajax' => '구역을 반드시 입력하여 주셔야 합니다',
		'info3' => '정보 업로드 성공',
		'info1'=>'추가실패',
		'info2'=>'추가성공',
		'info4'=>'수정실패',
		'info5'=>'수정성공',
		'service_a'=>'비서 서비스 주소를 반드시 입력하여 주셔야 합니다',
	);
	$ms_list = array(
		'title'=>'비서 리스트',
		'title1' =>'비서 정보',
		'btn1'=>'수정',
		'btn2'=>'삭제',
		'btn3'=>'조회',
		'btn4'=>'새로운 비서 한명 추가하기',
		'btn5'=>'다음 절차, 회사의 주식 자본 증가하기',
		'btn6'=>'확인',
		'btn7'=>'돌아가기',
		'return_1' => '삭제실패',
		'return_2' => '삭제성공',
	);
	$equity_insert= array(
		'title' => '주식 자본 증가하기',
		'text1' => '회사의 주식 자본 증가하기',
		'text2' => '특별설명: <br/>
		규정한 조항에서 아래의 정보를 설명하여 주세요<br/>
		1, 주주 주식 보유 비율<br/>
		2, 주주 주식 배당금 지불<br/>
		3, 주주가 회사의 업무를 중단되거나 회사가 파산할 경우의 우선권 및 임의로 회수 가능한 주권 조항 및 조건',
		'huobi' => '화폐',
		'shares_type' => '주권유형',
		'number' => '주권수량',
		'number_span' => '주권 수량은 같은 유형의 이미 발행한 총수이고, 반드시 정수여야 합니다',
		'facevalue' => '총가치',
		'facevalue_span' => '주식은 주당가격을 곱하는 것, 예를 들면 100주X£1.00 =£100.00입니다.',
		'texteare' => '규정 상세 조항 (최대한 4,000개 문자 부호 입력 가능)',
		'next' => '다음 절차, 자본설명',
		'currency_type' => '화폐 유형을 반드시 입력하여 주셔야 합니다',
		'shares_type' => '주권 유형을 반드시 입력하여 주셔야 합니다',
		'numbera' => '주권 수량을 반드시 입력하여 주셔야 합니다',
		'number_a' => '주권 수량은 정수여야 합니다',
		'facevaluea' => '총가치를 반드시 입력하여 주셔야 합니다',
		'facevalue_a' => '총가치는 정수여야 합니다',
		'details' => '규정 상세 조항을 반드시 입력하여 주셔야 합니다',
		'return1' => 'guben ',
		'return2' => '규정 상세 조항을 반드시 입력하여 주셔야 합니다',
		'submit1'=>'제출',
		'alert1'=>'회사 주식 자본 증가 실패',
		'alert2'=>'회사 주식 자본 증가 성공',
		'alert3'=>'회사 주식 자본 수정 실패',
		'alert4'=>'회사 주식 자본 수정 성공',
	);
	$equity_list= array(
		'title'=>'자본설명',
		'title2'=>'화폐',
		'title3'=>'주권유형',
		'title4'=>'주권수량',
		'title5'=>'총가치',
		'title6'=>'미지급 자본',
		'title7'=>'미지급 금액',
		'title8'=>'이는 나머지 회사의 주식의 총가치의 지불에 사용됩니다',
		'title9'=>'다음 절차, 주권 구매 승인',
		'title10'=>'돌아가기',
		'title11'=>'확인',
		'title12'=>'미지급 자본',
		'title13_p1'=>'입력한 금액은 나머지 회사의 주권 총가치를 지불하여야 할 금액입니다',
		'title13_p2'=>'미재불금액이 없으면 0을 입력하세요',
		'title14'=>'미지불 금액을 반드시 입력하여 주셔야 합니다',
		'title15'=>'미지불 금액은 반드시 정수여야 합니다',
		'title16'=>'자본설명 입력 성공',
		'title17'=>'자본 설명 입력 실패',
		'title18'=>'규정 상세 사항',
	);
	$share_shop_insert = array(
		'title'=>'주권 구매 인증',
		'title1'=>'회사 주권 구매 인증',
		'title2'=>'특별설명：<br />
		1, 구매 인증인은 유한회사의 최초 주주이고 희원이여야 합니다<br/>
		2, 주주는 조직 규정 요강을 구독하는 사랍입니다. 이는 하나의 문서는 매개 사용자는 모두 2006년의 회사법에 근거하여 회사을 설립하고, 매개 사용자는 회사의 멤버가 되는 것을 동의하며 적어도 회사의 지분 하나를 소유하여야 합니다. 회사의 조직 규정 요강은 법률 법규의 형식을 채용하고, 사용자는 필요한 정보를 입력한 뒤 개요 정보 페이지에서 확인할 수 있습니다.<br/>
		3, 주주는 개인, 회사 혹인 기업입니다',
		'title3'=>'주주유형',
		'title4'=>'개인',
		'title5'=>'회사/기업',
		'title6'=>'이름',
		'title7'=>'이름을 영어로 입력하여 주세요',
		'title8'=>'성',
		'title9'=>'성을 영어로 입력하여 주세요',
		'title10'=>'기업/회사 명칭',
		'title11'=>'기업/회사 명칭을 영어로 입력하여 주세요',
		'title12'=>'법정대표이름',
		'title13'=>'법정대표 이름을 영어로 입력하여 주세요',
		'title14'=>'법정대표 성',
		'title15'=>'법정대표 성을 영어로 입력하여 주세요',
		'title16'=>'주주 주소',
		'title17'=>'국가',
		'title18'=>'건축명칭/번호',
		'title19'=>'건축명칭/번호를 영어로 입력하여 주세요',
		'title20'=>'주소',
		'title21'=>'주소를 영어로 입력하여 주세요',
		'title22'=>'구역',
		'title23'=>'구역을 영어로 입력하여 주세요',
		'title24'=>'보유 주권',
		'title25'=>'화폐와 주권 유형',
		'title26'=>'주권 수량',
		'title27'=>'주권 수량을 입력하여 주세요',
		'title28'=>'주당 지불 금액',
		'title29'=>'주당 지불 금액을 입력하여 주세요',
		'title30'=>'주당 미지불 금액',
		'title31'=>'주당 미지불 금액을 입력하여 주세요',
		'title32'=>'주주정보 신분 인증',
		'title33'=>'휴대폰 번호 뒷3자리',
		'title34'=>'휴대폰 번호 뒷3자리를 입력하여 주세요',
		'title35'=>'모친 성명 (앞의 3개 자모)',
		'title36'=>'모친 성명 (앞의 3개 자모)를 입력하여 주세요',
		'title37'=>'부친 성명 (앞의 3개 자모)',
		'title38'=>'부친 성명 (앞의 3개 자모)를 입력하여 주세요',
		'title39'=>'여권번호 뒷3자리',
		'title40'=>'여권번호 뒷3자리를 입력하여 주세요',
		'title41'=>'상술한 개인 정보를 제공할 경우, 주주는 인증이 필요합니다:',
		'title42'=>'1, 구매 격식의 조직 규정 요강<br />
		2,(만약 이 신청은 사용자가 Companies House에 발송한 것)의 합규 성명',
		'title43'=>'제출',
		'title44'=>'주주주소',
		'title45'=>'이는 공개기록에 나타날 주소입니다, 꼭 일반적인 주소가 아닐 수 있습니다.',
		'title46'=>'보유 주식',
		'title47'=>'구매 인증인에게 배분하는 주권 수량은 반드시 본 주식의 부분 입력한 주권의 총수량과 매치되어야 합니다.',
		'title48'=>'주주정보 신분 인증',
		'title49_p1'=>'페이지에 입력한 정보는 주주 정보의 전자 인증을 대표하고, 서명을 대체합니다.',
		'title49_p2' => '매개 유형은 3개의 문자 부호가 수요하고 (스페이스 포함하지 않음), 상술한 정보는 공공기록에 나타나지 않습니다.',
		'title49_p3' => '입력한 개인 정보는 주주의 다음 부분 합법성 성명의 인증으로 사용되고 사용자는 반드시 페이지에 체크하여야 만 계속 진행할 수 있습니다.',
		'title49_p4' => '법률 요구 합규 성명은 사용자는 2006년 회사법의 등기 요구를 준수함을 의미합니다.',
		'title50'=>'회사 혹은 개인을 선택하여 주세요',
		'title51'=>'개인',
		'title52'=>'회사/기업',
		'submit2'=>'돌아가기',
		'alert1'=>'주주 유형을 반드시 입력하여 주셔야 합니다',
		'alert2'=>'이름을 반드시 입력하여 주셔야 합니다',
		'alert3'=>'성을 반드시 입력하여 주셔야 합니다',
		'alert4'=>'회사/기업의 명칭을 반드시 입력하여 주셔야 합니다',
		'alert5'=>'법정인의 이름을 반드시 입력하여 주셔야 합니다',
		'alert6'=>'법정인의 성을 반드시 입력하여 주셔야 합니다',
		'alert7'=>'주주의 인증이 필요한 개인 정보를 확인하여 주세요',
		'alert8'=>'국가를 반드시 입력하여 주셔야 합니다',
		'alert9'=>'건축명칭/번호를 반드시 입력하여 주셔야 합니다',
		'alert10'=>'주소를 반드시 입력하여 주셔야 합니다',
		'alert11'=>'구역을 반드시 입력하여 주셔야 합니다',
		'alert12'=>'주권 수량을 반드시 입력하여 주셔야 합니다',
		'alert13'=>'주권 수량은 반드시 정수여야 합니다',
		'alert14'=>'주권 수량이 회사의 주권 총액을 초과하였습니다',
		'alert15'=>'주당 지불 금액을 반드시 입력하여 주셔야 합니다',
		'alert16'=>'주당 미지불 금액을 반드시 입력하여 주셔야 합니다',
		'alert17'=>'휴대폰 번호 뒷3자리를 반드시 입력하여 주셔야 합니다',
		'alert18'=>'휴대폰 번호 격식이 정확하지 않습니다',
		'alert19'=>'모친 성명을 반드시 입력하여 주셔야 합니다',
		'alert20'=>'모친 성명의 격식이 정확하지 않습니다',
		'alert21'=>'부친 성명을 반드시 입력하여 주셔야 합니다',
		'alert22'=>'부친 성명의 격식이 정확하지 않습니다',
		'alert23'=>'여권번호 뒷3자리를 반드시 입력하여 주셔야 합니다',
		'alert24'=>'여권번호 격식이 정확하지 않습니다',
		'alert25'=>'주권 인증 구매 실패',
		'alert26'=>'주권 인증 구매 성공',
		'alert27'=>'수정실패',
		'alert28'=>'수정성공',
	);
	$share_shop_list = array(
		'title'=>'회사 초기 주권',
		'title1'=>'개인',
		'title2'=>'회사/기업',
		'btn1'=>'수정',
		'btn2'=>'삭제',
		'btn3'=>'조회',
		'btn4'=>'새로운 회사 주주 한명 추가하기',
		'btn5'=>'다음 절차, 실제 공제인 설치하기',
		'btn6'=>'확인',
		'btn7'=>'돌아가기',
		'alert1'=>'삭제실패',
		'alert2'=>'삭제성공',
		'alert3'=>'수량을 반드시 입력하여 주셔야 합니다',
		'alert4'=>'주권 구매 인증의 수량의 합은 발행 총량과 일치하여야 합니다, 미 구매 인증 주권 수량은 ',
		'alert5'=>'성공',
	);
	$control_people = array(
		'title'=>'실제공제인',
		'title1'=>'회사 실제공제인',
		'title2'=>'특별설명:<br/>
		1, PSC는 회사에 중요한 영향력 혹은 공제권이 있는 개인 혹은 관련 법률 실체 (예를 들면 회사) 혹은 법인 (예를 들면 회사, 정부부문, 국제조직)여야 합니다.<br/>
		2, 대부분 회사에서 이런 사람들은:<br/>- 화사의 25%이상의 주식을 보유하고<br/>- 화사의 25%이상의 투표권을 가지고 있습니다<br/>-  절반이상의 이사를 임명 혹은 파면할 권리가 있습니다<br/>
		3, 사용자는 반드시 회사가 PSC를 등기할 수 있는 지 (개인 혹은 법인 실체)를 확인하여야 합니다.',
		'title3'=>'회사가 적어도 한개의 PSC를 가지고 있나요',
		'title4'=>'네',
		'title5'=>'아니요',
		'title6'=>'사용자는 반드시 아래의 성명을 확인하셔야 합니다:',
		'title7'=>'본회사',
		'title8'=>'없음',
		'title9'=>'등기가 가능한 인원 혹은 등기 관련 법률 실체가 존재',
		'title10'=>'제출',
		'title11'=>'회사가 적어도 한개의 PSC를 가지고 있는지 선택하여 주세요',
		'title12'=>'실제 공제인 설치 성공',
		'title13'=>'상술한 성명을 확인하여 주세요!',
		'title14'=>'회사는 적어도 하나의 PSC를 선택하여야 합니다',
		'title15'=>'선택실패, 다시 선택하여 주세요',
		'title16'=>'선택성공',
	);
	$control_people1 = array(
		'title'=>'실제 공제인 유형',
		'title1'=>'회사 실제공제인',
		'title2'=>'초보 실제 공제인 설명:<br /> 본 회사는 등기가 가능한 인원 혹은 등기 관련 법률 실체가 존재',
		'title3'=>'실제 공제인 정보',
		'title4'=>'실제 공제인 유형',
		'title5'=>'개인',
		'title6'=>'기업 혹은 회사',
		'title7'=>'다음 절차, 실제 공제인 정보 입력',
		'title8'=>'실제 공제인',
		'title9'=>'사용자는 반드시 회사의 중요한 공제인원의 상세한 정보를 제공하여야 하고, 사용자는 PSC의 유형이 개인, 기업 혹은 회사를 선택할수 있습니다.',
		'title10'=>'실제 공제인 유형을 선택하여 주세요',
		'title11'=>'실제 공제인 유형 선택 성공',
		'title12'=>'',
		'title13'=>'',
		'title14'=>'',
		'title15'=>'',
	);
	$control_company=array(
		'title'=>'실제 공제인 - 회사',
		'txt1'=>'실제 공제인 정보 입력',
		'txt2'=>'특별설명: <br />
		사용자가 제출하는 모든 상세한 정보는 공공기록에 나타나지만, 아래와 같은 상황을 제외합니다:<br />
		1, 출생의 완정한 일자 (오직 월과 년만 표시);<br />
		2, 거주지의 상세한 정보 (오직 서비스 지역의 상세한 정보만 표시)',
		'txt3'=>'회사/기업명칭',
		'txt4'=>'회사/기업 명칭을 입력하여 주세요',
		'txt5'=>'국가',
		'txt6'=>'건축명칭/번호',
		'txt7'=>'국가를 입력하여 주세요',
		'txt8'=>'주소',
		'txt9'=>'주소를 입력하여 주세요',
		'txt10'=>'구역',
		'txt11'=>'구역을 입력하여 주세요',
		'txt12'=>'실체의 법률형식',
		'txt13'=>'법률형식',
		'txt14'=>'법률형식을 입력하여 주세요',
		'txt15'=>'이 실체의 법률을 관할하기',
		'txt16'=>'이 실체의 법률을 관할하기를 입력하여 주세요',
		'txt17'=>'실체의 등기 번호',
		'txt18'=>'실체의 등기 번호를 입력하여 주세요',
		'txt19'=>'공제의 성질',
		'txt20'=>'제출',
		'txt20_1'=>'돌아가기',
		'txt21'=>'이 실체의 법률형식',
		'txt22_p1'=>'이는 공공기록에 나타날 주소입니다, 꼭 주택 주소가 아닐 수 있습니다.',
		'txt22_p2' => '사용자는 드롭다운 리스트에서 아래의 두가지 주소를 선택:<br />첫 번째 선택항은 서비스 주소와 회사의 등기 사무 주소와 일치하다. 주소지 선택을 통하여 이사의 서비스 주소는 등기 주소의 변화의 영향을 받을 수 있습니다.',
		'txt22_p3' => '두 번째는 서비스 주소를 완정한 주소로 제공하여야 하고, 사용자는 상세한 정보를 주소 필드에 입력할 수 있습니다.',
		'txt23'=>'공제의 성질',
		'txt24_p1'=>'사용자는 반드시 적어도 하나의 공제 부분의 성질을 완성하여야 합니다.',
		'txt24_p2' => '대부분 소기업에서, 오직 아래의 조건에만 적용:<br />- 한 개인으로서 주권 보유 (제1절)<br />- 作개인으로서의 투표권의 소유권 (제4절)<br />- 이 사람은 회사 대부분의 이사회를 지정 또는 삭제 할 권리가 있다 (제7조)',
		'txt24_p3' => '만약 상술한 조건에 모두 적용되지 않으면, 아래의 선택이 더 적합할 수 있습니다:<br />-  이 사람은 회사에 중요한 영향 혹은 공제권이 있다 (제8조)',
		'alert1'=>'회사의 명칭을 반드시 입력하여 주셔야 합니다',
		'alert2'=>'회사의 명칭을 영문으로 입력하여 주세요',
		'alert3'=>'건축명칭/번호를 반드시 입력하여 주셔야 합니다',
		'alert4'=>'건축명칭/번호를 영문으로 입력하여 주세요',
		'alert5'=>'주소를 반드시 입력하여 주셔야 합니다',
		'alert6'=>'주소를 영문으로 입력하여 주세요',
		'alert7'=>'구역을 반드시 입력하여 주셔야 합니다',
		'alert8'=>'구역을 영문으로 입력하여 주세요',
		'alert9'=>'법률형식을 반드시 입력하여 주셔야 합니다',
		'alert10'=>'법률형식을 영문으로 입력하여 주세요',
		'alert11'=>'이 실체를 관할하는 법률을 반드시 입력하여 주셔야 합니다',
		'alert12'=>'이 실체를 관할하는 법률을 영문으로 입력하여 주세요',
		'alert13'=>'실체의 등기 번호를 반드시 입력하여 주셔야 합니다',
		'alert14'=>'실체의 등기 번호를 영문으로 입력하여 주세요',
		'alert15'=>'최소한 하나의 공제 부분의 성질을 선택하여 주셔야 합니다',
		'alert16'=>'실제 공제인 추가 실패',
		'alert17'=>'실제 공제인 추가 성공',
		'alert18'=>'실제 공제인 수정 실패',
		'alert19'=>'실제 공제인 수정 성공',
	);
	$control_personal=array(
		'title'=>'실제 공제인 - 개인',
		'title1'=>'실제 공제인 (개인) 정보',
		'title2'=>'특별설명： <br />
		사용자가 제출하는 모든 상세한 정보는 공공기록에 나타나지만, 아래와 같은 상황을 제외합니다:<br />
		1, 출생의 완정한 일자 (오직 월과 년만 표시);<br />
		2, 거주지의 상세한 정보 (오직 서비스 지역의 상세한 정보만 표시).',
		'title3'=>'이름',
		'title4'=>'이름을 입력하여 주세요',
		'title5'=>'성',
		'title6'=>'성을 입력하여 주세요',
		'title7'=>'국가/거주지역',
		'title8'=>'국적',
		'title9'=>'출생일자',
		'title10'=>'츨생일자를 입력하여 주세요',
		'title11'=>'실제 공제인 서비스 주소',
		'title12'=>'서비스 주소',
		'title13'=>'서비스 주소가 제출한 주소일 경우 (아래의 정보를 입력하여 주세요)',
		'title14'=>'서비스 주소와 회사의 등기 주소와 일치',
		'title15'=>'국가',
		'title16'=>'건축명칭/번호',
		'title17'=>'건축명칭/번호를 입력하여 주세요',
		'title18'=>'주소',
		'title19'=>'주소를 입력하여 주세요',
		'title20'=>'구역',
		'title21'=>'구역을 입력하여 주세요',
		'title22'=>'실제 공제인 주소',
		'title23'=>'거주지',
		'title24'=>'거주지가 제공한 주소에 위치할 경우 (아래의 정보를 입력하여 주세요)',
		'title25'=>'거주 주소와 회사의 등기 주소가 일치',
		'title26'=>'공표면제 (적용이 되는 상황)',
		'title27'=>'아래의 면제는 오직 상처 위험을 받아 정보를 공유 및 공표하는데 제한이 있는 인원에 적용됩니다:',
		'title28'=>'사용자는 2006년 회사법 제 790F조에 근거하여 면제를 신청하여 신용조사기관에 PSC 주소지의 상황을 공표하였으면 이곳에 체크하여 주세요.',
		'title29'=>'사용자는 2006년 회사법 제 790F조에 근거하여 공표면제 공공기록에서 PSC 신분의 신청을 제기하였을 경우, 이곳에 체크하여 주세요.',
		'title30'=>'공제의 성질',
		'title31'=>'제출',
		'title31_1'=>'돌아가기',
		'title32'=>'실제 공제인 서비스 주소',
		'title33_p1'=>'이는 공공기록에 나타날 주소입니다, 꼭 주택 주소가 아닐 수 있습니다.',
		'title33_p2' => '사용자는 드롭다운 리스트에서 아래의 두가지 주소를 선택:<br />첫 번째 선택항은 서비스 주소와 회사의 등기 사무 주소와 일치하다. 주소지 선택을 통하여 이사의 서비스 주소는 등기 주소의 변화의 영향을 받을 수 있습니다.',
		'title33_p3' => '두 번째는 서비스 주소를 완정한 주소로 제공하여야 하고, 사용자는 상세한 정보를 주소 필드에 입력할 수 있습니다.',
		'title34'=>'실제 공제인 주소',
		'title35_p1'=>'사용자는 드롭다운 리스트에서 아래의 두가지 주소를 선택:',
		'title35_p2'=>'첫 번째 선택항은 비서 주소와 비서 서비스 주소가 일치하다. 주소지 선택을 통하여 비서의 주소는 비서 서비스 주소의 변화의 영향을 받을 수 있습니다.',
		'title35_p3'=>'아래의 상황이 나타날 경우, 첫번째를 선택하여 주세요:<br/>-  서비스 주소는 회사 등기 주소와 동일하다고 표기되었다<br/>- 서비스 주소는“위탁 보관”（c / o）모듈을 포함<br/>-(혹은 신청) 공표면제',
		'title35_p4'=>'두번째 선택항은 주소를 완정한 주소로 제공하여야 하고, 사용자는 상세한 정보를 주소 필드에 입력할 수 있습니다. 주소지는 PO Box，DX혹은 LP（스코틀랜드 당지 법정 우편）번호가 아니여야 합니다.',
		'title36'=>'공제의 성질',
		'title37_p1'=>'사용자는 반드시 적어도 하나의 공제 부분의 성질을 완성하여야 합니다',
		'title37_p2'=>'대부분 기업에서, 오직 아래의 조건에만 적용:<br />- 한 개인으로서 주권 보유 (제1절)<br />- 개인으로서의 투표권의 소유권 (제4절)<br />-  이 사람은 회사 대부분의 이사회를 지정 또는 삭제 할 권리가 있다 (제7조)',
		'title37_p3'=>'만약 상술한 조건에 모두 적용되지 않으면, 아래의 선택이 더 적합할 수 있습니다:<br />- 이 사람은 회사에 중요한 영향 혹은 공제권이 있다 (제8조)',
		'alert1'=>'이름을 반드시 입력하여 주셔야 합니다 ',
		'alert2'=>'이름을 영어로 입력하여 주세요',
		'alert3'=>'성을 반드시 입력하여 주셔야 합니다',
		'alert4'=>'성을 영어로 입력하여 주세요',
		'alert5'=>'출생일자를 반드시 입력하셔야 합니다',
		'alert6'=>'실제 공제인 서비스 주소를 반드시 입력하셔야 합니다',
		'alert7'=>'건축명칭/번호를 반드시 입력하셔야 합니다',
		'alert8'=>'건축명칭/번호를 영문으로 입력하여 주세요',
		'alert9'=>'서비스 주소를 반드시 입력하셔야 합니다',
		'alert10'=>'서비스 주소를 영문으로 입력하여 주세요',
		'alert11'=>'서비스 구역을 반드시 입력하셔야 합니다',
		'alert12'=>'실제 공제인의 주소를 반드시 입력하셔야 합니다',
		'alert13'=>'최소한 하나의 공제 부분의 성질을 선택하여 주셔야 합니다',
		'alert14'=>'실제 공제인 추가 실패',
		'alert15'=>'실제 공제인 추가 성공',
		'alert16'=>'구역을 영문으로 입력하여 주세요',
		'alert17'=>'구역을 반드시 입력하셔야 합니다',
		'alert18'=>'실제 공제인 수정 실패',
		'alert19'=>'실제 공제인 수정 성공 ',
		'alert20'=>'출생일자는 현재 일자보다 커서는 안됩니다',
	);
	$control_people2 = array(
		'title'=>'실제공제인',
		'txt1'=>'회사 실제공제인',
		'txt2'=>'초보 실제 공제인 설명:<br /> 본 회사는 등기가 가능한 인원 혹은 등기 관련 법률 실체가 존재하지 않음',
		'txt3'=>'공제권 수정 설명',
		'btn1'=>'제출',
		'alert1'=>'공제권을 다시 선택하여 주세요',
		'alert2'=>'선택 성공',
	);

	$conp = array(
		0 => array(
			'name' =>'제1절 : 주권은 개인의 소유권으로 이 사람이 소유;',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
			),
		),
		1 => array(
			'name' =>'제2절: 주권은 회사 멤버의 소유권인으로서 회사의 활동 집행 혹은 실제적인 중대한 영향력 혹은 공제권을 가지고 있고, 회사의 활동은 관할구역의 법률아래에 법인이 아니고; <br />이 회사 멤버는; ',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
			),
		),
		2 => array(
			'name' =>'제3절: 주권은 신탁의 위탁을 받는 사람의 소유권으로서, 신인의 활동 집행 혹은 실제적인 즁대한 영향력 혹은 공제권을 가지고 있고<br />신탁의 위탁을 받는 사람은: ',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
				4 =>'투표권의 소유권',
			),
		),
		3 => array(
			'name' =>'제4절: 주권은 개인의 소유권으로 이 사람이 소유;',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
			),
		),
		4 => array(
			'name' =>'제5절: 회사 멤버의 소유권인으로서 회사의 활동 집행 혹은 실제적인 중대한 영향력 혹은 공제권을 가지고 있고, 회사의 활동은 관할구역의 법률아래에 법인이 아니고; 이 회사 멤버는;',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
			),
		),
		5 => array(
			'name' =>'제6절: 신탁의 위탁을 받는 사람의 투표권의 소유권으로서, 신탁의 활동 집행 혹은 실제적인 즁대한 영향력 혹은 공제권을 가지고 있고, 신탁의 위탁을 받는 사람은:',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
			),
		),
		6 => array(
			'name' =>'제7절: 대부분 이사회를 임명 혹은 파면할 수 있는 권리인은 아래의 권력을 소유:',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
				4=>'이사를 임명 혹은 파면과 중대한 영향력과 공제권.',
				),
			),
		7 => array(
			'name' =>'제8절: 중요한 영향 혹은 선택인의 영향력 혹은 공제력;',
			'list'=>array(
				1 =>'이 사람은 회사에 중대한 영향 혹은 공제권이 있다.',
				2 =>'이 사람은 회사에 공제권이 있고, 회사 멤버 (신분)는 회사에 중요한 영향 혹은 공제권이 있다.',
				3 =>'이 사람은 신탁 혹은 신탁의 위탁을 받는 사람은 (신분) 회사에 중요한 영향 혹은 공제권이 있다.', 
				4 =>'이사를 임명 혹은 파면과 중대한 영향력과 공제권.',
			),
		)
	);
	$conc = array(
		0 => array(
			'name' =>'제1절 : 주권은 개인의 소유권으로 이 사람이 소유;',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
			),
		),
		1 => array(
			'name' =>'제2절: 주권은 회사 멤버의 소유권인으로서 회사의 활동 집행 혹은 실제적인 중대한 영향력 혹은 공제권을 가지고 있고, 회사의 활동은 관할구역의 법률아래에 법인이 아니고; 이 회사 멤버는; ',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
			),
		),
		2 => array(
			'name' =>'제3절: 주권은 신탁의 위탁을 받는 사람의 소유권으로서, 신인의 활동 집행 혹은 실제적인 즁대한 영향력 혹은 공제권을 가지고 있고, 신탁의 위탁을 받는 사람은:  ',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
				4 =>'투표권의 소유권',
			),
		),
		3 => array(
			'name' =>'제4절: 주권은 개인의 소유권으로 이 사람이 소유;',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
			),
		),
		4 => array(
			'name' =>'제5절: 회사 멤버의 소유권인으로서 회사의 활동 집행 혹은 실제적인 중대한 영향력 혹은 공제권을 가지고 있고, 회사의 활동은 관할구역의 법률아래에 법인이 아니고; 이 회사 멤버는; ',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
			),
		),
		5 => array(
			'name' =>'제6절: 신탁의 위탁을 받는 사람의 투표권의 소유권으로서, 신탁의 활동 집행 혹은 실제적인 즁대한 영향력 혹은 공제권을 가지고 있고, 신탁의 위탁을 받는 사람은:',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
			),
		),
		6 => array(
			'name' =>'제7절: 대부분 이사회를 임명 혹은 파면할 수 있는 권리인은 아래의 권력을 소유:',
			'list'=>array(
				1 =>'25%를 초과하지만 50%의 주권을 초과하지 않는다',
				2 =>'50%를 초과하지만 70%의 주권을 초과하지 않는다',
				3 =>'75% 혹은 이상의 주권을 소유.', 
				4=>'이사를 임명 혹은 파면과 중대한 영향력과 공제권.',
			),
		),
		7 => array(
			'name' =>'제8절: 중요한 영향 혹은 선택인의 영향력 혹은 공제력;',
			'list'=>array(
				1 =>'이 사람은 회사에 중대한 영향 혹은 공제권이 있다.',
				2 =>'이 사람은 회사에 공제권이 있고, 회사 멤버 (신분)는 회사에 중요한 영향 혹은 공제권이 있다.',
				3 =>'이 사람은 신탁 혹은 신탁의 위탁을 받는 사람은 (신분) 회사에 중요한 영향 혹은 공제권이 있다.', 
				4 =>'이사를 임명 혹은 파면과 중대한 영향력과 공제권.',
			),
		)
	);
	$control_people_list=array(
		'title'=>'실제 공제인 리스트',
		'title1'=>'실제 공제인 정보',
		'title2'=>'개인',
		'title3'=>'법률실체',
		'alert1'=>'삭제실패',
		'alert2'=>'삭제성공',
		'btn1'=>'수정',
		'btn2'=>'삭제',
		'btn3'=>'조회',
		'btn4'=>'회사 실제 공제인 추가하기',
		'btn5'=>'다음 절차, 정보 저장',
		'btn6'=>'확인',
		'btn7'=>'돌아가기',
	);
	$control_msg=array(
		'title'=>'정보저장',
		'title1'=>'정보보관',
		'title2'=>'특별설명: <br />
		1, 귀사는 반드시 고급직원, 주주와 실제 공제인의 등기부를 보관하여야 합니다.<br />
		2, 모든 등기는 반드시 수시로 업데이트하고, 수시로 변화가 발생하며, 이사의 거주 주소를 제외하고 대중은 요구에 근거하여 조회할 수 있습니다.<br />
		3, 이사와 실제 공제인의 등기부는 완정한 출생일자를 포함하여야 하고, 사용자가 이러한 정보의 임의의 부분을 공개기록에 보관하면 정보는 대중에서 개방됩니다.',
		'title3'=>'등기부의 유형',
		'title4'=>'보관위치',
		'title5'=>'이사명부',
		'title6'=>'이사 거주지 등기',
		'btn1'=>'조회',
		'btn2'=>'수정',
		'btn3'=>'돌아가기',
		'btn4'=>'확인',
		'btn5'=>'다음 절차, 부합성 성명',
		'alert1'=>'회사의 등기 사무 주소에',
		'alert2'=>'공공기록에',
		'alert3'=>'이사명부의 보관 위치를 반드시 입력하셔야 합니다',
		'alert4'=>'이사 거주지 주소 등기 보관 위치를 반드시 입력하셔야 합니다',
		'alert5'=>'이사명부 보관 위치 업데이트 성공',
	);
	$director_roster = array(
		'title'=>'정보저장',
		'txt1'=>'이사명부',
		'txt2'=>'특별설명: <br />
		1, 이사명부는 회사의 등기 사무 주소 혹은 공공기록에 저장됩니다.<br />
		2, 사용자가 공개 기록에서의 업데이트 한 이사명부를 저장하였을 경우, 대중은 완정한 출생일자를 조회할 수 있습니다 (이미 제공한 정보를 제외)',
		'txt3'=>'보관위치',
		'txt4'=>'회사의 등기 사무 주소에',
		'txt5'=>'공공기록에',
		'btn1'=>'제출',
		'btn2'=>'돌아가기',
		'alert1'=>'선택하여 주세요',
		'alert2'=>'이사명부 보관 위치 업데이트 성공',
		'alert3'=>'이사명부의 보관 위치를 반드시 입력하셔야 합니다',
		'alert4'=>'이사명부 보관 위치 수정 실패',
	);
	$director_address = array(
		'title'=>'정보저장',
		'txt1'=>'이사 거주지 등기',
		'txt2'=>'특별설명:<br /> 1, 이사명부는 회사의 등기 사무 주소 혹은 공공기록에 저장됩니다.',
		'txt3'=>'이사 거주지 등기',
		'txt4'=>'회사의 등기 사무 주소에',
		'txt5'=>'공공기록에',
		'btn1'=>'제출',
		'btn2'=>'돌아가기',
		'alert1'=>'선택하여 주세요',
		'alert2'=>'이사 거주지 등기 보관 위치 수정 성공',
		'alert3'=>'이사 거주지 주소 등기 보관 위치를 반드시 입력하셔야 합니다',
		'alert4'=>'이사 거주지 등기 보관 위치 수정 성공',
	);
	$control_statement=array(
		'title'=>'부합성 성명',
		'txt1'=>'부합성 성명',
		'txt2'=>'특별설명:<br /> 법률은 사용자가 2006년 회사법의 요구를 준수하여야 함을 요구하고, 사용자가 회사 신청의 일부분으로 간주합니다.',
		'txt3'=>'신청방식 선택하기',
		'txt4'=>'모든 프로그램에서 주권을  인증 구매한 주주',
		'txt5'=>'주주를 대표하여 행사하는 대리인',
		'btn1'=>'제출',
		'btn2'=>'돌아가기',
		'btn3'=>'확인',
		'alert1'=>'신청방식 선택하기',
		'alert2'=>'선택성공',
		'alert3'=>'선택실패',
	);
	$control_statement2=array(
		'title'=>'부합성 성명',
		'txt1'=>'부합성 성명',
		'txt2'=>'특별설명:<br /> 회사 조직 규정 요강은 일종의 성명 즉 매개 주주는 회사의 조직 건설을 동의하고 최소한 한개의 주권을 가지고 있음을 설명합니다.',
		'txt3'=>'본인/우리는 2006년 회사의 관련 등기 요구를 준수하였고, 본인/우리는 회사를 조회 및 접수하였습니다',
		'txt4'=>'규정요강>>',
		'txt5'=>'합규성명은 아래의 조직 규정 요강의 서명인이 작성 및 인증',
		'txt6'=>'주식 자본 회사를 소유',
		'txt7'=>'유한회사의 규정요강',
		'txt8'=>'본 조직 규정 요강의 매개 주주는 2006년 회사법에 근거하여 회사를 설립할 것에 동의하고, 회사의 주주 및 최소한 하나의 주권을 소유하는 것에 동의합니다.',
		'txt9'=>'주주명칭',
		'txt10'=>'인증',
		'txt11'=>'전자인증',
		'txt12'=>'일자',
		'btn1'=>'제출',
		'btn2'=>'돌아가기',
		'btn3'=>'확인',
		'alert1'=>'조회하고 접수한 회사의 규정요강을 확인하여 주세요',
		'alert2'=>'등기 정보 입력 실패',
		'alert3'=>'등기 정보 입력 성공',
	);
	$order_show = array(
		'title'=>'주문서 조회',
		'state1'=>'등기신청',
		'state2'=>'주문처리중',
		'state2_span1'=>'주문처리중',
		'state2_span2'=>'24시간내에 완성',
		'state6'=>'등기완성',
		'btn1'=>'수정',
		'btn2'=>'조회',
		'btn3'=>'심의 통과에 실패하였습니다, 수정하여 주세요',
		'btn4'=>'보충하여 주세요',
		'btn5'=>'첨가하지 않으셨습니다',
		'btn6'=>'회사의 주권을 추가하여 주세요',
		'btn7'=>'실제 공제인이 존재하지 않음 ',
		'btn8'=>'추가',
		'title1'=>'회사 기본 정보',
		'title2'=>'회사 경영 범위',
		'title3'=>'이사정보',
		'title4'=>'비서정보',
		'title5'=>'회사 주식 자본',
		'title6'=>'주권 구매 인증',
		'title7'=>'실제 공제인',
		'title8'=>'정보보관',
		'title9'=>'부합성 성명',




	);
?>