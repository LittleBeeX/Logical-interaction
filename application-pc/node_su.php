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
        $address = isset($_POST['address'])?(int)$_POST['address']:0;
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
        
        if($address<0 || $address>28){
            $address = 0;
        }
        if(empty($address)){
            exit(json_encode(array('state' => 3,'info' => "注册国籍不能为空")));
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
            $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and company=0 and position!=0";
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

            try{
                $this->user->chainModel->beginTransaction();

                $re=$this->user->companyModel->insert($inarr);
                $this->user->chainModel->update(array('company'=>$re),"id=".$chaininfo['id']);

                $this->user->chainModel->commit();
            }catch(Exception $e){
                $this->user->chainModel->rollBack();
                exit(json_encode(array('state' => 10,'info' => '操作失败')));
            }
            exit(json_encode(array('state' => 0,'info' => '操作成功')));
        }else{
            if($companyinfo['uid'] == $this->uid){
                $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and company=".$companyinfo['id']." and position!=0";
                $chaininfo = $this->user->chainModel->fetchRow($sql);
                if(empty($chaininfo)){
                    $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and company=0 and position!=0";
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

    //提交公司LOGO
    public function company_logo(){
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");
        $this->loadHelper('image');
        $this->loadHelper('uploader');
        $uploader = new uploader("company");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }
        if(empty($address)){
            exit(json_encode(array('state' => 2,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id,uid,logo FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织无当前用户信息")));
        }
        if($companyinfo['uid'] != $this->uid){
            exit(json_encode(array('state' => 5,'info' => "只有该组织创建者才有权修改")));
        }

        $logo = "";
        if(!empty($_FILES['logo']['name'])){
            $upload = $uploader->start('logo','image',$companyinfo['id'].'_logo_'.time());
            $logo = $upload['path'];
            $img_c = substr($logo,1);
            $img_c = ROOT_PATH.$img_c;//要处理的图片
            $image = new image($img_c);
            $image->resizeToWidth(900);//图片宽度
            $image->save($img_c);//保存图片
            $image->destory();
            if(!isset($upload['status'])){
                exit(json_encode(array('state' => 6,'info' => '图片上传失败')));
            }
        }else{
            exit(json_encode(array('state' => 7,'info' => '未选择图片')));
        }
        if(!empty($logo) && $logo != $companyinfo['logo']){
            $re=$this->user->companyModel->update(array('logo'=>$logo,'change_time'=>time()),"id=".$companyinfo['id']);
            if(empty($re)){
                exit(json_encode(array('state' => 8,'info' => '操作失败')));
            }
            exit(json_encode(array('state' => 0,'info' => '操作成功','logo' => $logo)));
        }else{
            exit(json_encode(array('state' => 0,'info' => '操作成功','logo' => $companyinfo['logo'])));
        }
    }

    //提交公司章程
    public function company_zhangcheng(){
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");
        $this->loadHelper('uploader');
        $uploader = new uploader("company");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }
        if(empty($address)){
            exit(json_encode(array('state' => 2,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id,uid,zhangcheng FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id FROM user_chain WHERE uid='".$this->uid."' and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织无当前用户信息")));
        }
        if($companyinfo['uid'] != $this->uid){
            exit(json_encode(array('state' => 5,'info' => "只有该组织创建者才有权修改")));
        }

        $zhangcheng = "";
        if(!empty($_FILES['zhangcheng']['name'])){
            $upload = $uploader->start('zhangcheng','file',$companyinfo['id'].'_zhangcheng_'.time());
            $zhangcheng = $upload['path'];
            if(!isset($upload['status'])){
                exit(json_encode(array('state' => 6,'info' => '文件上传失败')));
            }
        }else{
            exit(json_encode(array('state' => 7,'info' => '未选择文件')));
        }
        if(!empty($zhangcheng) && $zhangcheng != $companyinfo['zhangcheng']){
            $re=$this->user->companyModel->update(array('zhangcheng'=>$zhangcheng,'change_time'=>time()),"id=".$companyinfo['id']);
            if(empty($re)){
                exit(json_encode(array('state' => 8,'info' => '操作失败')));
            }
            exit(json_encode(array('state' => 0,'info' => '操作成功','zhangcheng' => $zhangcheng)));
        }else{
            exit(json_encode(array('state' => 0,'info' => '操作成功','zhangcheng' => $companyinfo['zhangcheng'])));
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
        $position = isset($_POST['position'])?(int)$_POST['position']:0;

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
        if($position<0 || $position>5){
            $position = 0;
        }

        $picture = "";
        if(!empty($_FILES['picture']['name'])){
            $upload = $uploader->start('picture','image',$this->uid.'_picture_'.time());
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
        $sql = "SELECT * FROM user_chain WHERE uid=".$this->uid." and company=".$company;
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
                'position' => $position,
            );
            $re=$this->user->chainModel->insert($inarr);
        }else{
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
            if(!empty($position) && $position != $chaininfo['position']){
                $uparr['position'] = $position;
            }
            if(empty($chaininfo['position'])){
                $uparr['state'] = 0;
            }else{
                if($chaininfo['state'] == 1){
                    exit(json_encode(array('state' => 3,'info' => '信息正是审核中，不能进行修改操作')));
                }else if($chaininfo['state'] == 2){
                    exit(json_encode(array('state' => 4,'info' => '信息以审核通过，如有修改请联系客服')));
                }else if($chaininfo['state'] == 3){
                    $uparr['state'] = 1;
                }
            }
            $re=$this->user->chainModel->update($uparr,"id=".$chaininfo['id']);
        }
        if(empty($re)){
            exit(json_encode(array('state' => 5,'info' => '操作失败')));
        }
        exit(json_encode(array('state' => 0,'info' => '操作成功','picture' => $picture)));
    }

    //提交个人头像
    public function chain_portrait(){
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");
        $this->loadHelper('image');
        $this->loadHelper('uploader');
        $uploader = new uploader("chain");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }
        if(empty($address)){
            exit(json_encode(array('state' => 2,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id,portrait FROM user_chain WHERE uid='".$this->uid."' and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织无当前用户信息")));
        }
        $portrait = "";
        if(!empty($_FILES['portrait']['name'])){
            $upload = $uploader->start('portrait','image',$this->uid.'_portrait_'.time());
            $portrait = $upload['path'];
            $img_c = substr($portrait,1);
            $img_c = ROOT_PATH.$img_c;//要处理的图片
            $image = new image($img_c);
            $image->resizeToWidth(900);//图片宽度
            $image->save($img_c);//保存图片
            $image->destory();
            if(!isset($upload['status'])){
                exit(json_encode(array('state' => 5,'info' => '图片上传失败')));
            }
        }else{
            exit(json_encode(array('state' => 6,'info' => '未选择图片')));
        }
        if(!empty($portrait) && $portrait != $chaininfo['portrait']){
            $re=$this->user->chainModel->update(array('portrait'=>$portrait,'change_time'=>time()),"id=".$chaininfo['id']);
            if(empty($re)){
                exit(json_encode(array('state' => 7,'info' => '操作失败')));
            }
            exit(json_encode(array('state' => 0,'info' => '操作成功','portrait' => $portrait)));
        }else{
            exit(json_encode(array('state' => 0,'info' => '操作成功','portrait' => $chaininfo['portrait'])));
        }
    }

    //提交令牌信息
    public function token(){
        $this->loadModel('user','company');
        $this->loadModel('user','chain');
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
        $token_symbol = strtoupper(filterCharacter($token_symbol));
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
            $this->user->chainModel->update(array('token_number'=>$token_number,'token_proportion'=>100),"uid=".$companyinfo['uid']." and company=".$companyinfo['id']);
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
        $jiaoyi_address = isset($_POST['jiaoyi_address'])?$_POST['jiaoyi_address']:"";
        $jiaoyi_address = filterCharacter($jiaoyi_address);

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

        $sql = "SELECT id,uid,state FROM user_chain WHERE uid=".$this->uid." and address='".$address."' and company=".$companyinfo['id']." and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织信息无当前用户信息")));
        }

        $order_coding = $this->order_sn();
        $inarr = array(
            'type' => 3,
            'uid' => $this->uid,
            'order_coding' => $order_coding,
            'project' => '个人认证',
            'currency' => 2,
            'number' => 1000,
            'way' => 2,
            'state' => 2,
            'invoice' => 1,
            'create_time' => time(),
            'address' => $jiaoyi_address,
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
        $this->user->chainModel->update(array('state'=>1),"id=".$chaininfo['id']);

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
        if($type<0 || $type>2){
        	$type = 0;
        }
        $content = isset($_POST['content'])?$_POST['content']:"";
        //$content = filterCharacter($content);
        $target = isset($_POST['target'])?$_POST['target']:"";
        $target = filterCharacter($target);
        $number = isset($_POST['number'])?(int)$_POST['number']:0;
        $keyname = isset($_POST['keyname'])?(int)$_POST['keyname']:0;

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
        $sql = "SELECT id,token_number FROM user_chain WHERE uid=".$this->uid." and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织信息无当前用户信息")));
        }

        if(empty($content)){
            exit(json_encode(array('state' => 8,'info' => "会议内容不能为空")));
        }
        $inarr = array(
        	'uid' => $this->uid,
        	'type' => $type,
        	'company' => $companyinfo['id'],
            'content' => $content,
        	'start_time' => time(),
        	'keyname' => $keyname,
        );
        if($type == 1 || $type == 2){
        	if(empty($target)){
	            exit(json_encode(array('state' => 5,'info' => "目标地址不能为空")));
	        }
        	if(empty($number)){
	            exit(json_encode(array('state' => 6,'info' => "请输入正确的数量")));
	        }
	        $sql = "SELECT id FROM user_chain WHERE address='".$target."' and company=".$companyinfo['id']." and state=2 and position!=0";
	        $targetinfo = $this->user->chainModel->fetchRow($sql);
	        if(empty($targetinfo)){
	            exit(json_encode(array('state' => 7,'info' => "组织内无当前目标成员信息")));
	        }
            if($type == 2){
            	$sql = "SELECT IFNULL(SUM(number),0) as number FROM user_meeting WHERE uid=".$this->uid." and company=".$companyinfo['id']." and type=2 and state=0";
            	$meetinginfo = $this->user->meetingModel->fetchRow($sql);
            	$token_number = $chaininfo['token_number']-$meetinginfo['number'];
                if($number>$token_number){
                    exit(json_encode(array('state' => 9,'info' => "成员的Token数量不足")));
                }
            }
	        $inarr['target'] = $target;
            $inarr['number'] = $number;
        }

        $re=$this->user->meetingModel->insert($inarr);
        if(empty($re)){
            exit(json_encode(array('state' => 10,'info' => '操作失败')));
        }
        exit(json_encode(array('state' => 0,'info' => '操作成功')));
    }

    //提交一个投票操作
    public function vote(){
        $this->loadModel('user','vote');
        $this->loadModel('user','meeting');
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadModel('user','option');
        $this->loadModel('user','excitation');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:""; 
        $address = filterCharacter($address);
        $id = isset($_POST['id'])?(int)$_POST['id']:0;
        $state = isset($_POST['state'])?(int)$_POST['state']:0;
        $keyname = isset($_POST['keyname'])?(int)$_POST['keyname']:0;
        if($state<0 || $state>2){
            $state = 0;
        }

        if(empty($address)){
            exit(json_encode(array('state' => 1,'info' => "钱包地址不能为空")));
        }
        if(empty($only)){
            exit(json_encode(array('state' => 2,'info' => "组织唯一标识不能为空")));
        }
        if(empty($id)){
            exit(json_encode(array('state' => 3,'info' => "会议ID不能为空")));
        }
        if(empty($state)){
            exit(json_encode(array('state' => 4,'info' => "请选择是与否")));
        }

        $sql = "SELECT id,token_number,support,quorum FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 5,'info' => "无当前组织信息")));
        }
        $sql = "SELECT id,token_number,token_proportion,position FROM user_chain WHERE uid=".$this->uid." and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 6,'info' => "该组织信息无当前用户信息")));
        }
        $sql = "SELECT * FROM user_meeting WHERE id=".$id." and company=".$companyinfo['id']." and state=0";
        $meetinginfo = $this->user->meetingModel->fetchRow($sql);
        if(empty($meetinginfo)){
            exit(json_encode(array('state' => 7,'info' => "组织内无当前会议或已结束")));
        }
        $sql = "SELECT id FROM user_vote WHERE uid =".$this->uid." and meeting=".$id;
        $voteinfo = $this->user->voteModel->fetchRow($sql);
        if(!empty($voteinfo)){
            exit(json_encode(array('state' =>8,'info' => "已投过票了，不能重复投")));
        }

        $inarr = array(
            'uid' => $this->uid,
            'meeting' => $id,
            'state' => $state,
            'token_number' => $chaininfo['token_number'],
            'token_proportion' => $chaininfo['token_proportion'],
            'create_time' => time(),
        );
        $re=$this->user->voteModel->insert($inarr);
        if(empty($re)){
            exit(json_encode(array('state' =>9,'info' => "操作失败")));
        }

        if($meetinginfo['level'] == 1){
            $cnt = $this->user->chainModel->selectCnt("company=".$companyinfo['id']." and state=2 and (position=2 or position=5",'id');

        }else if($meetinginfo['level'] == 2){
            $cnt = $this->user->chainModel->selectCnt("company=".$companyinfo['id']." and state=2 and (position=1 or position=3",'id');
        }
        /*$sql = "SELECT SUM(CASE WHEN state=1 THEN 1 ELSE 0 END) as yes_cnt,SUM(CASE WHEN state=2 THEN 1 ELSE 0 END) as no_cnt FROM user_vote WHERE meeting=".$id;
        $cntvote = $this->user->voteModel->fetchRow($sql);
        $yes_cnt = $cntvote['yes_cnt']/$cnt*100;
        $yes_cnt = substr(sprintf("%.5f",$yes_cnt),0,-1);
        $no_cnt = $cntvote['no_cnt']/$cnt*100;
        $no_cnt = substr(sprintf("%.5f",$no_cnt),0,-1);*/

        $cntvote = $this->user->voteModel->selectCnt("meeting=".$id." and state!=0",'id');
        $yes_cnt = $cntvote/$cnt*100;
        $yes_cnt = substr(sprintf("%.5f",$yes_cnt),0,-1);
        $no_cnt = $cntvote/$cnt*100;
        $no_cnt = substr(sprintf("%.5f",$no_cnt),0,-1);

        $sql = "SELECT coalesce(SUM(CASE WHEN state=1 THEN token_number ELSE 0 END),0) as yes_number,coalesce(SUM(CASE WHEN state=2 THEN token_number ELSE 0 END),0) as no_number FROM user_vote WHERE meeting=".$id;
        $sumvote = $this->user->voteModel->fetchRow($sql);
        $yes_sum = $sumvote['yes_number']/$companyinfo['token_number']*100;
        $yes_sum = substr(sprintf("%.5f",$yes_sum),0,-1);
        $no_sum = $sumvote['no_number']/$companyinfo['token_number']*100;
        $no_sum = substr(sprintf("%.5f",$no_sum),0,-1);


        if($meetinginfo['level'] == 1){//股东会投票

            if($no_sum >= $companyinfo['support'] && $no_cnt>=$companyinfo['quorum']){
                $this->user->meetingModel->update(array('end_time'=>time(),'state'=>2),"id=".$id);
                if($meetinginfo['type'] == 3){//期权计划创建
                    $this->user->optionModel->update(array('state'=>5,'change_time'=>time()),"id=".$meetinginfo['option_id']);
                }else if($meetinginfo['type'] == 4){//添加人员
                    $this->user->excitationModel->update(array('state'=>5),"id=".$meetinginfo['option_id']);
                }

            }else if($yes_sum > $companyinfo['support'] &&  $yes_cnt>$companyinfo['quorum']){

                $this->user->meetingModel->update(array('end_time'=>time(),'state'=>1),"id=".$id);
                if($meetinginfo['type'] == 1){//增发
                    $sql = "SELECT id,token_number,position FROM user_chain WHERE company=".$companyinfo['id']." and address='".$meetinginfo['target']."' and state=2 and position!=0";
                    $targetinfo = $this->user->voteModel->fetchRow($sql);

                    $target = ($targetinfo['token_number'] + $meetinginfo['number']);

                    $target_uparr = array(
                    	'token_number' => $target,
                    	'change_time' => time(),
                    );
                    if($targetinfo['position'] == 1){
                    	$target_uparr['position'] = 3;
                    }else if($targetinfo['position'] == 4){
                    	$target_uparr['position'] = 5;
                    }

                    $this->user->chainModel->update($target_uparr,"id=".$targetinfo['id']);

                    $sum = ($companyinfo['token_number']+$meetinginfo['number']);
                    $this->user->companyModel->update(array('token_number'=>$sum,'change_time'=>time()),"id=".$companyinfo['id']);

                    $sql = "SELECT id,token_number FROM user_chain WHERE company=".$companyinfo['id']." and state=2 and position!=0";
                    $chain_list = $this->user->chainModel->fetchAll($sql);
                    if(!empty($chain_list)){
                        foreach ($chain_list as $key => $value) {
                            $proportion = $value['token_number']/$sum*100;
                            $proportion = substr(sprintf("%.5f",$proportion),0,-1);
                            $uparr = array(
                                'token_proportion' => $proportion,
                                'change_time' => time()
                            );
                            $this->user->chainModel->update($uparr,"id=".$value['id']);
                        }
                    }
                }else if($meetinginfo['type'] == 2){//转让
                    $sql = "SELECT id,token_number,position FROM user_chain WHERE company=".$companyinfo['id']." and uid='".$meetinginfo['uid']."' and state=2 and position!=0";
                    $launchinfo = $this->user->chainModel->fetchRow($sql);
                    $sql = "SELECT id,token_number,position FROM user_chain WHERE company=".$companyinfo['id']." and address='".$meetinginfo['target']."' and state=2 and position!=0";
                    $targetinfo = $this->user->chainModel->fetchRow($sql);
                    if($launchinfo['id']!=$targetinfo['id']){
                        $number_a = ($launchinfo['token_number'] - $meetinginfo['number']);
                        $proportion_a = $number_a/$companyinfo['token_number']*100;
                        $proportion_a = substr(sprintf("%.5f",$proportion_a),0,-1);
                        
                        $number_b = ($targetinfo['token_number'] + $meetinginfo['number']);
                        $proportion_b = $number_b/$companyinfo['token_number']*100;
                        $proportion_b = substr(sprintf("%.5f",$proportion_b),0,-1);

                        $launch_uparr = array(
                        	'token_number' => $number_a,
                        	'token_proportion' => $proportion_a,
                        	'change_time' => time()
                        );
                        if($number_a <= 0){
                            if($launchinfo['position'] == 2){
                                $launch_uparr['position'] = 0;
                        	}else if($launchinfo['position'] == 3){
                        		$launch_uparr['position'] = 1;
                        	}else if($launchinfo['position'] == 5){
                        		$target_uparr['position'] = 4;
                        	}
                        }

                        $target_uparr = array(
                        	'token_number' => $number_b,
                        	'token_proportion' => $proportion_b,
                        	'change_time' => time()
                        );
                        if($targetinfo['position'] == 1){
                        	$target_uparr['position'] = 3;
                        }else if($targetinfo['position'] == 4){
                        	$target_uparr['position'] = 5;
                        }

                        $this->user->chainModel->update($launch_uparr,"id=".$launchinfo['id']);
                        $this->user->chainModel->update($target_uparr,"id=".$targetinfo['id']);
                    }
                }else if($meetinginfo['type'] == 3){//期权计划创建
                    $this->user->optionModel->update(array('state'=>4,'change_time'=>time()),"id=".$meetinginfo['option_id']);
                }else if($meetinginfo['type'] == 4){//添加人员
                    $this->user->excitationModel->update(array('state'=>4),"id=".$meetinginfo['option_id']);
                }

            }

        }else if($meetinginfo['level'] == 2){//懂事会投票

            if($no_cnt>=$companyinfo['quorum']){
                $this->user->meetingModel->update(array('end_time'=>time(),'state'=>2),"id=".$id);
                if($meetinginfo['type'] == 3){//期权计划创建
                    $this->user->optionModel->update(array('state'=>3,'change_time'=>time()),"id=".$meetinginfo['option_id']);
                }else if($meetinginfo['type'] == 4){//添加人员
                    $this->user->excitationModel->update(array('state'=>3),"id=".$meetinginfo['option_id']);
                }
            }else if($yes_cnt>$companyinfo['quorum']){
                $this->user->meetingModel->update(array('end_time'=>time(),'state'=>1),"id=".$id);
                if($meetinginfo['type'] == 3){//期权计划创建
                    $this->user->optionModel->update(array('state'=>3,'change_time'=>time()),"id=".$meetinginfo['option_id']);
                    $inarr_meeting = array(
                        'uid' => $meetinginfo['uid'],
                        'type' => 3,
                        'company' => $meetinginfo['company'],
                        'content' => $meetinginfo['content'],
                        'start_time' => time(),
                        'keyname' => $keyname,
                        'option_id' => $meetinginfo['option_id'],
                        'level' => 1,
                    );
                    $this->user->meetingModel->insert($inarr_meeting);
                }else if($meetinginfo['type'] == 4){//添加人员
                    $this->user->excitationModel->update(array('state'=>3),"id=".$meetinginfo['option_id']);
                    $inarr_meeting = array(
                        'uid' => $meetinginfo['uid'],
                        'type' => 4,
                        'company' => $meetinginfo['company'],
                        'content' => $meetinginfo['content'],
                        'target' => $meetinginfo['target'],
                        'number' => $meetinginfo['number'],
                        'start_time' => time(),
                        'keyname' => $keyname,
                        'option_id' => $meetinginfo['option_id'],
                        'level' => 1,
                    );
                    $this->user->meetingModel->insert($inarr_meeting);
                }
            }

        }
        exit(json_encode(array('state' =>0,'info' => "操作成功")));
    }

    /*订单编号*/
    function order_sn(){
        global $order;
        $i=rand(0,25);
        $orderdate = time() - strtotime($order['startdate']);
        $re = $order['randletter'][$i].$orderdate.rand(0,9).rand(0,9).rand(0,9);
        return $re;
    }


    //创建期权激励计划
    public function option(){
        $this->loadModel('user','option');
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadModel('user','meeting');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);
        $option_time = isset($_POST['option_time'])?$_POST['option_time']:'2019-01-01';
        $option_time = strtotime($option_time);
        $name = isset($_POST['name'])?$_POST['name']:'';
        $name = filterCharacter($name);
        $token_number = isset($_POST['token_number'])?(int)$_POST['token_number']:0;
        $grant_shares = isset($_POST['grant_shares'])?$_POST['grant_shares']:0;
        $grant_type = isset($_POST['grant_type'])?(int)$_POST['grant_type']:0;
        $total_month = isset($_POST['total_month'])?(int)$_POST['total_month']:0;
        $content = isset($_POST['content'])?$_POST['content']:'';
        $keyname = isset($_POST['keyname'])?(int)$_POST['keyname']:0;

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }
        if(empty($address)){
            exit(json_encode(array('state' => 2,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id,portrait,position FROM user_chain WHERE uid='".$this->uid."' and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织无当前用户信息")));
        }
        if($chaininfo['position']!=1 && $chaininfo['position']!=3){
            exit(json_encode(array('state' => 5,'info' => "权限不够")));
        }

        if(empty($name)){
            exit(json_encode(array('state' => 6,'info' => "期权激励计划名称不能为空")));
        }

        if(empty($token_number)){
            exit(json_encode(array('state' => 7,'info' => "TOKEN不能为0")));
        }

        if(empty($grant_shares)){
            exit(json_encode(array('state' => 8,'info' => "第一个到期日被授予的股份不能为空")));
        }

        if(empty($grant_type)){
            exit(json_encode(array('state' => 9,'info' => "授予时间类型不能为空")));
        }

        if(empty($total_month)){
            exit(json_encode(array('state' => 10,'info' => "总计月数不能为空")));
        }

        if(empty($content)){
            exit(json_encode(array('state' => 11,'info' => "内容不能为空")));
        }

        $inarr = array(
            'uid' => $this->uid,
            'company' => $companyinfo['id'],
            'option_time' => $option_time,
            'name' => $name,
            'token_number' => $token_number,
            'grant_shares' => $grant_shares,
            'grant_type' => $grant_type,
            'total_month' => $total_month,
            'state' => 1,
            'create_time' => time(),
        );

        $re=$this->user->optionModel->insert($inarr);
        if(empty($re)){
            exit(json_encode(array('state' =>12,'info' => "操作失败")));
        }

        $inarr_meeting = array(
            'uid' => $this->uid,
            'type' => 3,
            'company' => $companyinfo['id'],
            'content' => $content,
            'start_time' => time(),
            'keyname' => $keyname,
            'option_id' => $re,
            'level' => 2,
        );

        $this->user->meetingModel->insert($inarr_meeting);
        exit(json_encode(array('state' =>0,'info' => "操作成功")));
    }

    //期权计划添加名单
    public function excitation(){
        $this->loadModel('user','option');
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadModel('user','excitation');
        $this->loadModel('user','meeting');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);
        $target = isset($_POST['target'])?$_POST['target']:'';
        $target = filterCharacter($target);
        $option_id = isset($_POST['option'])?(int)$_POST['option']:0;
        $token_number = isset($_POST['token_number'])?(int)$_POST['token_number']:0;
        $exercise_money = isset($_POST['exercise_money'])?$_POST['exercise_money']:0;
        $content = isset($_POST['content'])?$_POST['content']:'';
        $keyname = isset($_POST['keyname'])?(int)$_POST['keyname']:0;

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }
        if(empty($address)){
            exit(json_encode(array('state' => 2,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id,portrait,position FROM user_chain WHERE uid='".$this->uid."' and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织无当前用户信息")));
        }
        if($chaininfo['position']!=1 && $chaininfo['position']!=3){
            exit(json_encode(array('state' => 5,'info' => "权限不够")));
        }

        $sql = "SELECT id,uid,portrait,position FROM user_chain WHERE address='".$target."' and company=".$companyinfo['id']." and state=2 and position!=0";
        $targetinfo = $this->user->chainModel->fetchRow($sql);
        if(empty($targetinfo)){
            exit(json_encode(array('state' => 6,'info' => "该组织无当前目标成员信息")));
        }

        $sql = "SELECT name,token_number,grant_shares,grant_type,total_month FROM user_option WHERE id=".$option_id." and company=".$companyinfo['id']." and state=4";
        $optioninfo = $this->user->optionModel->fetchRow($sql);
        if(empty($option_id)){
            exit(json_encode(array('state' => 7,'info' => "无当前期权激励计划")));
        }

        if(empty($token_number)){
            exit(json_encode(array('state' => 8,'info' => "TOKEN数不能为空")));
        }
        $number = (int)$token_number*$optioninfo['grant_shares'];

        $sql = "SELECT id FROM user_excitation WHERE tid=".$targetinfo['uid']." and state>0 and state<3";
        $excitationinfo = $this->user->excitationModel->fetchRow($sql);
        if(!empty($excitationinfo)){
            exit(json_encode(array('state' => 9,'info' => "目标成员已添加过")));
        }

        $sql = "SELECT coalesce(SUM(token_number),0) as token_number FROM user_excitation WHERE option_id=".$option_id." and state>0 and state<3";
        $option_sum = $this->user->excitationModel->fetchRow($sql);
        $sum = $option_sum['token_number']+$token_number;
        if($sum > $optioninfo['token_number']){
            exit(json_encode(array('state' => 10,'info' => "期权计划里的TOKEN数不足")));
        }

        if(empty($exercise_money)){
            exit(json_encode(array('state' => 11,'info' => "行使价格不能为0")));
        }

        if(empty($content)){
            exit(json_encode(array('state' => 12,'info' => "内容不能为空")));
        }

        $inarr = array(
            'uid' => $this->uid,
            'tid' => $targetinfo['uid'],
            'option_id' => $option_id,
            'token_number' => $token_number,
            'exercise_money' => $exercise_money,
            'state' => 1,
            'create_time' => time()
        );

        $re=$this->user->excitationModel->insert($inarr);
        if(empty($re)){
            exit(json_encode(array('state' =>13,'info' => "操作失败")));
        }

        $inarr_meeting = array(
            'uid' => $this->uid,
            'type' => 4,
            'company' => $companyinfo['id'],
            'content' => $content,
            'target' => $target,
            'number' => $number,
            'start_time' => time(),
            'keyname' => $keyname,
            'option_id' => $re,
            'level' => 2,
        );

        $this->user->meetingModel->insert($inarr_meeting);
        exit(json_encode(array('state' =>0,'info' => "操作成功")));
    }

    //用户是否接受期权计划
    public function excitation_if(){
        $this->loadModel('user','plan');
        $this->loadModel('user','option');
        $this->loadModel('user','excitation');
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);
        $excitation_id  = isset($_POST['excitation'])?(int)$_POST['excitation']:0;
        $type = isset($_POST['type'])?(int)$_POST['type']:0;
        if($type!=1 && $type!=2){
            $type = 0;
        }

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }
        if(empty($address)){
            exit(json_encode(array('state' => 2,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id,portrait,position FROM user_chain WHERE uid='".$this->uid."' and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织无当前用户信息")));
        }

        $sql = "SELECT id ,option_id,token_number,exercise_money FROM user_excitation WHERE id=".$excitation_id." and tid=".$this->uid." and state=4 and type=0";
        $excitationinfo = $this->user->excitationModel->fetchRow($sql);
        if(empty($excitationinfo)){
            exit(json_encode(array('state' => 5,'info' => "当前人员无该期权激励计划")));
        }
        $re = $this->user->excitationModel->update(array('type'=>$type),"id=".$excitation_id);
        if(empty($re)){
            exit(json_encode(array('state' => 6,'info' => "操作失败")));
        }

        if($type==1){
            $sql = "SELECT grant_shares,grant_type,total_month FROM user_option WHERE id=".$excitationinfo['option_id']." and state=4";
            $optioninfo = $this->user->optionModel->fetchRow($sql);
            if(!empty($optioninfo)){
                $time = strtotime(date('Y-m-d'));
                $token = (int)($excitationinfo['token_number']*$optioninfo['grant_shares']/100);
                for ($plan_i=0; $plan_i < $optioninfo['total_month']; $plan_i++) {
                    if($plan_i==0){
                        $expire_time = $time;
                        $token_number = $token;
                    }else{
                        if($optioninfo['grant_type']==1){
                            $month = 1*$plan_i;
                            $date = date("Y-m-d",strtotime("+".$month." month"));
                        }else if($optioninfo['grant_type']==2){
                            $month = 3*$plan_i;
                            $date = date("Y-m-d",strtotime("+".$month." month"));
                        }else if($optioninfo['grant_type']==3){
                            $month = 6*$plan_i;
                            $date = date("Y-m-d",strtotime("+".$month." month"));
                        }else if($optioninfo['grant_type']==4){
                            $year = 1*$plan_i;
                            $date = date("Y-m-d",strtotime("+".$year." year"));
                        }
                        $expire_time = strtotime($date);
                        $token_number = ($excitationinfo['token_number']-$token)/($optioninfo['total_month']-1);
                    }
                    $inarr=array(
                        'excitation_id' => $excitationinfo['id'],
                        'expire_time' => $expire_time,
                        'cycle' => $optioninfo['grant_type'], 
                        'token_number' => $token_number,
                        'exercise_money' => $excitationinfo['exercise_money'],
                    );
                    $this->user->planModel->insert($inarr);
                }
            }
        }
        exit(json_encode(array('state' => 0,'info' => "操作成功")));
    }

    //用户执行计划
    public function user_plan(){
        $this->loadModel('user','plan');
        $this->loadModel('user','chain');
        $this->loadModel('user','company');
        $this->loadHelper("common");

        $only = isset($_POST['only'])?$_POST['only']:"";
        $only = filterCharacter($only);
        $address = isset($_POST['address'])?$_POST['address']:'';
        $address = filterCharacter($address);
        $plan_id = isset($_POST['plan'])?(int)$_POST['plan']:0;

        if(empty($only)){
            exit(json_encode(array('state' => 1,'info' => "组织唯一标识不能为空")));
        }
        if(empty($address)){
            exit(json_encode(array('state' => 2,'info' => "钱包地址不能为空")));
        }

        $sql = "SELECT id,token_number FROM user_company WHERE only='".$only."' and state=2";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 3,'info' => "无当前组织信息")));
        }

        $sql = "SELECT id,token_number,portrait,position FROM user_chain WHERE uid='".$this->uid."' and address='".$address."' and company=".$companyinfo['id']." and state=2 and position!=0";
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 4,'info' => "该组织无当前用户信息")));
        }

        $sql = "SELECT * FROM user_plan WHERE id=".$plan_id." and state=1";
        $planinfo = $this->user->planModel->fetchRow($sql);
        if(empty($planinfo)){
            exit(json_encode(array('state' => 5,'info' => "该条信息以执行或不能执行")));
        }
        $uparr = array(
            'current_money' => 10,
            'state' => 2
        );
        $re = $this->user->planModel->update($uparr,"id=".$plan_id);
        if(empty($re)){
            exit(json_encode(array('state' => 6,'info' => "操作失败")));
        }

        $chain = ($chaininfo['token_number'] + $planinfo['token_number']);

        $chain_uparr = array(
            'token_number' => $chain,
            'change_time' => time(),
        );
        if($chaininfo['position'] == 1){
            $chain_uparr['position'] = 3;
        }else if($chaininfo['position'] == 4){
            $chain_uparr['position'] = 5;
        }

        $this->user->chainModel->update($chain_uparr,"id=".$chaininfo['id']);

        $sum = ($companyinfo['token_number']+$planinfo['token_number']);
        $this->user->companyModel->update(array('token_number'=>$sum,'change_time'=>time()),"id=".$companyinfo['id']);

        $sql = "SELECT id,token_number FROM user_chain WHERE company=".$companyinfo['id']." and state=2 and position!=0";
        $chain_list = $this->user->chainModel->fetchAll($sql);
        if(!empty($chain_list)){
            foreach ($chain_list as $key => $value) {
                $proportion = $value['token_number']/$sum*100;
                $proportion = substr(sprintf("%.5f",$proportion),0,-1);
                $uparr = array(
                    'token_proportion' => $proportion,
                    'change_time' => time()
                );
                $this->user->chainModel->update($uparr,"id=".$value['id']);
            }
        }
        exit(json_encode(array('state' => 0,'info' => "操作成功")));
    }
}
?>