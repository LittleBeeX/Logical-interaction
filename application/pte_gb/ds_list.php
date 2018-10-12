<div class="pt110 page-edit">
	<div class="littlebee-tit fz28 c28 pt40 mt20 plr30 ub ub-ac">
		<b><?=$ds_list['text11']?></b>
	</div>
	<ul class="user-info-list plr30 fz24 cff">
	<?
		foreach ($sbinfo2 as $key => $val) {?>
			<li class="ub ub-ac">
				<div class="ub-f1 user-input">
					<span ><?= $val['surname']?>&nbsp;<?= $val['name']?></span>
				</div>
				<?if(empty($code)){?>
					<a href="<?= $this->url('pte_gb/ds_insert')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>" class="user-info-edite ub ub-pac cff"><?=$ds_list['text22']?></a><!-- 修改判断：code为空，id不为空 -->
					<div class="user-info-del ub ub-pac" id="del" data-id="<?= $val['id']?>"><?=$ds_list['text33']?></div>
				<?}else if(!empty($code)){?>
					<?if(!empty($upd)){?>
						<a href="<?= $this->url('pte_gb/ds_insert')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>&upd=<?=$upd?>" class="user-info-edite ub ub-pac cff"><?=$ds_list['text22']?></a><!-- 修改判断：code不为空，id不为空，upd不为空 -->
						<div class="user-info-del ub ub-pac" id="del" data-id="<?= $val['id']?>"><?=$ds_list['text33']?></div>
					<?}else if(empty($upd)){?>
						<?if(!empty($ppp)){?>
							<?if($ppp==1||$ppp==2){?>
								<a href="<?= $this->url('pte_gb/ds_insert')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>&ppp=<?=$ppp?>" class="user-info-edite ub ub-pac cff"><?=$ds_list['text77']?></a><!-- 查看判断：ppp为1或2 -->
							<?}else if($ppp==3){?>
								<a href="<?= $this->url('pte_gb/ds_insert')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>&ppp=<?=$ppp?>" class="user-info-edite ub ub-pac cff"><?=$ds_list['text22']?></a><!-- 查看判断：ppp为3 -->
							<?}?>
						<?}else if(empty($ppp)){?>
							<a href="<?= $this->url('pte_gb/ds_insert')?>?id=<?= $val['id']?>&code=<?= $code?>&oid=<?=$oid?>&det=1" class="user-info-edite ub ub-pac cff"><?=$ds_list['text77']?></a><!-- 查看判断：det不为空， -->
						<?}?>
					<?}?>
				<?}?>
			</li>	
	<?}?>
	</ul>
	<div class="plr30 apply-foot-submit">
	<?if(empty($code)){?>
		<a href="<?= $this->url('pte_gb/ds_insert')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bgf76959 fz28 cff lh1 ptb40 mb40 mt30 add-directors"><b class="fz32 fw-b pr10"><img class="w8" src="/public/assets/weixin/images/add-w.png"/></b><?=$ds_list['text44']?></a>
		<a href="javascript:void(0)" id="next" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ds_list['text55']?></a>
	<?}?>
	<?if(!empty($code)){?>
		<?if(!empty($upd)){?>
			<a href="<?= $this->url('pte_gb/ds_insert')?>?oid=<?= $oid?>&code=<?=$code?>&upd=<?=$upd?>" class="ub ub-pac bgf76959 fz28 cff lh1 ptb40 mb40 mt30 add-directors"><b class="fz32 fw-b pr10"><img class="w8" src="/public/assets/weixin/images/add-w.png"/></b><?=$ds_list['text44']?></a>
			<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ds_list['text88']?></a> 
		<?}else if(empty($upd)){?>
			<?if(!empty($ppp)){?>
				<?if($ppp==1||$ppp==2){?>
					<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ds_list['text66']?></a>
				<?}else if($ppp==3){?>
					<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ds_list['text88']?></a> 
				<?}?>
			<?}else if(empty($ppp)){?>
				<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?= $oid?>&code=<?=$code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$ds_list['text66']?></a>
			<?}?>
		<?}?>
	<?}?>
	</div>
</div>

<script type="text/javascript">
$(".header").addClass("user-hd");
$(document).on('click','.user-info-del',function(){
	var _this = $(this);
	var id = _this.attr('data-id');
	tips('','','0',{
		type: "loading",
		cb: function() {
	$.ajax({
        url:'<?=$this->url("pte_gb/ds_del")?>',
        type:'post',
        data:{id:id},
        dataType:'json',
        success:function(e){
        	if(e.state == 0) {
        		tips(e.info,'success',1000);
		       	_this.parents('li').remove();
		        return false;
	        }
	        if(e.state == 1){
	        	tips(e.info,'warning',2000);
	        }
        } 
    })
    } 
    })
})

$('#next').on('click',function(){
	var oid = "<?= $oid?>";
	var code = "<?= $code?>";
	tips('','','0',{
		type: "loading",
		cb: function() {
	$.ajax({
        url:'<?=$this->url("pte_gb/ds_ajax")?>?oid='+oid,
        type:'post',
        data:'',
        dataType:'json',
        success:function(e){
        	if(e.state == 0) {
		        window.location.href="<?=$this->url("pte_gb/ms_insert")?>?oid="+oid+'&code='+code;
		        return false;
	        }else{
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