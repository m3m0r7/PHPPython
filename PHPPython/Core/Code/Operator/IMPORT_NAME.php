<?php
namespace PHPPython\Code\Operator;

class IMPORT_NAME extends \PHPPython\Code\Operator {
    /**
     * executable python opcode IMPORT_NAME(0x00006B)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
