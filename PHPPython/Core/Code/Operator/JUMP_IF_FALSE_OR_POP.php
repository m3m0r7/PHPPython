<?php
namespace PHPPython\Code\Operator;

class JUMP_IF_FALSE_OR_POP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode JUMP_IF_FALSE_OR_POP(0x00006F)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
