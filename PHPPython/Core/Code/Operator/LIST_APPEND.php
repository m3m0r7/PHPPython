<?php
namespace PHPPython\Code\Operator;

class LIST_APPEND extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LIST_APPEND(0x000012)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
