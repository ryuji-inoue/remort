<?php

/*
    $count = 0;

    while ($count <101) {
        
        if ($count ==20) {
            break;
        }

        if ($count % 3==0) {
            $count++;
            continue;
            // $countが5の時、$countに1を足す処理をし、スキップをする。
        }

        echo $count. '<br />';
        $count++;
    }


$num = 0;
do {
  echo $num . '<br />';
  $num++;
} while ($num < 3);

*/
    $count = 0;
    $i =$j = 0;
    $result="";

for ($i = 0; $i < 5; $i++) {

    for ($j = 0; $j < 5; $j++) {

        $result=$result. "●";

        if ($j == 4) {
            echo $result. '<br />';
            $result="";
            continue;
            // $countが5の時、$countに1を足す処理をし、スキップをする。
        }

    }
}