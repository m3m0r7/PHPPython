<?php
namespace PHPPython\Code\Operator;

class STORE_ATTR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_ATTR(0x00005F)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
