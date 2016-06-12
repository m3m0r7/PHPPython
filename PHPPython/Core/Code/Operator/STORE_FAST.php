<?php
namespace PHPPython\Code\Operator;

class STORE_FAST extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_FAST(0x00007D)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
