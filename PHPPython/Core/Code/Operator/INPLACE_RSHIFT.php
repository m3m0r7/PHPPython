<?php
namespace PHPPython\Code\Operator;

class INPLACE_RSHIFT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_RSHIFT(0x00004C)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
