<div class="pt110 page-edit">
	<div class="littlebee-tit fz28 c28 pt40 mt20 plr30 ub ub-ac">
		<b><?= $pro['title']?></b>
	</div>
	<ul class="service-list c66 fz22 plr30 pt40 mt10">
	<?foreach ($service as $key => $value) {?>
		<?foreach ($project as $k => $val) {?>
			<?if ($value['id'] == $val) {?>
				<li>
					<label class="c28 ub ub-tc">
						<input type="checkbox" checked="checked" class="form-checkbox mr10" disabled="disabled" />
						<?= $value['project_'.$this->languageName]?>
						<div class="fz20 c66 pl10"><?= $pro['mon']?><b class="c-f76959 fz28"><?= sprintf("%.0f",$value['money_rmb']);?></b></div>
						<span><?= $value['unit_'.$this->languageName]?></span>
					</label>
					<p class="lh14 mt10"><?= $value['msg_'.$this->languageName]?></p>
				</li>
			<?}?>
		<?}?>
	<?}?>
	</ul>
	<div class="plr30 apply-foot-submit">
	<?if ($order['state'] == 1) {?>
		<a href="<?= $this->url('order/sel_pay')?>?oid=<?= $order['oid']?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $pro['gopay']?></a>
	<?}else{?>
		<a href="javascript:history.go(-1)" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $pro['back']?></a>
	<?}?>
	
	</div>
</div>

<script>
	$(".header").addClass("user-hd")
</script>