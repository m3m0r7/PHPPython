<?php
namespace PHPPython\Code\Operator;

class BINARY_TRUE_DIVIDE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_TRUE_DIVIDE(0x00001B)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
