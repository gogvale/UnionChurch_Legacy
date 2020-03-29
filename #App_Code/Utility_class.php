<?php 

class Utility
{

	function write($anyString)
	{ 
		echo ($anyString);
	}
	
	
	function titleCase($string)  
	{
		$len=strlen($string);
		$i=0;
		$last= "";
		$new= "";
		$string=strtoupper($string);
		while  ($i<$len):
			$char=substr($string,$i,1);
			if  (ereg( "[A-Z]",$last)):
					$new.=strtolower($char);
			else:
					$new.=strtoupper($char);
			endif;
			$last=$char;
			$i++;
		endwhile;
		return($new);
	}

}

?>
