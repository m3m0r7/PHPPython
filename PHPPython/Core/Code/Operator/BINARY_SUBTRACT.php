<?php
namespace PHPPython\Code\Operator;

class BINARY_SUBTRACT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_SUBTRACT(0x000018)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
