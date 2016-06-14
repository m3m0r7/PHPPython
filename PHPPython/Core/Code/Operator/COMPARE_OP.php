<?php
namespace PHPPython\Code\Operator;

class COMPARE_OP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode COMPARE_OP(0x00006A)
     * @return ?
     */
    public function exec () {
        $address = $this->_binaryReader->readShort();
        $operator = \PHPPython\Enum\OpCompare::VALUE[$address];

        $conditionRight = array_pop($this->_stacks);
        $conditionLeft = array_pop($this->_stacks);

        switch ($operator) {
            case '<':
                $this->_stacks[] = $conditionLeft < $conditionRight;
                break;
            case '<=':
                $this->_stacks[] = $conditionLeft <= $conditionRight;
                break;
            case '==':
                $this->_stacks[] = $conditionLeft == $conditionRight;
                break;
            case '!=':
                $this->_stacks[] = $conditionLeft != $conditionRight;
                break;
            case '>':
                $this->_stacks[] = $conditionLeft > $conditionRight;
                break;
            case '>=':
                $this->_stacks[] = $conditionLeft >= $conditionRight;
                break;
            case 'in':
                $this->_stacks[] = in_array($conditionLeft, $conditionRight);
                break;
            case 'not in':
                $this->_stacks[] = !in_array($conditionLeft, $conditionRight);
                break;
            case 'is':
                $this->_stacks[] = $conditionLeft === $conditionRight;
                break;
            case 'is not':
                $this->_stacks[] = $conditionLeft !== $conditionRight;
                break;
            case 'exception match':
                // ?
                break;
            case 'BAD':
                // ?
                break;
        }
    }
}
