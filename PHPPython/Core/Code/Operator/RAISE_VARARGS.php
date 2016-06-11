<?php
namespace PHPPython\Code\Operator;

class RAISE_VARARGS extends \PHPPython\Code\Operator {
    /**
     * executable python opcode RAISE_VARARGS(0x000082)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
