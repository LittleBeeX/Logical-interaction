<?php

/*
 * script 操作助手
 */

class js {

    /**
     * 弹出对话框
     */
    function msg($msg) {
        echo "<script>alert('" . $msg . "');";
        echo "</script>";
    }

    /**
     * 弹出对话框
     */
    function alert($msg = '', $url = '',$num = 0) {
        // edit for duan yunpeng  
        // add artDialog
        if($url){
            $jump = 'window.location.href="'.$url.'";';
        }else{
            $jump = 'window.history.back(-1);';

        }
        if($num){
            $num = $num * 1000;
            $time = 'time: '.$num.',';
        }else{
            $time = '';
        }
        $html =  '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>马尔贷--操作提示</title>
<link href="/public/plugins/artDialog/skins/idialog.css" rel="stylesheet" />
<script src="/public/plugins/artDialog/artDialog.min.js"></script>
<style type="text/css">
body{font-size: 12px; line-height: 24px;}
.d-content{padding: 5px;}
</style>
</head>
<body>
<script type="text/javascript">
art.dialog({
    title: "操作提示",
    content: "'.$msg.'",
    lock: true,
    '.$time.'
    ok: function () {
        '.$jump.'
        return false;
    },
    okValue: "确定",
    cancel: function () {
       '.$jump.' 
    },
    cancelValue : "取消"
});
</script>
</body>
</html>';
        /*echo "<script>alert('" . $msg . "');";
        echo empty($url) ? "window.history.go($num)" : "window.location.href='$url'";
        echo "</script>";*/
        echo $html;
        exit;
    }

    function tsalert($msg = '',$yn = 0, $url = '',$num = 0) {
        // edit for duan yunpeng  
        // add artDialog
        if($url!=''){
            $jump = 'window.location.href="'.$url.'";';
        }else{
            $jump = 'window.history.back(-1);';

        }
        if($num!=0){
            $num = $num * 1000;
            $time = 'time: '.$num.',';
        }else{
            $time = 'time: 3000,';
        }
        if($yn==0){
            $conte = '<div class=\"ts_mian\"><table class=\"ts_tab\"><tr><th><img src=\"/public/assets/home/images/wrong.png\" /></th><td><h2>'.$msg.'</h2></td></tr></table></div>';
        }else{
            $conte = '<div class=\"ts_mian\"><table class=\"ts_tab\"><tr><th><img src=\"/public/assets/home/images/dui.png\" /></th><td><h2>'.$msg.'</h2></td></tr></table></div>';
        }
        if($url){
            $html =  '<script type="text/javascript">
                    art.dialog({
                        title: "操作提示",
                        content: "'.$conte.'",
                        lock: true,
                        '.$time.'
                        okValue: "确定",
                        ok: function () {
                            '.$jump.'
                            return false;
                        },
                        cancelValue : "取消",
                        cancel: function () {
                           '.$jump.' 
                        }
                    });
                </script>';

        }else{
            $html =  '<script type="text/javascript">
                    art.dialog({
                        title: "操作提示",
                        content: "'.$conte.'",
                        lock: true,
                        '.$time.'
                        cancelValue : "关闭",
                        cancel: function () {
                           '.$jump.' 
                        }
                    });
                </script>';
        }
        return $html;
    }
    /**
     * 全页面跳转
     */
    function selfRedirect($url) {
        echo "<script>window.open('" . $url . "', '_self')</script>";
    }

    /**
     * 父窗口跳转
     */
    function parentRedirect($url) {
        echo "<script>window.parent.location.href='" . $url . "';</script>";
    }

    /**
     * 本页面跳转
     */
    function location_href($url) {
        echo "<script>location.href = '" . basename($url) . "'</script>";
    }

    /**
     * 本页面关闭
     */
    function close() {
        echo "<script>window.close();</script>";
    }

    /**
     * 父窗口刷新,子窗口关闭
     */
    function parentReload($url) {
        echo "<script>window.opener.location.href='" . $url . "';window.close()</script>";
    }
    /**
    *切割字符串
    */
    function cutString($string, $size, $isadd=1){
            $tp = $string	= strip_tags($string);

            if(mb_strlen($string) > $size){
                    $string	= mb_substr($string,0,$size,'utf-8');
            }
            if ($tp != $string && $isadd == 1) {
                    $string .= "…";
            }

            return $string;
    }

}