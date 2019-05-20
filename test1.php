<?php
	/*
	13195的所有质因数为5、7、13和29。
	600851475143最大的质因数是多少？
	
	*/
   
   
	$res = [];
	$res1 = [];
//	$num = 13195;
	$num = 600851475143;
	echo var_dump($num);exit;
	
	// 最傻逼的开阔思路
	// for($i=2;$i<$num;$i++){
	// 	if($num%$i==0){
	// 		array_push($res,$i);
	// 	}
	// }
	// 
	// foreach($res as $item){
	// 	$count = 0;
	// 	for($i=2;$i<=$item;$i++){
	// 		if($item%$i==0){
	// 			$count++;
	// 		}
	// 	}
	// 	if($count==1){
	// 		array_push($res1,$item);
	// 	}
	// }
	// 
	// print_r($res1);
	
	function getMax($num){
		 for($i=2;$i<$num;$i++){
			if($num%$i==0){
				$chu = $num/$i;
				return getMax($chu);
			}
		}
		return $num;
	}
	
	echo getMax($num);
	
	
	
	
	
	
?>