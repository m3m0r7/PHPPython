<?php
namespace PHPPython\Code\Operator;

class FOR_ITER extends \PHPPython\Code\Operator {
    /**
     * executable python opcode FOR_ITER(0x00005D)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
