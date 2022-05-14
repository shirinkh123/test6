<?php
require_once "../get/get.php";


   function pagination( $per_page = 10,$page = 1,$count, $url){  
       
    $db=new get();      
    	
		$total = $count;
		
        $adjacents = "2"; 

    	$page = ($page == 0 ? 1 : $page);  
    	$start = ($page - 1) * $per_page;								
		
    	$prev = $page - 1;							
    	$next = $page + 1;
        $lastpage = ceil($total/$per_page);
    	$lpm1 = $lastpage - 1;
    	
    	$pagination = "";
    	if($lastpage > 1)
    	{	
    		$pagination .= "<ul class='paginationforum'>";
                    $pagination .= "<li style='margin-top:2px'>מעמוד $page עד $lastpage</li>";
    		if ($lastpage < 7 + ($adjacents * 2))
    		{	
    			for ($counter = 1; $counter <= $lastpage; $counter++)
    			{
    				if ($counter == $page)
    					$pagination.= "<li><a class='active'>$counter</a></li>";
    				else
    					$pagination.= "<li><a href='{$url}?page=$counter'>$counter</a></li>";					
    			}
    		}
    		elseif($lastpage > 5 + ($adjacents * 2))
    		{
    			if($page < 1 + ($adjacents * 2))		
    			{
    				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='active'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}?page=$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='hidden-xs'>...</li>";
    				$pagination.= "<li><a href='{$url}?עמוד=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}?עמוד=$lastpage'>$lastpage</a></li>";		
    			}
    			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    			{
    				$pagination.= "<li><a href='{$url}?עמוד=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}?עמוד=2'>2</a></li>";
    				$pagination.= "<li class='hidden-xs'>...</li>";
    				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='current'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}?page=$counter'>$counter</a></li>";					
    				}
    				$pagination.= "<li class='hidden-xs'>..</li>";
    				$pagination.= "<li><a href='{$url}?עמוד=$lpm1'>$lpm1</a></li>";
    				$pagination.= "<li><a href='{$url}?עמוד=$lastpage'>$lastpage</a></li>";		
    			}
    			else
    			{
    				$pagination.= "<li><a href='{$url}?עמוד=1'>1</a></li>";
    				$pagination.= "<li><a href='{$url}?עמוד=2'>2</a></li>";
    				$pagination.= "<li class='active'>..</li>";
    				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
    				{
    					if ($counter == $page)
    						$pagination.= "<li><a class='active'>$counter</a></li>";
    					else
    						$pagination.= "<li><a href='{$url}?page=$counter'>$counter</a></li>";					
    				}
    			}
    		}
    		
    		if ($page < $counter - 1){ 
    			$pagination.= "<li><a href='{$url}?page=$next'>דף הבא</a></li>";
                $pagination.= "<li><a href='{$url}?page=$lastpage'>דף אחרון</a></li>";
    		}else{
    			$pagination.= "<li><a class='active'>דף הבא</a></li>";
                $pagination.= "<li><a class='active'>דף אחרון</a></li>";
            }
			$pagination.= "</ul>\n";
		
    	}
    
        
        return $pagination;
     }
?>