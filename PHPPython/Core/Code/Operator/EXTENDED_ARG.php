<?php
namespace PHPPython\Code\Operator;

class EXTENDED_ARG extends \PHPPython\Code\Operator {
    /**
     * executable python opcode EXTENDED_ARG(0x00008F)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
