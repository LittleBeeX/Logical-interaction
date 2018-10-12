<?php
/////////////////////////////////////////////////////////////////////////////
// Framework

/////////////////////////////////////////////////////////////////////////////
/**
 * 上传处理类
 * @version 1.0
 */
class uploader
{
	public $datapath; // 图片存放目录
	public $urlpath; // 图片存放目录(web)

    public $fileStorgePath;  // 文件绝对路径
	public $webFilePath;  // 网站文件路径
    public $result = array('status'=>TRUE); // 返回信息
    //public $UpdType = array('gif', 'jpg', 'jpeg', 'png', 'bmp','swf', 'flv', 'mp3', 'mp4', 'wav', 'wma', 'wmv', 'mid','doc', 'docx', 'xls', 'xlsx', 'ppt', 'pdf', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2');
    public $UpdType = array(
        'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
        'flash' => array('swf', 'flv'),
        'media' => array('swf', 'flv', 'mp3', 'mp4', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
        'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'pdfx', 'txt', 'zip', 'rar', 'gz', 'bz2')
    );

	/**
	 * 初始化
	 * @param string $storgeType 存储类型 默认日期
	 */
	function __construct($storgeType="")
	{
		//echo 'uploader construct...';
        $this->check($storgeType);
	}


    /*
     * 检查合法性
     */
    function check($storgeType){

        // set data root path.
        if(defined("DATAPATH")){
            $datapath = DATAPATH;
            $urlpath  = DATAALIAS.'/';
        } else {
            $datapath = ROOT_PATH . 'data/';
            $urlpath  = '/data/';
        }        

        // check data root path.
        //检查目录
        if (@is_dir($datapath) === false) {
            $this->result['status'] = false;
            $this->result['errorMsg'] = $datapath."目录不存在。";
            return false;
        }
        //检查目录写权限
        if (@is_writable($datapath) === false) {
            $this->result['status'] = false;
            $this->result['errorMsg'] = $datapath."目录没有写权限。";
            return false;
        }
		
		

        //$subDirect='';
        // check storge type.
        if(empty($storgeType)){
			$subDirect = date('Y', time()).'/'.date('m_d', time()).'/';
        }else{
			$subDirect = $storgeType.'/';
		}
		
        //本次目录（检查并创建）
        $this->datapath = $datapath.$subDirect;
        //$this->checkDir($this->datapath);
        if(!is_dir($this->datapath)){
            mkdir($this->datapath, 0777, true);
        }
        //web路径
        $this->urlpath = $urlpath.$subDirect;
		//echo $this->urlpath;
		//exit;
    }
        
	/**
	 * 上传文件
	 * @param string $inputName 控件
	 * @return string Url 图片的web地址
	 */
	function start($inputName,$types,$fileName = '')
	{
        //return $this->datapath;
            if(empty($inputName)){
                $this->result['status'] = false;
                $this->result['errorMsg'] = $inputName."控件名不存在！";
                return false;
            }
            if(empty($_FILES[$inputName]["name"])){
                $this->result['status'] = false;
                $this->result['errorMsg'] = $_FILES[$inputName]["name"]."没有上传的文件！";
                return false;
            }
            
            $updFile = $_FILES[$inputName];
                                  
            // check upload file type allow
            if(is_array($updFile['name'])){
                for($i=0;$i<count($updFile['name']);$i++){
                    $item = array('name'=>$updFile['name'][$i] , 'tmp_name'=>$updFile['tmp_name'][$i], 'size'=>$updFile['size'][$i], 'error'=>$updFile['error'][$i]);
                    $this->process($i,$item,$types,$fileName);
                }
            } else {
                $error = $this->process(0,$updFile,$types,$fileName);
            }
            if(empty($this->result['files'][0]['path'])){
                return $error;
                //return 0;
                //return $this->result['files'][0]['errorMsg'];
            }else{
                return $this->result['files'][0];
            } 
	}

    /*
     * 文件上传处理
     */
    function process($id,$updFile,$types,$fileName){
        $fileTypes =explode(".",$updFile['name']);
        $updFileExt = strtolower($fileTypes[count($fileTypes)-1]);
        if(empty($types)){
            $this->result['files'][$id]['status'] = false;
            $this->result['files'][$id]['errorMsg'] = $updFileExt."格式，不允许上传！";
            $this->result['files'][$id]['path'] = $updFileExt."格式，不允许上传！";
            return $this->result['files'][$id];
        }elseif($types != 'image' && $types != 'flash' && $types != 'media' && $types != 'file'){
            $this->result['files'][$id]['status'] = false;
            $this->result['files'][$id]['errorMsg'] = $updFileExt."格式，不允许上传！";
            $this->result['files'][$id]['path'] = $updFileExt."格式，不允许上传！";
            return $this->result['files'][$id];
        }
        if($this->UpdType){
            if(!in_array($updFileExt,$this->UpdType[$types])){
                $this->result['files'][$id]['status'] = false;
                $this->result['files'][$id]['errorMsg'] = $updFileExt."格式，不允许上传！";
                $this->result['files'][$id]['path'] = $updFileExt."格式，不允许上传！";
                return $this->result['files'][$id];
            }
        }
        if (is_uploaded_file($updFile['tmp_name'])){
            if(empty($fileName)){
                list($usec, $sec) = explode(' ',microtime());
                $ymd  = date('Ymd', (string)$sec);
                $usec = substr((string)$usec, 2);
                $az = range('A','Z');
                $suiji = $az[rand(0,25)].rand(0,9);//随机数
                $microSenond =$ymd.$suiji.$usec;// 取一个毫秒级数字,4位。
                $newFileName = $microSenond.'.'.$updFileExt;
            }else{
                $newFileName =  $fileName.'.'.$updFileExt;
            }

            $fileStorgePath = $this->datapath.$newFileName;
            //return $fileStorgePath;
            $result = @move_uploaded_file($updFile['tmp_name'], $fileStorgePath);
            if($result){
                $this->fileStorgePath = $this->datapath.$newFileName;
                $this->webFilePath = $this->urlpath.$newFileName;

                $this->result['files'][$id]['status'] = true;
                $this->result['files'][$id]['path'] = $this->webFilePath;
            } else {
                $this->result['files'][$id]['status'] = false;
                $this->result['files'][$id]['errorMsg'] = $updFile['tmp_name']."移动临时文件时出错！";
                $this->result['files'][$id]['path'] = $updFileExt."上传文件失败！";
                return $this->result['files'][$id];
            }

        } else {
            $this->result['files'][$id]['status'] = false;
            $this->result['files'][$id]['errorMsg'] = $updFile['tmp_name']."上传文件失败,CODE:【".$updFile['error']."】.";
            $this->result['files'][$id]['path'] = $updFileExt."上传文件失败！";
            return $this->result['files'][$id];
        }

        return true;
    }


	/**
	 * 创建文件夹
	 * 不存在则自动创建
	 */
	function checkDir($dir){  
            if(!is_dir($dir)){  
                if(!$this->checkDir(dirname($dir))){  
                    return false;  
                }  
                if(!mkdir($dir,0777)){  
                return false;  
                }  
            }  
            return true;  
        }  
	
	
}