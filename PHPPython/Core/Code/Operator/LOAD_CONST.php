<?php
namespace PHPPython\Code\Operator;

class LOAD_CONST extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_CONST(0x000064)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
