<?php 
class ruiextend
{
   
    /**
     * 我自己的扩展类
     */
	
	/*
	 *过滤$_REQUEST 
	 *@param    $str 过滤关键字用于mysql like语句的防注入
	 */
	
	function mysql_like_quote($str="")
	{
		return strtr($str, array("\\\\" => "\\\\\\\\", '_' => '\_', '%' => '\%', "\'" => "\\\\\'"));
	}
	
	  /**
     * 不需要传条件分页  
     * 后添加前台翻页函数
     * @param int    $pagecount 多少页
     * @param int    $page   当前第几页
     * @param string $table_style
     * @param string $font_style
     * @param int    $result_num       总条数
     * @param int    $page_size         该页显示的数量
     */
	function page($pagecount, $page, $result_num, $page_size,$ext=""){
       
                                   
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
        $pagetable .=  "<div class='row-fluid'>";
      
                $pagetable .="<div class='span6'><div class='dataTables_paginate paging_bootstrap pagination'>共有: " . $result_num . " 条记录,每页".$page_size."条</div></div> ";   
				$pagetable .= "<div class='span6'>
                               			<div class='dataTables_paginate paging_bootstrap pagination'>
                               				<ul style='float:right'>";
               
		if($pagecount >1){
					$pagetable .= "<li class='prev'><a href=" . $action . "?" . $temp . "page=1" .$ext. "><span class='hidden-480'>首页</span></a></li>";
                	if($page==1 ){
                		$pagetable .= "<li class='prev'><a href=" . $action . "?" . $temp . "page=1" .$ext. ">← <span class='hidden-480'>上一页</span></a></li>";
                	}
                	else{
                		$pagetable .= "<li class='prev '><a href=" . $action . "?" . $temp . "page=" . ($page-1) .$ext. ">← <span class='hidden-480'>上一页</span></a></li>";
                	}
				
 
            
                $start = (ceil($page/10)-1)*10+1;       
                $end   = ceil($page/10)*10;
          
                if($start <= 0) $start = 1;
                if($end   >= $pagecount) $end = $pagecount;
                for($i=$start;$i<=$end;$i++)
                {
                    if($page == $i){
                        $pagecountlist .= "<li class='active'><a href='#'>".$i."</a></li>";
                    }elseif($i<($page-3)||$i>($page+3)){
                    	
                    }else{
                        $pagecountlist .= "<li><a href=" . $action . "?" . $temp . "page=".$i.$ext.">".$i."</a></li>";
                    }
                 }
                
        

        $pagetable .= $pagecountlist."";

        
	   
	            if($page>=$pagecount  ){
	            $pagetable .= "<li class='next'><a href=" . $action . "?" . $temp . "page=" . $pagecount .$ext. "><span class='hidden-480'>下一页</span> → </a></li>";
	            }
	            else{
	            $pagetable .= "<li class='next'><a href=" . $action . "?" . $temp . "page=" . ($page+1) .$ext. ">下一页</span> → </a></li>";
	            }
	            $pagetable .=  "<li class='next'><a href=" . $action . "?" . $temp . "page=" . $pagecount .$ext. ">最后一页</span></a></li></ul>";
	             
	   	}
	
	        
	        return $pagetable."</div></div></div>";
	    }
	
}
