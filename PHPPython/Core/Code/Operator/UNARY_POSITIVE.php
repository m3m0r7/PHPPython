<?php
namespace PHPPython\Code\Operator;

class UNARY_POSITIVE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode UNARY_POSITIVE(0x00000A)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
