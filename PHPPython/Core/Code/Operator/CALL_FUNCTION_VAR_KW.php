<?php
namespace PHPPython\Code\Operator;

class CALL_FUNCTION_VAR_KW extends \PHPPython\Code\Operator {
    /**
     * executable python opcode CALL_FUNCTION_VAR_KW(0x00008E)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
