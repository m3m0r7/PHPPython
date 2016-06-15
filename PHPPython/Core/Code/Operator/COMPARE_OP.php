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
                if ($conditionRight instanceof \PHPPython\Object\PythonDictionary) {
                    $this->_stacks[] = in_array($conditionLeft, array_keys($conditionRight->getArrayCopy()));
                    return;
                }
                throw new \PHPPython\Exception\OpCodeException('Unknown operand object type');
            case 'not in':
                if ($conditionRight instanceof \PHPPython\Object\PythonDictionary) {
                    $this->_stacks[] = in_array($conditionLeft, array_keys($conditionRight->getArrayCopy()));
                    return;
                }
                throw new \PHPPython\Exception\OpCodeException('Unknown operand object type');
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
