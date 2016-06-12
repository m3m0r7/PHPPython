<?php
namespace PHPPython\Code\Operator;

class CALL_FUNCTION_VAR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode CALL_FUNCTION_VAR(0x00008C)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
