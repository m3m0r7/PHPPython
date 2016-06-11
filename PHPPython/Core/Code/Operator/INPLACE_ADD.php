<?php
namespace PHPPython\Code\Operator;

class INPLACE_ADD extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_ADD(0x000037)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
