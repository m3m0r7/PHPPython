<?php
namespace PHPPython\Code\Operator;

class GET_ITER extends \PHPPython\Code\Operator {
    /**
     * executable python opcode GET_ITER(0x000044)
     * @return ?
     */
    public function exec () {
        $this->_stacks[] = new \ArrayIterator(array_pop($this->_stacks));
    }
}
