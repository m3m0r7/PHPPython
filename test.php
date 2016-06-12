<?php

$handle = fopen('test.pyc', 'rb');

require 'PHPPython/Core/PHPPython.php';
require 'PHPPython/Core/Code/Invoker.php';

system('python -m compileall test.py');
$a = new PHPPython\PHPPython('test.pyc');
var_dump('Python version : ' . $a->getVersion());
(new PHPPython\Code\Invoker(new PHPPython\Code($a)))->invoke();
