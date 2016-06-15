<?php
namespace PHPPython\Code\Operator;

class MAKE_FUNCTION extends \PHPPython\Code\Operator {
    /**
     * executable python opcode MAKE_FUNCTION(0x000084)
     * @return ?
     */
    public function exec () {
        $argumentCount = $this->_binaryReader->readShort();

        $function = \StackPool::current();

        // wrap invoker
        \StackPool::add(new \PHPPython\Code\Invoker(new \PHPPython\Code($function)));

    }
}
