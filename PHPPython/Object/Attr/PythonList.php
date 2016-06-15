<?php

namespace PHPPython\Object\Attr;
require_once __DIR__ . '/../../Object/Attr.php';

/**
 * This class supported python Attr.
 */
class PythonList extends \PHPPython\Object\Attr {

    public function append ($value) {
        $this->getParent()[] = $value;
    }

    public function extend ($object) {
        foreach ($object as $value) {
            $this->getParent()[] = $value;
        }
    }

    public function pop () {
        $last = $this->getParent()->count() - 1;
        $top = $this->getParent()->offsetGet($last);
        $this->getParent()->offsetUnset($last);
        return $top;
    }

    public function reverse () {
        $this->getParent()->exchangeArray(array_reverse($this->getParent()->getArrayCopy()));
    }
}
