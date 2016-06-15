<?php
namespace PHPPython\Code\Operator;

class POP_TOP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode POP_TOP(0x000001)
     * @return ?
     */
    public function exec () {
        \StackPool::pop();
    }
}
