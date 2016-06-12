<?php
namespace PHPPython\Code\Operator;

class LOAD_FAST extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_FAST(0x00007C)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
