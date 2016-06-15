<?php
namespace PHPPython\Code\Operator;

class CALL_FUNCTION extends \PHPPython\Code\Operator {
    /**
     * executable python opcode CALL_FUNCTION(0x000083)
     * @return ?
     */
    public function exec () {
        $argumentCount = $this->_binaryReader->readShort();
        $arguments = [];
        for ($i = 0; $i < $argumentCount; $i++) {
            $arguments[] = \StackPool::pop();
        }

        $function = \StackPool::pop();
        if (is_callable($function)) {
            \StackPool::add(call_user_func_array($function, array_reverse($arguments)));
            return;
        }

        // wtf here ??
        throw new \PHPPython\Exception\OpCodeException('doesn\'t call ' . get_class($function) . '. You need to define to __invoke magic method by PHP in class');

    }
}
