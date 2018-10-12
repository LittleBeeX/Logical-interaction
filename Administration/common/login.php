<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<title>LittleBeeX管理平台</title>
<link rel="stylesheet" href="/public/assets/sysadmin/css/bootstrap.min.css">
<link rel="stylesheet" href="/public/assets/sysadmin/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="/public/assets/sysadmin/css/plugins/jquery-ui/smoothness/jquery-ui.css">
<link rel="stylesheet" href="/public/assets/sysadmin/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
<link rel="stylesheet" href="/public/assets/sysadmin/css/themes.css">
<link rel="stylesheet" href="/public/assets/sysadmin/css/style.css"><script type="text/javascript">
	var HINDEX_MASTER = '/epmaster/';
	var UVAR = '';
</script>
<script src="/public/assets/sysadmin/js/jquery.min.js"></script>
<script src="/public/assets/sysadmin/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
<script src="/public/assets/sysadmin/js/plugins/jquery-ui/jquery-ui.custom.min.js"></script>
<script src="/public/assets/sysadmin/js/bootstrap.min.js"></script>
<script src="/public/assets/sysadmin/js/zjj_function.js"></script>
<script src="/public/assets/sysadmin/js/plugins/form/jquery.form.min.js"></script>
<script src="/public/assets/sysadmin/js/plugins/bootbox/jquery.bootbox.js"></script>
<script src="/public/assets/sysadmin/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
<link rel="shortcut icon" href="/98k.ico" />

</head>
<body class='login' style="background-image: url('/public/assets/sysadmin/img/1.jpg');background-repeat: no-repeat;background-position: center;">
	<img src="/public/assets/sysadmin/img/1-2.png" style="position:absolute;top:50px;left:50px;" />
	<div class="wrapper">
		<h1><a href="javascript:viod(0);" style="font-size: 43px;">LittleBeeX运营管理系统</a></h1>
		<div class="login-body">
			<h2>登录</h2>
			<form action="" id="login" name="login" method='post'>
				<div class="username">
					<input type="text" name='username' id="username" placeholder="用户名" class='input-block-level'/>
				</div>
				<div class="pwd" style="margin-top: 10px;">
					<input type="password" name="password" id="password" placeholder="密码" class='input-block-level' style="width: 200px;" />
                    <!-- <input type="button" id="setmsg" name="setmobile" value="获取验证码" class='btn btn-primary' style="float: right;" /> -->
				</div>
				<div class="submit">
                    <!-- <input type="text" name="yzm" value="" placeholder="短信验证码" style="width: 185px;float: left;height: 25px;" /> -->
					<input type="submit" value="进入系统" class='btn btn-primary' style="height: 35px;width: 95px;" />
				</div>
			</form>
			<div class="forget"><br/></div>
		</div>
        <div style="color:white;margin-top:10px;text-align:center;">LittleBeeX（C）2018</div>
	</div>
	
</body>
</html>
<script type="text/javascript">
$('#login').submit(function(){
	var data = $("#login").serialize();
	$.ajax({
		type:'POST',
		url:'<?=$this->url("common/checkLogin")?>',
		data:data,
		dataType:'json',
		success:function(r){
			if(r.state == 1){
			    $('.alert-error').remove();
				$('#login').before('<div class="alert alert-error"><button data-dismiss="alert" class="close" type="button">×</button><strong>'+r.info+'</strong></div>');
			}else{
				window.location.href = r.url;
			}
		}
	});
	return false;
});

//获取短信验证start
$('#setmsg').click(function(){
    $.ajax({
    	type:'POST',
    	url:'<?=$this->url("common/setmsg")?>',
    	data:'username='+$('#username').val(),
    	dataType:'json',
    	success:function(r){
    		if(r.state==1){
                $('.alert-error').remove();
			    $('#login').before('<div class="alert alert-error"><button data-dismiss="alert" class="close" type="button">×</button><strong>'+r.info+'</strong></div>');
    		}else{
                time(setmsg);
    		}
    	}
    });
});

var wait=60;
function time(o) {
    if(wait <= 0) {
        o.removeAttribute("disabled");
        o.value="获取验证码";
        wait = 60;
    }else {
        o.setAttribute("disabled", true);
        o.value="重新发送(" + wait + ")";
        wait--;
        setTimeout(function() {
            time(o);
        },
        1000);
    }
}
//获取短信验证end
</script>