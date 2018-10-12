<link rel="stylesheet" href="/public/plugins/datetimepicker/datetimepicker.css">
<script src="/public/plugins/datetimepicker/datetimepicker.js"></script>
<script src="/public/plugins/datetimepicker/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<div id="main">
<div class="container-fluid">
	<div class="page-header">
		<div class="pull-left">
			<h1><?=$this->menu?></h1>
		</div>
		<div class="pull-right">
			<ul class="stats">
				<li class='lightred'>
					<i class="icon-calendar"></i>
					<div class="details">
						<span class="big"></span>
						<span></span>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="breadcrumbs">
		<ul>
			<li>
				<a href="javascript:();"><?=$headname?></a>
				<i class="icon-angle-right"></i>
			</li>
			<li>
				<a href="javascript:();"><?=$this->title?></a>
				<i class="icon-angle-right"></i>
			</li>
			<li>
				<a href="javascript:();"><?=$this->menu?></a>
			</li>
		</ul>
		<div class="close-bread">
			<a href="javascript:();"><i class="icon-remove"></i></a>
		</div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<div class="box box-color box-bordered">
				<div class="box-title">
					<h3><i class="icon-user"></i>添加报表</h3>
				</div>
				<div class="box-content nopadding">
					<form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('bill/little_in_ajax')?>" name="form_bill" id="form_bill">
						<div class="control-group category_1">
							<label class="control-label">日期</label>
							<div class="controls">
								<input type="text" id="created" name="data[ctime]" placeholder="转账日期"  value="<?=date('Y-m-d H:m:i')?>"  class="input-medium datepick valid" />
								<span class="help-block error valid" for="publishtime"></span>
        					</div>
						</div>
						<div class="control-group">
							<label  class="control-label">收款方</label>
							<div class="controls">
								<input name="data[collect]" type="text"  value="" placeholder="请输入收款方名称" class="input-xlarge" >
							</div>
						</div>
						<div class="control-group">
							<label  class="control-label">转账地址</label>
							<div class="controls">
								<input name="data[address]" type="text"  value="" placeholder="请输入转账地址" class="input-xlarge" >
							</div>
						</div>
						<div class="control-group">
							<label  class="control-label">转账数量</label>
							<div class="controls">
								<input name="data[number]" type="text"  value="" placeholder="请输入转账数量" class="input-xlarge" >
							</div>	
						</div>
						<div class="control-group">
							<label  class="control-label">GAS(ETH)费用</label>
							<div class="controls">
								<input name="data[gas]" type="text"  value="" placeholder="请输入GAS(ETH)费用" class="input-xlarge" >
							</div>
						</div>
						<div class="control-group">
							<label  class="control-label">摘要</label>
							<div class="controls">
							<textarea type="text" name="data[abstract]" style="resize: none;width: 400px; height: 100px;"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label  class="control-label">备注</label>
							<div class="controls">
							<textarea type="text" name="data[remark]" style="resize: none;width: 400px; height: 100px;" ></textarea>
							</div>
						</div>
						
                       
	                    <div class="control-group">
							<label  class="control-label">类型</label>
							<div class="controls">
								<select name="data[type]" class="input-xlarge">
								 <?foreach ($bill_type1 as $key => $value) {?>
	                                <option value="<?=$key?>"><?=$value?></option>
                                 <?}?>
	                            </select>
							</div>
						</div>
						<div class="control-group">
							<label  class="control-label">约束条件</label>
							<div class="controls">
								<select name="data[cons]" class="input-xlarge"><!--  -->
	                            <?foreach ($bill_cons1 as $key => $value) {?>
	                                <option value="<?=$key?>"><?=$value?></option>
                                 <?}?>
	                            </select>
							</div>
						</div>
						<div class="control-group">
							<label  class="control-label">操作钱包</label>
							<div class="controls">
								<select name="data[wallet]" class="input-xlarge"><!--  -->
	                            <?foreach ($bill_wallet1 as $key => $value) {?>
	                                <option value="<?=$key?>"><?=$value?></option>
                                 <?}?>
	                            </select>
							</div>
						</div>

						
						<div class="form-actions">
							<input name="data[oper]" type="hidden"  class="input-xlarge" >
							<input type="submit" class="btn btn-primary" value="确认添加" />
	                        <input type="reset" class="btn btn-primary" value="重置" style="width: 60px;margin: 0px 20px;" />
	                        <input type="button" id="first" class="btn btn-primary" value="返回" style="width: 60px;" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script>
    $(document).ready(function(){
        $('#first').click(function(){
            window.history.back(-1);
            //window.location.href="/index.php/sysadmin/system/admin";
        })
    });
</script>