<?php
namespace PHPPython\Code\Operator;

class UNPACK_SEQUENCE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode UNPACK_SEQUENCE(0x00005C)
     * @return ?
     */
    public function exec () {
        $sequences = $this->_binaryReader->readShort();
        $value = \StackPool::pop();
        $sequenceData = str_split($value, ceil(strlen($value) / $sequences));

        while (($value = array_pop($sequenceData)) !== null) {
            \StackPool::add($value);
        }

    }
}
