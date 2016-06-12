<?php
namespace PHPPython\Code\Operator;

class SLICE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode SLICE(0x00001E)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
