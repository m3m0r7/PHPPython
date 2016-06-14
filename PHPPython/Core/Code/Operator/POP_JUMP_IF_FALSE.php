<?php
namespace PHPPython\Code\Operator;

class POP_JUMP_IF_FALSE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode POP_JUMP_IF_FALSE(0x000072)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
