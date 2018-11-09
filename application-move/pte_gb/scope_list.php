<div class="pt110 page-edit">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b><?=$scope_list['title1']?></b>
	</div>
	<ul class="user-info-list plr30 fz24 cff">
		<li class="ub ub-ac">
			<span class="user-label"><?=$scope_list['title2']?></span>
			<div class="ub-f1 user-input">
				<span class="fz26i"><?=$scope_list['title3']?></span>
			</div>
		</li>
		<?php foreach ($sbifo as $key => $val): ?>
			<li class="ub ub-ac">
				<span class="user-label"><?= $val['code']?></span>
				<div class="ub-f1 user-input">
					<span><?= $val['describe']?></span>
				</div>
				<?if($state==2||$state==3){?>
					<a href="javascript:void(0)" class="user-info-edite ub ub-pac cff" style="background: #CCC;"><?=$scope_list['button1']?></a>
				<?}else if($state==1||$state==4){?>
					<div class="user-info-btn user-info-del ub ub-pac" id="del" data-id="<?= $val['id']?>"><?=$scope_list['button1']?></div>
				<?}?>
			</li>	
		<?php endforeach ?>
	</ul>
	<div class="plr30 font-upper apply-foot-submit">
	<?if(empty($code)){?>
		<a href="<?= $this->url('pte_gb/scope')?>?oid=<?= $oid?>&code=<?= $code?>" class="ub ub-pac bgf76959 fz28 cff lh1 ptb40 mb40 mt30 add-directors"><b class="fz32 fw-b pr10"><img class="w8" src="/public/assets/weixin/images/add-w.png"/></b><?=$scope_list['button2']?></a>
			<a href="javascript:void(0)" id="next" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$scope_list['button3']?></a>
	<?}?>
	<?if(!empty($code)){?>
		<?if(!empty($upd)){?>
			<a href="<?= $this->url('pte_gb/scope')?>?oid=<?= $oid?>&code=<?= $code?>&upd=<?=$upd?>" class="ub ub-pac bgf76959 fz28 cff lh1 ptb40 mb40 mt30 add-directors"><b class="fz32 fw-b pr10"><img class="w8" src="/public/assets/weixin/images/add-w.png"/></b><?=$scope_list['button2']?></a>
			<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?=$oid?>&code=<?= $code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$scope_list['button5']?></a>
		<?}else if(empty($upd)){?>
			<a href="<?= $this->url('pte_gb/order_show')?>?oid=<?= $oid?>&code=<?= $code?>" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?=$scope_list['button4']?></a>
		<?}?>
	<?}?>

	</div>
</div>
<script type="text/javascript">
$(".header").addClass("user-hd");
if($('.user-info-list li').length>4){
	$('.add-directors').hide();
}else{
	$('.add-directors').show();
}

$(document).on('click','.user-info-del',function(){
	var _this = $(this);
	var id = _this.attr('data-id');
	tips('','','0',{
		type: "loading",
		cb: function() {
	$.ajax({
        url:'<?= $this->url("pte_gb/scope_del")?>',
        type:'post',
        data:{id:id},
        dataType:'json',
        success:function(e){
        	if (e.state == 0) {
        		tips(e.info,'success',1000);
        		_this.parents('li').remove();
        		if($('.user-info-list li').length>4){
					$('.add-directors').hide();
				}else{
					$('.add-directors').show();
				}
        	}
        } 
	})
	} 
	})

})

$('#next').on('click',function(){
	var oid = "<?= $oid?>";
	var code = "<?= $code?>";
	// if($('.user-info-list li').length>5){
	// 	tips("经营范围最多不可超过4个！",'error',1000);
	// }else{
	tips('','','0',{
		type: "loading",
		cb: function() {
		$.ajax({
	        url:'<?= $this->url("pte_gb/scope_update")?>?oid='+oid,
	        type:'post',
	        data:{oid:oid},
	        dataType:'json',
	        success:function(e){
	        	if (e.state == 0) {
	        		window.location.href="<?= $this->url('pte_gb/ds_insert')?>?oid="+oid+'&code='+code;return false;
	        	}else{
	        		tips(e.info,'warning',1000);
	        	}
	        } 
		})
		} 
		})
	//}
});


</script>

<script type="text/javascript">
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