<?php
namespace PHPPython\Code\Operator;

class INPLACE_MODULO extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_MODULO(0x00003B)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
