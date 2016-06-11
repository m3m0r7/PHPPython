<?php
namespace PHPPython\Code\Operator;

class BINARY_DIVIDE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_DIVIDE(0x000015)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
