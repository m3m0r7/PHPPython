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

        $conditionRight = \StackPool::pop();
        $conditionLeft = \StackPool::pop();

        switch ($operator) {
            case '<':
                \StackPool::add($conditionLeft < $conditionRight);
                break;
            case '<=':
                \StackPool::add($conditionLeft <= $conditionRight);
                break;
            case '==':
                \StackPool::add($conditionLeft == $conditionRight);
                break;
            case '!=':
                \StackPool::add($conditionLeft != $conditionRight);
                break;
            case '>':
                \StackPool::add($conditionLeft > $conditionRight);
                break;
            case '>=':
                \StackPool::add($conditionLeft >= $conditionRight);
                break;
            case 'in':
                if ($conditionRight instanceof \PHPPython\Object\PythonDictionary) {
                    \StackPool::add(in_array($conditionLeft, array_keys($conditionRight->getArrayCopy())));
                    return;
                }
                throw new \PHPPython\Exception\OpCodeException('Unknown operand object type');
            case 'not in':
                if ($conditionRight instanceof \PHPPython\Object\PythonDictionary) {
                    \StackPool::add(in_array($conditionLeft, array_keys($conditionRight->getArrayCopy())));
                    return;
                }
                throw new \PHPPython\Exception\OpCodeException('Unknown operand object type');
            case 'is':
                \StackPool::add($conditionLeft === $conditionRight);
                break;
            case 'is not':
                \StackPool::add($conditionLeft !== $conditionRight);
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
