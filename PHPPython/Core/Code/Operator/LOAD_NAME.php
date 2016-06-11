<?php
namespace PHPPython\Code\Operator;

class LOAD_NAME extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_NAME(0x000065)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
