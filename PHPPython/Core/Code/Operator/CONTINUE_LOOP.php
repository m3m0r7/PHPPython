<?php
namespace PHPPython\Code\Operator;

class CONTINUE_LOOP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode CONTINUE_LOOP(0x000077)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
