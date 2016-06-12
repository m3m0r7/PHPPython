<?php
namespace PHPPython\Code\Operator;

class UNARY_NEGATIVE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode UNARY_NEGATIVE(0x00000B)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
