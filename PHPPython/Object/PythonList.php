<?php

namespace PHPPython\Object;
require_once __DIR__  . '/PythonObject.php';
require_once __DIR__ . '/Attr/' . basename(__FILE__);

/**
 * This class supported python list.
 */
class PythonList extends \PHPPython\Object\PythonObject {

    public function __toString () {
        $values = $this->getArrayCopy();
        $buildString = '';
        $buildString .= '[';
        $build = [];
        foreach ($values as $value) {
            $build[] = $this->_buildString($value);
        }
        $buildString .= implode(', ', $build);
        $buildString .= ']';
        return $buildString;
    }

    private function _buildString ($value) {
        if (is_array($value) || $value instanceof \ArrayObject) {
            return '[' . $this->_buildString($value) . ']';
        } else if (is_resource($value)) {
            $value = '\'<resource: ' . get_resource_type($value) . '>\'';
        } else if (is_object($value)) {
            $value = '\'<object: ' . get_class($value) . '>\'';
        } else if (is_string($value)) {
            $value = '\'' . addcslashes($value, '\'') . '\'';
        }
        return $value;
    }

}
