<!-- 国内使用 -->
<script type="text/javascript" charset="utf-8" src="//g.alicdn.com/sd/nch5/index.js?t=2015052012"></script>
<!-- 若您的主要用户来源于海外，请替换使用下面的js资源 -->
 <!-- <script type="text/javascript" charset="utf-8" src="//aeis.alicdn.com/sd/nch5/index.js?t=2015052012"></script> -->
 <style>
    .reg-type {display: none;}
    .reg-type.active {display: block;}
    #dom_id{padding:1.0666667rem 0.8rem;height: 2.6666666667rem;width: 100%;box-sizing: border-box;}
    ._nc .stage1 .slider,._nc .stage1 .icon{left: 0;right: 0;padding: 0;}
    ._nc .stage1 .slider,._nc .stage1 .slider,._nc .stage1 .button,._nc .stage1 .track div, ._nc .stage1 .label{height: 2.6666666667rem;}
    ._nc .stage1 .button{width: 3rem;}
    ._nc .stage1 .track div, ._nc .stage1 .label{line-height: 2.6666666667rem;font-size: 0.64rem;}
</style>
<ul class="register-list mt30 ml30 mr30 fz24 c66 bd">
    <li class="ub ub-ac bgff plr30">
        <label class="ub ub-f1 ub-ac">
            <span><?= $forget['account']?></span>
            <div class="ub-f1">
                <input type="text" class="checkinput" reg="nomarl" id="account" placeholder="<?= $forget['account_text']?>" />
            </div>
        </label>
    </li>

    <li class="ub ub-ac bgff plr30">
        <label class="ub ub-f1 ub-ac">
            <span><?= $forget['firstpassword']?></span>
            <div class="ub-f1">
                <input type="password" class="checkinput" reg="password" id="firstpassword" placeholder="<?= $forget['firstpassword_text']?>" maxlength="14" />
            </div>
        </label>
    </li>

    <li class="ub ub-ac bgff plr30">
        <label class="ub ub-f1 ub-ac">
            <span><?= $forget['secondpassword']?></span>
            <div class="ub-f1">
                <input type="password" reg="password" id="secondpassword"  class="checkinput" placeholder="<?= $forget['secondpassword_text']?>" maxlength="14" />
            </div>
        </label>
    </li>

</ul>
<ul class="register-list plr30 fz24 c66 mt24">
    <li class="ub ub-ac">
        <label class="ub ub-f1 ub-ac bgff plr30">
            <span><?= $forget['yzmcode']?></span>
            <div class="ub-f1">
                <input type="text" id="yzmcode" placeholder="<?= $forget['yzmcode_text']?>" />
            </div>
        </label>
        <div class="v-code ub ub-pac ml20 font-upper" id="code"><?= $forget['button1']?></div>
    </li>
</ul>







<div class="plr30 w100 font-upper">
    <a href="javascript:;" id="login_up" class="lgrg-btn cff fz26 ub ub-pac "><?= $forget['button2']?></a>
</div>

<script src="/public/assets/weixin/js/gt.js"></script>

<script type="text/javascript">


    $(document).on('touchstart','#code',function(){
        if($(".checkinput").val()!='') {
            $('#show').addClass('active');
            $('#dom_id').show();
        } else {
            tips($(".checkinput").attr("placeholder"),'warning',1000)
        }
    })

    $(document).on('touchstart','.v-code',function(){
		var _this = $(this);
		if($(".checkinput").val()!='') {
            if(!_this.hasClass('bgafafaf')){
		    	var account = $('#account').val();
		    	$.ajax({
			    	url:'<?=$this->url("common/VerifyLoginServlets")?>',
		            type:'post',
		            data:{account:account,type:'forget'},
			        dataType:'json',
			        success:function(e){
			        	if (e.state == 0) {
			        		tips(e.info,'success',2000);
			        		settime(_this);
			        		return false;
			        	}
			        	tips(e.info,'warning',2000);
			        } 
			    })
		    }
        } else {
            tips($(".checkinput").attr("placeholder"),'warning',1000)
        }
	})
	var countdown = 60;
 	function settime(obj) { 
	    if (countdown == 0) { 
	    	$(obj).removeClass('bgafafaf');
	    	$(obj).text('<?= $forget["button1"]?>');
	    	countdown = 60; 
	        return;
	    } else { 
	    	$(obj).addClass('bgafafaf');
	    	$(obj).text(countdown + "<?= $forget['button1_2']?>");
	        countdown--; 
	    } 
		setTimeout(function() { 
		    settime(obj) }
		    ,1000)
	}

</script>

<script type="text/javascript">

    $('#login_up').on('touchstart',function(){
        var account = $('#account').val();
        var firstpassword = $('#firstpassword').val();
        var secondpassword = $('#secondpassword').val();
        var yzmcode = $('#yzmcode').val();
        if (account == '') {
            tips('<?= $forget["account_text"]?>','warning',3000);return false;
        }
        if (account == '') {
            tips('<?= $forget["yzmcode_text"]?>','warning',3000);return false;
        }

        tips('','','0',{
            type: "loading",
            cb: function() {
                $.ajax({
                    url : '<?=$this->url("common/forget_ajax")?>',
                    type : 'POST',
                    data : {account:account,firstpassword:firstpassword,secondpassword:secondpassword,yzmcode:yzmcode},
                    dataType : "json",
                    success:function(e){
                        $('.circlebg').click();
                        if (e.state == 0) {
                            tips(e.info,'success',3000);
                            setTimeout('window.location.href="<?=$this->url("index/main")?>";',3500);
                            return false;
                        }
                        tips(e.info,"warning",3000)
                    }
                })
            }
        })




    })


</script>