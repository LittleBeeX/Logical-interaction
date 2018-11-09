<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt40 mt20 plr30 ub ub-ac">
		<b><?= $uploads['b1']?><?= $people['name']?><?= $uploads['b2']?></b>
	</div>
	<dl class="c66 fz24 p30 lh16">
	<?if (empty($code)) {?>
		<?= $uploads['dl']?>
	<?}else{?>
		<div class="c-f76959 plr30 fz24 lh16 mt24">
			<?if ($people['audit_img_state'] == 3) {
				echo $people['audit_img_note'];
			}?>
		</div>
	<?}?>

	</dl>
</div>
<ul class="upload-box pt40 plr30 c-0070ba">
	<li class="ub mb30">
		<label class="upload-btn">
			<div class="upload-finished ub ub-pac p10">
				<img src=<?if ($people['passport'] == '') {echo "/public/assets/weixin/images/hzzm.png";}else{echo $people['passport'].'?'.time();}?> alt="" />
			</div>
			<div class="upload-in ub ub-pac ub-ver">
				<input type="file" name="passport" id="passport" value="<?= $people['passport']?>" accept="image/png, image/jpeg, image/gif, image/jpg" />
				<b class="fw-b fz60 db">+</b>
				<p class="fz24"><?= $uploads['passport']?></p>
			</div>
		</label>
	</li>
	<li class="ub mb30">
		<label class="upload-btn">
			<div class="upload-finished ub ub-pac p10">
				<img src=<?if ($people['card_a'] == '') {echo "/public/assets/weixin/images/sfzzm.png";}else{echo $people['card_a'].'?'.time();}?> alt="" />
			</div>
			<div class="upload-in ub ub-pac ub-ver">
				<input type="file" name="card_a" id="card_a" value="<?= $people['card_a']?>" accept="image/png, image/jpeg, image/gif, image/jpg" />
				<b class="fw-b fz60 db">+</b>
				<p class="fz24"><?= $uploads['card_a']?></p>
			</div>
		</label>
	</li>
	<li class="ub mb30">
		<label class="upload-btn">
			<div class="upload-finished ub ub-pac p10">
				<img src=<?if ($people['card_b'] == '') {echo "/public/assets/weixin/images/sfzfm.png";}else{echo $people['card_b'].'?'.time();}?> alt="" />
			</div>
			<div class="upload-in ub ub-pac ub-ver">
				<input type="file" name="card_b" id="card_b" value="<?= $people['card_b']?>" accept="image/png, image/jpeg, image/gif, image/jpg" />
				<b class="fw-b fz60 db">+</b>
				<p class="fz24"><?= $uploads['card_b']?></p>
			</div>
		</label>
	</li>
</ul>
<div class="ptb50 mb40 plr30 font-upper">
<?if (empty($is_pay)) {?>
	<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $uploads['btn']?></a>
<?}else{?>
	<a href="javascript:history.back(-1)" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $uploads['back']?></a>
<?}?>
	
</div>


<script>
	$(".header").addClass("user-hd");
	$(".upload-in input[type=file]").change(function(e){
		var file=$(this).get(0).files[0]
		var apendobj=$(this).parents(".upload-in").siblings(".upload-finished")
		imgView(file,apendobj)
	});
	var care_a = "<?= $people['card_a']?>";
	var care_b = "<?= $people['card_b']?>";
	var passport = "<?= $people['passport']?>";
	if (card_a != '' && card_b != '' && passport != '') {
    	$('.upload-btn').addClass("upload-changed");
    }
</script>


<script type="text/javascript">
	$('#btn').on('click',function(){
		var formData = new FormData();
		var id = "<?= $id?>";
		var code = "<?= $code?>";
		var oid = "<?= $people['oid']?>";
		formData.append("passport", $('#passport').get(0).files[0]);
		formData.append("card_a", $('#card_a').get(0).files[0]);
		formData.append("card_b", $('#card_b').get(0).files[0]);
		formData.append("id", id);
		tips('上传中','','0',{
			type: "pie",
			cb: function() {
				$.ajax({
		            url:'<?= $this->url('ltd_sg/upload_ajax')?>',
		            type:'POST',
		            data:formData,
		            cache: false,
		            contentType: false,    //不可缺
		            processData: false,    //不可缺
		            dataType:'json',
		            xhr:function(){//获取上传进度            
		                var myXhr = $.ajaxSettings.xhr();
		                if(myXhr.upload){
		                    myXhr.upload.addEventListener('progress',function(e){
		                    	var loaded = e.loaded;
		                        var total = e.total;
		                        var percent = (100*loaded/total).toFixed(0);
	                        	$(".pie#pie").circleChart({
						           	value:percent,
						           	onDraw: function(el, circle) {
						                circle.text(percent + "%");
						            }
						        });
		                    })
		                }
		                return myXhr;
					},
		            success:function(e){
	            		tispAotuHide();	
		                if (e.state == 0) {
							tips(e.info,'success',2000);
			      			setTimeout(function(){
			        			window.location.href="<?=$this->url("ltd_sg/dir_mem_list")?>?oid="+oid+'&code='+code;
			        		},2000)
			        		return false;
		                }
		                tips(e.info,'warning',1000);
		            }
		        });
		   }
		})
		
	})

</script>