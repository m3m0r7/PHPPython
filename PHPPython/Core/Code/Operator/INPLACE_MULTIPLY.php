<?php
namespace PHPPython\Code\Operator;

class INPLACE_MULTIPLY extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_MULTIPLY(0x000039)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
