<?php
namespace PHPPython\Code\Operator;

class BINARY_XOR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_XOR(0x000041)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
