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
            $arguments[] = array_pop($this->_stacks);
        }

        $function = array_pop($this->_stacks);
        if (is_callable($function)) {
            $this->stacks[] = call_user_func_array($function, $arguments);
        }

    }
}
