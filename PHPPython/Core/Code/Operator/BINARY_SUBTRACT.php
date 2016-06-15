<?php
namespace PHPPython\Code\Operator;

class BINARY_SUBTRACT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_SUBTRACT(0x000018)
     * @return ?
     */
    public function exec () {
        $rightOperand = array_pop($this->_stacks);
        $leftOperand = array_pop($this->_stacks);

        $this->_stacks[] = $leftOperand - $rightOperand;
    }
}
