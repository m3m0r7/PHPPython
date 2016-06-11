<?php
namespace PHPPython\Code\Operator;

class LOAD_GLOBAL extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_GLOBAL(0x000074)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
