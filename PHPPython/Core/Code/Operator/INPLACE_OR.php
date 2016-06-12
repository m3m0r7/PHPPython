<?php
namespace PHPPython\Code\Operator;

class INPLACE_OR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode INPLACE_OR(0x00004F)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
