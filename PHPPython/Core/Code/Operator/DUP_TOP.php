<?php
namespace PHPPython\Code\Operator;

class DUP_TOP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode DUP_TOP(0x000004)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
