<?php 
class pager{
   
    /**
     * 不需要传条件分页  
     * 后添加前台翻页函数
     * @param int    $pagecount 多少页
     * @param int    $page   当前第几页
     * @param int    $result_num       总条数
     * @param int    $page_size         该页显示的数量
    **/
    /*产品列表分页*/
    function style_a($pagecount, $page, $result_num, $page_size){
        @$action = $_SERVER['REDIRECT_URL'];
        $pagetable = "";
        $temp = "";
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "<div class='page'>";
        if($pagecount >= 1){
            if($page<=1){
                $pagetable .= "<a href='javascript:void(0);' class='page_l01'><!--首页--></a>";
                $pagetable .= "<a href='javascript:void(0);' class='page_l02'><!--上一页--></a>";
            }else{
                $pagetable .= "<a href='".$action."?".$temp."page=1' class='page_l01'><!--首页--></a>";
                $pagetable .= "<a href='".$action."?".$temp."page=".($page-1)."' class='page_l02'><!--首页--></a>";
            }
            $start = 1;
            for($i=$start;$i<=$pagecount;$i++){
                $k=$page+5;
                $f=$page-4;
                if($page<=5 && $i<=10){
                    if($page == $i){
                        $pagetable .= "<span>".$i."</span>";
                    }else{
                        $pagetable .= "<a href='".$action."?".$temp."page=".$i."'>".$i."</a>";
                    }
                }elseif($k>=$pagecount && $i>($pagecount-10)){
                    if($page == $i){
                        $pagetable .= "<span>".$i."</span>";
                    }else{
                        $pagetable .= "<a href='".$action."?".$temp."page=".$i."'>".$i."</a>";
                    }
                }elseif($i>=$f && $i<=$k){
                    if($page == $i){
                        $pagetable .= "<span>".$i."</span>";
                    }else{
                        $pagetable .= "<a href='".$action."?".$temp."page=".$i."'>".$i."</a>";
                    }
                }
            }
        }
        if($pagecount >= 1){
            if($page>=$pagecount){
                $pagetable .="<a href='javascript:void(0);' class='page_r02'><!--尾页--></a>";
                $pagetable .="<a href='javascript:void(0);' class='page_r01'><!--下一页--></a>";
            }else{
                $pagetable .="<a href='".$action."?".$temp."page=".($page+1)."' class='page_r02'><!--下一页--></a>";
                $pagetable .="<a href='".$action."?".$temp."page=".$pagecount."' class='page_r01'><!--尾页--></a>";
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }

    /*微信分页*/
    function weixin($pagecount, $page, $result_num, $page_size){
        @$action = $_SERVER['REDIRECT_URL'];
        $pagetable = "";
        $temp = "";
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "<div class='page'>";
        if($pagecount >= 1){
            if($page<=1){
                $pagetable .= "<a href='javascript:void(0);' class='fl' style='background:#999;'>上一页</a>";
            }else{
                $pagetable .= "<a href='".$action."?".$temp."page=".($page-1)."' class='fl'>上一页</a>";
            }
            $start = 1;
            $pagetable .= $page."/".$pagecount;
        }
        if($pagecount >= 1){
            if($page>=$pagecount){
                $pagetable .="<a href='javascript:void(0);' class='fr' style='background:#999;'>下一页</a>";
            }else{
                $pagetable .="<a href='".$action."?".$temp."page=".($page+1)."' class='fr'>下一页</a>";
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }

















    function output($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
        @$action        = $_SERVER['REDIRECT_URL'];
        $pagetable     = "";
        $pagecountlist = "";
        $temp          = "";                                       
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "<div class='yt-page'>";
        if($pagecount >= 1){
            if($page<=1){
                $pagetable .="<a  class='Active' href='#'>首页</a>";
            }
            else{
                $pagetable .= '<a href="/index.php/home/transaction/transaction_record?fe=1">首页</a>';
            }
            $start = (ceil($page/10)-1)*10+1;       
            $end   = ceil($page/10)*10;
            if($start <= 0) $start = 1;
            if($end   >= $pagecount) $end = $pagecount;
            for($i=$start;$i<=$end;$i++){
                if($page == $i){
                    $pagecountlist .= '<a class="Active" href="#">'.$i.'</a>';
                }else{
                    $pagecountlist .= '<a  href="/index.php/home/transaction/transaction_record?fe='.$i.'">'.$i.'</a>';
                }
            }
        }
        $pagetable .= $pagecountlist."";
        if($pagecount >= 1){
            if($page>=$pagecount){
            $pagetable .= '<a href="#" class="Active">尾页</a>';
            }
            else{
                $pagetable .= '<a href="/index.php/home/transaction/transaction_record?fe='.$pagecount.'">尾页</a>';
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }
//我的推广
    function outputmy($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
        @$action        = $_SERVER['REDIRECT_URL'];
        $pagetable     = "";
        $pagecountlist = "";
        $temp          = "";                                       
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "<div class='yt-page'>";
        if($pagecount >= 1){
            if($page<=1){
                $pagetable .="<a  class='Active' href='#'>首页</a>";
            }else{
                $pagetable .= '<a href="/index.php/home/user/index?fe=1">首页</a>';
            }
            $start = (ceil($page/10)-1)*10+1;       
            $end   = ceil($page/10)*10;
            if($start <= 0) $start = 1;
            if($end   >= $pagecount) $end = $pagecount;
            for($i=$start;$i<=$end;$i++){
                if($page == $i){
                    $pagecountlist .= '<a class="Active" href="#">'.$i.'</a>';
                }else{
                    $pagecountlist .= '<a  href="/index.php/home/user/index?fe='.$i.'">'.$i.'</a>';
                }
            } 
        }
        $pagetable .= $pagecountlist."";
        if($pagecount >= 1){
            if($page>=$pagecount){
            $pagetable .= '<a href="#" class="Active">尾页</a>';
            }else{
                $pagetable .= '<a href="/index.php/home/user/index?fe='.$pagecount.'">尾页</a>';
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }
    /*资金明细*/
     function output1($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
        @$action        = $_SERVER['REDIRECT_URL'];
        $pagetable     = "";
        $pagecountlist = "";
        $temp          = "";                                       
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "<div class='yt-page'>";
        if($pagecount >= 1){
            if($page<=1){
                $pagetable .="<a  class='Active' href='#'>首页</a>";
            }else{
                $pagetable .= '<a href="/index.php/home/transaction/details?fe=1">首页</a>';
            }
            $start = (ceil($page/10)-1)*10+1;       
            $end   = ceil($page/10)*10;
            if($start <= 0) $start = 1;
            if($end   >= $pagecount) $end = $pagecount;
            for($i=$start;$i<=$end;$i++){
                if($page == $i){
                    $pagecountlist .= '<a class="Active" href="#">'.$i.'</a>';
                }else{
                    $pagecountlist .= '<a  href="/index.php/home/transaction/details?fe='.$i.'">'.$i.'</a>';
                }
            }
        }
        $pagetable .= $pagecountlist."";
        if($pagecount >= 1){
            if($page>=$pagecount){
            $pagetable .= '<a href="#" class="Active">尾页</a>';
            }else{
                $pagetable .= '<a href="/index.php/home/transaction/details?fe='.$pagecount.'">尾页</a>';
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }
    /*提现记录*/
     function output2($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
        @$action        = $_SERVER['REDIRECT_URL'];
        $pagetable     = "";
        $pagecountlist = "";
        $temp          = "";                                       
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "<div class='yt-page'>";
        if($pagecount >= 1){
            if($page<=1){
                $pagetable .="<a  class='Active' href='#'>首页</a>";
            }else{
                $pagetable .= '<a href="/index.php/home/transaction/apply_records?fe=1">首页</a>';
            }
            $start = (ceil($page/10)-1)*10+1;       
            $end   = ceil($page/10)*10;
      
            if($start <= 0) $start = 1;
            if($end   >= $pagecount) $end = $pagecount;
            for($i=$start;$i<=$end;$i++){
                if($page == $i){
                    $pagecountlist .= '<a class="Active" href="#">'.$i.'</a>';
                }else{
                    $pagecountlist .= '<a  href="/index.php/home/transaction/apply_records?fe='.$i.'">'.$i.'</a>';
                }
            }
        }
        $pagetable .= $pagecountlist."";
        if($pagecount >= 1){
            if($page>=$pagecount){
            $pagetable .= '<a href="#" class="Active">尾页</a>';
            }else{
                $pagetable .= '<a href="/index.php/home/transaction/apply_records?fe='.$pagecount.'">尾页</a>';
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }

    /*产品列表分页*/
    function product($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
        @$action        = $_SERVER['REDIRECT_URL'];
        $pagetable     = "";
        $pagecountlist = "";
        $temp          = "";
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"fe")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "<div class='yt-page'>";
        if($pagecount >= 1){
            if($page<=1){
                $pagetable .="<a  class='Active' href='javascript:void(0);'>首页</a>";
            }else{
                $pagetable .= '<a href="'. $action . '?' . $temp . 'fe=1">首页</a>';
            }
            $start = 1;
            for($i=$start;$i<=$pagecount;$i++){
                $k=$page+5;
                $f=$page-4;
                if($page<=5 && $i<=10){
                    if($page == $i){
                        $pagecountlist .= '<a class="Active" href="javascript:void(0);">'.$i.'</a>';
                    }else{
                        $pagecountlist .= '<a href="'. $action . '?' . $temp . 'fe='.$i.'">'.$i.'</a>';
                    }
                }elseif($k>=$pagecount && $i>($pagecount-10)){
                    if($page == $i){
                        $pagecountlist .= '<a class="Active" href="javascript:void(0);">'.$i.'</a>';
                    }else{
                        $pagecountlist .= '<a href="'. $action . '?' . $temp . 'fe='.$i.'">'.$i.'</a>';
                    }
                }elseif($i>=$f && $i<=$k){
                    if($page == $i){
                        $pagecountlist .= '<a class="Active" href="javascript:void(0);">'.$i.'</a>';
                    }else{
                        $pagecountlist .= '<a href="'. $action . '?' . $temp . 'fe='.$i.'">'.$i.'</a>';
                    }
                }
            }
        }
        $pagetable .= $pagecountlist."";
        if($pagecount >= 1){
            if($page>=$pagecount){
            $pagetable .= '<a href="javascript:void(0);" class="Active">尾页</a>';
            }else{
                $pagetable .= '<a href="'. $action . '?' . $temp . 'fe='.$pagecount.'">尾页</a>';
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }
    /*产品评论列表分页*/
    function message($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
        $pagetable     = "";
        $pagecountlist = "";
        $pagetable .=  "<div class='yt-page' style='margin:3px 0;'>";
        if($pagecount >= 1){
            if($page<=1){
                $pagetable .="<a  class='Active' href='javascript:void(0);'>首页</a>";
            }else{
                $pagetable .= '<a href="javascript:void(0);"   onclick="message(1)">首页</a>';
            }
            $start = 1;
            for($i=$start;$i<=$pagecount;$i++){
                $k=$page+5;
                $f=$page-4;
                if($page<=5 && $i<=10){
                    if($page == $i){
                        $pagecountlist .= '<a class="Active" href="javascript:void(0);">'.$i.'</a>';
                    }else{
                        $pagecountlist .= '<a href="javascript:void(0);"   onclick="message('.$i.')">'.$i.'</a>';
                    }
                }elseif($k>=$pagecount && $i>($pagecount-10)){
                    if($page == $i){
                        $pagecountlist .= '<a class="Active" href="javascript:void(0);">'.$i.'</a>';
                    }else{
                        $pagecountlist .= '<a href="javascript:void(0);"   onclick="message('.$i.')">'.$i.'</a>';
                    }
                }elseif($i>=$f && $i<=$k){
                    if($page == $i){
                        $pagecountlist .= '<a class="Active" href="javascript:void(0);">'.$i.'</a>';
                    }else{
                        $pagecountlist .= '<a href="javascript:void(0);"   onclick="message('.$i.')">'.$i.'</a>';
                    }
                }
            }
        }
        $pagetable .= $pagecountlist."";
        if($pagecount >= 1){
            if($page>=$pagecount){
            $pagetable .= '<a href="javascript:void(0);" class="Active">尾页</a>';
            }
            else{
                $pagetable .= '<a href="javascript:void(0);"   onclick="messagepage('.$pagecount.')">尾页</a>';
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }
    /*投资记录分页*/
    function record($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
        $pagetable     = "";
        $pagecountlist = "";
        $pagetable .=  "<div class='d-page'>";
        if($pagecount >= 1){
            if($page<=1){
                $pagetable .="<a  class='active' href='javascript:void(0);'>首页</a>";
            }else{
                $pagetable .= '<a href="javascript:void(0);"   onclick="record(1)">首页</a>';
            }
            $start = 1;
            for($i=$start;$i<=$pagecount;$i++){
                $k=$page+5;
                $f=$page-4;
                if($page<=5 && $i<=10){
                    if($page == $i){
                        $pagecountlist .= '<a class="active" href="javascript:void(0);">'.$i.'</a>';
                    }else{
                        $pagecountlist .= '<a href="javascript:void(0);"   onclick="record('.$i.')">'.$i.'</a>';
                    }
                }elseif($k>=$pagecount && $i>($pagecount-10)){
                    if($page == $i){
                        $pagecountlist .= '<a class="active" href="javascript:void(0);">'.$i.'</a>';
                    }else{
                        $pagecountlist .= '<a href="javascript:void(0);"   onclick="record('.$i.')">'.$i.'</a>';
                    }
                }elseif($i>=$f && $i<=$k){
                    if($page == $i){
                        $pagecountlist .= '<a class="active" href="javascript:void(0);">'.$i.'</a>';
                    }else{
                        $pagecountlist .= '<a href="javascript:void(0);"   onclick="record('.$i.')">'.$i.'</a>';
                    }
                }
            }
        }
        $pagetable .= $pagecountlist."";
        if($pagecount >= 1){
            if($page>=$pagecount){
                $pagetable .= '<a href="javascript:void(0);" class="active">尾页</a>';
            }else{
                $pagetable .= '<a href="javascript:void(0);"   onclick="record('.$pagecount.')">尾页</a>';
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }

    //我的配资
    function stock($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
        @$action        = $_SERVER['REDIRECT_URL'];
        $pagetable     = "";
        $pagecountlist = "";
        $temp          = "";                                       
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "<div class='pz-page'>";
        if($pagecount > 1){ 
            if($page<=1){
                $pagetable .="<a href='javascript:void(0);' class='active'>首页</a>";
                $pagetable .= "<a href='javascript:void(0);' class='active'>上一页</a>";
            }else{
                $pagetable .= "<a href=" . $action . "?" . $temp . "page=1>首页</a>";
                $pagetable .= "<a href=" . $action . "?" . $temp . "page=".($page-1).">上一页</a>";
            }
            $start = 1;
            for($i=$start;$i<=$pagecount;$i++){
                $k=$page+5;
                $f=$page-4;
                if($page<=5 && $i<=10){
                    if($page == $i){
                        $pagecountlist .= "<a href='javascript:void(0);' class='active'>".$i."</a>";
                    }else{
                        $pagecountlist .= "<a href=" . $action . "?" . $temp . "page=" . $i . ">".$i."</a>";
                    }
                }elseif($k>=$pagecount && $i>($pagecount-10)){
                    if($page == $i){
                        $pagecountlist .= "<a href='javascript:void(0);' class='active'>".$i."</a>";
                    }else{
                        $pagecountlist .= "<a href=" . $action . "?" . $temp . "page=" . $i . ">".$i."</a>";
                    }
                }elseif($i>=$f && $i<=$k){
                    if($page == $i){
                        $pagecountlist .= "<a href='javascript:void(0);' class='active'>".$i."</a>";
                    }else{
                        $pagecountlist .= "<a href=" . $action . "?" . $temp . "page=" . $i . ">".$i."</a>";
                    }
                }
            }
        }
        $pagetable .= $pagecountlist."";
        if($pagecount > 1){
            if($page>=$pagecount){
                $pagetable .= "<a href='javascript:void(0);' class='active'>下一页</a>&nbsp;";
                $pagetable .="<a href='javascript:void(0);' class='active'>尾页</a>&nbsp;";
            }else{
                $pagetable .= "<a href=" . $action . "?" . $temp . "page=".($page+1).">下一页</a>";
                $pagetable .= "<a href=" . $action . "?" . $temp . "page=". $pagecount .">尾页</a>";
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }

       /**
     * 系统后台的分页
     * 不需要传条件分页  
     * 后添加前台翻页函数
     * @param int    $pagecount 多少页
     * @param int    $page   当前第几页
     * @param string $table_style
     * @param string $font_style
     * @param int    $result_num       总条数
     * @param int    $page_size         该页显示的数量
     */
    /*function outputadmin($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
       
                                   
        @$action        = $_SERVER['REDIRECT_URL'];
       
        $pagetable =  "<div class='dataTables_info' id='DataTables_Table_0_info'>
                        <span>".(($page-1)*$page_size+1)."</span> - <span>1</span> 共 <span>" . $result_num . "</span>
                        </div>";
        $pagecountlist = "";
        $temp          = "";                                       
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        
        $pagetable .=  "<div class=\"dataTables_paginate paging_full_numbers\" id=\"DataTables_Table_0_paginate\">\n";
        if($pagecount >= 1)
        {
                
               // $pagetable .="共有: " . $result_num . " 条 ";   
                if($page<=1){
                    $pagetable .="<a class=\"first paginate_button paginate_button_disabled\" tabindex=\"0\" id=\"DataTables_Table_0_first\">首页</a>";
                    $pagetable .= "<a class=\"previous paginate_button paginate_button_disabled\" tabindex=\"0\" id=\"DataTables_Table_0_previous\"> 上一页 </a>";
                }
                else{
                    $pagetable .= "<a class=\"first paginate_button\" tabindex=\"0\" id=\"DataTables_Table_0_first\" href=" . $action . "?" . $temp . "page=1>首页</a>";
                    $pagetable .= "<a class=\"previous paginate_button\" tabindex=\"0\" id=\"DataTables_Table_0_previous\"  href=" . $action . "?" . $temp . "page=" . ($page-1) . "> 上一页 </a>";
                }
 
            
                $start = (ceil($page/10)-1)*8+1;       
                $end   = ceil($page/10)*8;
          
                if($start <= 0) $start = 1;
                if($end   >= $pagecount) $end = $pagecount;
                for($i=$start;$i<=$end;$i++)
                {
                    if($page == $i)
                        $pagecountlist .= "<a class=\"paginate_active\" tabindex=\"0\" style=\"background:none repeat scroll 0 0 #368EE0;color:#FFFFFF\">".$i."</a>";
                    else
                        $pagecountlist .= "<a class=\"paginate_button\" href=" . $action . "?" . $temp . "page=" . $i . ">".$i."</a>";
                }
                
                
        }

        $pagetable .= $pagecountlist."";

        
    if($pagecount >= 1)
        {
            if($page>=$pagecount){
            $pagetable .= "<a class=\"next paginate_button paginate_button_disabled\" tabindex=\"0\" id=\"DataTables_Table_0_next\"> 下一页 </a>";
            $pagetable .= "<a class=\"last paginate_button paginate_button_disabled\" tabindex=\"0\" id=\"DataTables_Table_0_last\">尾页</a>";
            }
            else{
            $pagetable .= "<a class=\"next paginate_button\" tabindex=\"0\" id=\"DataTables_Table_0_next\" href=" . $action . "?" . $temp . "page=" . ($page+1) . "> 下一页 </a>";
            
            $pagetable .= "<a class=\"last paginate_button\" tabindex=\"0\" id=\"DataTables_Table_0_last\" href=" . $action . "?" . $temp . "page=" . $pagecount . ">尾页</a>";
            //$pagetable .= "&nbsp;<a class=\"fy\" href=" . $action . "?" . $temp . "page=" . $pagecount . ">尾页</a>&nbsp;";
            }
        }

        $pagetable .=  "</div>";
        
        return $pagetable;
    }*/
    function outputadmin($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
        @$action        = $_SERVER['REDIRECT_URL'];
        $pagetable     = "";
        $pagecountlist = "";
        $temp          = "";                                       
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "<div class=\"dataTables_paginate paging_full_numbers\" align=\"left\">\n";
        if($pagecount > 1){
            $pagetable .="共有: " . $result_num . " 条 ";   
            if($page<=1){
                $pagetable .="<a href='#this' class=\"paginate_button\">首页</a>&nbsp;";
                $pagetable .= "&nbsp;<a href='#this' class=\"paginate_button\">上一页</a>&nbsp;";
            }else{
                $pagetable .= "<a class=\"paginate_button\" href=" . $action . "?" . $temp . "page=1>首页</a>&nbsp;";
                $pagetable .= "&nbsp;<a class=\"paginate_button\" href=" . $action . "?" . $temp . "page=" . ($page-1) . ">上一页</a>&nbsp;";
            }
            $start = 1;
            for($i=$start;$i<=$pagecount;$i++){
                $k=$page+5;
                $f=$page-4;
                if($page<=5 && $i<=10){
                    if($page == $i){
                        $pagecountlist .= "&nbsp;<span class=\"paginate_active\">".$i."</span>&nbsp;";
                    }else{
                        $pagecountlist .= "&nbsp;<a class=\"paginate_button\" href=" . $action . "?" . $temp . "page=" . $i . ">".$i."</a>&nbsp;";
                    }
                }elseif($k>=$pagecount && $i>($pagecount-10)){
                    if($page == $i){
                        $pagecountlist .= "&nbsp;<span class=\"paginate_active\">".$i."</span>&nbsp;";
                    }else{
                        $pagecountlist .= "&nbsp;<a class=\"paginate_button\" href=" . $action . "?" . $temp . "page=" . $i . ">".$i."</a>&nbsp;";
                    }
                }elseif($i>=$f && $i<=$k){
                    if($page == $i){
                        $pagecountlist .= "&nbsp;<span class=\"paginate_active\">".$i."</span>&nbsp;";
                    }else{
                        $pagecountlist .= "&nbsp;<a class=\"paginate_button\" href=" . $action . "?" . $temp . "page=" . $i . ">".$i."</a>&nbsp;";
                    }
                }
            }
        }
        $pagetable .= $pagecountlist."";
        if($pagecount > 1){
            if($page>=$pagecount){
                $pagetable .= "&nbsp;<a href='#this' class=\"next paginate_button paginate_button_disabled\">下一页</a>&nbsp;";
                $pagetable .= "&nbsp;<a href='#this' class=\"last paginate_button paginate_button_disabled\">尾页</a>&nbsp;";
            }else{
                $pagetable .= "&nbsp;<a class=\"next paginate_button paginate_button_disabled\" href=" . $action . "?" . $temp . "page=" . ($page+1) . ">下一页</a>&nbsp;";
                $pagetable .= "&nbsp;<a class=\"last paginate_button paginate_button_disabled\" href=" . $action . "?" . $temp . "page=" . $pagecount . ">尾页</a>&nbsp;";
            }
        }
        $pagetable .=  "</div>";
        return $pagetable;
    }
    /*留言分页*/
    function ajaxpage($pagecount, $page, $table_style, $font_style, $result_num, $page_size,$type=1){                       
        @$action        = $_SERVER['REDIRECT_URL'];   
        $pagetable     = "";
        $pagecountlist = "";
        $temp          = "";                                       
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "<p class=\"pages\">\n";
        if($pagecount > 1){
            $pagetable .="<span>共有" . $result_num . "条记录</span>";   
            if($page<=1){
                $pagetable .="<a href='#this' class=\"pg_home not\" onclick='messagepage(1,".$type.")'>首页</a>";
                $pagetable .= "<a href='#this' class=\"pre_page not\" onclick='messagepage(".($page-1).",".$type.")'>上一页</a>";
            }else{
                $pagetable .= "<a class=\"last_page\" href=\"javascript:void(0);\" onclick='messagepage(1,".$type.")'>首页</a>";
                $pagetable .= "<a class=\"next_page\" href=\"javascript:void(0);\" onclick='messagepage(".($page-1).",".$type.")'>上一页</a>";
            }
            $start = (ceil($page/10)-1)*10+1;       
            $end   = ceil($page/10)*10;
            if($start <= 0) $start = 1;
            if($end   >= $pagecount) $end = $pagecount;
            for($i=$start;$i<=$end;$i++){
                if($page == $i){
                    $pagecountlist .= "<strong>".$i."</strong>";
                }else{
                    $pagecountlist .= "<a href=\"javascript:void(0);\" onclick='messagepage(".$i.",".$type.")'>".$i."</a>";
                }
            }
        }
        $pagetable .= $pagecountlist."";
        if($pagecount > 1){
            if($page>=$pagecount){
                $pagetable .= "<a href='#this' class=\"pre_page not\" onclick='messagepage(".($page+1).",".$type.")'>下一页</a>";
                $pagetable .= "<a href='#this' class=\"pg_home not\" onclick='messagepage(".$pagecount.",".$type.")'>尾页</a>";
            }else{
                $pagetable .= "<a class=\"next_page\" href=\"javascript:void(0);\"onclick='messagepage(".($page+1).",".$type.")'>下一页</a>";
                $pagetable .= "<a class=\"last_page\" href=\"javascript:void(0);\"onclick='messagepage(".$pagecount.",".$type.")'>尾页</a>";
            }
            $pagetable .=  "<span>共有".$result_num."页</span>";
            $pagetable .=  "<span class=\"directto\">直达<input type=\"text\" id=\"directtopage\" />页</span>";
            $pagetable .=  "</p>";
        }
        return $pagetable;
    }





    /**
     * 
     * 评论的分页
     * @param int $pagetotal 分页总数
     * @param int $curr 当前页
     */
    public function collectpage($pagearr) {
	    if (preg_match('/\?page=\w+/i',$_SERVER['REQUEST_URI']) > 0){
	    	$url_format = preg_replace('/\?page=\w+/i', '?', $_SERVER['REQUEST_URI']);
		} elseif(preg_match('/\&page=\w+/i',$_SERVER['REQUEST_URI']) > 0) {
			$url_format = preg_replace('/\&page=\w+/i', '&', $_SERVER['REQUEST_URI']);
		}else{
			if(strpos($_SERVER['REQUEST_URI'],'?') !== false) {
				$url_format = $_SERVER['REQUEST_URI'] . '&';
			} else {
				$url_format = $_SERVER['REQUEST_URI'] . '?';
			}
		}
	    $segment	= 3;
		$max_pages	= 6;
		$start		= ($pagearr['currpage'] <= $segment) ? 1 : $pagearr['currpage'] - $segment;
		$end		= ($pagearr['pagetotal'] <= $start + $max_pages - 1) ? $pagearr['pagetotal'] : $start + $max_pages - 1;
		if ($end == $pagearr['pagetotal'] && $pagearr['pagetotal'] >= $max_pages){
			$start = $end - $max_pages + 1;
		}
		$out		= "";
		$prve_page	= $pagearr['currpage'] - 1;
		$next_page	= $pagearr['currpage'] + 1;
		if ($pagearr['pagetotal'] > 1){
			if ($start > 1){
				$out .= '<a href="'.$url_format.'page='.($pagearr['currpage']-1).'">← 上一页</a>';
			}
			for ($i = $start; $i <= $end; $i++){
				if($end == $i) {
					$out .= ($i != $pagearr['currpage']) ?
						'<a href="'.$url_format.'page='.$i.'" >'.$i.'</a>' :
						'<a href="#this" class="cur">'.$i.'</a>' ;
				} else {
					$out .= ($i != $pagearr['currpage']) ?
						'<a href="'.$url_format.'page='.$i.'" >'.$i.'</a>' :
						'<a href="#this" class="cur">'.$i.'</a>' ;
				}
			}
			if($pagearr['currpage'] < $pagearr['pagetotal']) {
				$out .= '<a href="'.$url_format.'page='.($pagearr['currpage'] + 1).'">下一页 →</a>';
			}
		}
		return $out;
    }
    
 	public function resourcepage($pagearr) {
 		if(empty($pagearr) || empty($pagearr['currenturl']) || empty($pagearr['pagetotal']) || empty($pagearr['currpage'])) return '';
	    $url_format = $pagearr['currenturl'];
	    $segment	= 4;
		$max_pages	= 9;
		$start		= ($pagearr['currpage'] <= $segment) ? 1 : $pagearr['currpage'] - $segment;
		$end		= ($pagearr['pagetotal'] <= $start + $max_pages - 1) ? $pagearr['pagetotal'] : $start + $max_pages - 1;
		if ($end == $pagearr['pagetotal'] && $pagearr['pagetotal'] >= $max_pages){
			$start = $end - $max_pages + 1;
		}
		$out		= "";
		$prve_page	= $pagearr['currpage'] - 1;
		$next_page	= $pagearr['currpage'] + 1;
		if ($pagearr['pagetotal'] > 1){
			if ($start > 1){
				$out .= '<li class="netPage"><a href="'.$url_format.'/page/'.($pagearr['currpage']-1).'.html">← 上一页</a></li>';
			}
			for ($i = $start; $i <= $end; $i++){
				if($end == $i) {
					$out .= ($i != $pagearr['currpage']) ?
						'<li><a href="'.$url_format.'/page/'.$i.'.html" >'.$i.'</a></li>' :
						'<li class="clik"><a href="#this">'.$i.'</a></li>' ;
				} else {
					$out .= ($i != $pagearr['currpage']) ?
						'<li><a href="'.$url_format.'/page/'.$i.'.html" >'.$i.'</a></li>' :
						'<li class="clik"><a href="#this">'.$i.'</a></li>' ;
				}
			}
			if($pagearr['currpage'] < $pagearr['pagetotal']) {
				$out .= '<li class="Pagedon"><a href="'.$url_format.'/page/'.($pagearr['currpage'] + 1).'.html">下一页 →</a></li>';
			}
		}
		return $out;
    }

/**
 * 分页
 * @category 功能
 * @param $totle：信息总数
 * @param $displaypg：每页显示信息数，这里设置为默认是20；
 * @param $url：分页导航中的链接，除了加入不同的查询信息“page”外的部分都与这个URL相同.默认值本该设为本页URL（即$_SERVER["REQUEST_URI"]），但设置默认值的右边只能为常量，所以该默认值设为空字符串，在函数内部再设置为本页URL。
 * @return string
 */
function pageft($totle, $displaypg=20,$page=1, $url=''){


    $url=empty($url) ? $_SERVER["REQUEST_URI"] : $url;

    //URL分析：
    $parse_url=parse_url($url);
    $url_query=isset($parse_url["query"]) ? $parse_url["query"] : ""; //单独取出URL的查询字串
    if($url_query){
        $url_query=preg_replace("/page=[^&]*[&]?/i","",$url_query);
        $url=str_replace($parse_url["query"],$url_query,$url);//将处理后的URL的查询字串替换原来的URL的查询字串
        $url.="&page";//在URL后加page查询信息，但待赋值
    }else{
        $url.="?page";
    }

    //页码计算：
    $lastpg=ceil($totle/$displaypg); //最后页，也是总页数
    $lastpg=$lastpg ? $lastpg : 1; //没有显示条目，置最后页为1
    $page=min($lastpg,$page);
    $prepg=$page-1; //上一页
    $nextpg=($page==$lastpg ? 0 : $page+1); //下一页
    $firstcount=($page-1)*$displaypg;

    //如果只有一页则跳出函数,没有分页的文字显示（备用）
    //if($lastpg<=1) return false;

    //开始分页导航条代码
    $pagenav="显示第 ".($totle?($firstcount+1):0) . "/" . min($firstcount+$displaypg,$totle)." 条记录，共 $totle 条记录<br/>";

    $pagenav.=" <a href='$url=1'>首页</a> ";
    if($prepg) $pagenav.=" <a href='$url=$prepg'>前页</a> "; else $pagenav.=" 前页 ";
    if($nextpg) $pagenav.=" <a href='$url=$nextpg'>后页</a> "; else $pagenav.=" 后页 ";
    $pagenav.=" <a href='$url=$lastpg'>尾页</a> ";

    //下拉跳转列表，循环列出所有页码
    $pagenav.="　到第 <select name='topage' size='1' onchange='window.location=\"$url=\"+this.value'>\n";
    for($i=1;$i<=$lastpg;$i++){
        if($i==$page){
            $pagenav.="<option value='$i' selected>$i</option>\n";
        }else{
            $pagenav.="<option value='$i'>$i</option>\n";
        }
    }
    $pagenav.="</select> 页，共 $lastpg 页";

    //组织返回值
    $re_str['limit'] = "limit {$firstcount},{$displaypg}";
    $re_str['str'] = $pagenav;
    return $re_str;
}



/**
 * 系统后台的分页
 * 不需要传条件分页  
 * 后添加前台翻页函数
 * @param int    $pagecount 多少页
 * @param int    $page   当前第几页
 * @param string $table_style
 * @param string $font_style
 * @param int    $result_num       总条数
 * @param int    $page_size         该页显示的数量
 */
function outputnews($pagecount, $page, $table_style, $font_style, $result_num, $page_size){
    @$action        = $_SERVER['REDIRECT_URL'];
    $pagetable =  "";
    $pagecountlist = "";
    $temp          = "";                                       
    if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
    $query = explode("&",$_SERVER['QUERY_STRING']);
        while(list($index, $value) = each($query)) {
            $a = explode("=",$value);
            if(strcmp(strtolower($a[0]),"page")!=0){
                $temp .= $a[0]."=".$a[1]."&";
            }
        }
    }else{
        $temp = "";
    }
    $pagetable .=  "<div class=\"yt-page\">\n";
    if($pagecount >= 1)
    {
           // $pagetable .="共有: " . $result_num . " 条 ";   
        if($page<=1){
            $pagetable .="<a class=\"Active\" tabindex=\"0\" >首页</a>";
            $pagetable .= "<a class=\"previous Active\" tabindex=\"0\" > 上一页 </a>";
        }
        else{
            $pagetable .= "<a class=\"first Active\" tabindex=\"0\" href=" . $action . "?" . $temp . "page=1>首页</a>";
            $pagetable .= "<a class=\"previous Active\" tabindex=\"0\" href=" . $action . "?" . $temp . "page=" . ($page-1) . "> 上一页 </a>";
        }
        $start = 1;
        for($i=$start;$i<=$pagecount;$i++){
            $k=$page+5;
            $f=$page-4;
            if($page<=5 && $i<=10){
                if($page == $i){
                    $pagecountlist .= "&nbsp;<a class=\"paginate_active\" tabindex=\"0\" style=\"background:none repeat scroll 0 0 #F9F9F9;color:#7B7B7B\">".$i."</a>&nbsp;";
                }else{
                    $pagecountlist .= "&nbsp;<a class=\"paginate_button Active\" href=" . $action . "?" . $temp . "page=" . $i . " style=\"background:none repeat scroll 0 0 #88AAD3;color:#FFFFFF\">".$i."</a>&nbsp;";
                }
            }elseif($k>=$pagecount && $i>($pagecount-10)){
                if($page == $i){
                    $pagecountlist .= "&nbsp;<a class=\"paginate_active\" tabindex=\"0\" style=\"background:none repeat scroll 0 0 #F9F9F9;color:#7B7B7B\">".$i."</a>&nbsp;";
                }else{
                    $pagecountlist .= "&nbsp;<a class=\"paginate_button Active\" href=" . $action . "?" . $temp . "page=" . $i . " style=\"background:none repeat scroll 0 0 #88AAD3;color:#FFFFFF\">".$i."</a>&nbsp;";
                }
            }elseif($i>=$f && $i<=$k){
                if($page == $i){
                    $pagecountlist .= "&nbsp;<a class=\"paginate_active\" tabindex=\"0\" style=\"background:none repeat scroll 0 0 #F9F9F9;color:#7B7B7B\">".$i."</a>&nbsp;";
                }else{
                    $pagecountlist .= "&nbsp;<a class=\"paginate_button Active\" href=" . $action . "?" . $temp . "page=" . $i . " style=\"background:none repeat scroll 0 0 #88AAD3;color:#FFFFFF\">".$i."</a>&nbsp;";
                }
            }
        }
    }
    $pagetable .= $pagecountlist."";
    if($pagecount >= 1)
    {
        if($page>=$pagecount){
        $pagetable .= "<a class=\"next Active\" tabindex=\"0\" > 下一页 </a>";
        $pagetable .= "<a class=\"last Active\" tabindex=\"0\" >尾页</a>";
        }
        else{
        $pagetable .= "<a class=\"next Active\" tabindex=\"0\" href=" . $action . "?" . $temp . "page=" . ($page+1) . "> 下一页 </a>";
        
        $pagetable .= "<a class=\"last Active\" tabindex=\"0\" href=" . $action . "?" . $temp . "page=" . $pagecount . ">尾页</a>";
        //$pagetable .= "&nbsp;<a class=\"fy\" href=" . $action . "?" . $temp . "page=" . $pagecount . ">尾页</a>&nbsp;";
        }
    }
    $pagetable .=  "</div>";
    return $pagetable;
}
/*新闻分页*/
    function newspage($pagecount, $page,$id=''){
       
        $page_size=20;                           
        @$action        = $_SERVER['REDIRECT_URL'];
       
        $pagetable     = "";
        $pagecountlist = "";
        $temp          = "";                                       
        if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
        $query = explode("&",$_SERVER['QUERY_STRING']);
            while(list($index, $value) = each($query)) {
                $a = explode("=",$value);
                if(strcmp(strtolower($a[0]),"page")!=0){
                    $temp .= $a[0]."=".$a[1]."&";
                }
            }
        }else{
            $temp = "";
        }      
        $pagetable .=  "";
        if($pagecount > 1)
        {
            if($page<=1){
                $pagetable .="<span class=\"cm1_page_left\"><i><</i>上一页</span>";
                
            }
            else{
                $pagetable .="<a class=\"cm1_page_left\" href=\"javascript:void(0);\"onclick='LoadList(".($page-1).")'><i><</i>上一页</a>";
            }
        }

        $pagetable .= $pagecountlist."";

        
    if($pagecount > 1)
        {
            if($page>=$pagecount){
            $pagetable .= "<span  class=\"cm1_page_right\">下一页<i>></i></span>";
            }
            else{
            $pagetable .= "<a href=\"javascript:void(0);\"onclick='LoadList(".($page+1).")' class=\"cm1_page_right\">下一页<i>></i></a>";
            }
        }
        $pagetable .=  "";
        return $pagetable; 
    }



}

