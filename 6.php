<?php
$name="counter.txt";
$file=fopen($name,"r");
$hits=fscanf($file,'%d');
fclose($file);
$hits[0]++;
$file=fopen($name,"w");
fprintf($file,"%d",$hits[0]);
print"The number of visitors are ".$hits[0];



?>