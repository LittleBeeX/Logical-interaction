<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?= $invoice['b']?></b>
	</div>
</div>
<div class="c-f76959 plr30 fz24 lh16 mt24">
	<?= $invoice['div']?>
</div>
<ul class="apply-reg-list fz26 c66 plr30 pt40">
	<li class="bb  ub ub-ac">
		<div class="db"><?= $invoice['sel_order']?></div>
		<div class="ub-f1 ml30">
			<div class="selectbox">
			<div class="select-txt ub ub-ac poid" data-value=""></div>
			<div class="select-list">
				<?foreach ($register_list as $key => $val){ ?>	
				<div class="ub select-item ub-te plr30 ub-ac hahah" id='number' data-number="<?= sprintf("%.0f",$val['number']);?>" data-value="<?= $val['id']?>">
						<div class="country"><?= str_replace('@', '&nbsp;', $val['name'])?></div>
						<div class="ub-f1 tx-r"><?= date('Y-m-d',$val['create_time'])?></div>
				</div>
			<?}?>
			</div>
		</div>
		</div>
	</li>
	
	<li class="bb">
		<div class="selectbox">
			<div class="select-txt ub ub-ac" id="type" data-value=""><?= $invoice['invoice_type']?></div>
			<div class="select-list">
				<div class="select-item ub-te plr30 ub-ac ub" data-value="1"><?= $invoice['type_sel1']?></div>
				<div class="select-item ub-te plr30 ub-ac ub" data-value="2"><?= $invoice['type_sel2']?></div>
			</div>
		</div>
	</li>
	<li id="num">
		<label>
			<b><?= $invoice['invoice_number']?></b>
			<input type="text" reg="money" class="number" disabled />
		</label>
		<p><span><?= $invoice['number_span']?></span></p>
	</li>
	<li>
		<label>
			<b><?= $invoice['invoice_title']?></b>
			<input type="text" reg="nomarl" id="title" />
		</label>
		<p><span><?= $invoice['title_span']?></span></p>
	</li>
	<li>
		<label>
			<b><?= $invoice['invoice_ein']?></b>
			<input type="text" reg="nomarl" id="ein" />
		</label>
		<p><span><?= $invoice['ein_span']?></span></p>
	</li>

</ul>
<div class="ptb50 mb40 plr30">
	<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz26 cff lh1 ptb40 mb40 mt30"><?= $invoice['btn']?></a>
</div>
<script>
	$(".header").addClass("user-hd");
	//表单验证
	$(".apply-reg-list input").on("focus", function() {
		$(this).parents("li").addClass("focus")
	});
	$(".apply-reg-list input").on("blur", function() {
		var _this = $(this)
		if(RegRules[_this.attr("reg")].test(_this.val())) {
			_this.parents("li").addClass("success").removeClass("error").removeClass("focus");
		} else {
			_this.parents("li").addClass("error").removeClass("focus").removeClass("success");
		}
	});
</script>

<script>
	$(document).on("click",'#number',function(){
		var number = $(this).attr('data-number');
		$(".number").val(number);
		$("#num").removeClass();
		$("#num").addClass('success');
	});

	$('#btn').on('click',function(){
		var poid = $('.poid').attr('data-value');
		var type = $('#type').attr('data-value');
		var number = $('.number').val();
		var title = $('#title').val();
		var ein = $('#ein').val();
		data = {id:poid,type:type,number:number,title:title,ein:ein};
		tips('','','0',{
			type: "loading",
			cb: function() {
				$.ajax({
				url : '<?=$this->url("user/personal_invoice_ajax")?>',
				type : 'POST',
				data : data,
				dataType : "json",
		        success:function(e){
		        	if (e.state == 0) {
		        		tips(e.info,'success',2000);
		        		setTimeout(function(){
							window.location.href="<?= $this->url('user/main')?>";return false;
		        		},2000);
		        		return false;
		        	}
		        	tips(e.info,'warning',2000);
		        } 
			})
		   }
		})
	})

</script>


