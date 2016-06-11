<?php
namespace PHPPython\Code\Operator;

class NOP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode NOP(0x000009)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
