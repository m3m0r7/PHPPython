<?php
namespace PHPPython\Code\Operator;

class BREAK_LOOP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode BREAK_LOOP(0x000050)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
