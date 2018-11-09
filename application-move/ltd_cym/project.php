<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt40 mt20 plr30 ub ub-ac">
		<b><?= $projects['b']?></b>
	</div>
	<ul class="service-list c66 fz22 plr30 pt40 mt10">
	<?foreach ($service as $ke => $val) { ?>
		<li>
		<label class="c28 ub  ub-ac">
			<input type="checkbox" name="message" value="<?= $val['id']?>" class="form-checkbox mr10" 
				<?if (!empty($project)) {
					foreach ($project as $key => $value) {
						if ($val['id'] == $value) {
							echo 'checked="checked"';
						}
					}
				}
				if($val['yn_choice'] == 1){
					echo 'checked="checked"';
					echo 'disabled="disabled"';
				}?>>
			<div class="tx-l">
				<?= $val['project_'.$this->languageName]?>
				<div class="fz20 c66 pl10 dib">
					￥<b class="c-f76959 fz28"><?= sprintf("%.0f",$val['money_rmb']);?></b>
					<span class=" fz26 C28 wai">
						<?= $val['unit_'.$this->languageName]?>
						<?if($val['yn_choice'] == 1){ echo $projects['yn_choice'];}?>
					</span>
				</div>
			</div>
			
		</label>
		<p class="lh14 mt10">
			<?= $val['msg_'.$this->languageName]?>
		</p>
		</li>
	<?}?>
	</ul>
	<div class="ptb50 mb40 plr30 font-upper">
	<?if (empty($code)) {?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $projects['next']?></a>
	<?}else{?>
		<?if (empty($is_all)) {?>
			<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $projects['con']?></a>
		<?}else{?>
			<a href="<?=$this->url('ltd_cym/order_show')?>?oid=<?= $oid?>" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $projects['back']?></a>
		<?}?>
	<?}?>
	
	</div>
</div>
<script>
	$(".header").addClass("user-hd");
	$('#btn').on('click',function(){
		project = $("input:checkbox[name='message']:checked").map(function(index,elem) {
            return $(elem).val();
        }).get().join(',');
		var oid = "<?= $oid?>";
		var code = "<?= $code?>";
		tips('','','0',{
		type: "loading",
		cb: function() {
			   $.ajax({
	        	url : '<?=$this->url("ltd_cym/project_ajax")?>?oid='+oid+'&code='+code,
				type : 'POST',
				data : {project:project},
				dataType : "json",
		        success:function(e){
			        if(e.state == 0){
		        		tips(e.info,'success',2000);
		        		setTimeout(function(){
		        			if (e.code == '') {
		        				window.location.href="<?=$this->url("ltd_cym/add_director")?>?oid="+e.oid+'&code='+e.code;
		        			}else{
		        				window.location.href="<?=$this->url("ltd_cym/order_show")?>?oid="+e.oid;
		        			}
		        		},2000);return false;
		        	}
		        	tips(e.info,'warning',1000);
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