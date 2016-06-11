<?php
namespace PHPPython\Code\Operator;

class LOAD_DEREF extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_DEREF(0x000088)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
