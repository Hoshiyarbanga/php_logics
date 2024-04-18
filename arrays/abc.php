
<?php
function covert($number){
 $path = __DIR__ .'\abcd.json';
$jsonString = file_get_contents($path);
$jsonData = json_decode($jsonString, true);
$result ='';
start:
$abc = array_keys($jsonData);
rsort($abc);
 foreach(  $abc as $val){
    if( $number >= $val ){
        foreach ($jsonData as $bal => $xyz ){
            if($bal === $val ){
                $result .= $xyz ;
                $number -= $bal;
                goto start;
            }
        }
    }
 }
 return $result;
}
echo covert(57);

