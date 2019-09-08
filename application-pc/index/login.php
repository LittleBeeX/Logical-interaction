<section class="additional login">
	<div>
		<h3><?=$login['text1']?></h3>
		<div class="float-left">
			<ul>
				<li class="item">
					<span ><?=$login['text2']?></span>
					<input type="text" id="account" />
					<p class="error"><?=$login['text3']?></p>
				</li>
				<li class="item">
					<span ><?=$login['text4']?></span>
					<input type="password" reg="password" id="password" maxlength="16" />
					<p class="error"><?=$login['text5']?></p>
				</li>
			</ul>
			<div class="btn-board">
				<span class="btn" id="btn"><?=$login['text6']?></span>
				<a href="/index.php/<?=$this->languageName?>/home/index/reset"><?=$login['text7']?></a>
			</div>
		</div>
		<div class="float-left message">
			<p class="hint"><?=$login['text8']?><br/><?=$login['text9']?></p>
			<a href="/index.php/<?=$this->languageName?>/home/index/register"><?=$login['text10']?></a>
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

    	$('#btn').click(function(){
    		var account = $('#account').val();
    		var password = $('#password').val();
    		if(account == ""){
			$('#account').parent('li').addClass('error');
			return false;
		}
    		if(password == ""){
			$('#password').parent('li').addClass('error');
			return false;
		}
		$.ajax({
        		url:'<?=$this->url("index/login_ajax")?>',
        		type:'post',
        		data:{account:account,password:password},
        		dataType:'json',
        		success:function(e){
        			if(e.state == 1){
        				$(e.info).parent('li').addClass('error');
						return false;
        			}else if(e.state == 2){
        				alert(e.info);
        			}else{
        				alert(e.info);
        				window.history.back(-1);
        			}
	        	} 
	    	})
    	});
</script>