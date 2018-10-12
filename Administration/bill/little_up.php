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
					<h3>
						<i class="icon-user"> 报表修改</i>
					</h3>
				</div>
				<div class="box-content nopadding">
				<form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('bill/little_up_ajax')?>" name="form_bill" id="form_bill">
					<div class="control-group category_1">
						<label class="control-label">转账日期</label>
						<div class="controls">
							<input type="text" id="created" name="data[ctime]" value="<?=date('Y-m-d H:m:i',$sbinfo['ctime'])?>" placeholder="入职时间" class="input-medium datepick valid" />
							<span class="help-block error valid" for="publishtime"></span>
    					</div>
					</div>
					<div class="control-group">
						<label class="control-label">收款方</label>
						<div class="controls">
							<input type="text" name="data[collect]" id="username" value="<?=$sbinfo['collect']?>" class="input-xlarge" >
						</div>
					</div>

                    
                    
					<div class="control-group">
						<label class="control-label">转账地址</label>
						<div class="controls">
							<input type="text" name="data[address]" id="username" value="<?=$sbinfo['address']?>" class="input-xlarge" >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">转账数量</label>
						<div class="controls">
							<input type="text" name="data[number]" id="username" value="<?=$sbinfo['number']?>" class="input-xlarge" >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">GAS(ETH)费用</label>
						<div class="controls">
							<input type="text" name="data[gas]" id="username" value="<?=$sbinfo['gas']?>" class="input-xlarge" >
						</div>
					</div>


					<div class="control-group">
						<label class="control-label">摘要</label>
						<div class="controls">
						<textarea type="text" name="data[abstract]" style="resize: none;width: 400px; height: 100px;"><?=$sbinfo['abstract']?></textarea>
							<!-- <input type="text" name="data[abstract]" id="username" value="<?=$sbinfo['abstract']?>" class="input-xlarge" > -->
						</div>
					</div>



					<div class="control-group">
						<label class="control-label">备注</label>
						<div class="controls">
						<textarea type="text" name="data[remark]" style="resize: none;width: 400px; height: 100px;" ><?=$sbinfo['remark']?></textarea>
							<!-- <input type="text" name="data[remark]" id="username" value="<?=$sbinfo['remark']?>" class="input-xlarge" > -->
						</div>
					</div>
					<div class="control-group">
						<label  class="control-label">类型</label>
						<div class="controls">
							<select name="data[type]" id="state" class="input-xlarge">
                            <?foreach ($bill_type1 as $key => $value) {?>
	                            <option value="<?=$key?>"<?if($sbinfo['type']==$key){echo "selected";}?>><?=$value?></option>
                            <?}?>

                            </select>
						</div>
					</div>
					<div class="control-group">
						<label  class="control-label">约束条件</label>
						<div class="controls">
							<select name="data[cons]" id="state" class="input-xlarge">
                            <?foreach ($bill_cons1 as $key => $value) {?>
	                             <option value="<?=$key?>"<?if($sbinfo['cons']==$key){echo "selected";}?>><?=$value?></option>
                            <?}?>

                            </select>
						</div>
					</div>

					<div class="control-group">
							<label  class="control-label">操作钱包</label>
							<div class="controls">
								<select name="data[wallet]" class="input-xlarge"><!--  -->
	                            <?foreach ($bill_wallet1 as $key => $value) {?>
	                                <option value="<?=$key?>"<?if($sbinfo['wallet']==$key){echo "selected";}?>><?=$value?></option>
                                <?}?>
	                            </select>
							</div>
						</div>
					<div class="form-actions">
                        <input type="hidden" name="id" value="<?=$sbinfo['id']?>" />
						<input type="submit" class="btn btn-primary" value="确认修改" />
                        <input type="reset" class="btn btn-primary" value="重置" style="margin-left: 20px;width: 60px;margin-right: 20px;" />
                        <input type="button" id="frist" class="btn btn-primary" value="返回" style="width: 60px;" />
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
        $('#frist').click(function(){
            window.history.back(-1);
            //window.location.href="/index.php/sysadmin/system/admin";
        })
    });

</script>