<?php

namespace PHPPython\Code;

class Operator {

    protected $_invoker = null;

    public function __construct (Invoker $invoker) {
        $this->_invoker = $invoker;
    }

}
