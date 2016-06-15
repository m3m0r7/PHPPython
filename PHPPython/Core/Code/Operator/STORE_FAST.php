<?php
namespace PHPPython\Code\Operator;

class STORE_FAST extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_FAST(0x00007D)
     * @return ?
     */
    public function exec () {
        $address = $this->_binaryReader->readShort();
        $value = array_pop($this->_stacks);
        $this->_invoker->getCodeObject()->storeVarnamehashes($address, $value);
    }
}
