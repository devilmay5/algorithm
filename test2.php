<?php
/*
回文数就是从前往后和从后往前读都一样的数。由两个2位数相乘得到的最大回文乘积是 9009 = 91 × 99。找出由两个3位数相乘得到的最大回文乘积。
*/

$max1 = 999;
$max2 = 999;

function getMax($max1,$max2){
	
	$num = $max1.$max2;
	
	for($i=999;$i>100;$i--){
		if($num%$i==0&&is_int($num/$i)&&(strlen($num/$i)==3)){
			return $num;
		}	
	}
	
	$max1 = $max1-1;
	$max1 = (string)$max1;
	$max2 = $max1[2].$max1[1].$max1[0];
	
	return getMax($max1,$max2);
}
//906609
echo getMax($max1,$max2);

?>