<?php

namespace PHPPython\Object;
require_once __DIR__ . '/Attr/' . basename(__FILE__);

/**
 * This class supported python tuple.
 */
class PythonTuple extends \ArrayObject {

    public function __toString () {
        $values = $this->getArrayCopy();
        $buildString = '';
        $buildString .= '(';
        $build = [];
        foreach ($values as $value) {
            $build[] = $this->_buildString($value);
        }
        $buildString .= implode(', ', $build);
        $buildString .= ')';
        return $buildString;
    }

    public function getAttr ($callee) {
        return new \PHPPython\Object\Attr\PythonTuple($this, $callee);
    }

    private function _buildString ($value) {
        if (is_array($value) || $value instanceof \ArrayObject) {
            return '(' . $this->_buildString($value) . ')';
        } else if (is_resource($value)) {
            $value = '\'<resource: ' . get_resource_type($value) . '>\'';
        } else if (is_object($value)) {
            $value = '\'<object: ' . get_class($value) . '>\'';
        }
        return $value;
    }

}
