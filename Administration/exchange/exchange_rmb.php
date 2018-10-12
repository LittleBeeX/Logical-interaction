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
                        <i class="icon-th-list"></i>
                        人民币兑换其他币种汇率列表
                    </h3>
                    <div class="actions">
                        <a rel="tooltip" data-original-title="新增" href="#aaa" class="btn btn-danger" data-toggle="modal">
                            <i class="icon-plus"></i>新增
                        </a>
                        <a href="#" class="btn btn-mini content-slideUp"><i class="icon-angle-down"></i></a>
                    </div>
                </div>
                <div class="box-content nopadding">
                    <table class="table table-hover table-nomargin dataTable table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">序号</th>
                                <th style="text-align: center;">LITTLE汇率</th>
                                <th style="text-align: center;">ETH汇率</th>
                                <th style="text-align: center;">美元汇率</th>
                                <th style="text-align: center;">状态</th>
                                <th style="text-align: center;">创建时间</th>
                                <th style="text-align: center;">操作</th>
                            </tr>
                        </thead>
                        <?foreach($exchange as $k=>$v){?>
                            <tr>
                                <td style="text-align: center;"><?=$k+1?></td>
                                <td style="text-align: center;"><?=$v['little']?></td>
                                <td style="text-align: center;"><?=$v['eth']?></td>
                                <td style="text-align: center;"><?=$v['usd']?></td>
                                <td style="text-align: center;"><?if($v['state']){echo "正常";}else{echo "删除";}?></td>
                                <td style="text-align: center;"><?=date('Y-m-d H:m',$v['create_time'])?></td>
                                <td style="text-align: center;">
                                    <a href="javascript:pub_alert_confirm(this,'确定要删除吗？','<?=$this->url("exchange/exchange_rmb_del")?>?id=<?=$v["id"]?>');"  class="btn btn-small btn-danger" rel="tooltip" title="删除"><i class="icon-remove"></i></a>
                                </td>
                            </tr>
                        <?}?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="aaa" class="modal hide fade"  >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h3>
                新增汇率信息
            </h3>
        </div>
        <form action="<?=$this->url("exchange/exchange_rmb_add_ajax")?>" method="POST" class="form-horizontal form-bordered form-validate" name="aaaa" id="aaaa">
            <div class="control-group">
                <label  class="control-label">人民币兑换LITTLE</label>
                <div class="controls">
                    <input type="text" name="data[little]" placeholder="输入人民币兑换LITTLE汇率"  class="input-xlarge"  />
                </div>
            </div>
			<div class="control-group">
                <label  class="control-label">人民币兑换ETH</label>
                <div class="controls">
                    <input type="text" name="data[eth]" placeholder="输入人民币兑换ETH汇率"  class="input-xlarge"  />
                </div>
            </div>
            <div class="control-group">
                <label  class="control-label">人民币兑换美元</label>
                <div class="controls">
                    <input type="text" name="data[usd]" placeholder="输入人民币兑换美元汇率"  class="input-xlarge"  />
                </div>
            </div>
            <div class="control-group" style="display: none;">
                <label  class="control-label">创建时间</label>
                <div class="controls">
                    <input type="text" name="data[create_time]" value="<?=date('Y-m-d H:m:i')?>"  class="input-xlarge"/>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="保存" />
                <input type="reset" class="btn btn-primary" value="重置"/>
                <button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
            </div>
        </form>
    </div>