<?php
/*
 * 2520是最小的能够被1到10整除的数。
最小的能够被1到20整除的正数是多少？
PHP超过内存了。。。。
 * */

function getMin($num,$start=20,$start1=20)
{
   if($num%$start==0){

       $start= $start-1;
       if($start==0){
         return $num;
       }
      return getMin($num,$start,$start1);
   }else{
       $num = $num+1;
       return  getMin($num,$start1,$start1);
   }
}

echo getMin(21,10,10);

