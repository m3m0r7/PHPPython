<?php
namespace PHPPython\Code\Operator;

class UNPACK_SEQUENCE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode UNPACK_SEQUENCE(0x00005C)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
