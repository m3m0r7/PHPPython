<?php
namespace PHPPython\Code\Operator;

class BUILD_SLICE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BUILD_SLICE(0x000085)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
