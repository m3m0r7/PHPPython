<?php
namespace PHPPython\Code\Operator;

class BINARY_MULTIPLY extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_MULTIPLY(0x000014)
     * @return ?
     */
    public function exec () {

        $rightOperand = array_pop($this->_stacks);
        $leftOperand = array_pop($this->_stacks);

        $this->_stacks[] = $leftOperand * $rightOperand;

    }
}
