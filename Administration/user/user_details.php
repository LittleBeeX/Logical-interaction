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
                        会员信息
                    </h3>
                </div>
                <div class="box-content nopadding">
                   <form class="form-horizontal form-bordered form-validate" method="POST" action="<?=$this->url('user/user_up_ajax')?>" name="form_user" id="form_user">
                    
                    <div class="control-group">
                        <label class="control-label">登陆账号</label>
                        <div class="controls">
                            <input type="text" disabled="disabled" name="data[account]" id="username" value="<?=$userlist['account']?>" class="input-xlarge" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">国籍</label>
                        <div class="controls">
                            <input type="text" disabled="disabled" name="data[nationality]" id="username" value="<?=$userlist['nationality']?>" class="input-xlarge" >
                        
                          <!-- <input type="text" name="data[nationality]" id="username" value="<?
                           foreach ($country_code as $key => $value) {
                               if($userlist['nationality']==($key+1)){
                                    print_r($value['country']);
                               }
                           }
                           ?>" class="input-xlarge" > -->
                        </div>
                    </div>
                    <div class="control-group">
                        <label  class="control-label">账号状态</label>
                        <div class="controls">
                            <input type="text" disabled="disabled" name="data[state]" id="username" value="<?
                           foreach ($userbasic_state as $ka => $va) {
                               if($userlist['state']==($ka+1)){
                                    echo $va;
                               }
                           }
                           ?>" class="input-xlarge" >
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">注册时间</label>
                        <div class="controls">
                            <input type="text" disabled="disabled" name="data[registertime]" id="username" value="<?=date('Y-m-d H:m:i',$userlist['registertime'])?>" class="input-xlarge" >
                        </div>
                    </div>

                    <div class="form-actions">
                        <input type="hidden" name="id" value="<?=$userlist['id']?>" />
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