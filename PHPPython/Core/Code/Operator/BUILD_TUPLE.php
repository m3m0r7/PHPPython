<?php
namespace PHPPython\Code\Operator;

class BUILD_TUPLE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BUILD_TUPLE(0x000066)
     * @return ?
     */
    public function exec () {
        $count = $this->_binaryReader->readShort();
        $tuple = new \ArrayObject();
        for ($i = 0; $i < $count; $i++) {
            $tuple->append(\StackPool::pop());
        }
        \StackPool::add($tuple);
    }
}
