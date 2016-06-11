<?php
namespace PHPPython\Code\Operator;

class PRINT_ITEM extends \PHPPython\Code\Operator {
    /**
     * executable python opcode PRINT_ITEM(0x000047)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
