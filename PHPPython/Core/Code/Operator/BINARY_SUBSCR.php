<?php
namespace PHPPython\Code\Operator;

class BINARY_SUBSCR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_SUBSCR(0x000019)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
