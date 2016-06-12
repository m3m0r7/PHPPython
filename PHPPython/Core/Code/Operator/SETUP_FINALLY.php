<?php
namespace PHPPython\Code\Operator;

class SETUP_FINALLY extends \PHPPython\Code\Operator {
    /**
     * executable python opcode SETUP_FINALLY(0x00007A)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
