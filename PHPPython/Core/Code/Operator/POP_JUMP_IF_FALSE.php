<?php
namespace PHPPython\Code\Operator;

class POP_JUMP_IF_FALSE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode POP_JUMP_IF_FALSE(0x000072)
     * @return ?
     */
    public function exec () {

        $offset = $this->_binaryReader->readShort();
        $value = array_pop($this->_stacks);
        if ($value === false) {
            $this->_binaryReader->offset($offset);
        }

    }
}
