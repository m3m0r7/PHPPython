<?php
namespace PHPPython\Code\Operator;

class UNARY_INVERT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode UNARY_INVERT(0x00000F)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
