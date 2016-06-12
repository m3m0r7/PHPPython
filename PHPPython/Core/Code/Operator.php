<?php

namespace PHPPython\Code;

class Operator {

    protected $_invoker = null;
    protected $_binaryReader = null;
    protected $_stacks = null;

    public function __construct (Invoker $invoker, array &$stacks, \PHPPython\Utility\BinaryReader $binaryReader) {
        $this->_invoker = $invoker;
        $this->_stacks = &$stacks;
        $this->_binaryReader = $binaryReader;
    }

}
