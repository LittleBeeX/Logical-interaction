<style>
	.reg-type {display: none;}
	.reg-type.active {display: block;}
</style>
<ul class="register-list mt30 ml30 mr30 fz24 c66 bd">
	<li class="ub ub-ac bgff plr30">
		<b><?= $register['text1']?></b>
		<div class="ub-f1 ml20">
			<div class="selectbox">
				<div class="select-txt ub ub-ac" data-value="1">
					<div class="country" data-value="1"><?=$phone_codes[1]['country']?></div>
					<div class="ub-f1 tx-r"><?=$phone_codes[1]['en']?></div>
				</div>
				<div class="select-list">
				<?foreach ($phone_codes as $key => $value) {?>
					<div class="ub select-item ub-te plr30 ub-ac" data-value="<?=$key?>">
						<div class="country" data-value="<?=$key?>"><?=$value['country']?></div>
						<div class="ub-f1 tx-r"><?=$value['en']?></div>
					</div>
				<?}?>
				</div>
			</div>
		</div>
	</li>
	<li class="ub ub-ac bgff plr30">
		<div class="ub-f1 reg-type active">
			<label class="ub ub-f1 ub-ac">
			<span><?= $register['phone']?></span>
			<div class="ub-f1">
				<input type="text" class="checkinput" reg="phone" id="phone" placeholder="<?= $register['phone_text']?>" />
			</div>
		</label>
		</div>
		<div class="ub-f1 reg-type">
			<label class="ub ub-f1 ub-ac">
				<span><?= $register['email']?></span>
				<div class="ub-f1">
					<input type="text" class="checkinput" reg="email" id="email" placeholder="<?= $register['email_text']?>" />
				</div>
			</label>
		</div>
	</li>
	<li class="ub ub-ac bgff plr30">
		<label class="ub ub-f1 ub-ac">
			<span><?= $register['firstpassword']?></span>
			<div class="ub-f1">
				<input type="password"  class="checkinput" id="firstpassword" reg="password" placeholder="<?= $register['firstpassword_text']?>" maxlength="14" />
			</div>
		</label>
	</li>
	<li class="ub ub-ac bgff plr30">
		<label class="ub ub-f1 ub-ac">
			<span><?= $register['secondpassword']?></span>
			<div class="ub-f1">
				<input type="password" reg="password" id="secondpassword"  class="checkinput" placeholder="<?= $register['secondpassword']?>" maxlength="14" />
			</div>
		</label>
	</li>

</ul>
<ul class="register-list plr30 fz24 c66 mt24">
	<li class="ub ub-ac">
		<label class="ub ub-f1 ub-ac bgff plr30">
			<span><?= $register['code']?></span>
			<div class="ub-f1">
				<input type="password" id="code" placeholder="<?= $register['code_text']?>" />
			</div>
		</label>
		<div class="v-code ub ub-pac ml20" id="codes"><?= $register['button1']?></div>
		
	</li>
</ul>
<div class="plr30 w100 font-upper">
	<a href="javascript:;" id="btn" class="lgrg-btn cff fz26 ub ub-pac"><?=$register['button2']?></a>
</div>
<div class="register-agreement tx-c">
	<label class="ub ub-pac">
		<input type="checkbox" checked="checked"  /><?=$register['text2']?>
	</label>
	<a href="<?= $this->url('index/user')?>" class="ub ub-pac"><?=$register['text3']?></a>
</div>
<div class="gtbox">
	<div id="mask"></div>
	<div id="popup-captcha-mobile"></div>
</div>
<script type="text/javascript">
//选择注册方式
	$(".select-list .select-item").on("touchstart", function() {
		if($(this).attr("data-value") * 1 == 1) { //等于1代表的是中国
			$(".reg-type").eq(0).addClass("active").find("input").addClass("checkinput");
			$(".reg-type").eq(0).siblings(".reg-type").removeClass("active").find("input").removeClass("checkinput");
		} else {
			$(".reg-type").eq(1).addClass("active").find("input").addClass("checkinput");
			$(".reg-type").eq(1).siblings(".reg-type").removeClass("active").find("input").removeClass("checkinput");
		}

	});
	checkRegType();
	function checkRegType() {
		if($(".select-txt").attr("data-value") * 1 == 1) { //等于1代表的是中国
			$(".reg-type").eq(0).addClass("active").find("input").addClass("checkinput");
		} else {
			$(".reg-type").eq(1).addClass("active").find("input").addClass("checkinput");
			$(".reg-type").eq(1).siblings(".reg-type").removeClass("active").find("input").removeClass("checkinput");
		}
	}

</script>

<script type="text/javascript">
	$(document).on('touchstart','.v-code',function(){
		var _this = $(this);
		if($('.reg-type.active input.checkinput').val()!=''){
			if(!_this.hasClass('bgafafaf')){
			    settime(_this);
	    		var nationality = $('.country').attr('data-value');
		    	var phone = $('#phone').val();
				var email = $('#email').val();
				var account;
				if (phone == '') {
					account	= email;
				}else{
					account	= phone;
				}
		    	$.ajax({
			        url:'<?=$this->url("common/VerifyLoginServlets")?>',
			        type:'post',
			        data:{account:account,nationality:nationality},
			        dataType:'json',
			        success:function(e){
			        	if (e.state == 0) {
			        		tips(e.info,'success',2000);
			        		return false;
			        	}
			        	tips(e.info,'warning',2000);
			        } 
			    })
		    }
		}else{
			 tips($(".reg-type.active input.checkinput").attr("placeholder"),'warning',1000)
		}
	})
	var countdown = 60;
 	function settime(obj) { 
	    if (countdown == 0) { 
	    	$(obj).removeClass('bgafafaf');
	    	$(obj).text('<?=$register["button1"]?>');
	    	countdown = 60; 
	        return;
	    } else { 
	    	$(obj).addClass('bgafafaf');
	    	$(obj).text(countdown + '<?=$register["button1_2"]?>');
	        countdown--; 
	    } 
		setTimeout(function() { 
		    settime(obj) }
		    ,1000)
	}

</script>

<script type="text/javascript">
    $('#btn').on('touchstart',function(){
    	if(!$(this).hasClass('bgafafaf')){
    		var nationality = $('.country').attr('data-value');
	    	var phone = $('#phone').val();
			var email = $('#email').val();
			var account;
			if (phone == '') {
				account	= email;
			}else{
				account	= phone;
			}
	    	var firstpassword = $('#firstpassword').val();
	    	var secondpassword = $('#secondpassword').val();
	    	var yzmcode = $('#code').val();
	    	if (yzmcode == '') {
	    		tips('<?=$register["code_text"]?>','warning',3000);
	    		return false;
	    	}

	    	tips('','','0',{
				type: "loading",
				cb: function() {
					$.ajax({
			    		url : '<?=$this->url("common/register_ajax")?>',
			    		type : 'POST',
			    		data : {nationality:nationality,account:account,firstpassword:firstpassword,secondpassword:secondpassword,yzmcode:yzmcode},
			    		dataType : "json",
			            success:function(e){
			            	$('.circlebg').click();
			            	if (e.state == 0) {
			            		tips(e.info,'success',3000);
			            		setTimeout('window.location.href="<?=$this->url("index/login")?>";',3500);
			            		return false;
			            	}
			            	tips(e.info,'warning',3000);
			            } 
			    	})
				}
			})
    	}
    })
	
	$('.register-agreement input').change(function(){
		if($(this).prop('checked')){
			$('#btn').removeClass('bgafafaf');
		}else{
			$('#btn').addClass('bgafafaf');
		}
	})
</script>







