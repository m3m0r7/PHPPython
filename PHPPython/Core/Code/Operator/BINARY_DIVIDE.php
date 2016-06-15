<?php
namespace PHPPython\Code\Operator;

class BINARY_DIVIDE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_DIVIDE(0x000015)
     * @return ?
     */
    public function exec () {
        $rightOperand = array_pop($this->_stacks);
        $leftOperand = array_pop($this->_stacks);

        $this->_stacks[] = $leftOperand / $rightOperand;
    }
}
