<?php
namespace PHPPython\Code\Operator;

class BINARY_RSHIFT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_RSHIFT(0x00003F)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
