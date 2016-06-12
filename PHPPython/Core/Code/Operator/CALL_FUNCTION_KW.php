<?php
namespace PHPPython\Code\Operator;

class CALL_FUNCTION_KW extends \PHPPython\Code\Operator {
    /**
     * executable python opcode CALL_FUNCTION_KW(0x00008D)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
