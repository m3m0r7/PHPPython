<?php
namespace PHPPython\Code\Operator;

class COMPARE_OP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode COMPARE_OP(0x00006A)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
