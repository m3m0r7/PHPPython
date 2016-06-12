<?php
namespace PHPPython\Code\Operator;

class LOAD_NAME extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_NAME(0x000065)
     * @return ?
     */
    public function exec () {
        $address = $this->_binaryReader->readShort();
        $this->_stacks[] = $this->_invoker->getCodeObject()->names[$address];
    }
}
