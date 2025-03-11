<?php
$tomb=array(3, 1, 3, 4, 11);
$indexMax=count(value: $tomb)-1;
$vanE=false;

for($i=0; $i<$indexMax; $i++)
{
    if(5<$tomb[$i] && $tomb[$i]<=9) {
        $vanE = true;
    }
}
if($vanE) {
    
    print("Van benne.");
    print "<br>";
}
else {
    print("Nincs benne.");
        print "<br>";
}