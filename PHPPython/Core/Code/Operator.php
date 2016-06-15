<?php

namespace PHPPython\Code;

class Operator {

    protected $_invoker = null;
    protected $_binaryReader = null;
    protected $_blockStacks = null;


    public function __construct (Invoker $invoker, array &$blockStacks, \PHPPython\Utility\BinaryReader $binaryReader) {
        $this->_invoker = $invoker;
        $this->_blockStacks = &$blockStacks;
        $this->_binaryReader = $binaryReader;
    }

}
