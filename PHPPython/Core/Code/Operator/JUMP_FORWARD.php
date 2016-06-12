<?php
namespace PHPPython\Code\Operator;

class JUMP_FORWARD extends \PHPPython\Code\Operator {
    /**
     * executable python opcode JUMP_FORWARD(0x00006E)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
