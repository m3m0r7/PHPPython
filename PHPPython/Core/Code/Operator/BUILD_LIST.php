<?php
namespace PHPPython\Code\Operator;

class BUILD_LIST extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BUILD_LIST(0x000067)
     * @return ?
     */
    public function exec () {
        $count = $this->_binaryReader->readShort();
        $list = new \ArrayObject();
        for ($i = 0; $i < $count; $i++) {
            $list->append(\StackPool::pop());
        }

        \StackPool::add($list);
    }
}
