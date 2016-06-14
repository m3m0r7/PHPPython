<?php
namespace PHPPython\Code\Operator;

class IMPORT_NAME extends \PHPPython\Code\Operator {
    /**
     * executable python opcode IMPORT_NAME(0x00006B)
     * @return ?
     */
    public function exec () {
        $address = $this->_binaryReader->readShort();
        var_dump($address, $this->_invoker->getCodeObject()->names[$address]);
        exit();
        // var_dump($this->_invoker->getCodeObject()->names);exit();
    }
}
