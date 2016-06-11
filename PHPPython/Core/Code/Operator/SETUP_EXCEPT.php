<?php
namespace PHPPython\Code\Operator;

class SETUP_EXCEPT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode SETUP_EXCEPT(0x000079)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
