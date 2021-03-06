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

        $sql = "SELECT surname,name,sex,nationality,birthtime,address,picture,portrait,state,create_time,remarks,token_number,token_proportion,passports,position FROM user_chain WHERE uid=".$this->uid." and address='".$address."' and company=".$companyid;

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
                'passports' => '',
                'position' => 0,
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
        	$sql = "SELECT surname,name,sex,nationality,birthtime,address,picture,portrait,state,create_time,remarks,token_number,token_proportion,passports,position FROM user_chain WHERE uid=".$this->uid." and address='".$address."' and company=".$companyinfo['id'];
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
	        	$creator = true;
	        }else{
	        	$creator = false;
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
        $sql = "SELECT a.name,a.address,a.only,a.contract FROM user_company as a LEFT JOIN user_chain as b ON a.id=b.company WHERE a.state=2 and b.state=2 and b.position!=0 and b.uid=".$this->uid." and b.address='".$address."'";
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

        $sql = "SELECT surname,name,address,token_number,token_proportion,position FROM user_chain WHERE company=".$companyinfo['id']." and state=2 and position!=0 ORDER BY token_number DESC";
        $list = $this->user->chainModel->fetchAll($sql);
        if(empty($list)){
            exit(json_encode(array('state' => 3,'info' => "无成员信息")));
        }
        exit(json_encode(array('state' => 0,'info' => $list)));
    }

    //获取股东组织会议信息列表
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

        $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
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

        $where = "meeting.company=".$companyinfo['id'];
        if(!empty($condition)){
            $where .= " and meeting.state=".$state;
        }
        if(!empty($search)){
            $where .= " and meeting.content LIKE '%".$search."%'";
        }
        $where .= " and meeting.level=1 GROUP BY meeting.id DESC";
        $sql = "SELECT meeting.id,meeting.type,meeting.content,meeting.target,meeting.number,meeting.start_time,meeting.end_time,meeting.state,meeting.keyname,chain.surname,chain.name,chain.address 
                FROM user_meeting as meeting LEFT JOIN user_chain as chain ON meeting.uid=chain.uid and meeting.company=chain.company 
                WHERE ".$where;
        $list = $this->user->meetingModel->fetchAll($sql);
        if(!empty($list)){
            foreach ($list as $key_t => $value_t) {
                $sql = "SELECT 
                        coalesce(SUM(CASE WHEN state = 1 THEN token_number ELSE 0 END),0) as yes_number,
                        coalesce(SUM(CASE WHEN state = 2 THEN token_number ELSE 0 END),0) as no_number,
                        coalesce(SUM(CASE WHEN state = 1 THEN token_proportion ELSE 0 END),0) as yes_proportion,
                        coalesce(SUM(CASE WHEN state = 2 THEN token_proportion ELSE 0 END),0) as no_proportion,
                        coalesce(SUM(CASE WHEN state=1 THEN 1 ELSE 0 END),0) as yes_cnt,
                        coalesce(SUM(CASE WHEN state=2 THEN 1 ELSE 0 END),0) as no_cnt 
                        FROM user_vote WHERE meeting=".$value_t['id'];
                $vote = $this->user->voteModel->fetchRow($sql);
                $list[$key_t]['yes_number'] = $vote['yes_number'];
                $list[$key_t]['no_number'] = $vote['no_number'];
                $list[$key_t]['yes_proportion'] = $vote['yes_proportion'];
                $list[$key_t]['no_proportion'] = $vote['no_proportion'];
                $list[$key_t]['yes_cnt'] = $vote['yes_cnt'];
                $list[$key_t]['no_cnt'] = $vote['no_cnt'];

                $list[$key_t]['surname_t'] = "";
                $list[$key_t]['name_t'] = "";
                if(!empty($value_t['type'])){
                    $sql = "SELECT surname,name FROM user_chain WHERE address='".$value_t['target']."' and company=".$companyinfo['id'];
                    $info_t = $this->user->chainModel->fetchRow($sql);
                    $list[$key_t]['surname_t'] = $info_t['surname'];
                    $list[$key_t]['name_t'] = $info_t['name'];
                }

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

                $remnant = (($value_t['start_time']+$duration)-time())/3600;
                $list[$key_t]['remnant'] = $remnant;
            }
        }
        $cnt = $this->user->chainModel->selectCnt("company=".$companyinfo['id']." and state=2 and (position=2 or position=3 or position=5)",'id');
        exit(json_encode(array('state' => 0,'info' => $list,'cnt' => $cnt)));
    }

    //获取懂事组织会议信息列表
    public function meeting_sensible(){
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

        $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
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

        $where = "meeting.company=".$companyinfo['id'];
        if(!empty($condition)){
            $where .= " and meeting.state=".$state;
        }
        if(!empty($search)){
            $where .= " and meeting.content LIKE '%".$search."%'";
        }
        $where .= " and meeting.level=2 GROUP BY meeting.id DESC";
        $sql = "SELECT meeting.id,meeting.type,meeting.content,meeting.target,meeting.number,meeting.start_time,meeting.end_time,meeting.state,meeting.keyname,chain.surname,chain.name,chain.address 
                FROM user_meeting as meeting LEFT JOIN user_chain as chain ON meeting.uid=chain.uid and meeting.company=chain.company 
                WHERE ".$where;
        $list = $this->user->meetingModel->fetchAll($sql);
        if(!empty($list)){
            foreach ($list as $key_t => $value_t) {
                $sql = "SELECT 
                        coalesce(SUM(CASE WHEN state=1 THEN 1 ELSE 0 END),0) as yes_cnt,
                        coalesce(SUM(CASE WHEN state=2 THEN 1 ELSE 0 END),0) as no_cnt 
                        FROM user_vote WHERE meeting=".$value_t['id'];
                $vote = $this->user->voteModel->fetchRow($sql);
                $list[$key_t]['yes_cnt'] = $vote['yes_cnt'];
                $list[$key_t]['no_cnt'] = $vote['no_cnt'];

                $list[$key_t]['surname_t'] = "";
                $list[$key_t]['name_t'] = "";
                if(!empty($value_t['type'])){
                    $sql = "SELECT surname,name FROM user_chain WHERE address='".$value_t['target']."' and company=".$companyinfo['id'];
                    $info_t = $this->user->chainModel->fetchRow($sql);
                    $list[$key_t]['surname_t'] = $info_t['surname'];
                    $list[$key_t]['name_t'] = $info_t['name'];
                }

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

                $remnant = (($value_t['start_time']+$duration)-time())/3600;
                $list[$key_t]['remnant'] = $remnant;
            }
        }
        $cnt = $this->user->chainModel->selectCnt("company=".$companyinfo['id']." and state=2 and (position=1 or position=3)",'id');
        exit(json_encode(array('state' => 0,'info' => $list,'cnt' => $cnt)));
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

        $sql = "SELECT id,uid,state FROM user_chain WHERE uid=".$this->uid." and company=".$companyinfo['id']." and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织信息无当前用户信息")));
        }

        if($this->uid == $companyinfo['uid']){
            $info = array('type'=>2,'notes'=>'公司认证','money'=>10000);
        }else{
            $info = array('type'=>1,'notes'=>'个人认证','money'=>1000);
        }
        exit(json_encode(array('state' => 0,'info' => $info)));

    }


    //查询当前是否有增发转让会议未结束
    public function meeting_type(){
        $this->loadModel('user','company');
        $this->loadModel('user','meeting');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }

        $sql = "SELECT id,uid,state FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 2,'info' => "无当前组织信息")));
        }

        $cntvote = $this->user->meetingModel->selectCnt("type!=0 and company=".$companyinfo['id']." and state=0",'id');
        if(empty($cntvote)){
            exit(json_encode(array('state' => 0,'info' => "当前无增发转让会议")));
        }else{
            exit(json_encode(array('state' => 3,'info' => "当前有增发转让会议")));
        }
    }


    //获取期权计划列表
    public function option(){
        $this->loadModel('user','company');
        $this->loadModel('user','option');
        $this->loadHelper("common");
        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }

        $sql = "SELECT id,uid,state FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 2,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id,option_time,name,token_number,grant_shares,grant_type,total_month FROM user_option WHERE company=".$companyinfo['id']." and state=4";
        $list = $this->user->optionModel->fetchAll($sql);
        exit(json_encode(array('state' => 0,'info' => $list)));
    }

    //获取期权计划名单
    public function excitation(){
        $this->loadModel('user','excitation');
        $this->loadModel('user','plan');
        $this->loadModel('user','company');
        $this->loadModel('user','option');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $option_id = isset($_POST['option'])?(int)$_POST['option']:0;

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }

        $sql = "SELECT id,uid,state,token_symbol FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 2,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id,option_time,name,token_number,grant_type,total_month,
        (SELECT coalesce(SUM(token_number),0) FROM user_excitation WHERE option_id=".$option_id." and (state=1 or state=2)) as token_grant 
        FROM user_option WHERE id=".$option_id." and company=".$companyinfo['id']." and state=4";
        $optioninfo = $this->user->optionModel->fetchRow($sql);
        if(empty($optioninfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前期权激励计划")));
        }

        $sql = "SELECT chain.surname,chain.name,excitation.token_number,excitation.id,excitation.exercise_money,excitation.type FROM user_excitation as excitation LEFT JOIN user_chain as chain ON excitation.tid=chain.uid and chain.company=".$companyinfo['id']." WHERE excitation.option_id =".$option_id." and excitation.state=4";
        $list = $this->user->excitationModel->fetchAll($sql);
        if(!empty($list)){
            foreach ($list as $key => $value) {
                $sql = "SELECT 
                        coalesce(SUM(CASE WHEN state=1 THEN token_number ELSE 0 END),0) as state_a,
                        coalesce(SUM(CASE WHEN state=2 THEN token_number ELSE 0 END),0) as state_b,
                        coalesce(SUM(CASE WHEN state=0 or state=3 THEN token_number ELSE 0 END),0) as state_c,
                        coalesce(MAX(expire_time),0) as expire_time 
                        FROM user_plan WHERE excitation_id =".$value['id'];
                $vote = $this->user->planModel->fetchRow($sql);
                $list[$key]['state_a'] = $vote['state_a'];
                $list[$key]['state_b'] = $vote['state_b'];
                $list[$key]['state_c'] = $vote['state_c'];
                $list[$key]['expire_time'] = $vote['expire_time'];
            }
        }
        $optioninfo['token_symbol'] = $companyinfo['token_symbol'];
        exit(json_encode(array('state' => 0,'info' => $list,'optioninfo' => $optioninfo)));
    }

    //获取可加入期权计划名单
    public function excitation_y(){
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadModel('user','option');
        $this->loadHelper("common");
        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $option_id = isset($_POST['option'])?(int)$_POST['option']:0;

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }

        $sql = "SELECT id,uid,state FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 2,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id FROM user_option WHERE id=".$option_id." and company=".$companyinfo['id']." and state=4";
        $optioninfo = $this->user->optionModel->fetchRow($sql);
        if(empty($optioninfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前期权激励计划")));
        }

        $sql = "SELECT surname,name,address FROM user_chain WHERE company=".$companyinfo['id']." and state=2 and position!=0 and id NOT IN(SELECT tid FROM user_excitation WHERE option_id=".$option_id." and state>0 and state<3)";
        $list = $this->user->chainModel->fetchAll($sql);
        exit(json_encode(array('state' => 0,'info' => $list)));
    }

    //获取用户的期权计划列表
    public function option_user(){
        $this->loadModel('user','company');
        $this->loadModel('user','chain');
        $this->loadModel('user','option');
        $this->loadModel('user','excitation');
        $this->loadHelper("common");
        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:"";
        $address = filterCharacter($address);

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }
        if(empty($address)){
            exit(json_encode(array('state' => 2,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id,state,token_symbol,token_number FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT surname,name,state FROM user_chain WHERE uid=".$this->uid." and company=".$companyinfo['id']." and state=2 and position!=0";    
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织信息无当前用户信息")));
        }

        $sql = "SELECT a.id,a.token_number,a.exercise_money,a.type,b.option_time,b.name,b.token_number as token,b.grant_shares,b.grant_type,b.total_month 
        FROM user_excitation as a LEFT JOIN user_option as b ON a.option_id=b.id WHERE a.tid=".$this->uid." and a.state=4";
        $list = $this->user->excitationModel->fetchAll($sql);
        exit(json_encode(array('state' => 0,'info' => $list,'companyinfo'=>$companyinfo,'chaininfo'=>$chaininfo)));
    }

    //获取期权执行计划列表
    public function plan(){
        $this->loadModel('user','company');
        $this->loadModel('user','chain');
        $this->loadModel('user','plan');
        $this->loadModel('user','excitation');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:"";
        $address = filterCharacter($address);
        $excitation_id  = isset($_POST['excitation'])?(int)$_POST['excitation']:0;

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }
        if(empty($address)){
            exit(json_encode(array('state' => 2,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id,uid,state FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id,uid,state FROM user_chain WHERE uid=".$this->uid." and company=".$companyinfo['id']." and state=2 and position!=0";    
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织信息无当前用户信息")));
        }

        $sql = "SELECT id FROM user_excitation WHERE id=".$excitation_id." and tid=".$this->uid." and state=4 and type=1";
        $excitationinfo = $this->user->excitationModel->fetchRow($sql);
        if(empty($excitationinfo)){
            exit(json_encode(array('state' => 5,'info' => "当前人员无该期权激励计划")));
        }

        $sql = "SELECT id,expire_time FROM user_plan WHERE excitation_id=".$excitationinfo['id']." and state=0";
        $planlist = $this->user->planModel->fetchAll($sql);
        if(!empty($planlist)){
            $time=time();
            foreach ($planlist as $key => $value) {
                $time3 = $value['expire_time']+259200;//3天后过期
                if($value['expire_time']<=$time){
                    $this->user->planModel->update(array('state'=>1),"id=".$value['id']);
                }else if($time3<$time){
                    $this->user->planModel->update(array('state'=>3),"id=".$value['id']);
                }
            }
        }
        $sql = "SELECT id,expire_time,cycle,token_number,current_money,exercise_money,state FROM user_plan WHERE excitation_id=".$excitationinfo['id'];
        $list = $this->user->planModel->fetchAll($sql);
        exit(json_encode(array('state' => 0,'info' => $list)));
    }


}
?>