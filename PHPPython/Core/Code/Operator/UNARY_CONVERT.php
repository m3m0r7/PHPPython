<?php
namespace PHPPython\Code\Operator;

class UNARY_CONVERT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode UNARY_CONVERT(0x00000D)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
