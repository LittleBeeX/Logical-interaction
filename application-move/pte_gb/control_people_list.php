<div class="pt110 " style="min-height:25rem;">
	<div class="littlebee-tit fz28 c28 pt40 mt20 plr30 ub ub-ac">
		<b><?=$control_people_list['title1']?></b>
	</div>
	<div class="fz28 c28 pt40 pb20 plr30">
		<b class="fw-b"><?=$control_people_list['title2']?></b>
	</div>
	<ul class="plr30 fz24 cff font-upper">
	<?
		foreach ($peo as $key => $val) {?>
			<li class="ub ub-ac mt24">
			<div class="ub-f1 user-input">
				<span><?= $val['name']?>&nbsp;<?= $val['surname']?></span>
			</div>
				<?if(empty($code)){?>
					<a href="<?= $this->url('pte_gb/control_personal')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn1']?></a><!-- 修改判断：code为空，id不为空 -->
					<div class="user-info-del ub ub-pac" id="del" data-id="<?= $val['id']?>"><?=$control_people_list['btn2']?></div>
				<?}else if(!empty($code)){?>
					<?if(!empty($upd)){?>
						<a href="<?= $this->url('pte_gb/control_personal')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>&upd=<?=$upd?>" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn1']?></a><!-- 修改判断：code不为空，id不为空，upd不为空 -->
						<div class="user-info-del ub ub-pac" id="del" data-id="<?= $val['id']?>"><?=$control_people_list['btn2']?></div>
					<?}else if(empty($upd)){?>
						<?if(!empty($ppp)){?>
							<?if($ppp==1||$ppp==2){?>
								<a href="<?= $this->url('pte_gb/control_personal')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>&ppp=<?=$ppp?>" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn3']?></a><!-- 查看判断：ppp为1或2 -->
							<?}else if($ppp==3&&$val['audit_state']==3){?>
								<a href="<?= $this->url('pte_gb/control_personal')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>&ppp=<?=$ppp?>" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn1']?></a><!-- 查看判断：ppp为3 -->
							<?}else if($ppp==3&&$val['audit_state']!==3){?>
								<a href="<?= $this->url('pte_gb/control_personal')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>&ppp=<?=$ppp?>&return=1" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn3']?></a><!-- 查看判断：ppp为1或2 -->
							<?}?>
						<?}else if(empty($ppp)){?>
							<a href="<?= $this->url('pte_gb/control_personal')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>&det=1" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn3']?></a><!-- 查看判断：det不为空， -->
						<?}?>
					<?}?>
				<?}?>
			
		</li>
	<?}?>
		
	</ul>
	<div class="fz28 c28 pt40 pb20 plr30">
		<b class="fw-b"><?=$control_people_list['title3']?></b>
	</div>
	<ul class="plr30 fz24 cff">
	<?
		foreach ($com as $key => $val1) {?>
			<li class="ub ub-ac mt24">
			<div class="ub-f1 user-input">
				<span><?= $val1['enterprise_name']?></span>
			</div>
				<?if(empty($code)){?>
					<a href="<?= $this->url('pte_gb/control_company')?>?id=<?= $val1['id']?>&code=<?= $code?>&oid=<?=$oid?>" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn1']?></a><!-- 修改判断：code为空，id不为空 -->
					<div class="user-info-del ub ub-pac" id="del" data-id="<?= $val1['id']?>"><?=$control_people_list['btn2']?></div>
				<?}else if(!empty($code)){?>
					<?if(!empty($upd)){?>
						<a href="<?= $this->url('pte_gb/control_company')?>?id=<?= $val1['id']?>&code=<?= $code?>&oid=<?=$oid?>&upd=<?=$upd?>" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn1']?></a><!-- 修改判断：code不为空，id不为空，upd不为空 -->
						<div class="user-info-del ub ub-pac" id="del" data-id="<?= $val1['id']?>"><?=$control_people_list['btn2']?></div>
					<?}else if(empty($upd)){?>
						<?if(!empty($ppp)){?>
							<?if($ppp==1||$ppp==2){?>
								<a href="<?= $this->url('pte_gb/control_company')?>?id=<?= $val1['id']?>&code=<?= $code?>&oid=<?=$oid?>&ppp=<?=$ppp?>" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn3']?></a><!-- 查看判断：ppp为1或2 -->
							<?}else if($ppp==3&&$val1['audit_state']==3){?>
								<a href="<?= $this->url('pte_gb/control_company')?>?id=<?= $val1['id']?>&code=<?= $code?>&oid=<?=$oid?>&ppp=<?=$ppp?>" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn1']?></a><!-- 查看判断：ppp为3 -->
							<?}else if($ppp==3&&$val1['audit_state']!==3){?>
								<a href="<?= $this->url('pte_gb/control_company')?>?id=<?= $val1['id']?>&code=<?= $code?>&oid=<?=$oid?>&ppp=<?=$ppp?>&return=1" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn3']?></a><!-- 查看判断：ppp为1或2 -->
							<?}?>
						<?}else if(empty($ppp)){?>
							<a href="<?= $this->url('pte_gb/control_company')?>?id=<?= $val1['id']?>&code=<?= $code?>&oid=<?=$oid?>&det=1" class="user-info-edite ub ub-pac cff"><?=$control_people_list['btn3']?></a><!-- 查看判断：det不为空， -->
						<?}?>
					<?}?>
				<?}?>
		</li>
	<?	} ?>
		
	</ul>
	
</div>
<div class=" plr30 apply-foot-submit font-upper">

	<?if(empty($code)){?>
		<a href="<?= $this->url('pte_gb/control_people1')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bgf76959 fz28 cff lh1 ptb40 mb40 mt30 add-directors"><b class="fz32 fw-b pr10"><img class="w8" src="/public/assets/weixin/images/add-w.png"/></b><?=$control_people_list['btn4']?></a>
		<a href="<?= $this->url('pte_gb/control_msg')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people_list['btn5']?></a>
	<?}?>
	<?if(!empty($code)){?>
		<?if(!empty($upd)){?>
			<a href="<?= $this->url('pte_gb/control_people1')?>?oid=<?= $oid?>&code=<?=$code?>&upd=<?=$upd?>" class="ub ub-pac bgf76959 fz28 cff lh1 ptb40 mb40 mt30 add-directors"><b class="fz32 fw-b pr10"><img class="w8" src="/public/assets/weixin/images/add-w.png"/></b><?=$control_people_list['btn4']?></a>
			<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people_list['btn6']?></a> 
		<?}else if(empty($upd)){?>
			<?if(!empty($ppp)){?>
				<?if($ppp==1||$ppp==2){?>
					<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people_list['btn7']?></a>
				<?}else if($ppp==3){?>
					<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people_list['btn6']?></a> 
				<?}?>
			<?}else if(empty($ppp)){?>
				<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$control_people_list['btn7']?></a>
			<?}?>
		<?}?>
	<?}?>

		
</div>
<script type="text/javascript">
$(".header").addClass("user-hd");
$(document).on('click','#del',function(){
	var _this = $(this);
	var id = _this.attr('data-id');
	tips('','','0',{
		type: "loading",
		cb: function() {
			$.ajax({
		        url:"<?=$this->url("pte_gb/control_people_del")?>",
		        type:'post',
		        data:{id:id},
		        dataType:'json',
		        success:function(e){
		        	if(e.state == 0) {
		        		tips(e.info,'success',2000);
				        _this.parents('li').remove();
				        return false;
			        }
			        if(e.state == 1){
			        	tips(e.info,'warning',1000);
			        }
			        	
		        } 
		    })
    	}
	})
})

$(function(){
	if(("<?=$code?>")==''){
	    history.pushState(null, null, document.URL);
	    window.addEventListener('popstate', function () {
			if(confirm("<?= $nobacks?>")){
				window.location.href = '/index.php/<?=$this->languageName?>/weixin';
			}else{
				history.pushState(null, null, document.URL);
			}
		});
	}
})
</script>