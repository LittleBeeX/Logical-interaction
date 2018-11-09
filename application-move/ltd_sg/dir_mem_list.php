<div class="pt110 page-edit">
	<div class="littlebee-tit fz28 c28 pt40 mt20 plr30 ub ub-ac">
		<b><?= $dir_mem_list['b']?></b>
	</div>
	<?if (!empty($code)) {?>
		<dl class="c66 fz24 p30 lh16">
			<?= $dir_mem_list['dl']?>
		</dl>
	<?}?>
	<ul class="user-info-list plr30 fz24 cff">
	<?foreach ($people as $key => $val) {?>
		<li class="ub ub-ac">
			<div class="ub-f1 user-input">
				<input type="text" name="" id="" value="<?= $val['name']?>" placeholder="" disabled/>
			</div>
			<?if ($val['card_a'] == '' || $val['card_b'] == '' || $val['passport'] == '') {?>
				<a href="<?= $this->url('ltd_sg/upload')?>?id=<?= $val['id']?>&code=<?= $code?>&is_pay=<?= $is_pay?>" class="user-info-edite ub ub-pac cff"><?= $dir_mem_list['upload']?></a>
			<?}else{?>
				<?if (empty($is_pay)) {?>
					<a href="<?= $this->url('ltd_sg/upload')?>?id=<?= $val['id']?>&code=<?= $code?>&is_pay=<?= $is_pay?>" class="user-info-del ub ub-pac cff"><?= $dir_mem_list['upd']?></a>
				<?}else{?>
					<?if ($val['audit_img_state'] == 2 || $val['audit_img_state'] == 1) { ?>
						<a href="<?= $this->url('ltd_sg/upload')?>?id=<?= $val['id']?>&code=<?= $code?>&is_pay=<?= $is_pay?>&noback=1" class="user-info-edite ub ub-pac cff"><?= $dir_mem_list['look']?></a>
					<?}else{?>
						<a href="<?= $this->url('ltd_sg/upload')?>?id=<?= $val['id']?>&code=<?= $code?>&is_pay=<?= $is_pay?>" class="user-info-del ub ub-pac cff"><?= $dir_mem_list['upd']?></a>
					<?}?>
				<?}?>
			<?}?>
		</li>
	<?}?>
	</ul>
	<div class=" mb40 plr30 font-upper apply-foot-submit">
		<?if (empty($code)) {?>
			<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $dir_mem_list['btn']?></a>
		<?}else{?>
			<?if (empty($is_pay)) {?>
				<a href="<?= $this->url('ltd_sg/order_show')?>?oid=<?= $oid?>" id="next" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $dir_mem_list['con']?></a>
			<?}else{?>
				<a href="<?=$this->url('ltd_sg/order_show')?>?oid=<?= $oid?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $dir_mem_list['back']?></a>
			<?}?>
		<?}?>
	</div>
</div>


<script>
$(".header").addClass("user-hd");

</script>
<script type="text/javascript">
	$('#btn').on('click',function(){
		var oid = "<?= $oid?>";
		tips('','','0',{
		type: "loading",
		cb: function() {
			   $.ajax({
	        	url : '<?=$this->url("ltd_sg/new_order")?>',
				type : 'POST',
				data : {oid:oid},
				dataType : "json",
		        success:function(e){
			        if(e.state == 0){
		        		tips(e.info,'success',2000);
		        		setTimeout(function(){
		        			window.location.href="<?=$this->url("order/sel_pay")?>?oid="+oid;
		        		},2000);
		        		return false;
		        	}
		        	tips(e.info,'warning',1000);
		        } 
	        })
		}
	})
})



</script>