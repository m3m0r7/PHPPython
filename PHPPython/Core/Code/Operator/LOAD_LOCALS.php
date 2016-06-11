<?php
namespace PHPPython\Code\Operator;

class LOAD_LOCALS extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_LOCALS(0x000052)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
