<?php
/////////////////////////////////////////////////////////////////////////////
// Framework
//
/////////////////////////////////////////////////////////////////////////////
/**
 * 定义 Action Abstract 类
 *
 * @package mvc
 * @version $Id: abstract.php 256 2008-03-16 19:20:53
 */
/**
 * Controller_Abstract 实现了一个其它控制器的超类
 * @package mvc
 */
abstract class actionAbstract 
{

	/**
     * Modules名称
     * @var string
     */
    public $appName;

	/**
     * Controller名称
     * @var string
     */
    public $actionName;

    /**
     * Action名称
     * @var string
     */
    public $functionName;



    /**
     * Action名称
     * @var string
     */
    public $languageName;


    /**
     * Action对象
     * @var string
     */
    public $actionObject;

    protected $trace       = array();  // 页面trace变量
    
    public $menudata	=	null;//后台所有菜单


    /**
     * 构造函数
     */
    function __construct()
    {
    	global $configs;
    	$this->configs = $configs;
		$this->_getUrls();

        if(isset($_SESSION['admininfo'])){
			$this->authority();
		}
    }
    /**
     * 构造函数
     *第三方菜单查询
     */
    function __thiradmin(){
        global $configs;
        $this->configs = $configs;
        $this->_getUrls();
        
        if(isset($_SESSION['thiradmininfo'])){
            $this->authority2();
        }
    }
    

	/**
     * 获取url的值.
     * @return array
     */
    function _getUrls()
    {
    	
    	$pathInfo = empty($_SERVER['PATH_INFO'])?'':$_SERVER['PATH_INFO'];
    	$pathInfo = str_replace(".html","",$pathInfo);
		$urls = explode('/',$pathInfo);
        
        // get action name.
        if(empty($urls[1])){
            $this->languageName = NOT_LANGUAGE;
        } else {
            if($urls[1]!='cn' && $urls[1]!='en' && $urls[1]!='kr'){
                $urls[1] = 'en';
            }
            // $urls[1] = 'cn';
            $this->languageName = $urls[1];
        }
		
		// get app name.
		if(empty($urls[2])){
			$this->appName = NOT_MODULES;
		} else {
			$this->appName = $urls[2];
		}

		// get action name.
		if(empty($urls[3])){
			$this->actionName = DEFAULT_CONTROLLER;
		} else {
			$this->actionName = $urls[3];
		}
		
		// get action name.
		if(empty($urls[4])){
			$this->functionName = NOT_PAGE;
		} else {
			$this->functionName = $urls[4];
		}
		
		// get params.
		$keyName = '';
		unset($urls[0],$urls[1],$urls[2],$urls[3],$urls[4]);
		$paramsAry = array_values($urls);
		foreach($paramsAry as $key=>$val){
			if($key %2 == 0){
				$keyName = $val;
				$this->params[$keyName] = '';
			} else {
				$this->params[$keyName] = $val;
			}
		}
    }
	

    /**
     * 执行指定的动作
     * @return mixed
     */
    function execute()
    {
    	
    	$appPath = $this->get_app_path();
    	$this->get_action();
    	
    	if(method_exists($this->actionObject,$this->functionName))
	    	$this->actionObject->{$this->functionName}();
	    elseif(method_exists($this->actionObject,'__go'))
	    	$this->actionObject->__Go();
	    else
	    	Framework::Error('function: <b>__go()</b> or <b>'.$this->functionName.'()</b> not defined on <b>'.$this->actionName .'.php</b>',__FILE__,__LINE__);
			
	    
    }
	
    /**
     * 根据app的参数来获取一个路径.
     *
     * @return string
     */
    function get_app_path()
    {
    	$appPath =  APPS_PATH.$this->appName;
    	if(!is_dir($appPath)) Framework::Error('app: <b>'.$this->appName.'</b> not found ['.$appPath.']',__FILE__,__LINE__);
    	return $appPath;
    }
    
    /**
     * 根据action的参数来获取一个路径.
     *
     * @return string
     */
    function get_action()
    {
    	$actionPath =  APPS_PATH . $this->appName . "/action/".$this->actionName . ".php";
        $notFoundActionPath =  APPS_PATH . $this->appName . "/action/".NOT_CONTROLLER . ".php";
    	if(is_file($actionPath)){
    		include $actionPath;
    		$this->actionObject = new $this->actionName();
    	} elseif(is_file($notFoundActionPath)) {
            include $notFoundActionPath;
            $notFoundActionName = NOT_CONTROLLER;
            $this->actionObject = new $notFoundActionName();
        } else {
    		Framework::Error('action: <b>'.$this->actionName.'</b> not found, for: '.$actionPath,__FILE__,__LINE__);
    	}
    }
    
  /**
     * 调入model.
     *
     */
    function loadModel($appsName,$tableName,$primaryKey='id'){
        $modelName = $tableName.'Model';
        $modelPath =  APPS_PATH . $appsName . "/model/".$modelName . ".php";
        if(!isset($this->$appsName))
            $this->$appsName = new stdClass();
        if(is_file($modelPath)){
            include_once($modelPath);
                
            $this->$appsName->$modelName = new $modelName();
            
        } else {
            $modelPath =  LIBRARY_PATH . "db/model.php";
            include_once($modelPath);
            
            $this->$appsName->$modelName = new model();
            $this->$appsName->$modelName->_tableName  = $appsName.'_'.$tableName;
            $this->$appsName->$modelName->_primaryKey = $primaryKey;
            $this->$appsName->$modelName->_database   = 'default';
            
        }
        
        // connection db server.
        $this->$appsName->$modelName->initDb();
    }
    /**
     * 调入helper.
     *
     */
    function loadHelper($helperFileName){
    	$viewPath =  LIBRARY_PATH . "helper/".$helperFileName . ".php";
    	 
    	if(!is_file($viewPath)){
    		Framework::Error("helper: <b>$viewPath</b> not found",__FILE__,__LINE__);
    	}
    	 
    	include_once $viewPath;
    }
    
    /**
     * 调入view.
     *
     */
    function loadView($viewFileName=''){
    	if(empty($viewFileName)){
    		$viewPath =  APPS_PATH . $this->appName . "/view/".$this->actionName .  "/".$this->functionName  .".php";
    	} else {
    		$viewPath =  APPS_PATH . $this->appName . "/view/".$viewFileName . ".php";
    	}
    	
    	if(!is_file($viewPath)){
    		Framework::Error("view: <b>$viewPath</b> not found",__FILE__,__LINE__);
    	}
    	
    	return $viewPath;
    }
    
    /*
     * ajax 调入
     */
    function loadAjaxView($viewFileName = '',$data='') {
    	if(empty($viewFileName)){
    		$viewPath =  APPS_PATH . $this->appName . "/view/".$this->actionName .  "/".$this->functionName  .".php";
    	} else {
    		$viewPath =  APPS_PATH . $this->appName . "/view/".$viewFileName . ".php";
    	}
    	
    	if(!is_file($viewPath)){
    		Framework::Error("view: <b>$viewPath</b> not found",__FILE__,__LINE__);
    	}
    	if(!empty($data)) {
    		extract($data);
    	}
    	ob_start();
    	include($viewPath);
    	$result = ob_get_contents();
    	ob_end_clean();
    	return $result;
    }
    
    /**
     * 调入widget.
     *
     */
    function loadWidget($widgetFileName=''){
    	$widgetPath =  ROOT_PATH . "/widget/".$widgetFileName . ".php";
    	 
    	if(!is_file($widgetPath)){
    		Framework::Error("widget: <b>$widgetPath</b> not found",__FILE__,__LINE__);
    	}
    	 
    	return $widgetPath;
    }
    /**
    *
    *菜单配置载入
    */
    protected function loadConfig($fileName=''){
        if(!$fileName){
            $files = CONFIG_PATH .$this->appName.'.php';
        }else{
            $files = CONFIG_PATH.$fileName.'.php';
        }
         
        if(file_exists($files)){
            return include_once $files;
        }
        return array();
    }


    
    
    // URL重定向
    protected function redirect($url,  $msg='',$time=0) {
        //多行URL地址支持
        $url = str_replace(array("\n", "\r"), '', $url);
        if (empty($msg))
            $msg = "系统将在{$time}秒之后自动跳转到{$url}！";
        if (!headers_sent()) {
            // redirect
            if (0 === $time) {
                header('Location: ' . $url);
            } else {
                header("refresh:{$time};url={$url}");
                echo($msg);
            }
            exit();
        } else {
            $str = "<meta http-equiv='Refresh' content='{$time};URL={$url}'>";
            if ($time != 0)
                $str .= $msg;
            exit($str);
        }
    }
    //url生成
    // $this->url('controllers/action');
    // $this->url('controllers/action',array('id'=>1));
    // $this->url('controllers/action@appname',array('id'=>1));
    public function url($urls,$arg=array()){
        
        if(is_array($urls)){
            $arg = $urls[1];
            (string)$urls = $urls[0];
        }
        if($urls[0] == '/') return $urls;

        $url = '/index.php/'.$this->languageName.'/';
        //处理index.php
        if(strpos($_SERVER["REQUEST_URI"],'index.php')){
            $url = '/index.php/'.$this->languageName.'/';
        }
        if (!strpos($urls, '/')) {
            $urls =$this->actionName.'/'.$urls;
        }

        if (strpos($urls,'@')) {
            $arr=explode('@', $urls);
            $url.=$arr[1].'/'.$arr[0];
        }else{
            $url .= $this->appName.'/'. $urls;
        }
        if(!empty($arg)){
            $str = '';
            foreach ($arg as $k => $v) {
                $str .='&'.$k.'='.$v; 
            }

            if (strpos($urls,'?')) {
                $url .='&'.ltrim($str,'&');
            } else {
                $url .='?'.ltrim($str,'&');
            }

        }
        return $url;
    }

    public function trace($title,$value='') {
        if(is_array($title))
            $this->trace   =  array_merge($this->trace,$title);
        else
            $this->trace[$title] = $value;
    }
    
    
    
    /***
	 *
	 *系统后台权限 吴明聪 2014/3/28
	 ***/
	function authority()
    {
		//print_r($_SESSION['accessinfo']);exit;
		 $this->loadModel('system','menu');
		//$where	=	"system_group_menu.groupid"; $_SESSION['accessinfo']['groupid']
		//所有菜单
		$sql	=	"select sme.* from system_menu as sme left join system_group_menu as sgm on sgm.menupin=sme.pin where sgm.menupin in(select menupin from system_group_menu  where groupid=".$_SESSION['admininfo']['groupid'].") order by orderby asc ";
		$allmenu	=	$this->system->menuModel->fetchAll($sql);
		//print_r($allmenu);exit;
       
		foreach($allmenu as $key=>$val){
			$this->menudata[$val['menuid']]=$val; 
			
		} 
		
    	$_SESSION['menudata']	=	$this->menudata;
		
		$sql	=	"select menupin from system_group_menu  where groupid=".$_SESSION['admininfo']['groupid']."";
		$allpin	=	$this->system->menuModel->fetchAll($sql);
		$pinlist=array();
		foreach($allpin as $v){
		$pinlist[]=$v['menupin'];
		}
		$_SESSION['access_user_list']	=	$pinlist;
		return true;
		
		// 顶部菜单
		$menu_nav = menu_tree ( 0, $this->menudata );
					// 当前点击菜单组合
		$click_nav = intval ( isset($_GET['cnav']) ) ? intval ( $_GET['cnav'] ) : 0;
		$click_left = intval ( isset($_GET['cleft']) ) ? intval ( $_GET['cleft'] ) : 0;
		$click_menuid = intval ( isset($_GET['cmenuid']) ) ? intval ( $_GET['cmenuid'] ) : 0; 
		// 左侧菜单
			if ($click_nav == 0) {
				$menu_one = reset ( $menu_nav );
				$click_nav = $menu_one ['menuid'];
			}
		$menu_left = menu_tree ( $click_nav, $this->menudata ); 
		echo "<pre>";
		print_r($menu_nav);
		echo "<hr>";
		print_r($menu_left);
		
		exit;
		//print_r($this->menudata);exit;
		//面包线  $click_nav,$menu_left,$menu_nav
		
    }


     /***
     *
     *系统后台权限 张凯 2018/2/22  partner
     ***/
    function authority2()
    {
        //print_r($_SESSION['accessinfo']);exit;
         $this->loadModel('partner','menu');
        //$where    =   "partner_group_menu.groupid"; $_SESSION['accessinfo']['groupid']
        //所有菜单
        $sql    =   "select sme.* from partner_menu as sme left join partner_group_menu as sgm on sgm.menupin=sme.pin where sgm.menupin in(select menupin from partner_group_menu  where groupid=".$_SESSION['thiradmininfo']['groupid'].") order by orderby asc ";
        $allmenu    =   $this->partner->menuModel->fetchAll($sql);
        // print_r($allmenu);exit;
       
        foreach($allmenu as $key=>$val){
            $this->menudata[$val['menuid']]=$val; 
            
        } 
        
        $_SESSION['menudata']   =   $this->menudata;
        
        $sql    =   "select menupin from partner_group_menu  where groupid=".$_SESSION['thiradmininfo']['groupid']."";
        $allpin =   $this->partner->menuModel->fetchAll($sql);
        $pinlist=array();
        foreach($allpin as $v){
        $pinlist[]=$v['menupin'];
        }
        $_SESSION['access_user_list']   =   $pinlist;
        return true;
        
        // 顶部菜单
        $menu_nav = menu_tree ( 0, $this->menudata );
                    // 当前点击菜单组合
        $click_nav = intval ( isset($_GET['cnav']) ) ? intval ( $_GET['cnav'] ) : 0;
        $click_left = intval ( isset($_GET['cleft']) ) ? intval ( $_GET['cleft'] ) : 0;
        $click_menuid = intval ( isset($_GET['cmenuid']) ) ? intval ( $_GET['cmenuid'] ) : 0; 
        // 左侧菜单
            if ($click_nav == 0) {
                $menu_one = reset ( $menu_nav );
                $click_nav = $menu_one ['menuid'];
            }
        $menu_left = menu_tree ( $click_nav, $this->menudata ); 
        echo "<pre>";
        print_r($menu_nav);
        echo "<hr>";
        print_r($menu_left);
        
        exit;
        //print_r($this->menudata);exit;
        //面包线  $click_nav,$menu_left,$menu_nav
        
    }
    
    
    
    
    //输出调试信息
    function debug(){
         // 系统默认显示信息
        $this->trace('请求方法',    $_SERVER['REQUEST_METHOD']);
        $this->trace('通信协议',    $_SERVER['SERVER_PROTOCOL']);
        $this->trace('请求时间',    date('Y-m-d H:i:s',$_SERVER['REQUEST_TIME']));
        $this->trace('用户代理',    $_SERVER['HTTP_USER_AGENT']);
        $this->trace('会话ID'   ,   session_id());
        $Sql    =  isset($_ENV['Sql'])?$_ENV['Sql']:array();
        $this->trace('SQL记录',count($Sql)?count($Sql).'条<br/>'.implode('<br/>',$Sql):'无SQL记录');
        $files =  get_included_files();
        $this->trace('加载文件',    count($files).str_replace("\n",'<br/>',substr(substr(print_r($files,true),7),0,-2)));
        // 调用Trace页面模板
        include LIBRARY_PATH.'/helper/trace.tpl';
    }
    //魔术方法 有不存在的操作的时候执行
    public function __call($method,$args) {
        switch(strtolower($method)) {
                // 判断提交方式
                case 'ispost':
                case 'isget':
                case 'ishead':
                case 'isdelete':
                case 'isput':
                    return strtolower($_SERVER['REQUEST_METHOD']) == strtolower(substr($method,2));
                default:
                    return  false;
            }
    }
    
}
?>