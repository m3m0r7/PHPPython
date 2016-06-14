<?php

namespace PHPPython\Object;

/**
 * This class supported python Attr.
 */
class Attr {

    protected $_parentObject = null;
    protected $_callee = null;

    public function __construct ($parentObject, $callee) {
        $this->_parentObject = $parentObject;
        $this->_callee = $callee;
    }

    public function __toString () {
        return '<Attr: ' . get_class($this) . '::' . $this->_callee . '>';
    }

    public function __invoke () {
        return call_user_func_array(array($this, $this->_callee), func_get_args());
    }

    public function getParent () {
        return $this->_parentObject;
    }

}
