<?php
namespace PHPPython\Code\Operator;

class STORE_MAP extends \PHPPython\Code\Operator {
    /**
     * executable python opcode STORE_NAME(0x000036)
     * @return ?
     */
    public function exec () {

        $key = \StackPool::pop();
        $value = \StackPool::pop();

        // load TOS
        // add refstack to dictionary key and value pairs.
        \StackPool::set($key, $value);

    }
}
