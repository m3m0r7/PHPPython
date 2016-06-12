<?php
namespace PHPPython\Code\Operator;

class STORE_NAME extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_NAME(0x00005A)
     * @return ?
     */
    public function exec () {

        $address = $this->_binaryReader->readShort();
        $value = array_pop($this->_stacks);
        $this->_invoker->getCodeObject()->names[$address] = $value;
    }
}
