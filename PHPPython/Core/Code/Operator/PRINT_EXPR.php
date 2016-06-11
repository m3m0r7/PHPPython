<?php
namespace PHPPython\Code\Operator;

class PRINT_EXPR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode PRINT_EXPR(0x000046)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
