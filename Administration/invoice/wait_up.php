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
						<i class="icon-user"> 发票审核</i>
					</h3>
				</div>
				<div class="box-content nopadding">
				<form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('invoice/wait_up_ajax')?>"name="form_invoice" id="form_invoice" >
					<div class="control-group">
                        <label class="control-label">业务类型</label>
                        <div class="controls">
                            <input type="text" disabled="disabled" name="data[business_type]" id="username" value="<?
                           foreach ($registerorder_type as $c => $cc) {
                               if($userlist['business_type']==($c+1)){
                                    echo $cc;
                               }
                           }
                           ?>" class="input-xlarge" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">发票类型</label>
                        <div class="controls">
                             <select name="data[type]" class="input-xlarge"><!--  -->
                                <?foreach ($invoicelist_type as $ka => $va) {?>
                                     <option value="<?echo $ka+1;?>"<?if($userlist['type']==($ka+1)){echo "selected";}?>>
                                     <?=$va?>
                                     </option>
                                <?}?>
                            </select>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label">发票抬头</label>
                        <div class="controls">
                            <input type="text"  name="data[title]" id="username" value="<?=$userlist['title']?>" class="input-xlarge" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">金额</label>
                        <div class="controls">
                            <input type="text" disabled="disabled" name="data[title]" id="username" value="<?
                                foreach ($order as $key => $value) {
                                    echo $value['number'];
                                }
                                ?>" class="input-xlarge" >
                        </div>
                    </div>
                    <div class="control-group">
                            <label class="control-label">支付订单编号</label>
                            <div class="controls">
                                <input disabled="disabled" type="text" name="data[ein]"  value="<?
                                foreach ($order as $key => $value) {
                                    echo $value['order_coding'];
                                }
                                ?>" class="input-xlarge" >
                            </div>
                        </div>
                    <div class="control-group">
                        <label class="control-label">税号</label>
                        <div class="controls">
                            <input type="text"  name="data[ein]" id="username" value="<?=$userlist['ein']?>" class="input-xlarge" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人姓名</label>
                        <div class="controls">
                            <input type="text"  name="data[contact_name]" id="username" value="<?=$userlist['contact_name']?>" class="input-xlarge" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人邮箱</label>
                        <div class="controls">
                            <input type="text"  name="data[contact_email]" id="username" value="<?=$userlist['contact_email']?>" class="input-xlarge" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">联系人电话</label>
                        <div class="controls">
                            <input type="text"  name="data[contact_mobile]" id="username" value="<?=$userlist['contact_mobile']?>" class="input-xlarge" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">手机国际代码</label>
                        <div class="controls">
                            <select name="data[mobile_code]" class="input-xlarge">
                                <?foreach ($country_mobilecode as $w => $q) {?>
                                     <option value="<?echo $w+1;?>"<?if($userlist['mobile_code']==($q['code'])){echo "selected";}?>>
                                     <?=$q['code']?><?=$q['country']?>
                                     </option>
                                <?}?>
                            </select>
                            <!-- <input type="text"  name="data[mobile_code]" id="username" value="<?=$userlist['mobile_code']?>" class="input-xlarge" > -->
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">地址</label>
                        <div class="controls">
                            <input type="text"  name="data[address]" id="username" value="<?=$userlist['address']?>" class="input-xlarge" >
                        </div>
                    </div>

					<div class="control-group">
                        <label  class="control-label">发票申请处理</label>
                        <div class="controls">
                            <select name="data[state]" class="input-xlarge">
                                <option value="1" <?if($userlist['state']==1){echo "selected";}?>>暂不处理</option>
                                <option value="2" <?if($userlist['state']==2){echo "selected";}?>>审核通过</option>
                            </select>
                        </div>
                    </div>
                    <div style="display: none;" class="control-group category_1">
                        <label class="control-label">修改时间</label>
                        <div class="controls">
                            <input type="text" type="hidden"  id="created" name="data[change_time]" value="<?=date('Y-m-d H:m:i')?>" placeholder="修改时间" class="input-medium datepick valid" />
                            <span class="help-block error valid" for="publishtime"></span>
                        </div>
                    </div>
					<div class="form-actions">
                        <input type="hidden" name="id" value="<?=$userlist['id']?>" />
						<input type="submit" class="btn btn-primary" value="确认" />
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