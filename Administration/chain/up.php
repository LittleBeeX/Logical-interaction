<style type="text/css">
    li{
        list-style: none;
    }
    .controls .inputa{
        margin-bottom: 6px;
        margin-right: 6px;
    }
</style>
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
        
            <div class="box">
                <div class="box-content">
                    <ul class="tiles tiles-center nomargin">
                        <li class="lightgrey">
                        <?if($r1!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r1;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("chain/input")?>"><span><i class="icon-book"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">填写信息</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="lightred">
                        <?if($r2!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r2;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("chain/stay")?>"><span><i class="icon-print"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">待审列表</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="blue">
                        <?if($r3!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r3;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("chain/fail")?>"><span><i class="icon-bookmark"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审核失败</font></font></span></a>
                        </li>
                        &nbsp;&nbsp;<i class="icon-arrow-right"></i>
                        <li class="brown">
                        <?if($r4!=0){?>
                            <span class="label label-info"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;"><?=$r4;?></font></font></span>
                        <?}?>
                            <a href="<?=$this->url("chain/success")?>"><span><i class="icon-exchange"></i></span><span class="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">审核成功</font></font></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box box-color box-bordered">
                <div class="box-title">
                    <h3>
                        <i class="icon-user"></i>
                        成员信息详情
                    </h3>
                    <div class="actions">
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                <form class="form-horizontal form-bordered form-validate" method="POST" action="/index.php/cn/sysadmin/chain/up_ajax" name="form" id="form" enctype="multipart/form-data" novalidate="novalidate">
                    <div class="control-group">
                        <label class="control-label">公司名称</label>
                        <div class="controls">
                            <input type="text" name="company_name" value="<?=$info['company_name']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">唯一标识</label>
                        <div class="controls">
                            <input type="text" name="only" value="<?=$info['only']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">姓</label>
                        <div class="controls">
                            <input type="text" name="surname" value="<?=$info['surname']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">名</label>
                        <div class="controls">
                            <input type="text" name="name" value="<?=$info['name']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">性别</label>
                        <div class="controls">
                            <input type="text" name="sex" value="<?=$sex[$info['sex']]?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">国籍</label>
                        <div class="controls">
                            <input type="text" name="nationality" value="<?=$phone_codes[$info['nationality']]['country']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">出生日期</label>
                        <div class="controls">
                            <input type="text" name="birthtime" value="<?=date('Y-m-d',$info['birthtime'])?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">公司职称</label>
                        <div class="controls">
                            <input type="text" name="position" value="<?=$position[$info['position']]?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">钱包地址</label>
                        <div class="controls">
                            <input type="text" name="address" value="<?=$info['address']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">持有TOKEN数</label>
                        <div class="controls">
                            <input type="text" name="token_number" value="<?=$info['token_number']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">股权占比（%）</label>
                        <div class="controls">
                            <input type="text" name="token_proportion" value="<?=$info['token_proportion']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">护照编号</label>
                        <div class="controls">
                            <input type="text" name="passports" value="<?=$info['passports']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">证件认证</label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?=$info['picture']?>"></div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">信息状态</label>
                        <div class="controls">
                            <select name="state" class="input-xlarge valid">
                            <?foreach ($state as $k_state => $v_state) {?>
                                <option value="<?=$k_state?>" <?if($k_state == $info['state']){?>selected<?}?> ><?=$v_state?></option>
                            <?}?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">合约地址</label>
                        <div class="controls">
                        <?if(!empty($info['contract'])){?>
                            <input type="text" name="contract" value="<?=$info['contract']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                        <?}else{?>
                            请先到公司信息里生成合约地址！
                        <?}?>
                        </div>
                    </div>
                    
                    <?if($info['state']==2 && !empty($info['contract'])){?>
                        <div class="control-group">
                            <label class="control-label">记录地址</label>
                            <div class="controls">
                            <?if(!empty($info['record'])){?>
                                <input type="text" name="record" value="<?=$info['record']?>"  class="input-xlarge" data-rule-required="true" disabled="disabled"/>
                            <?}else{?>
                                <input type="button" id="record" class="btn btn-primary" value="记录信息">
                            <?}?>
                            </div>
                        </div>
                    <?}?>

                <?if($info['state']>0){?>
                    <div class="control-group">
                        <label class="control-label">审核备注</label>
                        <div class="controls">
                            <textarea style="resize: none;height: 120px;width: 360px;" name="remarks" class="input-xlarge" disabled="disabled"><?=$info['remarks']?></textarea>
                        </div>
                    </div>
                <?}?>
                <?if($info['state']==2){?>
                    <div class="control-group">
                        <label class="control-label">头像</label>
                        <div class="controls">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?=$info['portrait']?>"></div>
                            </div>
                        </div>
                    </div>
                <?}?>
                    
                    <div class="form-actions">
                        <input type="hidden" name="id" value="<?=$info['id']?>">
                    <?if($info['state']==1 || $info['state']==3){?>
                        <input type="submit" id="btn" class="btn btn-primary" value="确认修改">
                        <input type="reset" class="btn btn-primary" value="重置" style="margin-left: 20px;width: 60px;margin-right: 20px;">
                    <?}?>
                        <input type="button" id="frist" class="btn btn-primary" value="返回" style="width: 60px;">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<script src="/public/plugins/web3/web3_1.0.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		var user_abi = [{"constant":false,"inputs":[{"name":"_userA","type":"address"}],"name":"addKycList","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"}],"name":"approve","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_types","type":"uint256"},{"name":"_myAddress","type":"address"},{"name":"_toAddress","type":"address"},{"name":"_numbers","type":"uint256"},{"name":"_content","type":"string"}],"name":"addVoteList","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_from","type":"address"},{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"INITIAL_SUPPLY","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_userA","type":"address"}],"name":"isKyc","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_amount","type":"uint256"}],"name":"mint","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"_transfer","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"address"}],"name":"frozenAccount","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_target","type":"address"},{"name":"_freeze","type":"bool"}],"name":"freeze","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"","type":"address"}],"name":"frozenTimestamp","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_from","type":"address"},{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"_transferFrom","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"},{"name":"_spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"code","type":"uint256"},{"name":"_isVote","type":"bool"}],"name":"setVoteList","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"inputs":[{"name":"_name","type":"string"},{"name":"_symbol","type":"string"},{"name":"_totalSupply","type":"uint256"},{"name":"_support","type":"uint8"},{"name":"_quorum","type":"uint8"},{"name":"_duration","type":"uint8"}],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"payable":true,"stateMutability":"payable","type":"fallback"},{"anonymous":false,"inputs":[{"indexed":false,"name":"myAddress","type":"address"},{"indexed":true,"name":"createTime","type":"uint256"},{"indexed":true,"name":"content","type":"string"},{"indexed":true,"name":"numbers","type":"uint256"},{"indexed":false,"name":"codes","type":"uint256"}],"name":"createVote","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"amount","type":"uint256"}],"name":"Mint","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"}],"name":"OwnershipRenounced","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"previousOwner","type":"address"},{"indexed":true,"name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"}]
		var user_address = "<?=$info['contract']?>";
		var toAddress = "<?=$info['address']?>"; 
		var web3js,myAddress;
		if (typeof web3 !== 'undefined') {
	      	web3js = new Web3(web3.currentProvider);
			var userContract = new web3js.eth.Contract(user_abi, user_address);
	    } else {
			alert('请登录metamask钱包')
	    }
        $('#record').click(function(){
        	web3js.eth.getCoinbase().then(result => {
				myAddress = result;
				userContract.methods.addKycList(
					toAddress
				).send({
	                from: myAddress,
	            }).on('transactionHash',function( receipt){
	                var record = receipt;
	                $.ajax({
	                    url :"record_ajax",
	                    type :"POST",
	                    data :{"record":record,"id":<?=$info['id']?>},
	                    dataType : "json",
	                    success:function(e){
	                        alert(e.info);
	                        if(e.state==0){
	                            window.location.reload();
	                        }
	                    } 
	                });
	            })
			});	
        })

        $('#frist').click(function(){
            window.history.back(-1);
        })
    });
</script>