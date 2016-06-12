<?php
namespace PHPPython\Code\Operator;

class PRINT_NEWLINE_TO extends \PHPPython\Code\Operator {
    /**
     * executable python opcode PRINT_NEWLINE_TO(0x00004A)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
