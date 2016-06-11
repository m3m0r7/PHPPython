<?php
namespace PHPPython\Code\Operator;

class INPLACE_POWER extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_POWER(0x000043)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
