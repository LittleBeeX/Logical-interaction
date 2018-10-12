<div class="user-c-t ub ub-ver ub-pac">
	<div class="user-pic">
		<img src="/public/assets/weixin/images/Y8ozyJ.png" alt="" />
	</div>
	<h2 class="w100 ub-te tx-c plr30 mt24 fz24 cff">
	<?if (!empty($_SESSION['userinfo'])) {
		echo $_SESSION['userinfo']['account'];
	}?>
	</h2>
</div>
<div class="user-list bgff fz24 plr30 pb30">
	<a href="<?= $this->url('user/my_company')?>" class="ub ub-ac c28 ptb36 bb">
		<b class="ub-f1"><?= $main['my_company']?></b>
		<i class="icon-right iconfont fz24 c-afafaf"></i>
	</a>
	<a href="<?= $this->url('order/my_order')?>" class="ub ub-ac c28 ptb36 bb">
		<b class="ub-f1"><?= $main['my_order']?></b>
		<i class="icon-right iconfont fz24 c-afafaf"></i>
	</a>
	<a href="<?= $this->url('index/forget')?>" class="ub ub-ac c28 ptb36 bb">
		<b class="ub-f1"><?= $main['updpwd']?></b>
		<i class="icon-right iconfont fz24 c-afafaf"></i>
	</a>
	<a href="<?= $this->url('user/personal_invoice')?>" class="ub ub-ac c28 ptb36 bb">
		<b class="ub-f1"><?= $main['invoice']?></b>
		<i class="icon-right iconfont fz24 c-afafaf"></i>
	</a>
	<a href="https://www.sobot.com/chat/h5/index.html?sysNum=f44e5cd7ae5242228b897dfbb5853fff&lan=en" class="ub ub-ac c28 ptb36 bb">
		<b class="ub-f1"><?= $main['service']?></b>
		<i class="icon-right iconfont fz24 c-afafaf"></i>
	</a>
</div>
<div class="plr30 pb50 mb40 pt10">
	<a href="javascript:void(0)" class="lgrg-btn cff fz26 ub ub-pac exit_user"><?= $main['logout']?></a>
	<div class="pb20"></div>
</div>

<script>
	$(".header").addClass("user-hd")

	/*$('#exit').on('touchstart',function(){
		$.ajax({
			url : '<?=$this->url("common/exit_ajax")?>',
			type : 'POST',
			data : '',
			dataType : "json",
	        success:function(e){
	        	if (e.state == 0) {
	        		tips(e.info,'success',2000);
	        		setTimeout(function(){
						window.location.href="<?=$this->url("index/login")?>";
	        		},2000)
	        	}
	        } 
		})
	})*/
</script>