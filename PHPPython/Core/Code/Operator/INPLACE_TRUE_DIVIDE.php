<?php
namespace PHPPython\Code\Operator;

class INPLACE_TRUE_DIVIDE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_TRUE_DIVIDE(0x00001D)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
