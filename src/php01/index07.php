<?php

function exam($top,$bottom, $height)
{
    echo ($top+$bottom)*$height/2;
}

$top=4;
$bottom=6;
$height=8;

exam($top,$bottom, $height);
