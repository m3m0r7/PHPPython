<?php
namespace PHPPython\Code\Operator;

class POP_JUMP_IF_TRUE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode POP_JUMP_IF_TRUE(0x000073)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
