<?php
namespace PHPPython\Code\Operator;

class IMPORT_STAR extends \PHPPython\Code\Operator {
    /**
     * executable python opcode IMPORT_STAR(0x000054)
     * @return ?
     */
    public function exec () {
        throw new \PHPPython\Exception\CodeException('Not implement "' . __CLASS__ . '"');
    }
}
