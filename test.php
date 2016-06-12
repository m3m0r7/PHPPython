<?php

$handle = fopen('test.pyc', 'rb');

require 'PHPPython/Core/PHPPython.php';
require 'PHPPython/Core/Code/Invoker.php';
//
// $opcode = new \PHPPython\Enum\OpCode();
// foreach ($opcode->getValues() as $key => $value) {
//     $name = $opcode->getName($value);
//     $text ='<?php
// namespace PHPPython\Code\Operator;
//
// class ' . $name . ' extends \PHPPython\Code\Operator {
//     /**
//      * executable python opcode ' . $name . '(' . sprintf('0x%06X', $value) . ')
//      * @return ?
//      */
//     public function exec () {
//         throw new \PHPPython\Exception\CodeException(\'Not implement "\' . __CLASS__ . \'"\');
//     }
// }
// ';
//     file_put_contents('PHPPython/Core/Code/Operator/' . $name . '.php', $text);
// };
// exit();


system('python -m compileall test.py');
$a = new PHPPython\PHPPython('test.pyc');
var_dump('Python version : ' . $a->getVersion());
(new PHPPython\Code\Invoker(new PHPPython\Code($a)))->invoke();
