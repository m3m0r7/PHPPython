<?php
namespace PHPPython\Code\Operator;

class POP_JUMP_IF_TRUE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode POP_JUMP_IF_TRUE(0x000073)
     * @return ?
     */
    public function exec () {

        $offset = $this->_binaryReader->readShort();
        $value = \StackPool::pop();
        if ($value === true) {
            $this->_binaryReader->offset($offset);
        }

    }
}
