<?php
namespace PHPPython\Code\Operator;

class STORE_SLICE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_SLICE(0x000028)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
