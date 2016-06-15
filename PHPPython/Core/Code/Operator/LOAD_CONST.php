<?php
namespace PHPPython\Code\Operator;

class LOAD_CONST extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_CONST(0x000064)
     * @return ?
     */
    public function exec () {
        $address = $this->_binaryReader->readShort();
        $this->_stacks[] = $this->_invoker->getCodeObject()->consts[$address];
    }
}
