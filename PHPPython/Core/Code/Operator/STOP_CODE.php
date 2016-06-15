<?php
namespace PHPPython\Code\Operator;

class STOP_CODE extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STOP_CODE(0x000000)
     * @return ?
     */
    public function exec () {
        $this->_invoker->debug();
        throw new \PHPPython\Exception\CodeException('System Error!');
    }
}
