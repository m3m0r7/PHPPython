<?php
namespace PHPPython\Code\Operator;

class BINARY_ADD extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BINARY_ADD(0x000017)
     * @return ?
     */
    public function exec () {
        $rightOperand = array_pop($this->_stacks);
        $leftOperand = array_pop($this->_stacks);

        $this->_stacks[] = $leftOperand + $rightOperand;
    }
}
