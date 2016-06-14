<?php

namespace PHPPython\Enum;
require_once __DIR__ . '/Enum.php';

class OpCompare extends \PHPPython\Enum {
    const VALUE = [
         0 => '<',
         1 => '<=',
         2 => '==',
         3 => '!=',
         4 => '>',
         5 => '>=',
         6 => 'in',
         7 => 'not in',
         8 => 'is',
         9 => 'is not',
        10 => 'exception match',
        11 => 'BAD'
    ];
}
