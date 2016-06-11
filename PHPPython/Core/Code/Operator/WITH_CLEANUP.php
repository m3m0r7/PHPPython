<?php
namespace PHPPython\Code\Operator;

class WITH_CLEANUP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode WITH_CLEANUP(0x000051)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
