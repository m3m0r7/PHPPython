<?php
namespace PHPPython\Code\Operator;

class STORE_NAME extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_NAME(0x00005A)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
