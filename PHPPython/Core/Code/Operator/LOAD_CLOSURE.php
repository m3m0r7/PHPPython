<?php
namespace PHPPython\Code\Operator;

class LOAD_CLOSURE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_CLOSURE(0x000087)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
