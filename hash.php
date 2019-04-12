<?php
error_reporting(0);
echo "\nCoded By VanGans\n\n";
function unhex($str='',$code='') {
  $all=explode("g",$str);
  $head=hexdec($all[0])-$code;
  $content=$all[1];
  if($head==(strlen($content)/2)) {
    for($i=0;$i<=$head-1;$i++) {
          $t
.=chr(hexdec(substr($content,$i*2,2))-$code);
        }
        $t =strrev($t);
  }
  return $t;
}
echo "Hashing...\n";
sleep(2);
echo "\n $argv[1] => ".unhex($argv[1], 82)."\n\n";
?>
