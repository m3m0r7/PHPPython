<?php
namespace PHPPython\Code\Operator;

class JUMP_IF_TRUE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode JUMP_IF_TRUE(0x000070)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
