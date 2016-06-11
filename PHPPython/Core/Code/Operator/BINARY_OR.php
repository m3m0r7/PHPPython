<?php
namespace PHPPython\Code\Operator;

class BINARY_OR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_OR(0x000042)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
