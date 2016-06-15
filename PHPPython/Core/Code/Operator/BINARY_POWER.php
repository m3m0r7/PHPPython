<?php
namespace PHPPython\Code\Operator;

class BINARY_POWER extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_POWER(0x000013)
     * @return ?
     */
    public function exec () {
        $rightOperand = array_pop($this->_stacks);
        $leftOperand = array_pop($this->_stacks);

        $this->_stacks[] = $leftOperand ** $rightOperand;
    }
}
