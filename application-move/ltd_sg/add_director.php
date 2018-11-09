<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?= $add_director['h1']?></b>
	</div>
</div>
<?if (empty($code)) {?>
	<div class="c66 plr30 fz24 lh16 mt24">
		<?= $add_director['div']?>
		<?= $add_director['is_pass']?>
	</div>
<?}else{?>
	<div class="c-f76959 plr30 fz24 lh16 mt24">
		<?
		if ($people['audit_state'] == 3) {
			echo $people['audit_note'];
		}
		?>
	</div>
<?}?>
<div class="apply-toggle-box plr30 pt10">

<div class="apply-toggle-tit">
<b class="fw-b"><?= $add_director['div1']['b']?></b>
	<?if (empty($is_pay)) {?>
	<label class="apply-file-btn  fz22 ptb5 plr10 ml30 c-0070ba bd-0070ba"><?= $add_director['div1']['labe']?>
		<input type="file" class="upload" name="path" id="card_a" value="" accept="image/png, image/jpeg, image/gif, image/jpg"/>
	</label>
	<?}?>
</div>

	
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 moren">
			<li>
				<label>
					<b><?= $add_director['div1']['b1']?></b>
					<input type="text" reg="nomarl" id="passport_type" value="<?= $people['passport_type']?>" />
				</label>
				<p><span><?= $add_director['div1']['p1']?></span></p>
			</li>
			<li>
				<label>
					<b><?= $add_director['div1']['b2']?></b>
					<input type="text" reg="nomarl" id="country_code" value="<?= $people['country_code']?>"/>
				</label>
				<p><span><?= $add_director['div1']['p2']?></span></p>
			</li>
			<li>
				<label>
					<b><?= $add_director['div1']['b3']?></b>
					<input type="text" reg="nomarl" id="passport_no" value="<?= $people['passport_no']?>"/>
				</label>
				<p><span><?= $add_director['div1']['p3']?></span></p>
			</li>
			<li>
				<label>
					<b><?= $add_director['div1']['b4']?></b>
					<input type="text" reg="nomarl" id="name" value="<?= $people['name']?>"/>
				</label>
				<p><span><?= $add_director['div1']['p4']?></span></p>
			</li>

			<li class="bb ub ub-ac">
				<div class="db"><?= $add_director['div1']['b5']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="sex" data-value="1">
							<?if ($people['sex'] == 1) {
								echo  $add_director['div1']['p5-1'];
							}else if($people['sex'] == 2){
								echo  $add_director['div1']['p5-2'];
							}?>
						</div>
						<div class="select-list">
							<div class="select-item ub-te plr30 ub-ac ub" data-value="1"><?= $add_director['div1']['p5-1']?></div>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="2"><?= $add_director['div1']['p5-2']?></div>
						</div>
					</div>
				</div>
			</li>

			<li class="bb ub ub-ac">
				<div class="db"><?= $add_director['div1']['b6']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="nationality" data-value="<?= $phone_codes[1]['country']?>">
							<div class="country" data-value="1">
								<?if (empty($id)) {
									echo $phone_codes[1]['country'];
								}else{
									echo $people['nationality'];
								}?>
							</div>
							<div class="ub-f1 tx-r">
								<?if (empty($id)) {
									echo $phone_codes[1]['en'];
								}?>
							</div>
						</div>
						<div class="select-list">
						<?foreach ($phone_codes as $key => $value) {?>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="<?=$value['country']?>">
								<div class="country" data-value="1"><?= $value['country']?></div>
								<div class="ub-f1 tx-r"><?=$value['en']?></div>
							</div>
						<?}?>
						</div>
					</div>
				</div>
			</li>
			<li>
				<label>
					<b><?= $add_director['div1']['b7']?></b>
					<input type="text" reg="nomarl" id="date_birth" value="<? if(!empty($id)){ echo date('Y-m-d',$people['date_birth']);}?>" onclick="WdatePicker({dateFmt:'yyyy-MM-dd'})"  class="input-medium datepick valid Wdate" />
				</label>
				<p><span><?= $add_director['div1']['p7']?></span></p>
			</li>
			<li>
				<label>
					<b><?= $add_director['div1']['b8']?></b>
					<input type="text" reg="nomarl" id="place_birth" value="<?= $people['place_birth']?>">
				</label>
				<p><span><?= $add_director['div1']['p8']?></span></p>
			</li>
			<li>
				<label>
					<b><?= $add_director['div1']['b9']?></b>
					<input type="text" reg="nomarl" id="date_issue" value="<? if(!empty($id)){ echo date('Y-m-d',$people['date_issue']);}?>" onclick="WdatePicker({dateFmt:'yyyy-MM-dd'})"  class="input-medium datepick valid Wdate" />
				</label>
				<p><span><?= $add_director['div1']['p9']?></span></p>
			</li>
			<li>
				<label>
					<b><?= $add_director['div1']['b10']?></b>
					<input type="text" reg="nomarl" id="place_issue" value="<?= $people['place_issue']?>"/>
				</label>
				<p><span><?= $add_director['div1']['p10']?></span></p>
			</li>
		</ul>
	</div>
</div>
<div class="apply-toggle-box plr30 pt10">
	<div class="pt10">
		<b class="fw-b fz28 c28"><?= $add_director['div2']['b']?></b>
	</div>
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 moren">
			<li>
				<label>
					<b><?= $add_director['div2']['b1']?></b>
					<input type="text" reg="nomarl" id="address" value="<?= $people['address']?>"/>
				</label>
				<p><span><?= $add_director['div2']['p1']?></span></p>
			</li>
			<li>
				<label>
					<b><?= $add_director['div2']['b2']?></b>
					<input type="text" reg="email" id="email" value="<?= $people['email']?>">
				</label>
				<p><span><?= $add_director['div2']['p2']?></span></p>
			</li>
			<li>
				<label>
					<b><?= $add_director['div2']['b3']?></b>
					<input type="text" reg="number" maxlength="16" id="mobile" value="<?= $people['mobile']?>"/>
				</label>
				<p><span><?= $add_director['div2']['p3']?></span></p>
			</li>
			<li>
				<label>
					<b><?= $add_director['div2']['b4']?></b>
					<input type="text" id="wechat" reg="" id="wechat" value="<?= $people['wechat']?>"/>
				</label>
				<p><span><?= $add_director['div2']['p4']?></span></p>
			</li>
			<li class="bb ub ub-ac">
				<div class="db"><?= $add_director['div2']['b5']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="type" data-value="<?= $people['type']?>">
							<?if ($people['type'] == 3) {
								echo $add_director['div2']['p5-1'];
							}else if($people['type'] == 1){
								echo $add_director['div2']['p5-2'];
							}?>
						</div>
						<div class="select-list">
							<div class="select-item ub-te plr30 ub-ac ub" data-value="3"><?= $add_director['div2']['p5-1']?></div>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="1"><?= $add_director['div2']['p5-2']?></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</div>

<div class="ptb50 mb40 plr30 font-upper">
<?if (empty($is_pay)) {?>
	<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $add_director['button']?></a>
<?}else{?>
	<?if (!empty($oid)) {?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $add_director['button']?></a>
	<?}else{?>
		<a href="javascript:history.back(-1)" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $add_director['back']?></a>
	<?}?>	
<?}?>
	
</div>


<script>
	$(".header").addClass("user-hd");
	var id = "<?= $id?>";
	if (id != '') {
		$('.moren li').addClass("success")
	}
	//展开收缩
	$(".apply-toggle-tit b").on("click", function() {
		$(this).parent().toggleClass("active");
		$(this).parent().siblings(".apply-toggle-main").stop().slideToggle(600)
	});
	$(".upload-in input[type=file]").change(function(e){
		var file=$(this).get(0).files[0]
		var apendobj=$(this).parents(".upload-in").siblings(".upload-finished")
		imgView(file,apendobj)
		
	});
</script>

<script type="text/javascript">


	$('#pass').on('click',function(){
		var oid = "<?= $oid?>";
		var code = "<?= $code?>";
		tips('','','0',{
			type: "loading",
			cb: function() {
				$.ajax({
					url : '<?=$this->url("ltd_sg/dir_pass")?>',
					type : 'POST',
					data : {oid:oid,code:code},
					dataType : "json",
			        success:function(e){
			        	if (e.state == 0) {
							window.location.href="<?=$this->url("ltd_sg/director_list")?>?oid="+oid+"&code="+code;
			     			return false;
			        	}
			      		tips(e.info,'warning',1000);
			        } 
				})
		   }
		})
	})



	$('#btn').on('click',function(){
		var id = "<?= $id?>";
		var oid = "<?= $oid?>";
		var code = "<?= $code?>";
		var is_pay = "<?= $is_pay?>";
		var passport_type = $('#passport_type').val();
		var country_code = $('#country_code').val();
		var passport_no = $('#passport_no').val();
		var name = $('#name').val();
		var sex = $('#sex').attr('data-value');
		var nationality = $('#nationality').attr('data-value');
		var date_birth = $('#date_birth').val();
		var place_birth = $('#place_birth').val();
		var date_issue = $('#date_issue').val();
		var place_issue = $('#place_issue').val();
		var address = $('#address').val();
		var email = $('#email').val();
		var mobile = $('#mobile').val();
		var type = $('#type').attr('data-value');
		if (type == 0) {
			type = 1;
		}
		var wechat = $('#wechat').val();
		var data = {oid:oid,passport_type:passport_type,country_code:country_code,passport_no:passport_no,name:name,sex:sex,nationality:nationality,date_birth:date_birth,place_birth:place_birth,date_issue:date_issue,place_issue:place_issue,address:address,email:email,mobile:mobile,type:type,wechat:wechat,code:code,id:id};
		tips('','','0',{
			type: "loading",
			cb: function() {
				$.ajax({
					url : '<?=$this->url("ltd_sg/people_ajax")?>',
					type : 'POST',
					data : data,
					dataType : "json",
			        success:function(e){
			        	if (e.state == 0) {
			      			tips(e.info,'success',2000);
			        		setTimeout(function(){
								window.location.href="<?=$this->url("ltd_sg/director_list")?>?oid="+e.oid+"&code="+e.code+'&is_pay='+is_pay;
			        		},2000)
			        		return false;
			        	}
			      		tips(e.info,'warning',1000);
			        } 
				})
		   }
		})
	})


	


	$(".upload").change(function(){
		var formData = new FormData();
		var path = $("input[name^='path']").val();
		formData.append("card_a", $('#card_a').get(0).files[0]);
		formData.append('path',path);
		tips('','','0',{
			type: "loading",
			cb: function() {
				$.ajax({
		            url:'<?= $this->url('ltd_sg/hz_upload_ajax')?>',
		            type:'POST',
		            data:formData,
		            cache: false,
		            contentType: false,    //不可缺
		            processData: false,    //不可缺
		            dataType:'json',
		            success:function(e){
		            $('.circlebg').click();
		               if (e.state == 0) {
		                	$('#passport_type').val(e.info.passport_type);
		                	$('#country_code').val(e.info.country_code);
		                	$('#passport_no').val(e.info.passport_no);
		                	$('#name').val(e.info.name);
		                	$('#date_birth').val(e.info.date_birth);
		                	$('#place_birth').val(e.info.place_birth);
		                	$('#date_issue').val(e.info.date_issue);
		                	$('#place_issue').val(e.info.place_issue);
		                	// $('#sex').text(e.info.sex);
		                	$('.moren li').addClass("success")
		               }else{
		               		tips("$gdds['button2']",'error',3000);
		               }
		            }
		        });
		   }
		})
	})



var noback = "<?= $noback?>";
if (noback == '') {
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