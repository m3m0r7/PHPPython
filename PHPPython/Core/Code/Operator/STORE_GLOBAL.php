<?php
namespace PHPPython\Code\Operator;

class STORE_GLOBAL extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_GLOBAL(0x000061)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
