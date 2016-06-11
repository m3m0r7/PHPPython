<?php
namespace PHPPython\Code\Operator;

class EXEC_STMT extends \PHPPython\Code\Operator {
    /**
     * executable python opcode EXEC_STMT(0x000055)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
