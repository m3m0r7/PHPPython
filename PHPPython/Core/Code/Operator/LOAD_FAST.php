<?php
namespace PHPPython\Code\Operator;

class LOAD_FAST extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_FAST(0x00007C)
     * @return ?
     */
    public function exec () {
        $address = $this->_binaryReader->readShort();
        $name = $this->_invoker->getCodeObject()->varnames[$address];
        $this->_stacks[] = $this->_invoker->getCodeObject()->varnamehashes[$name];
    }
}
