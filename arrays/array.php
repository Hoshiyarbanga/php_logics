<?php
#1
/* let array1 = [{firstname:'hosi',id:1},
             {firstname:'ravi',id:2},
             {firstname:'kamal',id:3},
             {firstname:'priya',id:4},
             {firstname:'shivani',id:5}]

let selected = [1,3,5,2];


let selectedArray = [];
for(let i=0; i<selected.length; i++){
    let name = array1.find(person => person.id === selected[i]);
    selectedArray.push(name.firstname);
} */
 
// console.log(selectedArray); //['hoshi','kamal','shivani','ravi']

#2
/*$path = __DIR__ .'\abc.json';
$jsonString = file_get_contents($path);
$jsonData = json_decode($jsonString, true);
$result = [];
foreach ($jsonData as $key=> $value) {
    if(isset($value["productPacks"]) && !empty(($value["productPacks"]))){
    foreach ($value["productPacks"] as $key ) {
    $abc = $key["productPackName"];
    preg_match_all('/\((.*?)\)/i', $abc, $matches);
    $a = str_replace("(","",$matches[0][1]);
    $b = str_replace(")","",$a);
    $c = explode(";", $b);
    array_push($result,$c[0]);
       }
     }
    }
    echo "<pre>";
    print_r($result);
*/

//output --

#3
   