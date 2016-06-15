<?php
namespace PHPPython\Code\Operator;

class BINARY_SUBSCR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_SUBSCR(0x000019)
     * @return ?
     */
    public function exec () {
        $rightOperand = array_pop($this->_stacks);
        $leftOperand = array_pop($this->_stacks);
        $this->stacks[] = $leftOperand[$rightOperand];
    }
}
