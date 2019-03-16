<?php

function hitungKembalian($parmOne, $parmTwo)
{
	$result 	= $parmTwo - $parmOne;
	$cashBack	= array();
	$looping	= array();
	$loop 		= 1;

	while(array_sum($cashBack) < $result){
		if(($result >= 50000) && ((array_sum($cashBack) + 50000) <= $result)){
			$cashBack[] = 50000;
			$looping[] = 1;
		}else{
			if(($result >= 20000) && ((array_sum($cashBack) + 20000) <= $result)){
				$cashBack[] = 20000;
				$looping[] = 1;
			}else{
				if(($result >= 10000) && ((array_sum($cashBack) + 10000) <= $result)){
					$cashBack[] = 10000;
					$looping[] = 1;
				}else{
					if(($result >= 5000) && ((array_sum($cashBack) + 5000) <= $result)){
						$cashBack[] = 5000;	
						$looping[] = 1;
					}else{
						if(($result >= 2000) && ((array_sum($cashBack) + 2000) <= $result)){
							if(in_array(2000, $cashBack)){
								$keyword = array_search(2000, $cashBack);
								// $looping[] = unset;
								// unset($cashBack[$keyword]);
							}

							$cashBack[] = 2000;
							$count = array_count_values($cashBack);
							$looping[] = $count[2000];
						}else{
							if(($result >= 500) && ((array_sum($cashBack) + 500) <= $result)){
								if(in_array(500, $cashBack)){
									$looping[] = $loop++;
								}else{
									$looping[] = $loop;
								}
								$cashBack[] = 500;	
							}else{
								break;
							}
						}
						
					}
				}
			}
		}
	}

	for ($i=0; $i < count($cashBack) ; $i++) { 
		echo '<li>' . $looping[$i] . ' X ' . $cashBack[$i] . '<br>';
	}

}

echo hitungKembalian(15500, 50000);

// else{
// 	if($return >= 5000){
// 		$cashBack[] = 5000;
// 	}else{
// 		if($return >= 2000){
// 			$cashBack[] = 2000;
// 		}else{
// 			if($return >= 500){
// 				$cashBack[] = 500;
// 			}
// 		}
// 	}
// }