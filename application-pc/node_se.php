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

        $sql = "SELECT name,code,address,capital,establish,only,state FROM user_company WHERE only='".$only."'";
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

        $only = isset($_POST['only'])?$_POST['only']:'';
        $only = filterCharacter($only);
        if (empty($only)) {
            exit(json_encode(array('state' => 1,'info' => "组织名称不能为空")));
        }

        $sql = "SELECT id FROM user_company WHERE only='".$only."'";
        $companyinfo = $this->user->companyModel->fetchRow($sql);
        if(empty($companyinfo)){
            exit(json_encode(array('state' => 2,'info' => "无当前组织信息")));
        }

        $sql = "SELECT surname,name,sex,nationality,birthtime,address,picture,state FROM user_chain WHERE uid=".$this->uid." and company=".$companyinfo['id'];
        $chaininfo = $this->user->chainModel->fetchRow($sql);
        if(empty($chaininfo)){
            exit(json_encode(array('state' => 3,'info' => "当前组织无个人信息")));
        }else{
            exit(json_encode(array('state' => 0,'info' => $info)));
        }
    }

}
?>