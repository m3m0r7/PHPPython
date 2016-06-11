<?php
namespace PHPPython\Code\Operator;

class BINARY_ADD extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_ADD(0x000017)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
