
<section class="additional register">
	<div>
		<h3><?=$register['text1']?></h3>
		<div class="float-left">
			<ul>
				<li class="country">
					<div class="file focus">
						<span ><?=$register['text2']?></span>
						<input type="hidden" id="codes" value="1" readonly/>
						<input type="text" value="<?=$phone_codes[1]['country']?>" readonly/>
						<b><?=$phone_codes[1]['en']?></b>
						<i class="icon iconfont icon-jiantou2"></i>
					</div>
					<div class="list">
					<?foreach ($phone_codes as $key => $value) {?>
						<p>
							<span class="float-left" value="<?=$key?>"><?=$value['country']?></span>
							<span class="float-right"><?=$value['en']?></span>
						</p>
					<?}?>
					</div>
				</li>
				<li class="item">
					<span ><?=$register['text3']?></span>
					<input type="text" reg="email" id="email" />
					<p class="error"><?=$register['text4']?></p>
				</li>
				<li class="item">
					<span><?=$register['text5']?></span>
					<input type="text" id="code" reg="code" maxlength="5" />
					<div class="v-code"><?=$register['text6']?></div>
					<p class="error"><?=$register['text7']?></p>
				</li>
				<li class="item">
					<span ><?=$register['text8']?></span>
					<input type="password" id="firstpassword" reg="password"  maxlength="16" />
					<p class="error"><?=$register['text9']?></p>
				</li>
				<li class="item">
					<span ><?=$register['text10']?></span>
					<input type="password" id="secondpassword"  reg="password" maxlength="16" />
					<p class="error"><?=$register['text11']?></p>
				</li>
				<li>
					<label for="registerUser"><input type="checkbox" id="registerUser"/><?=$register['text12']?> <a href="#"><?=$register['text13']?></a></label>
					<p class="error"><?=$register['text14']?></p>
				</li>
			</ul>
			<div class="btn-board">
				<span class="btn" id="btn"><?=$register['text15']?></span>
			</div>
		</div>
		<div class="float-left message">
			<p class="hint"><?=$register['text16']?></p>
			<p class="hint"><?=$register['text17']?></p>
			<p class="hint"><?=$register['text18']?></p>
			<p class="hint"><?=$register['text19']?></p>
		</div>
	</div>
</section>

<script type="text/javascript">
	//正则规则
	var RegRules = {
	    nomarl: /^[\w\u4e00-\u9fa5]{1,10}/g,
	    email: /^[a-z0-9]+@([a-z0-9]+\.)+[a-z]{1,4}$/i,
	    phone: /^1[3,5,6,7,8,9]\d{9}$/,
	    code: /^[1-9]{1}[0-9]{4}$/,
	    password: /^\w{6,16}$/,
	    money: /(^[1-9]([0-9]+)?(\.[0-9]{1,2})?$)|(^(0){1}$)|(^[0-9]\.[0-9]([0-9])?$)/,
	    number: /^[0-9-.]{1,16}$/,
	    wechat: /^[a-zA-Z]{1}[-_a-zA-Z0-9]{5,19}$/,
	    enNomarl: /^[a-zA-Z ]{1,300}$/g,
	}
	$('.v-code').click(function(){
		if($('#email').val() == ""){
			$('#email').parent('li').addClass('error');
			return false;
		}else{
			if ($('#email').val().match(RegRules[$('#email').attr("reg")]) != null) {
		          		$('#email').parent('li').removeClass('error');
		        	} else {
		            	$('#email').parent('li').addClass('error');
		            	return false;
		        	}
	        	}
		settime(this);
	});
	$('#registerUser').click(function(){
		if(!$('#registerUser').prop('checked')){
			$('#registerUser').parent().parent('li').addClass('error');
		}else{
			$('#registerUser').parent().parent('li').removeClass('error');
		}
	});

    	$('#btn').click(function(){
    		var codes = $('#codes').val();
    		var email = $('#email').val();
    		var code = $('#code').val();
    		var firstpassword = $('#firstpassword').val();
    		var secondpassword = $('#secondpassword').val();
    		if(email == ""){
			$('#email').parent('li').addClass('error');
			return false;
		}
    		if(code == ""){
			$('#code').parent('li').addClass('error');
			return false;
		}
    		if(firstpassword == ""){
			$('#firstpassword').parent('li').addClass('error');
			return false;
		}
    		if(secondpassword == "" || secondpassword != firstpassword){
			$('#secondpassword').parent('li').addClass('error');
			return false;
		}
		if(!$('#registerUser').prop('checked')){
			$('#registerUser').parent().parent('li').addClass('error');
			return false;
		}
		$.ajax({
	        		url:'<?=$this->url("index/register_ajax")?>',
	        		type:'post',
	        		data:{codes:codes,email:email,code:code,firstpassword:firstpassword,secondpassword:secondpassword},
	        		dataType:'json',
	        		success:function(e){
	        			if(e.state == 1){
	        				$(e.info).parent('li').addClass('error');
					return false;
	        			}else{
	        				alert(e.info);
	        			}
		        	} 
	    	})
    	});

	var countdown = 60;
 	function settime(obj) { 
		if (countdown == 0) { 
		    	$(obj).removeClass('bgafafaf');
		    	$(obj).text("<?=$register['text6']?>");
		    	countdown = 60; 
		        	return;
	    	} else {
	    		if(countdown==60){
				var email = $('#email').val();
	    			$.ajax({
			        		url:'<?=$this->url("common/VerificationCode")?>',
			        		type:'post',
			        		data:{email:email},
			        		dataType:'json',
			        		success:function(e){
			        			alert(e.info);
				        	} 
			    	})
	    		}
		    	$(obj).addClass('bgafafaf');
		    	$(obj).text(countdown + "<?=$register['text20']?>");
		        	countdown--; 
	   	} 
		setTimeout(function() {settime(obj)},1000);
	}
</script>