<?php
namespace PHPPython\Code\Operator;

class STORE_DEREF extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_DEREF(0x000089)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
