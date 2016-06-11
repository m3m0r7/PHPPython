<?php
namespace PHPPython\Code\Operator;

class BINARY_AND extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_AND(0x000040)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
