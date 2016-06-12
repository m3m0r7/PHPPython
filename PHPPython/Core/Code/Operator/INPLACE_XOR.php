<?php
namespace PHPPython\Code\Operator;

class INPLACE_XOR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_XOR(0x00004E)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
