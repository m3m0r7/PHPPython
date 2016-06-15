<?php
namespace PHPPython\Code\Operator;

class MAKE_FUNCTION extends \PHPPython\Code\Operator {
    /**
     * executable python opcode MAKE_FUNCTION(0x000084)
     * @return ?
     */
    public function exec () {
        $argumentCount = $this->_binaryReader->readShort();

        $arguments = [];
        for ($i = 0; $i < $argumentCount; $i++) {
            $arguments[] = array_pop($this->_stacks);
        }

        $function = array_pop($this->_stacks);

        // wrap invoker
        $this->_stacks[] = new \PHPPython\Code\Invoker(new \PHPPython\Code($function));

    }
}
