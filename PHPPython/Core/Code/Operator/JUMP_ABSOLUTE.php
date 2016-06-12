<?php
namespace PHPPython\Code\Operator;

class JUMP_ABSOLUTE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode JUMP_ABSOLUTE(0x000071)
     * @return ?
     */
    public function exec () {
        $offset = $this->_binaryReader->readShort();
        $this->_binaryReader->offset($offset);
    }
}
