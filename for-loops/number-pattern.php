<?php
// #1
// $limit = 5;
// for ($i=1;$i<=$limit;$i++){
// $inc=$limit-1;
// $print = $i;
// echo $i;
// for($j=2;$j<=$i;$j++){
// echo $print =$print+$inc;
// $inc--;
// }
// echo '<br>';
// }

// Output of #1
// 1
// 2 6 
// 3 7 10
// 4 8 11 13
// 5 9 12 14 15


#2

// <?php
// $string = 'DuoDERM CGF Dressing (Hydrocolloid Dressing) (15 cm x 15 cm; 187661) [5]';

// preg_match_all('/\((.*?)\)/i', $string, $matches);
// $a = str_replace("(","",$matches[0][1]);
// $b = str_replace(")","",$a);
// $c = explode(";", $b);
// echo $c[0];
// ?>