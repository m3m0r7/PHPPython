<?php
namespace PHPPython\Code\Operator;

class FOR_ITER extends \PHPPython\Code\Operator {
    /**
     * executable python opcode FOR_ITER(0x00005D)
     * @return ?
     */
    public function exec () {
        $byteCodeCounter = $this->_binaryReader->readShort();
        $iter = array_pop($this->_stacks);

        if (!$iter->valid()){
            $this->_binaryReader->seek($byteCodeCounter);
            return;
        }

        // add iterator to stack
        $this->_stacks[] = $iter;

        // add current value to stack
        $this->_stacks[] = $iter->current();
        $iter->next();
    }
}
