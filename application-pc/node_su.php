<?php
class node_su extends actionAbstract {
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

    //公司认证表单提交
    public function company_tijiao(){
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");

        $name = isset($_POST['name'])?$_POST['name']:"";
        $name = filterCharacter($name);
        $code = isset($_POST['code'])?$_POST['code']:"";
        $code = filterCharacter($code);
        $address = isset($_POST['address'])?$_POST['address']:"";
        $address = filterCharacter($address);
        $capital = isset($_POST['capital'])?$_POST['capital']:"";
        $capital = filterCharacter($capital);
        $establish = isset($_POST['establish'])?$_POST['establish']:'1970-01-01 08:00:00';
        $establish = strtotime($establish);
        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);

        if(empty($name)){
            exit(json_encode(array('state' => 1,'info' => "公司名称不能为空")));
        }
        if(empty($code)){
            exit(json_encode(array('state' => 2,'info' => "注册编码不能为空")));
        }
        if(empty($address)){
            exit(json_encode(array('state' => 3,'info' => "注册地址不能为空")));
        }
        if(empty($capital)){
            exit(json_encode(array('state' => 4,'info' => "注册资本不能为空")));
        }
        if(empty($only)){
            exit(json_encode(array('state' => 5,'info' => "组织唯一标识不能为空")));
        }
        if(empty($establish)){
            $establish = 0;
        }

        $sql = "SELECT * FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and company=0";
            $chaininfo = $this->user->chainModel->fetchRow($sql);
            if(empty($chaininfo)){
                exit(json_encode(array('state' => 6,'info' => "请先提交个人认证信息")));
            }

            $inarr = array(
                'uid' => $this->uid,
                'name' => $name,
                'code' => $code,
                'address' => $address,
                'capital' => $capital,
                'establish' => $establish,
                'only' => $only,
                'create_time' => time()
            );
            $re=$this->user->companyModel->insert($inarr);
            if(empty($re)){
                exit(json_encode(array('state' => 10,'info' => '操作失败')));
            }else{
                $this->user->chainModel->update(array('company'=>$re),"id=".$chaininfo['id']);
                exit(json_encode(array('state' => 0,'info' => '操作成功')));
            }
        }else{
            if($companyinfo['uid'] == $this->uid){
                $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and company=".$companyinfo['id'];
                $chaininfo = $this->user->chainModel->fetchRow($sql);
                if(empty($chaininfo)){
                    $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and company=0";
                    $chaininfo2 = $this->user->chainModel->fetchRow($sql);
                    if(empty($chaininfo2)){
                        exit(json_encode(array('state' => 6,'info' => "请先提交个人认证信息")));
                    }else{
                        $this->user->chainModel->update(array('company'=>$companyinfo['id']),"id=".$chaininfo2['id']);
                    }
                }
            }else{
                exit(json_encode(array('state' => 7,'info' => '公司组织标识码以注册或你无权修改别组织信息')));
            }
            if($companyinfo['state'] == 1){
                exit(json_encode(array('state' => 8,'info' => '信息正是审核中，不能进行修改操作')));
            }
            if($companyinfo['state'] == 2){
                exit(json_encode(array('state' => 9,'info' => '信息以审核通过，如有修改请联系客服')));
            }

            $uparr = array('change_time' => time());
            if(!empty($name) && $name != $companyinfo['name']){
                $uparr['name'] = $name;
            }
            if(!empty($code) && $code != $companyinfo['code']){
                $uparr['code'] = $code;
            }
            if(!empty($address) && $address != $companyinfo['address']){
                $uparr['address'] = $address;
            }
            if(!empty($capital) && $capital != $companyinfo['capital']){
                $uparr['capital'] = $capital;
            }
            if(!empty($establish) && $establish != $companyinfo['establish']){
                $uparr['establish'] = $establish;
            }
            if(!empty($only) && $only != $companyinfo['only']){
                $uparr['only'] = $only;
            }
            if($companyinfo['state'] == 3){
                $uparr['state'] = 1;
            }

            $re=$this->user->companyModel->update($uparr,"id=".$companyinfo['id']);
            if(empty($re)){
                exit(json_encode(array('state' => 10,'info' => '操作失败')));
            }else{
                exit(json_encode(array('state' => 0,'info' => '操作成功')));
            }
        }
    }

    //个人认证表单提交
    public function geren_tijiao(){
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");
        $this->loadHelper('image');
        $this->loadHelper('uploader');
        $uploader = new uploader("chain");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $surname = isset($_POST['surname'])?$_POST['surname']:'';
        $surname = filterCharacter($surname);
        $name = isset($_POST['name'])?$_POST['name']:'';
        $name = filterCharacter($name);
        $sex = isset($_POST['sex'])?(int)$_POST['sex']:0;
        $nationality = isset($_POST['nationality'])?(int)$_POST['nationality']:0;
        $birthtime = isset($_POST['birthtime'])?$_POST['birthtime']:'1970-01-01 08:00:00';
        $birthtime = strtotime($birthtime);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);
        $passports = isset($_POST['passports'])?$_POST['passports']:'';
        $passports = filterCharacter($passports);

        if(empty($address)){
            exit(json_encode(array('state' => 1,'info' => "钱包地址不能为空")));
        }

        if($sex<0 || $sex>2){
            $sex = 0;
        }
        if($nationality<0 || $nationality>28){
            $nationality = 0;
        }
        if(empty($birthtime)){
            $birthtime = 0;
        }

        $picture = "";
        if(!empty($_FILES['picture']['name'])){
            $upload = $uploader->start('picture','image',$this->uid.'_chain_'.time());
            $picture = $upload['path'];
            $img_c = substr($picture,1);
            $img_c = ROOT_PATH.$img_c;//要处理的图片
            $image = new image($img_c);
            $image->resizeToWidth(900);//图片宽度
            $image->save($img_c);//保存图片
            $image->destory();
            if(!isset($upload['status'])){
                exit(json_encode(array('state' => 2,'info' => '图片上传失败')));
            }
        }

        $company = 0;
        if(!empty($only)){
            $sql = "SELECT id FROM user_company WHERE only='".$only."'";
            $companyinfo = $this->user->companyModel->fetchRow($sql);
            $company = $companyinfo['id'];
        }
        $sql = "SELECT * FROM user_chain WHERE uid=".$this->uid." and company=".$company." and address='".$address."'";
        $chaininfo = $this->user->chainModel->fetchRow($sql);

        if(empty($chaininfo)){
            $inarr = array(
                'uid' => $this->uid,
                'company' => $company,
                'surname' => $surname,
                'name' => $name,
                'sex' => $sex,
                'nationality' => $nationality,
                'birthtime' => $birthtime,
                'address' => $address,
                'picture' => $picture,
                'create_time' => time(),
                'passports' => $passports,
            );
            $re=$this->user->chainModel->insert($inarr);
        }else{
            if($chaininfo['state'] == 1){
                exit(json_encode(array('state' => 3,'info' => '信息正是审核中，不能进行修改操作')));
            }
            if($chaininfo['state'] == 2){
                exit(json_encode(array('state' => 4,'info' => '信息以审核通过，如有修改请联系客服')));
            }

            $uparr = array('change_time' => time());
            if(!empty($company) && $company != $chaininfo['company']){
                $uparr['company'] = $company;
            }
            if(!empty($surname) && $surname != $chaininfo['surname']){
                $uparr['surname'] = $surname;
            }
            if(!empty($name) && $name != $chaininfo['name']){
                $uparr['name'] = $name;
            }
            if(!empty($sex) && $sex != $chaininfo['sex']){
                $uparr['sex'] = $sex;
            }
            if(!empty($nationality) && $nationality != $chaininfo['nationality']){
                $uparr['nationality'] = $nationality;
            }
            if(!empty($birthtime) && $birthtime != $chaininfo['birthtime']){
                $uparr['birthtime'] = $birthtime;
            }
            if(!empty($address) && $address != $chaininfo['address']){
                $uparr['address'] = $address;
            }
            if(!empty($picture) && $picture != $chaininfo['picture']){
                $uparr['picture'] = $picture;
            }
            if(!empty($passports) && $passports != $chaininfo['passports']){
                $uparr['passports'] = $passports;
            }
            if($chaininfo['state'] == 3){
                $uparr['state'] = 1;
            }
            $re=$this->user->chainModel->update($uparr,"id=".$chaininfo['id']);
        }
        if(empty($re)){
            exit(json_encode(array('state' => 5,'info' => '操作失败')));
        }
        exit(json_encode(array('state' => 0,'info' => '操作成功','picture' => $picture)));
    }

    //提交令牌信息
    public function token(){
        $this->loadModel('user','company');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $support = isset($_POST['support'])?$_POST['support']:0;
        $support = substr(sprintf("%.3f",$support),0,-1);
        $quorum = isset($_POST['quorum'])?$_POST['quorum']:0;
        $quorum = substr(sprintf("%.3f",$quorum),0,-1);
        $duration = isset($_POST['duration'])?(int)$_POST['duration']:0;
        $token_name = isset($_POST['token_name'])?$_POST['token_name']:'';
        $token_name = filterCharacter($token_name);
        $token_symbol = isset($_POST['token_symbol'])?$_POST['token_symbol']:'';
        $token_symbol = filterCharacter($token_symbol);
        $token_number = isset($_POST['token_number'])?(int)$_POST['token_number']:0;

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }

        $sql = "SELECT * FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 2,'info' => "无当前组织信息")));
        }
        if($companyinfo['uid'] != $this->uid){
            exit(json_encode(array('state' => 3,'info' => "你无权修改别组织令牌信息")));
        }
        if($companyinfo['state'] == 1){
            exit(json_encode(array('state' => 4,'info' => '信息正是审核中，不能进行修改操作')));
        }
        if($companyinfo['state'] == 2){
            exit(json_encode(array('state' => 5,'info' => '信息以审核通过，如有修改请联系客服')));
        }

        $uparr = array('change_time' => time());
        if(!empty($support) && $support != $companyinfo['support']){
            $uparr['support'] = $support;
        }
        if(!empty($quorum) && $quorum != $companyinfo['quorum']){
            $uparr['quorum'] = $quorum;
        }
        if(!empty($duration) && $duration != $companyinfo['duration']){
            $uparr['duration'] = $duration;
        }
        if(!empty($token_name) && $token_name != $companyinfo['token_name']){
            $uparr['token_name'] = $token_name;
        }
        if(!empty($token_symbol) && $token_symbol != $companyinfo['token_symbol']){
            $uparr['token_symbol'] = $token_symbol;
        }
        if(!empty($token_number) && $token_number != $companyinfo['token_number']){
            $uparr['token_number'] = $token_number;
        }
        if($companyinfo['state'] == 3){
            $uparr['state'] = 1;
        }

        $re=$this->user->companyModel->update($uparr,"id=".$companyinfo['id']);
        if(empty($re)){
            exit(json_encode(array('state' => 6,'info' => '操作失败')));
        }
        exit(json_encode(array('state' => 0,'info' => '操作成功')));
    }

    //订单提交
    public function order(){
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadModel('order','list');
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

        $order_coding = $this->order_sn();
        $inarr = array(
            'type' => 3,
            'uid' => $this->uid,
            'order_coding' =>$order_coding,
            'project' => '个人认证',
            'currency' => 2,
            'number' => 1000,
            'way' => 0,
            'state' => 1,
            'invoice' => 1,
            'create_time' => time()
        );
        if($this->uid == $companyinfo['uid']){
            if(!empty($companyinfo['state'])){
                exit(json_encode(array('state' => 5,'info' => "企业认证已支付过")));
            }
            $inarr['project'] = '公司认证';
            $inarr['number'] = 10000;
            $this->user->companyModel->update(array('state'=>1),"id=".$companyinfo['id']);
        }
        if(!empty($chaininfo['state'])){
            exit(json_encode(array('state' => 6,'info' => "个人认证已支付过")));
        }
        $this->user->chain->update(array('state'=>1),"id=".$chaininfo['id']);

        $re=$this->order->listModel->insert($inarr);
        if(empty($re)){
            exit(json_encode(array('state' => 7,'info' => '操作失败')));
        }
        exit(json_encode(array('state' => 0,'info' => '操作成功')));
    }

    //发起一个会议
    public function meeting(){
        $this->loadModel('user','meeting');
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:"";
        $address = filterCharacter($address);
        $type = isset($_POST['type'])?(int)$_POST['type']:0;
        if($type<0 || $type>1){
        	$type = 0;
        }
        $content = isset($_POST['content'])?$_POST['content']:"";
        $content = filterCharacter($content);
        $target = isset($_POST['target'])?$_POST['target']:"";
        $target = filterCharacter($target);
        $number = isset($_POST['number'])?(int)$_POST['number']:0;

        if(empty($address)){
            exit(json_encode(array('state' => 1,'info' => "钱包地址不能为空")));
        }
        if(empty($only)){
            exit(json_encode(array('state' => 2,'info' => "组织唯一标识不能为空")));
        }

        $sql = "SELECT id FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }
        $sql = "SELECT id FROM user_chain WHERE uid=".$this->uid." and address='".$address."' and company=".$companyinfo['id']." and state=2";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织信息无当前用户信息")));
        }

        $inarr = array(
        	'uid' => $this->uid,
        	'type' => $type,
        	'company' => $companyinfo['id'],
        	'start_time' => time(),
        );
        if($type == 1){
        	if(empty($target)){
	            exit(json_encode(array('state' => 5,'info' => "目标地址不能为空")));
	        }
        	if(empty($number)){
	            exit(json_encode(array('state' => 6,'info' => "请输入正确的增发数量")));
	        }
	        $sql = "SELECT id FROM user_chain WHERE address='".$target."' and company=".$companyinfo['id']." and state=2";
	        $targetinfo = $this->user->chainModel->fetchRow($sql);
	        if(empty($targetinfo)){
	            exit(json_encode(array('state' => 7,'info' => "组织内无当前目标成员信息")));
	        }
	        $inarr['content'] = $target.'@'.$number;
        }else{
        	if(empty($content)){
	            exit(json_encode(array('state' => 8,'info' => "会议内容不能为空")));
	        }
	        $inarr['content'] = $content;
        }
        $re=$this->user->meetingModel->insert($inarr);
        if(empty($re)){
            exit(json_encode(array('state' => 9,'info' => '操作失败')));
        }
        exit(json_encode(array('state' => 0,'info' => '操作成功')));
    }

    //提交一个投票操作
    public function vote(){
        $this->loadModel('user','vote');
        $this->loadModel('user','meeting');
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:""; 
        $address = filterCharacter($address);
        $id = isset($_POST['id'])?(int)$_POST['id']:0;

        if(empty($address)){
            exit(json_encode(array('state' => 1,'info' => "钱包地址不能为空")));
        }
        if(empty($only)){
            exit(json_encode(array('state' => 2,'info' => "组织唯一标识不能为空")));
        }
        if(empty($id)){
            exit(json_encode(array('state' => 3,'info' => "会议ID不能为空")));
        }

        $sql = "SELECT id FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 4,'info' => "无当前组织信息")));
        }
        $sql = "SELECT id FROM user_chain WHERE uid=".$this->uid." and address='".$address."' and company=".$companyinfo['id']." and state=2";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 5,'info' => "该组织信息无当前用户信息")));
        }
        $sql = "SELECT id,type FROM user_meeting WHERE id=".$id." and company=".$companyinfo['id']." and state=0";
        $meetinginfo = $this->user->meetingModel->fetchRow($sql);
        if(empty($meetinginfo)){
            exit(json_encode(array('state' => 6,'info' => "组织内无当前会议或已结束")));
        }
        $sql = "SELECT id FROM user_vote WHERE uid =".$this->uid." and meeting=".$id;
        $voteinfo = $this->user->voteModel->fetchRow($sql);
        if(!empty($voteinfo)){
            exit(json_encode(array('state' => ,'info' => "已投过票了，不能重复投")));
        }
    }



    /*订单编号*/
    function order_sn(){
        global $order;
        $i=rand(0,25);
        $orderdate = time() - strtotime($order['startdate']);
        $re = $order['randletter'][$i].$orderdate.rand(0,9).rand(0,9).rand(0,9);
        echo $re;
        return $re;
    }

}
?>