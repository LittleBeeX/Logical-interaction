<!-- 国内使用 -->
<script type="text/javascript" charset="utf-8" src="//g.alicdn.com/sd/nch5/index.js?t=2015052012"></script>
<!-- 若您的主要用户来源于海外，请替换使用下面的js资源 -->
 <!-- <script type="text/javascript" charset="utf-8" src="//aeis.alicdn.com/sd/nch5/index.js?t=2015052012"></script> -->
<style>
	#dom_id{margin-top: 3.2rem;height: 2.6666666667rem;}
	._nc .stage1 .slider,._nc .stage1 .icon{left: 0;right: 0;padding: 0;box-shadow: none;}
	._nc .stage1 .slider,._nc .stage1 .slider,._nc .stage1 .button,._nc .stage1 .track div, ._nc .stage1 .label{height: 2.6666666667rem;}
	._nc .stage1 .button{width: 3rem;}
	._nc .stage1 .track div, ._nc .stage1 .label{line-height: 2.6666666667rem;font-size: 0.64rem;text-indent: 3rem;}
	._nc .stage1 .track div, ._nc .stage1 .track{text-indent: -3rem;}
	#dom_id{display: block !important;}
	._nc .stage1 .bg-green{background: #0070ba !important;}
	.bg-red{background-color: rgb(0,112,186) !important;}
	._nc .icon-slide-arrow{font-size: 25px;color: #0070ba;}
</style>
<div class="lgrgbox ub ub-pac ub-ver">
<a class="lgrg-logo" href="/index.php/<?=$this->languageName?>"></a>
<ul class="lgrg-list">
	<li>
		<input type="text" id="account" placeholder="<?= $login['input1']?>"  autocomplete="off"/>
	</li>

	<li>
		<input type="password" id="password" placeholder="<?= $login['input2']?>"  autocomplete="off"/>
	</li>

</ul>


<!-- 滑动效果 -->
<div class="ln plr30 w100">
	<div id="dom_id"></div>
</div>



<div class="lgrg-link pr30 w100">
	<div class="tx-r fz24">
		<a href="<?=$this->url("index/forget")?>" class="dib cff pt30"><?= $login['button2']?></a>
	</div>
	<div class="tx-r fz24">
		<a href="<?=$this->url("index/register")?>" class="dib cff pt16"><?= $login['button3']?>>></a>
	</div>
</div>
</div>


<script type="text/javascript">
    var nc_appkey = "<?= $slide['nc_appkey']?>";  // 应用标识,不可更改
    var nc_scene = 'nc_message_h5';  //场景,不可更改
    var nc_token = [nc_appkey, (new Date()).getTime(), Math.random()].join(':');
    var nc=NoCaptcha.init({
	    renderTo: '#dom_id',//渲染到该DOM ID指定的Div位置
	    appkey: nc_appkey,
	    scene: nc_scene,
	    token: nc_token,
	    // trans: '{"name1":"code0"}',//测试用，特殊nc_appkey时才生效，正式上线时请务必要删除；code0:通过;code100:点击验证码;code200:图形验证码;code300:恶意请求拦截处理
	    callback: function (dat) {// 校验成功回调
			results(dat.csessionid,dat.sig,nc_scene,nc_token);
	    }
    });
  
	function results(csessionid,sig,scene,token){
	    var account = $('#account').val();
	    var password = $('#password').val();
    	
		$.ajax({
	        url:'<?=$this->url("common/login_ajax")?>',
	        type:'post',
	        data:{csessionid:csessionid,sig:sig,token:token,scene:scene,account:account,password:password},
	        dataType:'json',
	        success:function(e){
	        	nc.reset();
	        	if (e.state == 0) {
	        		window.history.back(-1);
	        		//window.location.href="<?=$this->url("index/main")?>";
	        		return false;
	        	}
	        	tips(e.info,'warning',1000);
	        	
	        } 
	    })
    }  


	NoCaptcha.setEnabled(true);
	nc.reset();//请务必确保这里调用一次reset()方法
	NoCaptcha.upLang('cn', {
	    'LOADING':"<?= $login['pub']['text1']?>",//加载
	    'SLIDER_LABEL': "<?= $login['pub']['text2']?>",//等待滑动
	    'CHECK_Y':"<?= $login['pub']['text3']?>",//通过
	    'ERROR_TITLE':"<?= $login['pub']['text4']?>",//拦截
	    'CHECK_N':"<?= $login['pub']['text5']?>", //准备唤醒二次验证
	    'OVERLAY_INFORM':"<?= $login['pub']['text6']?>",//二次验证
	    'TIPS_TITLE':"<?= $login['pub']['text7']?>"//验证码输错时的提示
	});
</script>

