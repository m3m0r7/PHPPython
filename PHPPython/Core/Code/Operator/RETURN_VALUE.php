<?php
namespace PHPPython\Code\Operator;

class RETURN_VALUE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode RETURN_VALUE(0x000053)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
