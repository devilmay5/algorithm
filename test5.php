<?php
/**
 *列出前6个素数，它们分别是2、3、5、7、11和13。我们可以看出，第6个素数是13。
 * 第10,001个素数是多少？
 */

function getNum($len = 6)
{
    $array = [];

    $max = PHP_INT_MAX;

    for($i=1;$i<$max;$i++){
        $num=0;
        for($j=1;$j<=$i;$j++){
           if($i%$j==0){
               $num++;
           }
        }

        if($num==2&&count($array)!=$len){
          $array[] = $i;

        }

        if(count($array)==$len){
            break;
        }
       // echo $array[count($array)-1]."\r\n";
    }


    return $array;
}

set_time_limit(0);
print_r(getNum(10001));