<?php
namespace PHPPython\Code\Operator;

class POP_BLOCK extends \PHPPython\Code\Operator {
    /**
     * executable python opcode POP_BLOCK(0x000057)
     * @return ?
     */
    public function exec () {
        array_pop($this->_blockStacks);
    }
}
