<?php
namespace PHPPython\Code\Operator;

class STORE_SUBSCR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_SUBSCR(0x00003C)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
