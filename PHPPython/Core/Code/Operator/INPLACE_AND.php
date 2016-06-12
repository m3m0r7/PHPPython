<?php
namespace PHPPython\Code\Operator;

class INPLACE_AND extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_AND(0x00004D)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
