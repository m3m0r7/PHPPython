<?php
namespace PHPPython\Code\Operator;

class INPLACE_SUBTRACT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_SUBTRACT(0x000038)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
