<?php
  // 1.4 Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания.

  for($i = 1000; $i<10000; $i++)
  {
    if($i%2==0)
    {
      $fourth = floor(($i%100)%10);
      $third = floor(($i%100)/10);
      $second = floor(($i%1000)/100);
      $first = floor($i/1000);
      if((($first<$second) && ($second<$third) && ($third<$fourth)) || (($first>$second) && ($second>$third) && ($third>$fourth)))
      {
        echo $i."</br>";
      }
    }
  }
?>
