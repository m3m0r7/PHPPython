<?php
namespace PHPPython\Code\Operator;

class INPLACE_LSHIFT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_LSHIFT(0x00004B)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
