<?php
namespace PHPPython\Code\Operator;

class CALL_FUNCTION extends \PHPPython\Code\Operator {
    /**
     * executable python opcode CALL_FUNCTION(0x000083)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
