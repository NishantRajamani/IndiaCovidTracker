<?php
    $data=file_get_contents('https://api.covid19india.org/data.json');
    $coronalive =json_decode($data,true);
    $statecount = count($coronalive['statewise']);
    function activeCases($name,$type) {
	$data=file_get_contents('https://api.covid19india.org/data.json');
    	$coronalive =json_decode($data,true);
    	$statecount = count($coronalive['statewise']);
		for($i=0;$i<$statecount;$i++)
		if($coronalive['statewise'][$i]['state'] == $name)
			echo $coronalive['statewise'][$i][$type];
	}
	function printMessage($name,$type) {
		if($name=="Total")
			$name = "India";
		if($type=="deaths")
			echo "<br>Total number of deaths due to covid in ".$name;	 
		else	
			echo "<br>Total number of ".$type. " covid cases in ".$name;
	}	
>
