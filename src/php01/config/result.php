<?php

$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
$set = htmlspecialchars($_GET['set'], ENT_QUOTES);
$number = htmlspecialchars($_GET['number'], ENT_QUOTES);

print "会社名は" . $company . "ご希望商品は". $set. "注文数". $number ."ですね";