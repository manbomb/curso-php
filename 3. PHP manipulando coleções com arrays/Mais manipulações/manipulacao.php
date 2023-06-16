<?php

$init = [];

array_push($init, 1);

array_unshift($init, 2);
array_shift($init);

echo implode(".", $init);
