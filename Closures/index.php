<?php
	function arrayPlus($array, $num)
	{
	    array_walk($array, function(&$v) use($num){
	        $v += $num;
	    });
	    print var_dump($array);
	}

	arrayPlus([1,2,3],5);
	
	

