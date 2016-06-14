<?php
namespace PHPPython\Code\Operator;

class GET_ITER extends \PHPPython\Code\Operator {
    /**
     * executable python opcode GET_ITER(0x000044)
     * @return ?
     */
    public function exec () {
        $value = array_pop($this->_stacks);

        // if not implemented Iterator, wrap ArrayIterator.
        if (!is_object($value) || !in_array('Iterator', class_implements($value, false))) {
            $value =  new \ArrayIterator($value);
        }
        $this->_stacks[] = $value;
    }
}
