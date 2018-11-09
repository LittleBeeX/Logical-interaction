<section class="additional reset">
	<div>
		<h3><?=$reset['text1']?></h3>
		<div class="float-left">
			<ul>
				<li class="item">
					<span><?=$reset['text2']?></span>
					<input type="text" reg="email" id="email" />
					<p class="error"><?=$reset['text3']?></p>
				</li>
				<li class="item">
					<span><?=$reset['text4']?></span>
					<input type="text" id="code" reg="code" maxlength="5" />
					<div class="v-code"><?=$reset['text5']?></div>
					<p class="error"><?=$reset['text6']?></p>
				</li>
				<li class="item">
					<span ><?=$reset['text7']?></span>
					<input type="password" id="firstpassword" reg="password"  maxlength="16" />
					<p class="error"><?=$reset['text8']?></p>
				</li>
				<li class="item">
					<span ><?=$reset['text9']?></span>
					<input type="password" id="secondpassword"  reg="password" maxlength="16" />
					<p class="error"><?=$reset['text10']?></p>
				</li>
			</ul>
			<div class="btn-board">
				<span class="btn" id="btn"><?=$reset['text11']?></span>
			</div>
		</div>
		<div class="float-left message">
			<p class="hint"><?=$reset['text12']?><br/><?=$reset['text13']?></p>
			<a href="/index.php/<?=$this->languageName?>/home/index/register"><?=$reset['text14']?></a>
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

    	$('#btn').click(function(){
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
		$.ajax({
	        		url:'<?=$this->url("index/reset_ajax")?>',
	        		type:'post',
	        		data:{email:email,code:code,firstpassword:firstpassword,secondpassword:secondpassword},
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
		    	$(obj).text("<?=$reset['text5']?>");
		    	countdown = 60; 
		        	return;
	    	} else {
	    		if(countdown==60){
				var email = $('#email').val();
	    			$.ajax({
			        		url:'<?=$this->url("common/VerificationCode")?>',
			        		type:'post',
			        		data:{email:email,type:'forget'},
			        		dataType:'json',
			        		success:function(e){
			        			alert(e.info);
				        	} 
			    	})
	    		}
		    	$(obj).addClass('bgafafaf');
		    	$(obj).text(countdown + "<?=$reset['text15']?>");
		        	countdown--; 
	   	} 
		setTimeout(function() {settime(obj)},1000);
	}
</script>