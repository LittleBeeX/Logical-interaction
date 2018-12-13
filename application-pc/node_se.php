<?php
class node_se extends actionAbstract {
    /*构造*/
    public $uid = 0;

    function __construct() {
        parent::__construct();
        
        $this->loadModel('user','basic');
        if(!isset($_SESSION['userinfo'])){
            exit(json_encode(array('state' => 101,'info' => "未登录")));
        }
        $uuid = $_SESSION['userinfo']['uuid'];
        $account = $_SESSION['userinfo']['account'];
        $sql = "SELECT id FROM user_basic WHERE uuid='".$uuid."' and account='".$account."' and state=1";
        $userinfo = $this->user->basicModel->fetchRow($sql);
        if(empty($userinfo)){
            exit(json_encode(array('state' => 102,'info' => "信息过期，请重新登录")));
        }
        $this->uid = $userinfo['id'];
    }

    //获取用户名
    public function session_user(){
        exit(json_encode(array('info' => $_SESSION['userinfo']['account'])));
    }

    //获取国籍
    public function nationality(){
        global $phone_codes;
        exit(json_encode(array('info' => $phone_codes)));
    }

    //获取组织信息
    public function company(){
        $this->loadModel('user','company');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:'';
        $only = filterCharacter($only);
        if (empty($only)) {
            exit(json_encode(array('state' => 1,'info' => "组织名称不能为空")));
        }

        $sql = "SELECT name,code,address,capital,establish,only,state,logo,zhangcheng,support,quorum,duration,token_name,token_symbol,token_number,remarks,contract FROM user_company WHERE only='".$only."'";
        $info = $this->user->companyModel->fetchRow($sql);
        if(empty($info)){
            exit(json_encode(array('state' => 2,'info' => "无当前组织信息")));
        }else{
            exit(json_encode(array('state' => 0,'info' => $info)));
        }
    }

    //获取个人信息
    public function chain(){
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");
        global $phone_codes;

        $only = isset($_POST['only'])?$_POST['only']:'';
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);
        if (empty($address)) {
            exit(json_encode(array('state' => 1,'info' => "钱包地址不能为空")));
        }
        $companyid = 0;
        $sql = "SELECT id FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(!empty($companyinfo)){
            $companyid = $companyinfo['id'];
        }

        $sql = "SELECT surname,name,sex,nationality,birthtime,address,picture,portrait,state,create_time,remarks,token_number,token_proportion,passports FROM user_chain WHERE uid=".$this->uid." and address='".$address."' and company=".$companyid;
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            $info = array(
                'surname' => '',
                'name'=> '',
                'sex'=> 0,
                'nationality'=> 0,
                'birthtime'=> 0,
                'address'=> $address,
                'picture'=> '',
                'portrait' =>'',
                'state' => 0,
                'create_time' => 0,
                'remarks' => '',
                'token_number' => 0,
                'token_proportion' => 0,
                'remarks' => '',
                'country_cn' => '未选择',
                'country_en' => 'Unselected',
            );
        }else{
            if($chaininfo['nationality'] == 0){
                $chaininfo['country_cn'] = '未选择';
                $chaininfo['country_en'] = 'Unselected';
            }else{
                $chaininfo['country_cn'] = $phone_codes[$chaininfo['nationality']]['country'];
                $chaininfo['country_en'] = $phone_codes[$chaininfo['nationality']]['en'];
            }
            $info = $chaininfo;
        }
        exit(json_encode(array('state' => 0,'info' => $info)));
    }
    
    //获取组织和个人信息
    public function company_individual(){
        $this->loadModel('user','company');
        $this->loadModel('user','chain');
        $this->loadHelper("common");
        global $phone_codes;

        $only = isset($_POST['only'])?$_POST['only']:'';
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);
        if (empty($only)) {
            exit(json_encode(array('state' => 1,'info' => "组织名称不能为空")));
        }
        if (empty($address)) {
            exit(json_encode(array('state' => 3,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id,uid,name,code,address,capital,establish,only,state,logo,zhangcheng,support,quorum,duration,token_name,token_symbol,token_number,remarks,contract FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 2,'info' => "无当前组织信息")));
        }else{
        	$sql = "SELECT surname,name,sex,nationality,birthtime,address,picture,portrait,state,create_time,remarks,token_number,token_proportion,passports FROM user_chain WHERE uid=".$this->uid." and address='".$address."' and company=".$companyinfo['id'];
        	$chaininfo = $this->user->chainModel->fetchRow($sql);
	        if(empty($chaininfo)){
                exit(json_encode(array('state' => 4,'info' => "你不是当前组织成员，无权访问")));
	        }else{
                if($chaininfo['nationality'] == 0){
                    $chaininfo['country_cn'] = '未选择';
                    $chaininfo['country_en'] = 'Unselected';
                }else{
                    $chaininfo['country_cn'] = $phone_codes[$chaininfo['nationality']]['country'];
                    $chaininfo['country_en'] = $phone_codes[$chaininfo['nationality']]['en'];
                }
                $info['chain'] = $chaininfo;
	        }

	        if($companyinfo['uid'] == $this->uid){
	        	$creator = 'true';
	        }else{
	        	$creator = 'false';
	        }
        	unset($companyinfo['id']);
        	unset($companyinfo['uid']);
        	$companyinfo['creator'] = $creator;
        	$info['company'] = $companyinfo;

            exit(json_encode(array('state' => 0,'info' => $info)));
        }
    }

    //获取当前钱包地址所在公司组织列表
    public function company_list(){
        $this->loadModel('user','company');
        $this->loadModel('user','chain');
        $this->loadHelper("common");

        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);
        if (empty($address)) {
            exit(json_encode(array('state' => 1,'info' => "钱包地址不能为空")));
        }
        $sql = "SELECT a.name,a.address,a.only,a.contract FROM user_company as a LEFT JOIN user_chain as b ON a.id=b.company WHERE a.state=2 and b.state=2 and b.uid=".$this->uid." and b.address='".$address."'";
        $list = $this->user->companyModel->fetchAll($sql);
        if(empty($list)){
            exit(json_encode(array('state' => 2,'info' => "无公司组织信息")));
        }
        exit(json_encode(array('state' => 0,'info' => $list)));
    }

    //获取组织成员信息列表
    public function chain_list(){
        $this->loadModel('user','company');
        $this->loadModel('user','chain');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:'';
        $only = filterCharacter($only);
        if (empty($only)) {
            exit(json_encode(array('state' => 1,'info' => "组织名称不能为空")));
        }

        $sql = "SELECT id FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 2,'info' => "无当前组织信息")));
        }

        $sql = "SELECT surname,name,address,token_number,token_proportion FROM user_chain WHERE company=".$companyinfo['id']." and state=2";
        $list = $this->user->chainModel->fetchAll($sql);
        if(empty($list)){
            exit(json_encode(array('state' => 3,'info' => "无成员信息")));
        }
        exit(json_encode(array('state' => 0,'info' => $list)));
    }

    //获取组织会议信息列表
    public function meeting_list(){
        $this->loadModel('user','company');
        $this->loadModel('user','chain');
        $this->loadModel('user','meeting');
        $this->loadModel('user','vote');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:'';
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);
        $condition = isset($_POST['condition'])?(int)$_POST['condition']:0;
        $search = isset($_POST['search'])?$_POST['search']:'';
        $search = filterCharacter($search);
        $state = isset($_POST['state'])?(int)$_POST['state']:0;
        if($state<0 || $state>2){
            $state = 0;
        }
        if (empty($only)) {
            exit(json_encode(array('state' => 1,'info' => "组织名称不能为空")));
        }
        if (empty($address)) {
            exit(json_encode(array('state' => 2,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id,support,quorum,duration FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and address='".$address."' and company=".$companyinfo['id']." and state=2";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织信息无当前用户信息")));
        }

        $sql = "SELECT id,start_time FROM user_meeting WHERE company=".$companyinfo['id']." and state=0";
        $list_state = $this->user->meetingModel->fetchAll($sql);
        $duration = $companyinfo['duration']*3600;
        if(!empty($list_state)){
            foreach ($list_state as $key => $value) {
                $time = time();
                $end = $value['start_time'] + $duration;
                if($time >= $end){
                    $this->user->meetingModel->update(array('state'=>2),"id=".$value['id']);
                }
            }
        }
        $where = "meeting.company=".$companyinfo['id']." and meeting.state=".$state;
        /*if(!empty($condition)){
            $where = " and meeting.state=".$state;
        }*/
        if(!empty($search)){
            $where .= " and meeting.content LIKE '%".$search."%'";
        }
        $where .= " GROUP BY meeting.id DESC";
        $sql = "SELECT meeting.id,meeting.type,meeting.content,meeting.target,meeting.number,meeting.start_time,meeting.end_time,meeting.state,meeting.keyname,chain.surname,chain.name,chain.address,
				coalesce(SUM(CASE WHEN vote.state = 1 THEN vote.token_number ELSE 0 END),0) yes_number,
				coalesce(SUM(CASE WHEN vote.state = 2 THEN vote.token_number ELSE 0 END),0) no_number,
				coalesce(SUM(CASE WHEN vote.state = 1 THEN vote.token_proportion ELSE 0 END),0) yes_proportion,
				coalesce(SUM(CASE WHEN vote.state = 2 THEN vote.token_proportion ELSE 0 END),0) no_proportion,
                SUM(CASE WHEN vote.state=1 THEN 1 ELSE 0 END) as yes_cnt,
                SUM(CASE WHEN vote.state=2 THEN 1 ELSE 0 END) as no_cnt 
				FROM user_meeting meeting LEFT JOIN user_chain chain ON meeting.uid=chain.uid and meeting.company=chain.company LEFT JOIN user_vote vote ON meeting.id=vote.meeting 
                WHERE ".$where;
        $list = $this->user->meetingModel->fetchAll($sql);
        if(!empty($list)){
            foreach ($list as $key_t => $value_t) {
                if($value_t['state'] == 0){
                    $sql = "SELECT id FROM user_vote WHERE uid=".$this->uid." and meeting=".$value_t['id'];
                    $voteinfo = $this->user->voteModel->fetchRow($sql);
                    if(empty($voteinfo)){
                        $list[$key_t]['throw'] = 0;
                    }else{
                        $list[$key_t]['throw'] = 1; 
                    }
                }else{
                    $list[$key_t]['throw'] = 1;
                }
                $list[$key_t]['support'] = $companyinfo['support'];
                $list[$key_t]['quorum'] = $companyinfo['quorum'];
            }
        }
        exit(json_encode(array('state' => 0,'info' => $list)));
    }

    //获取订单金额
    public function order(){
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:"";
        $address = filterCharacter($address);

        if(empty($address)){
            exit(json_encode(array('state' => 1,'info' => "钱包地址不能为空")));
        }
        if(empty($only)){
            exit(json_encode(array('state' => 2,'info' => "组织唯一标识不能为空")));
        }

        $sql = "SELECT id,uid,state FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id,uid,state FROM user_chain WHERE uid=".$this->uid." and company=".$companyinfo['id'];
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织信息无当前用户信息")));
        }

        if($this->uid == $companyinfo['uid']){
            $info = array('notes'=>'公司认证','money'=>10000);
        }else{
            $info = array('notes'=>'个人认证','money'=>1000);
        }
        exit(json_encode(array('state' => 0,'info' => $info)));

    }

}
?>