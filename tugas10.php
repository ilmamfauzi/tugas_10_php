<?php
$arr = array(1, 3, 8, 2, 5, 7, 4, 0);

print("Sebelum Di Sorting :<br>");
print_r($arr);
print("<br>");

print("<br> Setelah Disorting (Buble Sort) :<br>");
$arr = bubble_sort($arr);
print_r($arr);


function bubble_sort($arr)
{
  $panjang = count($arr);

  for ($a = 0; $a < $panjang; $a++) {
    for ($i = 0; $i <= $panjang - 2; $i++) {
      if ($arr[$i] > $arr[$i + 1]) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$i + 1];
        $arr[$i + 1] = $tmp;
      }
    }
  }
  return $arr;
}
