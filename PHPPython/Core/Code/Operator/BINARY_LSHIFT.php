<?php
namespace PHPPython\Code\Operator;

class BINARY_LSHIFT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_LSHIFT(0x00003E)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
