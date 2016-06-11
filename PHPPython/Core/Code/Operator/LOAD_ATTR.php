<?php
namespace PHPPython\Code\Operator;

class LOAD_ATTR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode LOAD_ATTR(0x000069)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
