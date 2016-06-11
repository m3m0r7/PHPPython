<?php
namespace PHPPython\Code\Operator;

class GET_ITER extends \PHPPython\Code\Operator {
    /**
     * executable python opcode GET_ITER(0x000044)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
