<?php
namespace PHPPython\Code\Operator;

class STORE_MAP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_NAME(0x000036)
     * @return ?
     */
    public function exec () {

        $key = array_pop($this->_stacks);
        $value = array_pop($this->_stacks);

        // load TOS
        // add refstack to dictionary key and value pairs.
        current($this->_stacks)->offsetSet($key, $value);

    }
}
