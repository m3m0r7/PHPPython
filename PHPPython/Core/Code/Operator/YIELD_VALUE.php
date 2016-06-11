<?php
namespace PHPPython\Code\Operator;

class YIELD_VALUE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode YIELD_VALUE(0x000056)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
