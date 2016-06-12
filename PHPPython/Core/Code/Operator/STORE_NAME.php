<?php
namespace PHPPython\Code\Operator;

class STORE_NAME extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_NAME(0x00005A)
     * @return ?
     */
    public function exec () {

        $address = $this->_binaryReader->readShort();
        $this->_invoker->getCodeObject()->names->store($address, array_pop($this->_stacks));

    }
}
