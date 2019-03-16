<?php

function drawImage($parm)
{
	$data 	= array();
	$maks 	= $parm - 1 ;
	$middle	= $maks / 2 ;

	for($i = 0; $i < $parm; $i++){
		for($j = 0; $j < $parm; $j++){
			
			if(($i == 0 && $j == 0) || ($i == $maks  && $j == 0)){ // sisi sebelah kiri
				$data[$i][$j] = '* &nbsp;';
			}elseif(($i == 0 && $j == $maks || ($i == $maks && $j == $maks) )){ // sisi sebelah kanan
				$data[$i][$j] = '* &nbsp;';
			}else{
				if($j == $middle || $i == $middle){
					$data[$i][$j] = '&nbsp; * &nbsp;';
				}else{
					$data[$i][$j] = '= &nbsp;';
				}
				
			}

		}

		$data[$i][$j] = '<br>';	
	}

	for($i = 0; $i < $parm; $i++){
		for($j = 0; $j < $parm; $j++){
			echo $data[$i][$j];
		}
		echo "<br>";
	}
}

echo drawImage(5);

