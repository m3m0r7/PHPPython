<?php
namespace PHPPython\Code\Operator;

class INPLACE_DIVIDE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_DIVIDE(0x00003A)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
