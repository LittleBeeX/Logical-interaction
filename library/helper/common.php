<?php
/*
参数：
$str_cut    需要截断的字符串
$length     允许字符串显示的最大长度
程序功能：截取全角和半角（汉字和英文）混合的字符串以避免乱码
*/
function substr_cut($str_cut,$length){
    if (strlen($str_cut) > $length){
        for($i=0; $i < $length; $i++){
	        if (ord($str_cut[$i]) > 128){
	        	$i++;
	        }
        }
        $str_cut = substr($str_cut,0,$i)."....";
    }
    return $str_cut;
}

/*二维数组排序
$arr 数组
$keys 所要按照排序的键名
$type 升降
*/
function functionarray_sort($arr,$keys,$type='asc'){ 
    $keysvalue= $new_array= array(); 
    foreach($arr as $k=>$v){ 
        $keysvalue[$k] = $v[$keys]; 
    } 
    if($type== 'asc'){ 
        asort($keysvalue); 
    }else{ 
        arsort($keysvalue); 
    } 
    reset($keysvalue); 
    foreach($keysvalue as $k=>$v){ 
        $new_array[$k] = $arr[$k]; 
    } 
    return $new_array; 
}
/*
收益详情
$type 类型1按月付息到期还本2到期还本息
$atime 投入时间
$btime 到期时间
$period 投资期限
$profit 利率
$money 所投金额
	
*/
function income($type,$atime,$btime,$period,$profit,$money){
	$atime = strtotime(date('Y-m-d',$atime));
	$btime = strtotime(date('Y-m-d',$btime));
	/*$money = $money * 10000;*/
	$total = $money;
	$tdays = 0;
	$income = array();
	$retrn = array();
	if($type==1){
		$k=0;
		for($i=1;$i<=$period;$i++){
            $ctime = strtotime("+1 months",$atime);
        	$income[$k]['money'] = 0;
            if($i==$period){
            	$ctime = $btime;
        		$income[$k]['money'] = $money;
            }
        	$day = ($ctime-$atime)/3600/24;
        	$paymoney = round(($money*$profit/100)/365*$day,2);
        	$income[$k]['incometime'] = $ctime;
        	$income[$k]['paymoney'] = $paymoney;
        	$income[$k]['days'] = $day;
        	$total = $paymoney + $total;
			$tdays = $tdays + $day;
        	$atime = $ctime;
        	$k++;
		}
        $retrn = array('total'=>$total,
        				'tdays'=>$tdays,
        				'principal'=>$money,
        				'income'=>$income
        			);

	}else{
        $day = ($btime-$atime)/3600/24;
        $paymoney = round(($money*$profit/100)/365*$day,2);
        $total = $money + $paymoney;
		$tdays = $day;
        $retrn = array('total'=>$total,
        				'tdays'=>$tdays,
        				'principal'=>$money,
        				'income'=>array(array('incometime'=>$btime,
        								'days'=>$day,
        								'paymoney'=>$paymoney,
        								'money'=>$money)
        								)
        			);

	}
	return $retrn;
}
/**
 * 计算两个以YYYY-MM-DD为格式的日期，相差多少天（日）
 * @param  [type] $date1 [description]
 * @param  [type] $date2 [description]
 * @return [type]        [description]
 */
function getChaBetweenTwoDate($date1,$date2){
	$Date_List_a1=explode("-",$date1);
	$Date_List_a2=explode("-",$date2);
	$d1=mktime(0,0,0,$Date_List_a1[1],$Date_List_a1[2],$Date_List_a1[0]);
	$d2=mktime(0,0,0,$Date_List_a2[1],$Date_List_a2[2],$Date_List_a2[0]);
	$Days=round(($d1-$d2)/3600/24);
	return $Days;
}


/**
 * 计算两个日期之间的相差月份(2013-08-18  2013-09-28) (135...., 136...)
 */
function getMonthNum( $date1, $date2){

	if($date1 == 0 || $date2 == 0 || $date1 < $date2){
		return 0;
	}else{
		if(is_numeric($date1)){
			$date1 = date('Y-m-d', $date1);
		}
		if(is_numeric($date2)){
			$date2 = date('Y-m-d', $date2);
		}
		$date1 = explode('-',$date1);
		$date2 = explode('-',$date2);
		return 12-$date2[1]+($date1[0]-$date2[0]-1)*12+$date1[1];
	}
}

//PHP验证邮箱格式的函数
function checkEmail($email){
	$pregEmail = "/([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?/i";
	return preg_match($pregEmail,$email);  
}

//PHP验证手机格式的函数
function checkMobile($mobile){
    $pregMobile = "/^1[1-9]{1}[0-9]{1}[0-9]{8}$/";
	return preg_match($pregMobile,$mobile);  
}


//PHP验证是否是全英文和数字
function checkTel($mobile){
    $pregTel = "/^[0-9-]{1,16}$/";
    return preg_match($pregTel,$mobile);  
}


//PHP验证是否是全英文
function checkName($english){
    $pregEnglish = "/^[a-zA-Z\s]+$/";
    return preg_match($pregEnglish,$english);  
}


//PHP验证是否是全英文和数字
function checkEnglish($english){
    $pregEnglish = "/^[a-zA-Z0-9\s]+$/";
    return preg_match($pregEnglish,$english);  
}

//验证身份证格式
function checkIdcard($idcard){
    $idcard = strtolower($idcard);
    $length = strlen($idcard);
    $arr = array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2);
    $brr = array(1,0,'x',9,8,7,6,5,4,3,2);
    $and = 0;
    $coda = substr($idcard,-1);
    if($length!=18){
        return false;
    }else{
        foreach ($arr as $key => $value) {
            $and += (int)substr($idcard,$key,1) * $value;
        }
        if($coda==$brr[(int)$and%11]){
            return true;
        }else{
            return false;
        }
    }
}

//验证银行卡格式
function checkBank($idcard){
    if(is_numeric($idcard)){
        $idcard = strrev($idcard);
        $length = strlen($idcard);
        $anda=0;
        $andb=0;
        $i=0;
        for($i; $i<$length; $i++){
            if($i%2==0){
                $anda += (int)substr($idcard,$i,1);
            }else{
                if(((int)substr($idcard,$i,1))*2 >= 10){
                    $andb += ((int)substr($idcard,$i,1))*2-9;
                }else{
                    $andb += (int)substr($idcard,$i,1)*2;
                }
            }
        }
        if(($anda + $andb)%10==0){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

//手机显示
function mobile($mobile){
    $s = strlen($mobile);
    $x = "";
    for ($i=0; $i<$s; $i++) { 
        $x .= "*";
    }
    $karr = array();
    $x = substr_replace($x,substr($mobile,-1),-1);
    $karr[0] = mt_rand(0,2);
    $karr[1] = "-".mt_rand(2,4);
    $j = mt_rand(0,1);
    $k = $karr[$j];
    $x = substr_replace($x,substr($mobile,$k,1),$k,1);
    return $x;
}
//银行卡显示
function bank($bank){
    $s = strlen($bank);
    $x = "";
    $a=substr($bank,0,$s-4);
    $x=str_replace($a,'*************',$bank);
    /*for ($i=0; $i<$s; $i++) { 
        $x .= "*";
    }
    $karr = array();
    $x = substr_replace($x,substr($bank,-1),-1);
    $karr[0] = mt_rand(0,5);
    $karr[1] = "-".mt_rand(2,4);
    $j = mt_rand(0,1);
    $k = $karr[$j];
    $x = substr_replace($x,substr($bank,$k,1),$k,1);*/
    return $x;
}

//邮箱显示
function email($email){
    $i = explode("@",$email);
    $x = substr_replace($i[0],"***",1,-1)."@".$i[1];
    return $x;
}

//身份证显示
function idcard($idcard){
    $s = strlen($idcard);
    $x = "";
    for ($i=0; $i<$s; $i++) { 
        $x .= "*";
    }
    $karr = array();
    $x = substr_replace($x,substr($idcard,-4),-4);
    $karr[0] = mt_rand(0,2);
    $karr[1] = "-".mt_rand(2,4);
    $j = mt_rand(0,1);
    $k = $karr[$j];
    $x = substr_replace($x,substr($idcard,$k,2),$k,2);
    return $x;
}

//保留小数位不四舍五入
function nofloor($floor,$len=0){
    $round = 0;
    $round = round($floor,$len);
    if(is_numeric($floor)){
        if($len){
            $round = round($floor,$len);
            if($round > $floor){
                $round = $round - ("0.".str_repeat("0",$len-1)."1");
            }
        }else{
            return intval($floor);
        }
    }
    return $round;
}

/*获取真实IP*/
function realip(){
    $realip = $_SERVER["REMOTE_ADDR"];
    if (isset($_SERVER)) {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $realip = $_SERVER['HTTP_CLIENT_IP'];
        } else {
            $realip = $_SERVER['REMOTE_ADDR'];
        }
    } else {
        if (getenv("HTTP_X_FORWARDED_FOR")) {
            $realip = getenv( "HTTP_X_FORWARDED_FOR");
        } elseif (getenv("HTTP_CLIENT_IP")) {
            $realip = getenv("HTTP_CLIENT_IP");
        } else {
            $realip = getenv("REMOTE_ADDR");
        }
    }
    return $realip;
}