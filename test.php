<?php

$handle = fopen('test.pyc', 'rb');

require 'PHPPython/Core/PHPPython.php';

$a = new PHPPython\PHPPython('test.pyc');
var_dump($a->getVersion());

var_dump(new PHPPython\Code($a));
