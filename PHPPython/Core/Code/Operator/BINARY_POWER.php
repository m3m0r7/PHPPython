<?php
namespace PHPPython\Code\Operator;

class BINARY_POWER extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_POWER(0x000013)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
