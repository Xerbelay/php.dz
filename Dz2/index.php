<?php
/* 1 */
/* $arr = [1,2,3,4,5,6];
$sum = 0;
for ($i = 0; $i < count($arr)/2; $i++) {
    $sum += $arr[$i];
}
echo $sum; */

/* 2 */
/* $arr = [1,2,3,4,5,6];
$sum = 0;
$sum2 = 0;
for ($i = 0; $i < count($arr)/2; $i++) {
    $sum += $arr[$i];
}
for ($i = count($arr)/2; $i < count($arr); $i++) {
    $sum2 += $arr[$i];
}
echo $sum/$sum2; */

/* 3 */
/* $arr = [[1, 2, 3],[4, 5, 6],[7, 8, 9],];
$x = 5;
foreach ($arr as $sub) {
    foreach ($sub as $elem) {
        if($x == $elem){
            $x = 'true';
        }
    }
}
if($x == 'true'){
    echo $x;
}
else{
    echo 'false';
} */

/* 4 */
$arr = [[3, 7, 2],[9, 4, 6],[1, 8, 5],];
$x = $arr[0][0];
foreach ($arr as $sub) {
    foreach ($sub as $elem) {
        if($x > $elem){
            $x = $elem;
        }
    }
}
echo $x;
?>