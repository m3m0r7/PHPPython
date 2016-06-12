<?php
namespace PHPPython\Code\Operator;

class UNARY_NOT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode UNARY_NOT(0x00000C)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
