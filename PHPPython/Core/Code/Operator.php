<?php

namespace PHPPython\Code;

class Operator {

    protected $_invoker = null;
    protected $_binaryReader = null;
    protected $_blockStacks = null;


    public function __construct (Invoker $invoker, array &$stacks, array &$blockStacks, \PHPPython\Utility\BinaryReader $binaryReader) {
        $this->_invoker = $invoker;
        $this->_stacks = &$stacks;
        $this->_blockStacks = &$blockStacks;
        $this->_binaryReader = $binaryReader;
    }

}
