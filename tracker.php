<?php
    $data=file_get_contents('https://api.covid19india.org/data.json');
    $coronalive =json_decode($data,true);
    $statecount = count($coronalive['statewise']);
    function activeCases($name,$type)
	{

		$data=file_get_contents('https://api.covid19india.org/data.json');
    	$coronalive =json_decode($data,true);
    	$statecount = count($coronalive['statewise']);
		for($i=0;$i<$statecount;$i++)
		if($coronalive['statewise'][$i]['state'] == $name)
			echo $coronalive['statewise'][$i][$type];
	}
	function printMessage($name,$type)
	{
		if($name=="Total")
			$name = "India";
		if($type=="deaths")
			echo "<br>Total number of deaths due to covid in ".$name;	 
		else	
			echo "<br>Total number of ".$type. " covid cases in ".$name;
	}	
   	
















	//COMMENTS FOR REFERENCE
   	//echo $coronalive['statewise'][0]['active'];
	//foreach($coronalive['statewise'] as $result)
    //{
    // 	for($i=0;$i<=)
	//}

   	//  for($i=0;$i<38;$i++)
   	//  {
    //	echo $coronalive['statewise'][$i]['active']; //
    //	echo "<br>";
    //}
    /*
    		function fn()
	 		{
      			alert("changed");
      			var a = document.getElementById("state").value;
      			return a;
          	}


			"active": "6857",
			"confirmed": "106030",
			"deaths": "1674",
			"deltaconfirmed": "606",
			"deltadeaths": "10",
			"deltarecovered": "723",
			"lastupdatedtime": "11/08/2021 22:45:36",
			"migratedother": "0",
			"recovered": "97499",
			"state": "Manipur",
			"statecode": "MN",
			"statenotes": "[Dec 14]:824 out of 980 recovered cases are backdated."
    */
?>


 