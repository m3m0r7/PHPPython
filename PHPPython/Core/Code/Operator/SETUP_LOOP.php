<?php
namespace PHPPython\Code\Operator;

class SETUP_LOOP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode SETUP_LOOP(0x000078)
     * @return ?
     */
    public function exec () {
        $blockCode = $this->_binaryReader->readShort();
        $this->_blockStacks[] = $blockCode;
    }
}
