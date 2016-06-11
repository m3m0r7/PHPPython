<?php
namespace PHPPython\Code\Operator;

class END_FINALLY extends \PHPPython\Code\Operator {
    /**
     * executable python opcode END_FINALLY(0x000058)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
