<div class="pt110 page-edit">
	<div class="littlebee-tit fz28 c28 pt40 mt20 plr30 ub ub-ac">
		<b><?= $director_list['title']?></b>
	</div>
	<?if (!empty($code)) {?>
		<dl class="c66 fz24 p30 lh16">
			<?= $director_list['h1']?>
		</dl>
	<?}?>
	<ul class="user-info-list plr30 fz24 cff">
		<?if (!empty($sta)) {?>
			<!-- <li class="ub ub-ac">
						<div class="ub-f1 user-input">
							<input type="text" name="" id="" value="<?= $director_list['dis']?>" placeholder="placeholder" disabled="disabled"/>
						</div>
						<a href="javascript:void(0)" class="user-info-edite ub ub-pac cff" style="background: #CCC;"><?= $director_list['upd']?></a>
						<div class="user-info-del ub ub-pac disabled"  style="background: #ccc;"><?= $director_list['del']?></div>
					</li> -->		
		<?}?>
		<?foreach ($people as $key => $val) {?>
			<li class="ub ub-ac">
				<div class="ub-f1 user-input">
					<input type="text" name="" id="" value="<?= $val['name']?>" placeholder="" disabled/>
				</div>
				<?if (empty($is_pay)) {?>
					<a href="<?= $this->url('ltd_cym/add_director')?>?oid=<?= $val['oid']?>&id=<?= $val['id']?>&code=<?=$code?>&noback=1" class="user-info-edite ub ub-pac cff"><?= $director_list['upd']?></a>
					<div data-id="<?= $val['id']?>" class="user-info-del ub ub-pac del"><?= $director_list['del']?></div>
				<?}else{?>
					<?if ($val['audit_state'] == 2 || $val['audit_state'] == 1) {?>
						<a href="<?= $this->url('ltd_cym/add_director')?>?id=<?= $val['id']?>&code=<?=$code?>&is_pay=<?= $is_pay?>&noback=1" class="user-info-edite ub ub-pac cff"><?= $director_list['look']?></a>
					<?}else{?>
						<a href="<?= $this->url('ltd_cym/add_director')?>?oid=<?= $val['oid']?>&id=<?= $val['id']?>&code=<?=$code?>&noback=1&is_pay=<?= $is_pay?>" class="user-info-del ub ub-pac cff"><?= $director_list['upd']?></a>
					<?}?>
				<?}?>
			</li>
		<?}?>
	</ul>
	<div class="plr30 font-upper apply-foot-submit">
	<!-- is_pay 是否支付  支付后进入审核 只能进行查看和返回操作 -->
	<?if (empty($is_pay)) {?>
		<a href="<?= $this->url('ltd_cym/add_director')?>?oid=<?= $oid?>&code=<?= $code?>&noback=1" class="ub ub-pac bgf76959 fz26 cff lh1 ptb40 mb40 mt30 add-directors"><b class="fz32 fw-b pr10">+</b><?= $director_list['new']?></a>
		<?if (empty($code)) {?>
			<a href="javascript:void(0)" id="next" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $director_list['next']?></a>
		<?}else{?>
			<a href="<?=$this->url('ltd_cym/order_show')?>?oid=<?= $oid?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $director_list['con']?></a>
		<?}?>	
	<?}else{?>
		<a href="<?=$this->url('ltd_cym/order_show')?>?oid=<?= $oid?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $director_list['back']?></a>
	<?}?>
		
	</div>
</div>


<script>
	$(".header").addClass("user-hd");
	var code = "<?= $code?>";
	if(code  != ''){
		$('.page-edit').removeClass('page-edit');
	}
</script>

<script type="text/javascript">
	$(document).on('click','.del',function(){
		var _this = $(this);
		var id = _this.attr('data-id');
		var type = _this.attr('data-type');
		if(!_this.hasClass('disabled')){
			tips('','','0',{
			type: "loading",
			cb: function() {
				$.ajax({
					url : '<?=$this->url("ltd_cym/people_del")?>',
					type : 'POST',
					data : {id:id,type:type},
					dataType : "json",
			        success:function(e){
			        	tips(e.info,'success',2000);
			     		_this.parents('li').remove();    		
			        } 
				})
		   }
		})
			
	}
})

	$('#next').on('click',function(){
		var oid = "<?= $oid?>";
		var code = "<?= $code?>";
		tips('','','0',{
			type: "loading",
			cb: function() {
				$.ajax({
					url : '<?= $this->url('ltd_cym/dir_next')?>',
					type : 'POST',
					data : {oid:oid,code:code},
					dataType : "json",
			        success:function(e){
			     		if (e.state == 0) {
			     			/*code NULL 正常流程*/
			     			if (e.code == 0) {
			     				window.location.href="<?= $this->url('ltd_cym/add_member')?>?oid="+oid+'&code='+code;return false;
			     			}else{
			     			/*code true 去个人中心*/
			     				window.location.href="<?= $this->url('ltd_cym/order_show')?>?oid="+oid;return false;
			     			}
			     		}else{
			     			if (e.code == 1) {
			     				tips(e.info,'warning',1000);
			     				setTimeout(function(){
									window.location.href="<?= $this->url('ltd_cym/order_show')?>?oid="+oid;return false;
				        		},2000)
				        		return false;
			     			}
			     			tips(e.info,'warning',1000);
			     		}
			     		
			        } 
				})
		   }
		})
	})


var code = "<?= $code?>";
if (code == '') {
    history.pushState(null, null, document.URL);
    window.addEventListener('popstate', function () {
		if(confirm("<?= $nobacks?>")){
			window.location.href = '/index.php/<?=$this->languageName?>/weixin';
		}else{
			history.pushState(null, null, document.URL);
		}
	});
}


</script>