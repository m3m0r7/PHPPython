<?php
namespace PHPPython\Code\Operator;

class DELETE_GLOBAL extends \PHPPython\Code\Operator {
    /**
     * executable python opcode DELETE_GLOBAL(0x000062)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
