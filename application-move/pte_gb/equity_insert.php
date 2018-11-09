<div class="pt110">
	<div class="littlebee-tit fz28 c28 pt30 plr30 ub ub-ac">
		<b class="fw-b"><?= $equity_insert['text1']?></b>
	</div>
</div>
<div class="c66 plr30 fz24 lh16 mt24">
<?= $equity_insert['text2']?>
</div>
<div class="plr30 pt10">
	<div class="apply-toggle-main">
		<ul class="apply-reg-list fz26 c66 pt40 mt20">
			<li class="bb ub ub-ac">
				<div class="db"><?= $equity_insert['huobi']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="currency_type" data-value="<?=$equity['currency_type']?>"><?=$equity['currency_type']?></div>
						<div class="select-list">
						<?php foreach ($shaer_moneys as $key => $val): ?>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="<?= $val?>"><?= $val?></div>
						<?php endforeach ?>
						</div>
					</div>
				</div>
			</li>
			<li class="bb ub ub-ac">
				<div class="db"><?= $equity_insert['shares_type']?></div>
				<div class="ub-f1 ml30">
					<div class="selectbox">
						<div class="select-txt ub ub-ac" id="shares_type" data-value="<?=$equity['shares_type']?>"><?=$equity['shares_type']?></div>
						<div class="select-list">
						<?php foreach ($shares_type as $key => $val): ?>
							<div class="select-item ub-te plr30 ub-ac ub" data-value="<?= $val?>"><?= $val?></div>
						<?php endforeach ?>
						</div>
					</div>
				</div>
			</li>
			
			<li>
				<label>
					<b><?= $equity_insert['number']?></b>
					<input type="text" reg="number" id="number" value="<?=$equity['number']?>" />
				</label>
				<p><span><?= $equity_insert['number_span']?></span></p>
			</li>
			<li>
				<label>
					<b><?= $equity_insert['facevalue']?></b>
					<input type="text" reg="number" id="facevalue" value="<?=$equity['facevalue']?>"/>
				</label>
				<p><span><?= $equity_insert['facevalue_span']?></span></p>
			</li>
		</ul>
		<div class="apply-list-textarea">
			<p class="fz26 c66"><?= $equity_insert['texteare']?></p>
			<textarea rows="10" id="details" placeholder="Each share has full rights in the company with respect to voting, dividends and distributions."><?=$equity['details']?></textarea>
		</div>
	</div>
</div>

<div class="ptb50 mb40 plr30 font-upper">
<?if(empty($code)){?>
	<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?= $equity_insert['next']?></a>
<?}?>
<?if(!empty($code)){?>
	<?if(!empty($id)){?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?= $equity_insert['submit1']?></a>
	<?}else if(empty($id)){?>
		<a href="javascript:void(0)" id="btn" class="ub ub-pac bg0070ba fz28 cff lh1 ptb40 mb40 mt30"><?= $equity_insert['submit1']?></a>
	<?}?>
<?}?>
</div>

<script type="text/javascript">
var iid ="<?=$id?>";
if(iid!=''){
	$('.apply-reg-list li').addClass('success');
}
$(".header").addClass("user-hd");
$('#btn').click(function(){
	var oid = "<?= $oid?>";
	var code = "<?= $code?>";
	var id = "<?= $id?>";
	var currency_type = $('#currency_type').attr('data-value');
	var shares_type = $('#shares_type').attr('data-value');
	var number = $('#number').val();
	var facevalue = $('#facevalue').val();
	var details = $('#details').val();
	var data = {
			id:id,
			oid:oid,
			code:code,
			currency_type:currency_type,
			shares_type:shares_type,
			number:number,
			facevalue:facevalue,
			details:details,
		}
		tips('','','0',{
		type: "loading",
		cb: function() {
	$.ajax({
        url:'<?=$this->url("pte_gb/equity_insert_ajax")?>',
        type:'post',
        data:data,
        dataType:'json',
        success:function(e){
        	if(e.state == 0) {
        		tips(e.info,'success',2000);
        		setTimeout(function(){
        			 window.location.href=e.url;
        		},2000)
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


</script>