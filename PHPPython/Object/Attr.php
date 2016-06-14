<?php

namespace PHPPython\Object;
require_once __DIR__ . '/../Exception/PropertyException.php';

/**
 * This class supported python Attr.
 */
class Attr {

    protected $_parentObject = null;
    protected $_callee = null;

    public function __construct ($parentObject, $callee) {
        $this->_parentObject = $parentObject;
        $this->_callee = $callee;

        $this->__init__(array_slice(func_get_args(), 2));
    }

    public function __destruct () {
        $this->__del__();
    }

    public function __init__ () {
        // nothing...
    }

    public function __del__ () {
        // nothing...
    }

    public function __repr__ () {
        // nothing...
    }

    public function __nonzero__ () {
        // nothing...
    }

    public function __unicode__ () {
        // nothing...
    }

    public function __lt__ () {
        // nothing...
    }

    public function __le__ () {
        // nothing...
    }

    public function __eq__ () {
        // nothing...
    }

    public function __ne__ () {
        // nothing...
    }

    public function __gt__ () {
        // nothing...
    }
    public function __ge__ () {
        // nothing...
    }

    public function __cmp__ () {
        // nothing...
    }

    public function __toString () {
        switch ($this->_callee) {
            case '__class__':
                return __CLASS__;
            case '__doc__':
                // use reflection class
                return (new \ReflectionClass($this))->getDocComment();
            case '__hash__':
                // return hash
                return sprintf('%u', crc32(spl_object_hash($this)));
            case '__php_hash__':
                return spl_object_hash($this);
            case '__php_info__':
                // return PHP info this class
                return var_export($this, true);
        }
        if (method_exists($this, $this->_callee)) {
            return '<Attr: ' . get_class($this) . '::' . $this->_callee . '>';
        }
        throw new \PHPPython\Exception\PropertyException('Unknown property or callee type "' . $this->_callee . '"');
    }

    public function __invoke () {
        return call_user_func_array(array($this, $this->_callee), func_get_args());
    }

    public function getParent () {
        return $this->_parentObject;
    }

}
