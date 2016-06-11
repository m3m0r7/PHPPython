<?php
namespace PHPPython\Code\Operator;

class PRINT_NEWLINE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode PRINT_NEWLINE(0x000048)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
