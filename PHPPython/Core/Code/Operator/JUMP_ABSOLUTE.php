<?php
namespace PHPPython\Code\Operator;

class JUMP_ABSOLUTE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode JUMP_ABSOLUTE(0x000071)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
