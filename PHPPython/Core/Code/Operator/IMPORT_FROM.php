<?php
namespace PHPPython\Code\Operator;

class IMPORT_FROM extends \PHPPython\Code\Operator {
    /**
     * executable python opcode IMPORT_FROM(0x00006C)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
