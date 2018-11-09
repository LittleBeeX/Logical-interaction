<div class="pt110 hidden">
	<div class="order-status bgff fz22">
		<div class="order-status-main britain">
			<div class="order-status-item">
				<b class="ub ub-pac liang">1</b>
				<p><?=$order_show['state1']?></p>
			</div>
			<div class="order-status-item">
				<b class="ub ub-pac liang">2</b>
				<p><?=$order_show['state2']?></p>
				<span><?=$order_show['state2_span1']?></span>
				<span><?=$order_show['state2_span2']?></span>
			</div>
			<div class="order-status-item britain">
				<b class="ub ub-pac liang">3</b>
				<p><?=$order_show['state6']?></p>
			</div>
		</div>
	</div>	
	<div class="fz24 plr30">
	<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
		<a href="<?=$this->url('pte_gb/basic')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title1']?></b>
			<span class="c66 pr10"><?=$order_show['btn1']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state2)){?>
		<a href="<?=$this->url('pte_gb/basic')?>?oid=<?=$oid?>&code=1&auditstate=<?=$register['audit_state']?>" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title1']?></b>
			<span class="c66 pr10 <?if($register['audit_state']==3){echo 'c-f76959 pr10';}?>"><?if($register['audit_state']==1||$register['audit_state']==2){echo $order_show['btn2'];}if($register['audit_state']==3){echo $order_show['btn3'];}?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state3)&&empty($state2)){?>
		<a href="<?=$this->url('pte_gb/basic')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title1']?></b>
			<span class="c66 pr10"><?=$order_show['btn2']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>










<?if(!empty($scope)){?>
	<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
		<a href="<?=$this->url('pte_gb/scope_list')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title2']?></b>
			<span class="c66 pr10"><?=$order_show['btn1']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state2)||!empty($state3)){?>
		<a href="<?=$this->url('pte_gb/scope_list')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title2']?></b>
			<span class="c66 pr10"><?=$order_show['btn2']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
<?}else if(empty($scope)){?>
	<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
		<a href="<?=$this->url('pte_gb/scope_list')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title2']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn4']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state2)||!empty($state3)){?>
		<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title2']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn5']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
<?}?>














<?if(!empty($people)){?>
	<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
		<a href="<?=$this->url('pte_gb/ds_list')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title3']?></b>
			<span class="c66 pr10"><?=$order_show['btn1']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state2)){?>
		<a href="<?=$this->url('pte_gb/ds_list')?>?oid=<?=$oid?>&code=1&ppp=<?=$ppp?>" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title3']?></b>
			<span class="c66 pr10 <?if($ppp==3){echo 'c-f76959 pr10';}?>"><?if($ppp==1||$ppp==2){echo $order_show['btn2'];}if($ppp==3){echo $order_show['btn3'];}?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state3)&&empty($state2)){?>
		<a href="<?=$this->url('pte_gb/ds_list')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title3']?></b>
			<span class="c66 pr10"><?=$order_show['btn2']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
<?}else if(empty($people)){?>
	<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
		<a href="<?=$this->url('pte_gb/ds_list')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title3']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn4']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state2)){?>
		<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title3']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn5']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state3)&&empty($state2)){?>
		<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title3']?></b>
			<span class="c66 pr10"><?=$order_show['btn5']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
<?}?>







<?if(!empty($people1)){?>
	<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
		<a href="<?=$this->url('pte_gb/ms_list')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title4']?></b>
			<span class="c66 pr10"><?=$order_show['btn1']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state2)){?>
		<a href="<?=$this->url('pte_gb/ms_list')?>?oid=<?=$oid?>&code=1&ppp=<?=$ppp1?>" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title4']?></b>
			<span class="c66 pr10 <?if($ppp1==3){echo 'c-f76959 pr10';}?>"><?if($ppp1==1||$ppp1==2){echo $order_show['btn2'];}if($ppp1==3){echo $order_show['btn3'];}?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state3)&&empty($state2)){?>
		<a href="<?=$this->url('pte_gb/ms_list')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title4']?></b>
			<span class="c66 pr10"><?=$order_show['btn2']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
<?}else if(empty($people1)){?>
	<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
		<a href="<?=$this->url('pte_gb/ms_list')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title4']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn4']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state2)){?>
		<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title4']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn5']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state3)&&empty($state2)){?>
		<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title4']?></b>
			<span class="c66 pr10"><?=$order_show['btn5']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
<?}?>


		



<?if(!empty($equity)){?>
	<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
		<a href="<?=$this->url('pte_gb/equity_insert')?>?oid=<?=$oid?>&code=1&id=<?=$basicid?>" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title5']?></b>
			<span class="c66 pr10"><?=$order_show['btn1']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state2)){?>
		<a href="<?=$this->url('pte_gb/equity_list')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title5']?></b>
			<span class="c66 pr10"><?=$order_show['btn2']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state3)&&empty($state2)){?>
		<a href="<?=$this->url('pte_gb/equity_list')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title5']?></b>
			<span class="c66 pr10"><?=$order_show['btn2']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
<?}else if(empty($equity)){?>
	<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
		<a href="<?=$this->url('pte_gb/equity_insert')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title5']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn4']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state2)){?>
		<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title5']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn5']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state3)&&empty($state2)){?>
		<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title5']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn5']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
<?}?>
	
	





<?if(!empty($equity)){?>
	<?if(!empty($people2)){?>
		<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
			<a href="<?=$this->url('pte_gb/share_shop_list')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
				<b class="ub-f1 c28"><?=$order_show['title6']?></b>
				<span class="c66 pr10"><?=$order_show['btn1']?></span>
				<i class="icon-right iconfont fz24 c-afafaf"></i>
			</a>
		<?}?>
		<?if(!empty($state2)){?>
			<a href="<?=$this->url('pte_gb/share_shop_list')?>?oid=<?=$oid?>&code=1&ppp=<?=$ppp2?>" class="ub ub-ac c28 ptb30 bb">
				<b class="ub-f1 c28"><?=$order_show['title6']?></b>
				<span class="c66 pr10 <?if($ppp2==3){echo 'c-f76959 pr10';}?>"><?if($ppp2==1||$ppp2==2){echo $order_show['btn2'];}if($ppp2==3){echo $order_show['btn3'];}?></span>
				<i class="icon-right iconfont fz24 c-afafaf"></i>
			</a>
		<?}?>
		<?if(!empty($state3)&&empty($state2)){?>
			<a href="<?=$this->url('pte_gb/share_shop_list')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
				<b class="ub-f1 c28"><?=$order_show['title6']?></b>
				<span class="c66 pr10"><?=$order_show['btn2']?></span>
				<i class="icon-right iconfont fz24 c-afafaf"></i>
			</a>
		<?}?>
	<?}else if(empty($people2)){?>
		<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
			<a href="<?=$this->url('pte_gb/share_shop_list')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
				<b class="ub-f1 c28"><?=$order_show['title6']?></b>
				<span class="c-f76959 pr10"><?=$order_show['btn4']?></span>
				<i class="icon-right iconfont fz24 c-afafaf"></i>
			</a>
		<?}?>
		<?if(!empty($state2)){?>
			<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
				<b class="ub-f1 c28"><?=$order_show['title6']?></b>
				<span class="c-f76959 pr10"><?=$order_show['btn5']?></span>
				<i class="icon-right iconfont fz24 c-afafaf"></i>
			</a>
		<?}?>
		<?if(!empty($state3)&&empty($state2)){?>
			<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
				<b class="ub-f1 c28"><?=$order_show['title6']?></b>
				<span class="c66 pr10"><?=$order_show['btn5']?></span>
				<i class="icon-right iconfont fz24 c-afafaf"></i>
			</a>
		<?}?>
	<?}?>
<?}else if(empty($equity)){?>
	<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title6']?></b>
			<span class="c66 pr10 c-f76959 pr10"><?=$order_show['btn6']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
<?}?>





<?if(!empty($equity)){?>
	<?if(!empty($psc)){?>
		<?if($psc==1){?>
			<?if(!empty($people3)){?>
				<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
				<a href="<?=$this->url('pte_gb/control_people_list')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
					<b class="ub-f1 c28"><?=$order_show['title7']?></b>
					<span class="c66 pr10"><?=$order_show['btn1']?></span>
					<i class="icon-right iconfont fz24 c-afafaf"></i>
				</a>
				<?}?>
				<?if(!empty($state2)){?>
				<a href="<?=$this->url('pte_gb/control_people_list')?>?oid=<?=$oid?>&code=1&ppp=<?=$ppp3?>" class="ub ub-ac c28 ptb30 bb">
					<b class="ub-f1 c28"><?=$order_show['title7']?></b>
					<span class="c66 pr10 <?if($ppp3==3){echo 'c-f76959 pr10';}?>"><?if($ppp3==1||$ppp3==2){echo $order_show['btn2'];}if($ppp3==3){echo $order_show['btn3'];}?></span>
					<i class="icon-right iconfont fz24 c-afafaf"></i>
				</a>
				<?}?>
				<?if(!empty($state3)&&empty($state2)){?>
				<a href="<?=$this->url('pte_gb/control_people_list')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
					<b class="ub-f1 c28"><?=$order_show['title7']?></b>
					<span class="c66 pr10"><?=$order_show['btn2']?></span>
					<i class="icon-right iconfont fz24 c-afafaf"></i>
				</a>
				<?}?>
			<?}else if(empty($people3)){?>
				<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
				<a href="<?=$this->url('pte_gb/control_people1')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
					<b class="ub-f1 c28"><?=$order_show['title7']?></b>
					<span class="c-f76959 pr10"><?=$order_show['btn4']?></span>
					<i class="icon-right iconfont fz24 c-afafaf"></i>
				</a>
				<?}?>
				<?if(!empty($state2)){?>
					<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
						<b class="ub-f1 c28"><?=$order_show['title7']?></b>
						<span class="c-f76959 pr10"><?=$order_show['btn5']?></span>
						<i class="icon-right iconfont fz24 c-afafaf"></i>
					</a>
				<?}?>
				<?if(!empty($state3)&&empty($state2)){?>
					<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
						<b class="ub-f1 c28"><?=$order_show['title7']?></b>
						<span class="c66 pr10"><?=$order_show['btn5']?></span>
						<i class="icon-right iconfont fz24 c-afafaf"></i>
					</a>
				<?}?>
			<?}?>
		<?}else if($psc==2){?>
			<?if(!empty($people3)){?>
				<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
					<a href="<?=$this->url('pte_gb/control_people2')?>?oid=<?=$oid?>&code=1&upd=1" class="ub ub-ac c28 ptb30 bb">
						<b class="ub-f1 c28"><?=$order_show['title7']?></b>
						<span class="c66 pr10"><?=$order_show['btn1']?></span>
						<i class="icon-right iconfont fz24 c-afafaf"></i>
					</a>
				<?}?>
				<?if(!empty($state2)){?>
					<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
						<b class="ub-f1 c28"><?=$order_show['title7']?></b>
						<span class="c66 pr10"><?=$order_show['btn7']?></span>
						<i class="icon-right iconfont fz24 c-afafaf"></i>
					</a>
				<?}?>
				<?if(!empty($state3)&&empty($state2)){?>
					<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
						<b class="ub-f1 c28"><?=$order_show['title7']?></b>
						<span class="c66 pr10"><?=$order_show['btn7']?></span>
						<i class="icon-right iconfont fz24 c-afafaf"></i>
					</a>
				<?}?>
			<?}else if(empty($people3)){?>
					<a href="<?=$this->url('pte_gb/control_people2')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
						<b class="ub-f1 c28"><?=$order_show['title7']?></b>
						<span class="c66 pr10"><?=$order_show['btn1']?></span>
						<i class="icon-right iconfont fz24 c-afafaf"></i>
					</a>
			<?}?>
		<?}?>
	<?}else if(empty($psc)){?>
		<a href="<?=$this->url('pte_gb/control_people')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title7']?></b>
			<span class="c66 pr10"><?=$order_show['btn8']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
<?}else if(empty($equity)){?>
	<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
		<b class="ub-f1 c28"><?=$order_show['title7']?></b>
		<span class="c-f76959 pr10"><?=$order_show['btn6']?></span>
		<i class="icon-right iconfont fz24 c-afafaf"></i>
	</a>
<?}?>



<?if(!empty($equity)){?>
<?if(!empty($msg)){?>
	<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
		<a href="<?=$this->url('pte_gb/control_msg')?>?oid=<?=$oid?>&code=1&id=<?=$basicid?>" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title8']?></b>
			<span class="c66 pr10"><?=$order_show['btn1']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state2)){?>
		<a href="<?=$this->url('pte_gb/control_msg')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title8']?></b>
			<span class="c66 pr10"><?=$order_show['btn2']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
	<?if(!empty($state3)&&empty($state2)){?>
		<a href="<?=$this->url('pte_gb/control_msg')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title8']?></b>
			<span class="c66 pr10"><?=$order_show['btn2']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
	<?}?>
<?}else if(empty($msg)){?>
		<a href="<?=$this->url('pte_gb/control_msg')?>?oid=<?=$oid?>&code=1&id=<?=$basicid?>" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title8']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn4']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
<?}?>
<?}?>
<?if(empty($equity)){?>
	<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title8']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn6']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
<?}?>




<?if(!empty($equity)){?>
	<?if(!empty($msg1)){?>
		<?if(!empty($state1)&&empty($state2)&&empty($state3)){?>
			<a href="<?=$this->url('pte_gb/control_statement')?>?oid=<?=$oid?>&code=1&id=<?=$basicid?>" class="ub ub-ac c28 ptb30 bb">
				<b class="ub-f1 c28"><?=$order_show['title9']?></b>
				<span class="c66 pr10"><?=$order_show['btn1']?></span>
				<i class="icon-right iconfont fz24 c-afafaf"></i>
			</a>
		<?}?>
		<?if(!empty($state2)){?>
			<a href="<?=$this->url('pte_gb/control_statement2')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
				<b class="ub-f1 c28"><?=$order_show['title9']?></b>
				<span class="c66 pr10"><?=$order_show['btn2']?></span>
				<i class="icon-right iconfont fz24 c-afafaf"></i>
			</a>
		<?}?>
		<?if(!empty($state3)&&empty($state2)){?>
			<a href="<?=$this->url('pte_gb/control_statement2')?>?oid=<?=$oid?>&code=1" class="ub ub-ac c28 ptb30 bb">
				<b class="ub-f1 c28"><?=$order_show['title9']?></b>
				<span class="c66 pr10"><?=$order_show['btn2']?></span>
				<i class="icon-right iconfont fz24 c-afafaf"></i>
			</a>
		<?}?>
	<?}else if(empty($msg1)){?>
			<a href="<?=$this->url('pte_gb/control_statement')?>?oid=<?=$oid?>&code=1&id=<?=$basicid?>" class="ub ub-ac c28 ptb30 bb">
				<b class="ub-f1 c28"><?=$order_show['title9']?></b>
				<span class="c-f76959 pr10"><?=$order_show['btn4']?></span>
				<i class="icon-right iconfont fz24 c-afafaf"></i>
			</a>
	<?}?>
<?}?>
<?if(empty($equity)){?>
		<a href="javascript:void(0)" class="ub ub-ac c28 ptb30 bb">
			<b class="ub-f1 c28"><?=$order_show['title9']?></b>
			<span class="c-f76959 pr10"><?=$order_show['btn6']?></span>
			<i class="icon-right iconfont fz24 c-afafaf"></i>
		</a>
<?}?>
		



	</div>
</div>
<script type="text/javascript">
	$(".header").addClass("user-hd");
	$(function(){
		var state = ("<?= $sss?>");
	
			for (var i = 0; i < 6; i++) {
				if (state == 1) {
					$('.order-status-main div').eq(0).addClass('active');
				}
				if (state == 2 || state == 3 || state == 4 || state == 5) {
					$('.order-status-main div').eq(0).addClass('active');
					$('.order-status-main div').eq(1).addClass('active');
				}
				if (state == 6) {
					$('.order-status-main div').eq(0).addClass('active');
					$('.order-status-main div').eq(1).addClass('active');
					$('.order-status-main div').eq(2).addClass('active');
				}
				if($('.liang').eq(i).html() == state){
					return false;
				}
			}	
		
	})
</script>