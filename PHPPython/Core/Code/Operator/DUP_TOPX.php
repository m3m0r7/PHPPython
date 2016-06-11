<?php
namespace PHPPython\Code\Operator;

class DUP_TOPX extends \PHPPython\Code\Operator {
    /**
     * executable python opcode DUP_TOPX(0x000063)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
